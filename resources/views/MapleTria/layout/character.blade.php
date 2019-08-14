<td class="col-6 align-center">
    <div class="user-character">
        <img src="{{ Auth::user()->mainchar ? asset('static/img/rankings/create.php?name='.$mainchar->retrieveMainCharacter()->name) : asset('static/img/rankings/blank.png') }}" alt="{{ Auth::user()->mainchar ? $mainchar->retrieveMainCharacter()->name : 'No Default Character' }}" class="avatar img-responsive" />
        @if (Auth::user()->mainchar)
            <span class="label label-critical">{{ $mainchar->retrieveMainCharacter()->name }}</span>
        @else
            <p>Set Your <a href="{{ route('user.dashboard') }}#character-selection">Character</a></p>
        @endif
    </div>
</td>