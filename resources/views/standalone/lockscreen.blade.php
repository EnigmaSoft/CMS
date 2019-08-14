<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
	<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
	<title>{{ config('server.name', 'Laravel') }} - Lockscreen</title>
	<!-- Site favicon -->
	<link href="{{ asset('static/images/favicon.ico') }}" rel="icon" type="image/x-icon" />
	<!-- Entypo font stylesheet -->
	<link href="{{ asset('static/panel/css/entypo.css') }}" rel="stylesheet">
	<!-- Font awesome stylesheet -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- Bootstrap stylesheet min version -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Integral core stylesheet -->
	<link href="{{ asset('static/panel/css/theme.css') }}" rel="stylesheet">
	<link href="{{ asset('static/panel/css/integral-forms.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="lockscreen">
	<!-- Loader Backdrop -->
	<div class="loader-backdrop">
		<!-- Loader -->
		<div class="loader">
			<div class="bounce-1"></div>
			<div class="bounce-2"></div>
		</div>
		<!-- /loader -->
	</div>
	<!-- /loader backgrop -->

	<!-- Page container -->
    <div class="lockscreen-wrapper">

        @if ($errors->has('password'))
            <p class="text-danger text-center" role="alert">{{ $errors->first('password') }}</p>
        @endif

        @if (Session::has('danger'))
            <p class="text-danger text-center" role="alert">{!! session('danger') !!}</p>
        @endif

        <!-- User name -->
        <div class="lockscreen-name">{{ Auth::user()->name }}</div>

        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
                <img src="{{ asset('static/panel/images/thumbnail.jpg') }}" alt="User Image">
            </div>
            <!-- /.lockscreen-image -->

          <!-- lockscreen credentials (contains the form) -->
          <form class="lockscreen-credentials" method="POST">
            {{ csrf_field() }}
            <div class="input-group">
                <input class="form-control" name="password" placeholder="password" type="password">
                <div class="input-group-btn">
                    <button class="btn" type="submit"><i class="fa fa-arrow-right text-muted"></i><span class="sr-only">Submit</span></button>
                </div>
            </div>
          </form>
          <!-- /.lockscreen credentials -->
        </div>
        <!-- /.lockscreen-item -->
        <div class="help-block text-center">Enter your password to retrieve your session</div>
        <div class="text-center">
            <a href="{{ route('login') }}">Or sign in as a different user</a>
        </div>

    </div>
	<!-- /page container -->

	<!--Load JQuery-->
	<script src="{{ asset('static/panel/js/jquery.min.js') }}"></script>
	<script src="{{ asset('static/panel/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('static/panel/js/jquery.metisMenu.js') }}"></script>
	<script src="{{ asset('static/panel/js/functions.js') }}"></script>
	<script src="{{ asset('static/panel/js/loader.js') }}"></script>
</body>
</html>
