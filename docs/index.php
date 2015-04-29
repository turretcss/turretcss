<?php
	include_once('config.php');
	include_once('functions.php');
	include_once('includes/head.html'); 
 ?>

<aside id="sidebar" class="sidebar">
	<?php include('includes/navigation.html'); ?>
</aside>

<main id="content">
	
	<button id="sidebar-toggle" class="navigation-toggle visible-mobile">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>

	<section id="getting-started" class="section section-header">
		<h1 class="title">Getting Started</h1>
		<p class="lead">A introduction to Turret, how to get started, how to download and use.</p>
	</section>
	
	<section id="download" class="section">
		<h2 class="section-title">Download</h2>
		<p>There are three quick start ways to download Turret available:</p>
		
		<p><strong>Download the latest release</strong></p>
		<a class="button button-primary" href="https://github.com/bigfishtv/turret/archive/master.zip">Download from Github</a>
		
		<p><strong>Clone the repo</strong></p>
		<?php git('git clone https://github.com/bigfishtv/turret.git'); ?>
		
		<p><strong>Install with <a href="https://www.npmjs.org">npm</a></strong></p>
		<?php bash('npm install bigfishtv-turret'); ?>
	</section>
	
	<section id="usage" class="section">
		<h2 class="section-title">Usage</h2>
		<p>Turret uses npm for it's build system with watch and build scripts for working locally and for deployment:</p>
		
		<p><strong>Watch</strong></p>
		<p>Watch Less files in <code>turret</code> concatenate and compile</p>
		<?php bash('npm run watch'); ?>
		
		<p><strong>Dist CSS</strong></p>
		<p>Build Less files in <code>turret</code> concatenate and compile into <code>dist</code></p>
		<?php bash('npm run dist:css'); ?>
		
		<p><strong>Dist Min</strong></p>
		<p>Build Less files in <code>turret</code> concatenate, compile, and minimise into <code>dist</code></p>
		<?php bash('npm run dist:min'); ?>
		
		<p><strong>Dist</strong></p>
		<p>Run Dist CSS and Dist Min</p>
		<?php bash('npm run dist'); ?>
	</section>

	<!-- General -->
	<section id="general" class="section section-header">
		<div class="title-group">
			<h1 class="title">General</h1>
			<p class="lead">An overview of Turret and basic styling behaviours including color palettes, text colors, amd media queries.</p>
		</div>
	</section>

	<section id="structure" class="section">
		<h2 class="section-title">Structure</h2>

		<h3 class="section-block-title">Selectors</h3>
		<?php markup('<div class="[element] [element-behaviour] [element-style]">...</div>'); ?>
		
		<h3 class="section-block-title">Viewport</h3>
		<p>To ensure proper rendering and touch zooming, add the viewport meta tag to your <?php code('<head>'); ?>.</p>
		<?php markup('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">'); ?>
	
		<h3 class="section-block-title">HTML5 Doctype</h2>
		<p>Turret makes use of HTML5 elements and CSS properties that require the use of the HTML5 doctype.</p>
		<?php markup('<!DOCTYPE html>'); ?>
		<h3 class="section-block-title">Normalize</h2>
		<p>For improved cross-browser rendering, Turret uses <a href="http://necolas.github.io/normalize.css/" target="_blank">Normalize.css</a>, a project by <a href="http://twitter.com/necolas" target="_blank">Nicolas Gallagher</a> and <a href="http://twitter.com/jon_neal" target="_blank">Jonathan Neal</a>.</p>
		

		<h3 class="section-block-title">Template</h3>
		<?php sample_code('template'); ?>
	</section>

	<?php
		include('sections/general/colors.php');
	?>

	<!-- Breakpoints -->
	<section id="breakpoints" class="section">
		<h2 class="section-title">Breakpoints</h2>
		<?php definitions('breakpoints'); ?>
	</section>

	<!-- Media Queries -->
	<section id="media-queries" class="section">
		<h2 class="section-title">Media Queries</h2>
		<?php definitions('media-queries'); ?>
	</section>

	<!-- Transitions -->
	<section id="transitions" class="section">
		<h2 class="section-title">Transitions</h2>
		<?php definitions('transitions'); ?>
	</section>

	<!-- Animations -->
	<section id="animations" class="section">
		<h2 class="section-title">Animations</h2>
		<?php definitions('animations'); ?>
	</section>

	<!-- Base -->
	<section id="base" class="section section-header">
		<div class="title-group">
			<h1 class="title">Base</h1>
			<p class="lead">Turret base styles for body, images, typography, basic generic typographic styles and responsive text scaling behaviour.</p>
		</div>
	</section>

	<!-- Body -->
	<section id="body" class="section">
		<h2 class="section-title">Body<code>base/body.less</code></h2>
		<p>Some top level defintions for general styles on the <?php code('<body>'); ?> tag.</p>
		<?php definitions('body'); ?>
	</section>

	<!-- Typography -->
	<section id="typography" class="section">
		<h2 class="section-title">Typography<code>base/typography.less</code></h2>
		<?php definitions('typography/typography'); ?>
		
		<h3 class="section-block-title">Headings</h3>
		<?php sample('headings'); ?>
		<?php definitions('typography/headings'); ?>
		<?php sample_code('headings'); ?>

		<h3 class="section-block-title">Link</h3>
		<p><a href="">Link</a></p>
		<?php definitions('typography/link'); ?>
		<?php markup('<a href="">...</a>'); ?>

		<h3 class="section-block-title">Paragraph</h3>
		<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
		<?php definitions('typography/paragraph'); ?>
		<?php markup('<p>...</p>'); ?>

		<h3 class="section-block-title">Lead</h3>
		<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur.</p>
		<?php definitions('typography/lead'); ?>
		<?php markup('<p class="lead">...</p>'); ?>

		<h3 class="section-block-title">Text Align</h3>
		<p class="text-left">Text Left</p>
		<p class="text-center">Text Center</p>
		<p class="text-right">Text Right</p>
		<p class="text-justify">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas sed diam eget risus varius blandit sit amet non magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
		<p class="truncate">Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		<?php sample_code('text-align'); ?>

		<h3 class="section-block-title">Text Transform</h3>
		<?php sample('text-transform'); ?>
		<?php sample_code('text-transform'); ?>

		<h3 class="section-block-title">Strong</h3>
		<p><strong>strong</strong></p>
		<?php definitions('typography/strong'); ?>
		<?php markup('<strong>...</strong>'); ?>

		<h3 class="section-block-title">Emphasis</h3>
		<p><em>emphasis</em></p>
		<?php definitions('typography/emphasis'); ?>
		<?php markup('<em>...</em>'); ?>

		<h3 class="section-block-title">Horizontal Rule</h3>
		<hr>
		<?php definitions('typography/hr'); ?>
		<?php markup('<hr>'); ?>

		<h3 class="section-block-title">Blockquote</h3>
		<blockquote>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<cite>Name</cite>
		</blockquote>
		<?php definitions('typography/blockquote'); ?>
		<?php sample_code('blockquote'); ?>

		<h3 class="section-block-title">Pullout</h3>
		<p class="pullout">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
		<?php markup('<p class="pullout">...</p>'); ?>

		<h3 class="section-block-title">Unordered List</h3>
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
		<?php sample_code('unordered-list'); ?>

		<h3 class="section-block-title">Ordered List</h3>
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
		<?php sample_code('ordered-list'); ?>

		<h3 class="section-block-title">Defintion List</h3>
		<dl>
			<dt>Fringilla Ipsum Tellus</dt>
			<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
			<dt>Fringilla Ipsum Tellus</dt>
			<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
			<dt>Fringilla Ipsum Tellus</dt>
			<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
		</dl>
		<?php sample_code('defintion-list'); ?>
	</section>
	
	<!-- Images -->
	<section id="images" class="section">
		<h2 class="section-title">Images</h2>

		<h3 class="section-block-title">Responsive Images</h3>
		<p>Images in Turret can be made responsive-friendly via the addition of the <code>.responsive</code> class. This applies <code>max-width: 100%;</code> and <code>height: auto;</code> to the image so that it scales nicely to the parent element.</p>
		<img src="http://placehold.it/1024x600/CCD1D9/656D78" class="responsive">
		<?php markup('<img src="..." class="responsive">'); ?>

		<h3 class="section-block-title">Image Styles</h3>
		<div class="row">
			<div class="column-1-2 text-center">
				<img src="http://placehold.it/200x200/CCD1D9/656D78" class="rounded">
				<?php less('@image-rounded-border-radius: 8px;'); ?>
				<?php markup('<img src="..." class="rounded">'); ?>
			</div>
			<div class="column-1-2 text-center">
				<img src="http://placehold.it/200x200/CCD1D9/656D78" class="circle">
				<?php markup('<img src="..." class="circle">'); ?>
			</div>
		</div>
	</section>

	<!-- Grid -->
	<section id="grid" class="section section-header">
		<div class="title-group">
			<h1 class="title">Grid</h1>
			<p class="lead">A demonstration of the 12 column grid system with columns, nested columns, offsets, and push/pull examples.</p>
		</div>
	</section>

	<?php

		//Grid
		include('sections/grid/grid.php');
		include('sections/grid/column.php');
		include('sections/grid/offset.php');
		include('sections/grid/push.php');
		include('sections/grid/pull.php');
	?>
	
	<!-- Form -->
	<section id="form" class="section section-header">
		<div class="title-group">
			<h1 class="title">Form</h1>
			<p class="lead">A collection of form elements including inputs, input-groups, radio and checkbox controls, and selects.</p>
		</div>
	</section>

	<section id="form-examples" class="section">
		<h2 class="section-title">Examples</h2>

		<h3 class="section-block-title">Simple Example</h3>
		<?php sample('form-simple'); ?>
		<?php sample_code('form-simple'); ?>

		<h3 class="section-block-title">Multi-Column Example</h3>
		<?php sample('form-multi-column'); ?>
		<?php sample_code('form-multi-column'); ?>
	</section>

	<!-- Label -->
	<section id="label" class="section">
		<h2 class="section-title">Label<code>forms/label.less</code></h2>
		<?php sample('label'); ?>
		<?php definitions('label'); ?>
		<?php sample_code('label'); ?>
	</section>
	
	<!-- Fieldset -->
	<section id="fieldset" class="section">
		<h2 class="section-title">Fieldset<code>forms/fieldset.less</code></h2>
		<?php sample('fieldset'); ?>
		<?php definitions('fieldset'); ?>
		<?php sample_code('fieldset'); ?>
	</section>

	<!-- Form Message -->
	<section id="form-message" class="section">
		<h2 class="section-title">Form Message<code>forms/form-message.less</code></h2>
		<?php sample('form-message'); ?>
		<?php definitions('form-message'); ?>
		<?php sample_code('form-message'); ?>
	</section>

	<!-- Input -->
	<section id="input" class="section">
		<h2 class="section-title">Input<code>forms/input.less</code></h2>
		<?php sample('input'); ?>
		<?php definitions('input'); ?>
		<?php sample_code('input'); ?>
	</section>

	<!-- Input Sizes -->
	<section id="input-sizes" class="section">
		<h2 class="section-title">Input Sizes<code>forms/input-sizes.less</code></h2>
		<?php sample('input-sizes'); ?>
		<?php definitions('input-sizes'); ?>
		<?php sample_code('input-sizes'); ?>
	</section>

	<!-- Input Group -->
	<section id="input-group" class="section">
		<h2 class="section-title">Input Group<code>forms/input-group.less</code></h2>

		<h3 class="section-block-title">Input Group</h3>
		<?php sample('input-group'); ?>
		<?php sample_code('input-group'); ?>

		<h3 class="section-block-title">Input Group Sizes</h3>
		<?php sample('input-group-sizes'); ?>
		<?php sample_code('input-group-sizes'); ?>

		<h3 class="section-block-title">Input Group Search</h3>
		<?php sample('input-group-search'); ?>
		<?php sample_code('input-group-search'); ?>
	</section>

	<!-- Control -->
	<section id="control" class="section">
		<h2 class="section-title">Control<code>forms/control.less</code></h2>
		<?php definitions('control'); ?>

		<h3 class="section-block-title">Checkbox</h3>
		<?php sample('control-checkbox'); ?>
		<?php sample_code('control-checkbox'); ?>

		<h3 class="section-block-title">Radio</h3>
		<?php sample('control-radio'); ?>
		<?php sample_code('control-radio'); ?>

		<h3 class="section-block-title">Control Inline</h3>
		<div class="row">
			<div class="column-1-2">
				<?php sample('control-inline-checkbox'); ?>
				<?php sample_code('control-inline-checkbox'); ?>
			</div>
			<div class="column-1-2">
				<?php sample('control-inline-radio'); ?>
				<?php sample_code('control-inline-radio'); ?>
			</div>
		</div>
	</section>

	<!-- Select -->
	<section id="select" class="section">
		<h2 class="section-title">Select<code>forms/select.less</code></h2>
		<?php definitions('select'); ?>

		<h3 class="section-block-title">Select</h3>
		<?php sample('select'); ?>
		<?php sample_code('select'); ?>

		<h3 class="section-block-title">Select Inverse</h3>
		<?php sample('select-inverse'); ?>
		<?php sample_code('select-inverse'); ?>
	</section>

	<!-- Select Sizes -->
	<section id="select-sizes" class="section">
		<h2 class="section-title">Select Sizes<code>forms/select-sizes.less</code></h2>
		<?php sample('select-sizes'); ?>
		<?php definitions('select-sizes'); ?>
		<?php sample_code('select-sizes'); ?>
	</section>
	
	<!-- Elements -->
	<section id="elements" class="section section-header">
		<div class="title-group">
			<h1 class="title">Elements</h1>
			<p class="lead">Set of elements including buttons, button-groups, figure, media, nav, and tables.</p>
		</div>
	</section>

	<!-- Button -->
	<section id="button" class="section">
		<h2 class="section-title">Button<code>elements/button.less</code></h2>
		<p>Button styles are applied directly to the <?php code('<button>'); ?> element, button style and size modifiers do not require the <code>button</code> class added to the button element. Button styles can be set on an achor tag by using the <code>.button</code> class.</p>
		<?php sample('button'); ?>
		<?php definitions('button'); ?>
		<?php sample_code('button'); ?>

		<h3 class="section-block-title">Button Disabled</h3>
		<?php sample('button-disabled'); ?>
		<?php definitions('button-disabled'); ?>
		<?php sample_code('button-disabled'); ?>

		<h3 class="section-block-title">Button Block</h3>
		<?php sample('button-block'); ?>
		<?php definitions('button-block'); ?>
		<?php sample_code('button-block'); ?>

		<h3 class="section-block-title">Button Center</h3>
		<p><strong>Note:</strong> for <code>.button-center</code> to work the containing element needs to have <code>text-align: center;</code></p>
		<div class="text-center">
			<?php sample('button-center'); ?>
		</div>
		<?php sample_code('button-center'); ?>
	</section>

	<!-- Button Styles -->
	<section id="button-styles" class="section">
		<h2 class="section-title">Button Styles<code>elements/button-styles.less</code></h2>
		<?php sample('button-styles'); ?><br><br>
		<?php sample('button-styles-disabled'); ?>
		<?php definitions('button-styles'); ?>
		<?php sample_code('button-styles'); ?>
	</section>

	<!-- Button Indicators -->
	<section id="button-indicators" class="section">
		<h2 class="section-title">Button Indicators<code>elements/button-indicators.less</code></h2>
		<?php sample('button-indicators'); ?><br><br>
		<?php sample('button-indicators-disabled'); ?>
		<?php definitions('button-indicators'); ?>
		<?php sample_code('button-indicators'); ?>
	</section>

	<!-- Button Sizes -->
	<section id="button-sizes" class="section">
		<h2 class="section-title">Button Sizes<code>elements/button-sizes.less</code></h2>
		<?php sample('button-sizes'); ?>
		<?php definitions('button-sizes'); ?>
		<?php sample_code('button-sizes'); ?>
	</section>

	<!-- Button Group -->
	<section id="button-group" class="section">
		<h2 class="section-title">Button Group<code>elements/button-group.less</code></h2>
		<?php sample('button-group'); ?>
		<?php sample_code('button-group'); ?>

		<h3 class="section-block-title">Button Group Block</h3>
		<?php sample('button-group-block'); ?>
		<?php sample_code('button-group-block'); ?>
	</section>

	<!-- Figure -->
	<section id="figure" class="section">
		<h2 class="section-title">Figure<code>elements/figure.less</code></h2>
		<?php sample('figure'); ?>
		<?php definitions('figure'); ?>
		<?php sample_code('figure'); ?>
	</section>

	<!-- Media -->
	<section id="media" class="section">
		<h2 class="section-title">Media<code>elements/media.less</code></h2>
		<p>The media frame is for content loaded after the document is ready. It stops layouts from jumping when media is being loaded.</p>
		<p>The media frame wraps <?php code('<img>'); ?>, <?php code('<svg>'); ?>, <?php code('<video>'); ?>, and <?php code('<iframe>'); ?> by default, to wrap other content in a media container use the <code>media-inner</code> class. The <code>media-transparent</code> class removes the default background color on the media element.</p>
		<?php sample('media'); ?>
		<?php definitions('media'); ?>
		<?php sample_code('media'); ?>

		<h3 class="section-block-title">Media Ratios</h3>
		<p>By default the <code>media</code> element has the following common media type ratios:</p>
		<ul class="list list-unstyled">
			<li><code>media-1-2</code></li>
			<li><code>media-9-16</code></li>
			<li><code>media-9-14</code></li>
			<li><code>media-2-3</code></li>
			<li><code>media-3-4</code></li>
			<li><code>media-1</code></li>
			<li><code>media-4-3</code></li>
			<li><code>media-3-2</code></li>
			<li><code>media-16-9</code></li>
			<li><code>media-2-1</code></li>
		</ul>
		<p>To add custom media ratios use the <code>.media-ratio()</code> mixin.</p>
		<?php less('.media-ratio(@width, @height);'); ?>
	</section>

	<!-- Figure -->
	<section id="nav" class="section">
		<h2 class="section-title">Nav<code>elements/nav.less</code></h2>
		<?php definitions('nav'); ?>

		<h3 class="section-block-title">Nav</h3>
		<p>For menu and navigation components use the <?php code('<nav>'); ?> element wrapped around an unordered list <?php code('<ul>'); ?>.</p>
		<?php sample('nav'); ?>
		<?php sample_code('nav'); ?>

		<h3 class="section-block-title">Nav Inline</h3>
		<p>To display navigaiton inline add the <?php code('nav-inline'); ?> class to the <?php code('<nav>'); ?> element.</p>
		<?php sample('nav-inline'); ?>
		<?php sample_code('nav-inline'); ?>
	</section>

	<!-- Table -->
	<section id="table" class="section">
		<h2 class="section-title">Table<code>elements/table.less</code></h2>
		<?php definitions('table'); ?>

		<h3 class="section-block-title">Table</h3>
		<?php sample('table'); ?>
		<?php sample_code('table'); ?>

		<h3 class="section-block-title">Table Border</h3>
		<?php sample('table-border'); ?>
		<?php sample_code('table-border'); ?>

		<h3 class="section-block-title">Table Block</h3>
		<?php sample('table-block'); ?>
		<?php sample_code('table-block'); ?>

		<h3 class="section-block-title">Table Responsive</h3>
		<?php sample('table-responsive'); ?>
		<?php sample_code('table-responsive'); ?>
	</section>
	
	<!-- Utilities -->
	<section id="utilities" class="section section-header">
		<div class="title-group">
			<h1 class="title">Utilities</h1>
			<p class="lead">Utility classes and mixins for normalisation and rapid frontend development.</p>
		</div>
	</section>

	<section id="utilities" class="section">
		<h2 class="section-title">Utilities<code>utilities/utilities.less</code></h2>
	</section>

	<?php
		
		//Utilities
		include('sections/utilities/utility-classes.php');
		include('sections/utilities/mixins.php');

	?>
	
	<!-- Support -->
	<section id="support" class="section section-header">
		<div class="title-group">
			<h1 class="title">Support</h1>
			<p class="lead">Outlines for Browser Support for CSS3 features.</p>
		</div>
	</section>
	
	<!-- Browsers -->
	<section id="browsers" class="section">
		<h2 class="section-title">Browsers</h2>
		<table class="table table-bordered table-block table-responsive">
			<thead>
				<tr>
					<td></td>
					<th>Chrome</th>
					<th>Firefox</th>
					<th>Internet Explorer</th>
					<th>Opera</th>
					<th>Safari</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>Android</th>
					<td class="is-supported">Supported</td>
					<td class="is-unsupported">Not supported</td>
					<td rowspan="3" style="vertical-align: middle;">N/A</td>
					<td class="is-unsupported">Not supported</td>
					<td>N/A</td>
				</tr>
				<tr>
					<th>iOS</th>
					<td class="is-supported">Supported</td>
					<td>N/A</td>
					<td class="is-unsupported">Not supported</td>
					<td class="is-supported">Supported</td>
				</tr>
				<tr>
					<th>Mac OS X</th>
					<td class="is-supported">Supported</td>
					<td class="is-supported">Supported</td>
					<td class="is-supported">Supported</td>
					<td class="is-supported">Supported</td>
				</tr>
				<tr>
					<th>Windows</th>
					<td class="is-supported">Supported</td>
					<td class="is-supported">Supported</td>
					<td class="is-supported">Supported (IE9+)</td>
					<td class="is-supported">Supported</td>
					<td class="is-unsupported">Not supported</td>
				</tr>
			</tbody>
		</table>

		<h3 class="section-block-title">Android Default Browser</h2>
		<p>The Default Android Browser is not supported. Android 4.4+ does not ship with a default Browser. (note: Chrome on Android is fully supported)</p>

		<h3 class="section-block-title">IE Compatibility modes</h2>
		<p>Turret is not supported in the old Internet Explorer compatibility modes. To be sure you're using the latest rendering mode for IE, consider including the appropriate <?php code('<meta>'); ?> tag in your pages:</p>
		<?php markup('<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">'); ?>
		<p>The meta tag tells the IE rendering engine two things:</p>
		<ol>
			<li>It should use the latest, or edge, version of the IE rendering environment</li>
			<li>If already installed, it should use the Google Chrome Frame rendering engine.</li>
		</ol>
		<p>This line breaks validation, and the Google Chrome Frame part won't work inside a conditional comment. To avoid these edge case issues it is recommended that you remove this line and use the <code>.htaccess</code> to send these headers instead as specified in <a href="http://groups.google.com/group/html5boilerplate/browse_thread/thread/6d1b6b152aca8ed2">Validating: X-UA-Compatible</a>.</p>
		
		<h3 class="section-block-title">Modernizr</h2>
		<p><a href="http://modernizr.com/">Modernizr</a> is a JavaScript library which adds classes to the <code>html</code> element based on the results of feature test and which ensures that all browsers can make use of HTML5 elements (as it includes the HTML5 Shiv). This allows you to target parts of your CSS and JavaScript based on the features supported by a browser.</p>
		<p>In general, in order to keep page load times to a minimum, it's best to call any JavaScript at the end of the page because if a script is slow to load from an external server it may cause the whole page to hang. That said, the Modernizr script needs to run before the browser begins rendering the page, so that browsers lacking support for some of the new HTML5 elements are able to handle them properly. Therefore the Modernizr script is the only JavaScript file synchronously loaded at the top of the document.</p>
		
		<h3 class="section-block-title">Respond.js</h2>
		<p>IE8 requires the use of <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> to enable media query support.</p>
		
		<h3 class="section-block-title">IE8 and Respond.js</h3>
		<p>Beware of the following caveats when using Respond.js in your development and production environments for Internet Explorer 8.</p>

		<h4>Respond.js and cross-domain CSS</h4>
		<p>Using Respond.js with CSS hosted on a different (sub)domain (for example, on a CDN) requires some additional setup. See the <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> docs for details.</p>

		<h4>Respond.js and <code>file://</code></h4>
		<p>Due to browser security rules, Respond.js doesn't work with pages viewed via the <code>file://</code> protocol (like when opening a local HTML file). To test responsive features in IE8, view your pages over HTTP(S). See the <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> docs for details.</p>

		<h4>Respond.js and <code>@import</code></h4>
		<p>Respond.js doesn't work with CSS that's referenced via <code>@import</code>. In particular, some Drupal configurations are known to use <code>@import</code>. See the <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> docs for details.</p>
	
		<h3 class="section-block-title">IE8 and box-sizing</h2>
		<p>IE8 does not fully support <code>box-sizing: border-box;</code> when combined with <code>min-width</code>, <code>max-width</code>, <code>min-height</code>, or <code>max-height</code>. Cannot use max-width on <code>.container</code>.</p>
	</section>
	
	<!-- CSS -->
	<section id="css" class="section">
		<h2 class="section-title">CSS</h2>
		<p>Some CSS3 properties and HTML5 elements are not fully supported by Internet Explorer 8 and 9.</p>
		<?php include('includes/table-browser-support.html'); ?>
		<p>Visit <a href="http://caniuse.com/">Can I use...</a> for details on browser support of CSS3 and HTML5 features.</p>
	</section>

	<!-- Accessibility -->
	<section id="accessibility" class="section section-header">
		<div class="title-group">
			<h1 class="title">Accessibility</h1>
			<p class="lead">Guide for using ARIA role attributes on elements for accessibility.</p>
		</div>
	</section>
	
	<!-- Aria Roles -->
	<section id="aria-roles" class="section">
		<h2 class="section-title">ARIA Roles</h2>
		<?php include('includes/table-aria-roles.html'); ?>
	</section>
	
	<!-- Notes -->
	<section id="notes" class="section section-header">
		<div class="title-group">
			<h1 class="title">Notes</h1>
			<p class="lead">Contributors, Licence, and Licence Notes.</p>
		</div>
	</section>
	
	<!-- Contributors -->
	<section id="contributors" class="section">
		<h2 class="section-title">Contributors</h2>
		<h3 class="section-block-title">Scott de Jonge</h3>
		<ul>
			<li>Twitter: <a href="https://twitter.com/scottdejonge">@scottdejonge</a></li>
			<li>Github: <a href="https://github.com/scottdejonge">@scottdejonge</a></li>
		</ul>
	</section>
	
	<!-- Licence -->
	<section id="licence" class="section">
		<h2 class="section-title">Licence</h2>
		
		<h3 class="section-block-title">Code License</h3>
		<p>Applies to code inside the <code>turret</code> directory.</p>
		<p>Code licensed under <a href="http://opensource.org/licenses/mit-license.html">MIT License</a></p>
		
		<h3 class="section-block-title">Documentation License</h3>
		<p>Applies to files inside the <code>docs</code> excluding files located in the <code>lib</code> directory.</p>
		<p>Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a></p>
	</section>
	
	<!-- License Notes -->
	<section id="licence-notes" class="section">	
		<h2 class="section-title">License Notes</h2>

		<p>Turret is released under the MIT license and is copyright 2015 Twitter. Boiled down to smaller chunks, it can be described with the following conditions.</p>
		
		<p><strong>It requires you to:</strong></p>
		<ul>
			<li>Include the license and copyright notice in your works</li>
		</ul>
		<p><strong>It permits you to:</strong></p>
		<ul>
			<li>Freely download and use Turret, in whole or in part, for personal, private, company internal, or commercial purposes</li>
			<li>Use Turret in packages or distributions that you create</li>
			<li>Modify the source code</li>
			<li>Grant a sublicense to modify and distribute Turret to third parties not included in the license</li>
		</ul>
		<p><strong>It forbids you to:</strong></p>
		<ul>
			<li>Hold the authors and license owners liable for damages as Turret is provided without warranty</li>
			<li>Hold the creators or copyright holders of Turret liable</li>
			<li>Redistribute any piece of Turret without proper attribution</li>
			<li>Use any marks owned by Bigfish.tv in any way that might state or imply that Bigfish.tv endorses your distribution</li>
			<li>Use any marks owned by Bigfish.tv in any way that might state or imply that you created the Bigfish.tv software in question</li>
		</ul>
		<p><strong>It does not require you to:</strong></p>
		<ul>
			<li>Include the source of Turret itself, or of any modifications you may have made to it, in any redistribution you may assemble that includes it</li>
			<li>Submit changes that you make to Turret back to the Turret project (though such feedback is encouraged)</li>
			<li>The full Turret license is located in the project repository for more information.</li>
		</ul>
	</section>
	
	<footer>
		<p class="text-center">
			Version 2.1 &middot; 
			<a href="https://twitter.com/scottdejonge" target="_blank">@scottdejonge</a> 
			made this <img class="emoji" draggable="false" alt="💩" src="https://twemoji.maxcdn.com/svg/1f4a9.svg"> 
			at <a href="http://bigfish.tv/" target="_blank">bigfish.tv</a>
		</p>
	</footer>

</main>

<div class="clearfix"></div>

<script type="text/javascript" src="js/toggle.js"></script>

<?php include('includes/footer.html'); ?>