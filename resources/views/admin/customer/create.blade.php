@extends('layouts.app') 

@section('title') 
    Customer Create 
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
    Customer Create 
@stop 

@section('content')
<section class="dashboard-main-section">
    <div class="dash-content-area-sec">
      <!-- <div class="mobile-toogle">
          <div class="menu-icon" id="menu-Toggle">
             <a href="javascript:void(0)"><img src="{{ asset('img/home/menu.png') }}" /></a>
          </div>
          <div class="mobile-logo">
             <img src="{{ asset('img/logo/logo.png') }}" />
          </div>
       </div> -->

        <div class="container-fluid">
             <div class="settings-section">
                <form class="singup-form-sec mb-2" action="{{ route('customer-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <p class="mb-3 text-center">Profile Picture</p>
                        <div class="settings-profile-header mb-3">
                            <div class="profile-nsda-images-box">
                                <a href="#"><img id="userprothumb" src="{{ asset('uploads/profile_picture/profile.jpg') }}"></a>
                            </div>
                            <div class="btn-profile-ndsa">
                                <div class="Upload-btn">
                                    <input type="file" id="profile_picture" name="profile_picture" onchange="userproimgpreview()" hidden/> 
                                    <a id="upload_image" class="btn">Upload</a>
                                </div>
                                <!-- <div class="Upload-btn"><a class="btn" href="#">Upload</a></div> -->
                                <!-- <div class="Remove-btn"><a class="btn" href="#">Remove</a></div> -->
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="John" name="first_name" value="{{ old('first_name') }}">
                            <label class="lab-style">First Name</label>
                            @error('first_name')
                                <span class="text-danger">
                                    <strong>
                                        Please Enter First Name.
                                    </strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Deo" name="last_name" value="{{ old('last_name') }}">
                          <label class="lab-style">Last Name</label>
                          @error('last_name')
                                <span class="text-danger">
                                    <strong>
                                        Please Enter Last Name.
                                    </strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="xyz@gmail.com" name="email" value="{{ old('email') }}">
                            <label class="lab-style">Email</label>
                            @error('email')
                                    <span class="text-danger">
                                        <strong>
                                            Please Enter Email.
                                        </strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="(123) 456 - 7890" name="contact_number" value="{{ old('contact_number') }}">
                            <label class="lab-style">Contact Number</label>
                            @error('contact_number')
                                    <span class="text-danger">
                                        <strong>
                                            Please Enter Contact Number.
                                        </strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Current Password" name="password" id="password">
                            <label class="lab-style">Password</label>
                            @error('password')
                                    <span class="text-danger">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation">
                        <label class="lab-style">Confirm Password</label>
                        @error('password_confirmation')
                                <span class="text-danger">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                        @enderror
                    </div>
                </div>
                 <!-- <div class="col-lg-6">
                  <div class="form-group">
                      <input type="file" class="form-control" name="profile_picture" id="profile_picture">
                      <label class="lab-style">Profile Picture</label>
                  </div>
                 </div> -->
                 <!-- <div class="col-lg-6">
                    <div class="form-group">
                      <select id="" class="form-control">
                          <option value="0" selected="">Payment Option</option>
                          <option value="1">..</option>
                          <option value="2">..</option>
                          <option value="3">..</option>
                       </select>
                       <div class="filter__icon"><i class="fa fa-caret-down"></i></div>
                        <label class="lab-style">Payment</label>
                    </div>
                 </div> -->
            </div>

                    <div class="upload-njha-button mt-5">
                        <input type="submit" name="submit" id="submit" class="btn" value="Add">
                          <!-- <a class="btn" href="#">Add</a> -->
                    </div>

              </form>
             </div> 
        </div>
    </div>
</section>

@stop

@section('page-js') 

<script>

    $('#upload_image').click(function(){ 
        $('#profile_picture').trigger('click'); 
    });

    function userproimgpreview() {
        userprothumb.src=URL.createObjectURL(event.target.files[0]);
    }

</script>

@stop