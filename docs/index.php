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

	<section id="getting-started" class="section">
		<h1 class="title">Getting Started</h1>
		<p class="lead">A introduction to Turret, how to get started, how to download and use.</p>
	</section>
	
	<section id="download" class="section">
		<h2 class="section-title">Download</h2>
		<p>There are three quick start ways to download Turret available:</p>
		<p><strong>Download the latest release</strong></p>
		<a class="button button-primary" href="https://github.com/bigfishtv/turret/archive/master.zip">Download from Github</a>
		<p><strong>Clone the repo</strong></p>
		<pre class="language-git"><code class="language-git"><?php echo htmlentities('git clone https://github.com/bigfishtv/turret.git'); ?></code></pre>
		<p><strong>Install with <a href="https://www.npmjs.org">npm</a></strong></p>
		<pre class="language-bash"><code class="language-bash"><?php echo htmlentities('npm install bigfishtv-turret'); ?></code></pre>
	</section>
	
	<section id="usage" class="section">
		<h2 class="section-title">Usage</h2>
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

	<?php
	
		//General
		include('sections/general/general.php');
		include('sections/general/images.php');
		include('sections/general/colors.php');
		include('sections/general/media-queries.php');
		
		//Base
		include('sections/base/base.php');
		include('sections/base/typography.php');
		
		//Grid
		include('sections/grid/grid.php');
		include('sections/grid/column.php');
		include('sections/grid/offset.php');
		include('sections/grid/push.php');
		include('sections/grid/pull.php');
	?>
	
	<!-- Form -->
	<section id="form" class="section">
		<div class="title-group">
			<h1 class="title">Form</h1>
			<p class="lead">A collection of form elements including inputs, input-groups, radio and checkbox controls, and selects.</p>
		</div>
		<h3 class="section-sub-title">Simple Example</h3>
		<?php sample('form-simple'); ?>
		<?php sample_code('form-simple'); ?>
		<h3 class="section-sub-title">Multi-Column Example</h3>
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
		<h3 class="section-sub-title">Input Group</h3>
		<?php sample('input-group'); ?>
		<?php sample_code('input-group'); ?>
		<h3 class="section-sub-title">Input Group Sizes</h3>
		<?php sample('input-group-sizes'); ?>
		<?php sample_code('input-group-sizes'); ?>
		<h3 class="section-sub-title">Input Group Search</h3>
		<?php sample('input-group-search'); ?>
		<?php sample_code('input-group-search'); ?>
	</section>

	<!-- Control -->
	<section id="control" class="section">
		<h2 class="section-title">Control<code>forms/control.less</code></h2>
		<?php definitions('control'); ?>
		<h3 class="section-sub-title">Checkbox</h3>
		<?php sample('control-checkbox'); ?>
		<?php sample_code('control-checkbox'); ?>
		<h3 class="section-sub-title">Radio</h3>
		<?php sample('control-radio'); ?>
		<?php sample_code('control-radio'); ?>
		<h3 class="section-sub-title">Control Inline</h3>
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
		<h3 class="section-sub-title">Select</h3>
		<?php sample('select'); ?>
		<?php sample_code('select'); ?>
		<h3 class="section-sub-title">Select Inverse</h3>
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
	<section id="elements" class="section">
		<div class="title-group">
			<h1 class="title">Elements</h1>
			<p class="lead">Set of elements including buttons, button-groups, figure, media, nav, and tables.</p>
		</div>
	</section>

	<!-- Button -->
	<section id="button" class="section">
		<h2 class="section-title">Button<code>elements/button.less</code></h2>
		<p>Button styles are applied directly to the <code><?php echo htmlentities('<button>'); ?></code> element, button style and size modifiers do not require the <code>button</code> class added to the button element. Button styles can be set on an achor tag by using the <code>.button</code> class.</p>
		<?php sample('button'); ?>
		<?php definitions('button'); ?>
		<?php sample_code('button'); ?>
		<h3 class="section-sub-title">Button Disabled</h3>
		<?php sample('button-disabled'); ?>
		<?php definitions('button-disabled'); ?>
		<?php sample_code('button-disabled'); ?>
		<h3 class="section-sub-title">Button Block</h3>
		<?php sample('button-block'); ?>
		<?php definitions('button-block'); ?>
		<?php sample_code('button-block'); ?>
		<h3 class="section-sub-title">Button Center</h3>
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
		<h3 class="section-sub-title">Button Group Block</h3>
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
		<p>The media frame wraps <code><?php echo htmlentities('<img>'); ?></code>, <code><?php echo htmlentities('<svg>'); ?></code>, <code><?php echo htmlentities('<video>'); ?></code>, and <code><?php echo htmlentities('<iframe>'); ?></code> by default, to wrap other content in a media container use the <code>media-inner</code> class. The <code>media-transparent</code> class removes the default background color on the media element.</p>
		<?php sample('media'); ?>
		<?php definitions('media'); ?>
		<?php sample_code('media'); ?>
		<h3 class="section-sub-title">Media Ratios</h3>
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

	<?php
		
		//Elements
		include('sections/elements/nav.php');
		include('sections/elements/table.php');
		
		//Utilities
		include('sections/utilities/utilities.php');
		include('sections/utilities/utility-classes.php');
		include('sections/utilities/mixins.php');
		
		//Support
		include('sections/support/support.php');
		include('sections/support/css.php');
		
		//Accessibility
		include('sections/accessibility.php');
		
		//Licence
		include('sections/notes/notes.php');
		include('sections/notes/contributors.php');
		include('sections/notes/licence.php');
		include('sections/notes/licence-notes.php');
	?>
	
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