<?php

$inputs = array(
array (
	'title' => 'Select Field',
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
	'code' => '<label class="select select-inverse" for="select-inverse">
	<select id="select-inverse">
		<option>Select Field</option>
		<option value="1">Option 01</option>
		<option value="2">Option 02</option>
	</select>
</label>',
),
array (
	'title' => 'Large Select Field',
	'code' => '<label class="select select-large" for="select-large">
	<select id="select-large">
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
		<pre class="language-markup"><code class="language-markup"><?php echo htmlentities($input['code']); ?></code></pre>
	<?php endforeach; ?>
</section>