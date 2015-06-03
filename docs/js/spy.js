$(document).ready(function () {
	var links = $('#sidebar nav a[href^="#"]');

	$(window).scroll(function() {
		var top = $(window).scrollTop();

		$(links).each(function () {
			var current = $(this);
			var id = $(current.attr('href'));

			if (id.position().top <= top && id.position().top + id.height() > top) {
				$(links).removeClass('active');
				$(links).parent('li').removeClass('active');
				current.addClass('active');
				current.parent('li').addClass('active');
			} else {
				current.removeClass('active');
				current.parent('li').removeClass('active');
			}
		});
	});
});