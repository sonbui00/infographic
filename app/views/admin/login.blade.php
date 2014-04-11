@extends('main')

@section('body')
<style>
	body {
		padding-top: 40px;
		padding-bottom: 40px;
		background-color: #eee;
	}
</style>
<div class="container">
	{{ Form::open(array('action' => 'AdminController@postLogin', 'role' => 'form', 'class' => 'form-signin')) }}
		<h2 class="form-signin-heading">Admin login</h2>
		{{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required', 'autofocus' => 'autofocus')) }}
		{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required')) }}
<!-- 		<label class="checkbox">
			{{ Form::checkbox('remember-me') }} Remeber me
		</label> -->
		{{ Form::submit('Sign in', array('class' => 'btn btn-primary btn-block btn-lg')) }}
	{{ Form::close() }}
</div>
@stop