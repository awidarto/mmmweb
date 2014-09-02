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
    <!-- /bootstrap -->

    <!-- core styles -->
    <link rel="stylesheet" href="{{ URL::to('cameo') }}/min/main.min.css">
    <!-- /core styles -->

    <!-- page styles -->
    @include('layout.css')
    <!-- /page styles -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="{{ URL::to('cameo') }}/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="{{ URL::to('cameo') }}/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        body {
            background: url({{ URL::to('/')}}/images/getah2.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>

    <!-- load modernizer -->
    <script src="{{ URL::to('cameo') }}/vendor/modernizr.js"></script>
    <script src="{{ URL::to('cameo') }}/min/main.min.js"></script>

</head>

<body class="bg-dark">
    <div class="app-user">
        <div class="user-container">
            <section class="panel panel-default">
                <header class="panel-heading bg-red" >{{ $title }}</header>
                <div class="bg-white user pd-lg">
                    @yield('content')
            </section>
        </div>
    </div>

</body>

</html>
