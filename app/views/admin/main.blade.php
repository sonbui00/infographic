@extends('main')

@section('head')
	@parent
	{{	HTML::style('css/sb-admin.css')}}
@stop

@section('body')
<div id="wrapper">
	@include('admin.component.nav')
	<div id="page-wrapper">
	    <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ $page_header or $title }}</h1>
            </div>
        </div>
		@section('content')
			{{ @content or '' }}
		@show
	</div>
</div>
@stop



@section('foot')
	@parent
	{{	HTML::script('libs/metisMenu/jquery.metisMenu.js')	}}
	{{	HTML::script('js/sb-admin.js')}}
@stop