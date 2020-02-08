@extends('layouts.app')

@section('content')

@include('partials.navbar')

<div class="container mt-5">
    <h1 class="py-5">รายการซีรีย์</h1>

    <ul class="">
        
        <!-- <a href="#">serie->name โดย username update  เมื่อ yyyy-mm-dd</a -->
        @foreach($series as $serie)
        <li>
            <a href="{{ url('/series/'. $serie->id) }}">
                {{ $serie->title }}
                {{ $serie->episodes->count() }} ตอน
            </a>
        </li>
        @endforeach
        
    </ul>
</div>

@endsection
