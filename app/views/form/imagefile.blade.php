<div class="fileinput fileinput-new" data-provides="fileinput">
	<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 100%; height: 150px;">
		<img data-src="holder.js/100%x100%" alt="100%x100%" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOTAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTkwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9Ijk1IiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE5MHgxNDA8L3RleHQ+PC9zdmc+" style="height: 100%; width: 100%; display: block;">
	</div>
	<div class="caption">
		<h4>{{$label}}</h4>
	</div>
	<div>
		<span class="btn btn-default btn-file">
			<span class="fileinput-new">Select image</span>
			<span class="fileinput-exists">Change</span>
			<input type="file" name="{{$name}}"  {{{ $required or '' }}}>
		</span>
		<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
	</div>
</div>