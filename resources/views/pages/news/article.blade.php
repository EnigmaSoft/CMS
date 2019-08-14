@extends(config('enigma.theme.name').'.layout.template')

@section('title', $articles[0]->title)

@section('page_title', $articles[0]->title)

@section('content')
    @foreach ($articles as $article)
        <div class="featured-article">
            <div class="heading">
                <h3><a href="{{ route('article', ['slug' => $article->slug]) }}">{{ '['.$article->vcategory.']' }} {{ $article->state > 0 ? '['.$article->vstate.']' : '' }} {{ $article->title }}</a></h3>
                <div class="meta">
                    {{ $article->created_at->format('F jS, Y') }}
                    <span class="label label-{{ $article->theme }}">{{ $article->vcategory }}</span>
                </div>
            </div>
            @if ($article->image)
                <div class="featured">
                    <a href="{{ route('article', ['slug' => $article->slug]) }}"><img src="{{ asset('static/img/content/article/'.$article->image) }}" alt="{{ $article->title }}" /></a>
                </div>
            @endif
            <div class="body">
                <article class="description">{!! $article->content !!}</article>
            </div>
        </div>
    @endforeach
@endsection
