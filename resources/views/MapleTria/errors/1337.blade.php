@extends(app('theme')->make('.layout.template', true))

@section('title', 'Dev Test Page')

@section('page_title', 'Developer\'s Test Page')

@section('content')
    <div class="text-center">
        <p class="text-danger" style="font-size: 10em; line-height: 1em;">1337</p>
        <h4>This is a Test page used by our developers and QA testers.</h4>
    </div>
@endsection
