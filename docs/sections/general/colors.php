<section id="colors" class="section">
	<h2 class="section-title">Colours</h2>
	
	<h3 class="section-sub-title">Shades</h3>
	<div class="swatches">
		<div class="swatch background-white"><small>White</small></div>
		<div class="swatch background-light-grey"><small>Light Grey</small></div>
		<div class="swatch background-grey"><small>Grey</small></div>
		<div class="swatch background-dark-grey"><small>Dark Grey</small></div>
		<div class="swatch background-black"><small>Black</small></div>
	</div>

	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@white: #FFFFFF;
@black: #000000;
@light-grey: #CCD1D9;
@grey: #656D78;
@dark-grey: #434A54;'); ?>
	</code></pre>

	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="background-white">...</div>
<div class="background-light-grey">...</div>
<div class="background-grey">...</div>
<div class="background-dark-grey">...</div>
<div class="background-black">...</div>'); ?>
	</code></pre>

	<!-- Indicators -->
	<h3 class="section-sub-title">Indicators</h3>
	<div class="swatches">
		<div class="swatch background-info"><small>Info</small></div>
		<div class="swatch background-error"><small>Error</small></div>
		<div class="swatch background-warning"><small>Warning</small></div>
		<div class="swatch background-success"><small>Success</small></div>
	</div>

	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@info: #3BAFDA;
@error: #DA4453;
@warning: #F6BB42;
@success: #2ECC71;'); ?>
	</code></pre>
	
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="background-info">...</div>
<div class="background-error">...</div>
<div class="background-warning">...</div>
<div class="background-success">...</div>'); ?>
	</code></pre>

	<!-- Palette -->
	<h3 class="section-sub-title">Palette</h3>
	<div class="swatches">
		<div class="swatch background-light"><small>Light</small></div>
		<div class="swatch background-primary"><small>Primary</small></div>
		<div class="swatch background-secondary"><small>Secondary</small></div>
		<div class="swatch background-tertiary"><small>Tertiary</small></div>
		<div class="swatch background-dark"><small>Dark</small></div>
	</div>

	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@light: #F5F7FA;
@dark: @dark-grey;
@primary: #4BB3D6;
@secondary: #967ADC;
@tertiary: #D770AD;'); ?>
	</code></pre>
	
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="background-light">...</div>
<div class="background-primary">...</div>
<div class="background-secondary">...</div>
<div class="background-tertiary">...</div>
<div class="background-dark">...</div>'); ?>
	</code></pre>
	
	<!-- Text Colors -->
	<h3 class="section-sub-title">Text Colors</h3>
	
	<p class="text-color text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	<p class="text-color text-light-grey">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	<p class="text-color text-grey">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	<p class="text-color text-dark-grey">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	<p class="text-color text-black">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	
	<p class="text-color text-error">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	<p class="text-color text-warning">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	<p class="text-color text-success">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	<p class="text-color text-info">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	
	<p class="text-color text-light">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	<p class="text-color text-primary">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	<p class="text-color text-secondary">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	<p class="text-color text-tertiary">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	<p class="text-color text-dark">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<p class="text-white">...</p>
<p class="text-light-grey">...</p>
<p class="text-grey">...</p>
<p class="text-dark-grey">...</p>
<p class="text-black">...</p>
<p class="text-error">...</p>
<p class="text-warning">...</p>
<p class="text-success">...</p>
<p class="text-info">...</p>
<p class="text-light">...</p>
<p class="text-primary">...</p>
<p class="text-secondary">...</p>
<p class="text-tertiary">...</p>
<p class="text-dark">...</p>'); ?>
	</code></pre>
	
</section>