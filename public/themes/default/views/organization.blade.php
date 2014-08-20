@extends('layout.login')

@section('content')
            <!-- if there are login errors, show them here -->

<?php
    Former::framework('Nude');
?>

<style type="text/css">
    select {
        margin-top:10px;
    }
</style>

{{ Form::open(array('url' => 'organization','class'=>'form-signin')) }}
        <h2>Organization</h2>
        <fieldset>
            @if (Session::get('loginError'))
                <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
                     <button type="button" class="close" data-dismiss="alert"></button>
            @endif
            @if(Auth::check())
                <p class="navbar-text pull-right">
                    Hello {{ Auth::user()->fullname }}, you haven't joined any organization. Please create new one or join existing organization.
                </p>
            @else
                <p>Create new organization or join existing organization : </p>
            @endif

            {{ Former::hidden('user_id')->value($newuser) }}
            <input class="input-large span12" name="name" id="name" type="text" placeholder="organization name" />

            <input class="input-large span12" name="subdomain" id="subdomain" type="text" placeholder="web domain" />

            {{ Former::select('apptype')->options( Config::get('kickstart.app_types') )->label('')->id('apptype') }}

            {{ Former::select('employeenumber')->options( Config::get('kickstart.employee_number') )->label('')->id('employeenumber') }}

            {{ Former::select('country')->options( Config::get('country.countries') )->label('')->id('country') }}


            <div class="clearfix"></div>

            <button type="submit" class="btn btn-primary span12">Sign Up</button>
        </fieldset>

{{ Form::close() }}

@stop