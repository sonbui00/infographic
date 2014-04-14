@extends('page.main')

@section('content')
	

	@foreach ($graphics as $graphic)
	<div class="row">
		<div class="col-sm-8">
			<h3>
				<a href="{{URL::action('GraphicImageController@getShow', $graphic->id)}}">
					{{	$graphic->title}} 	
				</a>
			</h3>
			<p>{{	str_limit($graphic->description, 300, '...')	}}</p>
		</div>
		<div class="col-sm-3">
			<div class="container-thumb">
				<img src="{{	GraphicImageController::getThumbnail($graphic) 	}}" alt="{{	  $graphic->title 	}}">
			</div>
		</div>
	</div>
	@endforeach
	{{	$graphics->links() 	}}

@stop