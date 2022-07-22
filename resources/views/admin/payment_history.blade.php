@extends('layouts.app') 

@section('title') 
    Payment History
@stop 

@section('page-css') 
@stop 

@section('header_title') 
    Payment History
@stop 

@section('content')

<section class="dashboard-main-section">
    <div class="dash-content-area-sec">
        <div class="container-fluid">
             <div class="payment-section">

                <div class="payment-header">
                     <div class="row">
                          <div class="col-lg-6">
                               <div class="data-fliter-link">
                                     <ul class="list-inline">
                                         <li class="list-inline-item"><a class="active" href="#">All</a></li>
                                         <li class="list-inline-item"><a href="#">DJ</a></li>
                                         <li class="list-inline-item"><a href="#">Customer</a></li>
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
                            <th>Amount <i class="fa-solid fa-angle-down"></i></th>
                            <th>Status <i class="fa-solid fa-angle-down"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="user-name-table-fix">
                                    <p>01</p>  
                                    <img src="{{ asset('img/home/user.png') }}">
                                    <p>David Smith</p>
                                </div>
                            </td>
                            <td>25365</td>
                            <td>david@gmail.com</td>
                            <td>$2000.00 USD</td>
                            <td>
                                <div class="payment-pending"><p>Payment Pending</p><span class="share-dots"><a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a></span></div></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user-name-table-fix">
                                    <p>02</p>  
                                    <img src="{{ asset('img/home/user-2.png') }}">
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
                                    <img src="{{ asset('img/home/user-3.png') }}">
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
                                    <img src="{{ asset('img/home/user-4.png') }}">
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
                                    <img src="{{ asset('img/home/user-5.png') }}">
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
                                    <img src="{{ asset('img/home/user-6.png') }}">
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
                                    <img src="{{ asset('img/home/user-7.png') }}">
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
                                    <img src="{{ asset('img/home/user-8.png') }}">
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
                                    <img src="{{ asset('img/home/user.png') }} ">
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
                                    <img src="{{ asset('img/home/user-2.png') }}">
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
                                    <img src="{{ asset('img/home/user-3.png') }}">
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
                                    <img src="{{ asset('img/home/user-4.png') }}">
                                    <p>David Smith</p>
                                </div>
                            </td>
                            <td>25365</td>
                            <td>david@gmail.com</td>
                            <td>$2000.00 USD</td>
                            <td><div class="request-pending"><p>Request pending</p><span class="share-dots"><a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a></span></div></td>
                        </tr>
                       
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
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

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