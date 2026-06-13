@extends('layouts.admin')

@section('title', 'Kontentni tahrirlash')

@section('content')
    <form method="POST" action="{{ route('admin.contents.update', $content) }}" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.contents.form')
    </form>
@endsection
