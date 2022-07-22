<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quatation Process</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/logo/favicone.png') }}" type="image/x-icon" />
    <style type="text/css">
      .heading{
        text-align: center;
      }
      .container{
        margin-top: 15px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h3 class="heading">Quatation Details</h3>
      <div class="row">
        <div class="col-md-12 ">
            <p>Event Name : {{ $event->event_type }} </p>
            <p>Venue Name : {{ $event->venue_name }}</p>
            <p>Contact Name : {{ $event->contact_name }}</p>
            <p>Contact Name : {{ $event->contact_number }}</p>
            <p>Event Date : {{ $event->event_date }}</p>
            <p>Contact Email : {{ $event->contact_email }}</p>
            <p>Event Address : {{ $event->event_address }}</p>
            <p>City : {{ $event->city }}</p>
            <p>Package Name : {{ $event->package }}</p>
            <p>Amount : {{ $event->amount }}</p>
            <p>Package Details : {{ $event->details }}</p>
            <p>Notes : {{ $event->notes }}</p>
        </div>
        <div class="accept-btn text-center">
          <a href="{{ route('quotation-response', ['id' => $event->id, 'response' => 'accept']) }}" class="btn btn-primary" id="accept" name="accept" value="accept">Accept</a>
          <a href="{{ route('quotation-response', ['id' => $event->id, 'response' => 'declined']) }}" class="btn btn-warning" id="declined" name="declined" value="declined">Declined</a>
        </div>
        
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>