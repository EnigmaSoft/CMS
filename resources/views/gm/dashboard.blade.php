@extends('layouts.panel')

@section('title', 'Dashboard')
@section('page-title', 'Sections')

@section('content')
    <!-- Stat Items -->
    <div class="row">
        <div class="col-xs-12 col-sm-3">
            <div class="dashboard-stats__item dashboard-stats__item_red">
                <i class="fa fa-comments"></i>
                <h3 class="dashboard-stats__title">
                    <span class="count-to" data-from="0" data-to="{{ $articles }}">{{ $articles }}</span>
                    <small>Articles</small>
                </h3>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3">
            <div class="dashboard-stats__item dashboard-stats__item_orange">
                <i class="fa fa-globe"></i>
                <h3 class="dashboard-stats__title">
                    <span class="count-to" data-from="0" data-to="5412">5412</span>
                    <small>Customers</small>
                </h3>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3">
            <div class="dashboard-stats__item dashboard-stats__item_green">
                <i class="fa fa-pie-chart"></i>
                <h3 class="dashboard-stats__title">
                    <span class="count-to" data-from="0" data-to="4155">4155</span>
                    <small>Orders</small>
                </h3>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3">
            <div class="dashboard-stats__item dashboard-stats__item_light-blue">
                <i class="fa fa-eur"></i>
                <h3 class="dashboard-stats__title">
                    $<span class="count-to" data-from="0" data-to="105">105</span>K
                    <small>Total profit</small>
                </h3>
            </div>
        </div>
    </div>

    <div class="col-xs-12" style="margin-bottom:20px;">
        <div class="row text-center">
            <a href="{{ route('gm.news.index') }}" class="btn btn-info">News</a>
            <a href="{-{ route('user.settings') }-}" class="btn btn-danger">Investigations</a>
            <a href="{-{ route('user.settings') }-}" class="btn btn-success">Support</a>
        </div>
    </div>
@endsection
