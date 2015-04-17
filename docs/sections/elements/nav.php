<section id="nav" class="section">

<h2 class="section-title">Nav <code>nav.less</code></h2>
<p>For menu and navigation components use the <code><?php echo htmlentities('<nav>'); ?></code> element wrapped around an unordered list <code><?php echo htmlentities('<ul>'); ?></code>.</p>
<nav>
	<ul>
		<li><a href="#">Item 1</a></li>
		<li><a href="#">Item 2</a></li>
		<li><a href="#">Item 3</a></li>
		<li><a href="#">Item 4</a></li>
	</ul>
</nav>
<pre class="language-less"><code class="language-less"><?php echo htmlentities('@nav-item-margin: 10px 0px;'); ?></code></pre>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<nav>
	<ul>
		<li><a href="#">...</a></li>
	</ul>
</nav>'); ?></code></pre>

<h3 class="section-sub-title">Nav Inline</h3>
<p>To display navigaiton inline add the <code><?php echo htmlentities('nav-inline'); ?></code> class to the <code><?php echo htmlentities('<nav>'); ?></code> element.</p>
<nav class="nav-inline">
	<ul>
		<li><a href="#">Item 1</a></li>
		<li><a href="#">Item 2</a></li>
		<li><a href="#">Item 3</a></li>
		<li><a href="#">Item 4</a></li>
	</ul>
</nav>
<pre class="language-less"><code class="language-less"><?php echo htmlentities('@nav-inline-item-margin: 10px;'); ?></code></pre>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<nav class="nav-inline">
	<ul>
		<li><a href="#">...</a></li>
	</ul>
</nav>'); ?></code></pre>

</section>