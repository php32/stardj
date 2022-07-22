@extends('layouts.app') 

@section('title') 
    Upcoming Events
@stop 

@section('page-css') 
@stop 

@section('header_title') 
    Upcoming Events
@stop 

@section('content')

<section class="dashboard-main-section">
    <div class="dash-content-area-sec">
        <div class="container-fluid">
           <div class="event-section">
            <div class="top-search">
              <input class="form-control" type="text" placeholder="Search Here.."> 
              <i class="fa-solid fa-magnifying-glass search-icon"></i>
          </div>
               <div id="calendar"></div>
               
            </div>
        </div>
    </div>
</section>

@stop

@section('page-js')  

<!-- Calender js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/moment@5.5.0/main.global.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
          start: 'prev,today,next',
          center: 'title',
          end: 'dayGridMonth,dayGridWeek,listWeek'
        },
        timeZone: 'Europe/Berlin',
        weekNumbers: true,
        initialView: 'dayGridMonth',
        eventTimeFormat: {
          hour: '2-digit',
          minute: '2-digit',
          hour12: false
        },
        views: {
          dayGridWeek: {
            titleFormat: '{DD.{MM.}}YYYY'
          },
          listWeek: {
            titleFormat: '{DD.{MM.}}YYYY'
          }
        },
        events: [
          {
            title: "Festival in HH",
            start: moment().add(1, 'days').format(),
            end: moment().add(4, 'days').add(3, 'hours').format(),
            className: 'festival',
            color: 'orange',
            textColor: 'black',
            kind: 'festival',
            state: 'hh'
          },
          {
            title: "Monday Wake-Up Hour",
            start: moment().format(),
            end: moment().add(7, 'hours').format(),
            color: 'brightblue',
            textColor: 'white',
            kind: 'party',
            state: 'sh'
          },
          {
            title: "All-Team Kickoff",
            start: moment().format(),
            end: moment().add(3, 'hours').format(),
            color: 'brightblue',
            textColor: 'white',
            kind: 'party',
            state: 'sh'
          },
          {
            title: "🍔 New Employee Welcome Lunch!",
            start: moment().add(1, 'days').format(),
            end: moment().add(1, 'days').add(3, 'hours').format(),
            color: 'red',
            textColor: 'white',
            kind: 'concert',
            state: 'sh'
          },
          {
            title: "Onboarding Presentation",
            start: moment().subtract(3, 'days').format(),
            end: moment().subtract(3, 'days').add(3, 'hours').format(),
            color: 'red',
            textColor: 'white',
            kind: 'concert',
            state: 'hh'
          },
          {
            title: "7:00 AM",
            start: moment().subtract(6, 'days').format('YYYY-MM-DD'),
            end: moment().subtract(2, 'days').format('YYYY-MM-DD'),
            display: 'background',
            kind: 'holiday',
          }
        ],
        eventClassNames: function(info) {
          
          var result = true;
          var states = [];
          var kinds = [];
          
          // Find all checkbox that are event filters and enabled and save the values.
          $("input[name='event_filter_sel']:checked").each(function () {
            // Saving each type separately
            if ($(this).data('type') == 'state') {
              states.push($(this).val());
            }
            else if ($(this).data('type') == 'kind') {
              kinds.push($(this).val());
            }
          });
          
          // If there are locations to check
          if (states.length) {
            result = result && states.indexOf(info.event.extendedProps.state) >= 0;
          }
          // If there are specific types of events
          if (kinds.length) {
            result = result && kinds.indexOf(info.event.extendedProps.kind) >= 0 || info.event.extendedProps.kind == 'holiday';
          }
          
          if (!result) {
            result = "hidden";
          }
          
          return result;
        },

        windowResize: function(view) {
          var current_view = view.type;
          var expected_view = $(window).width() > 800 ? 'dayGridMonth' : 'listWeek';
          if (current_view !== expected_view) {
            calendar.changeView(expected_view);
          }
        },
      });

      calendar.render();

      if ($(window).width() < 800) {
        calendar.changeView('listWeek');
      }

      $('input[class=event_filter]').change(function() {
        calendar.render();
      });
        
    });
</script>

@stop