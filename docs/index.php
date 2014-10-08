<?php include('includes/head.php'); ?>

<?php

	$sections = array(
		array(
			'title' => 'Introduction',
			'link' => 'introduction',
			'children' => array(
				'Usage' => 'usage',
				'Getting Started' => 'getting-started',
			),
		),
		array(
			'title' => 'General',
			'link' => 'general',
		),
		/*
'Typography' => 'typography',
		'Media Queries' => 'media-queries',
		'Icons' => 'icons',
		'Forms' => 'input',
*/
	);

?>

<aside id="sidebar">
	<nav class="navigation">
		<ul>
			<?php foreach ($sections as $section) : ?>
				<li>
					<a href="#<?php echo $section['link']; ?>"><?php echo $section['title']; ?></a>
					<?php if (!empty($section['children'])) : ?>
						<ul>
							<?php foreach ($section['children'] as $title => $link) : ?>
								<li><a href="#<?php echo $link; ?>"><?php echo $title; ?></a></li>
							<?php endforeach; ?>
						<ul>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</nav>
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