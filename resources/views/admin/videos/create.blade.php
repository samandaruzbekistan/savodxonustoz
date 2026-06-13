@extends('layouts.admin')

@section('title', 'Yangi video')

@section('content')
    <form method="POST" action="{{ route('admin.videos.store') }}">
        @include('admin.videos.form')
    </form>
@endsection
