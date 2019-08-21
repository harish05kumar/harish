@extends('layouts.app')
@section('content')
<div class="login">
	<form action="{{ url('/verify') }}">
	<div class="container">
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
		
	</div>
	<div class="button">
        <input type="submit" class="btn-group" name="">
        </div>
    </form>
	
</div>

@endsection