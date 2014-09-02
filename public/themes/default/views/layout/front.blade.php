<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- Some assets concatenated and minified to improve load speed. Download version includes source css, javascript and less assets -->
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1">

    <title>{{ Config::get('site.name') }}</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ URL::to('cameo') }}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/bootstrap-material-design/css-compiled/material.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/bootstrap-material-design/css-compiled/ripples.css">
    <!-- /bootstrap -->

    <!-- core styles -->
    <link rel="stylesheet" href="{{ URL::to('cameo') }}/min/main.min.css">
    <!-- /core styles -->

    <!-- page styles -->
    <link rel="stylesheet" href="{{ URL::to('cameo')}}/vendor/slider/slider.css">
    <link rel="stylesheet" href="{{ URL::to('cameo')}}/vendor/video-js/video-js.css">
    <link rel="stylesheet" href="{{ URL::to('cameo')}}/vendor/audioplayer/audioplayer.css">

    <link rel="stylesheet" href="{{ URL::to('cameo') }}/vendor/bootstrap-select/bootstrap-select.css">
    {{ HTML::style('datatables/css/dataTables.bootstrap.css')}}
    {{ HTML::style('css/bootstrap-modal-bs3patch.css') }}
    {{ HTML::style('css/bootstrap-modal.css') }}
    {{ HTML::style('css/flick/jquery-ui-1.9.2.custom.min.css') }}
    @include('layout.css')
    <!-- /page styles -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="{{ URL::to('cameo') }}/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="{{ URL::to('cameo') }}/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="{{ URL::to('cameo') }}/vendor/modernizr.js"></script>

    {{ HTML::script('js/jquery-1.9.1.js')}}
    {{ HTML::script('js/jquery-ui-1.9.2.custom.min.js')}}

    {{ HTML::script('js/blueimp-gallery.min.js') }}
    {{ HTML::script('js/jquery.blueimp-gallery.min.js') }}

    <script type="text/javascript">
        var base = '{{ URL::to('/') }}/';
    </script>

</head>

<!-- body -->

<body>
    <div class="app">
        <div class="container box-shadow">
            @include('partials.topnav')
            <section class="layout">
                <!-- main content -->
                <section class="main-content">

                    <header class="header header-fixed navbar bg-white bd-l">
                        <p class="navbar-text">Blank Template
                            <i>
                                <small>(Perfect place to get started)</small>
                            </i>
                        </p>
                    </header>

                    <!-- content wrapper -->
                    <div class="content-wrap">
                        <div class="row">
                            <div class="col-md-3">

                                @include('partials.sideprofile')

                            </div>
                            <div class="col-md-5">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                    <!-- /content wrapper -->

                </section>
                <!-- /main content -->

            </section>

        </div>
    </div>
    <script src="{{ URL::to('cameo') }}/js/main.js"></script>

    <!-- page scripts -->

    @include('layout.js')
    <!-- /page scripts -->

</body>
<!-- /body -->

</html>
