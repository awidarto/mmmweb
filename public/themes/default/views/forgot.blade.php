@extends('layout.login')

@section('content')
            <!-- if there are login errors, show them here -->
{{ Form::open(array('url' => 'forgot','class'=>'form-signin')) }}
        <h4>Fill in email address used for your account.</h4>

        <fieldset>
            @if (Session::get('signupError'))
                <div class="alert alert-danger">{{ Session::get('signupError') }}</div>
                     <button type="button" class="close" data-dismiss="alert"></button>
            @endif

            <input class="input-large form-control mg-b-sm" name="email" id="email" type="text" placeholder="email" />

            <div class="clearfix"></div>

            <button class="btn btn-info btn-block" type="submit">Reset Password</button>

            <p class="center-block mg-t mg-b text-right">
                <a href="{{ URL::to('/') }}/#">Back to home</a>
            </p>

        </fieldset>

{{ Form::close() }}

@stop