@extends('layouts.admin')

@section('title', 'Kategoriyani tahrirlash')

@section('content')
    <form method="POST" action="{{ route('admin.categories.update', $category) }}" class="max-w-2xl">
        @method('PUT')
        @include('admin.categories.form')
    </form>
@endsection
