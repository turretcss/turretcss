<section id="browser-support" class="section">
	<h2 class="section-title">Browser Support</h2>
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
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">'); ?></code></pre>
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
</section>