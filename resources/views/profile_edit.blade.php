<?php
@extends('layouts.app')

@section('content')
<h2>Edit Profile</h2>
@if(session('success'))
    <div>{{ session('success') }}</div>
@endif
<form method="POST" action="/profile/edit">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" value="{{ $user->name }}" required>
    <br>
    <label>Email:</label>
    <input type="email" name="email" value="{{ $user->email }}" required>
    <br>
    <button type="submit">Update</button>
</form>
@endsection
