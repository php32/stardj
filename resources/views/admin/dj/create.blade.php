@extends('layouts.app')

@section('title')
    DJ Create 
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


.avatar-upload {
  position: relative;
  max-width: 205px;
  margin: 50px auto;
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  content: "\f040";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.logo-upload {
  position: relative;
  max-width: 205px;
  margin: 50px auto;
}
.logo-upload .logo-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.logo-upload .logo-edit input {
  display: none;
}
.logo-upload .logo-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.logo-upload .logo-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.logo-upload .logo-edit input + label:after {
  content: "\f040";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.logo-upload .logo-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.logo-upload .logo-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

</style>
@stop

@section('header_title') 
    DJ Create
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
       <form class="singup-form-sec mt-3 mb-2" action="{{ route('DJ-store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
             <div class="settings-section">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="text-center">Profile Picture</p>
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
                     <div class="col-lg-6">
                        <p class="mb-3 text-center">Logo</p>
                        <div class="settings-profile-header mb-3">
                            <div class="profile-nsda-images-box">
                                <a href="#"><img id="logoprothumb" src="{{ asset('uploads/logos/logo.jpg') }}"></a>
                            </div>
                            <div class="btn-profile-ndsa">
                                <div class="Upload-btn">
                                    <input type="file" id="logo" name="logo" onchange="logoproimgpreview()" hidden/> 
                                    <a id="upload_logo" class="btn">Upload</a>
                                </div>
                                <!-- <div class="Upload-btn"><a class="btn" href="#">Upload</a></div> -->
                                <!-- <div class="Remove-btn"><a class="btn" href="#">Remove</a></div> -->
                            </div>
                         </div>
                     </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-6">
                    <p class="text-center">Profile Picture</p>
                        <div class="settings-profile-header mb-3">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="profile_picture" />
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview" style="background-image: url('{{ asset('uploads/profile_picture/profile.jpg') }}');">
                                    </div>
                                </div>
                            </div>
                       </div>
                   </div>
                   <div class="col-lg-6">
                    <p class="text-center">Logo</p>
                        <div class="settings-profile-header mb-3">
                            <div class="logo-upload">
                                <div class="logo-edit">
                                    <input type='file' id="logoUpload" accept=".png, .jpg, .jpeg" name="logo" />
                                    <label for="logoUpload"></label>
                                </div>
                                <div class="logo-preview">
                                    <div id="logoPreview" style="background-image:url('{{ asset('uploads/logos/logo.jpg') }}');">
                                    </div>
                                </div>
                            </div>
                       </div>
                   </div>
               </div> -->
                   
                    <h5 class="mt-5">Enter DJ Details</h5>
                      <div class="row mt-4">
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
                              <input type="password" class="form-control" placeholder="Password" name="password" id="password">
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
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readURLLogo(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#logoPreview').css('background-image', 'url('+e.target.result +')');
            $('#logoPreview').hide();
            $('#logoPreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#imageUpload").change(function() {
    readURL(this);
});

$("#logoUpload").change(function() {
    readURLLogo(this);
});



$('#upload_image').click(function(){ 
        $('#profile_picture').trigger('click'); 
    });

    $('#upload_logo').click(function(){ 
        $('#logo').trigger('click'); 
    });

    function userproimgpreview() {
        userprothumb.src=URL.createObjectURL(event.target.files[0]);
    }

    function logoproimgpreview() {
        logoprothumb.src=URL.createObjectURL(event.target.files[0]);
    }
</script>

@stop