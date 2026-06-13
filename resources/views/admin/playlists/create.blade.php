@extends('layouts.admin')

@section('title', 'Yangi pleylist')

@section('content')
    <form method="POST" action="{{ route('admin.playlists.store') }}">
        @include('admin.playlists.form')
    </form>
@endsection
