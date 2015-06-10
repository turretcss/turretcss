<?php 
	include_once('docs/config.php');
	include_once('docs/functions.php');
	include_once('docs/includes/head.html');
?>

<header class="home-header gradient">
	<div class="container">
		<svg class="home-header-icon" xmlns="http://www.w3.org/2000/svg" width="44" height="64" viewBox="0 0 44 64">
			<path fill="#FFFFFF" d="M36.7 52l-3.1-28.1 8.4-6v-17.9h-8v7h-6v-7h-12v7h-6v-7h-8v17.9l8.4 6-3.1 28.1h-7.3v12h44v-12z"/>
		</svg>
		<h1 class="home-header-title">Turret</h1>
		<a class="button button-xlarge button-border home-button" href="/docs">Docs</a>
		<a class="button button-xlarge button-border home-button" href="https://github.com/bigfishtv/turret">Github</a>
		<p class="text-white"><strong>v3.0.0</strong></p>
	</div>
</header>

<section class="home-section">
	<div class="container">
		<div class="home-section-inner text-center">
			<h1>Simple and Stylish</h1>
			<p class="lead">Create accessible, semantic, and responsive websites easily with Turret.</p>
			<p>Turret is a front-end styles and browser behaviour normalisation framework for rapid development of responsive and accessible websites.</p>
		</div>
		<hr class="divider">
		<div class="home-block row">
			<div class="column-1-2 column-push-1-2">
				<div class="media media-4-3">
					<img src="docs/img/responsive.svg">
				</div>
			</div>
			<div class="column-1-2 column-pull-1-2">
				<h2 class="home-block-title">Responsive</h2>
				<p>Turret has been developed for responsive web design and has an intuitive grid system and responsive utilities for rapid development using logical and legible markup.</p>
			</div>
		</div>
		<hr class="divider">
		<div class="home-block row">
			<div class="column-1-2">
				<div class="media media-4-3">
					<img src="docs/img/design.svg">
				</div>
			</div>
			<div class="column-1-2">
				<h2 class="home-block-title">Design Focus</h2>
				<p>Turret is focused on typography, font definitions, colour palettes, and indicators for simple and stylish user interfaces.</p>
			</div>
		</div>
		<hr class="divider">
		<div class="home-block row">
			<div class="column-1-2 column-push-1-2">
				<div class="media media-4-3">
					<img src="docs/img/styles.svg">
				</div>
			</div>
			<div class="column-1-2 column-pull-1-2">
				<h2 class="home-block-title">Just Styles</h2>
				<p>Turret is Less framework for styling native web elements. That's about it, no javascript, no custom markup, just semantic HTML5 elements.</p>
			</div>
		</div>
		<hr class="divider">
		<div class="home-block row">
			<div class="column-1-2">
				<div class="media media-4-3">
					<img src="docs/img/semantic.svg">
				</div>
			</div>
			<div class="column-1-2">
				<h2 class="home-block-title">Semantic</h2>
				<p>Write markup that is modular, maintainable, and semantic. Turret turns semantic HTML5 markup into styled and responsive elements without the headache.</p>
			</div>
		</div>
	</div>
</section>

<section class="home-section text-center background-dark">
	<a class="button button-xlarge button-primary home-button" href="/docs">Get started</a>
</section>

<footer>
	<p class="text-center">v3.0.0 &middot; <a href="https://twitter.com/scottdejonge" target="_blank">@scottdejonge</a> made this <img class="emoji" draggable="false" alt="💩" src="https://twemoji.maxcdn.com/svg/1f4a9.svg"> at <a href="http://bigfish.tv/" target="_blank">bigfish.tv</a></p>
</footer>

<?php include_once('docs/includes/footer.html'); ?>