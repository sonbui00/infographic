@extends('main')

@section('body')
	<a class="btn btn-primary fixed-button" type="button" href="{{URL::action('PostInfographic@getPost')}}">Post</a>
	<div class="container mythumb">
		<div class="row">
			@for ($i = 0; $i < 9; $i++)
				<div class="col-md-3 col-sm-6">
					<a href="#" class="thumbnail">
						<img data-src="holder.js/100%*180" alt="..." src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2VlZSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjE1MCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjE5cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MzAweDIwMDwvdGV4dD48L3N2Zz4=">
						<div class="caption">
							<h3>Thumbnail label</h3>
							<p>Hello world</p>
						</div>
					</a>
				</div>
			@endfor
		</div>
	</div>
@stop