@extends('layouts.app') 

@section('title') 
Setting 
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
 Setting 
 @stop 

 @section('content')

<!-- {{ $errors }} -->
<section class="dashboard-main-section">
  <div class="dash-content-area-sec">
    <!-- <div class="mobile-toogle">
      <div class="menu-icon" id="menu-Toggle">
        <a href="javascript:void(0)">
          <img src="{{ asset('img/home/menu.png') }}" />
        </a>
      </div>
      <div class="mobile-logo">
        <img src="{{ asset('img/logo/logo.png') }}" />
      </div>
    </div> -->
    <div class="container-fluid">
      <div class="settings-section">
        <form class="singup-form-sec" action="{{ url('update/'.auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
        @csrf 
        <div class="settings-profile-header"> 
            @if(auth()->user()->file) 
            <div class="profile-nsda-images-box">
              <a href="#">
                <img id="userprothumb" src="{{ asset('uploads/profile_picture/' .auth()->user()->file) }}">
              </a>
            </div> 
            @else 
            <div class="profile-nsda-images-box">
              <a href="#">
                <img id="userprothumb" src="{{ asset('uploads/profile_picture/profile.jpg') }}">
              </a>
            </div> 
            @endif 
            <div class="btn-profile-ndsa">
              <div class="Upload-btn">
                <input type="file" id="profile_picture" name="profile_picture" onchange="userproimgpreview()" hidden />
                <a id="upload_image" class="btn">Upload</a>
              </div>
              <!-- <div class="Upload-btn"><a class="btn" href="#">Upload</a></div> -->
              <div class="Remove-btn">
                <a class="btn" href="#" id="remove_btn">Remove</a>
              </div>
              <input type="hidden" name="remove_image" id="remove_image" value="0">
            </div>
          </div>
          <!-- <div class="profile-nsda-images-box"><a href="#"><img src="{{ asset('img/home/profile-image.png') }}"></a></div><div class="btn-profile-ndsa"><div class="Upload-btn"><a class="btn" href="#">Upload</a></div><div class="Remove-btn"><a class="btn" href="#">Remove</a></div></div> -->
          <!-- </div> -->
          <label for="title" class="mt-5">Edit Details : </label>
          <div class="row mt-3">
            <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="John" value="{{ auth()->user()->first_name }}" name="first_name">
                <label class="lab-style">First Name</label> @error('first_name') <span class="invalid-feedback" role="alert">
                  <span>Please Enter First Name.</span>
                </span> @enderror
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Deo" value="{{ auth()->user()->last_name }}" name="last_name">
                <label class="lab-style">Last Name</label> @error('last_name') <span class="invalid-feedback" role="alert">
                  <strong>Please Enter Last Name.</strong>
                </span> @enderror
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control" value="{{ auth()->user()->email }}" placeholder="xyz@gmail.com" readonly name="email">
                <label class="lab-style">Email</label>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="(123) 456 - 7890" value="{{ auth()->user()->contact_number }}" name="contact_number">
                <label class="lab-style">Contact Number</label> @error('contact_number') <span class="invalid-feedback" role="alert">
                  <strong>Please Enter Contact Number.</strong>
                </span> @enderror
              </div>
            </div>
            <div class="upload-njha-button mb-2 w-100">
              <input type="submit" name="update" id="update" class="btn" value="Update">
            </div>
          </div>
        </form>
        <hr>
        <form class="singup-form-sec mt-3 mb-2" action="{{ url('update_pass',auth()->user()->id) }}" method="POST" enctype="multipart/form-data"> @csrf <label for="title">Change Password : </label>
          <div class="row mt-4">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Current Password" name="password" id="password">
                <label class="lab-style">Current Password</label> @error('password') <span class="text-danger">
                  <strong>
                    {{ $message }}
                  </strong>
                </span> @enderror @if(session()->has('error')) <div class="text-danger">
                  <strong>
                    {{ session()->get('error') }}
                  </strong>
                </div> @endif
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="password" class="form-control" placeholder="New Password" name="new_password" id="new_password">
                <label class="lab-style">New Password</label> @error('new_password') <span class="text-danger">
                  <strong>
                    {{ $message }}
                  </strong>
                </span> @enderror
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation">
                <label class="lab-style">Confirm Password</label> @error('password_confirmation') <span class="text-danger">
                  <strong>
                    {{ $message }}
                  </strong>
                </span> @enderror
              </div>
            </div>
            <!--  <div class="col-lg-6"><div class="form-group"><input type="file" class="form-control" name="profile_picture" id="profile_picture"><label class="lab-style">Profile Picture</label></div></div> -->
            <!-- <div class="col-lg-6"><div class="form-group"><select id="" class="form-control"><option value="0" selected="">Payment Option</option><option value="1">..</option><option value="2">..</option><option value="3">..</option></select><div class="filter__icon"><i class="fa fa-caret-down"></i></div><label class="lab-style">Payment</label></div></div> -->
          </div>
          <div class="upload-njha-button mt-5">
            <input type="submit" class="btn" name="submit" id="submit" value="Upload">
            <!-- <a class="btn" href="{{ url('update/'.auth()->user()->id) }}">Upload</a> -->
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

  $('#upload_image').click(function() {
    $('#profile_picture').trigger('click');
    // var file=$(this).val().replace(/C:\\fakepath\\/ig,'');
    // $("#fname").text(file);
  });

  function userproimgpreview() {
    userprothumb.src = URL.createObjectURL(event.target.files[0]);
  }
  $("#remove_btn").click(function(e) {
    userprothumb.src = '{{ asset('uploads/profile_picture/profile.jpg') }}';
    $("#remove_image").val('1');
  })

</script> 

@stop