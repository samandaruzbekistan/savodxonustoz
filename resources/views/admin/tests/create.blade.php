@extends('layouts.admin')

@section('title', 'Yangi test')

@section('content')
    <form method="POST" action="{{ route('admin.tests.store') }}">
        @include('admin.tests.form')
    </form>
@endsection
