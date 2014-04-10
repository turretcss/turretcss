<?php include('includes/head.php'); ?>

<div class="page-header" style="height:200px;">
	<div class="container">
		<div class="page-header-content column-1"><h1 class="page-title">components</h1></div>
	</div>
</div>

<div id="components" class="content">
<div class="container">
<div class="row">

<div class="column-1-4">
	<div class="side-nav">
		<ul>
			<li><a href="#slides">Slides</a></li>
			<li><a href="#google-map">GMaps</a></li>
			<li><a href="#scroller">Scroller</a></li>
			<li><a href="#scroll-top">Scroll Top</a></li>
		</ul>
	</div>
</div>

<div class="column-3-4">

<!-- Slides -->
<div class="panel">
<h2 id="slides" class="section-title">Slides</h2>
<p>Slides are a responsive carousel with touch controls. Slide navigation, pagination and controls can be toggled in the plugin options.</p>

<script>
	$(document).ready(function() {
		$('[data-slides]').slides({
			width: 1280,
			height: 600
		});
	});
</script>

<div class="slides" data-slides>
	<img src="img/slide.gif">
	<img src="img/slide.gif">
	<img src="img/slide.gif">
	<img src="img/slide.gif">
</div>

<h3 class="section-sub-title">HTML</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="slides" data-slides>
	<img src="img/slide.gif">
	<img src="img/slide.gif">
	<img src="img/slide.gif">
	<img src="img/slide.gif">
</div>'); ?></code></pre>

<h3 class="section-sub-title">JQuery Example</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("$('[data-slides]').slides({
	width: 1280,
	height: 600
});"); ?></code></pre>

<h3 class="section-sub-title">Plugin Options</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("width: 940,
height: 528,
start: 1,
container: false,
navigation: {
	active: true,
	effect: 'slide'
},
pagination: {
	active: true,
	effect: 'slide'
},
play: {
	active: false,
	effect: 'slide',
	interval: 5000,
	auto: false,
	swap: true,
	pauseOnHover: false,
	restartDelay: 2500
},
effect: {
	slide: {
		speed: 500
	},
	fade: {
		speed: 300,
		crossfade: true
	}
},
callback: {
	loaded: function() {},
	start: function() {},
	complete: function() {}
}"); ?></code></pre>

</div>

<!-- Map -->
<div class="panel">
<h2 id="google-map" class="section-title">GMaps</h2>
<p>GMaps is a Google Maps JQuery Plugin that allows for SVG markers, icon font marker labels, custom zoom controls using icon fonts, and custom InfoBox styles using CSS.</p>
<p><strong>Note: </strong>GMaps is dependant on the <code>infobox.js</code> Google Maps Class Extension.</p>

<script>
$(document).ready(function() {
	$('[data-map]').gmap({
		pagination: true,
		locations: [
			{
				title: 'Bigfish.tv',
				category: 'Bigfish',
				content: 'Bigfish.tv Office',
				position: {
					lat: -27.440850,
					lng: 153.041337
				}
			},
			{
				title: 'Brisbane',
				category: 'Brisbane',
				content: 'Brisbane',
				position: {
					lat: -27.4709331,
					lng: 153.02350239
				}
			}
		],
		mapOptions: {
			minZoom: 2,
			scrollwheel: false,
			panControl: false,
			zoomControl: false,
			zoomInControl: true,
			zoomOutControl: true,
			zoomInIcon: 'icon-plus',
			zoomOutIcon: 'icon-minus',
			mapTypeControl: false,
			scaleControl: false,
			streetViewControl: false,
			overviewMapControl: false
		},
		markerOptions: {
			labelClass: 'bigfish-office',
			height: 125,
			scale: '0.5',
			path: 'M 25 -60 -25 -60 -25 -11.181 -10.314 -11.181 0.141 0 10.598 -11.181 25 -11.181 Z',
			color: '#3BC0C3',
			icon: 'icon-thiess-logo'
		},
		mapInfoBoxOptions: {
			width: 240,
			height: 50
		}
	});
});
</script>
<div class="map">
	<div class="map-canvas" data-map></div>
</div>
<h3 class="section-sub-title">HTML</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="map">
	<div class="map-canvas" data-map></div>
</div>
'); ?></code></pre>

<h3 class="section-sub-title">JQuery Example</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("$('[data-map]').gmap({
	pagination: false,
	locations: [
		{
			title: 'Bigfish.tv',
			content: 'Bigfish.tv Office',
			position: {
				lat: -27.440850,
				lng: 153.041337
			}
		}
	],
	mapOptions: {
		minZoom: 2,
		scrollwheel: false,
		panControl: false,
		zoomControl: false,
		zoomInControl: true,
		zoomOutControl: true,
		zoomInIcon: 'icon-plus',
		zoomOutIcon: 'icon-minus',
		mapTypeControl: false,
		scaleControl: false,
		streetViewControl: false,
		overviewMapControl: false
	},
	markerOptions: {
		labelClass: 'bigfish-office',
		height: 125,
		scale: '0.5',
		path: 'M 25 -60 -25 -60 -25 -11.181 -10.314 -11.181 0.141 0 10.598 -11.181 25 -11.181 Z',
		color: '#1B2A3C',
		icon: 'icon-thiess-logo'
	},
	mapInfoBoxOptions: {
		width: 240,
		height: 50
	}
});"); ?></code></pre>


<h3 class="section-sub-title">Plugin Options</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("pagination: false,
locations: null,
mapOptions: {
	zoom: 9,
	minZoom: 0,
	maxZoom: 19,
	center: null,
	mapTypeId: google.maps.MapTypeId.ROADMAP,
	styles: null,
	scrollwheel: false,
	panControl: false,
	zoomControl: false,
	zoomInControl: true,
	zoomOutControl: true,
	zoomInIcon: 'icon-zoom-in',
	zoomOutIcon: 'icon-zoom-out',
	mapTypeControl: false,
	scaleControl: false,
	streetViewControl: false,
	overviewMapControl: false
},
markerOptions: {
	labelClass: '',
	width: 250,
	height: 100,
	scale: 1,
	path: 'M 55 -80 -55 -80 -55 -13.175 -12.015 -13.175 0.134 0 12.285 -13.175 55 -13.175 Z',
	color: '#1B2A3C',
	icon: 'icon-thiess-logo'
},
mapInfoBoxOptions: {
	width: 300,
	height: 175
}"); ?></code></pre>
</div>

<!-- Scroller -->
<div class="panel">
<h2 id="scroller" class="section-title">Scroller</h2>
<p>Scroller is a scroll gesture plugin for full-screen website scroll views.</p>
<p><a class="button button-primary" href="scroller.php">Demo</a></p>

<h3 class="section-sub-title">HTML</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="scroller" data-scroller data-scroller-fixed-navigation>
	<ul class="scroller-pagination" data-scroller-pagination>
		<li><a href="#scroller-section-1">Section 1</a></li>
		<li><a href="#scroller-section-2">Section 2</a></li>
		<li><a href="#scroller-section-3">Section 3</a></li>
	</ul>
	<section id="scroller-section-1" class="scroller-section" data-scroller-section></section>
	<section id="scroller-section-2" class="scroller-section" data-scroller-section></section>
	<section id="scroller-section-3" class="scroller-section" data-scroller-section></section>
</div>'); ?></code></pre>

<h3 class="section-sub-title">JQuery Example</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("$('[data-scroller]').scroller({
	fixedNavigation: true,
	speed: 600,
	quietPeriod: 600,
	breakpoint: 1025
});"); ?></code></pre>

<h3 class="section-sub-title">Plugin Options</h3>
<pre><code class="hljs html"><?php echo htmlentities("body: 'html, body',
container: '[data-scroller]',
section: '[data-scroller-section]',
pagination: '[data-scroller-pagination]',
paginationItem: '[data-scroller-pagination] li a',
sectionHeight: 95,
current: 1,
swipe: false,
hash: false,
loop: false,
pagination: true,
keyboard: true,
footer: false,
fixedNavigation: false,
speed: 600,
lastAnimation: null,
quietPeriod: 600,
breakpoint: 768,
easing: 'easeInOutExpo'"); ?></code></pre>
</div>

<!-- Scroll Top -->
<div class="panel">
<h2 id="scroll-top" class="section-title">Scroll Top</h2>
<p>Scroll Top is an anchor that animates to the top when clicked. It can be <code>absolute</code> or <code>fixed</code> and aligned to the <code>right</code> or <code>centered</code>.</p>

<h3 class="section-sub-title">HTML</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="scroll-top fixed right" data-scroll-top>Top</div>'); ?></code></pre>

<h3 class="section-sub-title">JQuery Example</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("$('[data-scroll-top]').scrolltop();"); ?></code></pre>
</div>

</div>
</div>

<?php include('includes/footer.php'); ?>