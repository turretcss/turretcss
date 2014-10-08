<section id="grid" class="section">

<h2 class="section-title">Grid<code>grid/grid.less</code></h2>

<h3 class="section-sub-title">Container</h3>
<p>Content wrapper with <code>max-width</code> set at differing sizes at various media query breakpoints.</p>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="container">...</div>'); ?></code></pre>

<h3 class="section-sub-title">Row</h3>
<p>Containing element for children with <code>.column-1*</code> attributes set.</p>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="row">...</div>'); ?></code></pre>


<h3 class="section-sub-title">Grid</h3>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="container">
	<div class="row">
		<div class="column-1-2">...</div>
		<div class="column-1-2">...</div>
	</div>
</div>'); ?></code></pre>

<h3 class="section-sub-title">Responsive Breakpoint Grid</h3>
<div class="grid">
	<div class="row">
		<div class="column-1-2 column-large-1-4 column-medium-1-3 column-small-1"><div class="swatch primary">Responsive Breakpoints</div></div>
		<div class="column-1-2 column-large-1-4 column-medium-1-3 column-small-1"><div class="swatch primary">Responsive Breakpoints</div></div>
	</div>
</div>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="container">
	<div class="row">
		<div class="column-1-2 column-large-1-2 column-medium-1 column-small-1">...</div>
		<div class="column-1-2 column-large-1-2 column-medium-1 column-small-1">...</div>
	</div>
</div>'); ?></code></pre>

<h3 class="section-sub-title">Gutters</h3>
<div class="grid">
	<div class="row">
		<div class="column-1-3 no-gutter"><div class="swatch primary">No Gutter</div></div>
		<div class="column-1-3 bottom-gutter"><div class="swatch primary">Bottom Gutter</div></div>
		<div class="column-1-3 top-gutter"><div class="swatch primary">Top Gutter</div></div>
	</div>
</div>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="container">
	<div class="row">
		<div class="column-1-3 no-gutter">...</div>
		<div class="column-1-3 bottom-gutter">...</div>
		<div class="column-1-3 top-gutter">...</div>
	</div>
</div>'); ?></code></pre>

</section>