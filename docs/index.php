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