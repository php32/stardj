@extends('layouts.app') 

@section('title') 
    Customers 
@stop 

@section('page-css') 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">
@stop 

@section('header_title') 
    Customers 
@stop 

@section('content')
<section class="dashboard-main-section">
    <div class="dash-content-area-sec">
        <!-- <div class="mobile-toogle">
            <div class="menu-icon" id="menu-Toggle">
                 <a href="#"><img src="img/home/menu.png"></a>
            </div>
            <div class="mobile-logo">
                 <img src="img/logo/logo.png">
            </div>
       </div> -->
        <div class="container-fluid">
             <div class="payment-section">

                <div class="payment-header">
                     <div class="row">
                          <div class="col-lg-6">
                               <div class="data-fliter-link">
                                     <ul class="list-inline">
                                         <li class="list-inline-item"><a class="active" href="{{ route('customer-add') }}">Add Customer</a></li>
                                         <!-- <li class="list-inline-item"><a href="#">DJ</a></li> -->
                                         <!-- <li class="list-inline-item"><a href="#">Customer</a></li> -->
                                     </ul>   
                               </div>
                          </div>
                          <div class="col-lg-6">
                                <div class="sorting-data-sec">
                                      <select id="orderstatus" class="form-control">
                                          <option value="0" selected>Filter</option>
                                          <option value="1">..</option>
                                          <option value="2">..</option>
                                          <option value="3">..</option>
                                      </select>
                                      <div class="search-data">
                                            <input type="text" placeholder="Search" class="form-control">
                                            <div class="search-icon">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </div>
                                      </div>
                                </div>
                          </div>
                     </div>
                </div>
                <div class="table-responsive payment-data-table-fixed">
                    <table id="payment-history" class="table">
                    <thead>
                        <tr>
                            <th>Name <i class="fa-solid fa-angle-down"></i></th>
                            <th>Id <i class="fa-solid fa-angle-down"></i></th>
                            <th>Email <i class="fa-solid fa-angle-down"></i></th>
                            <!-- <th>Amount <i class="fa-solid fa-angle-down"></i></th> -->
                            <th>Action <i class="fa-solid fa-angle-down"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach($users as $user)
                        <tr>
                            <td>
                                <div class="user-name-table-fix">
                                    <p>{{ $i }}</p>
                                    @if($user->file)
                                    <img src="{{ asset('uploads/profile_picture/' . $user->file) }}">
                                    @else
                                    <img src="{{ asset('uploads/profile_picture/profile.jpg') }}">
                                    @endif
                                    <p>{{$user->name}}</p>
                                </div>
                            </td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->email }}</td>
                            <!-- <td>$2000.00 USD</td> -->
                            <td>
                                <a href="{{ route('customer-edit', $user->id)}}" id="edit" class="btn btn-primary">Edit</a>
                                <a href="{{ route('customer-delete', $user->id)}}" onclick="return confirm('Are you sure to delete this customer ?')" id="edit" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                        @php($i++)
                        @endforeach

                        <!-- <tr>
                            <td>
                                <div class="user-name-table-fix">
                                    <p>02</p>  
                                    <img src="img/home/user-2.png">
                                    <p>David Smith</p>
                                </div>
                            </td>
                            <td>25365</td>
                            <td>david@gmail.com</td>
                            <td>$2000.00 USD</td>
                            <td><div class="payment-received"><p>Payment  Received</p><span class="share-dots"><a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a></span></div></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user-name-table-fix">
                                    <p>03</p>  
                                    <img src="img/home/user-3.png">
                                    <p>David Smith</p>
                                </div>
                            </td>
                            <td>25365</td>
                            <td>david@gmail.com</td>
                            <td>$2000.00 USD</td>
                            <td><div class="request-pending"><p>Request pending</p><span class="share-dots"><a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a></span></div></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user-name-table-fix">
                                    <p>04</p>  
                                    <img src="img/home/user-4.png">
                                    <p>David Smith</p>
                                </div>
                            </td>
                            <td>25365</td>
                            <td>david@gmail.com</td>
                            <td>$2000.00 USD</td>
                            <td><div class="payment-done"><p>Payment Done</p><span class="share-dots"><a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a></span></div></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user-name-table-fix">
                                    <p>05</p>  
                                    <img src="img/home/user-5.png">
                                    <p>David Smith</p>
                                </div>
                            </td>
                            <td>25365</td>
                            <td>david@gmail.com</td>
                            <td>$2000.00 USD</td>
                            <td><div class="payment-done"><p>Payment Done</p><span class="share-dots"><a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a></span></div></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user-name-table-fix">
                                    <p>06</p>  
                                    <img src="img/home/user-6.png">
                                    <p>David Smith</p>
                                </div>
                            </td>
                            <td>25365</td>
                            <td>david@gmail.com</td>
                            <td>$2000.00 USD</td>
                            <td><div class="request-pending"><p>Request pending</p><span class="share-dots"><a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a></span></div></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user-name-table-fix">
                                    <p>07</p>  
                                    <img src="img/home/user-7.png">
                                    <p>David Smith</p>
                                </div>
                            </td>
                            <td>25365</td>
                            <td>david@gmail.com</td>
                            <td>$2000.00 USD</td>
                            <td><div class="request-pending"><p>Request pending</p><span class="share-dots"><a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a></span></div></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user-name-table-fix">
                                    <p>08</p>  
                                    <img src="img/home/user-8.png">
                                    <p>David Smith</p>
                                </div>
                            </td>
                            <td>25365</td>
                            <td>david@gmail.com</td>
                            <td>$2000.00 USD</td>
                            <td><div class="payment-received"><p>Payment  Received</p><span class="share-dots"><a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a></span></div></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user-name-table-fix">
                                    <p>09</p>  
                                    <img src="img/home/user.png">
                                    <p>David Smith</p>
                                </div>
                            </td>
                            <td>25365</td>
                            <td>david@gmail.com</td>
                            <td>$2000.00 USD</td>
                            <td><div class="request-pending"><p>Request pending</p><span class="share-dots"><a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a></span></div></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user-name-table-fix">
                                    <p>10</p>  
                                    <img src="img/home/user-2.png">
                                    <p>David Smith</p>
                                </div>
                            </td>
                            <td>25365</td>
                            <td>david@gmail.com</td>
                            <td>$2000.00 USD</td>
                            <td><div class="payment-received"><p>Payment  Received</p><span class="share-dots"><a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a></span></div></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user-name-table-fix">
                                    <p>11</p>  
                                    <img src="img/home/user-3.png">
                                    <p>David Smith</p>
                                </div>
                            </td>
                            <td>25365</td>
                            <td>david@gmail.com</td>
                            <td>$2000.00 USD</td>
                            <td><div class="request-pending"><p>Request pending</p><span class="share-dots"><a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a></span></div></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-name-table-fix">
                                    <p>12</p>  
                                    <img src="img/home/user-4.png">
                                    <p>David Smith</p>
                                </div>
                            </td>
                            <td>25365</td>
                            <td>david@gmail.com</td>
                            <td>$2000.00 USD</td>
                            <td><div class="request-pending"><p>Request pending</p><span class="share-dots"><a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a></span></div></td>
                        </tr> -->
                       
                    </tbody>
                   
                    </table>
               </div>
             </div> 
        </div>
    </div>
</section>
@stop

@section('page-js') 

<!-- Popper JS and Bootstrap JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.js"></script>

  <script>

    $('#payment-history').DataTable({ 
		select: false,
		"columnDefs": [{
			className: "Name", 
			
			"visible": false,
			"searchable":false
		}]
	});

  </script>
 @stop
