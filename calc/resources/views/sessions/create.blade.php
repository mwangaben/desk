@extends('layouts.master')

@section('content')
	<div class="col-sm-8">
	<h1>Login</h1>
	<form action="/login" method="POST">
		{{ csrf_field() }}

		{{-- Email Address --}}
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" name="email"  id="email">
		</div>

		{{-- Password Field --}}
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" class="form-control" name="password"  id="password">
		</div>

		{{-- Submit Button --}}
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Login</button>
		</div>

		{{-- Display errors if any --}}
		@include('layouts.errors')
	</form>
	</div>
@stop