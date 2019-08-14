@extends('layouts.tria')

@section('title', $title)

@section('page_title', $title)

@section('content')
    <nav id="news-menu" class="page-header">
        <ul class="nav-justified text-center list-unstyled" style="padding: 0;">
            <li role="presentation"><a href="{{ route('news') }}#news" class="label label-default">All</a></li>
            <li role="presentation"><a href="{{ route('news.general') }}#news" class="label label-warning">General</a></li>
            <li role="presentation"><a href="{{ route('news.update') }}#news" class="label label-info">Updates</a></li>
            <li role="presentation"><a href="{{ route('news.notice') }}#news" class="label label-primary">Notices</a></li>
            <li role="presentation"><a href="{{ route('news.event') }}#news" class="label label-success">Events</a></li>
            <li role="presentation"><a href="{{ route('news.maintenance') }}#news" class="label label-danger">Maintenance</a></li>
            <li role="presentation"><a href="{{ route('news.promotion') }}#news" class="label label-purple">Promotion</a></li>
        </ul>
        <hr />
        <ul class="nav nav-justified custom-component">
            <li role="presentation" class="{{ Route::currentRouteName() == 'news' ? 'active' : '' }}"><a href="{{ route('news') }}#news" class="label label-default">All</a></li>
            <li role="presentation" class="{{ Route::currentRouteName() == 'news.general' ? 'active' : '' }}"><a href="{{ route('news.general') }}#news" class="label label-warning">General</a></li>
            <li role="presentation" class="{{ Route::currentRouteName() == 'news.update' ? 'active' : '' }}"><a href="{{ route('news.update') }}#news" class="label label-info">Updates</a></li>
            <li role="presentation" class="{{ Route::currentRouteName() == 'news.notice' ? 'active' : '' }}"><a href="{{ route('news.notice') }}#news" class="label label-primary">Notices</a></li>
            <li role="presentation" class="{{ Route::currentRouteName() == 'news.event' ? 'active' : '' }}"><a href="{{ route('news.event') }}#news" class="label label-success">Events</a></li>
            <li role="presentation" class="{{ Route::currentRouteName() == 'news.maintenance' ? 'active' : '' }}"><a href="{{ route('news.maintenance') }}#news" class="label label-danger">Maintenance</a></li>
            <li role="presentation" class="{{ Route::currentRouteName() == 'news.promotion' ? 'active' : '' }}"><a href="{{ route('news.promotion') }}#news" class="label label-purple">Promotion</a></li>
        </ul>
        <hr />
        <ul class="nav nav-pills nav-justified">
            <li role="presentation" class="{{ Route::currentRouteName() == 'news' ? 'active' : '' }}"><a href="{{ route('news') }}#news">All</a></li>
            <li role="presentation" class="{{ Route::currentRouteName() == 'news.general' ? 'active' : '' }}"><a href="{{ route('news.general') }}#news">General</a></li>
            <li role="presentation" class="{{ Route::currentRouteName() == 'news.update' ? 'active' : '' }}"><a href="{{ route('news.update') }}#news">Updates</a></li>
            <li role="presentation" class="{{ Route::currentRouteName() == 'news.notice' ? 'active' : '' }}"><a href="{{ route('news.notice') }}#news">Notices</a></li>
            <li role="presentation" class="{{ Route::currentRouteName() == 'news.event' ? 'active' : '' }}"><a href="{{ route('news.event') }}#news">Events</a></li>
            <li role="presentation" class="{{ Route::currentRouteName() == 'news.maintenance' ? 'active' : '' }}"><a href="{{ route('news.maintenance') }}#news">Maintenance</a></li>
            <li role="presentation" class="{{ Route::currentRouteName() == 'news.promotion' ? 'active' : '' }}"><a href="{{ route('news.promotion') }}#news">Promotion</a></li>
        </ul>
    </nav>
    <table id="news" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th class="text-center" width="20%">Category</th>
                <th>Title</th>
                <th class="text-center" width="20%">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <td class="text-center"><a href="{{ $article->vcategory != 'Error' ? route('news.'.str_slug($article->vcategory)) : '#' }}" class="label label-{{ $article->theme }}">{{ $article->vcategory }}</a></td>
                <td><a href="{{ route('article', $article->slug) }}" class="font-proxima text-danger">{{ str_limit($article->title, 45) }}</a></td>
                <td class="text-center"><time datetime="{{ $article->created_at->format('d-m-Y') }}"  data-toggle="tooltip" data-placement="left" title="{{ $article->created_at->format('l, F jS, Y') }}"><i class="fa fa-clock-o"></i> {{ $article->created_at->format('d.m.Y') }}</time></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if (!count($articles))
        <div class="alert alert-danger" style="border-radius:0 0 4px 4px;margin:-22px 0 0 0">
            <strong>Error!</strong> There are no articles to show, please check back later.
        </div>
    @endif

    <div class="col-md-8 col-md-offset-2 text-center">
        @if (is_object($articles))
            {{ $articles->fragment('news')->links('partials.pagination-sm') }}
        @endif
    </div>
@endsection