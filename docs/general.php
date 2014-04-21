<?php include('includes/head.php'); ?>

<div class="page-header">
	<div class="container">
		<div class="page-header-content column-1">
			<div class="page-header-content-inner">
				<h1 class="page-title">General</h1>
				<p class="page-description">Getting started with Turret with guides to class names, colours, typography, a basic template, and media queries.</p>
			</div>
		</div>
	</div>
</div>

<div id="general" class="content" class="row">
<div class="container">
<div class="row">

<div class="column-1-4">
	<div class="side-nav" data-affix>
		<ul>
			<li><a href="#general">General</a></li>
			<li><a href="#typography">Typography</a></li>
			<li><a href="#colours">Colours</a></li>
			<li><a href="#template">Basic Template</a></li>
			<li><a href="#media-queries">Media Queries</a></li>
			<li><a href="#apps">Web Apps</a></li>
			<li><a href="#resolutions">Screen Resolutions</a></li>
			<li><a href="#retina">Retina</a></li>
			<li><a href="#touch">Touch</a></li>
		</ul>
	</div>
</div>

<div class="column-3-4">


<!-- Structure -->
<div class="panel">
	<h2 id="general" class="section-title">General</h2>
	<h3 class="section-sub-title">Structure</h3>
	<pre><code class="hljs html"><?php echo htmlentities('<div class="[element] [behaviour] [style]">...</div>'); ?></code></pre>

	<h3 class="section-sub-title">Viewport</h3>
	<p>To ensure proper rendering and touch zooming, add the viewport meta tag to your <code>&lt;head&gt;</code>.</p>
	<pre><code class="hljs html"><?php echo htmlentities('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">'); ?></code></pre>
</div>


<!-- Typography -->
<div class="panel">
	<h2 id="typography" class="section-title">Typography</h2>
	<h3 class="section-sub-title">Headings</h2>
	<h1>Heading 1</h1>
	<h2>Heading 2</h2>
	<h3>Heading 3</h3>
	<h4>Heading 4</h4>
	<h5>Heading 5</h5>
	<h6>Heading 6</h6>
	<h3 class="section-sub-title">Paragraph Styles</h3>
	<p>Lorem ipsum dolor sit amet, consectetur <strong>strong</strong> adipisicing elit, sed do eiusmod tempor <em>italicized</em> incididunt ut labore et dolore magna aliqua.</p>
	<pre><code class="hljs html"><?php echo htmlentities('<p>Lorem ipsum dolor sit amet, consectetur <strong>strong</strong> adipisicing elit, sed do eiusmod tempor <em>italicized</em> incididunt ut labore et dolore magna aliqua.</p>'); ?></code></pre>
	<h3 class="section-sub-title">Paragraph Lead Style</h3>
	<p class="lead">Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
	<pre><code class="hljs html"><?php echo htmlentities('<p class="lead">Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>'); ?></code></pre>
	<h3 class="section-sub-title">Blockquote</h2>
	<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</blockquote>
	<pre><code class="hljs html"><?php echo htmlentities('<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</blockquote>'); ?></code></pre>
</div>

<!-- Colours -->
<div class="panel">
	<h2 id="colours" class="section-title">Colours</h2>
	<h3 class="section-sub-title">General</h3>
	<div class="row">
		<div class="color column-1-6">
			<div class="swatch white"></div>
			<small>White</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch lightgrey"></div>
			<small>Light Grey</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch midgrey"></div>
			<small>Mid Grey</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch grey"></div>
			<small>Grey</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch darkgrey"></div>
			<small>Dark Grey</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch black"></div>
			<small>Black</small>
		</div>
	</div>

	<!-- Indicators -->
	<h3 class="section-sub-title">Indicators</h3>
	<div class="row">
		<div class="color column-1-6">
			<div class="swatch error"></div>
			<small>Error</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch warning"></div>
			<small>Warning</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch success"></div>
			<small>Success</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch info"></div>
			<small>Info</small>
		</div>
	</div>

	<!-- Palette -->
	<h3 class="section-sub-title">Palette</h3>
	<div class="row">
		<div class="color column-1-6">
			<div class="swatch light"></div>
			<small>Light</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch primary"></div>
			<small>Primary</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch secondary"></div>
			<small>Secondary</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch dark"></div>
			<small>Dark</small>
		</div>
	</div>
</div>

<!-- Icons and Splash Screens -->
<div class="panel">
	<h2 id="template" class="section-title">Basic Template</h2>
	<p>Turret styles are compiled into <code>main.css</code> in the <code>/css</code> directory. Mobile first responsive styles require the viewport to be <code>width=device-width</code>, <code>initial-scale=1.0</code>, <code>maximum-scale=1.0</code>, and <code>user-scalable=no</code>. Turret components require JQuery. Optional support for IE8 requires <code>HTML5Siv.js</code> and <code>respond.js</code></p>
<pre><code class="hljs html"><?php echo htmlentities('<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Turret Template</title>

	<!-- Turret -->
	<link rel="stylesheet" type="text/css" href="css/main.css" />

	<!-- Respond.js IE8 support of media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<h1>Hello, world!</h1>

	<!-- JQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write(\'<script src="../lib/jquery-1.10.1.min.js"><\/script>\')</script>

	<!-- Components -->
	<script src="../js/jquery.easing.js"></script>
	<script src="../js/jquery.scrolltop.js"></script>
	<script src="../js/jquery.gmap.js"></script>
	<script src="../js/jquery.slides.js"></script>
</body>
</html>'); ?></code></pre>
</div>

<!-- Media Queries -->
<div class="panel">
	<h2 id="media-queries" class="section-title">Media Queries</h2>
	<p>We use the following media queries in LESS files to create the key breakpoints.</p>
	<pre><code class="hljs css">
<?php echo htmlentities('@small: ~"(max-width: 767px)";
@medium: ~"(max-width: 1024px)";
@only_medium: ~"(min-width: 768px) and (max-width: 1024px) and (orientation: portrait)";
@medium_landscape: ~"(min-width: 768px) and (max-width: 1024px) and (orientation: landscape)";
@large: ~"(min-width: 1025px)";
@only_large: ~"(min-width: 1025px) and (max-width: 1279px)";
@extra_large: ~"(min-width: 1280px)";

@retina: ~"only screen and (-webkit-min-device-pixel-ratio: 1.5)",
~"only screen and (min--moz-device-pixel-ratio: 1.5)",
~"only screen and (-o-min-device-pixel-ratio: 3/2)",
~"only screen and (min-device-pixel-ratio: 1.5)";'); ?>
</code></pre>
</div>

<!-- Media Queries -->
<div class="panel">
	<h2 id="apps" class="section-title">Web Apps</h2>
	<p>Apple Touch Icons and Launch Screen images link tags to be included in the <code><?php echo htmlentities('<head>');?></code>. For more information regarding Apple Touch Icons and Launch Images refer to the <a href="https://developer.apple.com/library/ios/documentation/userexperience/conceptual/mobilehig/IconMatrix.html">iOS Human Interface Guidelines</a>.</p>
	<h3 class="section-sub-title">Icon Sizes</h3>
	<!--
<table class="table table-block table-bordered">
		<thead>
			<tr>
				<th scope="col">Description</th>
				<th scope="col">iPhone</th>
				<th scope="col">iPhone Retina</th>
				<th scope="col">iPad Retina</th>
				<th scope="col">iPad</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td scope="row">App Icon</td>
				<td>120 x 120</td>
				<td>120 x 120</td>
				<td>152 x 152</td>
				<td>76 x 76</td>
			</tr>
			<tr>
				<td scope="row">Launch Image</td>
				<td>640 x 1136</td>
				<td>640 x 960</td>
				<td>1536 x 2048 (portrait)<br>2048 x 1536 (landscape)</td>
				<td>768 x 1024 (portrait)<br>1024 x 768 (landscape)</td>
			</tr>
			<tr>
				<td scope="row">Web Clip Icon</td>
				<td>120 x 120</td>
				<td>120 x 120</td>
				<td>152 x 152</td>
				<td>76 x 76</td>
			</tr>
		</tbody>
	</table>
-->
	<table class="table table-block table-bordered">
		<thead>
			<tr>
				<th scope="col">Device</th>
				<th scope="col">App Icon</th>
				<th scope="col">Launch Image</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td scope="row">iPhone iOS6</td>
				<td>57 x 57</td>
				<td>320 x 460</td>
			</tr>
			<tr>
				<td scope="row">iPhone iOS7</td>
				<td>60 x 60<br>
				<td>320 x 460</td>
			</tr>
			<tr>
				<td scope="row">iPhone Retina iOS6</td>
				<td>114 x 114<br>
				<td>640 x 960</td>
			</tr>
			<tr>
				<td scope="row">iPhone Retina iOS7</td>
				<td>120 x 120<br>
				<td>640 x 960</td>
			</tr>
			<tr>
				<td scope="row">iPhone Tall Retina iOS6</td>
				<td>114 x 114<br>
				<td>640 x 1096</td>
			</tr>
			<tr>
				<td scope="row">iPhone Tall Retina iOS7</td>
				<td>120 x 120<br>
				<td>640 x 1096</td>
			</tr>
			<tr>
				<td scope="row">iPad iOS6</td>
				<td>72 x 72<br>
				<td>768 x 1004 (portrait)<br>1024 x 748 (landscape)</td>
			</tr>
			<tr>
				<td scope="row">iPad iOS7</td>
				<td>76 x 76<br>
				<td>768 x 1004 (portrait)<br>1024 x 748 (landscape)</td>
			</tr>
			<tr>
				<td scope="row">iPad Retina iOS6</td>
				<td>144 x 144<br>
				<td>1496 x 2048 (portrait)<br>2008 x 1536 (landscape)</td>
			</tr>
			<tr>
				<td scope="row">iPad Retina iOS7</td>
				<td>152 x 152<br>
				<td>1496 x 2048 (portrait)<br>2008 x 1536 (landscape)</td>
			</tr>
		</tbody>
	</table>
	<h3 class="section-sub-title">Status Bar</h3>
	<p>If a web application displays in standalone mode like that of a native application, you can minimize the status bar that is displayed at the top of the screen on iOS.</p>
	<pre><code class="hljs html"><?php echo htmlentities('<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">'); ?></code></pre>

	<h3 class="section-sub-title">HTML</h3>
	<pre><code class="hljs html">
<?php echo htmlentities('<!-- Run in full-screen mode. -->
<meta name="apple-mobile-web-app-capable" content="yes">

<!-- Make the status bar black with white text. -->
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- Customize home screen title. -->
<meta name="apple-mobile-web-app-title" content="Web App">

<!-- Disable phone number detection. -->
<meta name="format-detection" content="telephone=no">

<!-- Set viewport. -->
<meta name="viewport" content="initial-scale=1">

<!-- Prevent text size adjustment on orientation change. -->
<style>html { -webkit-text-size-adjust: 100%; }</style>

<!-- Icons -->

<!-- iOS 7 iPad (retina) -->
<link href="/ico/apple-touch-icon-152x152.png" sizes="152x152" rel="apple-touch-icon">

<!-- iOS 6 iPad (retina) -->
<link href="/ico/apple-touch-icon-144x144.png"sizes="144x144"rel="apple-touch-icon">

<!-- iOS 7 iPhone (retina) -->
<link href="/ico/apple-touch-icon-120x120.png"sizes="120x120"rel="apple-touch-icon">

<!-- iOS 6 iPhone (retina) -->
<link href="/ico/apple-touch-icon-114x114.png"sizes="114x114"rel="apple-touch-icon">

<!-- iOS 7 iPad -->
<link href="/ico/apple-touch-icon-76x76.png"sizes="76x76"rel="apple-touch-icon">

<!-- iOS 6 iPad -->
<link href="/ico/apple-touch-icon-72x72.png"sizes="72x72"rel="apple-touch-icon">

<!-- iOS 6 iPhone -->
<link href="/ico/apple-touch-icon-57x57.png"sizes="57x57"rel="apple-touch-icon">

<!-- Startup images -->

<!-- iOS 6 & 7 iPad (retina, portrait) -->
<link href="/ico/apple-touch-startup-image-1536x2008.png"media="(device-width: 768px) and (device-height: 1024px)   and (orientation: portrait)   and (-webkit-device-pixel-ratio: 2)"rel="apple-touch-startup-image">

<!-- iOS 6 & 7 iPad (retina, landscape) -->
<link href="/ico/apple-touch-startup-image-1496x2048.png"media="(device-width: 768px) and (device-height: 1024px)   and (orientation: landscape)   and (-webkit-device-pixel-ratio: 2)"rel="apple-touch-startup-image">

<!-- iOS 6 iPad (portrait) -->
<link href="/ico/apple-touch-startup-image-768x1004.png"media="(device-width: 768px) and (device-height: 1024px)   and (orientation: portrait)   and (-webkit-device-pixel-ratio: 1)"rel="apple-touch-startup-image">

<!-- iOS 6 iPad (landscape) -->
<link href="/ico/apple-touch-startup-image-748x1024.png"media="(device-width: 768px) and (device-height: 1024px)   and (orientation: landscape)   and (-webkit-device-pixel-ratio: 1)"rel="apple-touch-startup-image">

<!-- iOS 6 & 7 iPhone 5 -->
<link href="/ico/apple-touch-startup-image-640x1096.png"media="(device-width: 320px) and (device-height: 568px)   and (-webkit-device-pixel-ratio: 2)"rel="apple-touch-startup-image">

<!-- iOS 6 & 7 iPhone (retina) -->
<link href="/ico/apple-touch-startup-image-640x920.png"media="(device-width: 320px) and (device-height: 480px)   and (-webkit-device-pixel-ratio: 2)"rel="apple-touch-startup-image">

<!-- iOS 6 iPhone -->
<link href="/ico/apple-touch-startup-image-320x460.png"media="(device-width: 320px) and (device-height: 480px)   and (-webkit-device-pixel-ratio: 1)"rel="apple-touch-startup-image">'); ?>
</code></pre>
</div>

<!-- Screen Resolutions -->
<div class="panel">
	<h2 id="resolutions" class="section-title">Screen Resolutions</h2>
	<table class="table table-bordered table-block table-responsive">
		<thead>
			<tr>
				<th>Device</th>
				<th>Width <small>(px)</small></th>
				<th>Height <small>(px)</small></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>iPhone 4/iPhone 4s</td>
				<td>640</td>
				<td>960</td>
			</tr>
			<tr>
				<td>iPhone 5/iPhone 5s</td>
				<td>640</td>
				<td>1136</td>
			</tr>
			<tr>
				<td>iPad 1/iPad 2/iPad Mini</td>
				<td>768</td>
				<td>1024</td>
			</tr>
			<tr>
				<td>iPad Retina/iPad Mini Retina</td>
				<td>1536</td>
				<td>2048</td>
			</tr>
			<tr>
				<td>MacBook Air 11"</td>
				<td>1366</td>
				<td>768</td>
			</tr>
			<tr>
				<td>MacBook Air 13"</td>
				<td>1440</td>
				<td>900</td>
			</tr>
			<tr>
				<td>MacBook Pro 13"</td>
				<td>1280</td>
				<td>800</td>
			</tr>
			<tr>
				<td>MacBook Pro 13" Retina</td>
				<td>2560</td>
				<td>1600</td>
			</tr>
			<tr>
				<td>MacBook Pro 15"</td>
				<td>1440</td>
				<td>900</td>
			</tr>
			<tr>
				<td>MacBook Pro 15" High Resolution</td>
				<td>1680</td>
				<td>1050</td>
			</tr>
			<tr>
				<td>MacBook Pro 15" Retina</td>
				<td>2880</td>
				<td>1800</td>
			</tr>
		</tbody>
	</table>
</div>

<!-- Retina -->
<div class="panel">
	<h2 id="retina" class="section-title">Retina</h2>
	<div class="row">
		<div class="column-1-4 column-offset-1-4">
			<figure>
				<img class="responsive" src="img/standard.png">
				<figcaption>Standard Display</figcaption>
			</figure>
		</div>
		<div class="column-1-4">
			<figure>
				<img class="responsive" src="img/retina.png">
				<figcaption>Retina Display<br/><small>4x Device Pixels</small></figcaption>
			</figure>
		</div>
	</div>
	<h3 class="section-sub-title">Definitions</h2>
	<ul>
		<li><strong>Device pixel</strong> is the smallest physical unit displayed.</li>
		<li><strong>Pixel density</strong> is the number of pixels displayed in a given space.</li>
		<li><strong>Resolution</strong> is the number of pixels across the entire width or height of a device.</li>
		<li><strong>Pixels per inch</strong>, <em>ppi</em> or <em>dpi</em>, is the amount of pixels you get when you divide the physical width of the display by the number of horizontal pixels displayed.</li>
		<li><strong>High DPI</strong> is a display density of 200 pixels per inch or greater.</li>
	</ul>
	<h3 class="section-sub-title">Asset Management</h2>
	<p>Designs for Retina displays are best designed at the full resolution of the device. Image assets should be exported at retina resolution appended with <code>@2x</code>, for example <code>image@2x.png</code>.</p>
	<p>Icons/Vector Objects are best managed as <code>SVG</code> using Smart Objects. For best display results the <code>SVG</code> assets anchors and paths should be aligned to the <strong>pixel grid</strong>.
	<p>Icons -where possible- will be combined into an <strong>icon font</strong> with classes for use throughout a website. These can be supplied a individual SVG files with an artboard the size o the icon itself, usually a square artboard reflective of icon sizes e.g. 16x16, 24x24, 32x32, 48x48</p>
	<p>Example of an icon font in use can be seen in the default Turret <a href="/icons.php">icons</a>.</p>
</div>

<!-- Touch -->
<div class="panel">
	<h2 id="touch" class="section-title">Touch</h2>
	<h3 class="section-sub-title">Resources</h2>
	<table class="table table-block table-responsive">
		<tbody>
			<tr>
				<td>Designing for Touch</td>
				<td align="center"><a class="button button-text" href="http://brianthurston.com/2014/04/designing-for-touch-part-1-josh-clarks-workshop-at-an-event-apart/">Link</a></td>
			</tr>
			<tr>
				<td>iOS Human Interface Guidelines</td>
				<td align="center"><a class="button button-text" href="https://developer.apple.com/library/ios/documentation/userexperience/conceptual/mobilehig/IconMatrix.html#//apple_ref/doc/uid/TP40006556-CH27-SW1">Link</a></td>
			</tr>
			<tr>
				<td>Android Design Guidelines</td>
				<td align="center"><a class="button button-text" href="https://developer.android.com/design/style/metrics-grids.html">Link</a></td>
			</tr>
		</tbody>
	</table>
</div>

</div>
</div>

<?php include('includes/footer.php'); ?>