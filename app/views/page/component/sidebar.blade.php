<div class="row">
	<form action="{{	URL::action('GraphicImageController@getSearch')	}}" class="form">
		<div class="input-group">
			{{	Form::text('search', null, array('class' => 'form-control', 'placeholder' => 'Search'))	}}
			<span class="input-group-addon glyphicon glyphicon-search" style="top: 0"></span>
		</div>
	</form>
</div>
<div class="row">
	<h3>Tags</h3>
	<?php
		$selected = isset($tagselect) ? $tagselect : null;
		$tags = Tag::all()
	?>
	@foreach ($tags as $tag)
		@if($selected !== null && $selected == $tag->name)
			<a href="{{ URL::action('GraphicImageController@getTag', $tag->name) }}" class="btn btn-primary tag-button">{{ $tag->name }}</a>
		@else
			<a href="{{ URL::action('GraphicImageController@getTag', $tag->name) }}" class="btn btn-default tag-button">{{ $tag->name }}</a>
		@endif
	@endforeach
</div>