<?php include('includes/head.php'); ?>


<aside id="sidebar">
	<?php include('includes/navigation.php'); ?>
</aside>

<main id="content">
	
	<section id="introduction" class="section">
		<h1 class="title">Introduction</h1>
		<p class="lead">A library of Documentation, Elements, and a Grid for rapid responsive website development.</p>
	</section>
	
	<section id="templates" class="section">
		<h2 class="section-title">Templates</h2>
		<p>For an example of HTML markup using Turret styles here are a few templates:</p>
		<div class="row">
			<div class="column-1-4">
				<figure>
					<div class="media media-1">
						<a href="templates/page.html" target="_blank">
							<img src="http://placehold.it/200" class="responsive">
						</a>
					</div>
					<figcaption><a href="templates/page.html" target="_blank">Page</a></figcaption>
				</figure>
			</div>
		</div>
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
		include('sections/forms/input.php');
		include('sections/forms/input-group.php');
		include('sections/forms/control.php');
		include('sections/forms/select.php');
		
		//Elements
		include('sections/elements/elements.php');
		include('sections/elements/button.php');
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
	?>

</main>

<div class="clearfix"></div>

<?php include('includes/footer.php'); ?>