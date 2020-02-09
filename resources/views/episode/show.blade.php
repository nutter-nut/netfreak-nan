@extends('layouts.app')

@section('content')

@include('partials.navbar')

<div class="container mt-5">
    <h1 class="py-5">{{ $episode->title }}</h1>

    @include($playerTemplate)<br>

    <a class ="d-block" href="{{ url('/series/' . $episode->serie_id) }}"><h1>BACK</h1></a>
</div>

@endsection