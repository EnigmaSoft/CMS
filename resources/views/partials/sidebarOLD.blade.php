<div class="blocks col-md-4">
    <div class="row">
        <div class="col-sm-6 col-md-12">
            <div class="sm-only-row-left xs-only-row row">
                <div class="panel panel-default left-top">
                    <div class="panel-heading text-center">Members Area</div>
                    @if (Auth::check())
                    <div class="panel-body">
                        <p class="text-center">Welcome, <code>{{ Auth::user()->name }}</code>!</p>
                        {{-- @if (Auth::user()->gm >= 5)
                            <a href="{{ route('sadmin.dashboard') }}" class="btn btn-block btn-warning">SuperAdmin Dashboard</a>
                        @endif
                        @if (Auth::user()->gm >= 4)
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-block btn-warning">Admin Dashboard</a>
                        @endif --}}
                        @if (Auth::user()->gm >= 3)
                            <a href="{{ route('gm.dashboard') }}" class="btn btn-block btn-warning">GameMaster Dashboard</a>
                        @endif
                        <a href="{{ route('user.dashboard') }}" class="btn btn-block btn-info">User Dashboard</a>
                        <a href="{{ url('/logout') }}" class="btn btn-block btn-danger" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    @else
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            @if ($errors->has('name'))
                                <div class="alert alert-danger">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </div>
                            @endif
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Username" value="{{ old('username') }}" required="" />
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" name="password" placeholder="Password" value="{{ old('password') }}" required="" />
                            </div>
                            <div class="form-group override-margin-bottom">
                                <button type="submit" class="btn btn-block btn-success">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer text-center clearfix font-13">
                        <div class="col-xs-6">
                            <div class="row">
                                <a href="{{ route('reset') }}">Forgot Information</a>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="row">
                                <a href="{{ route('register') }}">Create an Account</a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-12">
            <div class="sm-only-row-right xs-only-row row">
                <div class="panel panel-default left-bottom">
                    <div class="panel-heading text-center">Statistics &amp; Information</div>
                    <div class="panel-body font-13">
                        <ul class="list-group override-margin-bottom">
                            @if (config('server.status_enabled'))
                                <li class="list-group-item">
                                    <span class="pull-right"><a href="{{ route('status') }}" class="label label-{{ App\Http\Controllers\ServerController::showOnlineCount() !== 'OFFLINE' ? 'success' : 'danger' }}">{{ App\Http\Controllers\ServerController::showOnlineCount() }}</a></span>{{ App\Http\Controllers\ServerController::showOnlineCount() !== 'OFFLINE' ? 'Players Online' : 'Server Status' }}
                                </li>
                            @endif
                            <li class="list-group-item">
                                <span class="pull-right"><a href="#" class="label label-default" data-toggle="tooltip" data-placement="top" title="Exp/Meso/Drop">{{ config('server.exprate') }}/{{ config('server.mesorate') }}/{{ config('server.droprate') }}</a></span>Server Rates
                            </li>
                            <li class="list-group-item">
                                <span class="pull-right"><a href="{{ route('download') }}" class="label label-default">{{ config('server.version') }}</a></span>Client Version
                            </li>
                        </ul>
                    </div>
                    <div class="panel-footer text-center clearfix font-13">
                        <div class="col-xs-6">
                            <div class="row">
                                <a href="{{ route('help') }}">Help Centre</a>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="row">
                                <a href="{{ route('guide') }}">Game Guide</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
