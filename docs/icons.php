<?php include('includes/head.php'); ?>

<div class="page-header" style="height:200px;">
	<div class="container">
		<div class="page-header-content column-1">
			<h1 class="page-title">Icons</h1>
		</div>
	</div>
</div>

<div id="icons" class="content" class="row">
<div class="container">

<div class="column-1">

<div class="icons clearfix">
	<?php include('includes/icons.php'); ?>
</div>

<!-- Icons -->
<div class="panel">
	<h2 id="icons" class="section-title">Icons</h2>

	<!-- Inline Icons -->
	<h3 class="section-sub-title">Inline Icons</h3>
	<p>Place Icons inline using a <code><span></code> tag.</p>
	<p><span class="icon-play"></span> icon play</p>
	<pre><code class="hljs html"><?php echo htmlentities('<span class="icon-play"></span> icon play'); ?></code></pre>

	<!-- List Icons -->
	<h3 class="section-sub-title">List Icons</h3>
	<p>Use <code>icon-ul</code> and <code>icon-li</code> to replace default bullets in unordered lists.</p>
	<ul class="icon-ul">
		<li><i class="icon-li icon-arrow-right"></i>List Item</li>
		<li><i class="icon-li icon-arrow-right"></i>List Item</li>
		<li><i class="icon-li icon-arrow-right"></i>List Item</li>
		<li><i class="icon-li icon-arrow-right"></i>List Item</li>
	</ul>
	<pre><code class="hljs html"><?php echo htmlentities('<ul class="icon-ul">
	<li><i class="icon-li icon-arrow-right"></i>List Item</li>
	<li><i class="icon-li icon-arrow-right"></i>List Item</li>
	<li><i class="icon-li icon-arrow-right"></i>List Item</li>
	<li><i class="icon-li icon-arrow-right"></i>List Item</li>
</ul>'); ?></code></pre>

	<!-- Spinning Icons -->
	<h3 class="section-sub-title">Spinning Icons</h3>
	<p>Use the <code>icon-spin</code> class to get any icon to rotate.</p>
	<p><span class="icon-spin icon-loading"></span></p>
	<pre><code class="hljs html"><?php echo htmlentities('<span class="icon-spin icon-loading"></span>'); ?></code></pre>
	<div class="alert alert-info"> CSS3 animations aren't supported in IE8 - IE9.</div>
</div>

</div>

<?php include('includes/footer.php'); ?>