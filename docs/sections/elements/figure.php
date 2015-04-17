<section id="figure" class="section">

<h2 class="section-title">Figure <code>figure.less</code></h2>
<div class="row">
	<div class="column-1-3 column-center">
		<figure>
			<div class="media media-1">
				<img src="http://placehold.it/400/4BB3D6/FFFFFF" class="responsive">
			</div>
			<figcaption>Caption</figcaption>
		</figure>
	</div>
</div>

<pre class="language-less"><code class="language-less"><?php echo htmlentities('@figure-margin: 0;
@figure-padding: @gutter;
@figure-border: 1px solid @light-grey;

@figure-caption-margin: 10px 0px;
@figure-caption-font-family: @paragraph-font-family;
@figure-caption-font-weight: @paragraph-font-weight;
@figure-caption-font-size: @paragraph-font-size;
@figure-caption-color: @body-color;
@figure-caption-text-align: center;'); ?></code></pre>

<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<figure>
	<div class="media media-1">
		<img src="..." class="responsive">
	</div>
	<figcaption>Caption</figcaption>
</figure>'); ?></code></pre>

</section>