<section id="css" class="section">
	<h2 class="section-title">CSS3</h2>
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
</section>