@extends('layouts.app') 

@section('title') 
Profile 
@stop 

@section('page-css') 
<style>
  .alert-message {
    color: red;
  }

  .profile-pic {
    color: transparent;
    transition: all 0.3s ease;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    transition: all 0.3s ease;
    border: 1px solid rgba(253, 184, 19, 0.3);
    box-sizing: border-box;
    box-shadow: 0px 4px 24px rgb(253 184 19 / 15%);
    border-radius: 10px;
    height: 360px;
  }

  .profile-pic input {
    display: none;
  }

  .profile-pic img {
    position: absolute;
    object-fit: cover;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 10px 0 rgb(255 255 255 / 35%);
    border-radius: 10px;
    z-index: 0;
  }

  @media (max-width: 1600px) {
    .profile-pic {
      height: 250px;
    }
  }

  .profile-pic .-label {
    cursor: pointer;
    height: 165px;
    width: 165px;
  }

  .profile-pic:hover .-label {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 10000;
    color: #fafafa;
    transition: background-color 0.2s ease-in-out;
    border-radius: 10px;
    margin-bottom: 0;
    width: 100%;
    height: 100%;
  }

  .profile-pic span {
    display: inline-flex;
    padding: 0.2em;
    height: 2em;
  }

</style> 
@stop 

@section('header_title') 
Profile 
@stop 

@section('content') 
<section class="dashboard-main-section">
  <div class="dash-content-area-sec">
    <div class="container-fluid">
      <div class="Dj-profile-section">
        <h2>
          <span class="heading-title">Personal Info</span>
        </h2>
        <div class="row">
          <!--   <div class="profile-pic"><label class="-label" for="file"><span class="glyphicon glyphicon-camera"></span><span>Change Image</span></label><input id="file" type="file" onchange="loadFile(event)"/><img src="https://cdn.pixabay.com/photo/2017/08/06/21/01/louvre-2596278_960_720.jpg" id="output" width="200" /></div> -->
          <div class="col-lg-3 col-md-6">
            <div class="profile-picture">
              <h4>Profile Picture</h4>
              <div class="profile-pic">
                <label class="-label" for="file">
                  <span class="glyphicon glyphicon-camera"></span>
                  <span>Change Image</span>
                </label>
                <input id="file" type="file" onchange="loadFile(event)" />
                <img src="{{ asset('uploads/profile_picture/' .$user->profile_picture) }}" id="output" width="200" />
              </div>
              <!--  <div class="profile-images"><a href="#"><img src="{{ asset('uploads/profile_picture/' .$user->profile_picture) }}"></a></div> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="profile-picture">
              <h4>Logo</h4>
              <div class="profile-pic">
                <label class="-label" for="logo">
                  <span class="glyphicon glyphicon-camera"></span>
                  <span>Change Logo</span>
                </label>
                <input id="logo" type="file" onchange="loadLogo(event)"  />
                <img src="{{ asset('uploads/logos/' .$user->logo) }}" id="output_logo" width="200" />
              </div>
              <!-- <div class="profile-logo">
                <a href="#">
                  <img src="{{ asset('uploads/logos/' .$user->logo) }}">
                </a>
              </div> -->
            </div>
          </div>
          <div class="col-lg-6">
            <form class="singup-form-sec per-form-login">
              <div class="form-group">
                <input type="text" class="form-control profile" placeholder="Star DJ Hire Assistant" name="nick_name" id="nick_name" onchange="saveData(this,'nick_name')" value="{{ $user->nick_name }}">
                <label class="lab-style">Nickname</label>
                <div class="alert-message" id="nick_name1"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control profile" placeholder="Star DJ" value="{{ $user->first_name }}" onchange="saveData(this,'first_name')" name="first_name" id="first_name">
                <label class="lab-style">First Name</label>
                <div class="alert-message" id="first_name1"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control profile" placeholder="Hire" value="{{ $user->last_name }}" onchange="saveData(this,'last_name')" name="last_name" id="last_name">
                <label class="lab-style">Last Name</label>
                <div class="alert-message" id="last_name1"></div>
              </div>
              <div class="Display_Name-sec">
                <div class="toggle-switch-main-fixed">
                  <div class="toggle-btn">
                    <input type="checkbox" class="cb-value-main">
                    <span class="round-btn-main"></span>
                  </div>
                </div>
                <p>Display my real name</p>
              </div>
            </form>
          </div>
          <div class="col-lg-12">
            <div class="About-Me-section">
              <h4>About Me</h4>
              <p contenteditable="true" onkeyup="saveData(this,'about_me');" spellcheck="false">{{ $user->about_me }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="Dj-nsdb-box-section">
        <div class="row">
          <div class="col-lg-4">
            <div class="Dj-nsdb-contact-box">
              <div class="heading">
                <h2>Contacts</h2>
              </div>
              <div class="djsx-contact">
                <h4>Phone</h4>
                <p contenteditable="true" onkeyup="saveData(this,'contact_number');">{{ $user->contact_number }}</p>
                <div class="alert-message" id="contact_number1"></div>
              </div>
              <div class="djsx-contact">
                <h4>Your address or location</h4>
                <p contenteditable="true" onkeyup="saveData(this,'address');" spellcheck="false">{{ $user->address }}</p>
                <div class="alert-message" id="address1"></div>
              </div>
              <div class="djsx-contact">
                <h4>Website</h4>
                <p contenteditable="true" onkeyup="saveData(this,'web_site');">
                  {{ $user->web_site }}
                </p>
                <div class="alert-message" id="web_site1"></div>
              </div>
              <div class="djsx-contact">
                <h4>Email</h4>
                <p contenteditable="true" onkeyup="saveData(this,'email');">
                 {{ $user->email }}
                </p>
                <div class="alert-message" id="email1"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Dj-nsdb-contact-box style-two">
              <div class="heading">
                <h2>Profiles</h2>
              </div>
              <div class="djsx-contact">
                <h4>
                  <img class="mr-2" src="{{ asset('img/home/insta.png') }}"> Instagram
                </h4>
                <p contenteditable="true" onkeyup="saveData(this,'instagram');">{{ $user->instagram }}</p>
                <!-- <div class="alert-message" id="email1"></div> -->
              </div>
              <div class="djsx-contact">
                <h4>
                  <img class="mr-2" src="{{ asset('img/home/facebook.png') }} ">Facebook
                </h4>
                <p contenteditable="true" onkeyup="saveData(this,'facebook');">{{ $user->facebook }}</p>
              </div>
              <div class="djsx-contact">
                <h4>
                  <img class="mr-2" src="{{ asset('img/home/spotify.png') }}">Spotify
                </h4>
                <p contenteditable="true" onkeyup="saveData(this,'spotify');">{{ $user->spotify }}</p>
              </div>
              <div class="djsx-contact">
                <h4>
                  <img class="mr-2" src="{{ asset('img/home/youtube.png') }}">Youtube
                </h4>
                <p contenteditable="true" onkeyup="saveData(this,'youtube');">{{ $user->youtube }}</p>
              </div>
              <div class="djsx-contact">
                <h4>
                  <img class="mr-2" src="{{ asset('img/home/soundcound.png') }}">SoundCloud
                </h4>
                <p contenteditable="true" onkeyup="saveData(this,'soundCloud');">{{ $user->soundCloud }}</p>
              </div>
              <div class="djsx-contact">
                <h4>
                  <img class="mr-2" src="{{ asset('img/home/tiktok.png') }}">TikTok
                </h4>
                <p contenteditable="true" onkeyup="saveData(this,'tiktok');">{{ $user->tiktok }}</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Dj-nsdb-contact-box">
              <div class="heading">
                <h2>Reviews</h2>
              </div>
              <div class="djsx-contact">
                <h4>Link_01</h4>
                <p>
                  <a href="#">https://www.google.com/search</a>
                </p>
              </div>
              <div class="Add-btn">
                <a class="btn" href="#">ADD <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.25" y="0.25" width="9.5" height="9.5" rx="4.75" stroke="white" stroke-width="0.5" stroke-dasharray="1.5 1.5"></rect>
                    <path d="M5 3.4375V6.5625" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M3.4375 5H6.5625" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
@stop 

@section('page-js') 

<script>

  function saveData(value, column) {
    var id = $("#user_id").val();
    if (column == 'nick_name') {
      var value = $("#nick_name").val();
    } else if (column == 'first_name') {
      var value = $("#first_name").val();
    } else if (column == 'last_name') {
      var value = $("#last_name").val();
    } else {
      var value = value.innerHTML;
    }
    // alert(value);
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    jQuery.ajax({
      url: "{{ route('store-dj-data') }}",
      method: 'post',
      data: {
        value: value,
        column: column,
        // user_id: id
      },
      success: function(result) {
        // console.log(result);
        if (result.value == '1') {
          $("#" + result.column + "1").text('');
        } else {
          $("#" + result.column + "1").text('This field is required');
        }
      },
    });
  }

  // profile update js
  var loadFile = function(event) {
    // alert(event);
    var image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
  };

  var loadLogo = function(event) {
    // alert("dnfsj");
    var image1 = document.getElementById("output_logo");
    image1.src = URL.createObjectURL(event.target.files[0]);
  };

  $("#file").on('change',function(e){
    var postData = new FormData();
    postData.append('file',this.files[0]);
    postData.append('column','profile_picture')

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    jQuery.ajax({
      url: "{{ route('store-dj-file') }}",
      method: 'post',
      processData: false,
      contentType: false,
      cache: false,
      dataType : 'json',
      data: postData,
      processData: false,
      success: function(result) {
      },
    });
  })

  $("#logo").on('change',function(e){
    var postData = new FormData();
    postData.append('file',this.files[0]);
    postData.append('column','logo');

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    jQuery.ajax({
      url: "{{ route('store-dj-file') }}",
      method: 'post',
      processData: false,
      contentType: false,
      cache: false,
      dataType : 'json',
      data: postData,
      processData: false,
      success: function(result) {
      },
    });
  })

</script> 

@stop