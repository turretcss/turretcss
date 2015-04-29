<section id="utility-classes" class="section">
	<h2 class="section-title">Utility Classes <code>utility-classes.less</code></h2>
	<p>For text and background color utility classes check out the <a href="#colors">color</a> section. Text align utility classes are demonstrated in the <a href="#typography">typography</a> section.</p>
	
	<h3 class="section-block-title">General</h3>
	<table class="table table-bordered table-block table-responsive">
		<thead>
			<tr>
				<th>Class</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>	
				<td><code>clearfix</code></td>
				<td>Clears floats using <code>.clearfix();</code> mixin</td>
			</tr>
			<tr>	
				<td><code>center-block </code></td>
				<td>Makes element center block using <code>.center-block();</code> mixin</td>
			</tr>
			<tr>	
				<td><code>full-height</code></td>
				<td>Sets height to 100%</td>
			</tr>
			<tr>	
				<td><code>fixed</code></td>
				<td>Sets <code>position: fixed;</code></td>
			</tr>
			<tr>	
				<td><code>pointer</code></td>
				<td>Sets <code>cursor: pointer;</code></td>
			</tr>
			<tr>	
				<td><code>no-margin</code></td>
				<td>Removes margin <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
			</tr>
			<tr>	
				<td><code>no-padding</code></td>
				<td>Removes padding <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
			</tr>
			<tr>	
				<td><code>no-border</code></td>
				<td>Removes borders <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
			</tr>
		</tbody>
	</table>
	
	<h3 class="section-block-title">Display</h3>
	<table class="table table-bordered table-block table-responsive">
		<thead>
			<tr>
				<th>Class</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>	
				<td><code>display-block</code></td>
				<td>Sets <code>display: block;</code> on element</td>
			</tr>
			<tr>	
				<td><code>display-inline-block</code></td>
				<td>Sets <code>display: inline-block;</code> on element</td>
			</tr>
			<tr>	
				<td><code>display-table</code></td>
				<td>Sets <code>display: table;</code> on element</td>
			</tr>
			<tr>	
				<td><code>display-table-cell</code></td>
				<td>Sets <code>display: table-cell;</code> on element</td>
			</tr>
		</tbody>
	</table>
	
	<h3 class="section-block-title">Positioning</h3>
	<p>Utility classes can be used to position elements easily, each position utility class is <code>position: absolute;</code> and allows for either absolute positioning or using <code>@gutter</code> spacing by adding the <code>gutter</code> class to any position class</p>
	<table class="table table-bordered table-block table-responsive">
		<thead>
			<tr>
				<th>Class</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>	
				<td><code>top-left</code></td>
				<td>Positions element to the top left of it's container</td>
			</tr>
			<tr>	
				<td><code>top-right</code></td>
				<td>Positions element to the top right of it's container</td>
			</tr>
			<tr>	
				<td><code>bottom-left</code></td>
				<td>Positions element to the bottom left of it's container</td>
			</tr>
			<tr>	
				<td><code>bottom-right</code></td>
				<td>Positions element to the bottom right of it's container</td>
			</tr>
		</tbody>
	</table>
	
	<h3 class="section-block-title">Floats</h3>
	<table class="table table-bordered table-block table-responsive">
		<thead>
			<tr>
				<th>Class</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>	
				<td><code>left</code></td>
				<td>Floats element left</td>
			</tr>
			<tr>	
				<td><code>right</code></td>
				<td>Floats element right</td>
			</tr>
		</tbody>
	</table>
	
	<h3 class="section-block-title">Responsive Clear Floats</h3>
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
	
	<h3 class="section-block-title">Visiblity</h2>
	<p>Define content to be <code>visible</code> or <code>hidden</code>.</p>
	<table class="table table-bordered table-block table-responsive">
		<thead>
			<tr>
				<th>Class</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>	
				<td><code>hide</code></td>
				<td>Hides element <code>.hide();</code> mixin</td>
			</tr>
			<tr>	
				<td><code>show</code></td>
				<td>Shows element <code>.show();</code> mixin</td>
			</tr>
			<tr>	
				<td><code>visible</code></td>
				<td>Sets <code>visibility: visible;</code></td>
			</tr>
			<tr>	
				<td><code>invisible</code></td>
				<td>Sets <code>visibility: hidden;</code></td>
			</tr>
			<tr>	
				<td><code>hidden-print</code></td>
				<td>Hides element for when <code>@media print</code></td>
			</tr>
			<tr>	
				<td><code>visible-print</code></td>
				<td>Shows element for when <code>@media print</code></td>
			</tr>
			<tr>	
				<td><code>hidden-screen</code></td>
				<td>Hides element for when <code>@media screen</code></td>
			</tr>
			<tr>	
				<td><code>visible-screen</code></td>
				<td>Shows element for when <code>@media screen</code></td>
			</tr>
		</tbody>
	</table>
	
	<h3 class="section-block-title">Responsive Visibility</h2>
	<p>Define content to be <code>visible</code> or <code>hidden</code> at different breakpoints.<br><small>Note: <code>!important</code> is used to override specificity issues.</small></p>
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
	
	<h3 class="section-block-title">Responsive Gutters</h2>
	<p>General <code>no-gutter</code> utility classes for each responsive breakpoint.</p>
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
				<td><code>.no-gutter-small</code></td>
				<td class="is-hidden">No gutter</td>
				<td class="is-visible">Gutter</td>
				<td class="is-visible">Gutter</td>
				<td class="is-visible">Gutter</td>
			</tr>
			<tr>
				<td><code>.no-gutter-medium</code></td>
				<td class="is-visible">Gutter</td>
				<td class="is-hidden">No gutter</td>
				<td class="is-visible">Gutter</td>
				<td class="is-visible">Gutter</td>
			</tr>
			<tr>
				<td><code>.no-gutter-large</code></td>
				<td class="is-visible">Gutter</td>
				<td class="is-visible">Gutter</td>
				<td class="is-hidden">No gutter</td>
				<td class="is-visible">Gutter</td>
			</tr>
			<tr>
				<td><code>.no-gutter-extra-large</code></td>
				<td class="is-visible">Gutter</td>
				<td class="is-visible">Gutter</td>
				<td class="is-visible">Gutter</td>
				<td class="is-hidden">No gutter</td>
			</tr>
		</tbody>
	</table>
</section>