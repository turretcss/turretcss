<?php include('includes/head.php'); ?>

<div class="page-header" style="height:200px;">
	<div class="container">
		<div class="page-header-content column-1"><h1 class="page-title">turret</h1></div>
	</div>
</div>

<div id="general" class="content" class="row">
<div class="container">
<div class="row">

<div class="column-1-4">
	<div class="side-nav">
		<ul>
			<li><a href="#fonts">Fonts</a></li>
			<li><a href="#video">Video</a></li>
			<li><a href="#resolutions">Screen Resolutions</a></li>
			<li><a href="#retina">Retina</a></li>
			<li><a href="#touch">Touch</a></li>
		</ul>
	</div>
</div>

<div class="column-3-4">

	<!-- Video -->
	<div class="panel">
		<h2 id="video" class="section-title">Video</h2>
		<h3 class="section-sub-title">Browser Support for Video</h2>
		<table class="table table-bordered table-block table-responsive">
			<tbody>
				<tr>
					<th>&nbsp;</th>
					<th>Android</th>
					<th>Chrome</th>
					<th>Firefox</th>
					<th>Internet Explorer</th>
					<th>iOS</th>
					<th>Opera</th>
					<th>Safari</th>
				</tr>
				<tr>
					<th>MP4<br><small>H.264</small></th>
					<td class="is-supported">Supported</td>
					<td class="is-supported">Supported</td>
					<td class="is-unsupported">Not supported</td>
					<td class="is-supported">Supported<br/><small>Since IE9</a></td>
					<td class="is-supported">Supported</td>
					<td class="is-unsupported">Not supported</td>
					<td class="is-supported">Supported</td>
				</tr>
				<tr>
					<th>ogg<br><small>Theora</small></th>
					<td class="is-supported">Supported</td>
					<td class="is-supported">Supported</td>
					<td class="is-supported">Supported</td>
					<td class="is-unsupported">Not supported</td>
					<td class="is-unsupported">Not supported</td>
					<td class="is-supported">Supported</td>
					<td class="is-unsupported">Not supported</td>
				</tr>
				<tr>
					<th>WebM</th>
					<td class="is-supported">Supported</td>
					<td class="is-supported">Supported</td>
					<td class="is-supported">Supported</td>
					<td class="is-supported">Supported<br/><small><a href="http://tools.google.com/dlpage/webmmf" zt="-o1/XL" target="_blank">(with components)</a></small></td>
					<td class="is-unsupported">Not supported</td>
					<td class="is-supported">Supported</td>
					<td class="is-unsupported">Not supported</td>
				</tr>
			</tbody>
		</table>
	</div>

	<!-- Fonts -->
	<div class="panel">
		<h2 id="fonts" class="section-title">Fonts</h2>
		<!--
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
-->
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
</div>

<?php include('includes/footer.php'); ?>