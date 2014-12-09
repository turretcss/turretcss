<section id="button" class="section">
	<h2 class="section-title">Button <code>button.less</code></h2>
	<p>Button styles are applied directly to the <code><?php echo htmlentities('<button>'); ?></code> element, button style and size modifiers do not require the <code>button</code> class added to the element.</p>
	<button>Button</button>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<button>Button</button>'); ?></code></pre>
	<h3 class="section-sub-title">Button Styles</h3>
	<button class="button">Button</button>
	<button class="button button-inverse">Inverse</button>
	<button class="button button-primary">Primary</button>
	<button class="button button-secondary">Secondary</button>
	<button class="button button-tertiary">Tertiary</button>
	<button class="button button-text">Text</button>
	<button class="button button-border">Border</button>
	<button class="button" disabled>disabled</button>
	
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<button class="button">Button</button>
<button class="button button-inverse">Inverse</button>
<button class="button button-primary">Primary</button>
<button class="button button-secondary">Secondary</button>
<button class="button button-tertiary">Tertiary</button>
<button class="button button-text">Text</button>
<button class="button button-border">Border</button>
<button class="button" disabled>disabled</button>'); ?></code></pre>
	
	<h3 class="section-sub-title">Button Sizes</h3>
	<button class="button button-small">Small</button>
	<button class="button button-medium">Medium</button>
	<button class="button button-large">Large</button>
	<button class="button button-extra-large">Extra Large</button>
	
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<button class="button button-small">Small</button>
<button class="button button-medium">Medium</button>
<button class="button button-large">Large</button>
<button class="button button-extra-large">Extra Large</button>'); ?></code></pre>
	
	<h3 class="section-sub-title">Button Block</h3>
	<button class="button button-block">Button Block</button>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<button class="button button-block">Button Block Primary</button>'); ?></code></pre>
	
	<h3 class="section-sub-title">Button Center</h3>
	<div class="row">
		<div class="column-1 text-center">
			<button class="button button-center">Button Center</button>
		</div>
	</div>
	<p><strong>Note:</strong> for <code>.button-center</code> to work the containing element needs to have <code>text-align: center;</code></p>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<button class="button button-center">Button Center</button>'); ?></code></pre>
	
</section>