@extends('layouts.admin')

@section('title', 'Resursni tahrirlash')

@section('content')
    <form method="POST" action="{{ route('admin.resources.update', $resource) }}" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.resources.form')
    </form>
@endsection
