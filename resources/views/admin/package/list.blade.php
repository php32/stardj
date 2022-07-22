@extends('layouts.app') 

@section('title') 
    Package 
@stop 

@section('page-css') 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">
<style>
    .newsItems {
  line-height: 1.2em;
  height: 3.6em;
  overflow: hidden;
  min-width:100px;
}
</style>
@stop 

@section('header_title') 
    Package 
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
                                         <li class="list-inline-item"><a class="active" href="{{ route('add-package') }}">Add Package</a></li>
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
                    <table id="package-list" class="table">
                    <thead>
                        <tr>
                            <!-- <th>Sr.no <i class="fa-solid fa-angle-down"></i></th> -->
                            <th>Name <i class="fa-solid fa-angle-down"></i></th>
                            <th>Amount <i class="fa-solid fa-angle-down"></i></th>
                            <!-- <th>Description <i class="fa-solid fa-angle-down"></i></th> -->
                            <th>Action <i class="fa-solid fa-angle-down"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach($packages as $package)
                        <tr>
                            <td>
                                <div class="user-name-table-fix">
                                    <p>{{ $i }}.</p>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <p>{{ $package->package_name }}</p>
                                </div>
                            </td>
                            <td>{{ $package->amount }}</td>
                            <!-- <td class="newsItems">{{ $package->package_desc }}</td> -->
                            <td>
                                <a href="{{ route('package-edit', $package->id)}}" id="edit" class="btn btn-primary">Edit</a>
                                <a href="{{ route('package-delete', $package->id)}}" onclick="return confirm('Are you sure to delete this package ?')" id="edit" class="btn btn-primary">Delete</a>
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

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.js"></script> -->

  <script>

    $('#package-list').DataTable({ 
		select: false,
		"columnDefs": [{
			className: "Name", 
			
			"visible": false,
			"searchable":false
		}]
	});

  </script>

 @stop
