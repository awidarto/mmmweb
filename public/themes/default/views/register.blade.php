@extends('layout.login')

@section('content')
            <!-- if there are login errors, show them here -->
{{ Form::open(array('url' => 'signup','class'=>'form-signin')) }}
        <h4>Fill in form below to join {{ Config::get('site.name')}}</h4>

        <fieldset>
            @if (Session::get('signupError'))
                <div class="alert alert-danger">{{ Session::get('signupError') }}</div>
                     <button type="button" class="close" data-dismiss="alert"></button>
            @endif
            <input class="input-large form-control mg-b-sm" name="firstname" id="firstname" type="text" placeholder="first name" />

            <input class="input-large form-control mg-b-sm" name="lastname" id="lastname" type="text" placeholder="last name" />

            <input class="input-large form-control mg-b-sm" name="email" id="email" type="text" placeholder="email" />

            <input class="input-large form-control mg-b-sm" name="password" id="password" type="password" placeholder="password" />

            <input class="input-large form-control mg-b-sm" name="repass" id="password" type="password" placeholder="repeat password" />

            <div class="clearfix"></div>

            <button class="btn btn-info btn-block" type="submit">Sign up</button>
        </fieldset>

{{ Form::close() }}

@stop