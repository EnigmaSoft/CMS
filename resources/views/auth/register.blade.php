@extends('layouts.tria')

@section('title', 'Registration')

@section('page_title', 'Register &amp; Play '.config('app.name', 'Enigma'))

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{!! $error !!}</div>
        @endforeach
    @endif
    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('registration-username') ? ' has-error' : '' }}">
            <div class="col-md-8 col-md-offset-2">
                <input id="username" type="text" class="form-control" name="registration-username" placeholder="Username" value="{{ old('registration-username') }}" required autofocus>

                @if ($errors->has('registration-username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('registration-username') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('registration-password') ? ' has-error' : '' }}">
            <div class="col-md-8 col-md-offset-2">
                <input id="password" type="password" class="form-control" name="registration-password" placeholder="Password" required>

                @if ($errors->has('registration-password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('registration-password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('registration-password') ? ' has-error' : '' }}">
            <div class="col-md-8 col-md-offset-2">
                <input id="password-confirm" type="password" class="form-control" name="registration-password_confirmation" placeholder="Repeat Password" required>
            </div>
        </div>

        <div class="form-group{{ $errors->has('registration-email') ? ' has-error' : '' }}">
            <div class="col-md-8 col-md-offset-2">
                <input id="registration-email" type="email" class="form-control" name="registration-email" placeholder="Email Address" value="{{ old('registration-email') }}" required>

                @if ($errors->has('registration-email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('registration-email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group form-inline{{ $errors->has('day') || $errors->has('month') || $errors->has('year') ? ' has-error' : '' }}">
            <div class="col-md-8 col-md-offset-2 text-center">
                    {!! Form::selectRange('day', 1, 31, null, ['class' => 'form-control pull-left', 'required']) !!}
                    {!! Form::selectMonth('month', null, ['class' => 'form-control', 'required']) !!}
                    {!! Form::selectRange('year', date('Y')-10, date('Y')-100, null, ['class' => 'form-control pull-right', 'required']) !!}

                @if ($errors->has('day'))
                    <span class="help-block">
                        <strong>{{ $errors->first('day') }}</strong>
                    </span>
                @endif

                @if ($errors->has('month'))
                    <span class="help-block">
                        <strong>{{ $errors->first('month') }}</strong>
                    </span>
                @endif

                @if ($errors->has('year'))
                    <span class="help-block">
                        <strong>{{ $errors->first('year') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
            <div class="col-md-8 col-md-offset-2">
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
                    <span class="help-block">
                        <strong>Please select your Gender.</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('tos') ? ' has-error' : '' }}">
            <div class="col-md-8 col-md-offset-2">
                <input type="checkbox" name="tos" id="tos" class="custom-component"{{ old('tos') ? ' checked' : '' }}>
                <label for="tos" class="component-checkbox">
                    I agree to the <a href="" target="_blank" class="font-proxima">Terms of Service</a> &amp; <a href="" target="_blank" class="font-proxima">Privacy Policy</a>.
                </label>

                @if ($errors->has('tos'))
                    <span class="help-block">
                        <strong>You must accept our Terms of Service and Privacy Policy!</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-2">
                <button type="submit" class="btn btn-block btn-success">Register</button>
            </div>
        </div>
    </form>
@endsection
