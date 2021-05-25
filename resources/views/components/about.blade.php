@extends('components.layout.main')

@section('title', 'About')

@section("title-active-about",'active')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Hello, This is my about: {{$nama}} </h1>
        </div>
    </div>
</div>
@endsection
