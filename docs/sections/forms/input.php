<?php


$inputs = array(
array (
	'title' => 'Text Input',
	'code' => '<label for="text">Text Input</label>
<input type="text" id="text" placeholder="Text">',
),
array (
	'title' => 'Required Input',
	'code' => '<label for="required">Required Input<span class="required">*</span></label>
<input type="text" id="required" placeholder="Required" required>',
),
array (
	'title' => 'Disabled Input',
	'code' => '<label for="disabled">Disabled</label>
<input type="text" id="disabled" placeholder="Disabled" disabled>',
),
array (
	'title' => 'Input Error',
	'code' => '<label for="error">Input Error</label>
<input class="form-input error" type="text" id="error" placeholder="Error">',
),
array (
	'title' => 'Email Input',
	'code' => '<label for="email">Email Input</label>
<input type="email" id="email" placeholder="Email" />',
),
array (
	'title' => 'Search Input',
	'code' => '<label for="search">Search Input</label>
<input type="search" id="search" placeholder="Search" />',
),
array (
	'title' => 'Telephone Input',
	'code' => '<label for="tel">Telephone Input</label>
<input type="tel" id="tel" placeholder="Telephone" />',
),
array (
	'title' => 'URL Input',
	'code' => '<label for="url">URL Input</label>
<input type="url" id="url" placeholder="http://" />',
),
array (
	'title' => 'Password Input',
	'code' => '<label for="password">Password Input</label>
<input type="password" id="password" value="password">',
),
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
array (
	'title' => 'File Input',
	'code' => '<label for="file">File Input</label>
<input type="file" id="file">',
),
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
	'title' => 'Textarea',
	'code' => '<label>Textarea</label>
<textarea cols="30" rows="5" placeholder="Textarea text"></textarea>',
),
array (
	'title' => 'Color Input',
	'code' => '<label for="color">Color Input</label>
<input type="color" id="color">',
),
array (
	'title' => 'Number Input',
	'code' => '<label for="number">Number Input</label>
<input type="number" id="number" min="0" max="10">',
),
array (
	'title' => 'Range Input',
	'code' => '<label for="range">Range Input</label>
<input type="range" id="range">',
),
array (
	'title' => 'Date Input',
	'code' => '<label for="date">Date Input</label>
<input type="date" id="date">',
),
array (
	'title' => 'Month Input',
	'code' => '<label for="month">Month Input</label>
<input type="month" id="month">',
),
array (
	'title' => 'Week Input',
	'code' => '<label for="week">Week Input</label>
<input type="week" id="week">',
),
array (
	'title' => 'Datetime Input',
	'code' => '<label for="datetime">Datetime Input</label>
<input type="datetime" id="datetime">',
),
array (
	'title' => 'Datetime-local Input',
	'code' => '<label for="datetime-local">Datetime-local Input</label>
<input type="datetime-local" id="datetime-local">',
),
);
?>

<section id="input" class="section">
	<h2 class="section-title">Input<code>forms/input.less</code></h2>
	<?php foreach ($inputs as $input) : ?>
		<h3 class="section-sub-title"><?php echo $input['title']; ?></h3>
		<form><?php echo $input['code']; ?></form>
		<pre class="language-markup"><code class="language-markup"><?php echo htmlentities($input['code']); ?></code></pre>
	<?php endforeach; ?>
	
	<h3 class="section-sub-title">Input Sizes</h3>
<form>
	<input class="input-large" type="text" placeholder="Input Large">
	<input class="input-medium" type="text" placeholder="Input Medium">
	<input class="input-small" type="text" placeholder="Input Small">
</form>
	
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<input class="input-large" type="text" placeholder="Input Large">
<input class="input-medium" type="text" placeholder="Input Medium">
<input class="input-small" type="text" placeholder="Input Small">'); ?></code></pre>
</section>