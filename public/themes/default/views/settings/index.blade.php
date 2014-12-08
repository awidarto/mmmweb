@extends('layout.coralfront')

@section('content')

<!-- col -->
<div class="col-md-12">

    <!-- col-separator -->
    <div class="col-separator col-separator-first box">

        <!-- Tabs -->
        <div class="widget widget-tabs widget-tabs-social-account widget-tabs-responsive">
            <!-- Tabs Heading -->
            <div class="widget-head">
                <ul>
                    <li class=" {{ at('profile',$active) }}"><a class="glyphicons user" href="{{ URL::to('settings') }}" ><i></i><span>Account</span></a></li>
                    <li class=" {{ at('photo',$active)}}"><a class="glyphicons credit_card" href="{{ URL::to('settings/photo') }}" ><i></i><span>Photo</span></a></li>
                    <li class=" {{ at('pass',$active)}}"><a class="glyphicons lock" href="{{ URL::to('settings/pass') }}" ><i></i><span>Password</span></a></li>
                </ul>
            </div>
            <!-- // Tabs Heading END -->
            <div class="col-separator-h box"></div>
            <div class="widget-body">
                <div class="tab-content">
                    <!-- Tab content -->
                    <div id="tabPassword" class="tab-pane active">
                        @if($active == 'profile')
                            @include('settings.profile',array('user',$user))
                        @endif
                        @if($active == 'photo')
                            @include('settings.photo')
                        @endif
                        @if($active == 'pass')
                            @include('settings.pass')
                        @endif
                    </div>
                    <!-- // Tab content END -->

                </div>
            </div>
        </div>
        <!-- // Tabs END -->

    </div>
    <!-- // END col-separator -->

</div>
<!-- // END col -->


@stop