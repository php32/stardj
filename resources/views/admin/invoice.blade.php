<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" integrity="sha512-HdXbv8lyOND1Ueuy0orIopVhFwlzWycyfSG9YvFR88TgiiMUkSmh/tezmCjv36wtzTJk3QK3hnBiVt6BJBnqUQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('img/logo/favicone.png') }}" type="image/x-icon" />
    <style type="text/css">
    	body{margin-top:20px;
background:#eee;
}

/*Invoice*/
.invoice .top-left {
    font-size:65px;
	color:#3ba0ff;
}

.invoice .top-right {
	text-align:right;
	padding-right:20px;
}

.invoice .table-row {
	margin-left:-15px;
	margin-right:-15px;
	margin-top:25px;
}

.invoice .payment-info {
	font-weight:500;
}

.invoice .table-row .table>thead {
	border-top:1px solid #ddd;
}

.invoice .table-row .table>thead>tr>th {
	border-bottom:none;
}

.invoice .table>tbody>tr>td {
	/*padding:8px 20px;*/
}

.invoice .invoice-total {
	margin-right:-10px;
	font-size:16px;
}

.invoice .last-row {
	border-bottom:1px solid #ddd;
}

.invoice-ribbon {
	width:85px;
	height:88px;
	overflow:hidden;
	position:absolute;
	top:-1px;
	right:14px;
}

.ribbon-inner {
	text-align:center;
	-webkit-transform:rotate(45deg);
	-moz-transform:rotate(45deg);
	-ms-transform:rotate(45deg);
	-o-transform:rotate(45deg);
	position:relative;
	padding:7px 0;
	left:-5px;
	top:11px;
	width:120px;
	background-color:#66c591;
	font-size:15px;
	color:#fff;
}

.ribbon-inner:before,.ribbon-inner:after {
	content:"";
	position:absolute;
}

.ribbon-inner:before {
	left:0;
}

.ribbon-inner:after {
	right:0;
}

@media(max-width:575px) {
	.invoice .top-left,.invoice .top-right,.invoice .payment-details {
		text-align:center;
	}

	.invoice .from,.invoice .to,.invoice .payment-details {
		float:none;
		width:100%;
		text-align:center;
		margin-bottom:25px;
	}

	.invoice p.lead,.invoice .from p.lead,.invoice .to p.lead,.invoice .payment-details p.lead {
		font-size:22px;
	}

	.invoice .btn {
		margin-top:10px;
	}
}

@media print {
	.invoice {
		width:900px;
		height:800px;
	}
}
    </style>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
  
<div class="container bootstrap snippets bootdeys">
<div class="row">
  <div class="col-sm-12">
	  	<div class="panel panel-default invoice" id="invoice">
		  <div class="panel-body">
			<!-- <div class="invoice-ribbon"><div class="ribbon-inner">PAID</div></div> -->
		    <div class="row">

				<div class="col-sm-6 top-left">
					<!-- <i class="fa fa-rocket"></i> -->
					<img src="{{ asset('img/logo/logo.png') }}">
				</div>

				<div class="col-sm-6 top-right">
						<h3 class="marginright">INVOICE-{{ $event->id }}</h3>
						<span class="marginright">14 April 2014</span>
			    </div>

			</div>
			<hr>
			<div class="row">

				<div class="col-xs-4 from">
					<p class="lead marginbottom">From : Star Dj Hire</p>
					<p>350 Rhode Island Street</p>
					<p>Suite 240, San Francisco</p>
					<p>California, 94103</p>
					<p>Phone: 415-767-3600</p>
					<p>Email: stardjhire@gmail.com</p>
				</div>

				<div class="col-xs-4 to">
					<p class="lead marginbottom">To : {{ $event->contact_name }}</p>
					<p>Event Name: {{ $event->event_type }}</p>
					<p>Event Date: {{ $event->event_date }}</p>
					<p>Event Address: {{ $event->event_address }}</p>
					<p>Phone: {{ $event->contact_number }}</p>
					<p>Email: {{ $event->contact_email }}</p>

			    </div>
			</div>

			<div class="row table-row">
				<table class="table table-striped">
			      <thead>
			        <tr>
			          <th class="text-center" style="width:5%">#</th>
			          <th style="width:50%">Event</th>
			          <th class="text-right" style="width:15%">Package</th>
			          <th class="text-right" style="width:15%">Amount</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="text-center">1</td>
			          <td>{{ $event->event_type }}</td>
			          <td class="text-right">{{ $event->package }}</td>
			          @if($event->package != 'custom')
			          <td class="text-right">{{ $package->amount }}</td>
			          @else
			          <td class="text-right">{{ $event->custom_package_amount }}</td>
			          @endif
			          <!-- <td class="text-right">$180</td> -->
			        </tr>
			       </tbody>
			    </table>

			</div>

			<div class="row">
			<div class="col-xs-6 margintop">
				<p class="lead marginbottom">THANK YOU!</p>

				@if($pdf == '0')
				<a class="btn btn-success" id="invoice-print" href="{{ route('invoice-download',['id'=>$event->id,'download'=>'pdf']) }}"><i class="fa fa-print"></i> Print Invoice</a>
				<a class="btn btn-danger" href="{{ route('invoice-send',['id'=>$event->id]) }}"><i class="fa fa-envelope-o"></i> Mail Invoice</a>
				@endif
			</div>
			<div class="col-xs-6 text-right pull-right invoice-total">
					  <p>Subtotal : ${{ $package->amount }}</p>
			          <!-- <p>Discount (10%) : $101 </p> -->
			          <p>VAT (10%) : ${{ $package->amount/10 }} </p>
			          <p>Total : ${{ $package->amount+$package->amount/10 }} </p>
			</div>
			</div>

		  </div>
		</div>
	</div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
