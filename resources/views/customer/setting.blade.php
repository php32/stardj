@extends('layouts.dashboard')

@section('title') 
Settings
@stop 

@section('page-css') 
@stop 

@section('header_title') 
Settings
@stop 

@section('content')

<section class="dashboard-main-section">
    <div class="dash-content-area-sec">
        <div class="container-fluid">
              <div class="ad-setting-section-main">
                    <div class="ad-setting-header-sec">
                         <ul class="list-inline">
                             <li class="list-inline-item"><a href="#"><i class="fa-solid fa-chevron-left"></i></a></li> 
                             <li class="list-inline-item"><a href="#">Setting</a></li> 
                         </ul>
                    </div>
                    <div class="ad-General-settings-sec">
                         <h4>General Settings</h4>
                         <div class="general-settings-inner-box">
                              <div class="spotify-connection">
                                  <img src="{{ asset('img/home/spotify.svg') }}"> <span>Spotify Connection</span>
                                  <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                  </label>
                              </div>
                              <div class="spotify-connection">
                                <img src="{{ asset('img/home/flag.svg') }}"> <span>Language</span>
                            </div>
                            <div class="spotify-connection">
                                <img src="{{ asset('img/home/terms.svg') }}"> <span>Terms of service and privacy notice</span>
                            </div>  
                         </div>
                    </div>

                    <div class="ad-account-settings-sec">
                        <h4>Account Settings</h4>
                        <div class="account-sitting-inner-box">
                             <div class="row">
                                  <div class="col-lg-6">
                                        <div class="role-sec-main">
                                             <div class="gender-img">
                                                   <img src="{{ asset('img/home/gender.svg') }}">
                                             </div>
                                             <div class="role-user">
                                                 <a class="active" href="#">Role</a>
                                                 <a href="#">Single</a>
                                             </div>
                                        </div>
                                        <div class="role-sec-main">
                                            <div class="gender-img">
                                                  <img src="{{ asset('img/home/ion_notifications.svg') }}">
                                            </div>
                                            <div class="role-user">
                                                <a href="#">Change notification setting</a>
                                            </div>
                                        </div>
                                         <div class="role-sec-main">
                                            <div class="gender-img">
                                                <img src="{{ asset('img/home/password-solid.svg') }}">
                                            </div>
                                            <div class="role-user">
                                                <a href="#">Change password</a>
                                            </div>
                                        </div>
                                  </div>

                                  <div class="offset-lg-2 col-lg-4">
                                       <div class="card-right-section">
                                            <div class="card-image">
                                                <img src="{{ asset('img/home/Card.png') }}">
                                            </div> 
                                            <div class="Payment-section-right">
                                             <div class="Payment-status"> 
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                    <span class="sr-only">70% Complete</span>
                                                    </div>
                                               </div>
                                               <div class="Payment--content">
                                                   <p>Payment Status <span>Activated</span></p>
                                               </div>
                                            </div>
                                            <div class="Change-card">
                                                <a class="btn" href="#">Change Card</a>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                             </div>
                        </div>
                     </div>

                     <div class="Delete-button-sec">
                         <a class="btn" href="#">Delete Account</a>
                     </div>
              </div>
        </div>
    </div>
</section>

@stop

