<section id="typography" class="section">
	<h2 class="section-title">Typography<code>base/typography.less</code></h2>
	
	<h3 class="section-sub-title">Headings</h2>
	<h1>Heading 1</h1>
	<h2>Heading 2</h2>
	<h3>Heading 3</h3>
	<h4>Heading 4</h4>
	<h5>Heading 5</h5>
	<h6>Heading 6</h6>
	
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>'); ?></code></pre>
	
	<h3 class="section-sub-title">Paragraph</h3>
	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<p>...</p>'); ?></code></pre>
	
	<h3 class="section-sub-title">Lead Paragraph</h3>
	<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur.</p>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<p class="lead">...</p>'); ?></code></pre>
	
	<h3 class="section-sub-title">Text Align</h2>
	<p class="text-left">Text Left</p>
	<p class="text-center">Text Center</p>
	<p class="text-right">Text Right</p>
	<p class="text-justify">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas sed diam eget risus varius blandit sit amet non magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
	<p class="truncate">Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<p class="text-left">...</p>
<p class="text-center">...</p>
<p class="text-right">...</p>
<p class="text-justify">...</p>
<p class="truncate">...</p>'); ?></code></pre>
	
	<h3 class="section-sub-title">Strong</h2>
	<p><strong>strong</strong></p>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<strong>...</strong>'); ?></code></pre>
	
	<h3 class="section-sub-title">Emphasis</h2>
	<p><em>emphasis</em></p>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<em>...</em>'); ?></code></pre>
	
	<h3 class="section-sub-title">Horizontal Rule</h2>
	<hr>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<hr>'); ?></code></pre>
	
	<h3 class="section-sub-title">Blockquote</h2>
	<blockquote>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		<cite>&mdash; Name</cite>
	</blockquote>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<blockquote>
	<p>...</p>
	<cite>...</cite>
</blockquote>'); ?></code></pre>
	
	<h3 class="section-sub-title">Pullout</h2>
	<p class="pullout">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<p class="pullout">...</p>'); ?></code></pre>
	
	<h3 class="section-sub-title">Unordered List</h2>
	<ul>
		<li>Vehicula Dapibus Tellus Fermentum</li>
		<li>Vehicula Dapibus Tellus Fermentum</li>
		<li>Vehicula Dapibus Tellus Fermentum
			<ul>
				<li>Vehicula Dapibus Tellus Fermentum</li>
				<li>Vehicula Dapibus Tellus Fermentum</li>
			</ul>
		</li>
	</ul>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<ul>
	<li>...</li>
	<li>
		<ul>
			<li>...</li>
		</ul>
	</li>
</ul>'); ?></code></pre>
	
	<h3 class="section-sub-title">Ordered List</h2>
	<ol>
		<li>Vehicula Dapibus Tellus Fermentum</li>
		<li>Vehicula Dapibus Tellus Fermentum</li>
		<li>Vehicula Dapibus Tellus Fermentum
			<ol>
				<li>Vehicula Dapibus Tellus Fermentum</li>
				<li>Vehicula Dapibus Tellus Fermentum</li>
			</ol>
		</li>
	</ol>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<ol>
	<li>...</li>
	<li>
		<ol>
			<li>...</li>
		</ol>
	</li>
</ol>'); ?></code></pre>
	
	<h3 class="section-sub-title">Definition List</h2>
	<dl>
		<dt>Fringilla Ipsum Tellus</dt>
		<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
		<dt>Fringilla Ipsum Tellus</dt>
		<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
		<dt>Fringilla Ipsum Tellus</dt>
		<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
	</dl>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<dl>
	<dt>...</dt>
	<dd>...</dd>
</dl>'); ?></code></pre>
</section>