@extends('layout.front')

@section('content')
<div class="row-fluid">
    <div class="span8">
        <div id="eventcalendar">

        </div>
    </div>
    <div class="span8">
    </div>
</div>


<style type="text/css">

.fc-state-highlight{
    background-color: #ddd;
}
</style>
<script type="text/javascript">
    $(document).ready(function() {

        $('#eventcalendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            // put your options and callbacks here
        })

    });
</script>
@stop