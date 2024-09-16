@extends('layouts.master_backend')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Calendar</h1>

    <head>
        <script type='importmap'>
          {
            "imports": {
              "@fullcalendar/core": "https://cdn.skypack.dev/@fullcalendar/core@6.1.15",
              "@fullcalendar/daygrid": "https://cdn.skypack.dev/@fullcalendar/daygrid@6.1.15"
            }
          }
        </script>
        <script type='module'>
          import { Calendar } from '@fullcalendar/core'
          import dayGridPlugin from '@fullcalendar/daygrid'

          document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar')
            const calendar = new Calendar(calendarEl, {
              plugins: [dayGridPlugin],
              headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
              }
            })
            calendar.render()
          })
        </script>
      </head>
      <body>
        <div id='calendar'></div>
      </body>
@endsection
