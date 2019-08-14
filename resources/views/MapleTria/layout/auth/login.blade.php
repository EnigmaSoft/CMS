<div class="login-form">
    <form role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <input type="text" name="name" value="USERNAME" id="username" class="pull-left" required="" />
        <input type="password" name="password" id="password" class="secondary pull-left" style="display:none;" required="" />
        <input type="text" value="PASSWORD" id="nopassword" class="secondary pull-left" />
        <button type="submit" id="login-submit" name="submit">Log In</button>
    </form>
    <div class="col-6 align-left">
        <div class="row">
            <a href="{{ route('resetpw') }}">Forgot your ID / PW?</a>
        </div>
    </div>
    <div class="col-6 align-right">
        <div class="row">
            <a href="{{ route('register') }}">Create an Account</a>
        </div>
    </div>
    @if ($errors->has('name'))
        <div class="help-block text-danger align-center">
            <small>{{ $errors->first('name') }}</small>
        </div>
    @endif
</div>