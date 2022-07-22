@extends('layouts.app') 

@section('title') 
    DJ List
@stop 

@section('page-css') 
@stop 

@section('header_title') 
    DJ List
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
                                         <li class="list-inline-item"><a class="active" href="{{ route('DJ-add') }}">Add DJ</a></li>
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
                                <a href="{{ route('DJ-edit', $user->id)}}" id="edit" class="btn btn-primary">Edit</a>
                                <a href="{{ route('DJ-delete', $user->id)}}" onclick="return confirm('Are you sure to delete this DJ ?')" id="edit" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                        @php($i++)
                        @endforeach                       
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

  <script>

    $('#payment-history').DataTable({ 
		select: false,
		"columnDefs": [{
			className: "Name", 
			
			"visible": false,
			"searchable":false
		}]
	});

    function customer_edit(value) {
        alert(value);
        window.location.href = "{{ route('customer-edit', "value")}}";
    }
  </script>
 @stop
