@extends(app('theme')->make('.layout.template', true))

@section('title', 'Not Found')

@section('page_title', 'Page Not Found')

@section('content')
    <div class="text-center">
        <p class="text-danger" style="font-size: 10em; line-height: 1em;">404</p>
        <h4>The page you requested, could not be found.</h4>
    </div>
@endsection
