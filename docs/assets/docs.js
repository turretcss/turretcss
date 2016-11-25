require('./css/main.css');

var toggle = document.getElementById('toggle');
var body = document.getElementsByTagName('body')[0];

toggle.addEventListener('click', function () {
	
	if (body.classList.contains('open')) {
		body.classList.remove('open');
	} else {
		body.classList.add('open');
	}
});