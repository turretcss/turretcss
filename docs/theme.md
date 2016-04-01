---
layout: docs
title: Theme
page_title: Theme - Turret - A Responsive Front-end Framework for Accessible and Semantic Websites
description: Kitchen Sink of all HTML elements with Turret styles applied.
permalink: /docs/theme/
---
		
## Typography

<h1>Heading 1 <small>Heading 1 small</small></h1>
<h2>Heading 2 <small>Heading 2 small</small></h2>
<h3>Heading 3 <small>Heading 3 small</small></h3>
<h4>Heading 4 <small>Heading 4 small</small></h4>
<h5>Heading 5 <small>Heading 5 small</small></h5>
<h6>Heading 6 <small>Heading 6 small</small></h6>

<p><strong>strong</strong></p>

<p><em>emphasis</em></p>

<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur.</p>

<hr>

<blockquote>
	<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur.</p>
	<cite>Name</cite>
</blockquote>

<p class="pullout">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>

<ul>
	<li>Vehicula Dapibus Tellus Fermentum</li>
	<li>Vehicula Dapibus Tellus Fermentum</li>
	<li>Vehicula Dapibus Tellus Fermentum
		<ul>
			<li>Vehicula Dapibus Tellus Fermentum</li>
			<li>Vehicula Dapibus Tellus Fermentum</li>
		</ul>
	</li>
</ul>

<ol>
	<li>Vehicula Dapibus Tellus Fermentum</li>
	<li>Vehicula Dapibus Tellus Fermentum</li>
	<li>Vehicula Dapibus Tellus Fermentum
		<ol>
			<li>Vehicula Dapibus Tellus Fermentum</li>
			<li>Vehicula Dapibus Tellus Fermentum</li>
		</ol>
	</li>
</ol>

<dl>
	<dt>Fringilla Ipsum Tellus</dt>
	<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
	<dt>Fringilla Ipsum Tellus</dt>
	<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
	<dt>Fringilla Ipsum Tellus</dt>
	<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
</dl>

<code>&lt;p&gt;code&lt;/p&gt;</code>

<pre><code><code>&lt;p&gt;pre&lt;/p&gt;</code></code></pre>

<p>Save file: <kbd>cmd</kbd> + <kbd>S</kbd></p>

## Form

<form role="form">
	<fieldset>
		<legend>Login</legend>
		<label for="fieldset-email">Email</label>
		<input type="email" id="fieldset-email" placeholder="Enter Email">
		<label for="fieldset-password">Password</label>
		<input type="password" id="fieldset-password" placeholder="Enter Password">
		<button type="submit" class="button">Submit</button>
	</fieldset>
</form>

### Form Message

<p class="form-message">Form message</p>
<p class="form-message success">Form message success</p>
<p class="form-message error">Form message error</p>
<p class="form-message info">Form message warning</p>
<p class="form-message warning">Form message info</p>


### Input

<div>
	<label for="input-text">Text Input</label>
	<input type="text" id="input-text" placeholder="Text">
</div>
<div>
	<label for="input-inverse">Inverse Input</label>
	<input class="input-inverse" type="text" id="input-inverse" placeholder="Inverse">
</div>
<div>
	<label for="input-disabled">Disabled</label>
	<input type="text" id="input-disabled" placeholder="Disabled" disabled="">
</div>
<div>
	<label for="input-email">Email Input</label>
	<input type="email" id="input-email" placeholder="Email">
</div>
<div>
	<label for="input-search">Search Input</label>
	<input type="search" id="input-search" placeholder="Search">
</div>
<div>
	<label for="input-tel">Telephone Input</label>
	<input type="tel" id="input-tel" placeholder="Telephone">
</div>
<div>
	<label for="input-url">URL Input</label>
	<input type="url" id="input-url" placeholder="http://">
</div>
<div>
	<label for="input-password">Password Input</label>
	<input type="password" id="input-password" value="password">
</div>
<div>
	<label for="input-file">File Input</label>
	<input type="file" id="input-file">
</div>
<div>
	<label for="input-textarea">Textarea</label>
	<textarea id="input-textarea" cols="30" rows="5" placeholder="Textarea text"></textarea>
</div>
<div>
	<label for="input-number">Number Input</label>
	<input type="number" id="input-number" min="0" max="10" placeholder="Enter a number form 0 to 10">
</div>
<div>
	<label for="input-date">Date Input</label>
	<input type="date" id="input-date">
</div>
<div>
	<label for="input-month">Month Input</label>
	<input type="month" id="input-month">
</div>
<div>
	<label for="input-week">Week Input</label>
	<input type="week" id="input-week">
</div>
<div>
	<label for="input-datetime">Datetime Input</label>
	<input type="datetime" id="input-datetime" placeholder="Enter a datetime string">
</div>
<div>
	<label for="input-datetime-local">Datetime-local Input</label>
	<input type="datetime-local" id="input-datetime-local">
</div>
<div>
	<input id="input-checkbox" type="checkbox" name="checkbox" value="Checkbox Input">
	<label for="input-checkbox">Checkbox Input</label>
</div>
<div>
	<input id="input-radio" type="radio" name="radio" value="Radio Input">
	<label for="input-radio">Radio Input</label>
</div>

### Input Indicators

<div>
	<label for="error">Input Error</label>
	<input class="error" type="text" id="error" value="Input Error">
</div>
<div>
	<label for="warning">Input Warning</label>
	<input class="warning" type="text" id="warning" value="Input Warning">
</div>
<div>
	<label for="success">Input Success</label>
	<input class="success" type="text" id="success" value="Input Success">
</div>
<div>
	<label for="info">Input Info</label>
	<input class="info" type="text" id="info" value="Input Info">
</div>

### Input Sizes

<div>
	<input class="input-xlarge" type="text" placeholder="Input Extra Large">
</div>
<div>
	<input class="input-large" type="text" placeholder="Input Large">
</div>
<div>
	<input class="input-medium" type="text" placeholder="Input Medium">
</div>
<div>
	<input class="input-small" type="text" placeholder="Input Small">
</div>
<div>
	<input class="input-xsmall" type="text" placeholder="Input Extra Small">
</div>

### Input Group

<div class="input-group">
	<input type="text" placeholder="Enter Keyword...">
	<span class="input-group-button">
		<button class="button" type="submit">Submit</button>
	</span>
</div>

### Input Group Search

<div class="input-group input-group-search">
	<input type="search" placeholder="Search">
	<span class="input-group-button">
		<button class="button" type="submit">Search</button>
	</span>
</div>

### Input Group Sizes

<div class="input-group">
	<input class="input-xlarge" type="text" placeholder="Input Group Extra Large">
	<span class="input-group-button">
		<button class="button button-xlarge" type="submit">Submit</button>
	</span>
</div>
<div class="input-group">
	<input class="input-large" type="text" placeholder="Input Group Large">
	<span class="input-group-button">
		<button class="button button-large" type="submit">Submit</button>
	</span>
</div>
<div class="input-group">
	<input class="input-medium" type="text" placeholder="Input Group Medium">
	<span class="input-group-button">
		<button class="button button-medium" type="submit">Submit</button>
	</span>
</div>
<div class="input-group">
	<input class="input-small" type="text" placeholder="Input Group Small">
	<span class="input-group-button">
		<button class="button button-small" type="submit">Submit</button>
	</span>
</div>
<div class="input-group">
	<input class="input-xsmall" type="text" placeholder="Input Group Extra Small">
	<span class="input-group-button">
		<button class="button button-xsmall" type="submit">Submit</button>
	</span>
</div>

### Control

<div>
	<label class="control checkbox">
		<input type="checkbox" name="checkbox">
		<span class="control-indicator"></span>
		<span class="control-label">Checkbox</span>
	</label>
</div>

<div>
	<label class="control radio">
		<input type="radio" name="radio">
		<span class="control-indicator"></span>
		<span class="control-label">Radio</span>
	</label>
</div>

### Select

<div>
	<label class="select" for="select">
		<select id="select">
			<option>Select Field</option>
			<option value="1">Option 01</option>
			<option value="2">Option 02</option>
		</select>
	</label>
</div>

<div>
	<label class="select select-inverse" for="select-inverse">
		<select id="select-inverse">
			<option>Select Field</option>
			<option value="1">Option 01</option>
			<option value="2">Option 02</option>
		</select>
	</label>
</div>

### Select Sizes

<div>
	<label class="select select-xlarge" for="select-xlarge">
		<select id="select-xlarge">
			<option>Select Extra Large</option>
			<option value="1">Option 01</option>
			<option value="2">Option 02</option>
		</select>
	</label>
</div>
<div>
	<label class="select select-large" for="select-large">
		<select id="select-large">
			<option>Select Large</option>
			<option value="1">Option 01</option>
			<option value="2">Option 02</option>
		</select>
	</label>
</div>
<div>
	<label class="select select-medium" for="select-medium">
		<select id="select-medium">
			<option>Select Medium</option>
			<option value="1">Option 01</option>
			<option value="2">Option 02</option>
		</select>
	</label>
</div>
<div>
	<label class="select select-small" for="select-small">
		<select id="select-small">
			<option>Select Small</option>
			<option value="1">Option 01</option>
			<option value="2">Option 02</option>
		</select>
	</label>
</div>
<div>
	<label class="select select-xsmall" for="select-xsmall">
		<select id="select-xsmall">
			<option>Select Extra Small</option>
			<option value="1">Option 01</option>
			<option value="2">Option 02</option>
		</select>
	</label>
</div>

## Elements

### Button

<div>
	<button class="button">Button</button>
</div>

### Button Styles

<div>
	<button class="button">Button</button>
	<button class="button button-inverse">Inverse</button>
	<button class="button button-primary">Primary</button>
	<button class="button button-secondary">Secondary</button>
	<button class="button button-tertiary">Tertiary</button>
	<button class="button button-border">Border</button>
	<button class="button button-text">Text</button>
</div>

### Button Indicators

<div>
	<button class="button error">Error</button>
	<button class="button warning">Warning</button>
	<button class="button success">Success</button>
	<button class="button info">Info</button>
</div>

### Button Sizes

<div>
	<button class="button button-xlarge">Extra Large</button>
	<button class="button button-large">Large</button>
	<button class="button button-medium">Medium</button>
	<button class="button button-small">Small</button>
	<button class="button button-xsmall">Extra Small</button>
</div>

### Button Anchors

<div>
	<a class="button button-xlarge">Extra Large</a>
	<a class="button button-large">Large</a>
	<a class="button button-medium">Medium</a>
	<a class="button button-small">Small</a>
	<a class="button button-xsmall">Extra Small</a>
</div>

### Figure

<div>
	<figure>
		<div class="media media-16-9"></div>
		<figcaption>Figure Caption</figcaption>
	</figure>
</div>

### Nav

<div>
	<nav>
		<ul>
			<li><a href="#">Item 1</a></li>
			<li><a href="#">Item 2</a></li>
			<li><a href="#">Item 3</a></li>
			<li><a href="#">Item 4</a></li>
		</ul>
	</nav>
</div>

### Nav Inline

<div>
	<nav class="nav-inline">
		<ul>
			<li><a href="#">Item 1</a></li>
			<li><a href="#">Item 2</a></li>
			<li><a href="#">Item 3</a></li>
			<li><a href="#">Item 4</a></li>
		</ul>
	</nav>
</div>

### Table

<div>
	<table>
		<caption>Table Caption</caption>
		<thead>
			<tr>
				<th scope="col">Vestibulum Sem Ipsum</th>
				<th scope="col">Dolor Fringilla</th>
				<th scope="col">Amet Mattis</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Egestas Ipsum Nibh</td>
				<td>Magna Nullam</td>
				<td>Consectetur Euismod</td>
			</tr>
			<tr>
				<td>Egestas Ipsum Nibh</td>
				<td>Magna Nullam</td>
				<td>Consectetur Euismod</td>
			</tr>
			<tr>
				<td>Egestas Ipsum Nibh</td>
				<td>Magna Nullam</td>
				<td>Consectetur Euismod</td>
			</tr>
		</tbody>
	</table>
</div>

### Table Responsive

<div class="table-responsive">
	<table>
		<thead>
			<tr>
				<th scope="col">Vestibulum Sem Ipsum</th>
				<th scope="col">Dolor Fringilla</th>
				<th scope="col">Amet Mattis</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Egestas Ipsum Nibh</td>
				<td>Magna Nullam</td>
				<td>Consectetur Euismod</td>
			</tr>
			<tr>
				<td>Egestas Ipsum Nibh</td>
				<td>Magna Nullam</td>
				<td>Consectetur Euismod</td>
			</tr>
			<tr>
				<td>Egestas Ipsum Nibh</td>
				<td>Magna Nullam</td>
				<td>Consectetur Euismod</td>
			</tr>
		</tbody>
	</table>
</div>