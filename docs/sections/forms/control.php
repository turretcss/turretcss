<?php

$inputs = array(
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
?>

<section id="control" class="section">
	<h2 class="section-title">Control<code>forms/control.less</code></h2>
	<?php foreach ($inputs as $input) : ?>
		<h3 class="section-sub-title"><?php echo $input['title']; ?></h3>
		<form><?php echo $input['code']; ?></form>
		<pre class="language-markup"><code class="language-markup"><?php echo htmlentities($input['code']); ?></code></pre>
	<?php endforeach; ?>
</section>