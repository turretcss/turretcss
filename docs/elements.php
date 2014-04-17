<?php include('includes/head.php'); ?>

<div class="page-header" style="height:200px;">
	<div class="container">
		<div class="page-header-content column-1"><h1 class="page-title">elements</h1></div>
	</div>
</div>

<div id="elements" class="content">
<div class="container">
<div class="row">

<div class="column-1-4">
	<div class="side-nav">
		<ul>
			<li><a href="#tags">Tags</a></li>
			<li><a href="#alerts">Alerts</a></li>
			<li><a href="#buttons">Buttons</a></li>
			<li><a href="#images">Images</a></li>
			<li><a href="#figure">Figure</a></li>
			<li><a href="#forms">Forms</a></li>
			<li><a href="#search">Search</a></li>
			<li><a href="#breadcrumbs">Breadcrumbs</a></li>
			<li><a href="#video">Video</a></li>
			<li><a href="#tables">Tables</a></li>
		</ul>
	</div>
</div>

<div class="column-3-4">

<!-- Tags -->
<div class="panel">
	<h2 id="tags" class="section-title">Tags</h2>
	<span class="tag">Tag</span>
	<span class="tag active">Tag</span>
	<div class="clearfix"></div>
<pre><code class="hljs html"><?php echo htmlentities('<span class="tag">Tag</span>
<span class="tag active">Tag</span>'); ?></code></pre>
</div>

<!-- Alerts -->
<div class="panel">
<h2 id="alerts" class="section-title">Alerts</h2>
<h3 class="section-sub-title">Default Styles</h3>
<div class="alert alert-info">Alert Info</div>
<div class="alert alert-warning">Alert Warning</div>
<div class="alert alert-error">Alert Error</div>
<div class="alert alert-success">Alert Success</div>
<pre><code class="hljs html"><?php echo htmlentities('<div class="alert alert-info">Alert Info</div>
<div class="alert alert-warning">Alert Warning</div>
<div class="alert alert-error">Alert Error</div>
<div class="alert alert-success">Alert Success</div>'); ?></code></pre>

<h3 class="section-sub-title">Block Styles</h3>
<div class="alert alert-block alert-info">Alert Info</div>
<div class="alert alert-block alert-warning">Alert Warning</div>
<div class="alert alert-block alert-error">Alert Error</div>
<div class="alert alert-block alert-success">Alert Success</div>
<pre><code class="hljs html"><?php echo htmlentities('<div class="alert alert-block alert-info">Alert Info</div>
<div class="alert alert-block alert-warning">Alert Warning</div>
<div class="alert alert-block alert-error">Alert Error</div>
<div class="alert alert-block alert-success">Alert Success</div>'); ?></code></pre>
</div>

<!-- Buttons -->
<div class="panel">
<h2 id="buttons" class="section-title">Buttons</h2>
<h3 class="section-sub-title">Button Styles</h3>
<button class="button">Button</button>
<button class="button button-primary">Primary</button>
<button class="button button-inverse">Inverse</button>
<button class="button button-text">Text</button>
<button class="button" disabled>disabled</button>

<pre><code class="hljs html"><?php echo htmlentities('<button class="button">Button</button>
<button class="button button-primary">Primary</button>
<button class="button button-inverse">Dark</button>
<button class="button button-text">Text</button>
<button class="button" disabled>disabled</button>'); ?></code></pre>

<h3 class="section-sub-title">Button Sizes</h3>
<button class="button button-small button-primary">Small</button>
<button class="button button-medium button-primary">Medium</button>
<button class="button button-large button-primary">Large</button>

<pre><code class="hljs html"><?php echo htmlentities('<button class="button button-small primary">Small</button>
<button class="button button-medium button-primary">Medium</button>
<button class="button button-large button-primary">Large</button>'); ?></code></pre>

<h3 class="section-sub-title">Button Block</h3>
<div class="row">
	<div class="column-1">
		<button class="button button-block button-primary">Button Block Primary</button>
	</div>
</div>

<pre><code class="hljs html"><?php echo htmlentities('<button class="button button-block button-primary">Button Block Primary</button>'); ?></code></pre>

<h3 class="section-sub-title">Button Action</h3>
<div class="row">
	<div class="column-1">
		<button class="button button-block button-primary button-action">Button Block Primary Action</button>
	</div>
</div>

<pre><code class="hljs html"><?php echo htmlentities('<button class="button button-block button-primary button-action">Button Block Primary Action</button>'); ?></code></pre>
</div>

<!-- Images -->
<div class="panel">
<h2 id="images" class="section-title">Images</h2>
<h3 class="section-sub-title">Responsive Images</h3>
<div class="row">
	<div class="column-1"><img src="http://placehold.it/800x200" class="responsive" /></div>
</div>
<pre><code class="hljs html"><?php echo htmlentities('<div class="column-1"><img src="..." class="responsive" /></div>'); ?></code></pre>

<h3 class="section-sub-title">Image Styles</h3>
<div class="row">
	<div class="column-1-3"><img src="http://placehold.it/200x200" class="thumbnail" style="display:block; margin: auto;" /></div>
	<div class="column-1-3"><img src="http://placehold.it/200x200" class="rounded" style="display:block; margin: auto;" /></div>
	<div class="column-1-3"><img src="http://placehold.it/200x200" class="circle" style="display:block; margin: auto;" /></div>
</div>

<pre><code class="hljs html"><?php echo htmlentities('<img src="..." class="thumbnail" />
<img src="..." class="rounded" />
<img src=".." class="circle" />'); ?></code></pre>

<h3 class="section-sub-title">Image Placeholder</h3>
<p>Available Ratios: 1-2, 9-16, 9-14, 2-3, 3-4, 1-1, 4-3, 3-2, 16-9, 2-1</p>
<div class="row">
	<div class="column-1">
		<div class="image-placeholder 16-9"></div>
	</div>
</div>
<pre><code class="hljs html"><?php echo htmlentities('<div class="image-placeholder 16-9"><img src="..." /></div>'); ?></code></pre>
</div>

<!-- Figure -->
<div class="panel">
<h2 id="images" class="section-title">Figure</h2>
<div class="row">
	<div class="column-1-3 column-offset-1-3">
		<figure>
			<img src="http://placehold.it/200" class="responsive"/>
			<figcaption>Caption</figcaption>
		</figure>
	</div>
</div>
<pre><code class="hljs html"><?php echo htmlentities('<figure>
	<img src="http://placehold.it/200"/>
	<figcaption>Caption</figcaption>
</figure>'); ?></code></pre>
</div>


<!-- Forms -->
<div class="panel">
<h2 id="forms" class="section-title">Forms</h2>
<h3 class="section-sub-title">Form Inputs</h3>
<form>
	<div class="form-input-group">
		<label for="text">Text Input</label>
		<input class="form-input" type="text" id="text" placeholder="Text">
	</div>
	<div class="form-input-group">
		<label for="required">Required Input<span class="required">*</span></label>
		<input class="form-input" type="text" id="required" placeholder="Required" required>
	</div>
	<div class="form-input-group">
		<label for="disabled">Disabled</label>
		<input class="form-input" type="text" id="disabled" placeholder="Disabled" disabled>
	</div>
	<div class="form-input-group">
		<label for="error">Input Error</label>
		<input class="form-input error" type="text" id="error" placeholder="Error">
	</div>
	<div class="form-input-group">
		<label for="email">Email Input</label>
		<input class="form-input" type="email" id="email" placeholder="Email" />
	</div>
	<div class="form-input-group">
		<label for="search">Search Input</label>
		<input class="form-input" type="search" id="search" placeholder="Search" />
	</div>
	<div class="form-input-group">
		<label for="tel">Telephone Input</label>
		<input class="form-input" type="tel" id="tel" placeholder="Telephone" />
	</div>
	<div class="form-input-group">
		<label for="url">URL Input</label>
		<input class="form-input" type="url" id="url" placeholder="http://" />
	</div>
	<div class="form-input-group">
		<label for="password">Password Input</label>
		<input class="form-input" type="password" id="password" value="password">
	</div>
	<div class="form-input-group">
		<label>
			<input class="form-input" type="radio"> Radio
		</label>
	</div>
	<div class="form-input-group">
		<label>
			<input class="form-input" type="checkbox"> Checkbox
		</label>
	</div>
	<div class="form-input-group">
		<label for="file">File Input</label>
		<input class="form-input" type="file" id="file">
	</div>
	<div class="form-input-group">
		<label for="select">Select Field</label>
		<select id="select">
			<option>Option 01</option>
			<option>Option 02</option>
		</select>
	</div>
	<div class="form-input-group">
		<label>Textarea</label>
		<textarea class="form-input" cols="30" rows="5" class="span6">Textarea text</textarea>
	</div>
	<div class="form-input-group">
		<label for="color">Color Input</label>
		<input type="color" id="color">
	</div>
	<div class="form-input-group">
		<label for="number">Number Input</label>
		<input class="form-input" type="number" id="number" min="0" max="10">
	</div>
	<div class="form-input-group">
		<label for="range">Range Input</label>
		<input class="form-input" type="range" id="range">
	</div>
	<div class="form-input-group">
		<label for="date">Date Input</label>
		<input class="form-input" type="date" id="date">
	</div>
	<div class="form-input-group">
		<label for="month">Month Input</label>
		<input class="form-input" type="month" id="month">
	</div>
	<div class="form-input-group">
		<label for="week">Week Input</label>
		<input class="form-input" type="week" id="week">
	</div>
	<div class="form-input-group">
		<label for="datetime">Datetime Input</label>
		<input class="form-input" type="datetime" id="datetime">
	</div>
	<div class="form-input-group">
		<label for="datetime-local">Datetime-local Input</label>
		<input class="form-input" type="datetime-local" id="datetime-local">
	</div>
</form>

<pre><code class="hljs html"><?php echo htmlentities('<form>
	<div class="form-input-group">
		<label for="text">Text Input</label>
		<input class="form-input" type="text" id="text" placeholder="Text">
	</div>
	<div class="form-input-group">
		<label for="required">Required Input<span class="required">*</span></label>
		<input class="form-input" type="text" id="required" placeholder="Required" required>
	</div>
	<div class="form-input-group">
		<label for="disabled">Disabled</label>
		<input class="form-input" type="text" id="disabled" placeholder="Disabled" disabled>
	</div>
	<div class="form-input-group">
		<label for="error">Input Error</label>
		<input class="form-input error" type="text" id="error" placeholder="Error">
	</div>
	<div class="form-input-group">
		<label for="email">Email Input</label>
		<input class="form-input" type="email" id="email" placeholder="Email" />
	</div>
	<div class="form-input-group">
		<label for="search">Search Input</label>
		<input class="form-input" type="search" id="search" placeholder="Search" />
	</div>
	<div class="form-input-group">
		<label for="tel">Telephone Input</label>
		<input class="form-input" type="tel" id="tel" placeholder="Telephone" />
	</div>
	<div class="form-input-group">
		<label for="url">URL Input</label>
		<input class="form-input" type="url" id="url" placeholder="http://" />
	</div>
	<div class="form-input-group">
		<label for="password">Password Input</label>
		<input class="form-input" type="password" id="password" value="password">
	</div>
	<div class="form-input-group">
		<label>
			<input class="form-input" type="radio"> Radio
		</label>
	</div>
	<div class="form-input-group">
		<label>
			<input class="form-input" type="checkbox"> Checkbox
		</label>
	</div>
	<div class="form-input-group">
		<label for="file">File Input</label>
		<input class="form-input" type="file" id="file">
	</div>
	<div class="form-input-group">
		<label for="select">Select Field</label>
		<select id="select">
			<option>Option 01</option>
			<option>Option 02</option>
		</select>
	</div>
	<div class="form-input-group">
		<label>Textarea</label>
		<textarea class="form-input" cols="30" rows="5" class="span6">Textarea text</textarea>
	</div>
	<div class="form-input-group">
		<label for="color">Color Input</label>
		<input type="color" id="color">
	</div>
	<div class="form-input-group">
		<label for="number">Number Input</label>
		<input class="form-input" type="number" id="number" min="0" max="10">
	</div>
	<div class="form-input-group">
		<label for="range">Range Input</label>
		<input class="form-input" type="range" id="range">
	</div>
	<div class="form-input-group">
		<label for="date">Date Input</label>
		<input class="form-input" type="date" id="date">
	</div>
	<div class="form-input-group">
		<label for="month">Month Input</label>
		<input class="form-input" type="month" id="month">
	</div>
	<div class="form-input-group">
		<label for="week">Week Input</label>
		<input class="form-input" type="week" id="week">
	</div>
	<div class="form-input-group">
		<label for="datetime">Datetime Input</label>
		<input class="form-input" type="datetime" id="datetime">
	</div>
	<div class="form-input-group">
		<label for="datetime-local">Datetime-local Input</label>
		<input class="form-input" type="datetime-local" id="datetime-local">
	</div>
</form>'); ?></code></pre>

<h3 class="section-sub-title">Input Sizes</h3>
<form role="form">
	<input class="form-input input-large" type="search" placeholder="Input Large" style="margin-bottom:10px;">
	<input class="form-input input-medium" type="search" placeholder="Input Medium" style="margin-bottom:10px;">
	<input class="form-input input-small" type="search" placeholder="Input Small">
</form>

<pre><code class="hljs html"><?php echo htmlentities('<input class="form-input input-large" type="search" placeholder="Input Large">
<input class="form-input input-medium" type="search" placeholder="Input Medium">
<input class="form-input input-small" type="search" placeholder="Input Small">'); ?></code></pre>

<h3 class="section-sub-title">Input Group</h3>
<form role="form">
	<div class="input-group">
		<input class="search form-input" type="text" placeholder="Enter Keyword...">
		<span class="input-group-button">
			<button class="button primary" type="submit">Submit</button>
		</span>
	</div>
</form>

<pre><code class="hljs html"><?php echo htmlentities('<div class="input-group">
	<input class="search form-input" type="text" placeholder="Enter Keyword...">
	<span class="input-group-button">
		<button class="button primary" type="submit">Submit</button>
	</span>
</div>'); ?></code></pre>

<h3 class="section-sub-title">Input Group Sizes</h3>
<form role="form">
	<div class="input-group">
		<input class="search form-input input-large" type="text" placeholder="Input Group Large">
		<span class="input-group-button input-group-button-large">
			<button class="button primary" type="submit">Submit</button>
		</span>
	</div>
</form>

<pre><code class="hljs html"><?php echo htmlentities('<div class="input-group">
	<input class="search form-input input-large" type="text" placeholder="Enter Keyword...">
	<span class="input-group-button input-group-button-large">
		<button class="button primary" type="submit">Submit</button>
	</span>
</div>'); ?></code></pre>
</div>

<!-- Search -->
<div class="panel">
<h3 id="search" class="section-title">Search</h3>
<form role="form">
	<div class="input-group">
		<input class="search form-input" type="search" placeholder="Search">
		<span class="input-group-button">
			<button class="button primary" type="submit"><span class="icon-search"></span></button>
		</span>
	</div>
</form>

<pre><code class="hljs html"><?php echo htmlentities('<div class="input-group">
	<input class="search form-input" type="search" placeholder="Enter Keyword...">
	<span class="input-group-button">
		<button class="button primary" type="submit"><span class="icon-search"></span></button>
	</span>
</div>'); ?></code></pre>
</div>

<!-- Breadcrumbs -->
<div class="panel">
<h2 id="breadcrumbs" class="section-title">Breadcrumbs</h2>
<ul class="breadcrumbs">
	<li><a href="#">Link</a></li>
	<li><a href="#">Link</a></li>
	<li class="active">Link</li>
</ul>

<pre><code class="hljs html"><?php echo htmlentities('<ul class="breadcrumbs">
	<li><a href="#">Link</a></li>
	<li><a href="#">Link</a></li>
	<li class="active">Link</li>
</ul>'); ?></code></pre>
</div>

<!-- Video -->
<div class="panel">
<h2 id="video" class="section-title">Video</h2>
<div class="row">
	<div class="column-1">
		<div class="video-wrapper frame" data-video-wrapper>
			<iframe id="player" src="http://player.vimeo.com/video/32881691?title=0&amp;byline=0&amp;portrait=0&amp;color=FF444E" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen data-video-player></iframe>
		</div>
	</div>
</div>

<div class="clearfix"></div>

<pre><code class="hljs html"><?php echo htmlentities('<div class="video-wrapper frame" data-video-wrapper>
	<iframe id="player" src="http://player.vimeo.com/video/32881691?title=0&amp;byline=0&amp;portrait=0&amp;color=FF444E" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen data-video-player></iframe>
</div>'); ?></code></pre>
</div>

<!-- Tables -->
<div class="panel">
<h2 id="tables" class="section-title">Tables</h2>
<h3 class="section-sub-title">Table Bordered</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Vestibulum Sem Ipsum</th>
			<th>Dolor Fringilla</th>
			<th>Amet Mattis</th>
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
<pre><code class="hljs html"><?php echo htmlentities('<table class="table table-bordered">
	<thead>
		<tr>
			<th>Vestibulum Sem Ipsum</th>
			<th>Dolor Fringilla</th>
			<th>Amet Mattis</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Egestas Ipsum Nibh</td>
			<td>Magna Nullam</td>
			<td>Consectetur Euismod</td>
		</tr>
	</tbody>
</table>'); ?></code></pre>
<h3 class="section-sub-title">Table Block</h2>
<table class="table table-bordered table-block">
	<thead>
		<tr>
			<th>Vestibulum Sem Ipsum</th>
			<th>Dolor Fringilla</th>
			<th>Amet Mattis</th>
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
<pre><code class="hljs html"><?php echo htmlentities('<table class="table table-bordered table-block">
	<thead>
		<tr>
			<th>Vestibulum Sem Ipsum</th>
			<th>Dolor Fringilla</th>
			<th>Amet Mattis</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Egestas Ipsum Nibh</td>
			<td>Magna Nullam</td>
			<td>Consectetur Euismod</td>
		</tr>
	</tbody>
</table>'); ?></code></pre>
<h3 class="section-sub-title">Table Responsive</h2>
<table class="table table-bordered table-block table-responsive">
	<thead>
		<tr>
			<th>Vestibulum Sem Ipsum</th>
			<th>Dolor Fringilla</th>
			<th>Amet Mattis</th>
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
<pre><code class="hljs html"><?php echo htmlentities('<table class="table table-bordered table-block table-responsive">
	<thead>
		<tr>
			<th>Vestibulum Sem Ipsum</th>
			<th>Dolor Fringilla</th>
			<th>Amet Mattis</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Egestas Ipsum Nibh</td>
			<td>Magna Nullam</td>
			<td>Consectetur Euismod</td>
		</tr>
	</tbody>
</table>'); ?></code></pre>
</div>

</div>
</div>

<?php include('includes/footer.php'); ?>