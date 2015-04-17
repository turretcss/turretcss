<?php

$controls = array(
array (
	'title' => 'Radio',
	'definition' => '@radio-border-radius: 50%;',
	'code' => '<label class="control radio">
	<input type="radio" name="radio">
	<span class="control-indicator"></span>
	<span class="control-label">Radio</span>
</label>
<label class="control radio">
	<input type="radio" name="radio">
	<span class="control-indicator"></span>
	<span class="control-label">Radio</span>
</label>
<label class="control radio">
	<input type="radio" name="radio">
	<span class="control-indicator"></span>
	<span class="control-label">Radio</span>
</label>',
),
array (
	'title' => 'Checkbox',
	'definition' => '@checkbox-border-radius: none;',
	'code' => '<label class="control checkbox">
	<input type="checkbox" name="checkbox">
	<span class="control-indicator"></span>
	<span class="control-label">Checkbox</span>
</label>
<label class="control checkbox">
	<input type="checkbox" name="checkbox">
	<span class="control-indicator"></span>
	<span class="control-label">Checkbox</span>
</label>
<label class="control checkbox">
	<input type="checkbox" name="checkbox">
	<span class="control-indicator"></span>
	<span class="control-label">Checkbox</span>
</label>',
),
);

$controls_inline = array(
array (
	'title' => 'Radio',
	'code' => '<label class="control control-inline radio">
	<input type="radio" name="radio">
	<span class="control-indicator"></span>
	<span class="control-label">Radio</span>
</label>
<label class="control control-inline radio">
	<input type="radio" name="radio">
	<span class="control-indicator"></span>
	<span class="control-label">Radio</span>
</label>
<label class="control control-inline radio">
	<input type="radio" name="radio">
	<span class="control-indicator"></span>
	<span class="control-label">Radio</span>
</label>',
),
array (
	'title' => 'Checkbox',
	'code' => '<label class="control control-inline checkbox">
	<input type="checkbox" name="checkbox">
	<span class="control-indicator"></span>
	<span class="control-label">Checkbox</span>
</label>
<label class="control control-inline checkbox">
	<input type="checkbox" name="checkbox">
	<span class="control-indicator"></span>
	<span class="control-label">Checkbox</span>
</label>
<label class="control control-inline checkbox">
	<input type="checkbox" name="checkbox">
	<span class="control-indicator"></span>
	<span class="control-label">Checkbox</span>
</label>',
),
);
?>

<section id="control" class="section">
	<h2 class="section-title">Control<code>forms/control.less</code></h2>
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@control-margin: @label-margin;
@control-padding: 0px 0px 0px 1.5em;
@control-color: @input-color;

@control-indicator-size: 16px;
@control-indicator-color: @primary;
@control-indicator-background: @input-background;
@control-indicator-border: @input-border;

@control-indicator-checked-background: @primary;
@control-indicator-checked-border: 1px solid @primary;
@control-label-checked-color: @control-label-color;

@control-label-margin: 0px 0px 0px 10px;
@control-label-font-family: @label-font-family;
@control-label-font-size: @label-font-size;
@control-label-color: @label-color;
@control-label-line-height: 1.5;'); ?></code></pre>
	<?php foreach ($controls as $input) : ?>
		<h3 class="section-sub-title"><?php echo $input['title']; ?></h3>
		<form><?php echo $input['code']; ?></form>
		<?php if ($input['definition']) : ?>
			<pre class="language-less"><code class="language-less"><?php echo htmlentities($input['definition']); ?></code></pre>
		<?php endif; ?>
		<pre class="language-markup"><code class="language-markup"><?php echo htmlentities($input['code']); ?></code></pre>
	<?php endforeach; ?>

	<h3 class="section-sub-title">Controls Inline</h3>
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@control-inline-margin-right: 20px;'); ?></code></pre>
	<div class="row">
		<?php foreach ($controls_inline as $input) : ?>
			<div class="column-1-2">
				<form><?php echo $input['code']; ?></form>
				<pre class="language-markup"><code class="language-markup"><?php echo htmlentities($input['code']); ?></code></pre>
			</div>
		<?php endforeach; ?>
	</div>
	
</section>