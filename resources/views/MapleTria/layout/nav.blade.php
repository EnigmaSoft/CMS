<div id="navigation">
    <nav>
        <ul>
            <li class="{{ Request::segment(1) == '' ? 'active' : '' }}">
                <a href="{{ route('home') }}">Home</a>
            </li>
            @auth
                <li class="{{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('user.dashboard') }}">Dashboard</a>
                </li>
            @endauth
            @guest
                <li class="{{ Request::segment(1) == 'register' ? 'active' : '' }}">
                    <a href="{{ route('register') }}">Register</a>
                </li>
            @endguest
            <li class="{{ Request::segment(1) == 'downloads' ? 'active' : '' }}">
                <a href="{{ route('downloads') }}">Downloads</a>
            </li>
            <li class="{{ Request::segment(1) == 'status' ? 'active' : '' }}">
                <a href="{{ route('status') }}">Status</a>
            </li>
            <li class="{{ Request::segment(1) == 'rankings' ? 'active' : '' }}">
                <a href="{{ route('rankings') }}">Rankings</a>
            </li>
            <li>
                <a href="{{ config('server.forum_url', url('forums')) }}">Community</a>
            </li>
            <li class="{{ Request::segment(1) == 'vote' ? 'active' : '' }}">
                <a href="{{ route('vote') }}">Vote</a>
            </li>
            <li class="{{ Request::segment(1) == 'donate' ? 'active' : '' }}">
                <a href="{{ route('donate') }}">Donate</a>
            </li>
        </ul>
    </nav>
</div>