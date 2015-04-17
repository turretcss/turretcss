<section id="general" class="section">
<h2 id="images" class="section-title">Images</h2>
<h3 class="section-sub-title">Responsive Images</h3>
<p>Images in Turret can be made responsive-friendly via the addition of the <code>.responsive</code> class. This applies <code>max-width: 100%;</code> and <code>height: auto;</code> to the image so that it scales nicely to the parent element.</p>
<div class="row">
	<div class="column-1"><img src="http://placehold.it/800x200/4BB3D6/FFFFFF" class="responsive"></div>
</div>

<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<img src="..." class="responsive">'); ?></code></pre>

<h3 class="section-sub-title">Image Styles</h3>
<div class="row">
	<div class="column-1-2 text-center">
		<img src="http://placehold.it/200x200/4BB3D6/FFFFFF" class="rounded">
		<pre class="language-less"><code class="language-less"><?php echo htmlentities('@image-rounded-border-radius: 8px;'); ?></code></pre>
		<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<img src="..." class="rounded">'); ?></code></pre>
	</div>
	<div class="column-1-2 text-center">
		<img src="http://placehold.it/200x200/4BB3D6/FFFFFF" class="circle">
		<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<img src="..." class="circle">'); ?></code></pre>
	</div>
</div>



</section>