<?php include('includes/head.php'); ?>

<div class="page-header">
	<div class="container">
		<div class="page-header-content column-1">
			<div class="page-header-content-inner">
				<h1 class="page-title">Components</h1>
				<p class="page-description">JQuery Plugins for common UI web components including slides, maps, scroller, and scroll-top.</p>
			</div>
		</div>
	</div>
</div>

<div id="components" class="content">
<div class="container">
<div class="row">

<div class="column-1-4">
	<div class="side-nav" data-affix>
		<ul>
			<li><a href="#affix">Affix</a>
				<ul class="side-sub-nav">
					<li><a href="#affix-html">HTML</a></li>
					<li><a href="#affix-jquery">JQuery</a></li>
					<li><a href="#affix-events">Events</a></li>
				</ul>
			</li>
			<li><a href="#spy">Spy</a>
				<ul class="side-sub-nav">
					<li><a href="#spy-html">HTML</a></li>
					<li><a href="#spy-jquery">JQuery</a></li>
					<li><a href="#spy-events">Events</a></li>
				</ul>
			</li>
			<li><a href="#dismiss">Dismiss</a>
				<ul class="side-sub-nav">
					<li><a href="#dismiss-example">Example</a></li>
					<li><a href="#dismiss-html">HTML</a></li>
					<li><a href="#dismiss-jquery">JQuery</a></li>
					<li><a href="#dismiss-events">Events</a></li>
				</ul>
			</li>
			<!--
<li><a href="#tabs">Tabs</a>
				<ul class="side-sub-nav">
					<li><a href="#tabs-html">HTML</a></li>
					<li><a href="#tabs-jquery">JQuery</a></li>
					<li><a href="#tabs-events">Events</a></li>
				</ul>
			</li>
-->
			<li><a href="#slides">Slides</a>
				<ul class="side-sub-nav">
					<li><a href="#slides-html">HTML</a></li>
					<li><a href="#slides-jquery">JQuery</a></li>
					<li><a href="#slides-options">Options</a></li>
					<!-- <li><a href="#slides-events">Events</a></li> -->
				</ul>
			</li>
			<li><a href="#google-map">GMap</a>
				<ul class="side-sub-nav">
					<li><a href="#google-map-html">HTML</a></li>
					<li><a href="#google-map-jquery">JQuery</a></li>
					<li><a href="#google-map-options">Options</a></li>
				</ul>
			</li>
			<li><a href="#scroller">Scroller</a>
				<ul class="side-sub-nav">
					<li><a href="#scroller-html">HTML</a></li>
					<li><a href="#scroller-jquery">JQuery</a></li>
					<li><a href="#scroller-options">Options</a></li>
					<li><a href="#scroller-events">Events</a></li>
				</ul>
			</li>
			<li><a href="#scroll-top">Scroll Top</a>
				<ul class="side-sub-nav">
					<li><a href="#scroll-top-html">HTML</a></li>
					<li><a href="#scroll-top-jquery">JQuery</a></li>
					<!-- <li><a href="#scroll-top-events">Events</a></li> -->
				</ul>
			</li>
		</ul>
	</div>
</div>

<div class="column-3-4">

<!-- Affix -->
<div id="affix" class="panel">
<h2 class="section-title">Affix <code>jquery.affix.js</code></h2>
<p>Affix allows content to be pinned to the viewport whilst scrolling.</p>
<h3 id="affix-html" class="section-sub-title">HTML</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="side-nav" data-affix>
...
</div>'); ?></code></pre>
<h3 id="affix-jquery" class="section-sub-title">JQuery</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("$('[data-affix]').affix({
	offset: 60
});"); ?></code></pre>
<h3 id="affix-events" class="section-sub-title">Events</h3>
<table class="table table-block table-bordered">
	<thead>
		<tr>
			<th scope="col">Event Type</th>
			<th scope="col">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td scope="row">affixed.affix</td>
			<td>This event fires immediately when the element is affixed.</td>
		</tr>
	</tbody>
</table>
</div>

<!-- Spy -->
<div id="spy" class="panel">
<h2 class="section-title">Spy <code>jquery.spy.js</code></h2>
<p>Spy applies an <code>.active</code> class to a target when visible in the viewport.</p>
<h3 id="spy-html" class="section-sub-title">HTML</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="alert alert-info">Alert Dismiss<button type="button" class="alert-close" data-dismiss></button></div>'); ?></code></pre>
<h3 id="spy-jquery" class="section-sub-title">JQuery</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("$('[data-dismiss]').dismiss();"); ?></code></pre>
<h3 id="spy-events" class="section-sub-title">Events</h3>
<table class="table table-block table-bordered">
	<thead>
		<tr>
			<th scope="col">Event Type</th>
			<th scope="col">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td scope="row">enter.spy</td>
			<td>This event fires every time the user enters the <code>min</code>/<code>max</code> zone.</td>
		</tr>
		<tr>
			<td scope="row">leave.spy</td>
			<td>This event fires every time the user leaves the <code>min</code>/<code>max</code> zone.</td>
		</tr>
		<tr>
			<td scope="row">tick.spy</td>
			<td>This event fires on scroll events within the <code>min</code> and <code>max</code> parameters.</td>
		</tr>
	</tbody>
</table>
</div>

<!-- Dismiss -->
<div id="dismiss" class="panel">
<h2 class="section-title">Dismiss <code>jquery.dismiss.js</code></h2>
<p>Dismiss is a JQuery Plugin to allow for alert messages to be dismissed.</p>
<h3 id="dismiss-example" class="section-sub-title">Example</h3>
<div class="alert alert-info">Alert Dismiss<button type="button" class="alert-close" data-dismiss></button></div>
<h3 id="dismiss-html" class="section-sub-title">HTML</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="alert alert-info">Alert Dismiss<button type="button" class="alert-close" data-dismiss></button></div>'); ?></code></pre>
<h3 id="dismiss-jquery" class="section-sub-title">JQuery</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("$('[data-dismiss]').dismiss();"); ?></code></pre>
<h3 id="dismiss-events" class="section-sub-title">Events</h3>
<table class="table table-block table-bordered">
	<thead>
		<tr>
			<th scope="col">Event Type</th>
			<th scope="col">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td scope="row">dismissed.dismiss</td>
			<td>This event fires immediately when the <code>close</code> instance method is called.</td>
		</tr>
	</tbody>
</table>
</div>

<!-- Tabs -->
<!--
<div id="tabs" class="panel">
<h2 class="section-title">Tabs <code>jquery.tabs.js</code></h2>
<p>Dismiss is a JQuery Plugin to allow for alert messages to be dismissed.</p>
<h3 class="section-sub-title">Example</h3>
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
  <li><a href="#profile" data-toggle="tab">Profile</a></li>
  <li><a href="#messages" data-toggle="tab">Messages</a></li>
  <li><a href="#settings" data-toggle="tab">Settings</a></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="home">...</div>
  <div class="tab-pane" id="profile">...</div>
  <div class="tab-pane" id="messages">...</div>
  <div class="tab-pane" id="settings">...</div>
</div>
<pre><code class="hljs html"><?php echo htmlentities('<div class="alert alert-info">Alert Dismiss<button type="button" class="alert-close" data-dismiss></button></div>'); ?></code></pre>
<h3 class="section-sub-title">JQuery</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("$('[data-tabs]').tabs();"); ?></code></pre>
<h3 class="section-sub-title">Events</h3>
<table class="table table-block table-bordered">
	<thead>
		<tr>
			<th scope="col">Event Type</th>
			<th scope="col">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td scope="row">dismissed.dismiss</td>
			<td>This event fires immediately when the <code>close</code> instance method is called.</td>
		</tr>
	</tbody>
</table>
</div>
-->

<!-- Slides -->
<div id="slides" class="panel">
<h2 class="section-title">Slides <code>jquery.slides.js</code></h2>
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
	<img src="http://placehold.it/1280x600/4BB3D6&text=%20">
	<img src="http://placehold.it/1280x600/3BC0C3&text=%20">
	<img src="http://placehold.it/1280x600/4BB3D6&text=%20">
	<img src="http://placehold.it/1280x600/3BC0C3&text=%20">
</div>

<h3 id="slides-html" class="section-sub-title">HTML</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="slides" data-slides>
	<img src="...">
	<img src="...">
	<img src="...">
	<img src="...">
</div>'); ?></code></pre>

<h3 id="slides-jquery" class="section-sub-title">JQuery</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("$('[data-slides]').slides({
	width: 1280,
	height: 600
});"); ?></code></pre>

<h3 id="slides-options" class="section-sub-title">Plugin Options</h3>
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
<div id="google-map" class="panel">
<h2 class="section-title">GMap <code>jquery.gmap.js</code></h2>
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
			icon: 'icon-circle-full'
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
<h3 id="google-map-html" class="section-sub-title">HTML</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="map">
	<div class="map-canvas" data-map></div>
</div>
'); ?></code></pre>

<h3 id="google-map-jquery" class="section-sub-title">JQuery</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("$('[data-map]').gmap({
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
		icon: 'icon-circle-full'
	},
	mapInfoBoxOptions: {
		width: 240,
		height: 50
	}
});"); ?></code></pre>


<h3 id="google-map-options" class="section-sub-title">Plugin Options</h3>
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
	icon: 'icon-circle-full'
},
mapInfoBoxOptions: {
	width: 300,
	height: 175
}"); ?></code></pre>
</div>

<!-- Scroller -->
<div id="scroller" class="panel">
<h2 class="section-title">Scroller <code>jquery.scroller.js</code> <a class="button button-primary right" href="scroller.php">Demo</a></h2>
<p>Scroller is a scroll gesture plugin for full-screen website scroll views.</p>
<p></p>

<h3 id="scroller-html" class="section-sub-title">HTML</h3>
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

<h3 id="scroller-jquery" class="section-sub-title">JQuery</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("$('[data-scroller]').scroller({
	fixedNavigation: true,
	speed: 600,
	quietPeriod: 600,
	breakpoint: 1025
});"); ?></code></pre>

<h3 id="scroller-options" class="section-sub-title">Plugin Options</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("body: 'html, body',
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

<h3 id="scroller-events" class="section-sub-title">Events</h3>
<table class="table table-block table-bordered">
	<thead>
		<tr>
			<th scope="col">Event Type</th>
			<th scope="col">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td scope="row">resize.scroller</td>
			<td>This event fires immediately when the <code>resize</code> instance method is called.</td>
		</tr>
		<tr>
			<td scope="row">change.scroller</td>
			<td>This event fires immediately on section change.</td>
		</tr>
	</tbody>
</table>
</div>

<!-- Scroll Top -->
<div id="scroll-top" class="panel">
<h2 class="section-title">Scroll Top <code>jquery.scrolltop.js</code></h2>
<p>Scroll Top is an anchor that animates to the top when clicked. It can be <code>absolute</code> or <code>fixed</code> and aligned to the <code>right</code> or <code>centered</code>.</p>

<h3 id="scroll-top-html" class="section-sub-title">HTML</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="scroll-top fixed right" data-scroll-top>Top</div>'); ?></code></pre>

<h3 id="scroll-top-jquery" class="section-sub-title">JQuery</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("$('[data-scroll-top]').scrolltop();"); ?></code></pre>
</div>

</div>
</div>

<?php include('includes/footer.php'); ?>