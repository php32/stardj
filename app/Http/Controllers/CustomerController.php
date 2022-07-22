<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use DB;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spotify;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::whereHas('roles' , function($q){
           $q->whereName('user');
        })->get();
        return view('admin/customer/list',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/customer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $fileName = '';
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required | email',
            'contact_number' => 'required',
            'password' => 'required | min:8',
            'password_confirmation' => 'required | min:8'
        ]);

        if($request->has('profile_picture')) 
        {
            $fileName = time().'.'.$request->profile_picture->extension();  
            $request->profile_picture->move(public_path('uploads/profile_picture/'), $fileName); 
        }    

        $data = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'name' => $request->first_name. ' ' .$request->last_name,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'password' => bcrypt($request->password),
            'file' => $fileName
        );

        $User = User::create($data);
        $role = Role::where(['name' => 'User'])->first();

        $User->assignRole($role->name);
        // session()->put('success','Customer created successfully.');
        
        return redirect(route('customer-show'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::find($id); 
        return view('admin/customer/edit', compact('user'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all());
        $fileName = '';
        $request->validate([  
            'first_name'=>'required',  
            'last_name'=>'required', 
            'email' => 'required|email',
            // 'contact_number' => 'required',
        ]); 

        $user = User::find($id);  

        if($user->file)
        {
            if($request->has('profile_picture') && $request->remove_image == '1') 
            {
                if($user->file){
                    unlink("uploads/profile_picture/".$user->file);
                }
                $fileName = time().'.'.$request->profile_picture->extension();  
                $request->profile_picture->move(public_path('uploads/profile_picture/'), $fileName);
            } 
            else
            {
                if($request->remove_image == '1'){
                   $fileName = null; 
                }
                else{
                    if($request->has('profile_picture')){
                        $fileName = time().'.'.$request->profile_picture->extension();  
                        $request->profile_picture->move(public_path('uploads/profile_picture/'), $fileName);
                    }else{
                        $fileName = $user->file;
                    }
                    
                }
            }
        }else{
            if($request->has('profile_picture')) 
            {
                $fileName = time().'.'.$request->profile_picture->extension();  
                $request->profile_picture->move(public_path('uploads/profile_picture/'), $fileName);
            }
        }
        // $user = User::find($id);  

        $user->first_name = $request->first_name;  
        $user->last_name = $request->last_name;  
        $user->name = $request->first_name. ' ' .$request->last_name;
        $user->email = $request->email;  
        $user->contact_number = $request->contact_number;
        $user->file = $fileName;  
        
        $user->save();
        session()->put('success','Customer details changed successfully.');
        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_pass(Request $request, $id)
    {
        $request->validate([   
            'password' => 'required',
            'new_password' => 'required|min:8|different:password',
            'password_confirmation' => 'required|min:8|same:new_password'    
        ]); 

        $data = $request->all();

        $user = User::find($id);
        if (!Hash::check($data['password'], $user->password)) {
            return back()->with('error', 'Please enter valid current password.');
        } else {
            $user->update([
                'password' => bcrypt($request->new_password),
            ]);
            session()->put('success','Password Changed successfully.');
            return redirect()->back()->with('success','password has been updated!');  
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();  

        return redirect(route('customer-show'));
    }


    public function addEvent(Request $request)
    {
        $user = auth()->user()->id; 

        $this->validate($request,[
            'venue_name' => 'required',
            'contact_name' => 'required',
            'contact_number' => 'required',
            'parking' => 'required',
            'event_name' => 'required',
            'event_date' => 'required'
        ]);

        $data = array(
            'user_id' => $user,
            'venue_name' => $request->venue_name,
            'contact_name' => $request->contact_name,
            'contact_number' => $request->contact_number,
            'parking' => $request->parking,
            'event_name' => $request->event_name,
            'event_date' => $request->event_date
        );

        $event = Event::create($data);
        return redirect()->back();
    }


    public function events() {
        return view('customer/event');
    }

    public function setting() {
        return view('customer.setting');
    }

    public function songsIdea()
    {
        $songs = Spotify::searchTracks('Closed on Sunday')->get();
        dd($songs);

        return view('customer.songs-ideas');
    }


}