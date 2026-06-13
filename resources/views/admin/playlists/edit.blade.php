@extends('layouts.admin')

@section('title', 'Pleylistni tahrirlash')

@section('content')
    <form method="POST" action="{{ route('admin.playlists.update', $playlist) }}">
        @method('PUT')
        @include('admin.playlists.form')
    </form>
@endsection
