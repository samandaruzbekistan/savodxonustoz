@extends('layouts.admin')

@section('title', 'Videoni tahrirlash')

@section('content')
    <form method="POST" action="{{ route('admin.videos.update', $video) }}">
        @method('PUT')
        @include('admin.videos.form')
    </form>
@endsection
