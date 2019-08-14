@extends(app('theme')->make('layout.template', true))

@section('title', 'Donate')

@section('page_title', 'Donate')

@section('content')
<form class="form-fluid" role="form" method="POST" action="">
    <div class="form-group">
        <div class="col-md-8 col-md-offset-2">
            @if (Auth::check())
                <input id="accountid" type="text" class="form-control" name="accountid" placeholder="Username" value="{{ Auth::user()->name }}" required>
            @else
                <input id="accountid" type="text" class="form-control" name="accountid" placeholder="Username" required>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8 col-md-offset-2">
            <input id="accountpw" type="password" class="form-control" name="accountpw" placeholder="Password" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8 col-md-offset-2">
            <select id="amount" class="form-control" name="amount" required>
                <option disabled>--Select Donation Amount--</option>
                <option value="5">$5</option>
                <option value="10">$10</option>
                <option value="15">$15</option>
                <option value="25">$25</option>
                <option value="30">$30</option>
                <option value="50">$50</option>
                <option value="75">$75</option>
                <option value="100">$100</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8 col-md-offset-2">
            <input id="tos" class="custom-component" type="checkbox" name="tos" required>
            <label for="tos" class="component-checkbox"></label>
                I agree to the <a href="" target="_blank" class="font-proxima">Terms of Service</a> &amp; <a href="" target="_blank" class="font-proxima">Donation Rules</a>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4 col-md-offset-2">
            <button class="gateway paypal" type="sumbit" name="gateway" value="pp"></button>
        </div>
        <div class="col-md-4 text-right">
            <button class="gateway bitcoin" type="sumbit" name="gateway" value="bc"></button>
        </div>
    </div>
</form>
@endsection
