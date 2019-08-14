@extends('layouts.master')

@section('title', 'Download')

@section('page_title', 'Download &amp; Play '.config('server.name', 'Laravel'))

@section('content')
    <div class="panel panel-default text-center"{!! count(config('server.setup')) === 0 ? ' style="border-radius:0 0 4px 4px"' : '' !!}>
		<div class="panel-heading">MapleStory Setup v{{ config('server.version') }}</div>
        @if (config('server.setup') != NULL AND count(config('server.setup')) > 0)
    		<ul class="list-group list-unstyled">
                @foreach (config('server.setup') as $setup)
        			<a href="{{ $setup }}" class="list-group-item">{{ config('server.setuptype') === 1 ? 'Part' : 'Mirror' }} #{{ $loop->iteration }} <i class="fa fa-download"></i></a>
                @endforeach
            </ul>
        @else
            <div class="alert alert-danger" style="border-radius:0 0 4px 4px;margin:-1px">
                There are no Setup mirrors available at this time, please try again later.
            </div>
        @endif
	</div>

    @if (config('server.client') != NULL)
	   <a href="{{ config('server.client') }}" class="btn btn-block btn-lg btn-success" style="margin-bottom:20px;">{{ config('server.name', 'Laravel') }} Client <i class="fa fa-download"></i></a>
   @else
       <div class="alert alert-danger text-center">
           There is no Client available at this time, please try again later.
       </div>
   @endif

	<div class="panel panel-default text-center">
		<div class="panel-heading">System Requirements</div>
		<ul class="list-group">
			<li class="list-group-item">Windows Vista or later</li>
			<li class="list-group-item">Intel Core 2 Duo 2.4Ghz / AMD Athlon 64 X2 2.4Ghz</li>
			<li class="list-group-item">14GB of free space</li>
			<li class="list-group-item">GeForce 8600 GT / ATI Radeon HD 3450</li>
			<li class="list-group-item">DirectX 9 or higher compatible sound card</li>
		</ul>
	</div>
@endsection
