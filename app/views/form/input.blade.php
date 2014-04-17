<div class="form-group">
	<label for="{{$name}}" class="col-sm-3 control-label">
		{{$label}}	
	</label>
	<div class="col-sm-9">
<input type="{{$type}}" name="{{$name}}" id="{{$name}}" class="form-control" {{ $required or '' }} value="{{  $value or '' }}" data-role="{{	$data_role or ''	}}">
	</div>
</div>