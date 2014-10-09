<section id="general" class="section">
	<h2 class="section-title">General</h2>
	<h3 class="section-sub-title">Structure</h3>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="[element] [behaviour] [style]">...</div>'); ?></code></pre>
	<h3 class="section-sub-title">Viewport</h3>
	<p>To ensure proper rendering and touch zooming, add the viewport meta tag to your <code>&lt;head&gt;</code>.</p>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">'); ?></code></pre>
</section>