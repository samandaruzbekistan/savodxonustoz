@extends('layouts.admin')

@section('title', 'Testni tahrirlash')

@section('content')
    <form method="POST" action="{{ route('admin.tests.update', $test) }}">
        @method('PUT')
        @include('admin.tests.form')
    </form>
@endsection
