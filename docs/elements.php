<?php include('includes/head.php'); ?>

<div class="page-header" style="height:200px;">
	<div class="container">
		<div class="page-header-content column-1"><h1 class="page-title">elements</h1></div>
	</div>
</div>

<div id="elements" class="content" class="row">
<div class="container">

<div class="column-1-4">
	<div class="side-nav">
		<ul>
			<li><a href="#tags">Tags</a></li>
			<li><a href="#buttons">Buttons</a></li>
			<li><a href="#images">Images</a></li>
			<li><a href="#forms">Forms</a></li>
			<li><a href="#search">Search</a></li>
			<li><a href="#breadcrumbs">Breadcrumbs</a></li>
			<li><a href="#video">Video</a></li>
			<li><a href="#tables">Tables</a></li>
		</ul>
	</div>
</div>

<div class="column-3-4">


<h2 id="tags" class="section-title">Tags</h2>
<span class="tag">Tag</span>
<span class="tag active">Tag</span>

<div class="clearfix"></div>

<pre><code class="hljs html"><?php echo htmlentities('<span class="tag">Tag</span>
<span class="tag active">Tag</span>'); ?></code></pre>

<!-- Buttons -->
<h2 id="buttons" class="section-title">Buttons</h2>
<h3 class="section-sub-title">Button Styles</h3>
<button class="button grey">Button</button>
<button class="button primary">Primary</button>
<button class="button dark">Dark</button>
<button class="button text">Text</button>
<button class="button" disabled>disabled</button>

<pre><code class="hljs html"><?php echo htmlentities('<button class="button grey">Button</button>
<button class="button primary">Primary</button>
<button class="button dark">Dark</button>
<button class="button text">Text</button>
<button class="button" disabled>disabled</button>'); ?></code></pre>

<h3 class="section-sub-title">Button Sizes</h3>
<button class="button small primary">Small</button>
<button class="button medium primary">Medium</button>
<button class="button large primary">Large</button>

<pre><code class="hljs html"><?php echo htmlentities('<button class="button small primary">Small</button>
<button class="button medium primary">Medium</button>
<button class="button large primary">Large</button>'); ?></code></pre>

<h3 class="section-sub-title">Button Block</h3>
<div class="column-1-2">
	<button class="button block primary">Button Block Primary</button>
</div>

<div class="clearfix"></div>

<pre><code class="hljs html"><?php echo htmlentities('<div class="column-1-2">
	<button class="button block primary">Button Block Primary</button>
</div>'); ?></code></pre>

<h3 class="section-sub-title">Button Action</h3>
<div class="column-1-2">
	<button class="button block primary action">Button Block Primary Action</button>
</div>

<div class="clearfix"></div>

<pre><code class="hljs html"><?php echo htmlentities('<div class="column-1-2">
	<button class="button block primary action">Button Block Primary Action</button>
</div>'); ?></code></pre>

<!-- Images -->

<h2 id="images" class="section-title">Images</h2>
<div class="column-1-4"><img src="http://placehold.it/200x200" class="responsive" /></div>
<img src="http://placehold.it/200x200" class="thumbnail" />
<img src="http://placehold.it/200x200" class="rounded" />
<img src="http://placehold.it/200x200" class="circle" />

<pre><code class="hljs html"><?php echo htmlentities('<div class="column-1-4"><img src="..." class="responsive" /></div>
<img src="..." class="thumbnail" />
<img src="..." class="rounded" />
<img src=".." class="circle" />'); ?></code></pre>

<!-- Forms -->

<h2 id="forms" class="section-title">Forms</h2>
<h3 class="section-sub-title">Form Inputs</h3>
<form role="form">
	<div class="form-input-group">
		<label for="email">Email address</label>
		<input type="email" id="email" class="form-input" placeholder="Email" />
	</div>
	<div class="form-input-group">
		<label for="password">Password</label>
		<input type="password" id="password" class="form-input" placeholder="Password" />
	</div>
	<div class="form-input-group">
		<label for="disabled">Disabled</label>
		<input type="disabled" id="disabled" class="form-input" placeholder="Disabled" disabled />
	</div>
	<div class="form-input-group">
		<label for="error">Error</label>
		<input type="error" id="error" class="form-input error" value="Error" />
	</div>
	<div class="form-input-group">
		<label>
			<input type="checkbox"> Checkbox
		</label>
	</div>
	<div class="form-input-group">
		<label>
			<input type="radio"> Radio
		</label>
	</div>
	<input type="submit" value="Submit" class="button primary" />
</form>

<pre><code class="hljs html"><?php echo htmlentities('<form role="form">
	<div class="form-input-group">
		<label for="email">Email address</label>
		<input type="email" id="email" class="form-input" placeholder="Email" />
	</div>
	<div class="form-input-group">
		<label for="password">Password</label>
		<input type="password" id="password" class="form-input" placeholder="Password" />
	</div>
	<div class="form-input-group">
		<label for="disabled">Disabled</label>
		<input type="disabled" id="disabled" class="form-input" placeholder="Disabled" disabled />
	</div>
	<div class="form-input-group">
		<label for="error">Error</label>
		<input type="error" id="error" class="form-input error" value="Error" />
	</div>
	<div class="form-input-group">
		<label>
			<input type="checkbox"> Checkbox
		</label>
	</div>
	<div class="form-input-group">
		<label>
			<input type="radio"> Radio
		</label>
	</div>
	<input type="submit" value="Submit" class="button primary" />
</form>'); ?></code></pre>

<h3 class="section-sub-title">Input Sizes</h3>
<form role="form">
	<input class="search form-input input-large" type="search" placeholder="Input Large" style="margin-bottom:10px;">
	<input class="search form-input input-medium" type="search" placeholder="Input Medium" style="margin-bottom:10px;">
	<input class="search form-input input-small" type="search" placeholder="Input Small">
</form>

<pre><code class="hljs html"><?php echo htmlentities('<input class="search form-input input-large" type="search" placeholder="Input Large">
<input class="search form-input input-medium" type="search" placeholder="Input Medium">
<input class="search form-input input-small" type="search" placeholder="Input Small">'); ?></code></pre>

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

<!-- Search -->

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

<!-- Breadcrumbs -->

<h2 id="breadcrumbs" class="section-title">Breadcrumbs</h2>
<div class="breadcrumbs">
	<a href="#">Link</a>
	<a href="#">Link</a>
	<a href="#" class="active">Link</a>
</div>

<pre><code class="hljs html"><?php echo htmlentities('<div class="breadcrumbs">
	<a href="#">Link</a>
	<a href="#">Link</a>
	<a href="#" class="active">Link</a>
</div>'); ?></code></pre>

<!-- Video -->

<h2 id="video" class="section-title">Video</h2>
<div class="column-1">
	<div class="video-wrapper frame" data-video-wrapper>
		<iframe id="player" src="http://player.vimeo.com/video/32881691?title=0&amp;byline=0&amp;portrait=0&amp;color=FF444E" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen data-video-player></iframe>
	</div>
</div>

<div class="clearfix"></div>

<pre><code class="hljs html"><?php echo htmlentities('<div class="video-wrapper frame" data-video-wrapper>
	<iframe id="player" src="http://player.vimeo.com/video/32881691?title=0&amp;byline=0&amp;portrait=0&amp;color=FF444E" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen data-video-player></iframe>
</div>'); ?></code></pre>

<!-- Tables -->

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

<?php include('includes/footer.php'); ?>