<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::where('isDelete','=',0)->get();
        return view('admin/package/list', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/package/create');
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
        $request->validate([  
            'package_name'=>'required',  
            'package_desc'=>'required', 
            'amount' => 'required'
        ]);

        $data = array(
            'package_name' => $request->package_name,
            'package_desc' => $request->package_desc,
            'amount' => $request->amount,
            'other_note' => $request->other_note
        );

        $package = Package::create($data);
        session()->put('success','Package Added successfully.');
        return redirect(route('package-show'));

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
        $package = Package::find($id);
        return view('admin/package/edit', compact('package'));
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

        $request->validate([  
            'package_name'=>'required',  
            'package_desc'=>'required', 
            'amount' => 'required'
        ]);

        $package = Package::find($id);
        $package->package_name = $request->package_name;
        $package->package_desc = $request->package_desc;
        $package->amount = $request->amount;
        $package->other_note = $request->other_note;

        $package->save();
        session()->put('success','Package Details Updated successfully.');
        return redirect(route('package-show'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Package::find($id);
        $package->isDelete = '1';
        $package->save();

        session()->put('success','Package Deleted successfully.');
        return redirect(route('package-show'));
    }
}
