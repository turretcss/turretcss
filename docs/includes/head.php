<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Turret</title>
	<meta name="description" content="A library of Documentation, Elements, Components, Icons, and a Grid for rapid responsive website development.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<script src="../lib/modernizr-2.6.2.min.js"></script>
	<script src="../lib/less-1.5.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/document.css" />

	<!-- Syntax Higlighting -->
	<link rel="stylesheet" href="highlight/styles/github.css">
	<script src="highlight/highlight.pack.js"></script>
	<script>
		hljs.configure({tabReplace: '    '});
		hljs.initHighlightingOnLoad();
	</script>

	<!-- Maps -->
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="../lib/infobox.js"></script>

	<!-- JQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../lib/jquery-1.10.1.min.js"><\/script>')</script>
	<script src="../js/jquery.easing.js"></script>
	<script src="../js/jquery.affix.js"></script>
	<script src="../js/jquery.dismiss.js"></script>
	<script src="../js/jquery.spy.js"></script>
	<script src="../js/jquery.tabs.js"></script>
	<script src="../js/jquery.scrolltop.js"></script>
	<script src="../js/jquery.gmap.js"></script>
	<script src="../js/jquery.slides.js"></script>
	<script src="../js/jquery.scroller.js"></script>

	<script>
		$(document).ready(function() {
			
			$('[data-affix]').affix({
				offset: 60
			});

			$('.panel').each(function(i) {
				var position = $(this).position();
				$(this).spy({
					min: position.top,
					max: position.top + $(this).height(),
					onEnter: function(element, position) {
						$('.side-nav > ul > li a[href$="#' + element.id + '"]').parent('li').addClass('active');
					},
					onLeave: function(element, position) {
						$('.side-nav > ul > li a[href$="#' + element.id + '"]').parent('li').removeClass('active');
					}
				});
			});
			
			//$('[data-tabs]').tabs();
			
			$('[data-dismiss]').dismiss();
		
			$('[data-scroll-top]').scrolltop();
			
			$(window).resize(function(){
				if ($(window).width() <= 979){	
					$('.navbar').removeClass('navbar-transparent');
				}
				if ($(window).width() >= 980){	
					$('.navbar').addClass('navbar-transparent');
				}
			});
				
			$(window).scroll(function() {
			    if($(this).scrollTop() >= '100' ) {
			    	$('.navbar.fixed').removeClass('transparent');
			    } else {
			    	$('.navbar.fixed').addClass('transparent');
			    }
			});
			
		});
	</script>

</head>
<body>

<!-- Navbar -->
<div id="navbar" class="navbar transparent fixed">
	<div class="container">
		<div class="nav-header">
			<a class="logo left" href="/docs/">turret</a>
			<button type="button" class="nav-toggle" data-nav-toggle>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="nav-collapse" data-nav-collapse>
			<ul class="nav right">
				<li><a href="/docs/general.php">General</a></li>
				<li><a href="/docs/support.php">Support</a></li>
				<li><a href="/docs/icons.php">Icons</a></li>
				<li><a href="/docs/utilities.php">Utilities</a></li>
				<li><a href="/docs/layout.php">Layout</a></li>
				<li><a href="/docs/elements.php">Elements</a></li>
				<li><a href="/docs/components.php">Components</a></li>
			</ul>
		</div>
	</div>
</div>