<div class="blocks col-md-4">
    <div class="row">
        <div class="col-sm-6 col-md-12">
            <div class="sm-only-row-left xs-only-row row">
                <div class="panel panel-default left-top">
                    <div class="panel-heading text-center">Members Area</div>
                    @auth
                    <div class="panel-body">
                        <div class="col-md-6 text-center">
                            <div class="row">
                                {{-- #either inject a service on view(partials.sidebar) or register on (App\Providers\AppServiceProvider::register()) --}}
                                @inject('mainchar', 'App\Http\Controllers\User\CharacterController')
                            
                                <img src="{{ Auth::user()->mainchar ? asset('static/images/components/rankings/create.php?name='.$mainchar->retrieveMainCharacter()->name) : asset('static/images/components/rankings/blank.png') }}" alt="{{ Auth::user()->mainchar ? $mainchar->retrieveMainCharacter()->name : 'No Default Character' }}" class="avatar img-responsive" style="margin: 0 auto -10px;">
                                <span class="label label-critical">{{ Auth::user()->mainchar ? $mainchar->retrieveMainCharacter()->name : 'No Default Character' }}</span>
                                @unless (Auth::user()->mainchar)
                                <div class="btn-xs" style="padding: 0;">Set Your <a href="{{ route('user.dashboard') }}#character-selection" class="font-proxima text-danger">Character</a></div>
                                @endunless
                            </div>
                        </div>
                        <div class="col-md-6">
                        @admin
                            {{-- <a href="{{ route('admin.dashboard') }}" class="btn btn-link"><strong class="text-primary">Admin</strong> Dashboard</a> --}}
                        @endadmin
                        @gm
                            <a href="{{ route('gm.dashboard') }}" class="btn btn-link"><strong class="text-danger">GM</strong> Dashboard</a>
                        @endgm
                            <a href="{{ route('user.dashboard') }}" class="btn btn-link">User Dashboard</a>
                            <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-link text-danger">Logout</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                    @endauth
                    @guest
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
                    @endguest
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-12">
            <div class="sm-only-row-right xs-only-row row">
                <div class="panel panel-default left-bottom">
                    <div class="panel-heading text-center">Statistics &amp; Information</div>
                    <div class="panel-body font-13">
                        <ul class="list-group override-margin-bottom">
                            @if (config('enigma.status.status_enabled'))
                                <li class="list-group-item">
                                    <span class="pull-right"><a href="{{ route('status') }}" class="label label-{{ Status::StatusOrCount() !== 'OFFLINE' ? 'success' : 'danger' }}">{{ Status::StatusOrCount() }}</a></span>{{ Status::StatusOrCount() !== 'OFFLINE' ? 'Players Online' : 'Server Status' }}
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
