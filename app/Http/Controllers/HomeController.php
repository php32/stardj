<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->roles()->first();
            
        if($role->name == "admin")
        {
            return view('home');
        }
        elseif($role->name == "user")
        {
            return view('customer.dashboard');
        }
        elseif($role->name == "DJ")
        {
            return view('DJ.dashboard');
        }
        
        
    }

    /**
     * Show the application Setting page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function setting()
    {
        $role = Auth::user()->roles()->first();
            
        if($role->name == "admin")
        {
            return redirect(route('admin-setting'));
        }
        elseif($role->name == "user")
        {
            // return view('customer.dashboard');
            // return true;
            // return redirect(route('customer-setting'));
            return redirect(route('user-setting'));
        }
        elseif($role->name == "DJ")
        {
            return redirect(route('DJ-setting'));
        }
        
        
    }
}
