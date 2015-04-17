<?php

$inputs = array(
array (
	'title' => 'Select Field',
	'definition' => '@select-margin: @input-margin;
@select-padding: 0px 12px;
@select-height: @input-height;
@select-font-family: @input-font-family;
@select-font-size: @input-font-size;
@select-color: @input-color;
@select-background: @input-background;
@select-border: @input-border;
@select-border-radius: @border-radius;

@select-arrow-size: 5px;
@select-arrow-background: @primary;',
	'code' => '<label class="select" for="select">
	<select id="select">
		<option>Select Field</option>
		<option value="1">Option 01</option>
		<option value="2">Option 02</option>
	</select>
</label>',
),
array (
	'title' => 'Inverse Select Field',
	'definition' => '@select-inverse-color: @input-inverse-color;
@select-inverse-border: @input-inverse-border;
@select-inverse-background: @input-inverse-background;
@select-inverse-arrow-background: @select-arrow-background;',
	'code' => '<label class="select select-inverse" for="select-inverse">
	<select id="select-inverse">
		<option>Select Field</option>
		<option value="1">Option 01</option>
		<option value="2">Option 02</option>
	</select>
</label>',
),
);
?>

<section id="select" class="section">
	<h2 class="section-title">Select<code>forms/select.less</code></h2>
	
	<?php foreach ($inputs as $input) : ?>
		<h3 class="section-sub-title"><?php echo $input['title']; ?></h3>
		<form><?php echo $input['code']; ?></form>
		<?php if ($input['definition']) : ?>
			<pre class="language-less"><code class="language-less"><?php echo htmlentities($input['definition']); ?></code></pre>
		<?php endif; ?>
		<pre class="language-markup"><code class="language-markup"><?php echo htmlentities($input['code']); ?></code></pre>
	<?php endforeach; ?>
	
	<h3 class="section-sub-title">Select Sizes</h3>
	<form>
		<label class="select select-extra-large" for="select-extra-large">
			<select id="select-extra-large">
				<option>Select Extra Large</option>
				<option value="1">Option 01</option>
				<option value="2">Option 02</option>
			</select>
		</label>
		<label class="select select-large" for="select-large">
			<select id="select-large">
				<option>Select Large</option>
				<option value="1">Option 01</option>
				<option value="2">Option 02</option>
			</select>
		</label>
		<label class="select select-medium" for="select-medium">
			<select id="select-medium">
				<option>Select Medium</option>
				<option value="1">Option 01</option>
				<option value="2">Option 02</option>
			</select>
		</label>
		<label class="select select-small" for="select-small">
			<select id="select-small">
				<option>Select Small</option>
				<option value="1">Option 01</option>
				<option value="2">Option 02</option>
			</select>
		</label>
	</form>

<pre class="language-less"><code class="language-less"><?php echo htmlentities('@select-small-padding: 0px 10px;
@select-small-height: @input-small-height;
@select-small-font-size: @input-small-font-size;

@select-medium-padding: @select-padding;
@select-medium-height: @select-height;
@select-medium-font-size: @select-font-size;

@select-large-padding: 0px 20px;
@select-large-height: @input-large-height;
@select-large-font-size: @input-large-font-size;

@select-extra-large-padding: 0px 25px;
@select-extra-large-height: @input-extra-large-height;
@select-extra-large-font-size: @input-extra-large-font-size;'); ?></code></pre>

<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<label class="select select-extra-large" for="select-extra-large">
	<select id="select-extra-large">
		<option>Select Extra Large</option>
		<option value="1">Option 01</option>
		<option value="2">Option 02</option>
	</select>
</label>
<label class="select select-large" for="select-large">
	<select id="select-large">
		<option>Select Large</option>
		<option value="1">Option 01</option>
		<option value="2">Option 02</option>
	</select>
</label>
<label class="select select-medium" for="select-medium">
	<select id="select-medium">
		<option>Select Medium</option>
		<option value="1">Option 01</option>
		<option value="2">Option 02</option>
	</select>
</label>
<label class="select select-small" for="select-small">
	<select id="select-small">
		<option>Select Small</option>
		<option value="1">Option 01</option>
		<option value="2">Option 02</option>
	</select>
</label>'); ?></code></pre>
</section>