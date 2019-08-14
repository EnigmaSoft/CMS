<head>
	{{-- Document Settings --}}
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	{{-- Page Meta --}}
	<title>@yield('title') - {{ config('server.name', 'Enigma') }} - Powered by EnigmaCMS</title>
	<meta name="description" content="meta_description" />
	<meta name="keywords" content="maple, story, maplestory, maple story, ms, wizet,
	mg, mapleglobal, old school, nxgames, nexon, nx, 2d, 3d, side-scroll, korea, america,
	fps, rpg, role-playing, mmorpg, mmog, online game, anime, fantasy, global, download,
	of warcraft, warcraft, world, rakion, online, mu online, mu, games, game, gaming,
	core gaming, core-gaming, network, core inc, incorporated, corporation, war rock,
	warrock, war, rock, combat arms, ca, 2d, 3d, core, maplecore, world"/>
	{{-- Styles & Favicon --}}
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	{{--<script src="https://kit.fontawesome.com/2fe95d1926.js"></script>--}}
	<link href="{{ asset('static/css/layout.css?version=0.0.1') }}" rel="stylesheet" type="text/css">
	@php
		$carbon = now();
		$theme = $carbon->dayOfYear < 80 || $carbon->dayOfYear > 356 ? 'winter' : 'summer';
	@endphp
	<link href="{{ asset('static/theme/'.$theme.'/css/theme.css?version=0.0.1') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('static/img/favicon.ico?version=0.0.1') }}" rel="shortcut icon" type="image/x-icon" />
	{{-- Responsive Meta Tags --}}
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="980" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	{{-- OG Meta Tags --}}
	<meta property="og:title" content="og_title"/>
	<meta property="og:site_name" content="og_site-name"/>
	<meta property="og:image" content="{{ asset('static/img/og_image.jpg') }}"/>
	{{-- Robots Meta Tags --}}
	<meta name="robots" content="index,follow" />
</head>