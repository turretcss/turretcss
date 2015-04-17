<?php


$inputs = array(
array (
	'title' => 'Text Input',
	'code' => '<label for="text">Text Input</label>
<input type="text" id="text" placeholder="Text">',
),
array (
	'title' => 'Inverse Input',
	'definition' => '@input-inverse-color: @white;
@input-inverse-border: none;
@input-inverse-background: @inverse;
@input-inverse-focus-color: @input-inverse-color;
@input-inverse-focus-border: @input-inverse-border;
@input-inverse-focus-background: darken(@input-inverse-background, 2%);',
	'code' => '<label for="inverse">Inverse Input</label>
<input class="input-inverse" type="text" id="inverse" placeholder="Inverse">',
),
array (
	'title' => 'Disabled Input',
	'definition' => '@input-disabled-background: @light;
@input-disabled-border: 1px solid darken(@light, 10%);
@input-disabled-color: @light;',
	'code' => '<label for="disabled">Disabled</label>
<input type="text" id="disabled" placeholder="Disabled" disabled>',
),
array (
	'title' => 'Email Input',
	'code' => '<label for="email">Email Input</label>
<input type="email" id="email" placeholder="Email" />',
),
array (
	'title' => 'Search Input',
	'definition' => '@input-search-border-radius: 20px;',
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
	'title' => 'File Input',
	'code' => '<label for="file">File Input</label>
<input type="file" id="file">',
),
array (
	'title' => 'Textarea',
	'code' => '<label>Textarea</label>
<textarea cols="30" rows="5" placeholder="Textarea text"></textarea>',
),
/*
array (
	'title' => 'Color Input',
	'code' => '<label for="color">Color Input</label>
<input type="color" id="color">',
),
*/
array (
	'title' => 'Number Input',
	'code' => '<label for="number">Number Input</label>
<input type="number" id="number" min="0" max="10">',
),
/*
array (
	'title' => 'Range Input',
	'code' => '<label for="range">Range Input</label>
<input type="range" id="range">',
),
*/
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
array (
	'title' => 'Checkbox Input',
	'code' => '<input id="checkbox" type="checkbox" name="checkbox" value="Checkbox Input">
<label for="checkbox">Checkbox Input</label>',
),
array (
	'title' => 'Radio Input',
	'code' => '<input id="radio" type="radio" name="radio" value="Radio Input">
<label for="radio">Radio Input</label>',
),
);

$inputs_states = array(
array (
	'title' => 'Input Error',
	'definition' => '@input-error-color: @error;',
	'code' => '<label for="error">Input Error</label>
<input class="error" type="text" id="error" value="Input Error">',
),
array (
	'title' => 'Input Warning',
	'definition' => '@input-warning-color: @warning;',
	'code' => '<label for="warning">Input Warning</label>
<input class="warning" type="text" id="warning" value="Input Warning">',
),
array (
	'title' => 'Input Success',
	'definition' => '@input-success-color: @success;',
	'code' => '<label for="success">Input Success</label>
<input class="success" type="text" id="success" value="Input Success">',
),
array (
	'title' => 'Input Info',
	'definition' => '@input-info-color: @info;',
	'code' => '<label for="info">Input Info</label>
<input class="info" type="text" id="info" value="Input Info">',
),
);

?>

<section id="input" class="section">
	<h2 class="section-title">Input<code>forms/input.less</code></h2>
	
	<pre class="language-less"><code class="language-less"><?php echo htmlentities('@input-height: 40px;
@input-margin: @label-margin;
@input-padding: 8px 12px;
@input-color: @body-color;
@input-font-family: @regular-font-family;
@input-font-weight: @regular-font-weight;
@input-font-size: @font-size-medium;
@input-line-height: @line-height;
@input-background: @white;
@input-border: 1px solid @input-border-color;
@input-border-color: @light-grey;
@input-border-radius: @border-radius;

@input-focus-border: 1px solid darken(@input-border-color, 15%);
@input-focus-background: darken(@input-background, 2%);

@input-placeholder-color: @input-color;
@input-placeholder-font-size: @input-font-size;
@input-placeholder-font-family: @input-font-family;
@input-placeholder-line-height: @input-line-height;
@input-placeholder-letter-spacing: 0px;
@input-placeholder-text-transform: none;'); ?></code></pre>

	<h3 class="section-sub-title">Input Types</h3>
	<?php foreach ($inputs as $input) : ?>
		<form class="gutter-top"><?php echo $input['code']; ?></form>
		<?php if ($input['definition']) : ?>
			<pre class="language-less"><code class="language-less"><?php echo htmlentities($input['definition']); ?></code></pre>
		<?php endif; ?>
		<pre class="language-markup"><code class="language-markup"><?php echo htmlentities($input['code']); ?></code></pre>
	<?php endforeach; ?>
	
	<h3 class="section-sub-title">Input States</h3>
	
	<?php foreach ($inputs_states as $input) : ?>
		<form class="gutter-top"><?php echo $input['code']; ?></form>
		<pre class="language-less"><code class="language-less"><?php echo htmlentities($input['definition']); ?></code></pre>
		<pre class="language-markup"><code class="language-markup"><?php echo htmlentities($input['code']); ?></code></pre>
	<?php endforeach; ?>

	<h3 class="section-sub-title">Input Sizes</h3>
	
<form>
	<input class="input-extra-large gutter-bottom" type="text" placeholder="Input Extra Large">
	<input class="input-large gutter-bottom" type="text" placeholder="Input Large">
	<input class="input-medium gutter-bottom" type="text" placeholder="Input Medium">
	<input class="input-small gutter-bottom" type="text" placeholder="Input Small">
</form>

<pre class="language-less"><code class="language-less"><?php echo htmlentities('@input-small-height: 30px;
@input-small-padding: 10px;
@input-small-font-size: @font-size-small;

@input-medium-height: @input-height;
@input-medium-padding: @input-padding;
@input-medium-font-size: @input-font-size;

@input-large-height: 50px;
@input-large-padding: 10px 20px;
@input-large-font-size: @font-size-large;

@input-extra-large-height: 65px;
@input-extra-large-padding: 10px 25px;
@input-extra-large-font-size: @font-size-extra-large;'); ?></code></pre>

<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<input class="input-extra-large" type="text" placeholder="Input Extra Large">
<input class="input-large" type="text" placeholder="Input Large">
<input class="input-medium" type="text" placeholder="Input Medium">
<input class="input-small" type="text" placeholder="Input Small">'); ?></code></pre>
</section>