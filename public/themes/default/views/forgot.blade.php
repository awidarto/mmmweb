@extends('layout.signin')

@section('content')
            @if (Session::get('signupError'))
                <div class="alert alert-danger">{{ Session::get('signupError') }}</div>
                     <button type="button" class="close" data-dismiss="alert"></button>
            @endif
            <!-- if there are login errors, show them here -->

            <!-- if there are login errors, show them here -->
{{ Form::open(array('url' => 'forgot','class'=>'form-horizontal', 'id'=>'form-login' )) }}
        <h4>Fill in email address used for your account.</h4>

        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                    <input type="text" id="email" name="email" class="form-control input-lg" placeholder="Email">
                </div>
            </div>
        </div>
        <div class="form-group form-actions">
            <div class="col-xs-4">
                {{--
                <label class="switch switch-primary" data-toggle="tooltip" title="Remember Me?">
                    <input type="checkbox" id="login-remember-me" name="login-remember-me" checked>
                    <span></span>
                </label>
                --}}
            </div>
            <div class="col-xs-8 text-right">
                <button type="submit" class="btn btn-sm btn-primary">
                    <i class="fa fa-angle-right"></i> Submit
                </button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12 text-center">
                <small>Do you have an account ?</small> <a href="{{ URL::to('login')}}" id="link-register"><small>Sign In</small></a>
                <small>Do want to create new account ?</small> <a href="{{ URL::to('signup')}}" id="link-register"><small>Sign Up</small></a>
            </div>
        </div>


{{ Form::close() }}

@stop