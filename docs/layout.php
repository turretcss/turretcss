<?php include('includes/head.php'); ?>

<div class="page-header">
	<div class="container">
		<div class="page-header-content column-1">
			<div class="page-header-content-inner">
				<h1 class="page-title">Layout</h1>
				<p class="page-description">The Turret Grid, the container, rows, columns, column offsets, gutters and more.</p>
			</div>
		</div>
	</div>
</div>

<div id="grid" class="content">
<div class="container">
<div class="row">

<div class="column-1">

<?php include('includes/grid.php'); ?>

<!-- Container -->
<div class="panel">
	<h2 class="section-title">Container and Rows</h2>

	<!-- Container -->
	<h3 class="section-sub-title">Container</h3>
	<p>Content wrapper with <code>max-width</code> set at differing sizes at various media query breakpoints.</p>
	<pre><code class="hljs html"><?php echo htmlentities('<div class="container">...</div>'); ?></code></pre>

	<!-- Row -->
	<h3 class="section-sub-title">Row</h3>
	<p>Containing element for children with <code>.column-1*</code> attributes set.</p>
	<pre><code class="hljs html"><?php echo htmlentities('<div class="row">...</div>'); ?></code></pre>
</div>

<!-- Grid -->
<div class="panel">
<h2 class="section-title">Grid</h2>

<h3 class="section-sub-title">Grid</h3>
<pre><code class="hljs html">
<?php echo htmlentities('<div class="container">
	<div class="row">
		<div class="column-1-2">...</div>
		<div class="column-1-2">...</div>
	</div>
</div>'); ?>
</code></pre>


<h3 class="section-sub-title">Responsive Breakpoint Grid</h3>
<div class="grid">
	<div class="row">
		<div class="column-1-2 column-large-1-4 column-medium-1-3 column-small-1"><div class="swatch primary">Responsive Breakpoints</div></div>
		<div class="column-1-2 column-large-1-4 column-medium-1-3 column-small-1"><div class="swatch primary">Responsive Breakpoints</div></div>
	</div>
</div>
<pre><code class="hljs html"><?php echo htmlentities('<div class="container">
	<div class="row">
		<div class="column-1-2 column-large-1-2 column-medium-1 column-small-1">...</div>
		<div class="column-1-2 column-large-1-2 column-medium-1 column-small-1">...</div>
	</div>
</div>'); ?>
</code></pre>

<h3 class="section-sub-title">Gutters</h3>
<div class="grid">
	<div class="row">
		<div class="column-1-3 no-gutter"><div class="swatch primary">No Gutter</div></div>
		<div class="column-1-3 bottom-gutter"><div class="swatch primary">Bottom Gutter</div></div>
		<div class="column-1-3 top-gutter"><div class="swatch primary">Top Gutter</div></div>
	</div>
</div>
<pre><code class="hljs html">
<?php echo htmlentities('<div class="container">
	<div class="row">
		<div class="column-1-3 no-gutter">...</div>
		<div class="column-1-3 bottom-gutter">...</div>
		<div class="column-1-3 top-gutter">...</div>
	</div>
</div>'); ?>
</code></pre>
</div>

</div>
</div>

<?php include('includes/footer.php'); ?>