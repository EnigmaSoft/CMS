@extends('layouts.panel')

@section('title', 'GM: News Section')
@section('page-title', 'News Index')

@push('custom-css')
    .table > tbody > tr > td {
        vertical-align: middle;
    }
@endpush

@section('content')
            <table id="news" class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" width="5%">ID</th>
                        <th class="text-center" width="10%">Removed</th>
                        <th class="text-center" width="10%">Featured</th>
                        <th class="text-center" width="12%">Category</th>
                        <th>Title</th>
                        <th class="text-center" width="10%">Author</th>
                        <th class="text-center" width="15%">Date</th>
                        <th class="text-center" width="15%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                    <tr>
                        <td class="text-center">{{ $article->id }}</td>
                        <td class="text-center"><i class="fa {{ $article->trashed() ? 'fa-check-square text-success' : 'fa-times text-danger' }}" data-toggle="tooltip" data-placement="top" title="{{ $article->trashed() ? \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $article->deleted_at)->format('l, F jS, Y') : 'No' }}"></i><span class="sr-only">{{ $article->featured ? 'Yes' : 'No' }}</span></td>
                        <td class="text-center"><i class="fa {{ $article->featured ? 'fa-check-square text-success' : 'fa-times text-danger' }}" data-toggle="tooltip" data-placement="top" title="{{ $article->featured ? 'Yes' : 'No' }}"></i><span class="sr-only">{{ $article->featured ? 'Yes' : 'No' }}</span></td>
                        <td class="text-center"><a href="{{ $article->vcategory != 'Error' ? route('news.'.str_slug($article->vcategory)) : '#' }}" class="label label-{{ $article->theme }}">{{ $article->vcategory }}</a></td>
                        <td><a href="{{ route('article', $article->slug) }}" class="font-proxima text-danger" data-toggle="tooltip" data-placement="top" title="{{ $article->title }}">{{ str_limit($article->title, 83) }}</a></td>
                        <td class="text-center"><a href="#" class="">{{ $article->vauthor }}</a></td>
                        <td class="text-center"><time datetime="{{ $article->created_at->format('d-m-Y') }}" data-toggle="tooltip" data-placement="left" title="{{ $article->created_at->format('l, F jS, Y') }}"><i class="fa fa-clock-o"></i> {{ $article->created_at->format('d.m.Y') }}</time></td>
                        <td class="text-center">
                            <a href="{{ route('gm.news.edit', $article->slug) }}" class="btn btn-primary" style="min-width: 70px;">Edit</a>
                            @if (!$article->trashed())
                                <a href="{{ route('gm.news.delete', $article->slug) }}" class="btn btn-danger" style="min-width: 70px;">Delete</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if (!count($articles))
                <div class="alert alert-danger" style="border-radius:0 0 4px 4px;margin:-22px 0 0 0">
                    <strong>Error!</strong> There are no articles to show, please check back later.
                </div>
            @endif
            
            <div class="col-xs-12 text-right">
                <div class="row">
                    <p><a href="{{ route('gm.news.create') }}" class="btn btn-success">Write an Article <i class="fa fa-arrow-right"></i></a></p>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2 text-center">
                @if (is_object($articles))
                    {{ $articles->links('partials.pagination-sm') }}
                @endif
            </div>
@endsection
