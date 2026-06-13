@extends('layouts.admin')

@section('title', 'Yangi savol')

@section('content')
    <form method="POST" action="{{ route('admin.tests.questions.store', $test) }}">
        @include('admin.tests.questions.form')
    </form>
@endsection
