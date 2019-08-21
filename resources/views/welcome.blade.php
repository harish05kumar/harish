@extends('layouts.app')
@section('content')
<div class="register">
    <form action="{{ url('/register') }}">
    <div class="container">
        {{ csrf_field() }}
        <div class="name">
            <input class="form-control" type="text" name="fname" placeholder="First Name" class="@error('First Name') is-invalid @enderror">
            @error('fname')
            <div class="form-control alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="name">
            <input class="form-control" type="text" name="lname" placeholder="Last name" class="@error('Last name') is-invalid @enderror">
            @error('lname')
            <div class="form-control alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="name">
            <input class="form-control" type="email" name="email" placeholder="Email Address" class="@error('Email Address') is-invalid @enderror">
            @error('email')
            <div class="form-control alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="name">
            <input class="form-control" type="password" name="password" placeholder="Password" class="@error('Password') is-invalid @enderror">
            @error('password')
            <div class="form-control alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="name">
            <input class="form-control" type="password" name="con_password" placeholder="Confirm Password" class="@error('Confirm Password') is-invalid @enderror">
            @error('con_password')
            <div class="form-control alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
    </div>
    <div class="button">
        <input type="submit" class="btn-group" name="">
        <a href="{{ url('/login') }}" class="btn-group" style="padding: 4px; border: 1px solid green; background:green; color: #ffff; border-radius: 3px; text-decoration: none;">Login</a>
        </div>
        </form>
</div>
@endsection