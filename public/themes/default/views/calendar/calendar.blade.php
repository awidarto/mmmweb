@extends('layout.front')

@section('content')

<link rel="stylesheet" href="{{ URL::to('cameo') }}/vendor/fullcalendar/fullcalendar.css">

        <section class="layout">
            <!-- events sidebar -->
            <aside class="sidebar-250">
                <div class="pd-sm">Draggable Events</div>
                <div class="pd-md">
                    <div class="external-events" id="external-events">
                        <div class="external-event label label-dark">New Milestone</div>
                        <div class="external-event label label-primary">Personal Event</div>
                        <div class="external-event label label-success">Meeting</div>
                        <div class="external-event label label-info">Recreational</div>
                        <div class="external-event label label-warning">Task</div>
                        <div class="external-event label label-danger">Event</div>
                    </div>
                    <p>
                        <input type="checkbox" id="drop-remove">
                        <label for="drop-remove">remove after drop</label>
                    </p>
                </div>
            </aside>
            <!-- /events sidebar -->

            <!-- main content -->
            <section class="main-content">
                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="panel panel-primary no-shadow no-margin">
                        <div class="panel-heading">Fullcalendar</div>
                        <div class="panel-body no-padding">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <!-- /content wrapper -->
            </section>
            <!-- /main content -->
        </section>

<script src="{{ URL::to('cameo') }}/vendor/fullcalendar/fullcalendar.min.js"></script>

<style type="text/css">

.fc-state-highlight{
    background-color: #ddd;
}
</style>

<script src="{{ URL::to('cameo') }}/js/calendar.js"></script>

<script type="text/javascript">

</script>
@stop