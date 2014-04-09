<?php include('includes/head.php'); ?>

<div class="page-header" style="height:200px;">
	<div class="container">
		<div class="page-header-content column-1"><h1 class="page-title">Support</h1></div>
	</div>
</div>

<div id="general" class="content">
<div class="container">

<div class="row">

	<div class="column-1-4">
		<div class="side-nav">
			<ul>
				<li><a href="#browsers">Browser Support</a></li>
				<li><a href="#devices">Device Support</a></li>
				<li><a href="#css">CSS3</a></li>
				<li><a href="#responsive">Responsive</a></li>
				<li><a href="#accessibility">Accessibility</a></li>
			</ul>
		</div>
	</div>

	<div class="column-3-4">

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
			<p>Bootstrap is not supported in the old Internet Explorer compatibility modes. To be sure you're using the latest rendering mode for IE, consider including the appropriate <code><?php echo htmlentities('<meta>'); ?></code> tag in your pages:</p>
			<pre><code class="hljs html"><?php echo htmlentities('<meta http-equiv="X-UA-Compatible" content="IE=edge">'); ?></code></pre>
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

		<!-- Responsive -->
		<div class="panel">
			<h2 id="responsive" class="section-title">Responsive</h2>
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