<?php include('includes/head.php'); ?>

<div class="page-header" style="height:200px;">
	<div class="container">
		<div class="page-header-content column-1"><h1 class="page-title">turret</h1></div>
	</div>
</div>

<div id="general" class="content" class="row">
<div class="container">

<div class="column-1-4">
	<div class="side-nav">
		<ul>
			<li><a href="#general">General</a></li>
			<li><a href="#template">Basic Template</a></li>
			<li><a href="#support">Browser Support</a></li>
			<li><a href="#media-queries">Media Queries</a></li>
			<li><a href="#typography">Typography</a></li>
			<li><a href="#icons">Icons</a></li>
		</ul>
	</div>
</div>

<div class="column-3-4">

<h2 id="general" class="section-title">General</h2>
<!-- Structure -->

<h3 class="section-sub-title">Structure</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="[element] [behaviour] [style]">...</div>'); ?></code></pre>

<!-- Viewport -->

<h3 class="section-sub-title">Viewport</h3>
<p>To ensure proper rendering and touch zooming, add the viewport meta tag to your <code>&lt;head&gt;</code>.</p>
<pre><code class="hljs html"><?php echo htmlentities('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">'); ?></code></pre>


<!-- Responsive Images -->

<h3 class="section-sub-title">Responsive Images</h3>
<p>Images in Turret can be made responsive-friendly via the addition of the <code>.responsive</code> class. This applies <code>max-width: 100%;</code> and <code>height: auto;</code> to the image so that it scales nicely to the parent element.</p>
<pre><code class="hljs html"><?php echo htmlentities('<img src="..." class="responsive" />'); ?></code></pre>


<!-- Media Queries -->

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

<!-- Basic Template -->

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

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
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

<!-- Browser Support -->

<h2 id="support" class="section-title">Browser Support</h2>
<h3 class="section-sub-title">CSS</h2>
<p>Some CSS3 properties and HTML5 elements are not fully supported by Internet Explorer 8 and 9. In addition, Internet Explorer 8 requires the use of <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> to enable media query support.</p>
<table class="table table-bordered table-block table-responsive">
	<thead>
		<tr>
			<th>Feature</th>
			<th>IE8</th>
			<th>IE9</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><code>border-radius</code></td>
			<td class="is-unsupported">Not supported</td>
			<td class="is-supported">Supported</td>
		</tr>
		<tr>
			<td><code>box-shadow</code></td>
			<td class="is-unsupported">Not supported</td>
			<td class="is-supported">Supported</td>
		</tr>
		<tr>
			<td><code>transform</code></td>
			<td class="is-unsupported">Not supported</td>
			<td class="is-supported">Supported, with <code>-ms</code> prefix</td>
		</tr>
		<tr>
			<td><code>transition</code></td>
			<td class="is-unsupported">Not supported</td>
			<td class="is-unsupported">Not supported</td>
		</tr>
		<tr>
			<td><code>placeholder</code></td>
			<td class="is-unsupported">Not supported</td>
			<td class="is-unsupported">Not supported</td>
		</tr>
	</tbody>
</table>
<p>Visit <a href="http://caniuse.com/">Can I use...</a> for details on browser support of CSS3 and HTML5 features.</p>

<h3 class="section-sub-title">IE8 and box-sizing</h2>
<p>IE8 does not fully support <code>box-sizing: border-box;</code> when combined with <code>min-width</code>, <code>max-width</code>, <code>min-height</code>, or <code>max-height</code>. Cannot use max-width on <code>.container</code>.</p>

<h3 class="section-sub-title">Internet Explorer 8 and Respond.js</h3>
<p>Beware of the following caveats when using Respond.js in your development and production environments for Internet Explorer 8.</p>

<h4 class="section-sub-title">Respond.js and cross-domain CSS</h4>
<p>Using Respond.js with CSS hosted on a different (sub)domain (for example, on a CDN) requires some additional setup. See the <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> docs for details.</p>

<h4 class="section-sub-title">Respond.js and <code>file://</code></h4>
<p>Due to browser security rules, Respond.js doesn't work with pages viewed via the <code>file://</code> protocol (like when opening a local HTML file). To test responsive features in IE8, view your pages over HTTP(S). See the <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> docs for details.</p>

<h4 class="section-sub-title">Respond.js and <code>@import</code></h4>
<p>Respond.js doesn't work with CSS that's referenced via <code>@import</code>. In particular, some Drupal configurations are known to use <code>@import</code>. See the <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> docs for details.</p>

<h3 class="section-sub-title">IE Compatibility modes</h2>
<p>Bootstrap is not supported in the old Internet Explorer compatibility modes. To be sure you're using the latest rendering mode for IE, consider including the appropriate <code><?php echo htmlentities('<meta>'); ?></code> tag in your pages:</p>

<pre><code class="hljs html"><?php echo htmlentities('<meta http-equiv="X-UA-Compatible" content="IE=edge">'); ?></code></pre>


<!-- Typography -->

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
<p class="lead">Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
<pre><code class="hljs html"><?php echo htmlentities('<p class="lead">Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>'); ?></code></pre>
<h3 class="section-sub-title">Blockquote</h2>
<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</blockquote>
<pre><code class="hljs html"><?php echo htmlentities('<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</blockquote>'); ?></code></pre>


<!-- Colours -->
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

<!-- Icons -->

<h2 id="icons" class="section-title">Icons</h2>
<div class="row">
	<div class="icon column-1-10"><span class="icon-volume-mute"></span></div>
	<div class="icon column-1-10"><span class="icon-volume-med"></span></div>
	<div class="icon column-1-10"><span class="icon-volume-low"></span></div>
	<div class="icon column-1-10"><span class="icon-volume-high"></span></div>
	<div class="icon column-1-10"><span class="icon-twitter"></span></div>
	<div class="icon column-1-10"><span class="icon-subtitles"></span></div>
	<div class="icon column-1-10"><span class="icon-search"></span></div>
	<div class="icon column-1-10"><span class="icon-refresh"></span></div>
	<div class="icon column-1-10"><span class="icon-question"></span></div>
	<div class="icon column-1-10"><span class="icon-print"></span></div>
	<div class="icon column-1-10"><span class="icon-play"></span></div>
	<div class="icon column-1-10"><span class="icon-play-alt"></span></div>
	<div class="icon column-1-10"><span class="icon-pinterest"></span></div>
	<div class="icon column-1-10"><span class="icon-people"></span></div>
	<div class="icon column-1-10"><span class="icon-pause"></span></div>
	<div class="icon column-1-10"><span class="icon-map"></span></div>
	<div class="icon column-1-10"><span class="icon-lock"></span></div>
	<div class="icon column-1-10"><span class="icon-loading"></span></div>
	<div class="icon column-1-10"><span class="icon-innovation"></span></div>
	<div class="icon column-1-10"><span class="icon-fullscreen"></span></div>
	<div class="icon column-1-10"><span class="icon-fullscreen-close"></span></div>
	<div class="icon column-1-10"><span class="icon-environment"></span></div>
	<div class="icon column-1-10"><span class="icon-community"></span></div>
	<div class="icon column-1-10"><span class="icon-close"></span></div>
	<div class="icon column-1-10"><span class="icon-clock"></span></div>
	<div class="icon column-1-10"><span class="icon-circle"></span></div>
	<div class="icon column-1-10"><span class="icon-circle-full"></span></div>
	<div class="icon column-1-10"><span class="icon-captions"></span></div>
	<div class="icon column-1-10"><span class="icon-angle-down"></span></div>
	<div class="icon column-1-10"><span class="icon-angle-left"></span></div>
	<div class="icon column-1-10"><span class="icon-angle-right"></span></div>
	<div class="icon column-1-10"><span class="icon-angle-up"></span></div>
	<div class="icon column-1-10"><span class="icon-bookmark-alt"></span></div>
	<div class="icon column-1-10"><span class="icon-bookmark"></span></div>
	<div class="icon column-1-10"><span class="icon-calendar"></span></div>
	<div class="icon column-1-10"><span class="icon-linkedin"></span></div>
	<div class="icon column-1-10"><span class="icon-facebook"></span></div>
	<div class="icon column-1-10"><span class="icon-instagram"></span></div>
	<div class="icon column-1-10"><span class="icon-share"></span></div>
	<div class="icon column-1-10"><span class="icon-youtube-alt"></span></div>
	<div class="icon column-1-10"><span class="icon-youtube"></span></div>
	<div class="icon column-1-10"><span class="icon-tick"></span></div>
	<div class="icon column-1-10"><span class="icon-minus"></span></div>
	<div class="icon column-1-10"><span class="icon-plus"></span></div>
	<div class="icon column-1-10"><span class="icon-grid"></span></div>
	<div class="icon column-1-10"><span class="icon-list"></span></div>
	<div class="icon column-1-10"><span class="icon-google-plus"></span></div>
	<div class="icon column-1-10"><span class="icon-email"></span></div>
</div>

<pre><code class="hljs html"><?php echo htmlentities('<span class="icon-volume-mute"></span>
<span class="icon-volume-med"></span>
<span class="icon-volume-low"></span>
<span class="icon-volume-high"></span>
<span class="icon-twitter"></span>
<span class="icon-subtitles"></span>
<span class="icon-search"></span>
<span class="icon-refresh"></span>
<span class="icon-question"></span>
<span class="icon-print"></span>
<span class="icon-play"></span>
<span class="icon-play-alt"></span>
<span class="icon-pinterest"></span>
<span class="icon-people"></span>
<span class="icon-pause"></span>
<span class="icon-map"></span>
<span class="icon-lock"></span>
<span class="icon-loading"></span>
<span class="icon-innovation"></span>
<span class="icon-fullscreen"></span>
<span class="icon-fullscreen-close"></span>
<span class="icon-environment"></span>
<span class="icon-community"></span>
<span class="icon-close"></span>
<span class="icon-clock"></span>
<span class="icon-circle"></span>
<span class="icon-circle-full"></span>
<span class="icon-captions"></span>
<span class="icon-angle-down"></span>
<span class="icon-angle-left"></span>
<span class="icon-angle-right"></span>
<span class="icon-angle-up"></span>
<span class="icon-bookmark-alt"></span>
<span class="icon-bookmark"></span>
<span class="icon-calendar"></span>
<span class="icon-linkedin"></span>
<span class="icon-facebook"></span>
<span class="icon-instagram"></span>
<span class="icon-share"></span>
<span class="icon-youtube-alt"></span>
<span class="icon-youtube"></span>
<span class="icon-tick"></span>
<span class="icon-minus"></span>
<span class="icon-plus"></span>
<span class="icon-grid"></span>
<span class="icon-list"></span>
<span class="icon-google-plus"></span>
<span class="icon-email"></span>'); ?></code></pre>

</div>

<?php include('includes/footer.php'); ?>