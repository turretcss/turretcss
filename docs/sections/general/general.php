<section id="general" class="section">
	
	<h2 class="section-title">General</h2>
	<h3 class="section-sub-title">Structure</h3>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="[element] [behaviour] [style]">...</div>'); ?></code></pre>
	
	<h3 class="section-sub-title">Viewport</h3>
	<p>To ensure proper rendering and touch zooming, add the viewport meta tag to your <code>&lt;head&gt;</code>.</p>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">'); ?></code></pre>
	
	<h3 class="section-sub-title">HTML5 Doctype</h2>
	<p>Turret makes use of HTML5 elements and CSS properties that require the use of the HTML5 doctype.</p>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<!DOCTYPE html>
<html lang="en">
...
</html>'); ?></code></pre>
	<h3 class="section-sub-title">Normalize</h2>
	<p>For improved cross-browser rendering, Turret uses <a href="http://necolas.github.io/normalize.css/" target="_blank">Normalize.css</a>, a project by <a href="http://twitter.com/necolas" target="_blank">Nicolas Gallagher</a> and <a href="http://twitter.com/jon_neal" target="_blank">Jonathan Neal</a>.</p>
	
</section>