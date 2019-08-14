@if ($paginator->hasPages())
    <nav aria-label="Page navigation">
        <ul class="pagination pagination-sm">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled">
                    <a href="#" aria-label="Previous" rel="prev">
                        <span><i class="fa fa-arrow-left"></i></span>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous" rel="prev">
                        <span><i class="fa fa-arrow-left"></i></span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($loop->iteration >= ($paginator->currentPage() - 2) AND $loop->iteration <= ($paginator->currentPage() + 2))
                            @if ($page == $paginator->currentPage())
                                <li class="active">
                                    <a href="#">{{ $page }}</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" aria-label="Next" rel="next">
                        <span><i class="fa fa-arrow-right"></i></span>
                    </a>
                </li>
            @else
                <li class="disabled">
                    <a href="#" aria-label="Next" rel="next">
                        <span><i class="fa fa-arrow-right"></i></span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif
