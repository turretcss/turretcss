<?php

$inputs = array(
array (
	'title' => 'Input Group',
	'code' => '<div class="input-group">
	<input type="text" placeholder="Enter Keyword...">
	<span class="input-group-button">
		<button class="button" type="submit">Submit</button>
	</span>
</div>',
),
array (
	'title' => 'Input Group Sizes',
	'code' => '<div class="input-group gutter-bottom">
	<input class="input-extra-large" type="text" placeholder="Input Group Extra Large">
	<span class="input-group-button input-group-button-extra-large">
		<button class="button" type="submit">Submit</button>
	</span>
</div>
<div class="input-group gutter-bottom">
	<input class="input-large" type="text" placeholder="Input Group Large">
	<span class="input-group-button input-group-button-large">
		<button class="button" type="submit">Submit</button>
	</span>
</div>
<div class="input-group gutter-bottom">
	<input class="input-medium" type="text" placeholder="Input Group Medium">
	<span class="input-group-button input-group-button-medium">
		<button class="button" type="submit">Submit</button>
	</span>
</div>
<div class="input-group gutter-bottom">
	<input class="input-small" type="text" placeholder="Input Group Small">
	<span class="input-group-button input-group-button-small">
		<button class="button" type="submit">Submit</button>
	</span>
</div>',
),
array (
'title' => 'Input Group Search',
	'code' => '<div class="input-group input-group-search">
	<input type="search" placeholder="Search">
	<span class="input-group-button">
		<button class="button" type="submit">Search</button>
	</span>
</div>',
),
);

?>

<section id="input-group" class="section">

<h2 class="section-title">Input Group<code>forms/input-group.less</code></h2>

<?php foreach ($inputs as $input) : ?>
	<h3 class="section-sub-title"><?php echo $input['title']; ?></h3>
	<form><?php echo $input['code']; ?></form>
	<pre class="language-markup"><code class="language-markup"><?php echo htmlentities($input['code']); ?></code></pre>
<?php endforeach; ?>

</section>