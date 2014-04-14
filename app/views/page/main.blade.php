@extends('main')

@section('body')
	<div class="container mypage">
		
		@include('page.component.header')


		<div class="row">
			<div class="col-md-8">
				@yield('content')
			</div>
			<div class="col-md-4">
				@include('page.component.sidebar')
			</div>
		</div>

		@include('page.component.footer')

@stop
