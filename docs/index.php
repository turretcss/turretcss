<?php include('includes/head.php'); ?>


<aside id="sidebar">
	<?php include('includes/navigation.php'); ?>
</aside>

<main id="content">
	
	<?php
		include('sections/general.php');
		include('sections/base/typography.php');
		include('sections/base/media-queries.php');
		include('sections/base/icons.php');
		include('sections/grid/grid.php');
		include('sections/forms/input.php');
		include('sections/forms/input-group.php');
	?>

</main>

<div class="clearfix"></div>

<?php include('includes/footer.php'); ?>