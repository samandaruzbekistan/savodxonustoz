@extends('layouts.admin')

@section('title', 'Yangi kontent')

@section('content')
    <form method="POST" action="{{ route('admin.contents.store') }}" enctype="multipart/form-data">
        @include('admin.contents.form')
    </form>
@endsection
