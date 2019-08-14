<!DOCTYPE html>
<html class="no-js" lang="en-US">
<head>
    @include('partials.head')
</head>
<body>
    @if (in_array('above_nav', config('server.breadcrumb.position')))
    <div class="col-md-12">
        <div class="row">
            @include('partials.breadcrumb')
        </div>
    </div>
    @endif
    @include('partials.nav')
	<div class="container">
		<div class="row">
            @if (in_array('below_logo', config('server.breadcrumb.position')))
            <div class="col-md-12" style="margin-top: -45px; position: relative; z-index: 0;">
                <div class="row">
                    @include('partials.breadcrumb')
                </div>
            </div>
            @endif
            @include('partials.sidebar')
			<div class="blocks col-md-8">
				<div class="row">
					<div class="panel panel-default right-top right-bottom">
						<div class="panel-heading text-center">@yield('page_title')</div>
						<div class="panel-body">
                            @include('partials.alert')
                            @yield('content')
						</div>
						<div class="panel-footer text-right"><h6>Copyright &copy; {{ config('server.name', 'Laravel') }} {{ date('Y') }}, all rights reserved.</h6></div>
                    </div>
                    <h6 id="footer-links" class="text-center">
                        <a href="{{ route('help') }}" class="font-proxima text-danger">Help Center</a>
                        | 
                        <a href="#" class="font-proxima text-danger">FAQ</a>
                        | 
                        <a href="{{ route('status') }}" class="font-proxima text-danger">Server Status</a>
                    </h6>
                    <h6 class="text-center">@lang('messages.Built with love') <a href="http://forum.ragezone.com/members/1333372200.html" target="_blank" class="font-proxima">Snopboy</a></h6>
				</div>
			</div>
            @if (in_array('below_footer', config('server.breadcrumb.position')))
                @include('partials.breadcrumb')
            @endif
		</div>
    </div>
    @stack('before_scripts')
    @include('partials.scripts')
</body>
</html>
