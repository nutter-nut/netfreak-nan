@extends('layouts.app')

@include('partials.navbar')

@section('content')
<div class="container mt-5">

        <form action="{{ url('/series/' . $serieId . '/episodes') }}" method="POST" class="py-4">
            @csrf
            <div class="form-group">
                <label for="title">ชื่อตอน</label>
                <input
                    id="title"
                    class="form-control"
                    type="text"
                    name="title"
                    required />
            </div>

            <div class="form-group">
                <label for="hosting">โฮสไฟล์</label>
                <select class="form-control" name="hosting" id="hosting" required>
                    <option hidden selected value=""></option>
                    <option value="url">url</option>
                    <option value="youtube">youtube</option>
                    <option value="vimeo">vimeo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="file_name">ลิ้งค์</label>
                <input
                    id="file_name"
                    class="form-control"
                    type="text"
                    name="file_name"
                    required />
                <small class="form-text text-info">
                    ถ้าใช้ youtube/vimeo ให้ใส่รหัสวีดีโอ ถ้าฝากไฟล์ให้ใส่ url ของไฟล์
                </small>
            </div>

            <div class="d-flex justify-content-end">
                <button class="btn btn-primary">Create</button>
            </div>
        </form>

</div>
@endsection
