<h3 class="text-center"><strong>Character Listing</strong></h3><hr />
<div class="col-xs-12">
    <form role="form" method="POST" action="{{ route('user.main') }}">
        {{ csrf_field() }}
        <div class="row">
            @if (session('character-danger'))
                <div class="alert alert-danger">
                    <strong>Error!</strong> {{ session('character-danger') }}
                </div>
            @endif

            @if (session('character-info'))
                <div class="alert alert-info">
                    <strong>Lolwut!</strong> {{ session('character-info') }}
                </div>
            @endif

            @if (session('character-success'))
                <div class="alert alert-success">
                    <strong>Success!</strong> {{ session('character-success') }}
                </div>
            @endif

            @if ($errors->has('character'))
                <div class="alert alert-danger">
                    <strong>Error!</strong> {{ $errors->first('character') }}
                </div>
            @endif
        </div>

        @if ($characters->count())
            <div class="col-xs-12">
                <div class="row">
                    <div id="character-selection" class="row text-center main-character-selection">
                        @foreach ($characters as $character)
                            <input id="character-{{ $character->name }}" class="hidden" type="radio" name="character" value="{{ $character->name }}" {{ Auth::user()->mainchar == $character->id ? 'checked' : '' }} />
                            <label class="col-sm-4" style="font-weight:normal;" for="character-{{ $character->name }}">
                                <button type="button" class="close" aria-label="delete" data-toggle="modal" data-target="#characterRemovalModal-{{ $character->name }}" style="position: absolute;right: 15px;top: 8px;"><span aria-hidden="true">&times;</span></button>
                                <div class="user-character" data-toggle="tooltip" data-html="true" data-title="{{ $character->level < 8 ? '<strong>MapleTip:</strong> Character images are only for Level 8+' : '' }}">
                                    <img src="{{ $character->level >= 8 ? asset('static/img/rankings/create.php?name='.$character->name) : asset('static/img/rankings/blank.png') }}" alt="{{ $character->name }}" class="avatar img-responsive">
                                    <span class="label label-critical">{{ $character->name }}</span><br />
                                    {{ $character->vjob }}<br />
                                    Level {{ $character->level }} <small class="color-{{ $character->vexp > 0 ? 'green' : 'red' }}">({{ $character->exp }})</small>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <button type="submit" class="btn btn-block btn-lg btn-warning">Update Main Character</button>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="row">
                <div class="row text-right">You can reset your <strong>Default Character</strong> by clicking <a href="{{ route('user.main.reset') }}" class="font-proxima text-danger">here</a>.</div>
            </div>
        </div>
    </form>
</div>

@push('before_scripts')
    <!-- Modal -->
    @foreach ($characters as $character)
        <form class="form-horizontal" role="form" method="POST" action="{{ route('user.remove') }}">
            {{ csrf_field() }}
            <div class="modal fade" id="characterRemovalModal-{{ $character->name }}" tabindex="-1" role="dialog" aria-labelledby="label-{{ $character->name }}">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="label-{{ $character->name }}">Character Removal</h4>
                        </div>
                        <div class="modal-body">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{!! $error !!}</div>
                                @endforeach
                            @endif

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="alert custom alert-danger"><strong>Warning!</strong> You are about to remove a character from your account.</div>
                                </div>
                                <div class="col-sm-6 col-md-offset-3 text-center">
                                    <img src="{{ asset('static/images/components/rankings/create.php?name='.$character->name) }}" alt="{{ $character->name }}" class="avatar img-responsive" style="margin: 0 auto -10px;">
                                    <span class="label label-critical">{{ $character->name }}</span><br />
                                    {{ $character->job }}<br />
                                    Level {{ $character->level }} <small class="color-{{ $character->exp > 0 ? 'green' : 'red' }}">({{ $character->exp }})</small>
                                </div>

                                <div class="col-md-8 col-md-offset-2">
                                    <div class="well well-flat">Before removing character <code>{{ $character->name }}</code>, please feel the form below.</div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('reason-'.$character->name) ? ' has-error' : '' }}">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="reason-{{ $character->name }}">Reason</label>
                                </div>
                                <div class="col-md-8 col-md-offset-2">
                                    <input id="reason-{{ $character->name }}" type="text" class="form-control" name="reason-{{ $character->name }}" value="{{ old('reason-'.$character->name) }}" required autofocus>
                    
                                    @if ($errors->has('reason-'.$character->name))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('reason-'.$character->name) }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                    
                            <div class="form-group{{ $errors->has('password-'.$character->name) ? ' has-error' : '' }}">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="password-{{ $character->name }}">Password</label>
                                </div>
                                <div class="col-md-8 col-md-offset-2">
                                    <input id="password-{{ $character->name }}" type="password" class="form-control" name="password-{{ $character->name }}" required>
                    
                                    @if ($errors->has('password-'.$character->name))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password-'.$character->name) }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                    
                            <div class="form-group{{ $errors->has('pin-'.$character->name) ? ' has-error' : '' }}">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="pin-{{ $character->name }}">PIN</label>
                                </div>
                                <div class="col-md-8 col-md-offset-2">
                                    <input id="pin-{{ $character->name }}" type="text" class="form-control" name="pin-{{ $character->name }}" required>
                    
                                    @if ($errors->has('pin-'.$character->name))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pin-'.$character->name) }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                    
                            <div class="form-group form-inline{{ $errors->has('day-'.$character->name) || $errors->has('month-'.$character->name) || $errors->has('year-'.$character->name) ? ' has-error' : '' }}">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="musername">Date of Birth</label>
                                </div>
                                <div class="col-md-8 col-md-offset-2 text-center">
                                        {!! Form::selectRange('day'.$character->name, 1, 31, null, ['class' => 'form-control pull-left', 'required']) !!}
                                        {!! Form::selectMonth('month'.$character->name, null, ['class' => 'form-control', 'required']) !!}
                                        {!! Form::selectRange('year'.$character->name, date('Y')-10, date('Y')-100, null, ['class' => 'form-control pull-right', 'required']) !!}
                    
                                    @if ($errors->has('day-'.$character->name))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('day-'.$character->name) }}</strong>
                                        </span>
                                    @endif
                    
                                    @if ($errors->has('month-'.$character->name))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('month-'.$character->name) }}</strong>
                                        </span>
                                    @endif
                    
                                    @if ($errors->has('year-'.$character->name))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('year-'.$character->name) }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                    
                            <div class="form-group{{ $errors->has('tos-'.$character->name) ? ' has-error' : '' }}">
                                <div class="col-md-8 col-md-offset-2">
                                    <input type="checkbox" name="tos-{{ $character->name }}" id="tos-{{ $character->name }}" class="custom-component"{{ old('tos-'.$character->name) ? ' checked' : '' }}>
                                    <label for="tos-{{ $character->name }}" class="component-checkbox">
                                        I am sure that I want to remove this character.
                                    </label>
                    
                                    @if ($errors->has('tos-'.$character->name))
                                        <span class="help-block">
                                            <strong>You must accept our Terms of Service and Privacy Policy!</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endpush