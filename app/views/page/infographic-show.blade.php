@extends('page.main')

@section('content')
	
	<div class="col-sm-12">
		<div class="row">
			<h2>{{	$graphic->title	}}</h2>

			<p>{{	$graphic->description	}}</p>

			<a href="{{		URL::action('GraphicImageController@getFull', $graphic->id) 	}}">[Show full version]</a>
			
			<div id="example1" class="clipParent">
	     		<img id="dad1960" src="{{ 	GraphicImageController::getLinkEn($graphic)	}}" alt="Dad circa 1960" />
	     		<img id="dad2012" src="{{ 	GraphicImageController::getLinkVi($graphic)	}}" alt="Dad 2012" data-polyclip="0,0, 200,0, 200,200, 0,200" />
			</div>

		</div>
	</div>

	<div class="language-tool">
		<div class="btn-group">
		  	<button id="en-vi" type="button" class="btn btn-default active btn-danger">ENG-VI</button>
		  	<button id="vi-en" type="button" class="btn btn-default btn-danger">VI-ENG</button>
		  	<button id="en-word-vi" type="button" class="btn btn-default btn-danger">ENG-WORD-VI</button>
		</div>
	</div>

@stop

@section('foot')
	@parent
	<script src="http://hoctudau.com/infographic/demo/e2/sylvester.js"></script>
	
	<script src="http://hoctudau.com/infographic/demo/e2/polyclip.js"></script>

	{{	HTML::script('js/main.js')	}}
  	<script>
  		var link_en = "{{ 	GraphicImageController::getLinkEn($graphic)	}}"
  		var link_vi = "{{ 	GraphicImageController::getLinkVi($graphic)	}}"
  		
  		$('#vi-en').click(function(e) {
  			setActive($(this));
  			var image_vi = '<img id="dad1960" src="' +link_vi+ '" alt="Dad circa 1960" />';
  			var imge_en = '<img id="dad2012" src="'+ link_en +'" alt="Dad 2012" data-polyclip="0,0, 200,0, 200,200, 0,200" />';
  			$('#example1').html(image_vi+imge_en);
  			polyClip.addCallback(example1.init);
  		});

  		function setActive(t) {
  			$('.language-tool button').removeClass('active');
  			t.addClass('active');
  		}

		/*
		 * Use this call instead of $(document).ready to initialize
		 * to ensure that polyClip has initialized before you 
		 * start the animation routines.
		 */
		polyClip.addCallback(example1.init);
  	</script>
@stop