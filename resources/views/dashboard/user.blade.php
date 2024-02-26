@extends('template.master')

@section('title', 'Welcome To User')

@section('content')
<h1>Welcome To User</h1>
<form action="{{route('auth.logout')}}" method="post">
    @csrf
<input type="submit" value="Logout">
</form>
@endsection