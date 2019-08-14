
@include(app('theme')->make('layout.character', true))
<td class="col-6">
@superadmin
    <a href="{{ route('theme.test') }}" style="display:block;"><strong>Tester</strong> Page</a>
@endsuperadmin
@admin
    <a href="{{ route('admin.dashboard') }}" style="display:block;"><strong>Admin</strong> Dashboard</a>
@endadmin
@gm
    <a href="{{ route('gm.dashboard') }}" style="display:block;"><strong>GM</strong> Dashboard</a>
@endgm
    <a href="{{ route('user.dashboard') }}" style="display:block;"><strong>User</strong> Dashboard</a>
    <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="display:block;">Logout</a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</td>