@extends('admin.main')

@section('head')
	@parent
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.1/css/jasny-bootstrap.min.css">
	{{	HTML::style('libs/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')  }}
@stop

@section('content')
<div>
	{{ Form::open(array('action' => 'AdminController@postNewInfographic', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true)) }}
		<fieldset>
			<legend>Infographic infomation</legend>
			@include('form/input', array('name' => 'title', 'type' => 'text', 'label' => 'Title', 'required' => 'required'))
			@include('form/textarea', array('name' => 'description', 'type' => 'text', 'label' => 'Description'))
			@include('form/input', array('name' => 'tags', 'type' => 'text', 'label' => 'Tags', 'data_role' => 'tagsinput'))

			<fieldset>
				<legend>Image upload</legend>
				<div class="row">
					<div class="col-md-4">
						@include('form/imagefile', array('name' => 'link_en', 'label' => 'Image English', 'required' => 'required'))
					</div>
					<div class="col-md-4">
						@include('form/imagefile', array('name' => 'link_vi', 'label' => 'Image Vietnamese', 'required' => 'required'))
					</div>
					<div class="col-md-4">
						@include('form/imagefile', array('name' => 'link_word_vi', 'label' => 'Image word Vietnamese'))
					</div>
				</div>
			</fieldset>
			<hr />
			<input type="submit" class="btn btn-primary btn-lg" value="Submit" />
			<a href="#" class="btn btn-default btn-lg">Cancel</a>
		</fieldset>
	{{ Form::close() }}
</div>
@stop



@section('foot')
	@parent
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.1/js/jasny-bootstrap.min.js"></script>
	{{HTML::script('libs/bootstrap-tagsinput/lib/angular.min.js')}}
	{{HTML::script('libs/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}
	{{HTML::script('libs/bootstrap-tagsinput/dist/bootstrap-tagsinput-angular.js')}}
	{{HTML::script('libs/bootstrap-tagsinput/lib/typeahead.min.js')}}
	<script>
		$('input#tags').tagsinput();
		$('input#tags').tagsinput('input').typeahead({
		  prefetch: '{{ URL::to('tags') }}'
		}).bind('typeahead:selected', $.proxy(function (obj, datum) {  
		  this.tagsinput('add', datum.value);
		  this.tagsinput('input').typeahead('setQuery', '');
		}, $('input#tags')));
	</script>
@stop



