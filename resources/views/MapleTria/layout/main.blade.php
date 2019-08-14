<div class="container container-middle">
    <div class="main-container-right">
        <a href="{{ route('guides') }}" class="banners-sprite getting-started-banner">
            <span class="banners-sprite getting-started-banner-hover"></span>
        </a>
        <a href="{{ route('info') }}" class="banners-sprite server-info-banner">
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