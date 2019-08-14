@extends(app('theme')->make('layout.template', true))

@section('title', 'Home')

@section('page_title', 'Latest News')

@section('content')
    @if ($news->count())
        @foreach ($news as $article)
            <div class="featured-article">
                <div class="heading">
                    <h3><a href="{{ route('article', ['slug' => $article->slug]) }}">{{ $article->vstate ? '['.$article->vstate.'] ' : '' }}{{ $article->title }}</a></h3>
                    <div class="meta">
                        {{ $article->created_at->format('F jS, Y') }} <span class="label label-{{ $article->theme }}">{{ $article->vcategory }}</span>
                    </div>
                </div>
                @if ($article->image)
                    <div class="featured">
                        <a href="{{ route('article', ['slug' => $article->slug]) }}"><img src="{{ asset('static/img/content/article/'.$article->image) }}" alt="{{ $article->title }}" /></a>
                    </div>
                @endif
                <div class="body">
                    <div class="description">{{ $article->description }} <a href="{{ route('article', ['slug' => $article->slug]) }}" >Read More...</a></div>
                </div>
            </div>
        @endforeach
    @else
        <div class="alert alert-info text-center" style="margin-bottom: 5px;">There are no articles at the moment, please try again later.</div>
    @endif
@endsection
