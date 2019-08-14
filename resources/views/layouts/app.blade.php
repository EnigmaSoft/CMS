<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('server.name', 'Laravel') }} - @yield('title')</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Scripts -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .label {
            box-shadow: 0px -3px 0px 0px rgba(0, 0, 0, 0.15) inset;
        }
        .label-critical {
            background-color: #000;
        }
    </style>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app" style="overflow: auto;">
        <nav class="navbar navbar-inverse navbar-static-top" style="{{ Route::currentRouteName() == 'gm.dashboard' ? 'margin-bottom:0;' : '' }}">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ route('gm.dashboard') }}">GM Panel</a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="{{ Route::currentRouteName() == 'gm.news.index' ? 'active' : '' }}">
                            <a href="{{ route('gm.news.index') }}">News</a>
                        </li>
                        @admin
                            <li class="{{ Route::currentRouteName() == 'admin.informant.index' ? 'active' : '' }}">
                                <a href="{{ route('admin.informant.index') }}">Informant</a>
                            </li>
                        @endadmin
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <p class="navbar-text">Return to <a href="{{ route('home') }}" style="color: #fff;">{{ config('app.name', 'homepage') }}</a></p>
                        </li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('admin.dashboard') }}" class="btn"><strong class="text-primary">Admin</strong> Dashboard</a></li>
                                    <li><a href="{{ route('user.dashboard') }}" class="btn"><strong>User</strong> Dashboard</a></li>
                                    <li><a href="{{ route('user.settings') }}" class="btn">Account Settings</a></li>
                                    <li>
                                        <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn"><span class="text-danger">Logout</span></a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('below_nav')
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 {{-- col-md-8 col-md-offset-2 --}}">
                        <div class="row">
                            @include('partials.alert')
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('static/js/jquery-2.1.4.min.js') }}"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset('static/js/main.js') }}"></script>
    {{-- <script src="{{ asset('static/js/snowify.min.js') }}"></script> --}}
    <script type='text/javascript'>
        $(document).ready(function() {
            $('[data-toggle=collapse]').click(function(){
                $(this).find("i").toggleClass("fa-chevron-right fa-chevron-down");
            });
        });
    </script>
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
</body>
</html>
