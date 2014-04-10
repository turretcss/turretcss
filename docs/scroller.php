<?php include('includes/head.php'); ?>

<script>
$(document).ready(function() {
	$('[data-scroller]').scroller({
		fixedNavigation: true,
		speed: 600,
		quietPeriod: 600,
		breakpoint: 1025
	});
});
</script>

<div class="scroller" data-scroller data-scroller-fixed-navigation>
	<ul class="scroller-pagination" data-scroller-pagination>
		<li><a href="#scroller-section-1">Section 1</a></li>
		<li><a href="#scroller-section-2">Section 2</a></li>
		<li><a href="#scroller-section-3">Section 3</a></li>
	</ul>
	<section id="scroller-section-1" class="scroller-section" data-scroller-section style="background: #ECECED;"></section>
	<section id="scroller-section-2" class="scroller-section" data-scroller-section style="background: #6B7681;"></section>
	<section id="scroller-section-3" class="scroller-section" data-scroller-section style="background: #3BC0C3;"></section>
</div>

<?php include('includes/footer.php'); ?>