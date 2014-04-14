<div class="header">
	<ul class="nav nav-pills pull-right">
  		<li class="active"><a href="{{ route('homepage') }}">Home</a></li>
  		<li><a href="#">About</a></li>
  		<li><a href="#">Contact</a></li>
  		@if (Auth::check())
		<li><a href="{{ 	URL::action('AdminController@getNewInfographic')	}}">Post</a></li>
  		@endif
	</ul>
	<h1 class="text-primary">Infographic</h1>
</div>