<?php
	include_once('config.php');
	include_once('functions.php');
	include_once('includes/head.html'); 
 ?>

<aside id="sidebar" class="sidebar">
	<h3 class="sidebar-title"><a href="/">Turret</a><code>v3.0.0</code></h3>
	<?php include('includes/navigation.html'); ?>
</aside>

<main id="content" class="content">
	
	<header class="header visible-small-down">
		<button id="sidebar-toggle" class="navigation-toggle">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</button>
		<h1 class="header-title">Turret</h1>
	</header>
	
	<!-- Getting Started -->
	<section id="getting-started" class="section section-header">
		<div class="container">
			<h1 class="title">Getting Started</h1>
			<p class="lead">A introduction to Turret, how to get started, how to download and use.</p>
		</div>
	</section>
	
	<!-- Download -->
	<section id="download" class="section">
		<div class="container">
			<h2 class="section-title">Download</h2>
			<p>There are three quick start ways to download Turret available:</p>
			<div class="row">
				<div class="column-1-2 column-large-1-2 column-xlarge-1-3">
					<p>Install with <a href="https://www.npmjs.com/package/bigfishtv-turret">npm</a></p>
					<?php bash('npm install bigfishtv-turret'); ?>
				</div>
				<div class="column-1-2 column-large-1-2 column-xlarge-1-3">
					<p>Clone the repo from GitHub</p>
					<?php git('git clone https://github.com/bigfishtv/turret.git'); ?>
				</div>
				<div class="column-1-2 column-large-1-2 column-xlarge-1-3">
					<p>Download the latest release</p>
					<a class="button button-primary" href="https://github.com/bigfishtv/turret/archive/master.zip">Download from Github</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Structure -->
	<section id="structure" class="section">
		<div class="container">
			<h2 class="section-title">Structure</h2>
			<h3 class="section-block-title">Selectors</h3>
			<?php markup('<div class="[element] [element-behaviour] [element-style]">...</div>'); ?>
			<h3 class="section-block-title">Viewport</h3>
			<p>To ensure proper rendering and touch zooming, add the viewport meta tag to your <?php code('<head>'); ?>.</p>
			<?php markup('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">'); ?>
			<h3 class="section-block-title">HTML5 Doctype</h3>
			<p>Turret makes use of HTML5 elements and CSS properties that require the use of the HTML5 doctype.</p>
			<?php markup('<!DOCTYPE html>'); ?>
			<h3 class="section-block-title">Normalize</h3>
			<p>For improved cross-browser rendering, Turret uses <a href="http://necolas.github.io/normalize.css/" target="_blank">Normalize.css</a>, a project by <a href="http://twitter.com/necolas" target="_blank">Nicolas Gallagher</a> and <a href="http://twitter.com/jon_neal" target="_blank">Jonathan Neal</a>.</p>
			<h3 class="section-block-title">Template</h3>
			<?php sample_code('template'); ?>
		</div>
	</section>
	
	<!-- Usage -->
	<section id="usage" class="section">
		<div class="container">
			<h2 class="section-title">Usage</h2>
			<p>Turret is a collection of self-contained less files that include definitions and styles required for each element. These can be included and removed as required to minimise generated CSS styles.</p>
			<h3 class="section-block-title">CSS</h3>
			<p>To use Turret as CSS in your project include <code>turret.min.css</code> in your document <?php code('<head>'); ?></p>
			<h3 class="section-block-title">Less</h3>
			<p>To use Turret with Less in your project you will need to either:</p>
			<ol>
				<li>Import <code>turret.less</code> to include styles for all elements.</li>
				<li>Import <code>.less</code> files for each element as required.</li>
			</ol>
			<h3 class="section-block-title">Theming</h3>
			<p>To theme Turret you can override default style defintions either within your own project styles or included as <code>theme.less</code> to <code>@import</code> in your styles.</p>
			<?php definitions('theme'); ?>
			<h3 class="section-block-title">Repo File Structure</h3>
			<ul class="files">
				<li>turret/
					<ul>
						<li>dist/
							<ul>
								<li><code>turret.css</code></li>
								<li><code>turret.min.css</code></li>
							</ul>
						</li>
						<li>docs/</li>
						<li>examples/
							<ul>
								<li><code>grid.html</code></li>
								<li><code>template.html</code></li>
								<li><code>theme.html</code></li>
							</ul>
						</li>
						<li>turret/</li>
					</ul>
				</li>
			</ul>
			<h3 class="section-block-title">Turret File Structure</h3>
			<ul class="files">
				<li>turret/
					<ul>
						<li><code>turret.less</code></li>
						<li>lib/
							<ul>
								<li><code>normalize.less</code></li>
							</ul>
						</li>
						<li>base/
							<ul>
								<li><code>global.less</code></li>
								<li><code>body.less</code></li>
								<li><code>colors.less</code></li>
								<li><code>font.less</code></li>
								<li><code>link.less</code></li>
								<li><code>image.less</code></li>
								<li><code>breakpoints.less</code></li>
								<li><code>media-queries.less</code></li>
								<li><code>print.less</code></li>
							</ul>
						</li>
						<li>typography/
							<ul>
								<li><code>headings.less</code></li>
								<li><code>strong.less</code></li>
								<li><code>emphasis.less</code></li>
								<li><code>paragraph.less</code></li>
								<li><code>lead.less</code></li>
								<li><code>hr.less</code></li>
								<li><code>blockquote.less</code></li>
								<li><code>pullout.less</code></li>
								<li><code>list.less</code></li>
								<li><code>definition-list.less</code></li>
								<li><code>code.less</code></li>
								<li><code>pre.less</code></li>
								<li><code>kbd.less</code></li>
							</ul>
						</li>
						<li>grid/
							<ul>
								<li><code>container.less</code></li>
								<li><code>row.less</code></li>
								<li><code>column.less</code></li>
								<li><code>offset.less</code></li>
								<li><code>push.less</code></li>
								<li><code>pull.less</code></li>
							</ul>
						</li>
						<li>form/
							<ul>
								<li><code>label.less</code></li>
								<li><code>fieldset.less</code></li>
								<li><code>form-message.less</code></li>
								<li><code>input.less</code></li>
								<li><code>input-indicators.less</code></li>
								<li><code>input-sizes.less</code></li>
								<li><code>input-group.less</code></li>
								<li><code>input-group-sizes.less</code></li>
								<li><code>control.less</code></li>
								<li><code>select.less</code></li>
								<li><code>select-sizes.less</code></li>
							</ul>
						</li>
						<li>elements/
							<ul>
								<li><code>button.less</code></li>
								<li><code>button-styles.less</code></li>
								<li><code>button-indicators.less</code></li>
								<li><code>button-sizes.less</code></li>
								<li><code>button-group.less</code></li>
								<li><code>figure.less</code></li>
								<li><code>media.less</code></li>
								<li><code>nav.less</code></li>
								<li><code>table.less</code></li>
							</ul>
						</li>	
						<li>mixins/
							<ul>
								<li><code>mixins.less</code></li>
								<li><code>font.less</code></li>
								<li><code>border-radius.less</code></li>
								<li><code>background.less</code></li>
								<li><code>placeholder.less</code></li>
								<li><code>arrows.less</code></li>
								<li><code>transitions.less</code></li>
								<li><code>transforms.less</code></li>
								<li><code>animations.less</code></li>
								<li><code>filters.less</code></li>
								<li><code>flexbox.less</code></li>
							</ul>
						</li>
						<li>utilities/
							<ul>
								<li><code>utility-classes.less</code></li>
								<li><code>font-size.less</code></li>
								<li><code>font-family.less</code></li>
								<li><code>text.less</code></li>
								<li><code>text-color.less</code></li>
								<li><code>display.less</code></li>
								<li><code>positioning.less</code></li>
								<li><code>float.less</code></li>
								<li><code>visiblity.less</code></li>
							</ul>
						</li>
						<li>accessibility/
							<ul>
								<li><code>screen-reader.less</code></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Documentation -->
	<section id="documentation" class="section">
		<div class="container">
			<h2 class="section-title">Documentation</h2>
			<p>Turret uses npm for it's build system with watch and build scripts for documentation and for deployment:</p>
			<p><strong>Watch Turret</strong></p>
			<p>Watch Less files in <code>turret</code> concatenate and compile</p>
			<?php bash('npm run watch:turret'); ?>
			<p><strong>Watch Docs</strong></p>
			<p>Watch Less files in <code>docs/styles</code> concatenate and compile</p>
			<?php bash('npm run watch:docs'); ?>
			<p><strong>Build</strong></p>
			<p>Build Less files concatenate and compile</p>
			<?php bash('npm run build'); ?>
			<p><strong>Dist CSS</strong></p>
			<p>Build Less files in <code>turret</code> concatenate and compile into <code>dist</code></p>
			<?php bash('npm run dist:css'); ?>
			<p><strong>Dist Min</strong></p>
			<p>Build Less files in <code>turret</code> concatenate, compile, and minimise into <code>dist</code></p>
			<?php bash('npm run dist:min'); ?>
			<p><strong>Dist</strong></p>
			<p>Run Dist CSS and Dist Min</p>
			<?php bash('npm run dist'); ?>
	</section>

	<!-- Examples -->
	<section id="examples" class="section">
		<div class="container">
			<h2 class="section-title">Examples</h2>
			<div class="row">
				<div class="column-1-4 column-small-1-2">
					<a class="example" href="../examples/template.html" target="_blank">
						<img src="img/examples/template.svg" class="responsive">
						<p>Template</p>
					</a>
				</div>
				<div class="column-1-4 column-small-1-2">
					<a class="example" href="../examples/grid.html" target="_blank">
						<img src="img/examples/grid.svg" class="responsive">
						<p>Grid</p>
					</a>
				</div>
				<div class="column-1-4 column-small-1-2">
					<a class="example" href="../examples/theme.html" target="_blank">
						<img src="img/examples/theme.svg" class="responsive">
						<p>Theme</p>
					</a>
				</div>
			</div>
		</div>
	</section>

	
	<!-- Base -->
	<section id="base" class="section section-header">
		<div class="container">
			<h1 class="title">Base</h1>
			<p class="lead">An overview of Turret and basic styling behaviours including color palettes, text colors, amd media queries. Turret base styles for body, images, typography, basic generic typographic styles and responsive text scaling behaviour.</p>
		</div>
	</section>

	<!-- Global -->
	<section id="global" class="section">
		<div class="container">
			<h2 class="section-title">Global<code>base/global.less</code></h2>
			<?php definitions('base/global'); ?>

			<h3 class="section-block-title">Border Radius</h3>

			<h3 class="section-block-title">Z-Index</h3>

			<h3 class="section-block-title">Animations</h3>

			<h3 class="section-block-title">Transitions</h3>

			<h3 class="section-block-title">Height</h3>

			<h3 class="section-block-title">Padding</h3>
			
		</div>
	</section>

	<!-- Body -->
	<section id="body" class="section">
		<div class="container">
			<h2 class="section-title">Body<code>base/body.less</code></h2>
			<p>Some top level definitions for general styles on the <?php code('<body>'); ?> tag.</p>
			<?php definitions('base/body'); ?>
		</div>
	</section>

	<!-- Colors -->
	<section id="colors" class="section">
		<div class="container">
			<h2 class="section-title">Colors<code>base/colors.less</code></h2>
			<h3 class="section-block-title">Shades</h3>
			<div class="swatches">
				<div class="swatch background-white"><small>White</small></div>
				<div class="swatch background-light-grey"><small>Light Grey</small></div>
				<div class="swatch background-grey"><small>Grey</small></div>
				<div class="swatch background-dark-grey"><small>Dark Grey</small></div>
				<div class="swatch background-black"><small>Black</small></div>
			</div>
			<!-- Indicators -->
			<h3 class="section-block-title">Indicators</h3>
			<div class="swatches">
				<div class="swatch background-info"><small>Info</small></div>
				<div class="swatch background-error"><small>Error</small></div>
				<div class="swatch background-warning"><small>Warning</small></div>
				<div class="swatch background-success"><small>Success</small></div>
			</div>
			<!-- Palette -->
			<h3 class="section-block-title">Palette</h3>
			<div class="swatches">
				<div class="swatch background-light"><small>Light</small></div>
				<div class="swatch background-primary"><small>Primary</small></div>
				<div class="swatch background-secondary"><small>Secondary</small></div>
				<div class="swatch background-tertiary"><small>Tertiary</small></div>
				<div class="swatch background-dark"><small>Dark</small></div>
			</div>
			<?php definitions('base/colors'); ?>
		</div>
	</section>

	<!-- Font -->
	<section id="font" class="section">
		<div class="container">
			<h2 class="section-title">Font<code>base/font.less</code></h2>
			<p>Some top level definitions for the base font-size styles on the <?php code('<html>'); ?> tag, with breakpoints.</p>
			<?php definitions('base/font'); ?>
			<h3 class="section-block-title">Font Families</h3>
			<?php sample('font-family'); ?>
			<h3 class="section-block-title">Font Sizes</h3>
			<?php sample('font-size'); ?>
		</div>
	</section>

	<!-- Link -->
	<section id="link" class="section">
		<div class="container">
			<h2 class="section-title">Link<code>base/link.less</code></h2>
			<p><a href="">Link</a></p>
			<?php definitions('base/link'); ?>
			<?php markup('<a href="">...</a>'); ?>
		</div>
	</section>

	<!-- Image -->
	<section id="image" class="section">
		<div class="container">
			<h2 class="section-title">Image<code>base/image.less</code></h2>
			<h3 class="section-block-title">Responsive Image</h3>
			<p>Images in Turret can be made responsive-friendly via the addition of the <code>.responsive</code> class. This applies <code>max-width: 100%;</code> and <code>height: auto;</code> to the image so that it scales nicely to the parent element.</p>
			<img src="img/photo.svg" class="responsive">
			<?php markup('<img src="..." class="responsive">'); ?>

			<h3 class="section-block-title">Image Styles</h3>
			<div class="row">
				<div class="column-1-2 text-center">
					<img src="img/image.svg" class="rounded">
					<?php less('@image-rounded-border-radius: 8px;'); ?>
					<?php markup('<img src="..." class="rounded">'); ?>
				</div>
				<div class="column-1-2 text-center">
					<img src="img/image.svg" class="circle">
					<?php markup('<img src="..." class="circle">'); ?>
				</div>
			</div>
		</div>
	</section>

	<!-- Breakpoints -->
	<section id="breakpoints" class="section">
		<div class="container">
			<h2 class="section-title">Breakpoints<code>base/breakpoints.less</code></h2>
			<?php definitions('base/breakpoints'); ?>
			<table class="table table-bordered table-block table-responsive">
				<thead>
					<tr>
						<th width="25%">Breakpoint</th>
						<th width="25%">Device</th>
						<th width="25%">Min Width</th>
						<th width="25%">Max Width</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>xsmall</td>
						<td>Phone</td>
						<td class="is-null"></td>
						<td>768px</td>
					</tr>
					<tr>
						<td>small</td>
						<td>Tablet</td>
						<td>768px</td>
						<td>1024px</td>
					</tr>
					<tr>
						<td>medium</td>
						<td>Laptop</td>
						<td>1024px</td>
						<td>1280px</td>
					</tr>
					<tr>
						<td>large</td>
						<td>Desktop</td>
						<td>1280px</td>
						<td>1680px</td>
					</tr>
					<tr>
						<td>xlarge</td>
						<td>Large Screen</td>
						<td>1680px</td>
						<td class="is-null"></td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>

	<!-- Media Queries -->
	<section id="media-queries" class="section">
		<div class="container">
			<h2 class="section-title">Media Queries<code>base/media-queries.less</code></h2>
			<?php definitions('base/media-queries'); ?>
		</div>
	</section>

	<!-- Print -->
	<section id="print" class="section">
		<div class="container">
			<h2 class="section-title">Print<code>base/print.less</code></h2>
			<p>By default Turret's print styles are formatted for <code>A4</code> page size with a margin of <code>1.5cm 2cm</code>. Print styles include making text <code>@black</code>, and removing backgrounds from elements by default. Links are displayed next to anchors using <code>:after</code> pseudo content.</p>
			<?php definitions('base/print'); ?>
		</div>
	</section>

	<!-- Typography -->
	<section id="typography" class="section section-header">
		<div class="container">
			<h1 class="title">Typography</h1>
			<p class="lead">.</div>
		</div>
	</section>

	<!-- Headings -->
	<section id="headings" class="section">
		<div class="container">
			<h2 class="section-title">Headings<code>typography/headings.less</code></h2>
			<?php sample('headings'); ?>
			<?php definitions('typography/headings'); ?>
			<?php sample_code('headings'); ?>
		</div>
	</section>


	<!-- Strong -->
	<section id="strong" class="section">
		<div class="container">
			<h2 class="section-title">Strong<code>typography/strong.less</code></h2>
			<p><strong>strong</strong></p>
			<?php definitions('typography/strong'); ?>
			<?php markup('<strong>...</strong>'); ?>
		</div>
	</section>

	<!-- Emphasis -->
	<section id="emphasis" class="section">
		<div class="container">
			<h2 class="section-title">Emphasis<code>typography/emphasis.less</code></h2>
			<p><em>emphasis</em></p>
			<?php definitions('typography/emphasis'); ?>
			<?php markup('<em>...</em>'); ?>
		</div>
	</section>

	<!-- Paragraph -->
	<section id="paragraph" class="section">
		<div class="container">
			<h2 class="section-title">Paragraph<code>typography/paragraph.less</code></h2>
			<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
			<?php definitions('typography/paragraph'); ?>
			<?php markup('<p>...</p>'); ?>
		</div>
	</section>

	<!-- Lead -->
	<section id="lead" class="section">
		<div class="container">
			<h2 class="section-title">Lead<code>typography/lead.less</code></h2>
			<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur.</p>
			<?php definitions('typography/lead'); ?>
			<?php markup('<p class="lead">...</p>'); ?>
		</div>
	</section>

	<!-- hr -->
	<section id="hr" class="section">
		<div class="container">
			<h2 class="section-title">Horizontal Rule<code>typography/hr.less</code></h2>
			<hr>
			<?php definitions('typography/hr'); ?>
			<?php markup('<hr>'); ?>
		</div>
	</section>

	<!-- Blockquote -->
	<section id="blockquote" class="section">
		<div class="container">
			<h2 class="section-title">Blockquote<code>typography/blockquote.less</code></h2>
			<blockquote>
				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur.</p>
				<cite>Name</cite>
			</blockquote>
			<?php definitions('typography/blockquote'); ?>
			<?php sample_code('blockquote'); ?>
		</div>
	</section>

	<!-- Pullout -->
	<section id="pullout" class="section">
		<div class="container">
			<h2 class="section-title">Pullout<code>typography/pullout.less</code></h2>
			<p class="pullout">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
			<?php definitions('typography/pullout'); ?>
			<?php markup('<p class="pullout">...</p>'); ?>
		</div>
	</section>

	<!-- List -->
	<section id="list" class="section">
		<div class="container">
			<h2 class="section-title">List<code>typography/list.less</code></h2>
			<?php definitions('typography/list'); ?>
			<h3 class="section-block-title">Unordered List</h3>
			<ul>
				<li>Vehicula Dapibus Tellus Fermentum</li>
				<li>Vehicula Dapibus Tellus Fermentum</li>
				<li>Vehicula Dapibus Tellus Fermentum
					<ul>
						<li>Vehicula Dapibus Tellus Fermentum</li>
						<li>Vehicula Dapibus Tellus Fermentum</li>
					</ul>
				</li>
			</ul>
			<?php sample_code('unordered-list'); ?>
			<h3 class="section-block-title">Ordered List</h3>
			<ol>
				<li>Vehicula Dapibus Tellus Fermentum</li>
				<li>Vehicula Dapibus Tellus Fermentum</li>
				<li>Vehicula Dapibus Tellus Fermentum
					<ol>
						<li>Vehicula Dapibus Tellus Fermentum</li>
						<li>Vehicula Dapibus Tellus Fermentum</li>
					</ol>
				</li>
			</ol>
			<?php sample_code('ordered-list'); ?>
		</div>
	</section>

	<!-- Definition List -->
	<section id="definition-list" class="section">
		<div class="container">
			<h2 class="section-title">Definition List<code>typography/definition-list.less</code></h2>
			<dl>
				<dt>Fringilla Ipsum Tellus</dt>
				<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
				<dt>Fringilla Ipsum Tellus</dt>
				<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
				<dt>Fringilla Ipsum Tellus</dt>
				<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
			</dl>
			<?php definitions('typography/definition-list'); ?>
			<?php sample_code('definition-list'); ?>
		</div>
	</section>

	<!-- Code -->
	<section id="code" class="section">
		<div class="container">
			<h2 class="section-title">Code<code>typography/code.less</code></h2>
			<?php code('<p>code</p>'); ?>
			<?php definitions('typography/code'); ?>
			<?php markup('<code>...</code>'); ?>
		</div>
	</section>

	<!-- Pre -->
	<section id="pre" class="section">
		<div class="container">
			<h2 class="section-title">Pre<code>typography/pre.less</code></h2>
			<pre><code><?php code('<p>pre</p>'); ?></code></pre>
			<?php definitions('typography/pre'); ?>
			<?php markup('<pre><code>...</code></pre>'); ?>
		</div>
	</section>

	<!-- Kbd -->
	<section id="kbd" class="section">
		<div class="container">
			<h2 class="section-title">Kbd<code>typography/kbd.less</code></h2>
			<p>Save file: <kbd>cmd</kbd> + <kbd>S</kbd></p>
			<?php definitions('typography/kbd'); ?>
			<?php markup('<kbd>...</kbd>'); ?>
		</div>
	</section>

	<!-- Grid -->
	<section id="grid" class="section section-header">
		<div class="container">
			<h1 class="title">Grid</h1>
			<p class="lead">A demonstration of the 12 column grid system with columns, nested columns, offsets, and push/pull examples.</p>
		</div>
	</section>

	<!-- Container -->
	<section id="container" class="section">
		<div class="container">
			<h2 class="section-title">Container<code>grid/container.less</code></h2>
			<p>Content wrapper with <code>max-width</code> set at differing sizes at various media query breakpoints.</p>
			<p>By default the container has <code>@gutter</code> padding applied to the left and right of the container <?php code('<div>'); ?>, this is configurable for each breakpoint as needed.</p>
			<?php definitions('grid/container'); ?>
			<?php sample_code('container'); ?>
		</div>
	</section>

	<!-- Row -->
	<section id="row" class="section">
		<div class="container">
			<h2 class="section-title">Row<code>grid/row.less</code></h2>
			<p>Containing element for children with <code>.column-1*</code> attributes set, used for a clearfix for column floats as well as negating the outer gutters applied to columns.</p>
			<?php markup('<div class="row">...</div>'); ?>
		</div>
	</section>

	<!-- Gutter -->
	<section id="gutter" class="section">
		<div class="container">
			<h2 class="section-title">Gutter<code>grid/gutter.less</code></h2>
			<h3 class="section-block-title">Gutters Classes</h3>
			<div class="grid-item gutter-bottom">Gutter Bottom</div>
			<div class="grid-item gutter-left">Gutter Left</div>
			<div class="grid-item gutter-right">Gutter Right</div>
			<div class="grid-item gutter-top">Gutter Top</div>
			<?php definitions('grid/gutter'); ?>
			<?php sample_code('gutters'); ?>
			<h3 class="section-block-title">No Gutter</h3>
			<p>Add <code>no-gutter</code> utility class to remove default gutters applied to a container or columns.</p>
			<div class="row">
				<div class="column-1 no-gutter">
					<div class="grid-item">No Gutter</div>
				</div>
			</div>
			<?php markup('<div class="column-1 no-gutter">...</div>'); ?>
			<h3 class="section-block-title">No Gutter Breakponts</h3>
			<p>General <code>no-gutter</code> utility classes for each responsive breakpoint.</p>
			<table class="table table-bordered table-block table-responsive">
				<thead>
					<tr>
						<th width="25%"></th>
						<th width="15%">Extra Small Devices<br><small>Phones (<480px)</small></th>
						<th width="15%">Small Devices<br><small>Tablets (480px - 768px)</small></th>
						<th width="15%">Medium devices<br><small>Laptops (768px - 1024px)</small></th>
						<th width="15%">Large devices<br><small>Desktops (1024px - 1280px)</small></th>
						<th width="15%">Extra Large devices<br><small>Large Desktops (≥1680px)</small></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.no-gutter-xsmall</code></td>
						<td class="is-hidden">No gutter</td>
						<td class="is-visible">Gutter</td>
						<td class="is-visible">Gutter</td>
						<td class="is-visible">Gutter</td>
						<td class="is-visible">Gutter</td>
					</tr>
					<tr>
						<td><code>.no-gutter-small</code></td>
						<td class="is-visible">Gutter</td>
						<td class="is-hidden">No gutter</td>
						<td class="is-visible">Gutter</td>
						<td class="is-visible">Gutter</td>
						<td class="is-visible">Gutter</td>
					</tr>
					<tr>
						<td><code>.no-gutter-medium</code></td>
						<td class="is-visible">Gutter</td>
						<td class="is-visible">Gutter</td>
						<td class="is-hidden">No gutter</td>
						<td class="is-visible">Gutter</td>
						<td class="is-visible">Gutter</td>
					</tr>
					<tr>
						<td><code>.no-gutter-large</code></td>
						<td class="is-visible">Gutter</td>
						<td class="is-visible">Gutter</td>
						<td class="is-visible">Gutter</td>
						<td class="is-hidden">No gutter</td>
						<td class="is-visible">Gutter</td>
					</tr>
					<tr>
						<td><code>.no-gutter-xlarge</code></td>
						<td class="is-visible">Gutter</td>
						<td class="is-visible">Gutter</td>
						<td class="is-visible">Gutter</td>
						<td class="is-visible">Gutter</td>
						<td class="is-hidden">No gutter</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>

	
	<!-- Column -->
	<section id="column" class="section">
		<div class="container">
			<h2 class="section-title">Column<code>grid/column.less</code></h2>
			<p>Columns can be applied to html elements as classes in order to position elements, columns are floated left with <code>@gutter</code> padding applied to the left and right of the element. Columns are realtively positioned and have a min-height of 1px.</p>
			<h3 class="section-block-title hidden-small-down">Columns</h3>
			<div class="hidden-small-down">
				<?php sample('columns'); ?>
			</div>
			<h3 class="section-block-title">Responsive Breakpoint Columns</h3>
			<div class="row">
				<div class="column-1-5 column-xlarge-1-6 column-medium-1-3 column-small-1-2">
					<div class="grid-item">Responsive Breakpoints</div>
				</div>
			</div>
			<?php markup('<div class="column-1-5 column-xlarge-1-6 column-medium-1-3 column-small-1-2">...</div>'); ?>
			<h3 class="section-block-title">Nested Columns</h3>
			<div class="row">
				<div class="column-1">
					<div class="grid-item">
						<div class="row">
							<div class="column-1-2"><div class="grid-item grid-item-nested">Column-1-2</div></div>
							<div class="column-1-2"><div class="grid-item grid-item-nested">Column-1-2</div></div>
						</div>
					</div>
				</div>
			</div>
			<?php sample_code('nested-columns'); ?>
			<h3 class="section-block-title">Column Center</h3>
			<p>Adding the <code>column-center</code> class to a column removes it's float and sets an auto margin left and right to center.</p>
			<div class="row">
				<div class="column-1-2 column-center">
					<div class="grid-item no-margin">Column Center</div>
				</div>
			</div>
			<?php sample_code('column-center'); ?>
		</div>
	</section>

	<!-- Offset -->
	<section id="offset" class="section">
		<div class="container">
			<h2 class="section-title">Offset<code>grid/offset.less</code></h2>
			<p>Column offset classes can be added to columns to add a <code>margin-left</code> value that corresponds to the offset column class width.</p>
			<div class="row">
				<div class="column-1-2 column-offset-1-2">
					<div class="grid-item no-margin">Column Offset</div>
				</div>
			</div>
			<?php markup('<div class="column-1-2 column-offset-1-2">...</div>'); ?>
		</div>
	</section>

	<!-- Push -->
	<section id="push" class="section">
		<div class="container">
			<h2 class="section-title">Push<code>grid/push.less</code></h2>
			<p>Column push classes can be added to columns to add a <code>left</code> value that corresponds to the push column class width.</p>
			<div class="row">
				<div class="column-1-2 column-push-1-12">
					<div class="grid-item no-margin">Column Push</div>
				</div>
			</div>
			<?php markup('<div class="column-1-2 column-push-1-12">...</div>'); ?>
		</div>
	</section>
	
	<!-- Pull -->
	<section id="pull" class="section">
		<div class="container">
			<h2 class="section-title">Pull<code>grid/pull.less</code></h2>
			<p>Column pull classes can be added to columns to add a <code>left</code> value that corresponds to the pull column class width.</p>
			<div class="row">
				<div class="column-1-2 column-pull-1-12">
					<div class="grid-item no-margin">Column Pull</div>
				</div>
			</div>
			<?php markup('<div class="column-1-2 column-pull-1-12">...</div>'); ?>
		</div>
	</section>
	
	<!-- Form -->
	<section id="form" class="section section-header">
		<div class="container">
			<h1 class="title">Form</h1>
			<p class="lead">A collection of form elements including inputs, input-groups, radio and checkbox controls, and selects.</p>
		</div>
	</section>

	<section id="form-examples" class="section">
		<div class="container">
			<h2 class="section-title">Form Examples</h2>
			<h3 class="section-block-title">Simple Example</h3>
			<?php sample('form-simple'); ?>
			<?php sample_code('form-simple'); ?>
			<h3 class="section-block-title">Multi-Column Example</h3>
			<?php sample('form-multi-column'); ?>
			<?php sample_code('form-multi-column'); ?>
		</div>
	</section>

	<!-- Label -->
	<section id="label" class="section">
		<div class="container">
			<h2 class="section-title">Label<code>forms/label.less</code></h2>
			<?php sample('label'); ?>
			<?php definitions('form/label'); ?>
			<?php sample_code('label'); ?>
		</div>
	</section>
	
	<!-- Fieldset -->
	<section id="fieldset" class="section">
		<div class="container">
			<h2 class="section-title">Fieldset<code>forms/fieldset.less</code></h2>
			<?php sample('fieldset'); ?>
			<?php definitions('form/fieldset'); ?>
			<?php sample_code('fieldset'); ?>
		</div>
	</section>

	<!-- Form Message -->
	<section id="form-message" class="section">
		<div class="container">
			<h2 class="section-title">Form Message<code>forms/form-message.less</code></h2>
			<?php sample('form-message'); ?>
			<?php definitions('form/form-message'); ?>
			<?php sample_code('form-message'); ?>
		</div>
	</section>

	<!-- Input -->
	<section id="input" class="section">
		<div class="container">
			<h2 class="section-title">Input<code>forms/input.less</code></h2>
			<?php sample('input'); ?>
			<?php definitions('form/input'); ?>
			<?php sample_code('input'); ?>
		</div>
	</section>

	<!-- Input Indicators -->
	<section id="input-indicators" class="section">
		<div class="container">
			<h2 class="section-title">Input Indicators<code>forms/input-indicators.less</code></h2>
			<?php sample('input-indicators'); ?>
			<?php definitions('form/input-indicators'); ?>
			<?php sample_code('input-indicators'); ?>
		</div>
	</section>

	<!-- Input Sizes -->
	<section id="input-sizes" class="section">
		<div class="container">
			<h2 class="section-title">Input Sizes<code>forms/input-sizes.less</code></h2>
			<?php sample('input-sizes'); ?>
			<?php definitions('form/input-sizes'); ?>
			<?php sample_code('input-sizes'); ?>
		</div>
	</section>

	<!-- Input Group -->
	<section id="input-group" class="section">
		<div class="container">
			<h2 class="section-title">Input Group<code>forms/input-group.less</code></h2>
			<h3 class="section-block-title">Input Group</h3>
			<?php sample('input-group'); ?>
			<?php sample_code('input-group'); ?>
			<h3 class="section-block-title">Input Group Search</h3>
			<?php sample('input-group-search'); ?>
			<?php sample_code('input-group-search'); ?>
		</div>
	</section>

	<!-- Input Group Sizes -->
	<section id="input-group-sizes" class="section">
		<div class="container">
			<h2 class="section-title">Input Group Sizes<code>forms/input-group-sizes.less</code></h2>
			<?php sample('input-group-sizes'); ?>
			<?php sample_code('input-group-sizes'); ?>
		</div>
	</section>

	<!-- Control -->
	<section id="control" class="section">
		<div class="container">
			<h2 class="section-title">Control<code>forms/control.less</code></h2>
			<?php definitions('form/control'); ?>
			<h3 class="section-block-title">Checkbox</h3>
			<?php sample('control-checkbox'); ?>
			<?php sample_code('control-checkbox'); ?>
			<h3 class="section-block-title">Radio</h3>
			<?php sample('control-radio'); ?>
			<?php sample_code('control-radio'); ?>
			<h3 class="section-block-title">Control Inline</h3>
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
		</div>
	</section>

	<!-- Select -->
	<section id="select" class="section">
		<div class="container">
			<h2 class="section-title">Select<code>forms/select.less</code></h2>
			<?php definitions('form/select'); ?>
			<h3 class="section-block-title">Select</h3>
			<?php sample('select'); ?>
			<?php sample_code('select'); ?>
			<h3 class="section-block-title">Select Inverse</h3>
			<?php sample('select-inverse'); ?>
			<?php sample_code('select-inverse'); ?>
		</div>
	</section>

	<!-- Select Sizes -->
	<section id="select-sizes" class="section">
		<div class="container">
			<h2 class="section-title">Select Sizes<code>forms/select-sizes.less</code></h2>
			<?php sample('select-sizes'); ?>
			<?php definitions('form/select-sizes'); ?>
			<?php sample_code('select-sizes'); ?>
		</div>
	</section>
	
	<!-- Elements -->
	<section id="elements" class="section section-header">
		<div class="container">
			<h1 class="title">Elements</h1>
			<p class="lead">Set of elements including buttons, button-groups, figure, media, nav, and tables.</p>	
		</div>
	</section>

	<!-- Button -->
	<section id="button" class="section">
		<div class="container">
			<h2 class="section-title">Button<code>elements/button.less</code></h2>
			<p>Button styles are applied directly to the <?php code('<button>'); ?> element, button style and size modifiers do not require the <code>button</code> class added to the button element. Button styles can be set on an achor tag by using the <code>.button</code> class.</p>
			<?php sample('button'); ?>
			<?php definitions('elements/button'); ?>
			<?php sample_code('button'); ?>
			<h3 class="section-block-title">Button Disabled</h3>
			<?php sample('button-disabled'); ?>
			<?php definitions('elements/button-disabled'); ?>
			<?php sample_code('button-disabled'); ?>
			<h3 class="section-block-title">Button Block</h3>
			<?php sample('button-block'); ?>
			<?php definitions('elements/button-block'); ?>
			<?php sample_code('button-block'); ?>
			<h3 class="section-block-title">Button Center</h3>
			<p><strong>Note:</strong> for <code>.button-center</code> to work the containing element needs to have <code>text-align: center;</code></p>
			<div class="text-center">
				<?php sample('button-center'); ?>
			</div>
			<?php sample_code('button-center'); ?>
		</div>
	</section>

	<!-- Button Styles -->
	<section id="button-styles" class="section">
		<div class="container">
			<h2 class="section-title">Button Styles<code>elements/button-styles.less</code></h2>
			<?php sample('button-styles'); ?><br><br>
			<?php sample('button-styles-disabled'); ?>
			<?php definitions('elements/button-styles'); ?>
			<?php sample_code('button-styles'); ?>
		</div>
	</section>

	<!-- Button Indicators -->
	<section id="button-indicators" class="section">
		<div class="container">
			<h2 class="section-title">Button Indicators<code>elements/button-indicators.less</code></h2>
			<?php sample('button-indicators'); ?><br><br>
			<?php sample('button-indicators-disabled'); ?>
			<?php definitions('elements/button-indicators'); ?>
			<?php sample_code('button-indicators'); ?>
		</div>
	</section>

	<!-- Button Sizes -->
	<section id="button-sizes" class="section">
		<div class="container">
			<h2 class="section-title">Button Sizes<code>elements/button-sizes.less</code></h2>
			<?php sample('button-sizes'); ?>
			<?php definitions('elements/button-sizes'); ?>
			<?php sample_code('button-sizes'); ?>
		</div>
	</section>

	<!-- Button Group -->
	<section id="button-group" class="section">
		<div class="container">
			<h2 class="section-title">Button Group<code>elements/button-group.less</code></h2>
			<?php sample('button-group'); ?>
			<?php sample_code('button-group'); ?>
			<h3 class="section-block-title">Button Group Block</h3>
			<?php sample('button-group-block'); ?>
			<?php sample_code('button-group-block'); ?>
		</div>
	</section>

	<!-- Figure -->
	<section id="figure" class="section">
		<div class="container">
			<h2 class="section-title">Figure<code>elements/figure.less</code></h2>
			<?php sample('figure'); ?>
			<?php definitions('elements/figure'); ?>
			<?php sample_code('figure'); ?>
		</div>
	</section>

	<!-- Media -->
	<section id="media" class="section">
		<div class="container">
			<h2 class="section-title">Media<code>elements/media.less</code></h2>
			<p>The media frame is for content loaded after the document is ready. It stops layouts from jumping when media is being loaded.</p>
			<p>The media frame wraps <?php code('<img>'); ?>, <?php code('<svg>'); ?>, <?php code('<video>'); ?>, and <?php code('<iframe>'); ?> by default, to wrap other content in a media container use the <code>media-inner</code> class. The <code>media-transparent</code> class removes the default background color on the media element.</p>
			<?php sample('media'); ?>
			<?php definitions('elements/media'); ?>
			<?php sample_code('media'); ?>
			<h3 class="section-block-title">Media Ratios</h3>
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
			<?php less('.media-ratio(@width, @height);'); ?>
		</div>
	</section>

	<!-- Figure -->
	<section id="nav" class="section">
		<div class="container">
			<h2 class="section-title">Nav<code>elements/nav.less</code></h2>
			<?php definitions('elements/nav'); ?>
			<h3 class="section-block-title">Nav</h3>
			<p>For menu and navigation components use the <?php code('<nav>'); ?> element wrapped around an unordered list <?php code('<ul>'); ?>.</p>
			<?php sample('nav'); ?>
			<?php sample_code('nav'); ?>
			<h3 class="section-block-title">Nav Inline</h3>
			<p>To display navigaiton inline add the <?php code('nav-inline'); ?> class to the <?php code('<nav>'); ?> element.</p>
			<?php sample('nav-inline'); ?>
			<?php sample_code('nav-inline'); ?>
		</div>
	</section>

	<!-- Table -->
	<section id="table" class="section">
		<div class="container">
			<h2 class="section-title">Table<code>elements/table.less</code></h2>
			<?php definitions('elements/table'); ?>
			<h3 class="section-block-title">Table</h3>
			<?php sample('table'); ?>
			<?php sample_code('table'); ?>
			<h3 class="section-block-title">Table Border</h3>
			<?php sample('table-border'); ?>
			<?php sample_code('table-border'); ?>
			<h3 class="section-block-title">Table Block</h3>
			<?php sample('table-block'); ?>
			<?php sample_code('table-block'); ?>
			<h3 class="section-block-title">Table Responsive</h3>
			<?php sample('table-responsive'); ?>
			<?php sample_code('table-responsive'); ?>
		</div>
	</section>
	
	<!-- Utilities -->
	<section id="utilities" class="section section-header">
		<div class="container">
			<h1 class="title">Utilities</h1>
			<p class="lead">Utility classes and mixins for normalisation and rapid frontend development.</p>
		</div>
	</section>
	
	<!-- Utility Classes -->
	<section id="utility-classes" class="section">
		<div class="container">
			<h2 class="section-title">Utility Classes<code>utilities/utility-classes.less</code></h2>
			<p>For text and background color utility classes check out the <a href="#colors">color</a> section. Text align utility classes are demonstrated in the <a href="#typography">typography</a> section.</p>
			<h3 class="section-block-title">General</h3>
			<table class="table table-bordered table-block table-responsive">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>	
						<td><code>clearfix</code></td>
						<td>Clears floats using <code>.clearfix();</code> mixin</td>
					</tr>
					<tr>	
						<td><code>center-block </code></td>
						<td>Makes element center block using <code>.center-block();</code> mixin</td>
					</tr>
					<tr>	
						<td><code>full-height</code></td>
						<td>Sets height to 100%</td>
					</tr>
					<tr>	
						<td><code>fixed</code></td>
						<td>Sets <code>position: fixed;</code></td>
					</tr>
					<tr>	
						<td><code>pointer</code></td>
						<td>Sets <code>cursor: pointer;</code></td>
					</tr>
					<tr>	
						<td><code>no-margin</code></td>
						<td>Removes margin <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
					</tr>
					<tr>	
						<td><code>no-padding</code></td>
						<td>Removes padding <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
					</tr>
					<tr>	
						<td><code>no-border</code></td>
						<td>Removes borders <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>

	<!-- Font Size -->
	<section id="font-size" class="section">
		<div class="container">
			<h2 class="section-title">Font Size<code>utilities/font-size.less</code></h2>
			<?php sample('font-size'); ?>
			<?php sample_code('font-size'); ?>
		</div>
	</section>


	<!-- Font Family -->
	<section id="font-family" class="section">
		<div class="container">
			<h2 class="section-title">Font Family<code>utilities/font-family.less</code></h2>
			<?php sample('font-family'); ?>
			<?php sample_code('font-family'); ?>
		</div>
	</section>

		
	<!-- Text -->
	<section id="text" class="section">
		<div class="container">
			<h2 class="section-title">Text<code>utilities/text.less</code></h2>
			<h3 class="section-block-title">Text Align</h3>
			<p class="text-left">Text Left</p>
			<p class="text-center">Text Center</p>
			<p class="text-right">Text Right</p>
			<p class="text-justify">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas sed diam eget risus varius blandit sit amet non magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
			<p class="truncate">Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			<?php sample_code('text-align'); ?>
			<h3 class="section-block-title">Text Transform</h3>
			<?php sample('text-transform'); ?>
			<?php sample_code('text-transform'); ?>
		</div>
	</section>


	<!-- Text Color -->
	<section id="text-color" class="section">
		<div class="container">
			<h2 class="section-title">Text Color<code>utilities/text-color.less</code></h2>
			<p class="text-color text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="text-color text-light-grey">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="text-color text-grey">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="text-color text-dark-grey">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="text-color text-black">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="text-color text-error">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="text-color text-warning">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="text-color text-success">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="text-color text-info">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="text-color text-light">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="text-color text-primary">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="text-color text-secondary">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="text-color text-tertiary">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="text-color text-dark">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<?php sample_code('text-colors'); ?>
		</div>
	</section>

	<!-- Display -->
	<section id="display" class="section">
		<div class="container">
			<h2 class="section-title">Display<code>utilities/display.less</code></h2>
			<table class="table table-bordered table-block table-responsive">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>	
						<td><code>display-block</code></td>
						<td>Sets <code>display: block;</code> on element</td>
					</tr>
					<tr>	
						<td><code>display-inline-block</code></td>
						<td>Sets <code>display: inline-block;</code> on element</td>
					</tr>
					<tr>	
						<td><code>display-table</code></td>
						<td>Sets <code>display: table;</code> on element</td>
					</tr>
					<tr>	
						<td><code>display-table-cell</code></td>
						<td>Sets <code>display: table-cell;</code> on element</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>

	<!-- Positioning -->
	<section id="positioning" class="section">
		<div class="container">
			<h2 class="section-title">Positioning<code>utilities/positioning.less</code></h2>
			<p>Utility classes can be used to position elements easily, each position utility class is <code>position: absolute;</code> and allows for either absolute positioning or using <code>@gutter</code> spacing by adding the <code>gutter</code> class to any position class</p>
			<table class="table table-bordered table-block table-responsive">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>	
						<td><code>top-left</code></td>
						<td>Positions element to the top left of it's container</td>
					</tr>
					<tr>	
						<td><code>top-right</code></td>
						<td>Positions element to the top right of it's container</td>
					</tr>
					<tr>	
						<td><code>bottom-left</code></td>
						<td>Positions element to the bottom left of it's container</td>
					</tr>
					<tr>	
						<td><code>bottom-right</code></td>
						<td>Positions element to the bottom right of it's container</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>

	<!-- Float -->
	<section id="positioning" class="section">
		<div class="container">
			<h2 class="section-title">Float<code>utilities/float.less</code></h2>
			<table class="table table-bordered table-block table-responsive">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>	
						<td><code>left</code></td>
						<td>Floats element left</td>
					</tr>
					<tr>	
						<td><code>right</code></td>
						<td>Floats element right</td>
					</tr>
				</tbody>
			</table>
			<h3 class="section-block-title">Responsive Clear Floats</h3>
			<table class="table table-bordered table-block table-responsive">
				<thead>
					<tr>
						<th width="25%"></th>
						<th width="15%">Extra Small Devices<br><small>Phones (<480px)</small></th>
						<th width="15%">Small Devices<br><small>Tablets (480px - 768px)</small></th>
						<th width="15%">Medium devices<br><small>Laptops (768px - 1024px)</small></th>
						<th width="15%">Large devices<br><small>Desktops (1024px - 1280px)</small></th>
						<th width="15%">Extra Large devices<br><small>Large Desktops (≥1680px)</small></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.clear-right-xsmall</code></td>
						<td class="is-clear">clear</td>
						<td class="is-float">right</td>
						<td class="is-float">right</td>
						<td class="is-float">right</td>
						<td class="is-float">right</td>
					</tr>
					<tr>
						<td><code>.clear-right-small</code></td>
						<td class="is-float">right</td>
						<td class="is-clear">clear</td>
						<td class="is-float">right</td>
						<td class="is-float">right</td>
						<td class="is-float">right</td>
					</tr>
					<tr>
						<td><code>.clear-right-medium</code></td>
						<td class="is-float">right</td>
						<td class="is-float">right</td>
						<td class="is-clear">clear</td>
						<td class="is-float">right</td>
						<td class="is-float">right</td>
					</tr>
					<tr>
						<td><code>.clear-right-large</code></td>
						<td class="is-float">right</td>
						<td class="is-float">right</td>
						<td class="is-float">right</td>
						<td class="is-clear">clear</td>
						<td class="is-float">right</td>
					</tr>
					<tr>
						<td><code>.clear-right-xlarge</code></td>
						<td class="is-float">right</td>
						<td class="is-float">right</td>
						<td class="is-float">right</td>
						<td class="is-float">right</td>
						<td class="is-clear">clear</td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td><code>.clear-left-xsmall</code></td>
						<td class="is-clear">clear</td>
						<td class="is-float">left</td>
						<td class="is-float">left</td>
						<td class="is-float">left</td>
						<td class="is-float">left</td>
					</tr>
					<tr>
						<td><code>.clear-left-small</code></td>
						<td class="is-float">left</td>
						<td class="is-clear">clear</td>
						<td class="is-float">left</td>
						<td class="is-float">left</td>
						<td class="is-float">left</td>
					</tr>
					<tr>
						<td><code>.clear-left-medium</code></td>
						<td class="is-float">left</td>
						<td class="is-float">left</td>
						<td class="is-clear">clear</td>
						<td class="is-float">left</td>
						<td class="is-float">left</td>
					</tr>
					<tr>
						<td><code>.clear-left-large</code></td>
						<td class="is-float">left</td>
						<td class="is-float">left</td>
						<td class="is-float">left</td>
						<td class="is-clear">clear</td>
						<td class="is-float">left</td>
					</tr>
					<tr>
						<td><code>.clear-left-xlarge</code></td>
						<td class="is-float">left</td>
						<td class="is-float">left</td>
						<td class="is-float">left</td>
						<td class="is-float">left</td>
						<td class="is-clear">clear</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>

	<!-- Visiblity -->
	<section id="visiblity" class="section">
		<div class="container">
			<h2 class="section-title">Visiblity<code>utilities/visiblity.less</code></h2>
			<p>Define content to be <code>visible</code> or <code>hidden</code>.</p>
			<table class="table table-bordered table-block table-responsive">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>	
						<td><code>hide</code></td>
						<td>Hides element <code>.hide();</code> mixin</td>
					</tr>
					<tr>	
						<td><code>show</code></td>
						<td>Shows element <code>.show();</code> mixin</td>
					</tr>
					<tr>	
						<td><code>visible</code></td>
						<td>Sets <code>visibility: visible;</code></td>
					</tr>
					<tr>	
						<td><code>invisible</code></td>
						<td>Sets <code>visibility: hidden;</code></td>
					</tr>
					<tr>	
						<td><code>hidden-print</code></td>
						<td>Hides element for when <code>@media print</code></td>
					</tr>
					<tr>	
						<td><code>visible-print</code></td>
						<td>Shows element for when <code>@media print</code></td>
					</tr>
					<tr>	
						<td><code>hidden-screen</code></td>
						<td>Hides element for when <code>@media screen</code></td>
					</tr>
					<tr>	
						<td><code>visible-screen</code></td>
						<td>Shows element for when <code>@media screen</code></td>
					</tr>
				</tbody>
			</table>
			<h3 class="section-block-title">Visibile Breakpoint Classes</h3>
			<p>Define content to be <code>visible</code> at different breakpoints.<br><small>Note: <code>!important</code> is used to override specificity issues.</small></p>
			<table class="table table-bordered table-block table-responsive">
				<thead>
					<tr>
						<th width="25%"></th>
						<th width="15%">Extra Small Devices<br><small>Phones (<480px)</small></th>
						<th width="15%">Small Devices<br><small>Tablets (480px - 768px)</small></th>
						<th width="15%">Medium devices<br><small>Laptops (768px - 1024px)</small></th>
						<th width="15%">Large devices<br><small>Desktops (1024px - 1280px)</small></th>
						<th width="15%">Extra Large devices<br><small>Large Desktops (≥1680px)</small></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.visible-xsmall</code></td>
						<td class="is-visible">Visible</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
					</tr>
					<tr>
						<td><code>.visible-small</code></td>
						<td class="is-hidden">Hidden</td>
						<td class="is-visible">Visible</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
					</tr>
					<tr>
						<td><code>.visible-small-up</code></td>
						<td class="is-hidden">Hidden</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
					</tr>
					<tr>
						<td><code>.visible-small-down</code></td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
					</tr>
					<tr>
						<td><code>.visible-medium</code></td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-visible">Visible</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
					</tr>
					<tr>
						<td><code>.visible-medium-up</code></td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
					</tr>
					<tr>
						<td><code>.visible-medium-down</code></td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
					</tr>
					<tr>
						<td><code>.visible-large</code></td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-visible">Visible</td>
						<td class="is-hidden">Hidden</td>
					</tr>
					<tr>
						<td><code>.visible-large-up</code></td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
					</tr>
					<tr>
						<td><code>.visible-large-down</code></td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-hidden">Hidden</td>
					</tr>
					<tr>
						<td><code>.visible-xlarge</code></td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-visible">Visible</td>
					</tr>
				</tbody>
			</table>
			<h3 class="section-block-title">Hidden Breakpoint Classes</h3>
			<p>Define content to be <code>hidden</code> at different breakpoints.<br><small>Note: <code>!important</code> is used to override specificity issues.</small></p>
			<table class="table table-bordered table-block table-responsive">
				<thead>
					<tr>
						<th width="25%"></th>
						<th width="15%">Extra Small Devices<br><small>Phones (<480px)</small></th>
						<th width="15%">Small Devices<br><small>Tablets (480px - 768px)</small></th>
						<th width="15%">Medium devices<br><small>Laptops (768px - 1024px)</small></th>
						<th width="15%">Large devices<br><small>Desktops (1024px - 1280px)</small></th>
						<th width="15%">Extra Large devices<br><small>Large Desktops (≥1680px)</small></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.hidden-xsmall</code></td>
						<td class="is-hidden">Hidden</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
					</tr>
					<tr>
						<td><code>.hidden-small</code></td>
						<td class="is-visible">Visible</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
					</tr>
					<tr>
						<td><code>.hidden-small-up</code></td>
						<td class="is-visible">Visible</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
					</tr>
					<tr>
						<td><code>.hidden-small-down</code></td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
					</tr>
					<tr>
						<td><code>.hidden-medium</code></td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
					</tr>
					<tr>
						<td><code>.hidden-medium-up</code></td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
					</tr>
					<tr>
						<td><code>.hidden-medium-down</code></td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
					</tr>
					<tr>
						<td><code>.hidden-large</code></td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-visible">Visible</td>
					</tr>
					<tr>
						<td><code>.hidden-large-up</code></td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
					</tr>
					<tr>
						<td><code>.hidden-large-down</code></td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-hidden">Hidden</td>
						<td class="is-visible">Visible</td>
					</tr>
					<tr>
						<td><code>.hidden-xlarge</code></td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-visible">Visible</td>
						<td class="is-hidden">Hidden</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>

	<!-- Mixins -->
	<section id="mixins" class="section section-header">
		<div class="container">
			<h1 class="title">Mixins</h1>
			<p class="lead">...</p>
		</div>
	</section>

	<!-- Mixins General -->
	<section id="general" class="section">
		<div class="container">
			<h2 class="section-title">General<code>mixins/general.less</code></h2>
			<?php include('includes/mixins-general.html'); ?>
		</div>
	</section>

	<!-- Mixins Typography -->
	<section id="font" class="section">
		<div class="container">
			<h2 class="section-title">Font<code>mixins/font.less</code></h2>
			<?php include('includes/mixins-font.html'); ?>
		</div>
	</section>

	<!-- Mixins Border Radius -->
	<section id="border-radius" class="section">
		<div class="container">
			<h2 class="section-title">Border Radius<code>mixins/border-radius.less</code></h2>
			<?php include('includes/mixins-border-radius.html'); ?>
		</div>
	</section>

	<!-- Mixins Background -->
	<section id="background" class="section">
		<div class="container">
			<h2 class="section-title">Background<code>mixins/background.less</code></h2>
			<?php include('includes/mixins-background.html'); ?>
		</div>
	</section>

	<!-- Mixins Placeholder -->
	<section id="placeholder" class="section">
		<div class="container">
			<h2 class="section-title">Placeholder<code>mixins/placeholder.less</code></h2>
			<?php include('includes/mixins-placeholder.html'); ?>
		</div>
	</section>

	<!-- Mixins Arrows -->
	<section id="arrows" class="section">
		<div class="container">
			<h2 class="section-title">Arrows<code>mixins/arrows.less</code></h2>
			<div class="arrow-boxes">
				<div class="arrow-box arrow-top"></div>
				<div class="arrow-box arrow-top-left"></div>
				<div class="arrow-box arrow-top-right"></div>
				<div class="arrow-box arrow-bottom"></div>
				<div class="arrow-box arrow-bottom-left"></div>
				<div class="arrow-box arrow-bottom-right"></div>
				<div class="arrow-box arrow-left"></div>
				<div class="arrow-box arrow-right"></div>
			</div>
			<?php include('includes/mixins-arrows.html'); ?>
		</div>
	</section>

	<!-- Mixins Transitions -->
	<section id="transitions" class="section">
		<div class="container">
			<h2 class="section-title">Transitions<code>mixins/transitions.less</code></h2>
			<?php include('includes/mixins-transitions.html'); ?>
		</div>
	</section>

	<!-- Mixins Transforms -->
	<section id="transforms" class="section">
		<div class="container">
			<h2 class="section-title">Transforms<code>mixins/transforms.less</code></h2>
			<?php include('includes/mixins-transforms.html'); ?>
		</div>
	</section>

	<!-- Mixins Animations -->
	<section id="animations" class="section">
		<div class="container">
			<h2 class="section-title">Animations<code>mixins/animations.less</code></h2>
			<?php include('includes/mixins-animations.html'); ?>
		</div>
	</section>

	<!-- Mixins Filters -->
	<section id="filters" class="section">
		<div class="container">
			<h2 class="section-title">Filters<code>mixins/filters.less</code></h2>
			<?php include('includes/mixins-filters.html'); ?>
		</div>
	</section>

	<!-- Mixins Flexbox -->
	<section id="flexbox" class="section">
		<div class="container">
			<h2 class="section-title">Flexbox<code>mixins/flexbox.less</code></h2>
			<?php include('includes/mixins-flexbox.html'); ?>
		</div>
	</section>
	
	<!-- Support -->
	<section id="support" class="section section-header">
		<div class="container">
			<h1 class="title">Support</h1>
			<p class="lead">Outlines for Browser Support for CSS3 features.</p>
		</div>		
	</section>
	
	<!-- Browsers -->
	<section id="browsers" class="section">
		<div class="container">
			<h2 class="section-title">Browsers</h2>
			<?php include('includes/table-browser-support.html'); ?>

			<h3 class="section-block-title">Android Default Browser</h3>
			<p>The Default Android Browser is not supported. Android 4.4+ does not ship with a default Browser. (note: Chrome on Android is fully supported)</p>

			<h3 class="section-block-title">IE Compatibility modes</h3>
			<p>Turret is not supported in the old Internet Explorer compatibility modes. To be sure you're using the latest rendering mode for IE, consider including the appropriate <?php code('<meta>'); ?> tag in your pages:</p>
			<?php markup('<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">'); ?>
			<p>The meta tag tells the IE rendering engine two things:</p>
			<ol>
				<li>It should use the latest, or edge, version of the IE rendering environment</li>
				<li>If already installed, it should use the Google Chrome Frame rendering engine.</li>
			</ol>
			<p>This line breaks validation, and the Google Chrome Frame part won't work inside a conditional comment. To avoid these edge case issues it is recommended that you remove this line and use the <code>.htaccess</code> to send these headers instead as specified in <a href="http://groups.google.com/group/html5boilerplate/browse_thread/thread/6d1b6b152aca8ed2">Validating: X-UA-Compatible</a>.</p>
			
			<h3 class="section-block-title">Modernizr</h3>
			<p><a href="http://modernizr.com/">Modernizr</a> is a JavaScript library which adds classes to the <code>html</code> element based on the results of feature test and which ensures that all browsers can make use of HTML5 elements (as it includes the HTML5 Shiv). This allows you to target parts of your CSS and JavaScript based on the features supported by a browser.</p>
			<p>In general, in order to keep page load times to a minimum, it's best to call any JavaScript at the end of the page because if a script is slow to load from an external server it may cause the whole page to hang. That said, the Modernizr script needs to run before the browser begins rendering the page, so that browsers lacking support for some of the new HTML5 elements are able to handle them properly. Therefore the Modernizr script is the only JavaScript file synchronously loaded at the top of the document.</p>
			
			<h3 class="section-block-title">Respond.js</h3>
			<p>IE8 requires the use of <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> to enable media query support.</p>
			
			<h3 class="section-block-title">IE8 and Respond.js</h3>
			<p>Beware of the following caveats when using Respond.js in your development and production environments for Internet Explorer 8.</p>

			<h4>Respond.js and cross-domain CSS</h4>
			<p>Using Respond.js with CSS hosted on a different (sub)domain (for example, on a CDN) requires some additional setup. See the <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> docs for details.</p>

			<h4>Respond.js and <code>file://</code></h4>
			<p>Due to browser security rules, Respond.js doesn't work with pages viewed via the <code>file://</code> protocol (like when opening a local HTML file). To test responsive features in IE8, view your pages over HTTP(S). See the <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> docs for details.</p>

			<h4>Respond.js and <code>@import</code></h4>
			<p>Respond.js doesn't work with CSS that's referenced via <code>@import</code>. In particular, some Drupal configurations are known to use <code>@import</code>. See the <a href="https://github.com/scottjehl/Respond"><code>Respond.js</code></a> docs for details.</p>
		
			<h3 class="section-block-title">IE8 and box-sizing</h3>
			<p>IE8 does not fully support <code>box-sizing: border-box;</code> when combined with <code>min-width</code>, <code>max-width</code>, <code>min-height</code>, or <code>max-height</code>. Cannot use max-width on <code>.container</code>.</p>
		</div>
	</section>
	
	<!-- CSS -->
	<section id="css" class="section">
		<div class="container">
			<h2 class="section-title">CSS</h2>
			<p>Some CSS3 properties and HTML5 elements are not fully supported by Internet Explorer 8 and 9.</p>
			<?php include('includes/table-css-support.html'); ?>
			<p>Visit <a href="http://caniuse.com/">Can I use...</a> for details on browser support of CSS3 and HTML5 features.</p>
		</div>
	</section>

	<!-- Accessibility -->
	<section id="accessibility" class="section section-header">
		<div class="container">
			<h1 class="title">Accessibility</h1>
			<p class="lead">Guide for using ARIA role attributes on elements for accessibility.</p>
		</div>
	</section>

	<!-- Screen Reader -->
	<section id="screen-reader" class="section">
		<div class="container">
			<h2 class="section-title">Screen Reader</h2>
			<p>Use the <code>screen-reader</code> class to display content only for screen readers, based from the A11y Project post: <a href="http://a11yproject.com/posts/how-to-hide-content/">How-to: Hide Content</a></p>
			<?php markup('<div class="screen-reader">...</div>'); ?>

			<h3 class="section-block-title">Screen Reader Focusable</h3>
			<p>In conjunction with the <code>screen-reader</code> class, the <code>screen-reader-focusable</code> class can be added to only display content when it's focused. Useful for "Skip to main content" links.</p>
			<?php markup('<div class="screen-reader screen-reader-focusable">...</div>'); ?>
		</div>
	</section>
	
	<!-- Aria Roles -->
	<section id="aria-roles" class="section">
		<div class="container">
			<h2 class="section-title">ARIA Roles</h2>
			<?php include('includes/table-aria-roles.html'); ?>
		</div>
	</section>
	
	<!-- Notes -->
	<section id="notes" class="section section-header">
		<div class="container">
			<h1 class="title">Notes</h1>
			<p class="lead">Contributors, Licence, and Licence Notes.</p>
		</div>
	</section>
	
	<!-- Contributors -->
	<section id="contributors" class="section">
		<div class="container">
			<h2 class="section-title">Contributors</h2>
			<h3 class="section-block-title">Scott de Jonge</h3>
			<ul>
				<li>Twitter: <a href="https://twitter.com/scottdejonge">@scottdejonge</a></li>
				<li>Github: <a href="https://github.com/scottdejonge">@scottdejonge</a></li>
			</ul>
		</div>
	</section>
	
	<!-- Licence -->
	<section id="licence" class="section">
		<div class="container">
			<h2 class="section-title">Licence</h2>
			<h3 class="section-block-title">Code License</h3>
			<p>Applies to code inside the <code>turret</code> directory.</p>
			<p>Code licensed under <a href="http://opensource.org/licenses/mit-license.html">MIT License</a></p>
			<h3 class="section-block-title">Documentation License</h3>
			<p>Applies to files inside the <code>docs</code> excluding files located in the <code>lib</code> directory.</p>
			<p>Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a></p>
		</div>
	</section>
	
	<!-- License Notes -->
	<section id="licence-notes" class="section">
		<div class="container">
			<h2 class="section-title">License Notes</h2>
			<p>Turret is released under the MIT license and is copyright 2015 Twitter. Boiled down to smaller chunks, it can be described with the following conditions.</p>
			<p><strong>It requires you to:</strong></p>
			<ul>
				<li>Include the license and copyright notice in your works</li>
			</ul>
			<p><strong>It permits you to:</strong></p>
			<ul>
				<li>Freely download and use Turret, in whole or in part, for personal, private, company internal, or commercial purposes</li>
				<li>Use Turret in packages or distributions that you create</li>
				<li>Modify the source code</li>
				<li>Grant a sublicense to modify and distribute Turret to third parties not included in the license</li>
			</ul>
			<p><strong>It forbids you to:</strong></p>
			<ul>
				<li>Hold the authors and license owners liable for damages as Turret is provided without warranty</li>
				<li>Hold the creators or copyright holders of Turret liable</li>
				<li>Redistribute any piece of Turret without proper attribution</li>
				<li>Use any marks owned by Bigfish.tv in any way that might state or imply that Bigfish.tv endorses your distribution</li>
				<li>Use any marks owned by Bigfish.tv in any way that might state or imply that you created the Bigfish.tv software in question</li>
			</ul>
			<p><strong>It does not require you to:</strong></p>
			<ul>
				<li>Include the source of Turret itself, or of any modifications you may have made to it, in any redistribution you may assemble that includes it</li>
				<li>Submit changes that you make to Turret back to the Turret project (though such feedback is encouraged)</li>
				<li>The full Turret license is located in the project repository for more information.</li>
			</ul>
		</div>
	</section>

	<?php include_once('includes/footer.html'); ?>

</main>

<div class="clearfix"></div>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/toggle.js"></script>
<?php include_once('includes/end.html'); ?>