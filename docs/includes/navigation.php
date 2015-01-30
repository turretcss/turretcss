<?php

	$sections = array(
		array(
			'title' => 'Getting Started',
			'link' => 'getting-started',
			'children' => array(
				'Download' => 'download',
				'Usage' => 'usage',
				'Templates' => 'templates',
			),
		),
		array(
			'title' => 'General',
			'link' => 'general',
			'children' => array(
				'Images' => 'images',
				'Colors' => 'colors',
				'Media Queries' => 'media-queries',
			),
		),
		array(
			'title' => 'Base',
			'link' => 'base',
			'children' => array(
				'Typography' => 'typography',
			),
		),
		array(
			'title' => 'Grid',
			'link' => 'grid',
			'children' => array(
				'Column' => 'column',
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
				'Nav' => 'nav',
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
				'CSS' => 'css',
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
				'Contributors' => 'contributors',
				'Licence' => 'licence',
				'Licence Notes' => 'licence-notes',
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