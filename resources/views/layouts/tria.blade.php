<!DOCTYPE html>
<html lang="en-US">
<head>
	<!-- Document Settings -->
	<meta charset="utf-8">
	<!-- Page Meta -->
	<title>{{ config('server.name', 'Enigma') }}</title>
	<meta name="description" content="meta_description" />
	<meta name="keywords" content="maple, story, maplestory, maple story, ms, wizet,
	nxgames, nexon, 2d, 3d, side-scroll, mgame, korea, america, fps, rpg, role-playing,
	mmorpg, mmog, online game, anime, fantasy, global, download, core, maplecore, world
	of warcraft, warcraft, world, rakion, online, drift, city, drift city, driftcity,
	mu online, mu, games, game, gaming, core gaming, core-gaming, network, core inc,
	incorporated, corporation, war rock, warrock, war, rock, combat arms, ca, facebook,
	twitter, google, bing, 2d, 3d, mmorpg, pets, exploration, voyage, pet, adventure,
	spells, magic, pc games, free, multiplayer, online, free games, free game, free mmorpg,
	free 3d mmorpg, free online game, free online games, games, voyage century, gaming,
	voyage century online, myth war online, mythwar, gw, godswar online, talesofpirates,top"/>
	<!-- Styles & Favicon -->
	<link href="{{ asset('static/css/layout.css?version=0.0.1') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('static/theme/summer/css/theme.css?version=0.0.1') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('static/img/favicon.ico?version=0.0.1') }}" rel="shortcut icon" type="image/x-icon" />
	<!-- Responsive Meta Tags -->
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- OG Meta Tags -->
	<meta property="og:title" content="og_title"/>
	<meta property="og:site_name" content="og_site-name"/>
	<meta property="og:image" content="{{ asset('static/img/og_image.jpg') }}"/>
	<!-- Robots Meta Tags -->
	<meta name="robots" content="index,follow" />
</head>
<body>
	<!-- Body -->
	@auth
		<div class="toolbar" style="padding: 9px 0 8px;background: #1b1b1b;border-bottom: 1px solid #000;font-size: 12px;line-height: 14px;color: #fff;">
			<div class="inner-wrapper">
				<span>Hello, {{ Auth::user()->name }}</span>
			</div>
		</div>
	@endauth
	<div class="enigma">
		<div class="wrapper">
			<div class="inner-wrapper">
				<header>
					<a id="logo" role="button" href="{{ route('home') }}">{{ config('server.name', 'Enigma') }}</a>
				</header>
				@include('partials.nav')
				<div class="container container-top">
					@include('partials.carousel')
					<a href="{{ route('download') }}" class="download-banner">
						<span class="download-banner download-banner-hover"></span>
					</a>
					<div class="control-panel">
						<div id="control-panel-box">
							<div class="form-control">
								@auth
									<div class="col-6 align-center" style="margin-top: -25px;">
										{{-- #either inject a service on view(partials.sidebar) or register on (App\Providers\AppServiceProvider::register()) --}}
										@inject('mainchar', 'App\Http\Controllers\User\CharacterController')
									
										<img src="{{ Auth::user()->mainchar ? asset('static/img/rankings/create.php?name='.$mainchar->retrieveMainCharacter()->name) : asset('static/img/rankings/blank.png') }}" alt="{{ Auth::user()->mainchar ? $mainchar->retrieveMainCharacter()->name : 'No Default Character' }}" class="avatar img-responsive" style="margin: 0 auto -10px;">
										<span class="label label-danger">{{ Auth::user()->mainchar ? $mainchar->retrieveMainCharacter()->name : 'None' }}</span>
										@unless (Auth::user()->mainchar)
											<p class="btn-xs" style="padding: 0;">Set Your <a href="{{ route('user.dashboard') }}#character-selection" class="font-proxima text-danger">Character</a></p>
										@endunless
									</div>
									<div class="col-6">
									@admin
										{{-- <a href="{{ route('admin.dashboard') }}" class="btn btn-link" style="display:block;"><strong class="text-primary">Admin</strong> Dashboard</a> --}}
									@endadmin
									@gm
										<a href="{{ route('gm.dashboard') }}" class="btn btn-link" style="display:block;"><strong class="text-danger">GM</strong> Dashboard</a>
									@endgm
										<a href="{{ route('user.dashboard') }}" class="btn btn-link" style="display:block;">User Dashboard</a>
										<a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-link text-danger" style="display:block;">Logout</a>
										<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
										</form>
									</div>
								@endauth
								@guest
									@if ($errors->has('name'))
										<div class="alert alert-danger" style="font-size: 12px;padding: 0px 0px 5px 0px;color: #f98080;text-align: center;">
											<strong>{{ $errors->first('name') }}</strong>
										</div>
									@endif
									<form role="form" method="POST" action="{{ url('/login') }}">
										{{ csrf_field() }}
										<input type="text" name="name" id="username" value="Username" required="" />
										<input type="text" name="nopassword" value="Password" id="nopassword" class="secondary" />
										<input type="password" name="password" id="password" class="secondary" style="display:none;" required="" />
										<button type="submit" id="login-submit" name="submit">Log In</button>
									</form>
									<div class="col-6 align-left">
										<a href="{{ route('resetpw') }}">Forgot your ID / PW?</a>
									</div>
									<div class="col-6 align-right">
										<a href="{{ route('register') }}">Create an Account</a>
									</div>
								@endguest
							</div>
						</div>
						<a href="" id="like-us">Like us on Facebook!</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="container container-middle">
					<div class="main-container-right">
						<a href="{{ route('guide') }}" class="banners-sprite getting-started-banner">
							<span class="banners-sprite getting-started-banner-hover"></span>
						</a>
						<a href="{{ route('register') }}" class="banners-sprite server-info-banner">
							<span class="banners-sprite server-info-banner-hover"></span>
						</a>
						<a href="{{ route('vote') }}" class="banners-sprite vote-for-rewards-banner">
							<span class="banners-sprite vote-for-rewards-banner-hover"></span>
						</a>
					</div>
					<div id="main-content-title">@yield('page_title')</div>
					<div class="main-container-left">
						<div id="main-content">
							@yield('content')
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="inner-wrapper">
			<a href="" id="brand" role="button">Branding of {{ config('server.name', 'Enigma') }}</a>
			<div class="container-bottom">
				<h5>{{ config('server.name', 'Enigma') }} - MapleStory Private Server - Free to Play 2D Adventure MMORPG</h5>
				<h6>{{ config('server.name', 'Enigma') }} is a Free to Play 2D Adventure MMORPG based on MapleStory. Register for free now and join the {{ config('server.name', 'Enigma') }} gaming community!<br />
				Copyright &copy; {{ Carbon\Carbon::now()->format('Y') }} {{ config('server.name', 'Enigma') }}, All rights reserved - <a href="">Terms of Service</a> / <a href="">Privacy Policy</a></h6>
			</div>
			<div class="clearfix"></div>
		</div>
	</footer>
	<!-- JavaScript -->
	<script src="{{ asset('static/js/jquery-2.1.4.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('static/js/main.js') }}" type="text/javascript"></script>
</body>
</html>
