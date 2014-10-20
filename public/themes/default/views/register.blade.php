@extends('layout.signin')

@section('content')
@if (Session::get('signupError'))
    <div class="alert alert-danger">{{ Session::get('signupError') }}</div>
         <button type="button" class="close" data-dismiss="alert"></button>
@endif
            <!-- if there are login errors, show them here -->
{{ Form::open(array('url' => 'signup','class'=>'form-horizontal', 'id'=>'form-login' )) }}
    <div class="form-group">
        <div class="col-xs-6">
            <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                <input type="text" id="firstname" name="firstname" class="form-control input-lg" placeholder="Firstname">
            </div>
        </div>
        <div class="col-xs-6">
            <input type="text" id="lastname" name="lastname" class="form-control input-lg" placeholder="Lastname">
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                <input type="text" id="email" name="email" class="form-control input-lg" placeholder="Email">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                <input type="password" id="repass" name="repass" class="form-control input-lg" placeholder="Verify Password">
            </div>
        </div>
    </div>
    <div class="form-group form-actions">
        <div class="col-xs-6">
            <a href="#modal-terms" data-toggle="modal" class="register-terms">Terms</a>
            <label class="switch switch-primary" data-toggle="tooltip" title="Agree to the terms">
                <input type="checkbox" id="register-terms" name="register-terms">
                <span></span>
            </label>
        </div>
        <div class="col-xs-6 text-right">
            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Register Account</button>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12 text-center">
            <small>Do you have an account?</small> <a href="{{ URL::to('login')}}" id="link-register"><small>Login</small></a>
        </div>
    </div>

{{ Form::close() }}

@stop