@extends('layouts.admin')

@section('title', 'Yangi kategoriya')

@section('content')
    <form method="POST" action="{{ route('admin.categories.store') }}" class="max-w-2xl">
        @include('admin.categories.form')
    </form>
@endsection
