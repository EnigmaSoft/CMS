@extends('layouts.app')

@section('title', 'New Article')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="text-center"><strong>New Article</strong></h3><hr style="margin-top:0px;" />

            <div class="col-xs-12">
                <div class="row">
                    @if (session('success'))
                        <div class="col-md-8 col-md-offset-2 alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="col-md-8 col-md-offset-2 alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12" style="margin-bottom:20px;">
                <div class="row">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('user.settings') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <label for="author">Author</label>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <input id="author" type="text" class="form-control" name="author" placeholder="Author" value="{{ Auth::user()->name }}" disabled>

                                @if ($errors->has('author'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('author') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <label for="category">Category</label>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <select id="category" class="form-control" name="category">
                                    <option value="10" class="text-warning">General</option>
                                    <option value="20" class="text-danger">Game Update</option>
                                    <option value="30" class="text-primary">Notice</option>
                                    <option value="40" class="text-success">Event</option>
                                </select>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <label for="title">Title</label>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <input id="title" type="text" class="form-control" name="title" placeholder="Title" value="">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <label for="content">Content</label>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>

                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-2 ">
                                <a href="{{ route('gm.news.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                            <div class="col-md-4 text-right">
                                <button class="btn btn-success" type="submit">Create Article</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
