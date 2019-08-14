@extends(app('theme')->make('layout.template', true))

@section('title', 'Registration')

@section('page_title', 'Register & Play '.config('server.name', 'Enigma'))

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{!! $error !!}</div>
        @endforeach
    @endif
    <form class="form-fluid" role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('registration-username') ? ' has-error' : '' }}">
            <div class="col-12">
                <label class="strong" for="registration-username">Username</label>
            </div>
            <div class="col-12">
                <input id="registration-username" type="text" class="form-control" name="registration-username" placeholder="Username" value="{{ old('registration-username') }}" required>

                @if ($errors->has('registration-username'))
                    <div class="help-block text-danger">
                        <small>{{ $errors->first('registration-username') }}</small>
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('registration-password') ? ' has-error' : '' }}">
            <div class="col-12">
                <label class="strong" for="registration-password">Password</label>
            </div>
            <div class="col-12">
                <input id="registration-password" type="password" class="form-control" name="registration-password" placeholder="Password" required>

                @if ($errors->has('registration-password'))
                    <div class="help-block text-danger">
                        <small>{{ $errors->first('registration-password') }}</small>
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('registration-password') ? ' has-error' : '' }}">
            <div class="col-12">
                <label class="strong" for="registration-password-confirm">Confirm Password</label>
            </div>
            <div class="col-12">
                <input id="registration-password-confirm" type="password" class="form-control" name="registration-password_confirmation" placeholder="Repeat Password" required>
            </div>
        </div>

        <div class="form-group{{ $errors->has('registration-email') ? ' has-error' : '' }}">
            <div class="col-12">
                <label class="strong" for="registration-email">Email</label>
            </div>
            <div class="col-12">
                <input id="registration-email" type="email" class="form-control" name="registration-email" placeholder="Email Address" value="{{ old('registration-email') }}" required>

                @if ($errors->has('registration-email'))
                    <div class="help-block text-danger">
                        <small>{{ $errors->first('registration-email') }}</small>
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('day') || $errors->has('month') || $errors->has('year') ? ' has-error' : '' }}">
            <div class="col-12">
                <label class="strong">Birthday</label>
            </div>
            <div class="col-12">
                <div class="col-3">
                    <div class="row">
                        {!! Form::selectRange('day', 1, 31, null, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>
                <div class="col-6 align-center">
                    {!! Form::selectMonth('month', null, ['class' => 'form-control', 'required']) !!}
                </div>
                <div class="col-3">
                    <div class="row">
                        {!! Form::selectRange('year', date('Y')-10, date('Y')-100, null, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                @if ($errors->has('day'))
                    <div class="help-block text-danger">
                        <small>{{ $errors->first('day') }}</small>
                    </div>
                @endif

                @if ($errors->has('month'))
                    <div class="help-block text-danger">
                        <small>{{ $errors->first('month') }}</small>
                    </div>
                @endif

                @if ($errors->has('year'))
                    <div class="help-block text-danger">
                        <small>{{ $errors->first('year') }}</small>
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
            <div class="col-12">
                <label class="strong">Gender</label>
            </div>
            <div class="col-12">
                {{--
                    - # Temporarily Disabled #
                    
                    - Found a Bug in Bootstrap's .btn-group[data-toggle=buttons]
                    - When the form is sent without choosing any of the input[type=radio]
                    - The value is automatically set to the value of the last input[type=radio]
                --}}
                {{--<div class="btn-group btn-block" data-toggle="buttons">
                    <label class="btn btn-warning{{ old('gender') == 'male' ? ' active' : '' }}" style="width: 50%;">
                        <input type="radio" name="gender" value="male" id="gender1" autocomplete="off"{{ old('gender') == 'male' ? ' checked' : '' }}> Male
                    </label>
                    <label class="btn btn-warning{{ old('gender') == 'female' ? ' active' : '' }}" style="width: 50%;">
                        <input type="radio" name="gender" value="female" id="gender2" autocomplete="off"{{ old('gender') == 'female' ? ' checked' : '' }}> Female
                    </label>
                </div>--}}

                {{--<div class="btn-group btn-block">
                    <label class="btn btn-warning{{ old('gender') == 'male' ? ' active' : '' }}" style="width: 50%;" for="gender1">
                        <input type="radio" name="gender" value="male" id="gender1" autocomplete="off"{{ old('gender') == 'male' ? ' checked' : '' }}> Male
                    </label>
                    <label class="btn btn-warning{{ old('gender') == 'female' ? ' active' : '' }}" style="width: 50%;" for="gender2">
                        <input type="radio" name="gender" value="female" id="gender2" autocomplete="off"{{ old('gender') == 'female' ? ' checked' : '' }}> Female
                    </label>
                </div>--}}
                
                <div class="btn-group btn-block">
                    <label class="btn btn-warning" for="gender-male" style="width: 50%;">
                        <input type="radio" name="gender" value="male" id="gender-male" class="custom-component"{{ old('gender') == 'male' ? ' checked' : '' }}>
                        <span class="component-checkbox">Male</span>
                    </label>
                    <label class="btn btn-warning" for="gender-female" style="width: 50%;">
                        <input type="radio" name="gender" value="female" id="gender-female" class="custom-component"{{ old('gender') == 'female' ? ' checked' : '' }}>
                        <span class="component-checkbox">Female</span>
                    </label>
                </div>

                @if ($errors->has('gender'))
                    <div class="help-block text-danger">
                        <small>Please select your Gender.</small>
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('tos') ? ' has-error' : '' }}">
            <div class="col-12">
                <input type="checkbox" name="tos" id="tos" class="custom-component"{{ old('tos') ? ' checked' : '' }}>
                <label for="tos" class="component-checkbox">
                    I agree to the <a href="" target="_blank" class="font-proxima">Terms of Service</a> &amp; <a href="" target="_blank" class="font-proxima">Privacy Policy</a>.
                </label>

                @if ($errors->has('tos'))
                    <div class="help-block text-danger">
                        <small></small>You must accept our Terms of Service and Privacy Policy!</small>
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-12">
                <button type="submit" class="btn btn-block btn-primary">Register</button>
            </div>
        </div>
    </form>
@endsection
