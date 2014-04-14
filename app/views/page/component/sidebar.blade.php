<form action="{{	URL::action('GraphicImageController@getSearch')	}}" class="form">
	<div class="input-group">
		{{	Form::text('search', null, array('class' => 'form-control', 'placeholder' => 'Search'))	}}
		<span class="input-group-addon glyphicon glyphicon-search" style="top: 0"></span>
	</div>
</form>