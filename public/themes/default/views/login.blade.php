@extends('layout.signin')

@section('content')
        @if (Session::get('loginError'))
            <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
                 <button type="button" class="close" data-dismiss="alert"></button>
        @endif

        {{ Form::open(array('url' => 'login','class'=>'form-horizontal', 'id'=>'form-login' )) }}

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
                        <i class="fa fa-angle-right"></i> Login
                    </button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 text-center">
                    <a href="{{ URL::to('forgot') }}" id="link-reminder-login"><small>Forgot password?</small></a> -
                    <a href="{{ URL::to('signup') }}" id="link-register-login"><small>Create a new account</small></a>
                </div>
            </div>

        {{--

        <h2>Welcome to {{ Config::get('site.name')}}</h2>
        <h6>
            Please sign in to get started!
        </h6>
        <fieldset>
            @if (Session::get('loginError'))
                <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
                     <button type="button" class="close" data-dismiss="alert"></button>
            @endif

            <input class="input-large form-control mg-b-sm" name="email" id="username" type="text" placeholder="email" />

            <input class="input-large form-control mg-b-sm" name="password" id="password" type="password" placeholder="password" />

            <label class="checkbox pull-left">
                <input type="checkbox" value="remember-me" >Remember me
            </label>

            <button class="btn btn-danger btn-block" type="submit">Sign in</button>

            <div class="text-right mg-b-sm mg-t-sm">
                <a href="{{ URL::to('forgot') }}">Forgot password?</a>
            </div>

            <p class="center-block mg-t mg-b text-right">Dont have an account?
                <a href="{{ URL::to('signup') }}">Signup here.</a>
7            </p>
        </fieldset>
        --}}

        {{ Form::close() }}


@stop