@extends('main')

@section('head') 
	@parent
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.1/css/jasny-bootstrap.min.css">
@stop

@section('body')
	<div class="container">
		<div class="row" style="margin-top: 30px">
			<div class="col-md-8 col-md-offset-2">
				{{ Form::open(array('action' => 'Infographic@postForm', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true)) }}
					<fieldset>
						<legend>Post Infographic</legend>
						@include('form/input', array('name' => 'title', 'type' => 'text', 'label' => 'Title', 'required' => 'required'))
						@include('form/textarea', array('name' => 'description', 'type' => 'text', 'label' => 'Description'))

						<fieldset>
							<legend>Image upload</legend>
							<div class="row">
								<div class="col-md-4">
									@include('form/imagefile', array('name' => 'image_en', 'label' => 'Image English', 'required' => 'required'))
								</div>
								<div class="col-md-4">
									@include('form/imagefile', array('name' => 'image_vi', 'label' => 'Image Vietnamese', 'required' => 'required'))
								</div>
								<div class="col-md-4">
									@include('form/imagefile', array('name' => 'image_word_vi', 'label' => 'Image word Vietnamese'))
								</div>
							</div>
						</fieldset>
						<hr />
						<input type="submit" class="btn btn-primary btn-lg" value="Submit" />
						<a href="#" class="btn btn-default btn-lg">Cancel</a>
					</fieldset>
				{{ Form::close() }}
			</div>
		</div>
	</div>
	<script>
	</script>
@stop

@section('foot')
	@parent
	<!-- Latest compiled and minified JavaScript -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.1/js/jasny-bootstrap.min.js"></script>
@stop

