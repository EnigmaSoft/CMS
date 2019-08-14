@extends(config('enigma.theme.name').'.layout.template')

@section('title', 'Dashboard')

@section('page_title', 'Account Settings')

@section('content')
    <h3 class="text-center"><strong>Account Settings</strong></h3><hr />
    <div class="col-xs-12">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 alert alert-default">Hello <strong class="text-primary">{{ Auth::user()->name }}</strong>, welcome to your <strong>Account Settings</strong>!</div>
        </div>
        <div class="row">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('user.settings') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('musername') ? ' has-error' : '' }}">
                    <div class="col-md-8 col-md-offset-2">
                        <label for="musername">Username</label>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <input id="musername" type="text" class="form-control" name="musername" placeholder="Username" value="{{ Auth::user()->name }}" disabled>

                        @if ($errors->has('musername'))
                            <span class="help-block">
                                <strong>{{ $errors->first('musername') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
                    <div class="col-md-8 col-md-offset-2">
                        <label for="current_password">Current Password</label>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <input id="current_password" type="password" class="form-control" name="current_password" placeholder="Current Password" required>

                        @if ($errors->has('current_password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('current_password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                    <div class="col-md-8 col-md-offset-2">
                        <label for="new_password">New Password</label>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <input id="new_password" type="password" class="form-control" name="new_password" placeholder="New Password" required>

                        @if ($errors->has('new_password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('new_password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('new_password_confirm') ? ' has-error' : '' }}">
                    <div class="col-md-8 col-md-offset-2">
                        <label for="new_password-confirm">Confirm New Password</label>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <input id="new_password-confirm" type="password" class="form-control" name="new_password_confirmation" placeholder="Repeat New Password" required>

                        @if ($errors->has('new_password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('new_password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <button class="btn btn-block btn-success" type="submit">Modify Account Settings</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
