@extends('layouts.app') 

@section('title') 
    Package Update
@stop 

@section('page-css') 
<style>
    .Upload-btn a.btn {
        background: #13C6FF;
        border-radius: 14px;
        color: #ffffff;
        padding: 8px 25px;
        border: 2px solid #13C6FF;
    }

    .Upload-btn a.btn:hover {
        color: #ffffff;
    }
</style>
@stop 

@section('header_title') 
    Package Update
@stop 

@section('content') 
<section class="dashboard-main-section">
    <div class="dash-content-area-sec">
        <div class="container-fluid">
             <div class="settings-section">
                <form class="singup-form-sec mb-2" action="{{ route('package-update',$package->id) }}" method="POST">
                    @csrf
                   <h5>Update Package Details</h5>
                      <div class="row mt-4">
                            <div class="col-lg-6">
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="name" name="package_name" value="{{ $package->package_name }}">
                                    <label class="lab-style">Package Name</label>
                                    @error('package_name')
                                        <span class="text-danger">
                                            <strong>
                                                Please Enter Package Name.
                                            </strong>
                                        </span>
                                    @enderror
                               </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Discription" name="package_desc">{{ $package->package_desc }}</textarea>
                                  <label class="lab-style">Discription</label>
                                  @error('package_desc')
                                        <span class="text-danger">
                                            <strong>
                                                Please Enter details about package.
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="" name="amount" value="{{ $package->amount }}">
                                    <label class="lab-style">Package Amount</label>
                                    @error('amount')
                                            <span class="text-danger">
                                                <strong>
                                                    Please Enter Package Amount.
                                                </strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Note" name="other_note"> {{ $package->other_note }}</textarea>
                                    <label class="lab-style">Other Note</label>
                                </div>
                            </div>
                         <div class="upload-njha-button mb-2 w-100">
                            <input type="submit" name="update" id="update" class="btn" value="Update">
                         </div>
                      </div>
                    </form>
             </div> 
        </div>
    </div>
</section>

@stop

@section('page-js') 

 @stop