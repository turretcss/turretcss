<?php include('includes/head.php'); ?>


<aside id="sidebar">
	<?php include('includes/navigation.php'); ?>
</aside>

<main id="content">

	<section id="introduction" class="section">
		<h2 class="section-title">Introduction</h2>
		<p class="lead">A library of Documentation, Elements, Components, Icons, and a Grid for rapid responsive website development.</p>
	</section>
	
	
	<?php
		include('sections/general/general.php');
		include('sections/general/images.php');
		include('sections/general/colors.php');
		include('sections/base/media-queries.php');
		
		//Base
		include('sections/base/fonts.php');
		include('sections/base/icons.php');
		include('sections/base/typography.php');
		
		//Grid
		include('sections/grid/grid.php');
		include('sections/grid/column.php');
		include('sections/grid/offset.php');
		include('sections/grid/push.php');
		include('sections/grid/pull.php');
		
		//Forms
		include('sections/forms/form.php');
		include('sections/forms/input.php');
		include('sections/forms/input-group.php');
		include('sections/forms/control.php');
		include('sections/forms/select.php');
		
		//Elements
		include('sections/elements/button.php');
		include('sections/elements/button-group.php');
		
		//Utilities
		include('sections/utilities/utilities.php');
		include('sections/utilities/utility-classes.php');
		include('sections/utilities/mixins.php');
		
		//Support
		include('sections/support/html.php');
		include('sections/support/css.php');
		include('sections/support/browser-support.php');
		include('sections/support/video-support.php');
		
		//Accessibility
		include('sections/accessibility.php');
	?>

</main>

<div class="clearfix"></div>

<?php include('includes/footer.php'); ?>