<div class="container container-top">
    @include(app('theme')->make('layout.featured', true))

    <a href="{{ route('downloads') }}" class="download-banner">
        <span class="download-banner download-banner-hover"></span>
    </a>
    <div class="control-panel">
        <div id="control-panel-box">
            @auth
                <table>
                    <tbody>
                        <tr>
                            @include(app('theme')->make('layout.auth.loggedin', true))
                        </tr>
                    </tbody>
                </table>
            @endauth
            @guest
                @include(app('theme')->make('layout.auth.login', true))
            @endguest
        </div>
        <a href="{{ config('server.facebook') }}" target="_blank" class="btn-blue btn-custom">Like us on Facebook!</a>
    </div>
    <div class="clearfix"></div>
</div>