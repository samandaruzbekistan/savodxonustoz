@extends('layouts.admin')

@section('title', 'Yangi resurs')

@section('content')
    <form method="POST" action="{{ route('admin.resources.store') }}" enctype="multipart/form-data">
        @include('admin.resources.form')
    </form>
@endsection
