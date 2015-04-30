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
	
	<!-- Getting Started -->
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

	<section id="colors" class="section">
		<h2 class="section-title">Colours</h2>
		
		<h3 class="section-block-title">Shades</h3>
		<div class="swatches">
			<div class="swatch background-white"><small>White</small></div>
			<div class="swatch background-light-grey"><small>Light Grey</small></div>
			<div class="swatch background-grey"><small>Grey</small></div>
			<div class="swatch background-dark-grey"><small>Dark Grey</small></div>
			<div class="swatch background-black"><small>Black</small></div>
		</div>

		<!-- Indicators -->
		<h3 class="section-block-title">Indicators</h3>
		<div class="swatches">
			<div class="swatch background-info"><small>Info</small></div>
			<div class="swatch background-error"><small>Error</small></div>
			<div class="swatch background-warning"><small>Warning</small></div>
			<div class="swatch background-success"><small>Success</small></div>
		</div>

		<!-- Palette -->
		<h3 class="section-block-title">Palette</h3>
		<div class="swatches">
			<div class="swatch background-light"><small>Light</small></div>
			<div class="swatch background-primary"><small>Primary</small></div>
			<div class="swatch background-secondary"><small>Secondary</small></div>
			<div class="swatch background-tertiary"><small>Tertiary</small></div>
			<div class="swatch background-dark"><small>Dark</small></div>
		</div>
		<?php definitions('colors'); ?>
	</section>

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

	<!-- Global -->
	<section id="global" class="section">
		<h2 class="section-title">Global</h2>
		<?php definitions('global'); ?>

		<h3 class="section-block-title">Border Radius</h3>

		<h3 class="section-block-title">Animations</h3>

		<h3 class="section-block-title">Transitions</h3>

		<h3 class="section-block-title">Z-Index</h3>

		<h3 class="section-block-title">Font Size</h3>

		<h3 class="section-block-title">Line Height</h3>
		
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
		<p>Some top level definitions for general styles on the <?php code('<body>'); ?> tag.</p>
		<?php definitions('base/body'); ?>
	</section>

	<!-- Font Size -->
	<section id="font-size" class="section">
		<h2 class="section-title">Base Font Size<code>base/font-size.less</code></h2>
		<p>Some top level definitions for general styles on the <?php code('<html>'); ?> tag.</p>
		<?php definitions('base/font-size'); ?>
	</section>

	<!-- Image -->
	<section id="image" class="section">
		<h2 class="section-title">Image</h2>

		<h3 class="section-block-title">Responsive Image</h3>
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

	<!-- Typography -->
	<section id="typography" class="section section-header">
		<div class="title-group">
			<h1 class="title">Typography</h1>
			<p class="lead">...</p>
		</div>
	</section>

	<!-- Font -->
	<section id="font" class="section">
		<h2 class="section-title">Font<code>typography/font.less</code></h2>
		<?php definitions('typography/font'); ?>
	</section>

	<!-- Headings -->
	<section id="headings" class="section">
		<h2 class="section-title">Headings<code>typography/headings.less</code></h2>
		<?php sample('headings'); ?>
		<?php definitions('typography/headings'); ?>
		<?php sample_code('headings'); ?>
	</section>

	<!-- Link -->
	<section id="link" class="section">
		<h2 class="section-title">Link<code>typography/link.less</code></h2>
		<p><a href="">Link</a></p>
		<?php definitions('typography/link'); ?>
		<?php markup('<a href="">...</a>'); ?>
	</section>

	<!-- Strong -->
	<section id="strong" class="section">
		<h2 class="section-title">Strong<code>typography/strong.less</code></h2>
		<p><strong>strong</strong></p>
		<?php definitions('typography/strong'); ?>
		<?php markup('<strong>...</strong>'); ?>
	</section>

	<!-- Emphasis -->
	<section id="emphasis" class="section">
		<h2 class="section-title">Emphasis<code>typography/emphasis.less</code></h2>
		<p><em>emphasis</em></p>
		<?php definitions('typography/emphasis'); ?>
		<?php markup('<em>...</em>'); ?>
	</section>

	<!-- Paragraph -->
	<section id="paragraph" class="section">
		<h2 class="section-title">Paragraph<code>typography/paragraph.less</code></h2>
		<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
		<?php definitions('typography/paragraph'); ?>
		<?php markup('<p>...</p>'); ?>
	</section>

	<!-- Lead -->
	<section id="lead" class="section">
		<h2 class="section-title">Lead<code>typography/lead.less</code></h2>
		<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur.</p>
		<?php definitions('typography/lead'); ?>
		<?php markup('<p class="lead">...</p>'); ?>
	</section>

	<!-- hr -->
	<section id="hr" class="section">
		<h2 class="section-title">Horizontal Rule<code>typography/hr.less</code></h2>
		<hr>
		<?php definitions('typography/hr'); ?>
		<?php markup('<hr>'); ?>
	</section>

	<!-- Blockquote -->
	<section id="blockquote" class="section">
		<h2 class="section-title">Blockquote<code>typography/blockquote.less</code></h2>
		<blockquote>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<cite>Name</cite>
		</blockquote>
		<?php definitions('typography/blockquote'); ?>
		<?php sample_code('blockquote'); ?>
	</section>

	<!-- Pullout -->
	<section id="pullout" class="section">
		<h2 class="section-title">Pullout<code>typography/pullout.less</code></h2>
		<p class="pullout">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
		<?php definitions('typography/pullout'); ?>
		<?php markup('<p class="pullout">...</p>'); ?>
	</section>

	<!-- List -->
	<section id="list" class="section">
		<h2 class="section-title">List<code>typography/list.less</code></h2>
		<?php definitions('typography/list'); ?>
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
	</section>

	<!-- Definition List -->
	<section id="definition-list" class="section">
		<h2 class="section-title">Definition List<code>typography/definition-list.less</code></h2>
		<dl>
			<dt>Fringilla Ipsum Tellus</dt>
			<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
			<dt>Fringilla Ipsum Tellus</dt>
			<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
			<dt>Fringilla Ipsum Tellus</dt>
			<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
		</dl>
		<?php definitions('typography/definition-list'); ?>
		<?php sample_code('definition-list'); ?>
	</section>

	<!-- Grid -->
	<section id="grid" class="section section-header">
		<div class="title-group">
			<h1 class="title">Grid</h1>
			<p class="lead">A demonstration of the 12 column grid system with columns, nested columns, offsets, and push/pull examples.</p>
		</div>
	</section>

	<!-- Grid -->
	<section id="grid" class="section">
		<h2 class="section-title">Grid<code>grid/grid.less</code></h2>

		<h3 class="section-block-title">Container</h3>
		<p>Content wrapper with <code>max-width</code> set at differing sizes at various media query breakpoints.</p>
		<?php markup('<div class="container">...</div>'); ?>

		<h3 class="section-block-title">Row</h3>
		<p>Containing element for children with <code>.column-1*</code> attributes set.</p>
		<?php markup('<div class="row">...</div>'); ?>

		<h3 class="section-block-title">Grid</h3>
		<?php sample_code('grid'); ?>

		<h3 class="section-block-title">Gutters</h3>
		<div class="grid">
			<div class="row">
				<div class="column-1 no-gutter"><div class="grid-item">No Gutter</div></div>
				<div class="column-1 gutter-top"><div class="grid-item">Top Gutter</div></div>
				<div class="column-1 gutter-left"><div class="grid-item">Left Gutter</div></div>
				<div class="column-1 gutter-bottom"><div class="grid-item">Bottom Gutter</div></div>
				<div class="column-1 gutter-right"><div class="grid-item">Right Gutter</div></div>
			</div>
		</div>
		<?php sample_code('gutters'); ?>
	</section>

	<!-- Column -->
	<section id="column" class="section">
		<h2 class="section-title">Column<code>grid/column.less</code></h2>

		<h3 class="section-block-title">Columns</h3>
		<?php sample('columns'); ?>

		<h3 class="section-block-title">Responsive Breakpoint Columns</h3>
		<div class="row">
			<div class="column-1-2 column-extra-large-3-4 column-medium-1">
				<div class="grid-item">Responsive Breakpoints</div>
			</div>
		</div>
		<?php markup('<div class="column-1-2 column-extra-large-3-4 column-medium-1">...</div>'); ?>

		<h3 class="section-block-title">Nested Columns</h3>
		<div class="row">
			<div class="column-1">
				<div class="grid-item">
					<div class="row">
						<div class="column-1-2"><div class="grid-item grid-item-nested">Column-1-2</div></div>
						<div class="column-1-2"><div class="grid-item grid-item-nested">Column-1-2</div></div>
					</div>
				</div>
			</div>
		</div>
		<?php sample_code('nested-columns'); ?>
	</section>

	<!-- Offset -->
	<section id="offset" class="section">
		<h2 class="section-title">Offset<code>grid/offset.less</code></h2>
		<p>Column offset classes can be added to columns to add a <code>margin-left</code> value that corresponds to the offset column class width.</p>
		<div class="grid-item column-1-2 column-offset-1-2">Column Offset</div>
		<?php markup('<div class="column-1-2 column-offset-1-2">...</div>'); ?>
	</section>

	<!-- Push -->
	<section id="push" class="section">
		<h2 class="section-title">Push<code>grid/push.less</code></h2>
		<p>Column push classes can be added to columns to add a <code>left</code> value that corresponds to the push column class width.</p>
		<div class="row">
			<div class="grid-item column-1-2 column-push-1-12">Column Push</div>
		</div>
		<?php markup('<div class="column-1-2 column-push-1-12">...</div>'); ?>
	</section>
	
	<!-- Pull -->
	<section id="pull" class="section">
		<h2 class="section-title">Pull<code>grid/pull.less</code></h2>
		<p>Column pull classes can be added to columns to add a <code>left</code> value that corresponds to the pull column class width.</p>
		<div class="row">
			<div class="grid-item column-1-2 column-pull-1-12">Column Pull</div>
		</div>
		<?php markup('<div class="column-1-2 column-pull-1-12">...</div>'); ?>
	</section>
	
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
		<?php definitions('form/label'); ?>
		<?php sample_code('label'); ?>
	</section>
	
	<!-- Fieldset -->
	<section id="fieldset" class="section">
		<h2 class="section-title">Fieldset<code>forms/fieldset.less</code></h2>
		<?php sample('fieldset'); ?>
		<?php definitions('form/fieldset'); ?>
		<?php sample_code('fieldset'); ?>
	</section>

	<!-- Form Message -->
	<section id="form-message" class="section">
		<h2 class="section-title">Form Message<code>forms/form-message.less</code></h2>
		<?php sample('form-message'); ?>
		<?php definitions('form/form-message'); ?>
		<?php sample_code('form-message'); ?>
	</section>

	<!-- Input -->
	<section id="input" class="section">
		<h2 class="section-title">Input<code>forms/input.less</code></h2>
		<?php sample('input'); ?>
		<?php definitions('form/input'); ?>
		<?php sample_code('input'); ?>
	</section>

	<!-- Input Indicators -->
	<section id="input-indicators" class="section">
		<h2 class="section-title">Input Indicators<code>forms/input-indicators.less</code></h2>
		<?php sample('input-indicators'); ?>
		<?php definitions('form/input-indicators'); ?>
		<?php sample_code('input-indicators'); ?>
	</section>

	<!-- Input Sizes -->
	<section id="input-sizes" class="section">
		<h2 class="section-title">Input Sizes<code>forms/input-sizes.less</code></h2>
		<?php sample('input-sizes'); ?>
		<?php definitions('form/input-sizes'); ?>
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
		<?php definitions('form/control'); ?>

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
		<?php definitions('form/select'); ?>

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
		<?php definitions('form/select-sizes'); ?>
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
		<?php definitions('elements/button'); ?>
		<?php sample_code('button'); ?>

		<h3 class="section-block-title">Button Disabled</h3>
		<?php sample('button-disabled'); ?>
		<?php definitions('elements/button-disabled'); ?>
		<?php sample_code('button-disabled'); ?>

		<h3 class="section-block-title">Button Block</h3>
		<?php sample('button-block'); ?>
		<?php definitions('elements/button-block'); ?>
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
		<?php definitions('elements/button-styles'); ?>
		<?php sample_code('button-styles'); ?>
	</section>

	<!-- Button Indicators -->
	<section id="button-indicators" class="section">
		<h2 class="section-title">Button Indicators<code>elements/button-indicators.less</code></h2>
		<?php sample('button-indicators'); ?><br><br>
		<?php sample('button-indicators-disabled'); ?>
		<?php definitions('elements/button-indicators'); ?>
		<?php sample_code('button-indicators'); ?>
	</section>

	<!-- Button Sizes -->
	<section id="button-sizes" class="section">
		<h2 class="section-title">Button Sizes<code>elements/button-sizes.less</code></h2>
		<?php sample('button-sizes'); ?>
		<?php definitions('elements/button-sizes'); ?>
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
		<?php definitions('elements/figure'); ?>
		<?php sample_code('figure'); ?>
	</section>

	<!-- Media -->
	<section id="media" class="section">
		<h2 class="section-title">Media<code>elements/media.less</code></h2>
		<p>The media frame is for content loaded after the document is ready. It stops layouts from jumping when media is being loaded.</p>
		<p>The media frame wraps <?php code('<img>'); ?>, <?php code('<svg>'); ?>, <?php code('<video>'); ?>, and <?php code('<iframe>'); ?> by default, to wrap other content in a media container use the <code>media-inner</code> class. The <code>media-transparent</code> class removes the default background color on the media element.</p>
		<?php sample('media'); ?>
		<?php definitions('elements/media'); ?>
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
		<?php definitions('elements/nav'); ?>

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
		<?php definitions('elements/table'); ?>

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
	
	<!-- Utilities -->
	<section id="utilities" class="section">
		<h2 class="section-title">Utilities<code>utilities/utilities.less</code></h2>
	</section>
	
	<!-- Utility Classes -->
	<section id="utility-classes" class="section">
		<h2 class="section-title">Utility Classes<code>utility-classes.less</code></h2>
		<p>For text and background color utility classes check out the <a href="#colors">color</a> section. Text align utility classes are demonstrated in the <a href="#typography">typography</a> section.</p>
		
		<h3 class="section-block-title">General</h3>
		<table class="table table-bordered table-block table-responsive">
			<thead>
				<tr>
					<th>Class</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>	
					<td><code>clearfix</code></td>
					<td>Clears floats using <code>.clearfix();</code> mixin</td>
				</tr>
				<tr>	
					<td><code>center-block </code></td>
					<td>Makes element center block using <code>.center-block();</code> mixin</td>
				</tr>
				<tr>	
					<td><code>full-height</code></td>
					<td>Sets height to 100%</td>
				</tr>
				<tr>	
					<td><code>fixed</code></td>
					<td>Sets <code>position: fixed;</code></td>
				</tr>
				<tr>	
					<td><code>pointer</code></td>
					<td>Sets <code>cursor: pointer;</code></td>
				</tr>
				<tr>	
					<td><code>no-margin</code></td>
					<td>Removes margin <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
				</tr>
				<tr>	
					<td><code>no-padding</code></td>
					<td>Removes padding <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
				</tr>
				<tr>	
					<td><code>no-border</code></td>
					<td>Removes borders <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
				</tr>
			</tbody>
		</table>

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

		<!-- Text Colors -->
		<h3 class="section-block-title">Text Colors</h3>
		<p class="text-color text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p class="text-color text-light-grey">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p class="text-color text-grey">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p class="text-color text-dark-grey">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p class="text-color text-black">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p class="text-color text-error">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p class="text-color text-warning">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p class="text-color text-success">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p class="text-color text-info">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p class="text-color text-light">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p class="text-color text-primary">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p class="text-color text-secondary">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p class="text-color text-tertiary">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p class="text-color text-dark">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<?php sample_code('text-colors'); ?>
		
		<h3 class="section-block-title">Display</h3>
		<table class="table table-bordered table-block table-responsive">
			<thead>
				<tr>
					<th>Class</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>	
					<td><code>display-block</code></td>
					<td>Sets <code>display: block;</code> on element</td>
				</tr>
				<tr>	
					<td><code>display-inline-block</code></td>
					<td>Sets <code>display: inline-block;</code> on element</td>
				</tr>
				<tr>	
					<td><code>display-table</code></td>
					<td>Sets <code>display: table;</code> on element</td>
				</tr>
				<tr>	
					<td><code>display-table-cell</code></td>
					<td>Sets <code>display: table-cell;</code> on element</td>
				</tr>
			</tbody>
		</table>
		
		<h3 class="section-block-title">Positioning</h3>
		<p>Utility classes can be used to position elements easily, each position utility class is <code>position: absolute;</code> and allows for either absolute positioning or using <code>@gutter</code> spacing by adding the <code>gutter</code> class to any position class</p>
		<table class="table table-bordered table-block table-responsive">
			<thead>
				<tr>
					<th>Class</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>	
					<td><code>top-left</code></td>
					<td>Positions element to the top left of it's container</td>
				</tr>
				<tr>	
					<td><code>top-right</code></td>
					<td>Positions element to the top right of it's container</td>
				</tr>
				<tr>	
					<td><code>bottom-left</code></td>
					<td>Positions element to the bottom left of it's container</td>
				</tr>
				<tr>	
					<td><code>bottom-right</code></td>
					<td>Positions element to the bottom right of it's container</td>
				</tr>
			</tbody>
		</table>
		
		<h3 class="section-block-title">Floats</h3>
		<table class="table table-bordered table-block table-responsive">
			<thead>
				<tr>
					<th>Class</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>	
					<td><code>left</code></td>
					<td>Floats element left</td>
				</tr>
				<tr>	
					<td><code>right</code></td>
					<td>Floats element right</td>
				</tr>
			</tbody>
		</table>
		
		<h3 class="section-block-title">Responsive Clear Floats</h3>
		<table class="table table-bordered table-block table-responsive">
			<thead>
				<tr>
					<th></th>
					<th>Small Devices<br><small>Phones (&lt;768px)</small></th>
					<th>Medium devices<br><small>Tablets (≥768px)</small></th>
					<th>Large devices<br><small>Desktops (≥1024)</small></th>
					<th>Extra Large devices<br><small>Desktops (≥1280px)</small></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><code>.small-clear-right</code></td>
					<td class="is-clear">clear</td>
					<td class="is-float">right</td>
					<td class="is-float">right</td>
					<td class="is-float">right</td>
				</tr>
				<tr>
					<td><code>.medium-clear-right</code></td>
					<td class="is-float">right</td>
					<td class="is-clear">clear</td>
					<td class="is-float">right</td>
					<td class="is-float">right</td>
				</tr>
				<tr>
					<td><code>.large-clear-right</code></td>
					<td class="is-float">right</td>
					<td class="is-float">right</td>
					<td class="is-clear">clear</td>
					<td class="is-float">right</td>
				</tr>
				<tr>
					<td><code>.extra-large-clear-right</code></td>
					<td class="is-float">right</td>
					<td class="is-float">right</td>
					<td class="is-float">right</td>
					<td class="is-clear">clear</td>
				</tr>
			</tbody>
			<tbody>
				<tr>
					<td><code>.small-clear-left</code></td>
					<td class="is-clear">clear</td>
					<td class="is-float">left</td>
					<td class="is-float">left</td>
					<td class="is-float">left</td>
				</tr>
				<tr>
					<td><code>.medium-clear-left</code></td>
					<td class="is-float">left</td>
					<td class="is-clear">clear</td>
					<td class="is-float">left</td>
					<td class="is-float">left</td>
				</tr>
				<tr>
					<td><code>.large-clear-left</code></td>
					<td class="is-float">left</td>
					<td class="is-float">left</td>
					<td class="is-clear">clear</td>
					<td class="is-float">left</td>
				</tr>
				<tr>
					<td><code>.extra-large-clear-left</code></td>
					<td class="is-float">left</td>
					<td class="is-float">left</td>
					<td class="is-float">left</td>
					<td class="is-clear">clear</td>
				</tr>
			</tbody>
		</table>
		
		<h3 class="section-block-title">Visiblity</h2>
		<p>Define content to be <code>visible</code> or <code>hidden</code>.</p>
		<table class="table table-bordered table-block table-responsive">
			<thead>
				<tr>
					<th>Class</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>	
					<td><code>hide</code></td>
					<td>Hides element <code>.hide();</code> mixin</td>
				</tr>
				<tr>	
					<td><code>show</code></td>
					<td>Shows element <code>.show();</code> mixin</td>
				</tr>
				<tr>	
					<td><code>visible</code></td>
					<td>Sets <code>visibility: visible;</code></td>
				</tr>
				<tr>	
					<td><code>invisible</code></td>
					<td>Sets <code>visibility: hidden;</code></td>
				</tr>
				<tr>	
					<td><code>hidden-print</code></td>
					<td>Hides element for when <code>@media print</code></td>
				</tr>
				<tr>	
					<td><code>visible-print</code></td>
					<td>Shows element for when <code>@media print</code></td>
				</tr>
				<tr>	
					<td><code>hidden-screen</code></td>
					<td>Hides element for when <code>@media screen</code></td>
				</tr>
				<tr>	
					<td><code>visible-screen</code></td>
					<td>Shows element for when <code>@media screen</code></td>
				</tr>
			</tbody>
		</table>
		
		<h3 class="section-block-title">Responsive Visibility</h2>
		<p>Define content to be <code>visible</code> or <code>hidden</code> at different breakpoints.<br><small>Note: <code>!important</code> is used to override specificity issues.</small></p>
		<table class="table table-bordered table-block table-responsive">
			<thead>
				<tr>
					<th></th>
					<th>Small Devices<br><small>Phones (&lt;768px)</small></th>
					<th>Medium devices<br><small>Tablets (≥768px)</small></th>
					<th>Large devices<br><small>Desktops (≥1024)</small></th>
					<th>Extra Large devices<br><small>Desktops (≥1280px)</small></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><code>.visible-small</code></td>
					<td class="is-visible">Visible</td>
					<td class="is-hidden">Hidden</td>
					<td class="is-hidden">Hidden</td>
					<td class="is-hidden">Hidden</td>
				</tr>
				<tr>
					<td><code>.visible-medium</code></td>
					<td class="is-hidden">Hidden</td>
					<td class="is-visible">Visible</td>
					<td class="is-hidden">Hidden</td>
					<td class="is-hidden">Hidden</td>
				</tr>
				<tr>
					<td><code>.visible-large</code></td>
					<td class="is-hidden">Hidden</td>
					<td class="is-hidden">Hidden</td>
					<td class="is-visible">Visible</td>
					<td class="is-hidden">Hidden</td>
				</tr>
				<tr>
					<td><code>.visible-extra-large</code></td>
					<td class="is-hidden">Hidden</td>
					<td class="is-hidden">Hidden</td>
					<td class="is-hidden">Hidden</td>
					<td class="is-visible">Visible</td>
				</tr>
			</tbody>
			<tbody>
				<tr>
					<td><code>.hidden-small</code></td>
					<td class="is-hidden">Hidden</td>
					<td class="is-visible">Visible</td>
					<td class="is-visible">Visible</td>
					<td class="is-visible">Visible</td>
				</tr>
				<tr>
					<td><code>.hidden-medium</code></td>
					<td class="is-visible">Visible</td>
					<td class="is-hidden">Hidden</td>
					<td class="is-visible">Visible</td>
					<td class="is-visible">Visible</td>
				</tr>
				<tr>
					<td><code>.hidden-large</code></td>
					<td class="is-visible">Visible</td>
					<td class="is-visible">Visible</td>
					<td class="is-hidden">Hidden</td>
					<td class="is-visible">Visible</td>
				</tr>
				<tr>
					<td><code>.hidden-extra-large</code></td>
					<td class="is-visible">Visible</td>
					<td class="is-visible">Visible</td>
					<td class="is-visible">Visible</td>
					<td class="is-hidden">Hidden</td>
				</tr>
			</tbody>
		</table>
		
		<h3 class="section-block-title">Responsive Gutters</h2>
		<p>General <code>no-gutter</code> utility classes for each responsive breakpoint.</p>
		<table class="table table-bordered table-block table-responsive">
			<thead>
				<tr>
					<th></th>
					<th>Small Devices<br><small>Phones (&lt;768px)</small></th>
					<th>Medium devices<br><small>Tablets (≥768px)</small></th>
					<th>Large devices<br><small>Desktops (≥1024)</small></th>
					<th>Extra Large devices<br><small>Desktops (≥1280px)</small></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><code>.no-gutter-small</code></td>
					<td class="is-hidden">No gutter</td>
					<td class="is-visible">Gutter</td>
					<td class="is-visible">Gutter</td>
					<td class="is-visible">Gutter</td>
				</tr>
				<tr>
					<td><code>.no-gutter-medium</code></td>
					<td class="is-visible">Gutter</td>
					<td class="is-hidden">No gutter</td>
					<td class="is-visible">Gutter</td>
					<td class="is-visible">Gutter</td>
				</tr>
				<tr>
					<td><code>.no-gutter-large</code></td>
					<td class="is-visible">Gutter</td>
					<td class="is-visible">Gutter</td>
					<td class="is-hidden">No gutter</td>
					<td class="is-visible">Gutter</td>
				</tr>
				<tr>
					<td><code>.no-gutter-extra-large</code></td>
					<td class="is-visible">Gutter</td>
					<td class="is-visible">Gutter</td>
					<td class="is-visible">Gutter</td>
					<td class="is-hidden">No gutter</td>
				</tr>
			</tbody>
		</table>
	</section>
	
	<!-- Mixins -->
	<section id="mixins" class="section">
		<h2 class="section-title">Mixins<code>mixins.less</code></h2>
		
		<h3 class="section-block-title">General</h2>
		<?php include('includes/mixins-general.html'); ?>
		
		<h3 class="section-block-title">Border Radius</h2>
		<?php include('includes/mixins-border-radius.html'); ?>
		
		<h3 class="section-block-title">Typography</h2>
		<?php include('includes/mixins-typography.html'); ?>
		
		<h3 class="section-block-title">Background</h2>
		<?php include('includes/mixins-background.html'); ?>
		
		<h3 class="section-block-title">Placeholder</h2>
		<?php include('includes/mixins-placeholder.html'); ?>
		
		<h3 class="section-block-title">Arrows</h2>
		<?php include('includes/mixins-arrows.html'); ?>
		
		<h3 class="section-block-title">Transitions</h2>
		<?php include('includes/mixins-transitions.html'); ?>
		
		<h3 class="section-block-title">Transforms</h2>
		<?php include('includes/mixins-transforms.html'); ?>
		
		<h3 class="section-block-title">Animations</h2>
		<?php include('includes/mixins-animations.html'); ?>
		
		<h3 class="section-block-title">Filters</h2>
		<?php include('includes/mixins-filters.html'); ?>

	</section>
	
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
		<?php include('includes/table-browser-support.html'); ?>

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
		<?php include('includes/table-css-support.html'); ?>
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