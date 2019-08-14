{{--<div id="slider1_container">
    <div class="slideshow-container" data-type="slides">
    @if ($featured->count())
        @foreach ($featured as $article)
            <div>
                <a href="{{ route('article', ['slug' => $article->slug]) }}">
                    <img data-type="image" src="{{ asset('static/img/content/article/slide'.$article->image) }}" alt="{{ $article->title }}" width="680" height="328" />
                </a>
                <div class="slider-title">
                    <p class="slider-title-paragraph slider-title-info">
                        <a href="{{ route('article', ['slug' => $article->slug]) }}">
                            {{ '['.$article->vcategory.']' }} {{ $article->title }}
                        </a>
                    </p>
                </div>
            </div>
        @endforeach
    @else
        <div>
            <a href="{{ route('home') }}">
                <img data-type="image" src="{{ asset('static/img/content/article/slide2.jpg') }}" alt="Welcome to EnigmaCMS!" width="680" height="328" />
            </a>
            <div class="slider-title">
                <p class="slider-title-paragraph slider-title-info">
                    <a href="{{ route('home') }}">
                        [General] Welcome to EnigmaCMS!
                    </a>
                </p>
            </div>
        </div>
    @endif
    </div>
</div>--}}