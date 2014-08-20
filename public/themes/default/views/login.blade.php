@extends('layout.login')

@section('content')
            <!-- if there are login errors, show them here -->
@if(Auth::check())
    <p class="navbar-text pull-right">
        Hello {{ Auth::user()->fullname }}
        <a href="{{ URL::to('logout')}}" >Logout</a>
    </p>
@endif

{{ Form::open(array('url' => 'login','class'=>'form-signin')) }}
        <h2>Welcome to {{ Config::get('site.name')}}</h2>
        <fieldset>
            @if (Session::get('loginError'))
                <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
                     <button type="button" class="close" data-dismiss="alert"></button>
            @endif

            <input class="input-large span12" name="email" id="username" type="text" placeholder="email" />

            <input class="input-large span12" name="password" id="password" type="password" placeholder="password" />

            <div class="clearfix"></div>

            <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

            <div class="clearfix"></div>

            <button type="submit" class="btn btn-primary span12">Login</button>

            <div class="clearfix"></div>

            <a href="{{ URL::to('signup') }}"> Don't have account ? Sign up here.</a>
        </fieldset>

        {{--

        <h1>{{ Config::get('site.name')}}</h1>
        <h2 class="form-signin-heading">Please sign in</h2>
        <p>
            {{ $errors->first('email') }}
            {{ $errors->first('password') }}
        </p>

        <p>
            {{ Form::label('email', 'Email Address') }}
            {{ Form::text('email', Input::old('email')) }}
        </p>
        <p>
            {{ Form:: label('password', 'Password') }}
            {{ Form::password('password') }}
        </p>
        <p>
            <label class="checkbox">
              <input type="checkbox" id="checks" value="remember-me" checked="checked">
              Remember me
              <span class="check" for="checks"></span>
            </label>
        </p>

        <p>{{ Form::submit('Submit!',array('class'=>'btn btn-primary')) }}</p>
        --}}
{{ Form::close() }}

@stop