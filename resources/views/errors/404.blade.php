@extends('layouts.app')

@section('title', 'Page Not Found')

@section('content')
    <h1>Page not found</h1>
    <p>The book page you are looking for does not exist.</p>
    <a href="{{ route('books.index') }}">Back to the book list</a>
@endsection
