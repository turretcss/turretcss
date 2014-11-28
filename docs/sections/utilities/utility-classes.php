<section id="utility-classes" class="section">
	<h2 class="section-title">Utility Classes <code>utility-classes.less</code></h2>
	
	
	<h3 class="section-sub-title">Responsive Clear Floats</h3>
	<p>Includes Responsive Breakpoints for Clearing Floats.</p>
	
	<table class="table table-bordered table-block table-responsive">
		<thead>
			<tr>
				<th></th>
				<th>Small Devices<br><small>Phones (&lt;768px)</small></th>
				<th>Medium devices<br><small>Tablets (≥768px)</small></th>
				<th>Large devices<br><small>Desktops (≥1024)</small></th>
				<th>Extra Large devices<br><small>Desktops (≥1280px)</small></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><code>.small-clear-right</code></td>
				<td class="is-clear">clear</td>
				<td class="is-float">right</td>
				<td class="is-float">right</td>
				<td class="is-float">right</td>
			</tr>
			<tr>
				<td><code>.medium-clear-right</code></td>
				<td class="is-float">right</td>
				<td class="is-clear">clear</td>
				<td class="is-float">right</td>
				<td class="is-float">right</td>
			</tr>
			<tr>
				<td><code>.large-clear-right</code></td>
				<td class="is-float">right</td>
				<td class="is-float">right</td>
				<td class="is-clear">clear</td>
				<td class="is-float">right</td>
			</tr>
			<tr>
				<td><code>.extra-large-clear-right</code></td>
				<td class="is-float">right</td>
				<td class="is-float">right</td>
				<td class="is-float">right</td>
				<td class="is-clear">clear</td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<td><code>.small-clear-left</code></td>
				<td class="is-clear">clear</td>
				<td class="is-float">left</td>
				<td class="is-float">left</td>
				<td class="is-float">left</td>
			</tr>
			<tr>
				<td><code>.medium-clear-left</code></td>
				<td class="is-float">left</td>
				<td class="is-clear">clear</td>
				<td class="is-float">left</td>
				<td class="is-float">left</td>
			</tr>
			<tr>
				<td><code>.large-clear-left</code></td>
				<td class="is-float">left</td>
				<td class="is-float">left</td>
				<td class="is-clear">clear</td>
				<td class="is-float">left</td>
			</tr>
			<tr>
				<td><code>.extra-large-clear-left</code></td>
				<td class="is-float">left</td>
				<td class="is-float">left</td>
				<td class="is-float">left</td>
				<td class="is-clear">clear</td>
			</tr>
		</tbody>
	</table>
	
	<p>Utility Classes to Hide and Show Elements.</p>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="hide">...</div>
<div class="show">...</div>'); ?></code></pre>
	
	<h3 class="section-sub-title">Responsive Utilities</h2>
	<p>Define content to be <code>visible</code> or <code>hidden</code> on different devices. <code>!important</code> is included to avoid specificity issues.</p>
	<table class="table table-bordered table-block table-responsive">
		<thead>
			<tr>
				<th></th>
				<th>Small Devices<br><small>Phones (&lt;768px)</small></th>
				<th>Medium devices<br><small>Tablets (≥768px)</small></th>
				<th>Large devices<br><small>Desktops (≥1024)</small></th>
				<th>Extra Large devices<br><small>Desktops (≥1280px)</small></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><code>.visible-small</code></td>
				<td class="is-visible">Visible</td>
				<td class="is-hidden">Hidden</td>
				<td class="is-hidden">Hidden</td>
				<td class="is-hidden">Hidden</td>
			</tr>
			<tr>
				<td><code>.visible-medium</code></td>
				<td class="is-hidden">Hidden</td>
				<td class="is-visible">Visible</td>
				<td class="is-hidden">Hidden</td>
				<td class="is-hidden">Hidden</td>
			</tr>
			<tr>
				<td><code>.visible-large</code></td>
				<td class="is-hidden">Hidden</td>
				<td class="is-hidden">Hidden</td>
				<td class="is-visible">Visible</td>
				<td class="is-hidden">Hidden</td>
			</tr>
			<tr>
				<td><code>.visible-extra-large</code></td>
				<td class="is-hidden">Hidden</td>
				<td class="is-hidden">Hidden</td>
				<td class="is-hidden">Hidden</td>
				<td class="is-visible">Visible</td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<td><code>.hidden-small</code></td>
				<td class="is-hidden">Hidden</td>
				<td class="is-visible">Visible</td>
				<td class="is-visible">Visible</td>
				<td class="is-visible">Visible</td>
			</tr>
			<tr>
				<td><code>.hidden-medium</code></td>
				<td class="is-visible">Visible</td>
				<td class="is-hidden">Hidden</td>
				<td class="is-visible">Visible</td>
				<td class="is-visible">Visible</td>
			</tr>
			<tr>
				<td><code>.hidden-large</code></td>
				<td class="is-visible">Visible</td>
				<td class="is-visible">Visible</td>
				<td class="is-hidden">Hidden</td>
				<td class="is-visible">Visible</td>
			</tr>
			<tr>
				<td><code>.hidden-extra-large</code></td>
				<td class="is-visible">Visible</td>
				<td class="is-visible">Visible</td>
				<td class="is-visible">Visible</td>
				<td class="is-hidden">Hidden</td>
			</tr>
		</tbody>
	</table>
</section>