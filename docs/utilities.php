<?php include('includes/head.php'); ?>

<div class="page-header" style="height:200px;">
	<div class="container">
		<div class="page-header-content column-1"><h1 class="page-title">utilities</h1></div>
	</div>
</div>


<div id="utilities" class="content">
<div class="container">
<div class="row">

<div class="column-1-4">
	<div class="side-nav">
		<ul>
			<li><a href="#clearfix">Clearfix</a></li>
			<li><a href="#center-block">Center Block</a></li>
			<li><a href="#floats">Floats</a></li>
			<li><a href="#hide-and-show">Hide and Show</a></li>
			<li><a href="#responsive-utilities">Responsive Utilities</a></li>
			<li><a href="#mixins">Mixins</a></li>
		</ul>
	</div>
</div>

<div class="column-3-4">

<!-- Clearfix -->
<div class="panel">
<h2 id="clearfix" class="section-title">Clearfix</h2>
<p>Clearfix for Elements with Floating Inner Elements.</p>
<h3 class="section-sub-title">Class</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="clearfix">...</div>'); ?></code></pre>
<pre><code class="hljs css"><?php echo htmlentities('.clearfix {
	.clearfix();
}'); ?></code></pre>
<h3 class="section-sub-title">Mixin</h3>
<pre><code class="hljs css"><?php echo htmlentities('.clearfix() {

	&:before,
	&:after {
		content: " ";
		display: table;
	}

	&:after {
		clear: both;
	}

	*zoom: 1;
}'); ?></code></pre>
</div>

<!-- Center Block -->
<div class="panel">
<h2 id="center-block" class="section-title">Center Block</h2>
<p>Set any element to be <code>display: block;</code> and centered <code>margin-left: auto;</code> and <code>margin-right: auto;</code>.</p>
<h3 class="section-sub-title">Class</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="center-block">...</div>'); ?></code></pre>
<pre><code class="hljs css"><?php echo htmlentities('.center-block {
	.center-block();
}'); ?></code></pre>
<h3 class="section-sub-title">Mixin</h3>
<pre><code class="hljs css"><?php echo htmlentities('.center-block() {
	display: block;
	margin-left: auto;
	margin-right: auto;
}'); ?></code></pre>
</div>

<!-- Floats -->
<div class="panel">
<h2 id="floats" class="section-title">Floats</h2>
<p>Utility Classes to Float Elements Left or Right.</p>

<h3 class="section-sub-title">Class</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="left">...</div>
<div class="right">...</div>'); ?></code></pre>

<pre><code class="hljs css">
<?php echo htmlentities('.right {
	float: right !important;
}

.left {
	float: left !important;
}
'); ?>
</code></pre>

<h3 class="section-sub-title">Responsive Clear Floats</h3>

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
</div>

<!-- Hide and Show -->
<div class="panel">
<h3 id="hide-and-show" class="section-title">Hide and Show</h3>
<p>Mixins and Utility Classes to Hide and Show Elements. Includes Responsive Breakpoints for Clearing Floats.</p>

<h3 class="section-sub-title">Class</h3>
<pre><code class="hljs html"><?php echo htmlentities('<div class="hide">...</div>
<div class="show">...</div>'); ?></code></pre>
<pre><code class="hljs css"><?php echo htmlentities('.hide {
	.hide();
}

.show {
	.show();
}'); ?></code></pre>

<h3 class="section-sub-title">Mixin</h3>
<pre><code class="hljs css"><?php echo htmlentities('.hide() {
	display: none !important;
	visibility: hidden !important;
	.opacity(0);
}

.show() {
	display: block !important;
	visibility: visible !important;
	.opacity(1);
}'); ?>
</code></pre>
</div>

<!-- Responsive Utilities -->
<div class="panel">
<h3 id="responsive-utilities" class="section-title">Responsive Utilities</h3>
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
</div>

<!-- Mixins -->
<div class="panel">
<h3 id="mixins" class="section-title">Mixins</h3>
<p>Predefined Mixins for use with Turret.</p>
<table class="table table-bordered table-block table-responsive">
	<thead>
		<tr>
			<th>Name</th>
			<th>Mixin</th>
		</tr>
	</thead>
	<tbody>
		<?php include('includes/mixin-table.php'); ?>
	</tbody>
</table>
</div>

</div>
</div>

<?php include('includes/footer.php'); ?>