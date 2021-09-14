@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 
                    <center> <h1>{{ $successMsg }} </h1>
                        <h3><b>ID:</b>{{ $id }} </h3>
                        <h3><b>Title:</b>{{ $title }} </h3><br>
                    <a href = "/"><h4>Go Back</h4></a> </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
