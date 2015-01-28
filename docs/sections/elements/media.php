<section id="media" class="section">

<h2 class="section-title">Media <code>media.less</code></h2>
<p>The media frame is for content loaded after the document is ready. It stops layouts from jumping when media is being loaded.</p>
<div class="row">
	<div class="column-1">
		<div class="media media-16-9">
			<iframe width="560" height="315" src="//www.youtube.com/embed/b8ORHVdTxbg" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>

<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="media media-16-9">
	<iframe>...</iframe>
</div>'); ?></code></pre>

<h3 class="section-sub-title">Media Wrapper Types</h3>
<p>The media frame wraps <code><?php echo htmlentities('<img>'); ?></code>, <code><?php echo htmlentities('<svg>'); ?></code>, <code><?php echo htmlentities('<video>'); ?></code>, and <code><?php echo htmlentities('<iframe>'); ?></code> by default, to wrap other content in a media container use the <code>media-inner</code> class. The <code>media-transparent</code> class removes the default background color on the media element.</p>
<div class="row">
	<div class="column-1-4">
		<div class="media media-1">
			<img src="http://placehold.it/200/4BB3D6/FFFFFF" class="responsive">
		</div>
	</div>
	<div class="column-1-4">
		<div class="media media-1">
			<iframe class="vine-embed" src="https://vine.co/v/OqMLQBOZBd7/embed/simple" width="320" height="320" frameborder="0"></iframe><script async src="//platform.vine.co/static/scripts/embed.js" charset="utf-8"></script>
		</div>
	</div>
	<div class="column-1-4">
		<div class="media media-1">
			<svg width="100%" height="100%">
				<rect width="100%" height="100%">
			</svg>
		</div>
	</div>
	<div class="column-1-4">
		<div class="media media-1">
			<div class="media-inner"></div>
		</div>
	</div>
</div>

<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="media media-1">
	<img src="..." class="responsive">
</div>
<div class="media media-1">
	<iframe>...</iframe>
</div>
<div class="media media-1">
	<svg>...</svg>
</div>
<div class="media media-1">
	<div class="media-inner">...</div>
</div>'); ?></code></pre>

<h3 class="section-sub-title">Media Ratios</h3>
<p>By default the <code>media</code> element has the following common media type ratios:</p>
<ul class="list list-unstyled">
	<li><code>media-1-2</code></li>
	<li><code>media-9-16</code></li>
	<li><code>media-9-14</code></li>
	<li><code>media-2-3</code></li>
	<li><code>media-3-4</code></li>
	<li><code>media-1</code></li>
	<li><code>media-4-3</code></li>
	<li><code>media-3-2</code></li>
	<li><code>media-16-9</code></li>
	<li><code>media-2-1</code></li>
</ul>

<h3 class="section-sub-title">Media Ratio Mixin</h3>
<p>To add custom media ratios use the <code>.media-ratio()</code> mixin.</p>
<pre class="language-css"><code class="language-css"><?php echo htmlentities('.media-ratio(@width, @height) {
	padding-top: (@height/@width) * 100%;
}'); ?></code></pre>



</section>