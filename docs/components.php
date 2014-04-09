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
			<li><a href="#google-map">Map</a></li>
			<li><a href="#scroll-top">Scroll Top</a></li>
		</ul>
	</div>
</div>

<div class="column-3-4">

<!-- Slides -->
<div class="panel">
<h2 id="slides" class="section-title">Slides</h2>
<p>Slides are a responsive carousel with touch controls. Slide navigation, pagination and controls can be toggled in the plugin options.</p>
<div class="slides" data-slides>
	<img src="http://placehold.it/1200x600&text=Slide+1">
	<img src="http://placehold.it/1200x600&text=Slide+2">
	<img src="http://placehold.it/1200x600&text=Slide+3">
	<img src="http://placehold.it/1200x600&text=Slide+4">
</div>

<script>
	$(document).ready(function() {
		$('[data-slides]').slides({
			width: 1200,
			height: 600
		});
	});
</script>

<h3 class="section-sub-title">HTML</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="slides" data-slides>
	<img src="http://placehold.it/1200x600&text=Slide+1">
	<img src="http://placehold.it/1200x600&text=Slide+2">
	<img src="http://placehold.it/1200x600&text=Slide+3">
	<img src="http://placehold.it/1200x600&text=Slide+4">
</div>'); ?></code></pre>

<h3 class="section-sub-title">Javascript</h3>
<pre><code class="hljs javascript"><?php echo htmlentities('$(\'[data-slides]\').slides({
	width: 1200,
	height: 600
});'); ?></code></pre>

<h3 class="section-sub-title">Plugin Options</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("options = {
	width: 940,
	height: 528,
	start: 1,
	//Container for Navigation
	container: false,
	//Navigation Options
	navigation: {
		active: true,
		effect: 'slide'
	},
	//Pagination Options
	pagination: {
		active: true,
		effect: 'slide'
	},
	//Play/Pause Controls and Autoplay
	play: {
		active: false,
		effect: 'slide',
		interval: 5000,
		auto: false,
		swap: true,
		pauseOnHover: false,
		restartDelay: 2500
	},
	//Slide Transition Effect
	effect: {
		slide: {
			speed: 500
		},
		fade: {
			speed: 300,
			crossfade: true
		}
	},
	//Callback Methods
	callback: {
		loaded: function() {},
		start: function() {},
		complete: function() {}
	}
};"); ?></code></pre>
</div>

<!-- Map -->
<div class="panel">
<h2 id="google-map" class="section-title">Map</h2>
<p>Slides are a responsive carousel with touch controls. Slide navigation, pagination and controls can be toggled in the plugin options.</p>

<script>
$(document).ready(function() {
	$('[data-map]').gmap({
		labelClass: 'bigfish-office',
		pagination: false,
		path: 'M 25 -60 -25 -60 -25 -11.181 -10.314 -11.181 0.141 0 10.598 -11.181 25 -11.181 Z',
		color: '#E3EE21',
		icon: 'icon-circle-full',
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
			zoom: 15,
			minZoom: 2,
			maxZoom: 18,
			center: [{lat: '-27.440850', lng: '153.041337'}],
			styles: [
				{"featureType":"water","stylers":[{"visibility":"simplified"},{"color":"#1B2A3C"}]},
				{"featureType":"landscape","stylers":[{"visibility":"simplified"},{"color":"#E5E5E5"}]},
				{"featureType":"poi","stylers":[{"visibility":"off"}]},
				{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#1B2A3C"}]},
				{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},
				{"elementType":"geometry.stroke","stylers":[{"visibility":"simplified"}]},
				{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#FF444E"}]},
				{"featureType":"road.highway","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},
				{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#FFFFFF"}]},
				{"featureType":"transit","stylers":[{"visibility":"off"}]},
				{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#C1C2C3"}]},
				{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#FFFFFF"}]},
				{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"visibility":"off"}]}
			],
			scrollwheel: false,
			panControl: false,
			zoomControl: false,
			mapTypeControl: false,
			scaleControl: false,
			streetViewControl: false,
			overviewMapControl: false
		}
	});
});
</script>

<div id="map" data-map></div>
<h3 class="section-sub-title">HTML</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div id="map" data-map></div>
'); ?></code></pre>

<h3 class="section-sub-title">Javascript (Example)</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("$('[data-map]').gmap({
	labelClass: 'bigfish-office',
	pagination: true,
	path: 'M 25 -60 -25 -60 -25 -11.181 -10.314 -11.181 0.141 0 10.598 -11.181 25 -11.181 Z',
	color: '#E3EE21',
	icon: 'icon-circle-full',
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
		zoom: 15,
		minZoom: 2,
		maxZoom: 18,
		center: [{lat: '-27.440850', lng: '153.041337'}],
		styles: [
			{'featureType':'water','stylers':[{'visibility':'simplified'},{'color':'#1B2A3C'}]},
			{'featureType':'landscape','stylers':[{'visibility':'simplified'},{'color':'#E5E5E5'}]},
			{'featureType':'poi','stylers':[{'visibility':'off'}]},
			{'featureType':'administrative','elementType':'labels.text.fill','stylers':[{'visibility':'on'},{'color':'#1B2A3C'}]},
			{'featureType':'administrative','elementType':'labels.text.stroke','stylers':[{'visibility':'off'}]},
			{'elementType':'geometry.stroke','stylers':[{'visibility':'simplified'}]},
			{'featureType':'road.highway','elementType':'geometry','stylers':[{'visibility':'simplified'},{'color':'#FF444E'}]},
			{'featureType':'road.highway','elementType':'labels.text.stroke','stylers':[{'visibility':'off'}]},
			{'featureType':'road.highway','elementType':'labels.text.fill','stylers':[{'color':'#FFFFFF'}]},
			{'featureType':'transit','stylers':[{'visibility':'off'}]},
			{'featureType':'road.arterial','elementType':'geometry.stroke','stylers':[{'visibility':'on'},{'color':'#C1C2C3'}]},
			{'featureType':'road.local','elementType':'geometry.fill','stylers':[{'visibility':'on'},{'color':'#FFFFFF'}]},
			{'featureType':'road.highway','elementType':'labels.icon','stylers':[{'visibility':'off'}]}
		],
		scrollwheel: false,
		panControl: false,
		zoomControl: false,
		mapTypeControl: false,
		scaleControl: false,
		streetViewControl: false,
		overviewMapControl: false
	}
});"); ?></code></pre>


<h3 class="section-sub-title">Plugin Options</h3>
<pre><code class="hljs javascript"><?php echo htmlentities("options = {
	//Marker Label Class for Custom Style
	labelClass: '',
	//Location Pagination
	pagination: false,
	//Marker Scale
	scale: 1,
	//Marker SVG Path (SVG Notation)
	path: 'M 25 -60 -25 -60 -25 -11.181 -10.314 -11.181 0.141 0 10.598 -11.181 25 -11.181 Z',
	//Marker Colour
	color: '#000000',
	//Marker Icon
	icon: null,
	//Map Locations (JSON Array)
	locations: null,
	//Google Map Options
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
		mapTypeControl: false,
		scaleControl: false,
		streetViewControl: false,
		overviewMapControl: false
	},
	//Custom Zoom Controls
	zoomInControl: true,
	zoomOutControl: true,
};"); ?></code></pre>
</div>

<!-- Scroll Top -->
<div class="panel">
<h2 id="scroll-top" class="section-title">Scroll Top</h2>
<p>Scroll Top is an anchor that animates to the top when clicked. It can be <code>absolute</code> or <code>fixed</code> and aligned to the <code>right</code> or <code>centered</code>.</p>

<pre><code class="hljs html"><?php echo htmlentities('<div class="scroll-top fixed right" data-scroll-top>Top</div>'); ?></code></pre>

<pre><code class="hljs javascript"><?php echo htmlentities("$('[data-scroll-top]').scrolltop();"); ?></code></pre>
</div>

</div>
</div>

<?php include('includes/footer.php'); ?>