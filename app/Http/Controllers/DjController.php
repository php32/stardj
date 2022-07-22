<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\Dj;

class DjController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setting()
    {
        $id = auth()->user()->id;
        // dd($id);
        $user = User::find($id);
        return view('dj/setting',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id); 
        return view('admin/DJ/edit', compact('user'));  
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
        $fileName = '';
        $logoName = '';
        $request->validate([  
            'first_name'=>'required',  
            'last_name'=>'required', 
            'email' => 'email'
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

        if($user->logo){
            if($request->has('logo') && $request->remove_logo == '1')
            {
                if($user->logo){
                    unlink("uploads/logos/".$user->logo);
                }
                $logoName = time().'.'.$request->logo->extension();  
                $request->logo->move(public_path('uploads/logos/'), $logoName);
            } 
            else
            {
                if($request->remove_logo == '1'){
                    $logoName = null;
                }
                else{
                    if($request->has('logo')){
                        $logoName = time().'.'.$request->logo->extension();  
                        $request->logo->move(public_path('uploads/logos/'), $logoName);
                    }
                    else{
                        $logoName = $user->logo;
                    }
                }
            }
        }
        else{
            if($request->has('logo')) 
            {
                $logoName = time().'.'.$request->logo->extension();  
                $request->logo->move(public_path('uploads/logos/'), $logoName);
            }
        }

        $user->first_name = $request->first_name;  
        $user->last_name = $request->last_name;  
        $user->name = $request->first_name. ' ' .$request->last_name;
        $user->email = $request->email;  
        $user->contact_number = $request->contact_number;
        $user->file = $fileName;
        $user->logo = $logoName;
        
        $user->save();

        session()->put('success','DJ details changed successfully.');
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
            return redirect()->back();  
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

        return redirect(route('DJ-show'));
    }

    /**
     * Display a profile details of DJ.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $id = auth()->user()->id;
        $user_details = Dj::where('user_id',$id)->get();
        $user = $user_details[0];

        return view('dj/profile', compact('user'));  
    }


    /**
     * Display a profile details of DJ.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        $value = $request->value;
        $column = $request->column;
        $id = $request->user_id;

        if($value == ''){
            return response()->json(['column' => $column]);
        }

        $dj = Dj::where('user_id', '=', auth()->user()->id)->update([$column => $request->value]); 
        return response()->json(['column' => $column, 'value' => 1]);
    }

    /**
     * Display a profile details of DJ.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateFile(Request $request)
    {
        if($request->ajax()){
            $data = $request->file('file');
            $column = $request->column;
            $extension = $data->getClientOriginalExtension();

            if($column == 'profile_picture'){
                $fileName = time().'_profile.'.$extension;
                $data->move(public_path('uploads/profile_picture/'),$fileName);
            }

            if($column == 'logo'){
                $fileName = time().'_logo.'.$extension;
                $data->move(public_path('uploads/logos/'),$fileName);
            }

            $dj = Dj::where('user_id', '=', auth()->user()->id)->update([$column => $fileName]);
        }
    }

    /**
     * Display a profile details of DJ.
     *
     * @return \Illuminate\Http\Response
     */
    public function upcomingEvent()
    {
        // $id = auth()->user()->id;
        // // dd($id);
        // $user = User::find($id);
        return view('DJ/upcoming_event');
    }
}
