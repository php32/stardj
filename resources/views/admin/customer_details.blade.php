@extends('layouts.app') 

@section('title') 
    Customer Details 
@stop 

@section('page-css') 
<style>
    * {
  margin: 0;
  padding: 0;
}

.switch-list {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 20px;
  height: 100vh;
  width: 100vw;
}

.switch {
  display: flex;
  align-items: center;
  cursor: pointer;
  -webkit-tap-highlight-color: transparent;
}
.switch__input {
  display: none;
}
.switch__input:checked + .switch__icon {
  background-color: #00a4ff;
}
.switch__input:checked + .switch__icon:before {
  transform: translate3d(18px, 2px, 0) scale3d(0, 0, 0);
}
.switch__input:checked + .switch__icon:after {
  transform: translate3d(20px, 2px, 0);
}
.switch__icon {
  position: relative;
  display: inline-block;
  max-width: 42px;
  min-width: 42px;
  min-height: 24px;
  max-height: 24px;
  background-color: #bebebe;
  border-radius: 22px;
  vertical-align: text-bottom;
  transition: all 0.3s linear;
}
.switch__icon:before {
  content: "";
  position: absolute;
  left: 0;
  width: 38px;
  height: 20px;
  background-color: #bebebe;
  border-radius: 11px;
  transform: translate3d(2px, 2px, 0) scaleX(1);
  transition: all 0.25s linear;
}
.switch__icon:after {
  content: "";
  position: absolute;
  left: 0;
  width: 20px;
  height: 20px;
  background-color: #fff;
  border-radius: 11px;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.24);
  transform: translate3d(2px, 2px, 0);
  transition: all 0.2s ease-in-out;
}
.switch__span {
  font-size: 14px;
  margin-left: 5px;
  font-weight: 400;
}
.error{
    color: red;
}

.comment-section{
    display: flex;
}

.input-section{
    margin-right: 16px;
}
.btn-sec{
    margin-right: 4px;
}

.errorTxt{
  /*border: 1px solid red;*/
  min-height: 20px;
}

.comment-div{
    background: whitesmoke;
    border-radius: 10px;
    margin-bottom: 10px;
}

.comment-content{
    margin-left: 10px;
}

.comment-time{
    font-size: 10px;
}

.rightmargin{
    margin-right: 10px;
}

</style>
@stop 

@section('header_title') 
    Customer Details 
@stop 

@section('content')
<section class="dashboard-main-section">
    <div class="dash-content-area-sec">
        <div class="container-fluid">
             <div class="ms-customer-details-section">
                    <div class="ms-feel-custmer">
                        <div class="section-header">
                            <h4>{{ $customer->name }} Details</h4>
                            <div class="right-dots-circle">
                                <a href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></a>
                                <div class="dropdown-menu">
                                     <a href="{{ route('sales-pipeline') }}">Back</a><br>
                                     <a href="{{ route('delete-person',['id'=>$customer->customer_id]) }}">Delete Customer</a><br>
                                     @if($isEvent != '0')
                                     <a href="{{ route('delete-event',['id'=>$event->id]) }}">Delete Event</a>
                                     @endif
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="row mt-2">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Customer Name<span>&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ $customer->name }}</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Email Address<span>&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ $customer->email }}</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Phone Number<span>&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ $customer->contact_number }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ms-customer-details-section">
                    <div class="ms-feel-custmer">
                        <div class="section-header">
                            <h4>Event Details</h4>
                            @if($isEvent == '0')
                            <div class="upload-njha-button float-right w-100 mr-3">
                                <input type="submit" name="submit" id="submit" class="btn" value="Add Event" data-toggle="modal" data-target=".bd-example-modal-lg">
                            </div>
                            @elseif($isEvent == '1')
                            <div class="upload-njha-button float-right w-100 mr-3">
                                <input type="submit" name="submit" id="submit" class="btn" value="Edit Event" data-toggle="modal" data-target=".bd-example-modal-lg">
                            </div>
                            @endif
                            </div>
                        

                        <div class="row mt-2">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>How did you hear about us?<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($event->lead_source) ? $event->lead_source : '-' }}</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Type of Event<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($event->event_type) ? $event->event_type : '-' }}</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>What city is this in?<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($event->city) ? $event->city : '-' }}</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Date of event<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($event->event_date) ? $event->event_date : '-' }}</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Venue Name<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($event->venue_name) ? $event->venue_name : '-' }}</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Venue/Event Contact Name<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($event->contact_name) ? $event->contact_name : '-' }}</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Venue/Event Contact Email<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($event->contact_email) ? $event->contact_email : '-' }}</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Address<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($event->event_address) ? $event->event_address : '-' }}</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Approx No. of guests<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($event->no_guest) ? $event->no_guest : '-' }}</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Loading Bay Instructions<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($event->instruction) ? $event->instruction : '-' }}</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Is parking available?<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($event->parking) ? $event->parking : '-' }}</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Email Address #2<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($event->email2) ? $event->email2 : '-' }}</span></p>
                                </div>
                            </div>
                            @if(isset($event->partner_name))
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Partner Full Name<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($event->partner_name) ? $event->partner_name : '-' }}</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Partner Phone Number<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($event->partner_number) ? $event->partner_number : '-' }}</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Partner Email<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($event->partner_email) ? $event->partner_email : '-' }}</span></p>
                                </div>
                            </div>
                            @endif
                            @if(isset($event->package))
                                @if($event->package != 'custom')
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p><b>Package Name<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                        <span>{{ isset($event->package) ? $event->package : '-' }}</span></p>
                                    </div>
                                </div>
                                @else
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p><b>Package Name<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                        <span>{{ isset($event->custom_package_name) ? $event->custom_package_name : '-' }}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p><b>Discription<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                        <span>{{ isset($event->custom_package_desc) ? $event->custom_package_desc : '-' }}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p><b>Package Amount<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                        <span>{{ isset($event->custom_package_amount) ? $event->custom_package_amount : '-' }}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p><b>Other Note<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                        <span>{{ isset($event->custom_package_note) ? $event->custom_package_note : '-' }}</span></p>
                                    </div>
                                </div>
                                @endif
                            @endif
                            @if($customer->sales_pipeline_status >= '2')
                            @if(isset($event->package))
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>Offer Accept or declined<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                        @if(isset($event->package_offer) && $event->package_offer == '0')
                                        <a href="javascript:void(0)" class="badge badge-primary">Waiting for response</a>
                                        @elseif(isset($event->package_offer) && $event->package_offer == '1')
                                        <a href="javascript:void(0)" class="badge badge-success">Accepted</a> &nbsp;&nbsp;&nbsp;
                                        <!-- <form name="invoice" id="invoice" action="#"> -->
                                        <a href="{{ route('invoice',['id'=>$event->id]) }}" name="send-email" id="send-mail" title="Send invoice"><i class="fa-solid fa-file-invoice-dollar"></i></a>
                                        @elseif(isset($event->package_offer) && $event->package_offer == '2')
                                        <a href="javascript:void(0)" class="badge badge-danger">Declined</a>
                                        @endif
                                    </p>
                                </div>
                            </div>
                            @endif
                            @endif
                        </div>
                   </div>
             </div>

             @if($customer->sales_pipeline_status >= '2' && $isEvent == '1')
             @if(!isset($event->package) || $event->package_offer == 2)
                <div class="ms-customer-details-section">
                    <div class="ms-feel-custmer">
                        <div class="section-header">
                            <h4>Quotation Information</h4>
                        </div>
                        <form class="singup-form-sec mt-4 mb-3 validate_pac" method="post" action="{{ route('add-package-event') }}" id="package_form" >
                            @csrf
                            <input type="hidden" name="event_id" id="event_id" value="{{ isset($event->id) ? $event->id : '' }}">
                            <input type="hidden" name="customer_id" id="customer_id" value="{{ isset($customer->customer_id) ? $customer->customer_id : '' }}">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <!-- <input type="text" class="form-control" placeholder="Contact Email" name="contact_email" id="contact_email"> -->
                                        <select name="package" id="package" class="form-control" onchange="getPackage(this.value)">
                                            <option value="">Select Package</option>
                                            @foreach($packages as $package)
                                            <option value="{{ $package->package_name }}">{{ $package->package_name }}</option>
                                            @endforeach
                                            <option value="custom">Custom</option>
                                        </select>
                                        <label class="lab-style">Select Package</label>
                                        @error('contact_email')
                                        <span class="text-danger">
                                            <strong>
                                                Please Enter Contact Email.
                                            </strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="custom-package" style="display:none;">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="name" name="package_name" value="{{ old('package_name') }}">
                                            <label class="lab-style">Package Name</label>
                                            @error('package_name')
                                                <span class="text-danger">
                                                    <strong>
                                                        Please Enter Package Name.
                                                    </strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="package_desc" placeholder="Discription" value="{{ old('package_desc') }}">
                                          <label class="lab-style">Discription</label>
                                          @error('package_desc')
                                                <span class="text-danger">
                                                    <strong>
                                                        Please Enter details about package.
                                                    </strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Amount" name="amount" value="{{ old('amount') }}">
                                            <label class="lab-style">Package Amount</label>
                                            @error('amount')
                                                    <span class="text-danger">
                                                        <strong>
                                                            Please Enter Package Amount.
                                                        </strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="other_note" placeholder="Note" value="{{ old('other_note') }}">
                                            <label class="lab-style">Other Note</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upload-njha-button">
                                <input type="submit" name="submit" id="submit" class="btn" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
                @endif
             @endif

             <div class="ms-customer-details-section">
                    <div class="ms-feel-custmer">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-header">
                                    <h4>Comments</h4>
                                </div>
                                <form class="form" name="comment-form" id="comment-form" method="post" action="{{ route('add-comment') }}">
                                    @csrf
                                    <div class="comment-section">
                                        <input type="hidden" name="customer_id" id="customer_id" value="{{ $customer->customer_id }}">
                                        <input type="text" name="comment" id="comment" class="form-control input-section" placeholder="Add Comment">
                                        <button class="btn btn-primary" class="form-group btn-sec">Add</button>
                                    </div>
                                    <div class="errorTxt"></div>
                                </form>
                                @foreach($comments as $comment)
                                <div class="comment-div">
                                    <div class="comment-content">
                                        <small class="comment-time">{{ $comment->created_at->format('F j') }}</small>&nbsp;&nbsp;<small class="comment-time">{{ date("h:i",strtotime($comment->created_at)) }}</small>
                                        <p>{{ $comment->comment }}</p>
                                    </div>
                                </div>
                                
                                @endforeach
                            </div>
                            <div class="col-lg-6">
                                <div class="section-header">
                                    <h4>Activity</h4>
                                </div>
                                @foreach($activity_logs as $activity_log)
                                <p><b>Status&nbsp;:&nbsp;</b>
                                    @if($activity_log->state_from == '1')
                                    <span>Lead In -></span>
                                    @elseif($activity_log->state_from == '2')
                                    <span>Contact Made -> </span>
                                    @elseif($activity_log->state_from == '3')
                                    <span>Quoted -> </span>
                                    @elseif($activity_log->state_from == '4')
                                    <span>Added -> </span>
                                    @endif
                                    @if($activity_log->state_to == '1')
                                    <span>Lead In</span>
                                    @elseif($activity_log->state_to == '2')
                                    <span>Contact Made</span>
                                    @elseif($activity_log->state_to == '3')
                                    <span>Quoted</span>
                                    @elseif($activity_log->state_to == '4')
                                    <span>Added</span>
                                    @endif
                                </p>
                                <small>{{ $activity_log->created_at->format('j-F-Y') }}</small>&nbsp;&nbsp;<small> {{ date("H:i:s",strtotime($activity_log->created_at)) }} </small><br><br>
                                @endforeach
                            </div>
                        </div>
                   </div>
             </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        @if($isEvent == '0')
        <h5 class="modal-title" id="exampleModalLabel">Add Event Details</h5>
        @elseif($isEvent == '1')
        <h5 class="modal-title" id="exampleModalLabel">Edit Event Details</h5>
        @endif
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if(isset($event->id))
        <form class="singup-form-sec mt-4 mb-3" method="post" action="{{ route('update-event', ['id'=>$event->id]) }}" id="event_form">
        @else
        <form class="singup-form-sec mt-4 mb-3" method="post" action="{{ route('add-event') }}" id="event_form">
        @endif
            @csrf
            <input type="hidden" name="customer_id" id="customer_id" value="{{ isset($customer->customer_id) ? $customer->customer_id : ''  }}">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="How did you hear about us?" name="lead_source" id="lead_source" value="{{ isset($event->lead_source) ? $event->lead_source : ''  }}">
                        <label class="lab-style">How did you hear about us?</label>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Type of Event" name="event_type" id="event_type" value="{{ isset($event->event_type) ? $event->event_type : ''  }}">
                        <label class="lab-style">Type of Event</label>
                        @error('event_type')
                        <span class="text-danger">
                            <strong>
                                Please Enter Type of Event.
                            </strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="City Name" name="city" id="city" value="{{ isset($event->city) ? $event->city : ''  }}">
                        <label class="lab-style">What city is this in?</label>
                        @error('city')
                        <span class="text-danger">
                            <strong>
                                Please Enter City Name.
                            </strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="date" class="form-control" placeholder="Date of event" name="event_date" id="event_date" value="{{ isset($event->event_date) ? $event->event_date : ''  }}">
                        <label class="lab-style">Date of event</label>
                        @error('event_date')
                        <span class="text-danger">
                            <strong>
                                Please Enter Event Date.
                            </strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Venue Name" name="venue_name" id="venue_name" value="{{ isset($event->venue_name) ? $event->venue_name : ''  }}">
                        <label class="lab-style">Venue Name</label>
                        @error('venue_name')
                        <span class="text-danger">
                            <strong>
                                Please Enter Vanue Name.
                            </strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Contact Name" name="contact_name" id="contact_name" value="{{ isset($event->contact_name) ? $event->contact_name : ''  }}">
                        <label class="lab-style">Venue/Event Contact Name</label>
                        @error('contact_name')
                        <span class="text-danger">
                            <strong>
                                Please Enter Contact Name.
                            </strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Contact Number" name="contact_number" id="contact_number" value="{{ isset($event->contact_number) ? $event->contact_number : '' }}">
                        <label class="lab-style">Venue/Event Contact Number</label>
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
                        <input type="text" class="form-control" placeholder="Contact Email" name="contact_email" id="contact_email" value="{{ isset($event->contact_email) ? $event->contact_email : ''  }}">
                        <label class="lab-style">Venue/Event Contact Email</label>
                        @error('contact_email')
                        <span class="text-danger">
                            <strong>
                                Please Enter Contact Email.
                            </strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Address" name="event_address" id="event_address" value="{{ isset($event->event_address) ? $event->event_address : '' }}">
                        <label class="lab-style">Address</label>
                        @error('event_address')
                        <span class="text-danger">
                            <strong>
                                Please Enter Event Address.
                            </strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Approx No. of guests" name="no_guest" id="no_guest" value="{{ isset($event->no_guest) ? $event->no_guest : ''  }}">
                        <label class="lab-style">Approx No. of guests</label>
                        @error('no_guest')
                        <span class="text-danger">
                            <strong>
                                Please Enter Approx No. of guests.
                            </strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Loading Bay Instructions" name="instruction" id="instruction" value="{{ isset($event->instruction) ? $event->instruction : ''  }}">
                        <label class="lab-style">Loading Bay Instructions</label>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Is parking available?" name="parking" id="parking" value="{{ isset($event->parking) ? $event->parking : '' }}">
                        <label class="lab-style">Is parking available?</label>
                        @error('parking')
                        <span class="text-danger">
                            <strong>
                                Please Enter Parking Details.
                            </strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address #2" name="email2" id="email2" value="{{ isset($event->email2) ? $event->email2 : ''  }}">
                        <label class="lab-style">Email Address #2</label>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="switch">
                            <input class="switch__input" type="checkbox" id="merrage" />
                            <i class="switch__icon"></i>
                            <span class="switch__span">Marriage ?</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="merrage_details" style="display:none">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Partner Full Name" name="partner_name" id="partner_name" value="{{ isset($event->partner_name) ? $event->partner_name : '' }}">
                            <label class="lab-style">Partner Full Name</label>
                            @error('partener_name')
                            <span class="text-danger">
                                <strong>
                                    Please Enter Partner Name.
                                </strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Partner Phone Number " name="partner_number" id="partner_number" value="{{ isset($event->partner_number) ? $event->partner_number : '' }}">
                            <label class="lab-style">Partner Phone Number</label>
                            @error('partner_number')
                            <span class="text-danger">
                                <strong>
                                    Please Enter Partner Number.
                                </strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Partner Email" name="partner_email" id="partner_email" value="{{ isset($event->partner_email) ? $event->partner_email : '' }}">
                            <label class="lab-style">Partner Email</label>
                            @error('partner_email')
                            <span class="text-danger">
                                <strong>
                                    Please Enter Email Address.
                                </strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

                <div class="modal-footer float-right w-100">
                    <div class="upload-njha-button">
                        <input type="submit" name="submit" id="submit" class="btn rightmargin" value="Save">
                        <input type='button' name="close" id="close" class="btn" data-dismiss="modal" value="Close">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </div>
       </form>
      </div>
    </div>
  </div>
</div>

@stop

@section('page-js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    $(function() {
        $("#event_form").validate({
            rules: {
                event_type: "required",
                city: "required",
                event_date: "required",
                venue_name: "required",
                contact_name: "required",
                contact_number: {
                    required:true,
                    minlength:9,
                    maxlength:10,
                    number: true
                },
                contact_email: {
                    required: true,
                    email: true,
                    accept:"[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}" 
                },
                event_address: "required",
                no_guest: "required",
                parking: "required"
              // partner_name: "required",
              // partner_number: "required",
              // partner_email: "required",
            },
            messages: {
                event_type: "Please Enter Event type",
                city: "Please Enter Event City",
                event_date: "Please Enter Event Date",
                venue_name: "Please Enter venue name",
                contact_name: "Please Enter Contact Name",
                contact_number: "Please Enter Contact number",
                contact_email: "Please Enter Contact Email",
                event_address: "Please Enter Event Address",
                no_guest: "Please Enter number Of Guest",
                parking: "Please Enter parking Details"
            }
        });
    });


    @error ('event_type')
        $('#exampleModal').modal('show');
    @enderror

    function getPackage(value){
        // alert(value);
        if(value == 'custom'){
            $(".custom-package").attr('style', 'display:block !important');
        }else{
            $(".custom-package").attr('style', 'display:none !important');
        }
    }


    $("#merrage").click( function () {
        if($("#merrage").is(":checked"))
        {
            $(".merrage_details").attr('style', 'display:block !important');
        }else{
            $(".merrage_details").attr('style', 'display:none !important');
        }
    });



     $("#package_form").validate({
        rules: {
            package: 'required',
            package_name: 'required',
            package_desc: 'required',
            amount: 'required'
        },
        messages: {
            package: "Please Select Package",
            package_name: "Please Enter Package Name",
            package_desc: "Please Enter Details About package",
            amount: "Please Enter Package Amount"
        }
    });


     $("#comment-form").validate({
        rules: {
            comment: 'required',
        },
        messages: {
            comment: "Please Enter Comment",
        },
        errorElement : 'div',
        errorLabelContainer: '.errorTxt'
    });

</script>

@stop


