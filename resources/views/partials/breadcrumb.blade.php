@if (config('server.breadcrumb.display'))
<div class="col-md-12">
    <div class="row">
        <div class="panel panel-default breadcrumb-widget">
            <div class="panel-heading">
                <ul class="breadcrumb breadcrumb-custom">
                    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                    @for ($i = 0; $i <= count(Request::segments()); $i++)
                        @if (Request::segment($i) != '')
                            @if (Route::currentRouteName() == 'notfound')
                                <li>Not Found</li>
                                @break
                            @elseif (Request::segment(1) == 'article')
                                <li>Article</li>
                                @break
                            @else
                                <li>{{ ucfirst(str_replace('-', ' ', title_case(Request::segment($i)))) }}</li>
                            @endif
                        @endif
                    @endfor
                </ul>
            </div>
        </div>
    </div>
</div>
@endif
