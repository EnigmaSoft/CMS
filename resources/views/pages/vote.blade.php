@extends('layouts.master')

@section('title', 'Vote')

@section('page_title', 'Vote for Rewards')

@section('content')
<form class="form-horizontal" role="form" method="POST" action="">
    <div class="form-group">
        <div class="col-md-8 col-md-offset-2">
            @if (Auth::check())
                <input id="username" type="text" class="form-control" name="username" placeholder="Username" value="{{ Auth::user()->name }}" required autofocus>
            @else
                <input id="username" type="text" class="form-control" name="username" placeholder="Username" required autofocus>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8 col-md-offset-2">
            <select id="site" class="form-control" name="site" required>
                <option disabled>--Select Voting Site--</option>
                <option value="gtop100">Gtop100 - 1,000 NX</option>
                <option value="topg">TopG - 750 NX</option>
                <option value="ups">UPS - 500 NX</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8 col-md-offset-2">
            <input id="tos" class="custom-component" type="checkbox" name="tos" required>
            <label for="tos" class="component-checkbox"></label>
                I agree to the <a href="" target="_blank" class="font-proxima">Terms of Service</a> &amp; <a href="" target="_blank" class="font-proxima">Voting Guidelines</a>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8 col-md-offset-2">
            <button type="submit" class="btn btn-block btn-success">Vote</button>
        </div>
    </div>
</form>
@endsection
