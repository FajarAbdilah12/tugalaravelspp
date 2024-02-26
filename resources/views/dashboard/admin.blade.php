@extends('template.master')

@section('title', 'Welcome To Admin')

@section('content')
<h1>Welcome To Admin</h1>
<form action="{{route('auth.logout')}}" method="post">
    @csrf
<input type="submit" value="Logout">
</form>
@endsection