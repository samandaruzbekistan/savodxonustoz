@extends('layouts.admin')

@section('title', 'Savolni tahrirlash')

@section('content')
    <form method="POST" action="{{ route('admin.tests.questions.update', [$test, $question]) }}">
        @method('PUT')
        @include('admin.tests.questions.form')
    </form>
@endsection
