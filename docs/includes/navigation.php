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
		array(
			'title' => 'Grid',
			'link' => 'grid',
			'children' => array(
				'Columns' => 'columns',
				'Offset' => 'offset',
				'Push' => 'push',
				'Pull' => 'pull',
			),
		),
		array(
			'title' => 'Forms',
			'link' => 'forms',
			'children' => array(
				'Input' => 'input',
				'Input Group' => 'input-group',
				'Search' => 'search',
			),
		),
		
		/*
'Typography' => 'typography',
		'Media Queries' => 'media-queries',
		'Icons' => 'icons',
		'Forms' => 'input',
*/
	);

?>

<nav class="navigation">
	<ul>
		<?php foreach ($sections as $section) : ?>
			<li>
				<a href="#<?php echo $section['link']; ?>"><?php echo $section['title']; ?></a>
				<?php /*
if (!empty($section['children'])) : ?>
					<ul>
						<?php foreach ($section['children'] as $title => $link) : ?>
							<li><a href="#<?php echo $link; ?>"><?php echo $title; ?></a></li>
						<?php endforeach; ?>
					<ul>
				<?php endif; 
*/?>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>