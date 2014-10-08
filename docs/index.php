<?php include('includes/head.php'); ?>


<aside id="sidebar">
	<?php include('includes/navigation.php'); ?>
</aside>

<?php
/*

	$sections = array(
		
		'general' => array(
			'id' => 'general',
			'title' => 'General',
			'file' => null,
			'description' => null,
			'code' => null,
			'' => 'general',
			'id' => 'general',
			'id' => 'general',
		),
	);
*/

?>

<main id="content">
	
	<?php
		include('sections/general.php');
		include('sections/base/typography.php');
		include('sections/base/media-queries.php');
		include('sections/base/icons.php');
		include('sections/forms/input.php');
	?>

</main>

<div class="clearfix"></div>

<?php include('includes/footer.php'); ?>