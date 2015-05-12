$(document).ready(function () {
	var links = $('#sidebar nav a[href^="#"]');

	$(window).scroll(function() {
		var top = $(window).scrollTop();

		$(links).each(function () {
			var current = $(this);
			var id = $(current.attr('href'));

			if (id.position().top <= top && id.position().top + id.height() > top) {
				$(links).removeClass('active');
				current.addClass('active');
			} else {
				current.removeClass('active');
			}
		});
	});
});