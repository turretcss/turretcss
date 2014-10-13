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
			'children' => array(
				'Colors' => 'colors',
				'Media Queries' => 'media-queries',
			),
		),
		array(
			'title' => 'Base',
			'link' => 'base',
			'children' => array(
				'Fonts' => 'fonts',
				'Icons' => 'icons',
				'Typography' => 'typography',
			),
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
			'title' => 'Form',
			'link' => 'form',
			'children' => array(
				'Input' => 'input',
				'Input Group' => 'input-group',
				'Control' => 'control',
				'Select' => 'select',
			),
		),
		array(
			'title' => 'Elements',
			'link' => 'elements',
			'children' => array(
				'Button' => 'button',
				'Button Group' => 'button-group',
				'Figure' => 'figure',
				'Media' => 'media',
				'Table' => 'table',
			),
		),
		array(
			'title' => 'Utilities',
			'link' => 'utilities',
			'children' => array(
				'Utility Classes' => 'utility-classes',
				'Mixins' => 'mixins',
			),
		),
		array(
			'title' => 'Support',
			'link' => 'support',
			'children' => array(
				'HTML' => 'html',
				'CSS' => 'css',
				'Browser Support' => 'browser-support',
				'Video Support' => 'video-support',
			),
		),
		array(
			'title' => 'Accessibility',
			'link' => 'accessibility',
		),
		array(
			'title' => 'Notes',
			'link' => 'notes',
			'children' => array(
				'Bugs & Issues' => 'bugs-and-issues',
				'Contributing' => 'contributing',
				'Licence' => 'licence',
			),
		),
	);

?>

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
					</ul>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>