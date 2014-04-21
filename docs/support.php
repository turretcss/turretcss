<?php include('includes/head.php'); ?>

<div class="page-header">
	<div class="container">
		<div class="page-header-content column-1">
			<div class="page-header-content-inner">
				<h1 class="page-title">Support</h1>
				<p class="page-description">Outline of Browser and Device Support, video support, CSS3 supported rules, Accessibility, and support libraries including Modernizr and Respond.js</p>
			</div>
		</div>
	</div>
</div>

<div id="general" class="content">
<div class="container">

<div class="row">

	<div class="column-1-4">
		<div class="side-nav" data-affix>
			<ul>
				<li><a href="#html">HTML5</a></li>
				<li><a href="#css">CSS3</a></li>
				<li><a href="#browsers">Browser Support</a></li>
				<li><a href="#devices">Device Support</a></li>
				<li><a href="#video">Video</a></li>
				<li><a href="#accessibility">Accessibility</a></li>
			</ul>
		</div>
	</div>

	<div class="column-3-4">
	
		<!-- CCS3 Support -->
		<div class="panel">
			<h2 id="html" class="section-title">HTML5</h2>
			<h3 class="section-sub-title">HTML5 Doctype</h2>
			<p>Turret makes use of HTML5 elements and CSS properties that require the use of the HTML5 doctype.</p>
			<pre><code class="hljs html"><?php echo htmlentities('<!DOCTYPE html>
<html lang="en">
  ...
</html>'); ?></code></pre>
			<h3 class="section-sub-title">Normalize</h2>
			<p>For improved cross-browser rendering, Turret uses <a href="http://necolas.github.io/normalize.css/" target="_blank">Normalize.css</a>, a project by <a href="http://twitter.com/necolas" target="_blank">Nicolas Gallagher</a> and <a href="http://twitter.com/jon_neal" target="_blank">Jonathan Neal</a>.</p>
			<!--
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
-->
		</div>
	
		<!-- CCS3 Support -->
		<div class="panel">
			<h2 id="css" class="section-title">CSS3</h2>
			<p>Some CSS3 properties and HTML5 elements are not fully supported by Internet Explorer 8 and 9.</p>
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
		</div>

		<!-- Browser Support -->
		<div class="panel">
			<h2 id="browsers" class="section-title">Browser Support</h2>
			<table class="table table-bordered table-block table-responsive">
				<thead>
					<tr>
						<td></td>
						<th>Chrome</th>
						<th>Firefox</th>
						<th>Internet Explorer</th>
						<th>Opera</th>
						<th>Safari</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Android</th>
						<td class="is-supported">Supported</td>
						<td class="is-unsupported">Not supported</td>
						<td rowspan="3" style="vertical-align: middle;">N/A</td>
						<td class="is-unsupported">Not supported</td>
						<td>N/A</td>
					</tr>
					<tr>
						<th>iOS</th>
						<td class="is-supported">Supported</td>
						<td>N/A</td>
						<td class="is-unsupported">Not supported</td>
						<td class="is-supported">Supported</td>
					</tr>
					<tr>
						<th>Mac OS X</th>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
					</tr>
					<tr>
						<th>Windows</th>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-unsupported">Not supported</td>
					</tr>
				</tbody>
			</table>

			<h3 class="section-sub-title">Android Default Browser</h2>
			<p>The Default Android Browser is not supported. Android 4.4+ does not ship with a default Browser. (note: Chrome on Android is fully supported)</p>

			<h3 class="section-sub-title">IE Compatibility modes</h2>
			<p>Turret is not supported in the old Internet Explorer compatibility modes. To be sure you're using the latest rendering mode for IE, consider including the appropriate <code><?php echo htmlentities('<meta>'); ?></code> tag in your pages:</p>
			<pre><code class="hljs html"><?php echo htmlentities('<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">'); ?></code></pre>
			<p>The meta tag tells the IE rendering engine two things:</p>
			<ol>
				<li>It should use the latest, or edge, version of the IE rendering environment</li>
				<li>If already installed, it should use the Google Chrome Frame rendering engine.</li>
			</ol>
			<p>This line breaks validation, and the Google Chrome Frame part won't work inside a conditional comment. To avoid these edge case issues it is recommended that you remove this line and use the <code>.htaccess</code> to send these headers instead as specified in <a href="http://groups.google.com/group/html5boilerplate/browse_thread/thread/6d1b6b152aca8ed2">Validating: X-UA-Compatible</a>.</p>
			<h3 class="section-sub-title">Modernizr</h2>
			<p><a href="http://modernizr.com/">Modernizr</a> is a JavaScript library which adds classes to the <code>html</code> element based on the results of feature test and which ensures that all browsers can make use of HTML5 elements (as it includes the HTML5 Shiv). This allows you to target parts of your CSS and JavaScript based on the features supported by a browser.</p>
			<p>In general, in order to keep page load times to a minimum, it's best to call any JavaScript at the end of the page because if a script is slow to load from an external server it may cause the whole page to hang. That said, the Modernizr script needs to run before the browser begins rendering the page, so that browsers lacking support for some of the new HTML5 elements are able to handle them properly. Therefore the Modernizr script is the only JavaScript file synchronously loaded at the top of the document.</p>
			
			<h3 class="section-sub-title">Respond.js</h2>
			<p>Internet Explorer 8 requires the use of <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> to enable media query support.</p>
			<h3 class="section-sub-title">Internet Explorer 8 and Respond.js</h3>
			<p>Beware of the following caveats when using Respond.js in your development and production environments for Internet Explorer 8.</p>

			<h4 class="section-sub-title">Respond.js and cross-domain CSS</h4>
			<p>Using Respond.js with CSS hosted on a different (sub)domain (for example, on a CDN) requires some additional setup. See the <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> docs for details.</p>

			<h4 class="section-sub-title">Respond.js and <code>file://</code></h4>
			<p>Due to browser security rules, Respond.js doesn't work with pages viewed via the <code>file://</code> protocol (like when opening a local HTML file). To test responsive features in IE8, view your pages over HTTP(S). See the <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> docs for details.</p>

			<h4 class="section-sub-title">Respond.js and <code>@import</code></h4>
			<p>Respond.js doesn't work with CSS that's referenced via <code>@import</code>. In particular, some Drupal configurations are known to use <code>@import</code>. See the <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> docs for details.</p>
		</div>

		<!-- Device Support -->
		<div class="panel">
			<h2 id="devices" class="section-title">Device Support</h2>

			<!-- iPhone -->
			<h3 class="section-sub-title">iPhone</h2>
			<table class="table table-bordered table-block table-responsive">
				<thead>
					<tr>
						<td></td>
						<th>iPhone 4</th>
						<th>iPhone 4s</th>
						<th>iPhone 5</th>
						<th>iPhone 5s</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>iOS 5</th>
						<td class="is-unsupported">Not supported</td>
						<td class="is-unsupported">Not supported</td>
						<td class="is-unsupported">Not supported</td>
						<td class="is-unsupported">Not supported</td>
					</tr>
					<tr>
						<th>iOS 6</th>
						<td class="is-unsupported">Not supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
					</tr>
					<tr>
						<th>iOS 7</th>
						<td class="is-unsupported">Not supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
					</tr>
					<tr>
						<th>iOS 7.1</th>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
					</tr>
				</tbody>
			</table>

			<!-- iPad -->
			<h3 class="section-sub-title">iPad</h2>
			<table class="table table-bordered table-block table-responsive">
				<thead>
					<tr>
						<td></td>
						<th>iPad 1</th>
						<th>iPad 2</th>
						<th>iPad 3</th>
						<th>iPad 4</th>
						<th>iPad Air</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>iOS 5</th>
						<td class="is-unsupported">Not supported</td>
						<td class="is-unsupported">Not supported</td>
						<td>N/A</td>
						<td>N/A</td>
						<td>N/A</td>
					</tr>
					<tr>
						<th>iOS 6</th>
						<td rowspan="3" style="vertical-align: middle;">N/A</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
					</tr>
					<tr>
						<th>iOS 7</th>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
					</tr>
					<tr>
						<th>iOS 7.1</th>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
						<td class="is-supported">Supported</td>
					</tr>
				</tbody>
			</table>
		</div>
		
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

		<!-- Accessibility -->
		<div class="panel">
			<h2 id="accessibility" class="section-title">Accessibility</h2>
			<h3 class="section-sub-title">ARIA Roles</h2>
			<table class="table table-bordered table-block table-responsive">
				<thead>
					<tr>
					<th scope="col">Role</th>
					<th scope="col">Description</th>
					<th scope="col" width="165">Analogous To</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>application</td>
						<td>A region declared as a web application, as opposed to a web document.</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>article</td>
						<td> A section of a page that consists of a composition that forms an independent part of a document, page, or site.</td>
						<td><code>&lt;article&gt;</code></td>
					</tr>
					<tr>
						<td>banner</td>
						<td>A region that contains mostly site-oriented content, rather than page-specific content.</td>
						<td><code>&lt;header&gt;</code>,<br/><code>&lt;div id="header"&gt;</code></td>
					</tr>
					<tr>
						<td>complementary</td>
						<td>A supporting section of the document, designed to be complementary to the main content at a similar level in the DOM hierarchy, but remains meaningful when separated from the main content.</td>
						<td><code>&lt;aside&gt;</code></td>
					</tr>
					<tr>
						<td>contentinfo</td>
						<td>A large perceivable region that contains information about the parent document.</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>directory</td>
						<td>A list of references to members of a group, such as a static table of contents.</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>document</td>
						<td>A region containing related information that is declared as document content, as opposed to a web application.</td>
						<td><code>&lt;body&gt;</code></td>
					</tr>
					<tr>
						<td>form</td>
						<td>A landmark region that contains a collection of items and objects that, as a whole, combine to create a form. See related search</td>
						<td><code>&lt;form&gt;</code></td>
					</tr>
					<tr>
						<td>log</td>
						<td>A type of live region where new information is added in meaningful order and old information may disappear. See related marquee. Note: Elements with the role log have an implicit aria-live value of polite.</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>main</td>
						<td>The main content of a document.</td>
						<td><code>&lt;div id="content"&gt;</code></td>
					</tr>
					<tr>
						<td>navigation</td>
						<td>A collection of navigational elements (usually links) for navigating the document or related documents.</td>
						<td><code>&lt;nav&gt;</code></td>
					</tr>
					<tr>
						<td>note</td>
						<td>A section whose content is parenthetic or ancillary to the main content of the resource.</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>region</td>
						<td>A large perceivable section of a web page or document, that the author feels is important enough to be included in a page summary or table of contents, for example, an area of the page containing live sporting event statistics.</td>
						<td><code>&lt;div&gt;</code>, <code>&lt;frame&gt;</code>, <code>&lt;section&gt;</code></td>
					</tr>
					<tr>
						<td>search</td>
						<td>A landmark region that contains a collection of items and objects that, as a whole, combine to create a search facility. See related form.</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>status</td>
						<td>A container whose content is advisory information for the user but is not important enough to justify an alert, often but not necessarily presented as a status bar. See related alert. Note: Elements with the role status have an implicit <a href="http://www.w3.org/TR/wai-aria/states_and_properties#aria-live">aria-live</a> value of polite.</td>
						<td><code>&lt;output&gt;</code></td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>
</div>

<?php include('includes/footer.php'); ?>