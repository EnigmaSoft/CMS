@extends(config('enigma.theme.name').'.layout.template')

@section('title', 'Dashboard')

@section('page_title', 'User Dashboard')

@section('content')
    <h3 class="text-center"><strong>Account Settings</strong></h3><hr />
    <div class="col-xs-12" style="margin-bottom:20px;">
        <div class="row text-center">
                <a href="{{ route('user.settings') }}" class="btn btn-block btn-lg btn-success">Change Settings</a>
        </div>
        <div class="row">
            <hr />
        </div>
    </div>
    <h3 class="text-center"><strong>Account Security</strong></h3><hr />
    <div class="col-xs-12" style="margin-bottom:20px;">
        <div class="row text-center">
            <div class="col-sm-4">
                <strong>Banned</strong><br />
                <span class="label label-{{ $banned ? 'danger' : 'success' }}">{{ $banned ? 'Yes' : 'No' }}</span>
            </div>
            <div class="col-sm-4">
                <strong>Last Login (Web)</strong><br />
                <span class="label label-warning" data-toggle="tooltip" data-original-title="{{ $lastweblogin == 'Never' ? $lastweblogin : \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $lastweblogin)->format('l, F jS, Y h:ia') }}">{{ $lastweblogin }}</span>
            </div>
            <div class="col-sm-4">
                <strong>Last IP (Web)</strong><br />
                <span class="label label-warning">{{ $lastwebip }}</span>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
                <div class="row">
                    <hr />
                </div>
            </div>
            <div class="col-sm-4">
                <strong>Last Login (Game)</strong><br />
                <span class="label label-warning" data-toggle="tooltip" data-original-title="{{ $lastgamelogin == 'Never' ? $lastgamelogin : \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $lastgamelogin)->format('l, F jS, Y h:ia') }}">{{ $lastgamelogin }}</span>
            </div>
            <div class="col-sm-4">
                <strong>Last IP (Game)</strong><br />
                <span class="label label-warning">{{ $lastknownip }}</span>
            </div>
            <div class="col-sm-4 hidden">
                <strong>Last Updated</strong><br />
                <span class="label label-warning">{{ $lastupdated }}</span>
            </div>
            <div class="col-sm-4">
                <strong>Joined</strong><br />
                <span class="label label-primary">{{ $created }}</span>
            </div>
        </div>
        <div class="row">
            <hr />
        </div>
    </div>
    <h3 class="text-center"><strong>Account Rewards</strong></h3><hr />
    <div class="col-xs-12" style="margin-bottom:20px;">
        <div class="row text-center">
            <div class="col-sm-4">
                <strong>Game Cash</strong><br />
                <span class="label label-{{ $gamecash > 0 ? 'success' : 'danger' }}">{{ $gamecash }}</span>
            </div>
            <div class="col-sm-4">
                <strong>MaplePoints</strong><br />
                <span class="label label-{{ $maplepoints > 0 ? 'success' : 'danger' }}">{{ $maplepoints }}</span>
            </div>
            <div class="col-sm-4">
                <strong>VotePoints</strong><br />
                <span class="label label-{{ $votepoints > 0 ? 'success' : 'danger' }}">{{ $votepoints }}</span>
            </div>
        </div>
        <div class="row">
            <hr />
        </div>
    </div>
    @include('partials.user.main')
@endsection
