<!DOCTYPE html>
<html>
<head>
    <title>Quotation Details</title>
    <style>
        .button{
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
            display: inline-block;
            margin-bottom: 0;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
    <link rel="shortcut icon" href="{{ asset('img/logo/favicone.png') }}" type="image/x-icon" />

</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
  
    <div class="row">
        <div class="col-md-6">
            <p>Event Name : {{ $mailData['event_name'] }} </p>
            <p>Venue Name : {{ $mailData['venue_name'] }}</p>
            <p>Contact Name : {{ $mailData['contact_name'] }}</p>
            <p>Contact Name : {{ $mailData['contact_number'] }}</p>
            <p>Event Date : {{ $mailData['event_date'] }}</p>
            <p>Contact Email : {{ $mailData['contact_email'] }}</p>
            <p>Event Address : {{ $mailData['event_address'] }}</p>
            <p>City : {{ $mailData['city'] }}</p>
            <p>Package Name : {{ $mailData['package'] }}</p>
            <p>Amount : {{ $mailData['amount'] }}</p>
            <p>Package Details : {{ $mailData['details'] }}</p>
            <p>Notes : {{ $mailData['notes'] }}</p>
        </div>
        <a href="{{ route('quotation-details', $mailData['quatation_code']) }}" class="button">Details</a>
    </div>
     
    <p>Thank you</p>
</body>
</html>