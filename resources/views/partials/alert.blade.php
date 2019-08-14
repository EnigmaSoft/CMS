@inject('informantservice', 'App\Services\InformantService')

@foreach ($informantservice->getActive(true) as $informant)
    <div class="square alert {{ !blank($informant->class) ? $informant->class : 'alert-'.$informantservice->type[$informant->type] }} text-center {{ $informant->dismissible ? ' alert-dismissible' : '' }}" role="alert">
        @if ($informant->dismissible)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        @endif
        {!! $informant->message !!}
    </div>
@endforeach

@foreach (['danger', 'warning', 'success', 'info'] as $alert)
    @if(Session::has('alert-' . $alert))
        <div class="alert alert-{{ $alert }} text-center square" role="alert">
            {!! Session::get('alert-' . $alert) !!}
            {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> --}}
        </div>
    @endif
@endforeach