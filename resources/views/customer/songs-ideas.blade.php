@extends('layouts.dashboard')

@section('title') 
Songs Idea
@stop 

@section('page-css') 
@stop 

@section('header_title') 
Songs Idea
@stop 

@section('content')
<section class="dashboard-main-section">
    <div class="dash-content-area-sec">
        <div class="container-fluid">
            <div class="ad-songs-ideas-section">
                <div class="ad-songs-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <ul class="list-inline songes-head-list">
                                <li class="list-inline-item"><a class="active" href="#">Vibo ideas (500)</a></li>
                                <li class="list-inline-item"><a href="#">My ideas (12)</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="ad-right-top-sec">
                                <div class="search-data">
                                    <input type="text" placeholder="Search" class="form-control" />
                                    <div class="search-icon">
                                        <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="9.98859" cy="9.98857" rx="8.98859" ry="8.98857" stroke="#13C6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M16.2404 16.707L19.7643 20.2219" stroke="#13C6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ad-songs-button-sec">
                                    <a class="btn" href="#">
                                        New Playlist
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
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

                <div class="ad-songs-ideas-inner-list">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="songs-ideas-box">
                                <div class="songs-prev">
                                    <img src="{{ asset('img/home/music.png') }}" />
                                </div>
                                <div class="songs-category">
                                    <h5>Song name or category</h5>
                                    <p>
                                        45 Songs
                                        <span>
                                            <a href="#"><i class="fa-regular fa-ellipsis"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ps-pagination mt-5">
                    <div class="container">
                    <ul class="pagination">
                      <li><a href="#"><i class="fa-solid fa-chevron-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i></a></li>
                    </ul>
                </div>
             </div>
            </div>
        </div>
    </div>
</section>

@stop

