<section id="icons" class="section">
	<h2 class="section-title">Icons<code>base/icons.less</code></h2>
	<p>An outline of the SVG Icon Font library with utility classes for animations, lists, and icon display types.</p>

	<!-- Inline Icons -->
	<h3 class="section-sub-title">Inline Icons</h3>
	<p>Place Icons inline using a <code><?php echo htmlentities('<span>'); ?></code> tag.</p>
	<p><span class="icon icon-angle-small-right"></span> icon play</p>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<span class="icon icon-angle-small-right"></span> icon angle small right'); ?></code></pre>

	<!-- List Icons -->
	<h3 class="section-sub-title">List Icons</h3>
	<p>Use <code>icon-ul</code> and <code>icon-li</code> to replace default bullets in unordered lists.</p>
	<ul class="icon-ul">
		<li><span class="icon icon-li icon-angle-small-right"></span>List Item</li>
		<li><span class="icon icon-li icon-angle-small-right"></span>List Item</li>
		<li><span class="icon icon-li icon-angle-small-right"></span>List Item</li>
		<li><span class="icon icon-li icon-angle-small-right"></span>List Item</li>
	</ul>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<ul class="icon-ul">
	<li><span class="icon icon-li icon-angle-small-right"></span>List Item</li>
	<li><span class="icon icon-li icon-angle-small-right"></span>List Item</li>
	<li><span class="icon icon-li icon-angle-small-right"></span>List Item</li>
	<li><span class="icon icon-li icon-angle-small-right"></span>List Item</li>
</ul>'); ?></code></pre>

	<!-- Spinning Icons -->
	<h3 class="section-sub-title">Spinning Icons</h3>
	<p>Use the <code>icon-spin</code> class to get any icon to rotate <small>(Note: CSS3 animations aren't supported in IE8 - IE9)</small></p>
	<p><span class="icon icon-spin icon-star"></span></p>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<span class="icon icon-spin icon-star"></span>'); ?></code></pre>
</section>