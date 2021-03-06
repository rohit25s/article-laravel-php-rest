@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Article') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('article.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title">

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="author_id" class="col-md-4 col-form-label text-md-right">{{ __('Author_id') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="author_id" type="number" class="form-control @error('author_id') is-invalid @enderror" name="author_id" value="{{ old('author_id') }}" required autocomplete="author_id">

                                    @error('author_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><br>
                                <a href="{{ url('/create_author') }}" class="ml-2 text-lg-right dark:text-gray-400 underline">Create a new author</a>
                            </div>

                            <div class="form-group row">
                                <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                                <div class="col-md-6">
                                    <input id="text" type="text" class="form-control @error('category') is-invalid @enderror" name="category" required autocomplete="category">

                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <textarea rows = "5" cols = "60" name = "description">
                                        </textarea>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="views" class="col-md-4 col-form-label text-md-right">{{ __('Views') }}</label>

                                <div class="col-md-6">
                                    <input id="views" type="number" class="form-control" name="views" required autocomplete="views">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
