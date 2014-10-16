<section id="column" class="section">

<h2 class="section-title">Column<code>grid/column.less</code></h2>

<h3 class="section-sub-title">Columns</h3>
<?php include('column-example.php'); ?>

<h3 class="section-sub-title">Responsive Breakpoint Columns</h3>
<div class="row">
	<div class="column-1-2 column-extra-large-3-4 column-medium-1"><div class="grid-item">Responsive Breakpoints</div></div>
</div>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="column-1-2 column-extra-large-3-4 column-medium-1">...</div>'); ?></code></pre>

<h3 class="section-sub-title">Nested Columns</h3>
<div class="row">
	<div class="column-1">
		<div class="grid-item">
			<div class="row">
				<div class="column-1-2"><div class="grid-item grid-item-nested">Column-1-2</div></div>
				<div class="column-1-2"><div class="grid-item grid-item-nested">Column-1-2</div></div>
			</div>
		</div>
	</div>
</div>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="column-1">
	<div class="row">
		<div class="column-1-2">...</div>
		<div class="column-1-2">...</div>
	</div>
</div>'); ?></code></pre>

</section>