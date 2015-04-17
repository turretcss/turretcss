<section id="button" class="section">
	<h2 class="section-title">Button <code>button.less</code></h2>
	<p>Button styles are applied directly to the <code><?php echo htmlentities('<button>'); ?></code> element, button style and size modifiers do not require the <code>button</code> class added to the element.</p>
	<button>Button</button>
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@button-padding-vertical: 12px;
@button-padding-horizontal: 15px;
@button-height: 40px;
@button-font-family: @bold-font-family;
@button-font-weight: @bold-font-weight;
@button-font-size: 1.4;
@button-color: @dark-grey;
@button-line-height: 1;
@button-text-align: center;
@button-text-transform: none;
@button-background: @light-grey;
@button-border: 1px solid darken(@button-background, 5%);

@button-hover-color: @dark-grey;
@button-hover-background: darken(@button-background, 10%);
@button-hover-border: 1px solid darken(@button-background, 15%);'); ?></code></pre>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<button>Button</button>'); ?></code></pre>
	
	<h3 class="section-sub-title">Button Styles</h3>
	<button class="button">Button</button>
	<button class="button button-inverse">Inverse</button>
	<button class="button button-primary">Primary</button>
	<button class="button button-secondary">Secondary</button>
	<button class="button button-tertiary">Tertiary</button>
	<button class="button button-border">Border</button>
	<button class="button button-text">Text</button>
<pre class="language-less"><code class="language-less"><?php echo htmlentities('@button-inverse-color: @light;
@button-inverse-background: @inverse;
@button-inverse-border: 1px solid darken(@inverse, 5%);
@button-inverse-hover-color: @button-inverse-color;
@button-inverse-hover-background: darken(@button-inverse-background, 10%);
@button-inverse-hover-border: 1px solid darken(@inverse, 15%);

@button-primary-color: @white;
@button-primary-background: @primary;
@button-primary-border: 1px solid darken(@primary, 5%);
@button-primary-hover-color: @button-primary-color;
@button-primary-hover-background: darken(@primary, 10%);
@button-primary-hover-border: 1px solid darken(@primary, 15%);

@button-secondary-color: @white;
@button-secondary-background: @secondary;
@button-secondary-border: 1px solid darken(@secondary, 5%);
@button-secondary-hover-color: @button-secondary-color;
@button-secondary-hover-background: darken(@secondary, 10%);
@button-secondary-hover-border: 1px solid darken(@secondary, 15%);

@button-tertiary-color: @white;
@button-tertiary-background: @tertiary;
@button-tertiary-border: 1px solid darken(@tertiary, 5%);
@button-tertiary-hover-color: @button-tertiary-color;
@button-tertiary-hover-background: darken(@tertiary, 10%);
@button-tertiary-hover-border: 1px solid darken(@tertiary, 5%);

@button-border-color: @dark;
@button-border-border: 1px solid @button-border-color;
@button-border-background: transparent;
@button-border-radius: @border-radius;
@button-border-hover-color: @white;
@button-border-hover-border: 1px solid @button-border-color;
@button-border-hover-background: @button-border-color;

@button-text-padding-horizontal: @button-padding-horizontal;
@button-text-color: @dark;
@button-text-hover-color: @primary;'); ?></code></pre>	
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<button class="button">Button</button>
<button class="button button-inverse">Inverse</button>
<button class="button button-primary">Primary</button>
<button class="button button-secondary">Secondary</button>
<button class="button button-tertiary">Tertiary</button>
<button class="button button-border">Border</button>
<button class="button button-text">Text</button>'); ?></code></pre>

	<h3 class="section-sub-title">Button Disabled</h3>
	<button class="button" disabled>Button</button>
	<button class="button button-inverse" disabled>Inverse</button>
	<button class="button button-primary" disabled>Primary</button>
	<button class="button button-secondary" disabled>Secondary</button>
	<button class="button button-tertiary" disabled>Tertiary</button>
	<button class="button button-border" disabled>Border</button>
	<button class="button button-text" disabled>Text</button>
<pre class="language-less"><code class="language-less"><?php echo htmlentities('@button-disabled-opacity: 0.5;'); ?></code></pre>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<button class="button" disabled>Button</button>
<button class="button button-inverse" disabled>Inverse</button>
<button class="button button-primary" disabled>Primary</button>
<button class="button button-secondary" disabled>Secondary</button>
<button class="button button-tertiary" disabled>Tertiary</button>
<button class="button button-border" disabled>Border</button>
<button class="button button-text" disabled>Text</button>'); ?></code></pre>

	<h3 class="section-sub-title">Button Indicators</h3>
	<button class="button error">Error</button>
	<button class="button warning">Warning</button>
	<button class="button success">Success</button>
	<button class="button info">Info</button>
<pre class="language-less"><code class="language-less"><?php echo htmlentities('@button-error-color: @white;
@button-error-background: @error;
@button-error-border: 1px solid darken(@error, 5%);
@button-error-hover-color: @button-error-color;
@button-error-hover-background: darken(@error, 10%);
@button-error-hover-border: 1px solid darken(@error, 15%);

@button-warning-color: @white;
@button-warning-background: @warning;
@button-warning-border: 1px solid darken(@warning, 5%);
@button-warning-hover-color: @button-warning-color;
@button-warning-hover-background: darken(@warning, 10%);
@button-warning-hover-border: 1px solid darken(@warning, 15%);

@button-success-color: @white;
@button-success-background: @success;
@button-success-border: 1px solid darken(@success, 5%);
@button-success-hover-color: @button-success-color;
@button-success-hover-background: darken(@success, 10%);
@button-success-hover-border: 1px solid darken(@success, 15%);

@button-info-color: @white;
@button-info-background: @info;
@button-info-border: 1px solid darken(@button-info-background, 5%);
@button-info-hover-color: @button-info-color;
@button-info-hover-background: darken(@button-info-background, 10%);
@button-info-hover-border: 1px solid darken(@info, 15%);'); ?></code></pre>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<button class="button error">Error</button>
<button class="button warning">Warning</button>
<button class="button success">Success</button>
<button class="button info">Info</button>'); ?></code></pre>
	
	<h3 class="section-sub-title">Button Sizes</h3>
	<button class="button button-small">Small</button>
	<button class="button button-medium">Medium</button>
	<button class="button button-large">Large</button>
	<button class="button button-extra-large">Extra Large</button>
<pre class="language-less"><code class="language-less"><?php echo htmlentities('@button-small-padding-vertical: 8px;
@button-small-padding-horizontal: 15px;
@button-small-height: 30px;
@button-small-font-size: 1;

@button-medium-padding-vertical: @button-padding-vertical;
@button-medium-padding-horizontal: @button-padding-horizontal;
@button-medium-height: @button-height;
@button-medium-font-size: @button-font-size;

@button-large-padding-vertical: 15px;
@button-large-padding-horizontal: 24px;
@button-large-height: 50px;
@button-large-font-size: 1.6;

@button-extra-large-padding-vertical: 20px;
@button-extra-large-padding-horizontal: 30px;
@button-extra-large-height: 65px;
@button-extra-large-font-size: 2;'); ?></code></pre>	
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<button class="button button-small">Small</button>
<button class="button button-medium">Medium</button>
<button class="button button-large">Large</button>
<button class="button button-extra-large">Extra Large</button>'); ?></code></pre>
	
	<h3 class="section-sub-title">Button Block</h3>
	<button class="button button-block">Button Block</button>
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@button-block-text-align: center;'); ?></code></pre>
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