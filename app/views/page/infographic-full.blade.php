
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- This is an example of polyClip.js in action -->
  <title>Demo Word by Word</title>
  <meta charset="utf-8" />

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
         Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta http-equiv="imagetoolbar" content="no" />
  
  
  <meta name="description" content="polyClip.js animation example 1 by Zoltan Hawryluk" />
  <meta name="author" content="Zoltan Hawryluk" />
    	

  <meta property="og:title" content="polyClip.js animation example 1 by Zoltan Hawryluk" />
  <meta property="og:description" content="polyClip.js animation example 1 by Zoltan Hawryluk" />
  <meta property="og:image" content="" />


  
  <!-- <link rel="stylesheet" href="http://hoctudau.com/infographic/demo/e2/useragentmanExample.css" /> -->
  {{ HTML::style('polyclip/polyclip-animation-example1.css') }}
  
 
  
  
  
</head>

<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
<!--[if IE 7 ]>     <body class="ie7"> <![endif]-->
<!--[if IE 8 ]>     <body class="ie8"> <![endif]-->
<!--[if IE 9 ]>     <body class="ie9 modern"> <![endif]-->
<!--[if (gt IE 9)]><body class="modern"> <![endif]-->
<!--[if !IE]><!--> <body class="notIE modern"><!--<![endif]-->
  


     <div id="mainContent">
     	
     	<div id="example1" class="clipParent">
     		<img id="dad1960" src="{{$image->link_en}}" alt="Dad circa 1960" />
     		<img id="dad2012" src="{{$image->link_vi}}" alt="Dad 2012" data-polyclip="0,0, 200,0, 200,200, 0,200" />
			<div id="name"></div>
	     </div>
	     
     </div>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	
	<!-- Canvas and HTML5 polyfills Needed for IE 8 and under -->
	<!--[if lt IE 9 ]>
		<script src="http://hoctudau.com/infographic/demo/e2/excanvas.compiled.js"></script>
		<script src="http://hoctudau.com/infographic/demo/e2/html5.js"></script>
	<![endif]-->
	
	{{ HTML::script('polyclip/sylvester.js') }}
	
	{{ HTML::script('polyclip/polyclip.js') }}
  {{ HTML::script('polyclip/polyclip-animation-example1.js') }}

  
</body>
</html>