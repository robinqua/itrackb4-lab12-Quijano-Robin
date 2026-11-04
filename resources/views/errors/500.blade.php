@extends('layouts.app')

@section('title', 'Server Error')

@section('content')
    <h1>Something went wrong</h1>
    <p>Sorry, the server could not complete your request. Please try again later.</p>
    <a href="{{ route('books.index') }}">Back to the book list</a>
@endsection