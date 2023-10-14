@extends('master')

@section('content')
    <h2>Create</h2>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="your name">
        <input type="text" name="email" placeholder="your email">
        <input type="text" name="password" placeholder="your password">
        <button type="submit">Create</button>
    </form>
@endsection
