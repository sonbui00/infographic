<div class="form-group">
	<label for="{{$name}}" class="col-sm-3 control-label">
		{{$label}}	
	</label>
	<div class="col-sm-9">
		<textarea name="{{$name}}" id="{{$name}}" class="form-control" rows="3" {{{ $required or '' }}}></textarea>
	</div>
</div>