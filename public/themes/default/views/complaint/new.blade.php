@extends('layout.front')


@section('content')

<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

<h3>{{$title}}</h3>

{{Former::open_for_files($submit,'POST',array('class'=>'custom addAttendeeForm'))}}

<div class="row-fluid">
    <div class="col-md-6">

        {{ Former::text('unit','Unit') }}

        {{ Former::text('firstname','First Name') }}
        {{ Former::text('lastname','Last Name') }}
        {{ Former::text('phone','Phone') }}
        {{ Former::text('email','Email') }}

        {{ Former::text('tags','Tags')->class('tag_keyword') }}

        {{ Form::submit('Save',array('name'=>'submit','class'=>'btn btn-primary'))}}&nbsp;&nbsp;
        {{ HTML::link($back,'Cancel',array('class'=>'btn'))}}

    </div>
    <div class="col-md-6">

        <div class="row-fluid form-vertical">
            {{ Former::textarea('description','Complaint')->class('span10 editor')->rows(8)->required() }}

            {{ Former::select('status')->options(Config::get('bizbozz.complaint_status'))->label('Status')->required() }}

            {{ Former::text('resolvedBy','Handler') }}

            {{ Former::textarea('solution','Solution')->class('span10 editor')->rows(8) }}
        </div>

        <?php
            $fupload = new Fupload();
        ?>

        {{ $fupload->id('imageupload')->title('Select Images')->label('Upload Images')->make() }}

    </div>
</div>

{{Former::close()}}

{{ HTML::style('css/jquery-gmaps-latlon-picker.css')}}

{{ HTML::script('js/jquery-gmaps-latlon-picker.js')}}

<script type="text/javascript">

$(document).ready(function() {

    $('select').select2({
      width : 'copy'
    });

});

</script>

@stop