<section id="typography" class="section">
	<h2 class="section-title">Typography<code>base/typography.less</code></h2>
	
	<h3 class="section-sub-title">Headings</h2>
	<h1>Heading 1 <small>Heading 1 small</small></h1>
	<h2>Heading 2 <small>Heading 2 small</small></h2>
	<h3>Heading 3 <small>Heading 3 small</small></h3>
	<h4>Heading 4 <small>Heading 4 small</small></h4>
	<h5>Heading 5 <small>Heading 5 small</small></h5>
	<h6>Heading 6 <small>Heading 6 small</small></h6>
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@headings-margin: 0px 0px 20px 0px;
@headings-font-family: @medium-font-family;
@headings-font-weight: @medium-font-weight;
@headings-color: @body-color;
@headings-line-height: 1.1;

@headings-small-font-family: @medium-font-family;
@headings-small-size: 0.6em;
@headings-small-color: @grey;

@h1-font-size: 3.2;
@h2-font-size: 2.4;
@h3-font-size: 1.6;
@h4-font-size: 1.4;
@h5-font-size: 1.2;
@h6-font-size: 1;'); ?></code></pre>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<h1>Heading 1 <small>Heading 1 small</small></h1>
<h2>Heading 2 <small>Heading 2 small</small></h2>
<h3>Heading 3 <small>Heading 3 small</small></h3>
<h4>Heading 4 <small>Heading 4 small</small></h4>
<h5>Heading 5 <small>Heading 5 small</small></h5>
<h6>Heading 6 <small>Heading 6 small</small></h6>'); ?></code></pre>
	
	<h3 class="section-sub-title">Paragraph</h3>
	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@paragraph-font-family: @regular-font-family;
@paragraph-font-weight: @regular-font-weight;
@paragraph-font-size: @font-size-medium;
@paragraph-color: @body-color;
@paragraph-line-height: @line-height;'); ?></code></pre>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<p>...</p>'); ?></code></pre>
	
	<h3 class="section-sub-title">Lead Paragraph</h3>
	<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur.</p>
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@lead-font-family: @thin-font-family;
@lead-font-weight: @thin-font-weight;
@lead-font-size: 2;
@lead-color: @body-color;
@lead-line-height: @line-height;'); ?></code></pre>
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

	<h3 class="section-sub-title">Text Transform</h2>
	<p class="uppercase">Uppercase</p>
	<p class="lowercase">Lowercase</p>
	<p class="capitalize">capitalize</p>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<p class="uppercase">Uppercase</p>
<p class="lowercase">Lowercase</p>
<p class="capitalize">capitalize</p>'); ?></code></pre>
	
	<h3 class="section-sub-title">Strong</h2>
	<p><strong>strong</strong></p>
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@strong-font-family: @bold-font-family;
@strong-font-weight: @bold-font-weight;'); ?></code></pre>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<strong>...</strong>'); ?></code></pre>
	
	<h3 class="section-sub-title">Emphasis</h2>
	<p><em>emphasis</em></p>
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@em-font-style: italic;'); ?></code></pre>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<em>...</em>'); ?></code></pre>
	
	<h3 class="section-sub-title">Horizontal Rule</h2>
	<hr>
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@hr-margin: 35px auto;
@hr-height: 1px;
@hr-background: @light-grey;'); ?></code></pre>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<hr>'); ?></code></pre>
	
	<h3 class="section-sub-title">Blockquote</h2>
	<blockquote>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		<cite>&mdash; Name</cite>
	</blockquote>
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@blockquote-margin: 35px 0px;
@blockquote-padding: 0px 30px;

@blockquote-quote-margin: 0;
@blockquote-quote-font-family: @lead-font-family;
@blockquote-quote-font-weight: @lead-font-weight;
@blockquote-quote-font-size: @lead-font-size;
@blockquote-quote-font-style: normal;
@blockquote-quote-line-height: @line-height;
@blockquote-quote-color: @primary;

@blockquote-cite-margin: 10px 0px;
@blockquote-cite-font-family: @regular-font-family;
@blockquote-cite-font-weight: @regular-font-family;
@blockquote-cite-font-size: @font-size-medium;
@blockquote-cite-font-style: normal;
@blockquote-cite-color: @blockquote-quote-color;
@blockquote-cite-text-align: right;'); ?></code></pre>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<blockquote>
	<p>...</p>
	<cite>...</cite>
</blockquote>'); ?>
	</code></pre>
	
	<h3 class="section-sub-title">Pullout</h2>
	<p class="pullout">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@pullout-margin: @blockquote-margin;
@pullout-padding: @blockquote-padding;
@pullout-font-family: @blockquote-quote-font-family;
@pullout-font-weight: @blockquote-quote-font-weight;
@pullout-font-size: @blockquote-quote-font-size;
@pullout-border: solid @primary;
@pullout-border-width:  0px 0px 0px 5px;'); ?></code></pre>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<p class="pullout">...</p>'); ?></code></pre>
	
	<h3 class="section-sub-title">Lists</h2>
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@list-margin: 20px 0px;
@list-padding: 0;

@list-item-margin: 10px 0px 10px 20px;
@list-item-font-family: @paragraph-font-family;
@list-item-font-weight: @paragraph-font-weight;
@list-item-font-size: @paragraph-font-size;
@list-item-color: @paragraph-color;

@child-list-margin: 10px 0px;
@child-list-padding: 0;
@child-list-item-margin: @list-item-margin;'); ?></code></pre>

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
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@unordered-list-icon: disc;'); ?></code></pre>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<ul>
	<li>...</li>
	<li>
		<ul>
			<li>...</li>
		</ul>
	</li>
</ul>'); ?>
	</code></pre>
	
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
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@unordered-child-list-icon: disc;'); ?></code></pre>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<ol>
	<li>...</li>
	<li>
		<ol>
			<li>...</li>
		</ol>
	</li>
</ol>'); ?>
	</code></pre>
	
	<h3 class="section-sub-title">Definition List</h2>
	<dl>
		<dt>Fringilla Ipsum Tellus</dt>
		<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
		<dt>Fringilla Ipsum Tellus</dt>
		<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
		<dt>Fringilla Ipsum Tellus</dt>
		<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
	</dl>
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@defintion-list-margin: 0;
@defintion-list-padding: 0;
@defintion-list-font-family: @regular-font-family;
@defintion-list-font-size: @font-size-medium;

@defintion-term-margin: 10px 0px;
@defintion-term-font-weight: @bold-font-weight;
@defintion-term-color: @paragraph-color;

@defintion-description-margin: 0px 0px 20px 0px;
@defintion-description-color: @paragraph-color;
'); ?></code></pre>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<dl>
	<dt>...</dt>
	<dd>...</dd>
</dl>'); ?>
	</code></pre>
</section>