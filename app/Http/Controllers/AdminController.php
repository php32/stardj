<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\CustomerPipeline;
use App\Models\Customers;
use App\Models\Event;
use App\Models\Package;
use App\Models\Sales_pipeline;
use App\Models\User;
use App\Models\Dj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['role:admin'])->except('profile');
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('setting');
    }

    public function setting()
    {
        $id = auth()->user()->id;
        $user = User::find($id);
        return view('admin/setting', compact('user'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        session()->put('success','Admin details changed successfully.');
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
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function salesPipeline()
    {
        $users = Customers::leftjoin('event_details', 'customers.customer_id', '=', 'event_details.user_id')
            ->where('customers.isDelete', '0')
            ->groupBy('customers.customer_id')
            ->get();

        return view('admin/sales_pipeline', compact('users'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function salesPipelineUpdate(Request $request)
    {
        $lead_id = $request->lead_id;
        $container = $request->container_id;

        $update = Customers::find($lead_id);

        if($container == 'lead_in'){
            $container = 1;
        }elseif($container == 'contact_made'){
            $container = 2;
        }elseif($container == 'quoted'){
            $container = 3;
        }elseif($container == 'added'){
            $container = 4;
        }

        if($update->sales_pipeline_status != $container){
             $data = array(
                'customer_id' => $lead_id,
                'state_from' => $update->sales_pipeline_status,
                'state_to' => $container
            );

            Sales_pipeline::create($data);
        }

        $update->sales_pipeline_status = $container;

        $update->save();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function customerPipelineUpdate(Request $request)
    {
        $lead_id = $request->lead_id;
        $container = $request->container_id;

        $update = Customers::find($lead_id);

        if($container == 'awaited_deposit'){
            $container = 1;
        }elseif($container == 'awaited_for_dj'){
            $container = 2;
        }elseif($container == 'dj_assigned'){
            $container = 3;
        }elseif($container == 'dj_assign_intro'){
            $container = 4;
        }elseif($container == 'balanced_paid'){
            $container = 5;
        }elseif($container == 'pre_event'){
            $container = 6;
        }elseif($container == 'post_gig_feedback'){
            $container = 7;
        }elseif($container == 'post_gig_final'){
            $container = 8;
        }elseif($container == 'archive'){
            $container = 9;
        }elseif($container == 'add'){
            $container = 10;
        }

        if($update->customer_pipeline_status != $container){
             $data = array(
                'customer_id' => $lead_id,
                'state_from' => $update->customer_pipeline_status,
                'state_to' => $container
            );

            CustomerPipeline::create($data);
        }

        $update->customer_pipeline_status = $container;

        $update->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function customerPipeline()
    {
        $customers = Customers::where('sales_pipeline_status','4')->get();
        return view('admin/customer_pipeline', compact('customers'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function paymentHistory()
    {
        return view('admin/payment_history');
    }




// DJ profile create and action function

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function djIndex()
    {
        $users = User::whereHas('roles' , function($q){
           $q->whereName('DJ');
        })->get();

        return view('admin/dj/list',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function djCreate()
    {
        return view('admin/dj/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function djStore(Request $request)
    {
        $fileName = '';
        $logoName = '';
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password|min:8'
        ]);

        if($request->has('profile_picture')) 
        {
            $fileName = time().'.'.$request->profile_picture->extension();  
            $request->profile_picture->move(public_path('uploads/profile_picture/'), $fileName); 
        } 

        if($request->has('logo')) 
        {
            $logoName = time().'_logo.'.$request->logo->extension();  
            $request->logo->move(public_path('uploads/logos/'), $logoName); 
        }

        $data = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'name' => $request->first_name. ' ' .$request->last_name,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'password' => bcrypt($request->password),
            'file' => $fileName,
            'logo' => $logoName
        );

        $User = User::create($data);
        $role = Role::where(['name' => 'DJ'])->first();
        $User->assignRole($role->name);

        return redirect(route('DJ-show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function djEdit($id)
    {
        $user = User::find($id); 
        return view('admin/dj/edit', compact('user'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function djUpdate(Request $request, $id)
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
    public function djUpdate_pass(Request $request, $id)
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
    public function djDestroy($id)
    {
        $user = User::find($id);
        $user->delete();  
        session()->put('success','DJ profile deleted successfully.');
        return redirect(route('DJ-show'));
    }


// Customer profile create and action function


    public function customerIndex()
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
    public function customerCreate()
    {
        return view('admin/customer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function customerStore(Request $request)
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
        $userId = $User->id;


        $user = array(
            'user_id' => $userId,
            'name' => $request->first_name. ' ' .$request->last_name,
            'sales_pipeline_status' => 1,
            'email' => $request->email,
            'contact_number' => $request->contact_number
        );

        $customer = Customers::create($user);

        $User->assignRole($role->name);
        // session()->put('success','Customer created successfully.');
        
        return redirect(route('sales-pipeline'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function customerEdit($id)
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
    public function customerUpdate(Request $request, $id)
    {
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
    public function customerUpdate_pass(Request $request, $id)
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
    public function customerDestroy($id)
    {
        $user = User::find($id);
        $user->delete();  
        session()->put('success','Customer deleted successfully.');
        return redirect(route('customer-show'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function customerDetails($id)
    {
        $customer = Customers::find($id);
        $event = Event::where('user_id',$customer->customer_id)->Where('is_delete','0')->first();
        
        if($event == ''){
            $isEvent = '0';
        }else{
            $isEvent = '1';
        }
        $packages = Package::all();
        $activity_logs = Sales_pipeline::where('customer_id', $id)->get();
        $comments = Comments::where('customer_id', $id)->get();

        return view('admin/customer_details', compact('customer','event','packages','activity_logs','comments','isEvent'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function customerPipelineDetails($id)
    {
        // dd('hihih');
        $customer = Customers::find($id);
        $event = Event::where('user_id',$id)->first();
        $users = User::whereHas('roles' , function($q){
           $q->whereName('DJ');
        })->get();
        $dj_name = User::find($event->assign_dj);
        $comments = Comments::where('customer_id',$id)->get();
        $activity_logs = CustomerPipeline::where('customer_id', $id)->get();

        return view('admin/customer_pipeline_details', compact('customer','event','users','dj_name','comments','activity_logs'));  
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function assignDj(Request $request)
    {
        // dd('hihih');
        $event_id = $request->event_id;
        $customer_id = $request->customer_id;
        $assign_dj = $request->assign_dj;

        $event = Event::find($event_id);
        // dd($event);

        $event->assign_dj = $assign_dj;
         // dd($event);

        $event->save();
        
        session()->put('success','DJ Assign successfully.');
        return redirect()->back()->with('success','DJ Assign successfully!');  
    }


   
}
