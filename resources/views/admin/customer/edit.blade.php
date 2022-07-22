@extends('layouts.app') 

@section('title') 
    Customer Update 
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
    Customer Update 
@stop 

@section('content') 
<section class="dashboard-main-section">
    <div class="dash-content-area-sec">
        <div class="container-fluid">
             <div class="settings-section">
                <form class="singup-form-sec mb-2" action="{{ route('customer-update',$user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                   <div class="settings-profile-header mb-3">
                      @if($user->file)
                      <div class="profile-nsda-images-box">
                            <a href="#"><img id="userprothumb" src="{{ asset('uploads/profile_picture/' . $user->file) }}"></a>
                      </div>
                      @else
                      <div class="profile-nsda-images-box">
                            <a href="#"><img id="userprothumb" src="{{ asset('uploads/profile_picture/profile.jpg') }}"></a>
                      </div>
                      @endif
                      <div class="btn-profile-ndsa">
                            <div class="Upload-btn">
                                <input type="file" id="profile_picture" name="profile_picture" onchange="userproimgpreview()" hidden/> 
                                <a id="upload_image" class="btn">Upload</a>
                            </div>
                          <!-- <div class="Upload-btn"><a class="btn" href="#">Upload</a></div> -->
                          <div class="Remove-btn"><a class="btn" href="#" id="remove_btn">Remove</a></div>
                          <input type="hidden" name="remove_image" id="remove_image" value="0">
                      </div>
                    </div>
                   
                    <label for="title mt-3">Edit Details : </label>
                      <div class="row mt-4">
                           <div class="col-lg-6">
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="John" name="first_name" value="{{ $user->first_name }}">
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
                                  <input type="text" class="form-control" placeholder="Deo" name="last_name" value="{{ $user->last_name }}">
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
                                <input type="text" class="form-control" placeholder="xyz@gmail.com" name="email" value="{{ $user->email }}">
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
                                <input type="text" class="form-control" placeholder="(123) 456 - 7890" name="contact_number" value="{{ $user->contact_number }}">
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
                         <div class="upload-njha-button mb-2 w-100">
                            <input type="submit" name="update" id="update" class="btn" value="Update">
                         </div>
                      </div>
                    </form>
                     <hr>
                     <form class="singup-form-sec mt-3 mb-2" action="{{ route('customer-update-pass',$user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="title">Change Password : </label>
                     <div class="row mt-4">
                         <div class="col-lg-6">
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="Current Password" name="password" id="password">
                              <label class="lab-style">Current Password</label>
                              @error('password')
                                        <span class="text-danger">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                              @enderror
                              @if(session()->has('error'))
                                <div class="text-danger">
                                    <strong>
                                        {{ session()->get('error') }}
                                    </strong>
                                </div>
                              @endif
                          </div>
                         </div>
                         <div class="col-lg-6">
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="New Password" name="new_password" id="new_password">
                              <label class="lab-style">New Password</label>
                              @error('new_password')
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
                         <input type="hidden" name="change_pass" id="change_pass" value="0">
                        <!--  <div class="col-lg-6">
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

                    <div class="upload-njha-button mt-4">
                        <input type="submit" name="update_pass" id="update_pass" class="btn" value="Update">
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
    
    @if(Session::has('success'))
        $.notify("{{ Session::get('success') }}", "success");
        @php
            Session::forget('success');
        @endphp
    @endif

    @if(Session::has('info'))
        $.notify("{{ Session::get('info') }}", "info");
        @php
            Session::forget('info');
        @endphp
    @endif

    @if(Session::has('error'))
        $.notify("{{ Session::get('error') }}", "error");
        @php
            Session::forget('error');
        @endphp
    @endif

    @if(Session::has('warning'))
        $.notify("{{ Session::get('warning') }}", "warning");
        @php
            Session::forget('warning');
        @endphp
    @endif


    $("#update_pass").click(function(){
        $("#change_pass").val('1');
    });

    $('#upload_image').click(function(){ 
        $('#profile_picture').trigger('click'); 
        // var file=$(this).val().replace(/C:\\fakepath\\/ig,'');
        // $("#fname").text(file);
    });

    function userproimgpreview() {
        userprothumb.src=URL.createObjectURL(event.target.files[0]);
    }

    $("#remove_btn").click(function(e){
        userprothumb.src='{{ asset('uploads/profile_picture/profile.jpg') }}';
        $("#remove_image").val('1');
    })


</script>

 @stop