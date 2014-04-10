@extends('main')

@section('body')
	<div class="container">
		<div class="row" style="margin-top: 30px">
			{{ Form::open(array('action' => 'PostInfographic@postForm', 'class' => 'form-horizontal', 'role' => 'form')) }}
				@include('form/input', array('name' => 'hello', 'type' => 'text', 'label' => 'hello'))
				@include('form/input', array('name' => 'hello', 'type' => 'text', 'label' => 'hello'))
				@include('form/input', array('name' => 'hello', 'type' => 'text', 'label' => 'hello'))
				@include('form/input', array('name' => 'hello', 'type' => 'text', 'label' => 'hello'))
			{{ Form::close() }}
		</div>
	</div>
@stop

