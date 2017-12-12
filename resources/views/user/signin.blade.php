@extends('layouts.master')
@section('title')
	Shopping cart
@endsection
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-8">
			<h1>Sign in</h1>
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<p>{{$error}}</p>
					@endforeach
				</div>
			@endif
			<form method="POST" action="{{route('user.signin')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group row">
				    <label for="name" class="col-sm-2 col-form-label">Name</label>
				    <div class="col-sm-10">
				      <input type="text"  name="name" class="form-control " placeholder="Name">
				    </div>
			  	</div>
			  	<div class="form-group row">
				    <label for="email" class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-10">
				      <input type="email"  name="email" id="email" class="form-control " placeholder="Email">
				    </div>
			  	</div>
			  	<div class="form-group row">
				    <label for="password" class="col-sm-2 col-form-label">Password</label>
				    <div class="col-sm-10">
				      <input type="password" name="password" id="password" class="form-control" placeholder="Password">
				    </div>
			  	</div>
			  <div class="form-group row">
			  	<label  class="col-sm-2 col-form-label"></label>
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-primary">Sign in</button>

			    </div>
			  </div>
			</form>
		</div>
	</div>
@endsection