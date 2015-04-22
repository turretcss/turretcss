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
		
		//Forms
		include('sections/forms/form.php');
		include('sections/forms/fieldset.php');
		include('sections/forms/form-message.php');
		include('sections/forms/input.php');
		include('sections/forms/input-group.php');
		include('sections/forms/control.php');
		include('sections/forms/select.php');
		
		//Elements
		include('sections/elements/elements.php');
		include('sections/elements/button.php');
		include('sections/elements/button-group.php');
		include('sections/elements/figure.php');
		include('sections/elements/media.php');
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
		<p class="text-center">Version 2.1 &middot; <a href="https://twitter.com/scottdejonge" target="_blank">@scottdejonge</a> made this <img class="emoji" draggable="false" alt="💩" src="https://twemoji.maxcdn.com/svg/1f4a9.svg"> at <a href="http://bigfish.tv/" target="_blank">bigfish.tv</a></p>
	</footer>

</main>

<div class="clearfix"></div>

<script type="text/javascript" src="js/toggle.js"></script>

<?php include('includes/footer.html'); ?>