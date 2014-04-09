<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Turret Docs</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<script src="../lib/modernizr-2.6.2.min.js"></script>
	<script src="../lib/less-1.5.0.min.js"></script>
	<!-- <link rel="stylesheet" type="text/less" href="less/main.less" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6120872/680164/css/fonts.css" /> -->
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/document.css" />

	<!-- Syntax Higlighting -->
	<link rel="stylesheet" href="highlight/styles/github.css">
	<script src="highlight/highlight.pack.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>

	<!-- Maps -->
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="../lib/infobox.js"></script>

	<!-- JQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../lib/jquery-1.10.1.min.js"><\/script>')</script>
	<script src="../js/jquery.easing.js"></script>
	<script src="../js/jquery.scrolltop.js"></script>
	<script src="../js/jquery.gmap.js"></script>
	<script src="../js/jquery.slides.js"></script>

	<script>
		$(document).ready(function() {
			$('[data-scroll-top]').scrolltop();
		});
	</script>

</head>
<body>

<!-- Navbar -->
<div id="navbar" class="navbar dark fixed">
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
				<li><a href="/docs/">General</a></li>
				<li><a href="/docs/utilities.php">Utilities</a></li>
				<li><a href="/docs/layout.php">Layout</a></li>
				<li><a href="/docs/elements.php">Elements</a></li>
				<li><a href="/docs/components.php">Components</a></li>
			</ul>
		</div>
	</div>
</div>