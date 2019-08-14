@php
    $articles = App\Http\Controllers\News::getFeatured();
    $controller = new App\Http\Controllers\Pages\NewsController;

    $controller->articles = $articles;
    $featured = $controller->convertAttributes()->articles;
@endphp
@if ($featured->count())
    <div id="slider1_container">
        <!-- Slides Container -->
        <div class="slideshow-container" data-type="slides">
            @foreach ($featured as $article)
                <div>
                    <a href="{{ route('article', ['slug' => $article->slug]) }}">
                        <img data-type="image" src="{{ asset('static/img/content/article/slide'.$article->image) }}" alt="{{ $article->title }}" width="680" height="328" />
                    </a>
                    <div class="slider-title">
                        <p class="slider-title-paragraph slider-title-info">
                            <a href="{{ route('article', ['slug' => $article->slug]) }}">
                                {{ $article->title }}
                            </a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif