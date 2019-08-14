<div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        @if ($featured->count())
            @foreach ($featured as $article)
                <div class="item {{ $loop->first ? 'active' : '' }}">
                    <a href="{{ route('article', ['slug' => $article->slug]) }}" draggable="false">
                        <img data-type="image" src="{{ asset('static/img/content/article/featured/'.$article->image) }}" alt="{{ $article->title }}" width="680" height="328" />
                    </a>
                    <div class="carousel-caption">
                            <p class="slider-title-paragraph slider-title-info">
                                <a href="{{ route('article', ['slug' => $article->slug]) }}">
                                    {{ '['.$article->vcategory.']' }} {{ $article->state === 2 ? '['.$article->vstate.']' : '' }} {{ $article->title }}
                                </a>
                            </p>
                        </div>
                </div>
            @endforeach
        @else
        <div class="item active">
                <a href="{{ route('home') }}" draggable="false">
                    <img data-type="image" src="{{ asset('static/img/content/article/featured/2.jpg') }}" alt="Welcome to EnigmaCMS!" width="680" height="328" />
                </a>
                <div class="carousel-caption">
                        <p class="slider-title-paragraph slider-title-info">
                            <a href="{{ route('home') }}">
                                [General] Welcome to EnigmaCMS!
                            </a>
                        </p>
                    </div>
            </div>
        @endif
    </div>
    <a class="left carousel-control" data-target="#carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" data-target="#carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>