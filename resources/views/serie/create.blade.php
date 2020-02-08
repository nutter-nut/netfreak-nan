@extends('layouts.app')

@section('content')

@include('partials.navbar')

<div class="container mt-5">
    <form action="{{ url ('/series') }}" method="POST" class="py-4">
        @csrf
        <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3">
            
            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" class="form-control" type="text" name="title">
            </div>
            
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary">Create</button>
            </div>
            
        </div>
    </form>
</div>
@endsection
