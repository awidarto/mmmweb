@extends('layout.login')

@section('content')
            <!-- if there are login errors, show them here -->
@if(Auth::check())
    <p class="navbar-text pull-right">
        Hello {{ Auth::user()->fullname }}
        <a href="{{ URL::to('logout')}}" >Logout</a>
    </p>
@endif

{{ Form::open(array('url' => 'signup','class'=>'form-signin')) }}
        <h2>Welcome, fill in form below to join {{ Config::get('site.name')}}</h2>
        <fieldset>
            @if (Session::get('signupError'))
                <div class="alert alert-danger">{{ Session::get('signupError') }}</div>
                     <button type="button" class="close" data-dismiss="alert"></button>
            @endif
            <input class="input-large span12" name="firstname" id="firstname" type="text" placeholder="first name" />

            <input class="input-large span12" name="lastname" id="lastname" type="text" placeholder="last name" />

            <input class="input-large span12" name="email" id="email" type="text" placeholder="email" />

            <input class="input-large span12" name="password" id="password" type="password" placeholder="password" />

            <input class="input-large span12" name="repass" id="password" type="password" placeholder="repeat password" />

            <div class="clearfix"></div>

            <button type="submit" class="btn btn-primary span12">Sign Up</button>
        </fieldset>

{{ Form::close() }}

@stop