@extends('layouts.app') 

@section('title') 
    Customer Pipeline
@stop 

@section('page-css') 
@stop 

@section('header_title') 
    Customer Pipeline
@stop 

@section('content')
<section class="dashboard-main-section">
    <div class="dash-content-area-sec">
        <div class="container-fluid">
            <div class="drag-container"></div>
            <div class="board sales-pileline-section">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="board-column">
                            <div class="board-column-container">
                                <div class="board-column-header">Awaiting Deposit</div>
                                <div class="board-column-content-wrapper">
                                    <div class="board-column-content" data-id="awaited_deposit">
                                        @foreach($customers as $customer)
                                        @if($customer->customer_pipeline_status == '1')
                                        <div class="board-item" data-id="{{ $customer->customer_id }}" onclick="viewCustomerDetails({{ $customer->customer_id }})">
                                            <div class="board-item-content">
                                                <div class="sales-details-box">
                                                    <h5>{{ $customer->name }}</h5>
                                                    <div class="user-image">
                                                        <img src="{{ asset('img/home/Ellipse 27.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 28.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 29.svg') }}">
                                                    </div>
                                                    <div class="share-sec">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.42859 3.42857H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 2.28572H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 4.57143H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M5.42859 5.71428H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.73502 3.915C7.44098 3.15441 6.93051 2.49665 6.26671 2.02302C5.60292 1.54939 4.81489 1.28064 4.00002 1.25C3.18514 1.28064 2.39711 1.54939 1.73332 2.02302C1.06952 2.49665 0.559056 3.15441 0.265016 3.915C0.245158 3.96993 0.245158 4.03007 0.265016 4.085C0.559056 4.84559 1.06952 5.50335 1.73332 5.97698C2.39711 6.45061 3.18514 6.71936 4.00002 6.75C4.81489 6.71936 5.60292 6.45061 6.26671 5.97698C6.93051 5.50335 7.44098 4.84559 7.73502 4.085C7.75487 4.03007 7.75487 3.96993 7.73502 3.915ZM4.00002 6.25C2.67502 6.25 1.27502 5.2675 0.767516 4C1.27502 2.7325 2.67502 1.75 4.00002 1.75C5.32502 1.75 6.72502 2.7325 7.23252 4C6.72502 5.2675 5.32502 6.25 4.00002 6.25Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M4 2.5C3.70333 2.5 3.41332 2.58797 3.16665 2.7528C2.91997 2.91762 2.72771 3.15189 2.61418 3.42597C2.50065 3.70006 2.47094 4.00166 2.52882 4.29264C2.5867 4.58361 2.72956 4.85088 2.93934 5.06066C3.14912 5.27044 3.41639 5.4133 3.70737 5.47118C3.99834 5.52906 4.29994 5.49935 4.57403 5.38582C4.84811 5.27229 5.08238 5.08003 5.2472 4.83336C5.41203 4.58668 5.5 4.29667 5.5 4C5.5 3.60218 5.34197 3.22064 5.06066 2.93934C4.77936 2.65804 4.39783 2.5 4 2.5ZM4 5C3.80222 5 3.60888 4.94135 3.44443 4.83147C3.27998 4.72159 3.15181 4.56541 3.07612 4.38268C3.00043 4.19996 2.98063 3.99889 3.01922 3.80491C3.0578 3.61093 3.15304 3.43275 3.29289 3.29289C3.43275 3.15304 3.61093 3.0578 3.80491 3.01921C3.99889 2.98063 4.19996 3.00043 4.38268 3.07612C4.56541 3.15181 4.72159 3.27998 4.83147 3.44443C4.94135 3.60888 5 3.80222 5 4C5 4.26522 4.89464 4.51957 4.70711 4.70711C4.51957 4.89464 4.26522 5 4 5Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M3.99984 4.00003C4.18393 4.00003 4.33317 3.85079 4.33317 3.66669C4.33317 3.4826 4.18393 3.33336 3.99984 3.33336C3.81574 3.33336 3.6665 3.4826 3.6665 3.66669C3.6665 3.85079 3.81574 4.00003 3.99984 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M5.33333 4.00003C5.51743 4.00003 5.66667 3.85079 5.66667 3.66669C5.66667 3.4826 5.51743 3.33336 5.33333 3.33336C5.14924 3.33336 5 3.4826 5 3.66669C5 3.85079 5.14924 4.00003 5.33333 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M2.66683 4.00003C2.85092 4.00003 3.00016 3.85079 3.00016 3.66669C3.00016 3.4826 2.85092 3.33336 2.66683 3.33336C2.48273 3.33336 2.3335 3.4826 2.3335 3.66669C2.3335 3.85079 2.48273 4.00003 2.66683 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M1.6665 1H6.33317C6.88546 1 7.33317 1.44772 7.33317 2V5.33333C7.33317 5.88562 6.88546 6.33333 6.33317 6.33333H2.84984C2.7855 6.33086 2.72183 6.34707 2.6665 6.38L1.16984 7.28667C1.11839 7.3172 1.05966 7.33332 0.999837 7.33333C0.942574 7.33316 0.886322 7.31823 0.836504 7.29C0.731675 7.23108 0.666711 7.12025 0.666504 7V2C0.666504 1.44772 1.11422 1 1.6665 1ZM6.33333 5.66664C6.51743 5.66664 6.66667 5.5174 6.66667 5.33331V1.99997C6.66667 1.81588 6.51743 1.66664 6.33333 1.66664H1.66667C1.48257 1.66664 1.33333 1.81588 1.33333 1.99997V6.40997L2.33333 5.80997C2.4893 5.71605 2.66794 5.66649 2.85 5.66664H6.33333Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>

                                                            <span>39</span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M7.1918 7.06098C6.63551 7.0583 6.10355 6.83255 5.71513 6.43431C5.3297 6.069 5.10537 5.56539 5.09161 5.03452C5.07786 4.50364 5.2758 3.98909 5.6418 3.60431L8.09513 1.12764C8.35988 0.86338 8.72117 0.718864 9.09513 0.727642C9.49558 0.729006 9.87869 0.89114 10.1585 1.17764C10.7322 1.73001 10.7545 2.64121 10.2085 3.22098L7.7418 5.69764C7.58221 5.85831 7.36492 5.94835 7.13847 5.94764C6.89379 5.94797 6.65938 5.84939 6.48847 5.67431C6.13654 5.33358 6.12465 4.773 6.4618 4.41764L8.73847 2.13098C8.87215 2.04219 9.05012 2.06127 9.16195 2.17636C9.27378 2.29146 9.28773 2.4699 9.19513 2.60098L6.91847 4.88764C6.83948 4.9828 6.85135 5.1237 6.94513 5.20431C6.99204 5.25154 7.05527 5.27898 7.1218 5.28098C7.17158 5.28169 7.21958 5.26249 7.25513 5.22764L9.71847 2.75098C10.0062 2.43135 9.98391 1.93993 9.66847 1.64764C9.37609 1.34409 8.8974 1.32213 8.57847 1.59764L6.11513 4.06098C5.8732 4.32083 5.74489 4.66645 5.75866 5.02123C5.77243 5.37601 5.92712 5.71065 6.18847 5.95098C6.45059 6.2227 6.81093 6.37765 7.18847 6.38098C7.51392 6.38362 7.82701 6.25646 8.05847 6.02764L10.5218 3.55098C10.6516 3.42027 10.8628 3.41952 10.9935 3.54931C11.1242 3.6791 11.1249 3.89027 10.9951 4.02098L8.5318 6.49764C8.17852 6.85717 7.69585 7.06008 7.1918 7.06098Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span>10</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="Add-btn">
                                        <a class="btn" href="#">
                                            ADD
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

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="board-column style-two">
                            <div class="board-column-container">
                                <div class="board-column-header">Awaiting DJ Assignment</div>
                                <div class="board-column-content-wrapper">
                                    <div class="board-column-content" data-id="awaited_for_dj">
                                        @foreach($customers as $customer)
                                        @if($customer->customer_pipeline_status == '2')
                                        <div class="board-item"  data-id="{{ $customer->customer_id }}" onclick="viewCustomerDetails({{ $customer->customer_id }})">
                                            <div class="board-item-content">
                                                <div class="sales-details-box">
                                                    <h5>{{ $customer->name }}</h5>
                                                    <!-- <p>Lorem Ipsum is dummy text.</p> -->
                                                    <div class="user-image">
                                                        <img src="{{ asset('img/home/Ellipse 27.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 28.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 29.svg') }}">
                                                    </div>
                                                    <div class="share-sec">
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.42859 3.42857H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 2.28572H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 4.57143H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M5.42859 5.71428H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.73502 3.915C7.44098 3.15441 6.93051 2.49665 6.26671 2.02302C5.60292 1.54939 4.81489 1.28064 4.00002 1.25C3.18514 1.28064 2.39711 1.54939 1.73332 2.02302C1.06952 2.49665 0.559056 3.15441 0.265016 3.915C0.245158 3.96993 0.245158 4.03007 0.265016 4.085C0.559056 4.84559 1.06952 5.50335 1.73332 5.97698C2.39711 6.45061 3.18514 6.71936 4.00002 6.75C4.81489 6.71936 5.60292 6.45061 6.26671 5.97698C6.93051 5.50335 7.44098 4.84559 7.73502 4.085C7.75487 4.03007 7.75487 3.96993 7.73502 3.915ZM4.00002 6.25C2.67502 6.25 1.27502 5.2675 0.767516 4C1.27502 2.7325 2.67502 1.75 4.00002 1.75C5.32502 1.75 6.72502 2.7325 7.23252 4C6.72502 5.2675 5.32502 6.25 4.00002 6.25Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M4 2.5C3.70333 2.5 3.41332 2.58797 3.16665 2.7528C2.91997 2.91762 2.72771 3.15189 2.61418 3.42597C2.50065 3.70006 2.47094 4.00166 2.52882 4.29264C2.5867 4.58361 2.72956 4.85088 2.93934 5.06066C3.14912 5.27044 3.41639 5.4133 3.70737 5.47118C3.99834 5.52906 4.29994 5.49935 4.57403 5.38582C4.84811 5.27229 5.08238 5.08003 5.2472 4.83336C5.41203 4.58668 5.5 4.29667 5.5 4C5.5 3.60218 5.34197 3.22064 5.06066 2.93934C4.77936 2.65804 4.39783 2.5 4 2.5ZM4 5C3.80222 5 3.60888 4.94135 3.44443 4.83147C3.27998 4.72159 3.15181 4.56541 3.07612 4.38268C3.00043 4.19996 2.98063 3.99889 3.01922 3.80491C3.0578 3.61093 3.15304 3.43275 3.29289 3.29289C3.43275 3.15304 3.61093 3.0578 3.80491 3.01921C3.99889 2.98063 4.19996 3.00043 4.38268 3.07612C4.56541 3.15181 4.72159 3.27998 4.83147 3.44443C4.94135 3.60888 5 3.80222 5 4C5 4.26522 4.89464 4.51957 4.70711 4.70711C4.51957 4.89464 4.26522 5 4 5Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M3.99984 4.00003C4.18393 4.00003 4.33317 3.85079 4.33317 3.66669C4.33317 3.4826 4.18393 3.33336 3.99984 3.33336C3.81574 3.33336 3.6665 3.4826 3.6665 3.66669C3.6665 3.85079 3.81574 4.00003 3.99984 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M5.33333 4.00003C5.51743 4.00003 5.66667 3.85079 5.66667 3.66669C5.66667 3.4826 5.51743 3.33336 5.33333 3.33336C5.14924 3.33336 5 3.4826 5 3.66669C5 3.85079 5.14924 4.00003 5.33333 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M2.66683 4.00003C2.85092 4.00003 3.00016 3.85079 3.00016 3.66669C3.00016 3.4826 2.85092 3.33336 2.66683 3.33336C2.48273 3.33336 2.3335 3.4826 2.3335 3.66669C2.3335 3.85079 2.48273 4.00003 2.66683 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M1.6665 1H6.33317C6.88546 1 7.33317 1.44772 7.33317 2V5.33333C7.33317 5.88562 6.88546 6.33333 6.33317 6.33333H2.84984C2.7855 6.33086 2.72183 6.34707 2.6665 6.38L1.16984 7.28667C1.11839 7.3172 1.05966 7.33332 0.999837 7.33333C0.942574 7.33316 0.886322 7.31823 0.836504 7.29C0.731675 7.23108 0.666711 7.12025 0.666504 7V2C0.666504 1.44772 1.11422 1 1.6665 1ZM6.33333 5.66664C6.51743 5.66664 6.66667 5.5174 6.66667 5.33331V1.99997C6.66667 1.81588 6.51743 1.66664 6.33333 1.66664H1.66667C1.48257 1.66664 1.33333 1.81588 1.33333 1.99997V6.40997L2.33333 5.80997C2.4893 5.71605 2.66794 5.66649 2.85 5.66664H6.33333Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>

                                                            <span>39</span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M7.1918 7.06098C6.63551 7.0583 6.10355 6.83255 5.71513 6.43431C5.3297 6.069 5.10537 5.56539 5.09161 5.03452C5.07786 4.50364 5.2758 3.98909 5.6418 3.60431L8.09513 1.12764C8.35988 0.86338 8.72117 0.718864 9.09513 0.727642C9.49558 0.729006 9.87869 0.89114 10.1585 1.17764C10.7322 1.73001 10.7545 2.64121 10.2085 3.22098L7.7418 5.69764C7.58221 5.85831 7.36492 5.94835 7.13847 5.94764C6.89379 5.94797 6.65938 5.84939 6.48847 5.67431C6.13654 5.33358 6.12465 4.773 6.4618 4.41764L8.73847 2.13098C8.87215 2.04219 9.05012 2.06127 9.16195 2.17636C9.27378 2.29146 9.28773 2.4699 9.19513 2.60098L6.91847 4.88764C6.83948 4.9828 6.85135 5.1237 6.94513 5.20431C6.99204 5.25154 7.05527 5.27898 7.1218 5.28098C7.17158 5.28169 7.21958 5.26249 7.25513 5.22764L9.71847 2.75098C10.0062 2.43135 9.98391 1.93993 9.66847 1.64764C9.37609 1.34409 8.8974 1.32213 8.57847 1.59764L6.11513 4.06098C5.8732 4.32083 5.74489 4.66645 5.75866 5.02123C5.77243 5.37601 5.92712 5.71065 6.18847 5.95098C6.45059 6.2227 6.81093 6.37765 7.18847 6.38098C7.51392 6.38362 7.82701 6.25646 8.05847 6.02764L10.5218 3.55098C10.6516 3.42027 10.8628 3.41952 10.9935 3.54931C11.1242 3.6791 11.1249 3.89027 10.9951 4.02098L8.5318 6.49764C8.17852 6.85717 7.69585 7.06008 7.1918 7.06098Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span>10</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="Add-btn">
                                        <a class="btn" href="#">
                                            ADD
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

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="board-column">
                            <div class="board-column-container">
                                <div class="board-column-header">DJ Assigned</div>
                                <div class="board-column-content-wrapper">
                                    <div class="board-column-content" data-id="dj_assigned">
                                        @foreach($customers as $customer)
                                        @if($customer->customer_pipeline_status == '3')
                                        <div class="board-item" data-id="{{ $customer->customer_id }}" onclick="viewCustomerDetails({{ $customer->customer_id }})">
                                            <div class="board-item-content">
                                                <div class="sales-details-box">
                                                    <h5>{{ $customer->name }}</h5>
                                                    <!-- <p>Lorem Ipsum is dummy text.</p> -->
                                                    <div class="user-image">
                                                        <img src="{{ asset('img/home/Ellipse 27.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 28.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 29.svg') }}">
                                                    </div>
                                                    <div class="share-sec">
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.42859 3.42857H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 2.28572H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 4.57143H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M5.42859 5.71428H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.73502 3.915C7.44098 3.15441 6.93051 2.49665 6.26671 2.02302C5.60292 1.54939 4.81489 1.28064 4.00002 1.25C3.18514 1.28064 2.39711 1.54939 1.73332 2.02302C1.06952 2.49665 0.559056 3.15441 0.265016 3.915C0.245158 3.96993 0.245158 4.03007 0.265016 4.085C0.559056 4.84559 1.06952 5.50335 1.73332 5.97698C2.39711 6.45061 3.18514 6.71936 4.00002 6.75C4.81489 6.71936 5.60292 6.45061 6.26671 5.97698C6.93051 5.50335 7.44098 4.84559 7.73502 4.085C7.75487 4.03007 7.75487 3.96993 7.73502 3.915ZM4.00002 6.25C2.67502 6.25 1.27502 5.2675 0.767516 4C1.27502 2.7325 2.67502 1.75 4.00002 1.75C5.32502 1.75 6.72502 2.7325 7.23252 4C6.72502 5.2675 5.32502 6.25 4.00002 6.25Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M4 2.5C3.70333 2.5 3.41332 2.58797 3.16665 2.7528C2.91997 2.91762 2.72771 3.15189 2.61418 3.42597C2.50065 3.70006 2.47094 4.00166 2.52882 4.29264C2.5867 4.58361 2.72956 4.85088 2.93934 5.06066C3.14912 5.27044 3.41639 5.4133 3.70737 5.47118C3.99834 5.52906 4.29994 5.49935 4.57403 5.38582C4.84811 5.27229 5.08238 5.08003 5.2472 4.83336C5.41203 4.58668 5.5 4.29667 5.5 4C5.5 3.60218 5.34197 3.22064 5.06066 2.93934C4.77936 2.65804 4.39783 2.5 4 2.5ZM4 5C3.80222 5 3.60888 4.94135 3.44443 4.83147C3.27998 4.72159 3.15181 4.56541 3.07612 4.38268C3.00043 4.19996 2.98063 3.99889 3.01922 3.80491C3.0578 3.61093 3.15304 3.43275 3.29289 3.29289C3.43275 3.15304 3.61093 3.0578 3.80491 3.01921C3.99889 2.98063 4.19996 3.00043 4.38268 3.07612C4.56541 3.15181 4.72159 3.27998 4.83147 3.44443C4.94135 3.60888 5 3.80222 5 4C5 4.26522 4.89464 4.51957 4.70711 4.70711C4.51957 4.89464 4.26522 5 4 5Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M3.99984 4.00003C4.18393 4.00003 4.33317 3.85079 4.33317 3.66669C4.33317 3.4826 4.18393 3.33336 3.99984 3.33336C3.81574 3.33336 3.6665 3.4826 3.6665 3.66669C3.6665 3.85079 3.81574 4.00003 3.99984 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M5.33333 4.00003C5.51743 4.00003 5.66667 3.85079 5.66667 3.66669C5.66667 3.4826 5.51743 3.33336 5.33333 3.33336C5.14924 3.33336 5 3.4826 5 3.66669C5 3.85079 5.14924 4.00003 5.33333 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M2.66683 4.00003C2.85092 4.00003 3.00016 3.85079 3.00016 3.66669C3.00016 3.4826 2.85092 3.33336 2.66683 3.33336C2.48273 3.33336 2.3335 3.4826 2.3335 3.66669C2.3335 3.85079 2.48273 4.00003 2.66683 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M1.6665 1H6.33317C6.88546 1 7.33317 1.44772 7.33317 2V5.33333C7.33317 5.88562 6.88546 6.33333 6.33317 6.33333H2.84984C2.7855 6.33086 2.72183 6.34707 2.6665 6.38L1.16984 7.28667C1.11839 7.3172 1.05966 7.33332 0.999837 7.33333C0.942574 7.33316 0.886322 7.31823 0.836504 7.29C0.731675 7.23108 0.666711 7.12025 0.666504 7V2C0.666504 1.44772 1.11422 1 1.6665 1ZM6.33333 5.66664C6.51743 5.66664 6.66667 5.5174 6.66667 5.33331V1.99997C6.66667 1.81588 6.51743 1.66664 6.33333 1.66664H1.66667C1.48257 1.66664 1.33333 1.81588 1.33333 1.99997V6.40997L2.33333 5.80997C2.4893 5.71605 2.66794 5.66649 2.85 5.66664H6.33333Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>

                                                            <span>39</span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M7.1918 7.06098C6.63551 7.0583 6.10355 6.83255 5.71513 6.43431C5.3297 6.069 5.10537 5.56539 5.09161 5.03452C5.07786 4.50364 5.2758 3.98909 5.6418 3.60431L8.09513 1.12764C8.35988 0.86338 8.72117 0.718864 9.09513 0.727642C9.49558 0.729006 9.87869 0.89114 10.1585 1.17764C10.7322 1.73001 10.7545 2.64121 10.2085 3.22098L7.7418 5.69764C7.58221 5.85831 7.36492 5.94835 7.13847 5.94764C6.89379 5.94797 6.65938 5.84939 6.48847 5.67431C6.13654 5.33358 6.12465 4.773 6.4618 4.41764L8.73847 2.13098C8.87215 2.04219 9.05012 2.06127 9.16195 2.17636C9.27378 2.29146 9.28773 2.4699 9.19513 2.60098L6.91847 4.88764C6.83948 4.9828 6.85135 5.1237 6.94513 5.20431C6.99204 5.25154 7.05527 5.27898 7.1218 5.28098C7.17158 5.28169 7.21958 5.26249 7.25513 5.22764L9.71847 2.75098C10.0062 2.43135 9.98391 1.93993 9.66847 1.64764C9.37609 1.34409 8.8974 1.32213 8.57847 1.59764L6.11513 4.06098C5.8732 4.32083 5.74489 4.66645 5.75866 5.02123C5.77243 5.37601 5.92712 5.71065 6.18847 5.95098C6.45059 6.2227 6.81093 6.37765 7.18847 6.38098C7.51392 6.38362 7.82701 6.25646 8.05847 6.02764L10.5218 3.55098C10.6516 3.42027 10.8628 3.41952 10.9935 3.54931C11.1242 3.6791 11.1249 3.89027 10.9951 4.02098L8.5318 6.49764C8.17852 6.85717 7.69585 7.06008 7.1918 7.06098Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span>10</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         @endif
                                        @endforeach
                                    </div>
                                    <div class="Add-btn">
                                        <a class="btn" href="#">
                                            ADD
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

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="board-column style-two">
                            <div class="board-column-container">
                                <div class="board-column-header">DJ Assigned & Introduced</div>
                                <div class="board-column-content-wrapper">
                                    <div class="board-column-content" data-id="dj_assign_intro">
                                        @foreach($customers as $customer)
                                        @if($customer->customer_pipeline_status == '4')
                                        <div class="board-item" data-id="{{ $customer->customer_id }}" onclick="viewCustomerDetails({{ $customer->customer_id }})">
                                            <div class="board-item-content">
                                                <div class="sales-details-box">
                                                    <h5>{{ $customer->name }}</h5>
                                                    <!-- <p>Lorem Ipsum is dummy text.</p> -->
                                                    <div class="user-image">
                                                        <img src="{{ asset('img/home/Ellipse 27.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 28.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 29.svg') }}">
                                                    </div>
                                                    <div class="share-sec">
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.42859 3.42857H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 2.28572H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 4.57143H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M5.42859 5.71428H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.73502 3.915C7.44098 3.15441 6.93051 2.49665 6.26671 2.02302C5.60292 1.54939 4.81489 1.28064 4.00002 1.25C3.18514 1.28064 2.39711 1.54939 1.73332 2.02302C1.06952 2.49665 0.559056 3.15441 0.265016 3.915C0.245158 3.96993 0.245158 4.03007 0.265016 4.085C0.559056 4.84559 1.06952 5.50335 1.73332 5.97698C2.39711 6.45061 3.18514 6.71936 4.00002 6.75C4.81489 6.71936 5.60292 6.45061 6.26671 5.97698C6.93051 5.50335 7.44098 4.84559 7.73502 4.085C7.75487 4.03007 7.75487 3.96993 7.73502 3.915ZM4.00002 6.25C2.67502 6.25 1.27502 5.2675 0.767516 4C1.27502 2.7325 2.67502 1.75 4.00002 1.75C5.32502 1.75 6.72502 2.7325 7.23252 4C6.72502 5.2675 5.32502 6.25 4.00002 6.25Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M4 2.5C3.70333 2.5 3.41332 2.58797 3.16665 2.7528C2.91997 2.91762 2.72771 3.15189 2.61418 3.42597C2.50065 3.70006 2.47094 4.00166 2.52882 4.29264C2.5867 4.58361 2.72956 4.85088 2.93934 5.06066C3.14912 5.27044 3.41639 5.4133 3.70737 5.47118C3.99834 5.52906 4.29994 5.49935 4.57403 5.38582C4.84811 5.27229 5.08238 5.08003 5.2472 4.83336C5.41203 4.58668 5.5 4.29667 5.5 4C5.5 3.60218 5.34197 3.22064 5.06066 2.93934C4.77936 2.65804 4.39783 2.5 4 2.5ZM4 5C3.80222 5 3.60888 4.94135 3.44443 4.83147C3.27998 4.72159 3.15181 4.56541 3.07612 4.38268C3.00043 4.19996 2.98063 3.99889 3.01922 3.80491C3.0578 3.61093 3.15304 3.43275 3.29289 3.29289C3.43275 3.15304 3.61093 3.0578 3.80491 3.01921C3.99889 2.98063 4.19996 3.00043 4.38268 3.07612C4.56541 3.15181 4.72159 3.27998 4.83147 3.44443C4.94135 3.60888 5 3.80222 5 4C5 4.26522 4.89464 4.51957 4.70711 4.70711C4.51957 4.89464 4.26522 5 4 5Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M3.99984 4.00003C4.18393 4.00003 4.33317 3.85079 4.33317 3.66669C4.33317 3.4826 4.18393 3.33336 3.99984 3.33336C3.81574 3.33336 3.6665 3.4826 3.6665 3.66669C3.6665 3.85079 3.81574 4.00003 3.99984 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M5.33333 4.00003C5.51743 4.00003 5.66667 3.85079 5.66667 3.66669C5.66667 3.4826 5.51743 3.33336 5.33333 3.33336C5.14924 3.33336 5 3.4826 5 3.66669C5 3.85079 5.14924 4.00003 5.33333 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M2.66683 4.00003C2.85092 4.00003 3.00016 3.85079 3.00016 3.66669C3.00016 3.4826 2.85092 3.33336 2.66683 3.33336C2.48273 3.33336 2.3335 3.4826 2.3335 3.66669C2.3335 3.85079 2.48273 4.00003 2.66683 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M1.6665 1H6.33317C6.88546 1 7.33317 1.44772 7.33317 2V5.33333C7.33317 5.88562 6.88546 6.33333 6.33317 6.33333H2.84984C2.7855 6.33086 2.72183 6.34707 2.6665 6.38L1.16984 7.28667C1.11839 7.3172 1.05966 7.33332 0.999837 7.33333C0.942574 7.33316 0.886322 7.31823 0.836504 7.29C0.731675 7.23108 0.666711 7.12025 0.666504 7V2C0.666504 1.44772 1.11422 1 1.6665 1ZM6.33333 5.66664C6.51743 5.66664 6.66667 5.5174 6.66667 5.33331V1.99997C6.66667 1.81588 6.51743 1.66664 6.33333 1.66664H1.66667C1.48257 1.66664 1.33333 1.81588 1.33333 1.99997V6.40997L2.33333 5.80997C2.4893 5.71605 2.66794 5.66649 2.85 5.66664H6.33333Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>

                                                            <span>39</span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M7.1918 7.06098C6.63551 7.0583 6.10355 6.83255 5.71513 6.43431C5.3297 6.069 5.10537 5.56539 5.09161 5.03452C5.07786 4.50364 5.2758 3.98909 5.6418 3.60431L8.09513 1.12764C8.35988 0.86338 8.72117 0.718864 9.09513 0.727642C9.49558 0.729006 9.87869 0.89114 10.1585 1.17764C10.7322 1.73001 10.7545 2.64121 10.2085 3.22098L7.7418 5.69764C7.58221 5.85831 7.36492 5.94835 7.13847 5.94764C6.89379 5.94797 6.65938 5.84939 6.48847 5.67431C6.13654 5.33358 6.12465 4.773 6.4618 4.41764L8.73847 2.13098C8.87215 2.04219 9.05012 2.06127 9.16195 2.17636C9.27378 2.29146 9.28773 2.4699 9.19513 2.60098L6.91847 4.88764C6.83948 4.9828 6.85135 5.1237 6.94513 5.20431C6.99204 5.25154 7.05527 5.27898 7.1218 5.28098C7.17158 5.28169 7.21958 5.26249 7.25513 5.22764L9.71847 2.75098C10.0062 2.43135 9.98391 1.93993 9.66847 1.64764C9.37609 1.34409 8.8974 1.32213 8.57847 1.59764L6.11513 4.06098C5.8732 4.32083 5.74489 4.66645 5.75866 5.02123C5.77243 5.37601 5.92712 5.71065 6.18847 5.95098C6.45059 6.2227 6.81093 6.37765 7.18847 6.38098C7.51392 6.38362 7.82701 6.25646 8.05847 6.02764L10.5218 3.55098C10.6516 3.42027 10.8628 3.41952 10.9935 3.54931C11.1242 3.6791 11.1249 3.89027 10.9951 4.02098L8.5318 6.49764C8.17852 6.85717 7.69585 7.06008 7.1918 7.06098Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span>10</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="Add-btn">
                                        <a class="btn" href="#">
                                            ADD
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

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="board-column">
                            <div class="board-column-container">
                                <div class="board-column-header">Balance Paid</div>
                                <div class="board-column-content-wrapper">
                                    <div class="board-column-content" data-id="balanced_paid">
                                        @foreach($customers as $customer)
                                        @if($customer->customer_pipeline_status == '5')
                                        <div class="board-item" data-id="{{ $customer->customer_id }}" onclick="viewCustomerDetails({{ $customer->customer_id }})">
                                            <div class="board-item-content" data-id="balanced_paid">
                                                <div class="sales-details-box">
                                                    <h5>{{ $customer->name }}</h5>
                                                    <!-- <p>Lorem Ipsum is dummy text.</p> -->
                                                    <div class="user-image">
                                                        <img src="{{ asset('img/home/Ellipse 27.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 28.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 29.svg') }}">
                                                    </div>
                                                    <div class="share-sec">
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.42859 3.42857H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 2.28572H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 4.57143H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M5.42859 5.71428H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.73502 3.915C7.44098 3.15441 6.93051 2.49665 6.26671 2.02302C5.60292 1.54939 4.81489 1.28064 4.00002 1.25C3.18514 1.28064 2.39711 1.54939 1.73332 2.02302C1.06952 2.49665 0.559056 3.15441 0.265016 3.915C0.245158 3.96993 0.245158 4.03007 0.265016 4.085C0.559056 4.84559 1.06952 5.50335 1.73332 5.97698C2.39711 6.45061 3.18514 6.71936 4.00002 6.75C4.81489 6.71936 5.60292 6.45061 6.26671 5.97698C6.93051 5.50335 7.44098 4.84559 7.73502 4.085C7.75487 4.03007 7.75487 3.96993 7.73502 3.915ZM4.00002 6.25C2.67502 6.25 1.27502 5.2675 0.767516 4C1.27502 2.7325 2.67502 1.75 4.00002 1.75C5.32502 1.75 6.72502 2.7325 7.23252 4C6.72502 5.2675 5.32502 6.25 4.00002 6.25Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M4 2.5C3.70333 2.5 3.41332 2.58797 3.16665 2.7528C2.91997 2.91762 2.72771 3.15189 2.61418 3.42597C2.50065 3.70006 2.47094 4.00166 2.52882 4.29264C2.5867 4.58361 2.72956 4.85088 2.93934 5.06066C3.14912 5.27044 3.41639 5.4133 3.70737 5.47118C3.99834 5.52906 4.29994 5.49935 4.57403 5.38582C4.84811 5.27229 5.08238 5.08003 5.2472 4.83336C5.41203 4.58668 5.5 4.29667 5.5 4C5.5 3.60218 5.34197 3.22064 5.06066 2.93934C4.77936 2.65804 4.39783 2.5 4 2.5ZM4 5C3.80222 5 3.60888 4.94135 3.44443 4.83147C3.27998 4.72159 3.15181 4.56541 3.07612 4.38268C3.00043 4.19996 2.98063 3.99889 3.01922 3.80491C3.0578 3.61093 3.15304 3.43275 3.29289 3.29289C3.43275 3.15304 3.61093 3.0578 3.80491 3.01921C3.99889 2.98063 4.19996 3.00043 4.38268 3.07612C4.56541 3.15181 4.72159 3.27998 4.83147 3.44443C4.94135 3.60888 5 3.80222 5 4C5 4.26522 4.89464 4.51957 4.70711 4.70711C4.51957 4.89464 4.26522 5 4 5Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M3.99984 4.00003C4.18393 4.00003 4.33317 3.85079 4.33317 3.66669C4.33317 3.4826 4.18393 3.33336 3.99984 3.33336C3.81574 3.33336 3.6665 3.4826 3.6665 3.66669C3.6665 3.85079 3.81574 4.00003 3.99984 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M5.33333 4.00003C5.51743 4.00003 5.66667 3.85079 5.66667 3.66669C5.66667 3.4826 5.51743 3.33336 5.33333 3.33336C5.14924 3.33336 5 3.4826 5 3.66669C5 3.85079 5.14924 4.00003 5.33333 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M2.66683 4.00003C2.85092 4.00003 3.00016 3.85079 3.00016 3.66669C3.00016 3.4826 2.85092 3.33336 2.66683 3.33336C2.48273 3.33336 2.3335 3.4826 2.3335 3.66669C2.3335 3.85079 2.48273 4.00003 2.66683 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M1.6665 1H6.33317C6.88546 1 7.33317 1.44772 7.33317 2V5.33333C7.33317 5.88562 6.88546 6.33333 6.33317 6.33333H2.84984C2.7855 6.33086 2.72183 6.34707 2.6665 6.38L1.16984 7.28667C1.11839 7.3172 1.05966 7.33332 0.999837 7.33333C0.942574 7.33316 0.886322 7.31823 0.836504 7.29C0.731675 7.23108 0.666711 7.12025 0.666504 7V2C0.666504 1.44772 1.11422 1 1.6665 1ZM6.33333 5.66664C6.51743 5.66664 6.66667 5.5174 6.66667 5.33331V1.99997C6.66667 1.81588 6.51743 1.66664 6.33333 1.66664H1.66667C1.48257 1.66664 1.33333 1.81588 1.33333 1.99997V6.40997L2.33333 5.80997C2.4893 5.71605 2.66794 5.66649 2.85 5.66664H6.33333Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>

                                                            <span>39</span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M7.1918 7.06098C6.63551 7.0583 6.10355 6.83255 5.71513 6.43431C5.3297 6.069 5.10537 5.56539 5.09161 5.03452C5.07786 4.50364 5.2758 3.98909 5.6418 3.60431L8.09513 1.12764C8.35988 0.86338 8.72117 0.718864 9.09513 0.727642C9.49558 0.729006 9.87869 0.89114 10.1585 1.17764C10.7322 1.73001 10.7545 2.64121 10.2085 3.22098L7.7418 5.69764C7.58221 5.85831 7.36492 5.94835 7.13847 5.94764C6.89379 5.94797 6.65938 5.84939 6.48847 5.67431C6.13654 5.33358 6.12465 4.773 6.4618 4.41764L8.73847 2.13098C8.87215 2.04219 9.05012 2.06127 9.16195 2.17636C9.27378 2.29146 9.28773 2.4699 9.19513 2.60098L6.91847 4.88764C6.83948 4.9828 6.85135 5.1237 6.94513 5.20431C6.99204 5.25154 7.05527 5.27898 7.1218 5.28098C7.17158 5.28169 7.21958 5.26249 7.25513 5.22764L9.71847 2.75098C10.0062 2.43135 9.98391 1.93993 9.66847 1.64764C9.37609 1.34409 8.8974 1.32213 8.57847 1.59764L6.11513 4.06098C5.8732 4.32083 5.74489 4.66645 5.75866 5.02123C5.77243 5.37601 5.92712 5.71065 6.18847 5.95098C6.45059 6.2227 6.81093 6.37765 7.18847 6.38098C7.51392 6.38362 7.82701 6.25646 8.05847 6.02764L10.5218 3.55098C10.6516 3.42027 10.8628 3.41952 10.9935 3.54931C11.1242 3.6791 11.1249 3.89027 10.9951 4.02098L8.5318 6.49764C8.17852 6.85717 7.69585 7.06008 7.1918 7.06098Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span>10</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="Add-btn">
                                        <a class="btn" href="#">
                                            ADD
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

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="board-column style-two">
                            <div class="board-column-container">
                                <div class="board-column-header">Pre-Event</div>
                                <div class="board-column-content-wrapper">
                                    <div class="board-column-content" data-id="pre_event">
                                        @foreach($customers as $customer)
                                        @if($customer->customer_pipeline_status == '6')
                                        <div class="board-item" data-id="{{ $customer->customer_id }}" onclick="viewCustomerDetails({{ $customer->customer_id }})">
                                            <div class="board-item-content">
                                                <div class="sales-details-box">
                                                    <h5>{{ $customer->name }}</h5>
                                                    <!-- <p>Lorem Ipsum is dummy text.</p> -->
                                                    <div class="user-image">
                                                        <img src="{{ asset('img/home/Ellipse 27.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 28.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 29.svg') }}">
                                                    </div>
                                                    <div class="share-sec">
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.42859 3.42857H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 2.28572H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 4.57143H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M5.42859 5.71428H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.73502 3.915C7.44098 3.15441 6.93051 2.49665 6.26671 2.02302C5.60292 1.54939 4.81489 1.28064 4.00002 1.25C3.18514 1.28064 2.39711 1.54939 1.73332 2.02302C1.06952 2.49665 0.559056 3.15441 0.265016 3.915C0.245158 3.96993 0.245158 4.03007 0.265016 4.085C0.559056 4.84559 1.06952 5.50335 1.73332 5.97698C2.39711 6.45061 3.18514 6.71936 4.00002 6.75C4.81489 6.71936 5.60292 6.45061 6.26671 5.97698C6.93051 5.50335 7.44098 4.84559 7.73502 4.085C7.75487 4.03007 7.75487 3.96993 7.73502 3.915ZM4.00002 6.25C2.67502 6.25 1.27502 5.2675 0.767516 4C1.27502 2.7325 2.67502 1.75 4.00002 1.75C5.32502 1.75 6.72502 2.7325 7.23252 4C6.72502 5.2675 5.32502 6.25 4.00002 6.25Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M4 2.5C3.70333 2.5 3.41332 2.58797 3.16665 2.7528C2.91997 2.91762 2.72771 3.15189 2.61418 3.42597C2.50065 3.70006 2.47094 4.00166 2.52882 4.29264C2.5867 4.58361 2.72956 4.85088 2.93934 5.06066C3.14912 5.27044 3.41639 5.4133 3.70737 5.47118C3.99834 5.52906 4.29994 5.49935 4.57403 5.38582C4.84811 5.27229 5.08238 5.08003 5.2472 4.83336C5.41203 4.58668 5.5 4.29667 5.5 4C5.5 3.60218 5.34197 3.22064 5.06066 2.93934C4.77936 2.65804 4.39783 2.5 4 2.5ZM4 5C3.80222 5 3.60888 4.94135 3.44443 4.83147C3.27998 4.72159 3.15181 4.56541 3.07612 4.38268C3.00043 4.19996 2.98063 3.99889 3.01922 3.80491C3.0578 3.61093 3.15304 3.43275 3.29289 3.29289C3.43275 3.15304 3.61093 3.0578 3.80491 3.01921C3.99889 2.98063 4.19996 3.00043 4.38268 3.07612C4.56541 3.15181 4.72159 3.27998 4.83147 3.44443C4.94135 3.60888 5 3.80222 5 4C5 4.26522 4.89464 4.51957 4.70711 4.70711C4.51957 4.89464 4.26522 5 4 5Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M3.99984 4.00003C4.18393 4.00003 4.33317 3.85079 4.33317 3.66669C4.33317 3.4826 4.18393 3.33336 3.99984 3.33336C3.81574 3.33336 3.6665 3.4826 3.6665 3.66669C3.6665 3.85079 3.81574 4.00003 3.99984 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M5.33333 4.00003C5.51743 4.00003 5.66667 3.85079 5.66667 3.66669C5.66667 3.4826 5.51743 3.33336 5.33333 3.33336C5.14924 3.33336 5 3.4826 5 3.66669C5 3.85079 5.14924 4.00003 5.33333 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M2.66683 4.00003C2.85092 4.00003 3.00016 3.85079 3.00016 3.66669C3.00016 3.4826 2.85092 3.33336 2.66683 3.33336C2.48273 3.33336 2.3335 3.4826 2.3335 3.66669C2.3335 3.85079 2.48273 4.00003 2.66683 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M1.6665 1H6.33317C6.88546 1 7.33317 1.44772 7.33317 2V5.33333C7.33317 5.88562 6.88546 6.33333 6.33317 6.33333H2.84984C2.7855 6.33086 2.72183 6.34707 2.6665 6.38L1.16984 7.28667C1.11839 7.3172 1.05966 7.33332 0.999837 7.33333C0.942574 7.33316 0.886322 7.31823 0.836504 7.29C0.731675 7.23108 0.666711 7.12025 0.666504 7V2C0.666504 1.44772 1.11422 1 1.6665 1ZM6.33333 5.66664C6.51743 5.66664 6.66667 5.5174 6.66667 5.33331V1.99997C6.66667 1.81588 6.51743 1.66664 6.33333 1.66664H1.66667C1.48257 1.66664 1.33333 1.81588 1.33333 1.99997V6.40997L2.33333 5.80997C2.4893 5.71605 2.66794 5.66649 2.85 5.66664H6.33333Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>

                                                            <span>39</span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M7.1918 7.06098C6.63551 7.0583 6.10355 6.83255 5.71513 6.43431C5.3297 6.069 5.10537 5.56539 5.09161 5.03452C5.07786 4.50364 5.2758 3.98909 5.6418 3.60431L8.09513 1.12764C8.35988 0.86338 8.72117 0.718864 9.09513 0.727642C9.49558 0.729006 9.87869 0.89114 10.1585 1.17764C10.7322 1.73001 10.7545 2.64121 10.2085 3.22098L7.7418 5.69764C7.58221 5.85831 7.36492 5.94835 7.13847 5.94764C6.89379 5.94797 6.65938 5.84939 6.48847 5.67431C6.13654 5.33358 6.12465 4.773 6.4618 4.41764L8.73847 2.13098C8.87215 2.04219 9.05012 2.06127 9.16195 2.17636C9.27378 2.29146 9.28773 2.4699 9.19513 2.60098L6.91847 4.88764C6.83948 4.9828 6.85135 5.1237 6.94513 5.20431C6.99204 5.25154 7.05527 5.27898 7.1218 5.28098C7.17158 5.28169 7.21958 5.26249 7.25513 5.22764L9.71847 2.75098C10.0062 2.43135 9.98391 1.93993 9.66847 1.64764C9.37609 1.34409 8.8974 1.32213 8.57847 1.59764L6.11513 4.06098C5.8732 4.32083 5.74489 4.66645 5.75866 5.02123C5.77243 5.37601 5.92712 5.71065 6.18847 5.95098C6.45059 6.2227 6.81093 6.37765 7.18847 6.38098C7.51392 6.38362 7.82701 6.25646 8.05847 6.02764L10.5218 3.55098C10.6516 3.42027 10.8628 3.41952 10.9935 3.54931C11.1242 3.6791 11.1249 3.89027 10.9951 4.02098L8.5318 6.49764C8.17852 6.85717 7.69585 7.06008 7.1918 7.06098Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span>10</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="Add-btn">
                                        <a class="btn" href="#">
                                            ADD
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

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="board-column">
                            <div class="board-column-container">
                                <div class="board-column-header">Post Gig (Feedback)</div>
                                <div class="board-column-content-wrapper">
                                    <div class="board-column-content" data-id="post_gig_feedback">
                                        @foreach($customers as $customer)
                                        @if($customer->customer_pipeline_status == '7')
                                        <div class="board-item" data-id="{{ $customer->customer_id }}" onclick="viewCustomerDetails({{ $customer->customer_id }})">
                                            <div class="board-item-content">
                                                <div class="sales-details-box">
                                                    <h5>{{ $customer->name }}</h5>
                                                    <!-- <p>Lorem Ipsum is dummy text.</p> -->
                                                    <div class="user-image">
                                                        <img src="{{ asset('img/home/Ellipse 27.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 28.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 29.svg') }}">
                                                    </div>
                                                    <div class="share-sec">
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.42859 3.42857H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 2.28572H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 4.57143H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M5.42859 5.71428H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.73502 3.915C7.44098 3.15441 6.93051 2.49665 6.26671 2.02302C5.60292 1.54939 4.81489 1.28064 4.00002 1.25C3.18514 1.28064 2.39711 1.54939 1.73332 2.02302C1.06952 2.49665 0.559056 3.15441 0.265016 3.915C0.245158 3.96993 0.245158 4.03007 0.265016 4.085C0.559056 4.84559 1.06952 5.50335 1.73332 5.97698C2.39711 6.45061 3.18514 6.71936 4.00002 6.75C4.81489 6.71936 5.60292 6.45061 6.26671 5.97698C6.93051 5.50335 7.44098 4.84559 7.73502 4.085C7.75487 4.03007 7.75487 3.96993 7.73502 3.915ZM4.00002 6.25C2.67502 6.25 1.27502 5.2675 0.767516 4C1.27502 2.7325 2.67502 1.75 4.00002 1.75C5.32502 1.75 6.72502 2.7325 7.23252 4C6.72502 5.2675 5.32502 6.25 4.00002 6.25Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M4 2.5C3.70333 2.5 3.41332 2.58797 3.16665 2.7528C2.91997 2.91762 2.72771 3.15189 2.61418 3.42597C2.50065 3.70006 2.47094 4.00166 2.52882 4.29264C2.5867 4.58361 2.72956 4.85088 2.93934 5.06066C3.14912 5.27044 3.41639 5.4133 3.70737 5.47118C3.99834 5.52906 4.29994 5.49935 4.57403 5.38582C4.84811 5.27229 5.08238 5.08003 5.2472 4.83336C5.41203 4.58668 5.5 4.29667 5.5 4C5.5 3.60218 5.34197 3.22064 5.06066 2.93934C4.77936 2.65804 4.39783 2.5 4 2.5ZM4 5C3.80222 5 3.60888 4.94135 3.44443 4.83147C3.27998 4.72159 3.15181 4.56541 3.07612 4.38268C3.00043 4.19996 2.98063 3.99889 3.01922 3.80491C3.0578 3.61093 3.15304 3.43275 3.29289 3.29289C3.43275 3.15304 3.61093 3.0578 3.80491 3.01921C3.99889 2.98063 4.19996 3.00043 4.38268 3.07612C4.56541 3.15181 4.72159 3.27998 4.83147 3.44443C4.94135 3.60888 5 3.80222 5 4C5 4.26522 4.89464 4.51957 4.70711 4.70711C4.51957 4.89464 4.26522 5 4 5Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M3.99984 4.00003C4.18393 4.00003 4.33317 3.85079 4.33317 3.66669C4.33317 3.4826 4.18393 3.33336 3.99984 3.33336C3.81574 3.33336 3.6665 3.4826 3.6665 3.66669C3.6665 3.85079 3.81574 4.00003 3.99984 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M5.33333 4.00003C5.51743 4.00003 5.66667 3.85079 5.66667 3.66669C5.66667 3.4826 5.51743 3.33336 5.33333 3.33336C5.14924 3.33336 5 3.4826 5 3.66669C5 3.85079 5.14924 4.00003 5.33333 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M2.66683 4.00003C2.85092 4.00003 3.00016 3.85079 3.00016 3.66669C3.00016 3.4826 2.85092 3.33336 2.66683 3.33336C2.48273 3.33336 2.3335 3.4826 2.3335 3.66669C2.3335 3.85079 2.48273 4.00003 2.66683 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M1.6665 1H6.33317C6.88546 1 7.33317 1.44772 7.33317 2V5.33333C7.33317 5.88562 6.88546 6.33333 6.33317 6.33333H2.84984C2.7855 6.33086 2.72183 6.34707 2.6665 6.38L1.16984 7.28667C1.11839 7.3172 1.05966 7.33332 0.999837 7.33333C0.942574 7.33316 0.886322 7.31823 0.836504 7.29C0.731675 7.23108 0.666711 7.12025 0.666504 7V2C0.666504 1.44772 1.11422 1 1.6665 1ZM6.33333 5.66664C6.51743 5.66664 6.66667 5.5174 6.66667 5.33331V1.99997C6.66667 1.81588 6.51743 1.66664 6.33333 1.66664H1.66667C1.48257 1.66664 1.33333 1.81588 1.33333 1.99997V6.40997L2.33333 5.80997C2.4893 5.71605 2.66794 5.66649 2.85 5.66664H6.33333Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>

                                                            <span>39</span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M7.1918 7.06098C6.63551 7.0583 6.10355 6.83255 5.71513 6.43431C5.3297 6.069 5.10537 5.56539 5.09161 5.03452C5.07786 4.50364 5.2758 3.98909 5.6418 3.60431L8.09513 1.12764C8.35988 0.86338 8.72117 0.718864 9.09513 0.727642C9.49558 0.729006 9.87869 0.89114 10.1585 1.17764C10.7322 1.73001 10.7545 2.64121 10.2085 3.22098L7.7418 5.69764C7.58221 5.85831 7.36492 5.94835 7.13847 5.94764C6.89379 5.94797 6.65938 5.84939 6.48847 5.67431C6.13654 5.33358 6.12465 4.773 6.4618 4.41764L8.73847 2.13098C8.87215 2.04219 9.05012 2.06127 9.16195 2.17636C9.27378 2.29146 9.28773 2.4699 9.19513 2.60098L6.91847 4.88764C6.83948 4.9828 6.85135 5.1237 6.94513 5.20431C6.99204 5.25154 7.05527 5.27898 7.1218 5.28098C7.17158 5.28169 7.21958 5.26249 7.25513 5.22764L9.71847 2.75098C10.0062 2.43135 9.98391 1.93993 9.66847 1.64764C9.37609 1.34409 8.8974 1.32213 8.57847 1.59764L6.11513 4.06098C5.8732 4.32083 5.74489 4.66645 5.75866 5.02123C5.77243 5.37601 5.92712 5.71065 6.18847 5.95098C6.45059 6.2227 6.81093 6.37765 7.18847 6.38098C7.51392 6.38362 7.82701 6.25646 8.05847 6.02764L10.5218 3.55098C10.6516 3.42027 10.8628 3.41952 10.9935 3.54931C11.1242 3.6791 11.1249 3.89027 10.9951 4.02098L8.5318 6.49764C8.17852 6.85717 7.69585 7.06008 7.1918 7.06098Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span>10</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="Add-btn">
                                        <a class="btn" href="#">
                                            ADD
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

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="board-column style-two">
                            <div class="board-column-container">
                                <div class="board-column-header">Post Gig (Final)</div>
                                <div class="board-column-content-wrapper">
                                    <div class="board-column-content" data-id="post_gig_final">
                                        @foreach($customers as $customer)
                                        @if($customer->customer_pipeline_status == '8')
                                        <div class="board-item" data-id="{{ $customer->customer_id }}" onclick="viewCustomerDetails({{ $customer->customer_id }})">
                                            <div class="board-item-content">
                                                <div class="sales-details-box">
                                                    <h5>{{ $customer->name }}</h5>
                                                    <!-- <p>Lorem Ipsum is dummy text.</p> -->
                                                    <div class="user-image">
                                                        <img src="{{ asset('img/home/Ellipse 27.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 28.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 29.svg') }}">
                                                    </div>
                                                    <div class="share-sec">
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.42859 3.42857H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 2.28572H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 4.57143H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M5.42859 5.71428H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.73502 3.915C7.44098 3.15441 6.93051 2.49665 6.26671 2.02302C5.60292 1.54939 4.81489 1.28064 4.00002 1.25C3.18514 1.28064 2.39711 1.54939 1.73332 2.02302C1.06952 2.49665 0.559056 3.15441 0.265016 3.915C0.245158 3.96993 0.245158 4.03007 0.265016 4.085C0.559056 4.84559 1.06952 5.50335 1.73332 5.97698C2.39711 6.45061 3.18514 6.71936 4.00002 6.75C4.81489 6.71936 5.60292 6.45061 6.26671 5.97698C6.93051 5.50335 7.44098 4.84559 7.73502 4.085C7.75487 4.03007 7.75487 3.96993 7.73502 3.915ZM4.00002 6.25C2.67502 6.25 1.27502 5.2675 0.767516 4C1.27502 2.7325 2.67502 1.75 4.00002 1.75C5.32502 1.75 6.72502 2.7325 7.23252 4C6.72502 5.2675 5.32502 6.25 4.00002 6.25Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M4 2.5C3.70333 2.5 3.41332 2.58797 3.16665 2.7528C2.91997 2.91762 2.72771 3.15189 2.61418 3.42597C2.50065 3.70006 2.47094 4.00166 2.52882 4.29264C2.5867 4.58361 2.72956 4.85088 2.93934 5.06066C3.14912 5.27044 3.41639 5.4133 3.70737 5.47118C3.99834 5.52906 4.29994 5.49935 4.57403 5.38582C4.84811 5.27229 5.08238 5.08003 5.2472 4.83336C5.41203 4.58668 5.5 4.29667 5.5 4C5.5 3.60218 5.34197 3.22064 5.06066 2.93934C4.77936 2.65804 4.39783 2.5 4 2.5ZM4 5C3.80222 5 3.60888 4.94135 3.44443 4.83147C3.27998 4.72159 3.15181 4.56541 3.07612 4.38268C3.00043 4.19996 2.98063 3.99889 3.01922 3.80491C3.0578 3.61093 3.15304 3.43275 3.29289 3.29289C3.43275 3.15304 3.61093 3.0578 3.80491 3.01921C3.99889 2.98063 4.19996 3.00043 4.38268 3.07612C4.56541 3.15181 4.72159 3.27998 4.83147 3.44443C4.94135 3.60888 5 3.80222 5 4C5 4.26522 4.89464 4.51957 4.70711 4.70711C4.51957 4.89464 4.26522 5 4 5Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M3.99984 4.00003C4.18393 4.00003 4.33317 3.85079 4.33317 3.66669C4.33317 3.4826 4.18393 3.33336 3.99984 3.33336C3.81574 3.33336 3.6665 3.4826 3.6665 3.66669C3.6665 3.85079 3.81574 4.00003 3.99984 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M5.33333 4.00003C5.51743 4.00003 5.66667 3.85079 5.66667 3.66669C5.66667 3.4826 5.51743 3.33336 5.33333 3.33336C5.14924 3.33336 5 3.4826 5 3.66669C5 3.85079 5.14924 4.00003 5.33333 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M2.66683 4.00003C2.85092 4.00003 3.00016 3.85079 3.00016 3.66669C3.00016 3.4826 2.85092 3.33336 2.66683 3.33336C2.48273 3.33336 2.3335 3.4826 2.3335 3.66669C2.3335 3.85079 2.48273 4.00003 2.66683 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M1.6665 1H6.33317C6.88546 1 7.33317 1.44772 7.33317 2V5.33333C7.33317 5.88562 6.88546 6.33333 6.33317 6.33333H2.84984C2.7855 6.33086 2.72183 6.34707 2.6665 6.38L1.16984 7.28667C1.11839 7.3172 1.05966 7.33332 0.999837 7.33333C0.942574 7.33316 0.886322 7.31823 0.836504 7.29C0.731675 7.23108 0.666711 7.12025 0.666504 7V2C0.666504 1.44772 1.11422 1 1.6665 1ZM6.33333 5.66664C6.51743 5.66664 6.66667 5.5174 6.66667 5.33331V1.99997C6.66667 1.81588 6.51743 1.66664 6.33333 1.66664H1.66667C1.48257 1.66664 1.33333 1.81588 1.33333 1.99997V6.40997L2.33333 5.80997C2.4893 5.71605 2.66794 5.66649 2.85 5.66664H6.33333Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>

                                                            <span>39</span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M7.1918 7.06098C6.63551 7.0583 6.10355 6.83255 5.71513 6.43431C5.3297 6.069 5.10537 5.56539 5.09161 5.03452C5.07786 4.50364 5.2758 3.98909 5.6418 3.60431L8.09513 1.12764C8.35988 0.86338 8.72117 0.718864 9.09513 0.727642C9.49558 0.729006 9.87869 0.89114 10.1585 1.17764C10.7322 1.73001 10.7545 2.64121 10.2085 3.22098L7.7418 5.69764C7.58221 5.85831 7.36492 5.94835 7.13847 5.94764C6.89379 5.94797 6.65938 5.84939 6.48847 5.67431C6.13654 5.33358 6.12465 4.773 6.4618 4.41764L8.73847 2.13098C8.87215 2.04219 9.05012 2.06127 9.16195 2.17636C9.27378 2.29146 9.28773 2.4699 9.19513 2.60098L6.91847 4.88764C6.83948 4.9828 6.85135 5.1237 6.94513 5.20431C6.99204 5.25154 7.05527 5.27898 7.1218 5.28098C7.17158 5.28169 7.21958 5.26249 7.25513 5.22764L9.71847 2.75098C10.0062 2.43135 9.98391 1.93993 9.66847 1.64764C9.37609 1.34409 8.8974 1.32213 8.57847 1.59764L6.11513 4.06098C5.8732 4.32083 5.74489 4.66645 5.75866 5.02123C5.77243 5.37601 5.92712 5.71065 6.18847 5.95098C6.45059 6.2227 6.81093 6.37765 7.18847 6.38098C7.51392 6.38362 7.82701 6.25646 8.05847 6.02764L10.5218 3.55098C10.6516 3.42027 10.8628 3.41952 10.9935 3.54931C11.1242 3.6791 11.1249 3.89027 10.9951 4.02098L8.5318 6.49764C8.17852 6.85717 7.69585 7.06008 7.1918 7.06098Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span>10</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="Add-btn">
                                        <a class="btn" href="#">
                                            ADD
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

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="board-column">
                            <div class="board-column-container">
                                <div class="board-column-header">Archive</div>
                                <div class="board-column-content-wrapper">
                                    <div class="board-column-content" data-id="archive">
                                        @foreach($customers as $customer)
                                        @if($customer->customer_pipeline_status == '9')
                                        <div class="board-item" data-id="{{ $customer->customer_id }}" onclick="viewCustomerDetails({{ $customer->customer_id }})">
                                            <div class="board-item-content">
                                                <div class="sales-details-box">
                                                    <h5>{{ $customer->name }}</h5>
                                                    <!-- <p>Lorem Ipsum is dummy text.</p> -->
                                                    <div class="user-image">
                                                        <img src="{{ asset('img/home/Ellipse 27.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 28.svg') }}">
                                                        <img class="cbs-afs" src="{{ asset('img/home/Ellipse 29.svg') }}">
                                                    </div>
                                                    <div class="share-sec">
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.42859 3.42857H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 2.28572H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.57145 4.57143H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M5.42859 5.71428H1.42859" stroke="#868686" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.73502 3.915C7.44098 3.15441 6.93051 2.49665 6.26671 2.02302C5.60292 1.54939 4.81489 1.28064 4.00002 1.25C3.18514 1.28064 2.39711 1.54939 1.73332 2.02302C1.06952 2.49665 0.559056 3.15441 0.265016 3.915C0.245158 3.96993 0.245158 4.03007 0.265016 4.085C0.559056 4.84559 1.06952 5.50335 1.73332 5.97698C2.39711 6.45061 3.18514 6.71936 4.00002 6.75C4.81489 6.71936 5.60292 6.45061 6.26671 5.97698C6.93051 5.50335 7.44098 4.84559 7.73502 4.085C7.75487 4.03007 7.75487 3.96993 7.73502 3.915ZM4.00002 6.25C2.67502 6.25 1.27502 5.2675 0.767516 4C1.27502 2.7325 2.67502 1.75 4.00002 1.75C5.32502 1.75 6.72502 2.7325 7.23252 4C6.72502 5.2675 5.32502 6.25 4.00002 6.25Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M4 2.5C3.70333 2.5 3.41332 2.58797 3.16665 2.7528C2.91997 2.91762 2.72771 3.15189 2.61418 3.42597C2.50065 3.70006 2.47094 4.00166 2.52882 4.29264C2.5867 4.58361 2.72956 4.85088 2.93934 5.06066C3.14912 5.27044 3.41639 5.4133 3.70737 5.47118C3.99834 5.52906 4.29994 5.49935 4.57403 5.38582C4.84811 5.27229 5.08238 5.08003 5.2472 4.83336C5.41203 4.58668 5.5 4.29667 5.5 4C5.5 3.60218 5.34197 3.22064 5.06066 2.93934C4.77936 2.65804 4.39783 2.5 4 2.5ZM4 5C3.80222 5 3.60888 4.94135 3.44443 4.83147C3.27998 4.72159 3.15181 4.56541 3.07612 4.38268C3.00043 4.19996 2.98063 3.99889 3.01922 3.80491C3.0578 3.61093 3.15304 3.43275 3.29289 3.29289C3.43275 3.15304 3.61093 3.0578 3.80491 3.01921C3.99889 2.98063 4.19996 3.00043 4.38268 3.07612C4.56541 3.15181 4.72159 3.27998 4.83147 3.44443C4.94135 3.60888 5 3.80222 5 4C5 4.26522 4.89464 4.51957 4.70711 4.70711C4.51957 4.89464 4.26522 5 4 5Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span></span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M3.99984 4.00003C4.18393 4.00003 4.33317 3.85079 4.33317 3.66669C4.33317 3.4826 4.18393 3.33336 3.99984 3.33336C3.81574 3.33336 3.6665 3.4826 3.6665 3.66669C3.6665 3.85079 3.81574 4.00003 3.99984 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M5.33333 4.00003C5.51743 4.00003 5.66667 3.85079 5.66667 3.66669C5.66667 3.4826 5.51743 3.33336 5.33333 3.33336C5.14924 3.33336 5 3.4826 5 3.66669C5 3.85079 5.14924 4.00003 5.33333 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    d="M2.66683 4.00003C2.85092 4.00003 3.00016 3.85079 3.00016 3.66669C3.00016 3.4826 2.85092 3.33336 2.66683 3.33336C2.48273 3.33336 2.3335 3.4826 2.3335 3.66669C2.3335 3.85079 2.48273 4.00003 2.66683 4.00003Z"
                                                                    fill="#868686"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M1.6665 1H6.33317C6.88546 1 7.33317 1.44772 7.33317 2V5.33333C7.33317 5.88562 6.88546 6.33333 6.33317 6.33333H2.84984C2.7855 6.33086 2.72183 6.34707 2.6665 6.38L1.16984 7.28667C1.11839 7.3172 1.05966 7.33332 0.999837 7.33333C0.942574 7.33316 0.886322 7.31823 0.836504 7.29C0.731675 7.23108 0.666711 7.12025 0.666504 7V2C0.666504 1.44772 1.11422 1 1.6665 1ZM6.33333 5.66664C6.51743 5.66664 6.66667 5.5174 6.66667 5.33331V1.99997C6.66667 1.81588 6.51743 1.66664 6.33333 1.66664H1.66667C1.48257 1.66664 1.33333 1.81588 1.33333 1.99997V6.40997L2.33333 5.80997C2.4893 5.71605 2.66794 5.66649 2.85 5.66664H6.33333Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>

                                                            <span>39</span>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.01" width="8" height="8" fill="#868686"></rect>
                                                                <path
                                                                    d="M7.1918 7.06098C6.63551 7.0583 6.10355 6.83255 5.71513 6.43431C5.3297 6.069 5.10537 5.56539 5.09161 5.03452C5.07786 4.50364 5.2758 3.98909 5.6418 3.60431L8.09513 1.12764C8.35988 0.86338 8.72117 0.718864 9.09513 0.727642C9.49558 0.729006 9.87869 0.89114 10.1585 1.17764C10.7322 1.73001 10.7545 2.64121 10.2085 3.22098L7.7418 5.69764C7.58221 5.85831 7.36492 5.94835 7.13847 5.94764C6.89379 5.94797 6.65938 5.84939 6.48847 5.67431C6.13654 5.33358 6.12465 4.773 6.4618 4.41764L8.73847 2.13098C8.87215 2.04219 9.05012 2.06127 9.16195 2.17636C9.27378 2.29146 9.28773 2.4699 9.19513 2.60098L6.91847 4.88764C6.83948 4.9828 6.85135 5.1237 6.94513 5.20431C6.99204 5.25154 7.05527 5.27898 7.1218 5.28098C7.17158 5.28169 7.21958 5.26249 7.25513 5.22764L9.71847 2.75098C10.0062 2.43135 9.98391 1.93993 9.66847 1.64764C9.37609 1.34409 8.8974 1.32213 8.57847 1.59764L6.11513 4.06098C5.8732 4.32083 5.74489 4.66645 5.75866 5.02123C5.77243 5.37601 5.92712 5.71065 6.18847 5.95098C6.45059 6.2227 6.81093 6.37765 7.18847 6.38098C7.51392 6.38362 7.82701 6.25646 8.05847 6.02764L10.5218 3.55098C10.6516 3.42027 10.8628 3.41952 10.9935 3.54931C11.1242 3.6791 11.1249 3.89027 10.9951 4.02098L8.5318 6.49764C8.17852 6.85717 7.69585 7.06008 7.1918 7.06098Z"
                                                                    fill="#868686"
                                                                ></path>
                                                            </svg>
                                                            <span>10</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="Add-btn">
                                        <a class="btn" href="#">
                                            ADD
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
                </div>
            </div>
        </div>
    </div>
</section>

@stop

@section('page-js')

<!-- jquery ui js  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.2/web-animations.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/haltu/muuri@0.9.3/dist/muuri.min.js"></script>

<script>
    var dragContainer = document.querySelector(".drag-container");
    var itemContainers = [].slice.call(document.querySelectorAll(".board-column-content"));
    var columnGrids = [];
    var boardGrid;

    // Init the column grids so we can drag those items around.
    itemContainers.forEach(function (container) {
        var grid = new Muuri(container, {
            items: ".board-item",
            sortData: {
                customer: function (item, element) {
                    return parseFloat(element.getAttribute('data-id'));
                }
            },
            dragCssProps: {
                touchAction: 'auto',
                userSelect: 'none',
                userDrag: 'none',
                tapHighlightColor: 'rgba(0, 0, 0, 0)',
                touchCallout: 'none',
                contentZooming: 'none'
            },
            dragStartPredicate: {
                distance: 100,
                delay: 100
            },
            dragRelease: {
                duration: 300,
                esaing: 'cubic-bezier(0.625, 0.225, 0.100, 0.890)',
                useDragContainer: false,
            },
            dragEnabled: true,
            dragSort: function () {
                return columnGrids;
            },
            dragContainer: dragContainer,
            dragAutoScroll: {
                targets: (item) => {
                    return [
                        { element: window, priority: 0 },
                        { element: item.getGrid().getElement().parentNode, priority: 1 },
                    ];
                },
            },
        })
            .on("dragInit", function (item) {
                item.getElement().style.width = item.getWidth() + "px";
                item.getElement().style.height = item.getHeight() + "px";
            })

            .on("dragReleaseEnd", function (item) {
                item.getElement().style.width = "";
                item.getElement().style.height = "";
                item.getGrid().refreshItems([item]);
                var lead_id = item.getElement().dataset.id;
                var container_id = container.dataset.id;
                // alert(lead_id);
                // alert(container_id);

                $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
                url: "{{ route('customer-pipeline-update') }}",
                method: 'post',
                data: {
                    lead_id : lead_id,
                    container_id : container_id
                },
                success: function (data) {
                   
                },
                error: function (data) {
                    
                }
            });

            })

            .on("layoutStart", function () {
                boardGrid.refreshItems().layout();
            });

        columnGrids.push(grid);
    });

    // Init board grid so we can drag those columns around.
    boardGrid = new Muuri(".board", {
        dragEnabled: true,
        dragHandle: ".board-column-header",
    });


    function viewCustomerDetails(id){
        var id = id;
        // alert(id);
        var url = '{{ route("customer_pipeline_details", ":id") }}';
        url = url.replace(':id',id);
        window.location.href = url;
    }
</script>

@stop