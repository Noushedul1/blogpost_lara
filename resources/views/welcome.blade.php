@extends('master')
@section('title')
    Home page
@endsection
@section('body')
    <div class="container">
        <ul>
            <li><a href="{{ route('student') }}">Student Add</a></li>
            <li><a href="{{ route('blog') }}">Blog Add</a></li>
        </ul>
    </div>
@endsection