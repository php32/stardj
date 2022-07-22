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

#accordian_btn{
    color: #13C6FF;
    font-size: 20px;
    line-height: 28px;
    padding-bottom: 5px;
}

#accordian_btn:hover {
    text-decoration: none;
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
                                     <a href="{{ URL::previous() }}">Back</a>
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

                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="accordian_btn">
                          Event Details
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
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
                            @if($event->assign_dj)
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p><b>DJ name<span>&nbsp;&nbsp;&nbsp;:</span></b>&nbsp;&nbsp;
                                    <span>{{ isset($dj_name->name) ? $dj_name->name : '-' }}</span></p>
                                </div>
                            </div>
                            @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

            @if($event->assign_dj == '')
              <div class="ms-customer-details-section">
                    <div class="ms-feel-custmer">
                        <div class="section-header">
                            <h4>Assign DJ</h4>
                        </div>
                        <form class="singup-form-sec mt-4 mb-3 validate_pac" method="post" action="{{ route('assign-dj') }}" id="package_form" >
                            @csrf
                            <input type="hidden" name="event_id" id="event_id" value="{{ $event->id }}">
                            <input type="hidden" name="customer_id" id="customer_id" value="{{ $customer->customer_id }}">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <!-- <input type="text" class="form-control" placeholder="Contact Email" name="contact_email" id="contact_email"> -->
                                        <select name="assign_dj" id="assign_dj" class="form-control">
                                            <option value="">Select DJ</option>
                                            @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                        <label class="lab-style">Select DJ</label>
                                        @error('contact_email')
                                        <span class="text-danger">
                                            <strong>
                                                Please Select DJ.
                                            </strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="upload-njha-button mt-5">
                                <input type="submit" name="submit" id="submit" class="btn" value="Add">
                            </div>
                        </form>
                   </div>
             </div>
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
                                    <span>Awaited Deposit -></span>
                                    @elseif($activity_log->state_from == '2')
                                    <span>Awaiting DJ Assignment -> </span>
                                    @elseif($activity_log->state_from == '3')
                                    <span>DJ Assigned -> </span>
                                    @elseif($activity_log->state_from == '4')
                                    <span>DJ Assigned & Introduced -> </span>
                                    @elseif($activity_log->state_from == '5')
                                    <span>Balance Paid -> </span>
                                    @elseif($activity_log->state_from == '6')
                                    <span>Pre-Event -> </span>
                                    @elseif($activity_log->state_from == '7')
                                    <span>Post Gig (Feedback) -> </span>
                                    @elseif($activity_log->state_from == '8')
                                    <span>Post Gig (Final) -> </span>
                                    @elseif($activity_log->state_from == '9')
                                    <span>Archive -> </span>
                                    @elseif($activity_log->state_from == '10')
                                    <span>Added -> </span>
                                    @endif
                                    @if($activity_log->state_to == '1')
                                    <span>Awaited Deposit</span>
                                    @elseif($activity_log->state_to == '2')
                                    <span>Awaiting DJ Assignment</span>
                                    @elseif($activity_log->state_to == '3')
                                    <span>DJ Assigned</span>
                                    @elseif($activity_log->state_to == '4')
                                    <span>DJ Assigned & Introduced</span>
                                    @elseif($activity_log->state_to == '5')
                                    <span>Balance Paid</span>
                                    @elseif($activity_log->state_to == '6')
                                    <span>Pre-Event</span>
                                    @elseif($activity_log->state_to == '7')
                                    <span>Post Gig (Feedback)</span>
                                    @elseif($activity_log->state_to == '8')
                                    <span>Post Gig (Final)</span>
                                    @elseif($activity_log->state_to == '9')
                                    <span>Archive</span>
                                    @elseif($activity_log->state_to == '10')
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
    </div>
</section>



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
          contact_number: "required",
          contact_email: "required",
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


