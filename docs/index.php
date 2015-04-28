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
		<h2>Download</h2>
		<p>There are three quick start ways to download Turret available:</p>
		<p><strong>Download the latest release</strong></p>
		<a class="button button-primary" href="https://github.com/bigfishtv/turret/archive/master.zip">Download from Github</a>
		<p><strong>Clone the repo</strong></p>
		<pre class="language-git"><code class="language-git"><?php echo htmlentities('git clone https://github.com/bigfishtv/turret.git'); ?></code></pre>
		<p><strong>Install with <a href="https://www.npmjs.org">npm</a></strong></p>
		<pre class="language-bash"><code class="language-bash"><?php echo htmlentities('npm install bigfishtv-turret'); ?></code></pre>
	</section>
	
	<section id="usage" class="section">
		<h2>Usage</h2>
		<p>Turret uses npm for it's build system with watch and build scripts for working locally and for deployment:</p>
		<p><strong>Watch</strong></p>
		<p>Watch Less files in <code>turret</code> concatenate and compile</p>
		<pre class="language-bash"><code class="language-bash"><?php echo htmlentities('npm run watch'); ?></code></pre>
		<p><strong>Dist CSS</strong></p>
		<p>Build Less files in <code>turret</code> concatenate and compile into <code>dist</code></p>
		<pre class="language-bash"><code class="language-bash"><?php echo htmlentities('npm run dist:css'); ?></code></pre>
		<p><strong>Dist Min</strong></p>
		<p>Build Less files in <code>turret</code> concatenate, compile, and minimise into <code>dist</code></p>
		<pre class="language-bash"><code class="language-bash"><?php echo htmlentities('npm run dist:min'); ?></code></pre>
		<p><strong>Dist</strong></p>
		<p>Run Dist CSS and Dist Min</p>
		<pre class="language-bash"><code class="language-bash"><?php echo htmlentities('npm run dist'); ?></code></pre>
	</section>

	<!-- General -->
	<section id="general" class="section section-header">
		<div class="title-group">
			<h1 class="title">General</h1>
			<p class="lead">An overview of Turret and basic styling behaviours including color palettes, text colors, amd media queries.</p>
		</div>
	</section>

	<section id="structure" class="section">
		<h2>Structure</h2>

		<h3>Selectors</h3>
		<?php markup('<div class="[element] [element-behaviour] [element-style]">...</div>'); ?>
		
		<h3>Viewport</h3>
		<p>To ensure proper rendering and touch zooming, add the viewport meta tag to your <code>&lt;head&gt;</code>.</p>
		<?php markup('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">'); ?>
	
		<h3>HTML5 Doctype</h2>
		<p>Turret makes use of HTML5 elements and CSS properties that require the use of the HTML5 doctype.</p>
		<?php markup('<!DOCTYPE html>'); ?>
		<h3>Normalize</h2>
		<p>For improved cross-browser rendering, Turret uses <a href="http://necolas.github.io/normalize.css/" target="_blank">Normalize.css</a>, a project by <a href="http://twitter.com/necolas" target="_blank">Nicolas Gallagher</a> and <a href="http://twitter.com/jon_neal" target="_blank">Jonathan Neal</a>.</p>

	</section>

	<?php
		include('sections/general/colors.php');
		include('sections/general/media-queries.php');
	?>

	<!-- Base -->
	<section id="base" class="section section-header">
		<div class="title-group">
			<h1 class="title">Base</h1>
			<p class="lead">Turret base styles for body, images, typography, basic generic typographic styles and responsive text scaling behaviour.</p>
		</div>
	</section>

	<!-- Body -->
	<section id="body" class="section">
		<h2>Body<code>base/body.less</code></h2>
		<p>Some top level defintions for general styles on the <?php code('<body>'); ?> tag.</p>
		<?php definitions('body'); ?>
	</section>

	<!-- Typography -->
	<section id="typography" class="section">
		<h2>Typography<code>base/typography.less</code></h2>
		<?php sample('typography'); ?>
		<?php definitions('typography'); ?>
		<?php sample_code('typography'); ?>

		<h3>Paragraph</h3>
		<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
		<?php markup('<p>...</p>'); ?>

		<h3>Lead</h3>
		<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur.</p>
		<?php markup('<p class="lead">...</p>'); ?>

		<h3>Text Align</h3>
		<p class="text-left">Text Left</p>
		<p class="text-center">Text Center</p>
		<p class="text-right">Text Right</p>
		<p class="text-justify">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas sed diam eget risus varius blandit sit amet non magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
		<p class="truncate">Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		<?php sample_code('text-align'); ?>

		<h3>Text Transform</h3>
		<?php sample('text-transform'); ?>
		<?php sample_code('text-transform'); ?>

		<h3>Strong</h3>
		<p><strong>strong</strong></p>
		<?php markup('<strong>...</strong>'); ?>

		<h3>Emphasis</h3>
		<p><em>emphasis</em></p>
		<?php markup('<em>...</em>'); ?>
	</section>

	<section id="images" class="section">
		<h2>Images</h2>

		<h3>Responsive Images</h3>
		<p>Images in Turret can be made responsive-friendly via the addition of the <code>.responsive</code> class. This applies <code>max-width: 100%;</code> and <code>height: auto;</code> to the image so that it scales nicely to the parent element.</p>
		<img src="http://placehold.it/800x200/4BB3D6/FFFFFF" class="responsive">
		<?php markup('<img src="..." class="responsive">'); ?>

		<h3>Image Styles</h3>
		<div class="row">
			<div class="column-1-2 text-center">
				<img src="http://placehold.it/200x200/4BB3D6/FFFFFF" class="rounded">
				<?php less('@image-rounded-border-radius: 8px;'); ?>
				<?php markup('<img src="..." class="rounded">'); ?>
			</div>
			<div class="column-1-2 text-center">
				<img src="http://placehold.it/200x200/4BB3D6/FFFFFF" class="circle">
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
		<h2>Examples</h2>

		<h3>Simple Example</h3>
		<?php sample('form-simple'); ?>
		<?php sample_code('form-simple'); ?>

		<h3>Multi-Column Example</h3>
		<?php sample('form-multi-column'); ?>
		<?php sample_code('form-multi-column'); ?>
	</section>

	<!-- Label -->
	<section id="label" class="section">
		<h2>Label<code>forms/label.less</code></h2>
		<?php sample('label'); ?>
		<?php definitions('label'); ?>
		<?php sample_code('label'); ?>
	</section>
	
	<!-- Fieldset -->
	<section id="fieldset" class="section">
		<h2>Fieldset<code>forms/fieldset.less</code></h2>
		<?php sample('fieldset'); ?>
		<?php definitions('fieldset'); ?>
		<?php sample_code('fieldset'); ?>
	</section>

	<!-- Form Message -->
	<section id="form-message" class="section">
		<h2>Form Message<code>forms/form-message.less</code></h2>
		<?php sample('form-message'); ?>
		<?php definitions('form-message'); ?>
		<?php sample_code('form-message'); ?>
	</section>

	<!-- Input -->
	<section id="input" class="section">
		<h2>Input<code>forms/input.less</code></h2>
		<?php sample('input'); ?>
		<?php definitions('input'); ?>
		<?php sample_code('input'); ?>
	</section>

	<!-- Input Sizes -->
	<section id="input-sizes" class="section">
		<h2>Input Sizes<code>forms/input-sizes.less</code></h2>
		<?php sample('input-sizes'); ?>
		<?php definitions('input-sizes'); ?>
		<?php sample_code('input-sizes'); ?>
	</section>

	<!-- Input Group -->
	<section id="input-group" class="section">
		<h2>Input Group<code>forms/input-group.less</code></h2>

		<h3>Input Group</h3>
		<?php sample('input-group'); ?>
		<?php sample_code('input-group'); ?>

		<h3>Input Group Sizes</h3>
		<?php sample('input-group-sizes'); ?>
		<?php sample_code('input-group-sizes'); ?>

		<h3>Input Group Search</h3>
		<?php sample('input-group-search'); ?>
		<?php sample_code('input-group-search'); ?>
	</section>

	<!-- Control -->
	<section id="control" class="section">
		<h2>Control<code>forms/control.less</code></h2>
		<?php definitions('control'); ?>

		<h3>Checkbox</h3>
		<?php sample('control-checkbox'); ?>
		<?php sample_code('control-checkbox'); ?>

		<h3>Radio</h3>
		<?php sample('control-radio'); ?>
		<?php sample_code('control-radio'); ?>

		<h3>Control Inline</h3>
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
		<h2>Select<code>forms/select.less</code></h2>
		<?php definitions('select'); ?>

		<h3>Select</h3>
		<?php sample('select'); ?>
		<?php sample_code('select'); ?>

		<h3>Select Inverse</h3>
		<?php sample('select-inverse'); ?>
		<?php sample_code('select-inverse'); ?>
	</section>

	<!-- Select Sizes -->
	<section id="select-sizes" class="section">
		<h2>Select Sizes<code>forms/select-sizes.less</code></h2>
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
		<h2>Button<code>elements/button.less</code></h2>
		<p>Button styles are applied directly to the <code><?php echo htmlentities('<button>'); ?></code> element, button style and size modifiers do not require the <code>button</code> class added to the button element. Button styles can be set on an achor tag by using the <code>.button</code> class.</p>
		<?php sample('button'); ?>
		<?php definitions('button'); ?>
		<?php sample_code('button'); ?>

		<h3>Button Disabled</h3>
		<?php sample('button-disabled'); ?>
		<?php definitions('button-disabled'); ?>
		<?php sample_code('button-disabled'); ?>

		<h3>Button Block</h3>
		<?php sample('button-block'); ?>
		<?php definitions('button-block'); ?>
		<?php sample_code('button-block'); ?>

		<h3>Button Center</h3>
		<p><strong>Note:</strong> for <code>.button-center</code> to work the containing element needs to have <code>text-align: center;</code></p>
		<div class="text-center">
			<?php sample('button-center'); ?>
		</div>
		<?php sample_code('button-center'); ?>
	</section>

	<!-- Button Styles -->
	<section id="button-styles" class="section">
		<h2>Button Styles<code>elements/button-styles.less</code></h2>
		<?php sample('button-styles'); ?><br><br>
		<?php sample('button-styles-disabled'); ?>
		<?php definitions('button-styles'); ?>
		<?php sample_code('button-styles'); ?>
	</section>

	<!-- Button Indicators -->
	<section id="button-indicators" class="section">
		<h2>Button Indicators<code>elements/button-indicators.less</code></h2>
		<?php sample('button-indicators'); ?><br><br>
		<?php sample('button-indicators-disabled'); ?>
		<?php definitions('button-indicators'); ?>
		<?php sample_code('button-indicators'); ?>
	</section>

	<!-- Button Sizes -->
	<section id="button-sizes" class="section">
		<h2>Button Sizes<code>elements/button-sizes.less</code></h2>
		<?php sample('button-sizes'); ?>
		<?php definitions('button-sizes'); ?>
		<?php sample_code('button-sizes'); ?>
	</section>

	<!-- Button Group -->
	<section id="button-group" class="section">
		<h2>Button Group<code>elements/button-group.less</code></h2>
		<?php sample('button-group'); ?>
		<?php sample_code('button-group'); ?>

		<h3>Button Group Block</h3>
		<?php sample('button-group-block'); ?>
		<?php sample_code('button-group-block'); ?>
	</section>

	<!-- Figure -->
	<section id="figure" class="section">
		<h2>Figure<code>elements/figure.less</code></h2>
		<?php sample('figure'); ?>
		<?php definitions('figure'); ?>
		<?php sample_code('figure'); ?>
	</section>

	<!-- Media -->
	<section id="media" class="section">
		<h2>Media<code>elements/media.less</code></h2>
		<p>The media frame is for content loaded after the document is ready. It stops layouts from jumping when media is being loaded.</p>
		<p>The media frame wraps <code><?php echo htmlentities('<img>'); ?></code>, <code><?php echo htmlentities('<svg>'); ?></code>, <code><?php echo htmlentities('<video>'); ?></code>, and <code><?php echo htmlentities('<iframe>'); ?></code> by default, to wrap other content in a media container use the <code>media-inner</code> class. The <code>media-transparent</code> class removes the default background color on the media element.</p>
		<?php sample('media'); ?>
		<?php definitions('media'); ?>
		<?php sample_code('media'); ?>

		<h3>Media Ratios</h3>
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
		<pre class="language-less"><code class="language-less"><?php echo htmlentities('.media-ratio(@width, @height);'); ?></code></pre>
	</section>

	<!-- Figure -->
	<section id="nav" class="section">
		<h2>Nav<code>elements/nav.less</code></h2>
		<?php definitions('nav'); ?>

		<h3>Nav</h3>
		<p>For menu and navigation components use the <code><?php echo htmlentities('<nav>'); ?></code> element wrapped around an unordered list <code><?php echo htmlentities('<ul>'); ?></code>.</p>
		<?php sample('nav'); ?>
		<?php sample_code('nav'); ?>

		<h3>Nav Inline</h3>
		<p>To display navigaiton inline add the <code><?php echo htmlentities('nav-inline'); ?></code> class to the <code><?php echo htmlentities('<nav>'); ?></code> element.</p>
		<?php sample('nav-inline'); ?>
		<?php sample_code('nav-inline'); ?>
	</section>

	<!-- Table -->
	<section id="table" class="section">
		<h2>Table<code>elements/table.less</code></h2>
		<?php definitions('table'); ?>

		<h3>Table</h3>
		<?php sample('table'); ?>
		<?php sample_code('table'); ?>

		<h3>Table Border</h3>
		<?php sample('table-border'); ?>
		<?php sample_code('table-border'); ?>

		<h3>Table Block</h3>
		<?php sample('table-block'); ?>
		<?php sample_code('table-block'); ?>

		<h3>Table Responsive</h3>
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
		<h2>Utilities<code>utilities/utilities.less</code></h2>
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

	<?php
		
		//Support
		include('sections/support/support.php');
		include('sections/support/css.php');

	?>

	<!-- Accessibility -->
	<section id="accessibility" class="section section-header">
		<div class="title-group">
			<h1 class="title">Accessibility</h1>
			<p class="lead">Guide for using ARIA role attributes on elements for accessibility.</p>
		</div>
	</section>
	
	<!-- Aria Roles -->
	<section id="aria-roles" class="section">
		<h2>ARIA Roles</h2>
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
		<h2>Contributors</h2>
		<h3>Scott de Jonge</h3>
		<ul>
			<li>Twitter: <a href="https://twitter.com/scottdejonge">@scottdejonge</a></li>
			<li>Github: <a href="https://github.com/scottdejonge">@scottdejonge</a></li>
		</ul>
	</section>
	
	<!-- Licence -->
	<section id="licence" class="section">
		<h2>Licence</h2>
		
		<h3>Code License</h3>
		<p>Applies to code inside the <code>turret</code> directory.</p>
		<p>Code licensed under <a href="http://opensource.org/licenses/mit-license.html">MIT License</a></p>
		
		<h3>Documentation License</h3>
		<p>Applies to files inside the <code>docs</code> excluding files located in the <code>lib</code> directory.</p>
		<p>Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a></p>
	</section>
	
	<!-- License Notes -->
	<section id="licence-notes" class="section">	
		<h2>License Notes</h2>

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