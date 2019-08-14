<div id="navigation">
    <nav>
        <ul>
            <li class="{{ Request::segment(1) == '' ? 'active' : '' }}">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="{{ Request::segment(1) == 'register' ? 'active' : '' }}">
                <a href="{{ route('register') }}">Register</a>
            </li>
            <li class="{{ Request::segment(1) == 'download' ? 'active' : '' }}">
                <a href="{{ route('download') }}">Downloads</a>
            </li>
            <li class="{{ Request::segment(1) == 'status' ? 'active' : '' }}">
                <a href="{{ route('status') }}">Status</a>
            </li>
            <li class="{{ Request::segment(1) == 'rankings' ? 'active' : '' }}">
                <a href="{{ route('rankings') }}">Rankings</a>
            </li>
            <li>
                <a href="{{ config('server.forum_url', url('/').'/forums') }}">Community</a>
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