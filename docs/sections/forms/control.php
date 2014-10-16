<?php

$controls = array(
array (
	'title' => 'Radio',
	'code' => '<label class="control radio">
	<input type="radio" name="radio">
	<span class="control-indicator"></span>
	<span class="control-label">Radio</span>
</label>',
),
array (
	'title' => 'Checkbox',
	'code' => '<label class="control checkbox">
	<input type="checkbox" name="checkbox">
	<span class="control-indicator"></span>
	<span class="control-label">Checkbox</span>
</label>',
),
);

$controls_default = array(
array (
	'title' => 'Radio',
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
	<?php foreach ($controls as $input) : ?>
		<h3 class="section-sub-title"><?php echo $input['title']; ?></h3>
		<form><?php echo $input['code']; ?></form>
		<pre class="language-markup"><code class="language-markup"><?php echo htmlentities($input['code']); ?></code></pre>
	<?php endforeach; ?>
	
	<h3 class="section-sub-title">Controls Default</h3>
	<div class="row">
		<?php foreach ($controls_default as $input) : ?>
			<div class="column-1-2">
				<form><?php echo $input['code']; ?></form>
				<pre class="language-markup"><code class="language-markup"><?php echo htmlentities($input['code']); ?></code></pre>
			</div>
		<?php endforeach; ?>
	</div>
	
	<h3 class="section-sub-title">Controls Inline</h3>
	<div class="row">
		<?php foreach ($controls_inline as $input) : ?>
			<div class="column-1-2">
				<form><?php echo $input['code']; ?></form>
				<pre class="language-markup"><code class="language-markup"><?php echo htmlentities($input['code']); ?></code></pre>
			</div>
		<?php endforeach; ?>
	</div>
	
</section>