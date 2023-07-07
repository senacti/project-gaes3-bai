@extends('adminlte::page')

@section('title', 'Citas')

@section('content_header')
    <h1>Citas</h1>
    <div class="card-body">
    <div id='calendar'></div>
</div>

<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)

</script>



@push('scripts')
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var initialLocaleCode = 'es';
  const calendarEl = document.getElementById('calendar');

  const calendar = new FullCalendar.Calendar(calendarEl, {

    slotMinTime: '09:30',

    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
    },
    locale: initialLocaleCode,
    buttonIcons: true, // show the prev/next text
    weekNumbers: true,
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    dayMaxEvents: true, // allow "more" link when too many events
    events: @json($events)
  });

  calendar.render();
  

});
</script>

<a href="{{route('eventos.pdf')}}" class="btn btn-primary mb-3" target="_blank">PDF</a>


@stop

@section('content')


@endpush
@stop
