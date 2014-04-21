/*
 * jquery.scroller.js v1.3
 *
 * Copyright (c) 2014, Bigfish
 * http://bigfish.tv
 *
 */

(function() {

	(function($, window, document) {

		var Plugin, defaults, pluginName;
		pluginName = 'scroller';

		//Plugin Options
		defaults = {
			body: 'html, body',
			container: '[data-scroller]',
			section: '[data-scroller-section]',
			pagination: '[data-scroller-pagination]',
			paginationItem: '[data-scroller-pagination] li a',
			sectionHeight: 95,
			current: 1,
			swipe: false,
			hash: false,
			loop: false,
			pagination: true,
			keyboard: true,
			footer: false,
			fixedNavigation: false,
			speed: 600,
			lastAnimation: null,
			quietPeriod: 600,
			breakpoint: 768,
			easing: 'easeInOutExpo'
		};

		//Plugin
		Plugin = (function() {
			function Plugin(element, options) {
				this.element = element;
				this.options = $.extend(true, {}, defaults, options);
				this._defaults = defaults;
				this._name = pluginName;
				this.init();
			}
			return Plugin;
		})();

		//Initialise
		Plugin.prototype.init = function() {
			var $element = $(this.element);
			var _this = this;
			var $body = $(this.options.body);
			var container = this.options.container;
			var $container = $(container);
			var section = this.options.section;
			var $section =  $(section, $container);
			var $pagination = $(this.options.pagination);
			var $paginationItem = $(this.options.paginationItem);
			var pagination = this.options.pagination;
			var current = this.options.current;

			this.data = $.data(this);
			this.current = this.options.current;
			this.total = $(section + ':visible').length;
			$.data(this, 'lastAnimation', this.options.lastAnimation);

			this.footerActive = false;

			//Set Scroll Event Handler
			var scrollEventHandler = true;

			//Added Fixed Class to Body
			if (this.options.fixedNavigation) {
				$(document.body).addClass('scroller-fixed-navigation');
			}

			//Add Scroll Indicator to First Section
			$($section.first()).append('<a href="#" class="scroller-indicator" data-scroller-indicator></a>');
			$('[data-scroller-indicator]').on('click', function(event) {
				event.preventDefault();
				_this.moveDown();
			});

			//Scroller Pagination
			if(this.options.pagination == true) {

				//Add data-index to Pagination Items
				$paginationItem.each(function(i) {
					$(this).attr('data-index', i + 1);
				});

				//Add data-index to each Section
				$(section + ':visible').each(function(i) {
					$(this).attr('data-index', i + 1);
				});

				//Pagination Item Click Event
				$paginationItem.on('click', function(event) {
					$this = $(this);
					event.preventDefault();
					var index = $this.data('index');
					_this.moveTo(index);
				});
			}

			//Set Initial Active Section and Pagination Item
			if (this.options.hash == true) {
				if(window.location.hash != '' && window.location.hash != '#1') {
					var hashIndex = window.location.hash.replace('#', '');

					//Set Hashed Location Active
					_this.updateActive(hashIndex);

					//Update Window Location
					if (history.replaceState) {
						var href = window.location.href.substr(0,window.location.href.indexOf('#')) + "#" + hashIndex;
						history.pushState({}, document.title, href);
					}

					//Animate Scroll
					distance = $(section + '[data-index="' + hashIndex + '"]').offset().top;
					_this.animateSection(distance, 600);

				} else {
					//Set First Section Active
					_this.updateActive(1);
				}
			}

			//Scroller Resize
			_this.resize();

			//Bind Scroller Events
			_this._bindEvents();

			//Responsive Breakpoint
			if(this.options.breakpoint != false) {
				$(window).resize(function() {
					_this._bindEvents();
				});
			}

			//Keyboard Controls
			if(this.options.keyboard == true) {
				$(document).keydown(function(event) {
					var tag = event.target.tagName.toLowerCase();
					if (!$(document.body).hasClass('no-scroll')) {
						switch(event.which) {
							case 38: //Up Key
								if (tag != 'input' && tag != 'textarea') _this.moveUp()
								break;
							case 40: //Down Key
								if (tag != 'input' && tag != 'textarea') _this.moveDown()
								break;
							default: return;
						}
					}
					event.preventDefault();
				});
			}
		};

		//Resize
		Plugin.prototype.resize = function() {
			var $element = $(this.element)
			var _this = this;
			var $container = $(this.options.container);
			var section = this.options.section;
			var sectionHeight = this.options.sectionHeight;
			var breakpoint = this.options.breakpoint;
			var total = this.total;

			//Trigger Before Resize Event
			$element.trigger('beforeResize.' + pluginName);

			//Scoller Section Height
			$(section + ':visible').each(function(i) {
				var $this = $(this);

				if ($(window).width() < breakpoint) {
					total = $(section).length + $(section).filter('.scroller-split-section').length;
					if($this.is('.scroller-split-section')) {
						$this.css({height: ((200 / total).toFixed(2)) + '%', overflow: 'hidden'});
						$this.find('[data-scroller-section-inner]').css({height: '50%'});
					} else {
						$this.css({height: (100 / total) + '%', overflow: 'hidden'});
					}
				} else {
					total = $(section).length;
					$this.css({height: (100 / total) + '%', overflow: 'hidden'});
				}
			});

			//Scoller Container Total Height
			if ($(window).width() < breakpoint) {
				total = $(section).length + $(section).filter('.scroller-split-section').length;
				$container.css({height: (sectionHeight * total) + '%'});
			} else {
				$container.css({height: (sectionHeight * total) + '%'});
			}

			//Trigger After Resize Event
			$(this.element).trigger('resize.' + pluginName);
		}

		//Swipe Events (credit: Eike Send)
		jQuery.prototype.swipeEvents = function() {
			return this.each(function() {
				var startX, startY,
				$this = $(this);

				$this.bind('touchstart', touchstart);

				function touchstart(event) {
					var touches = event.originalEvent.touches;
					if (touches && touches.length) {
						startX = touches[0].pageX;
						startY = touches[0].pageY;
						$this.bind('touchmove', touchmove);
					}
				}

				function touchmove(event) {
					var touches = event.originalEvent.touches;
					if (touches && touches.length) {
						var deltaX = startX - touches[0].pageX;
						var deltaY = startY - touches[0].pageY;

						if (deltaX >= 50) {
							$this.trigger("swipeLeft");
						}
						if (deltaX <= -50) {
							$this.trigger("swipeRight");
						}
						if (deltaY >= 50) {
							$this.trigger("swipeUp");
						}
						if (deltaY <= -50) {
							$this.trigger("swipeDown");
						}
						if (Math.abs(deltaX) >= 50 || Math.abs(deltaY) >= 50) {
							$this.unbind('touchmove', touchmove);
						}
					}
				}

			});
		};

		//Bind Scroller Events
		Plugin.prototype._bindEvents = function() {
			var _this = this;
			var $element = $(this.element);
			var $body = $(this.options.body);
			var breakpoint = this.options.breakpoint;
			var $section = $(this.options.section);

			if ($(window).width() < breakpoint) {
				_this._unbindEvents();
			} else {
				if($body.hasClass('disabled-scroller')) {
					$body.removeClass('disabled-scroller');
					$body.animate({scrollTop: 0}, 'fast');
				}

				//Swipe Event
				if (this.options.swipe == true) {
					$element.swipeEvents().bind('swipeDown', function(event) {
						if (!$body.hasClass('disabled-scroller')) {
							event.preventDefault();
						}
						_this.moveUp();
					});
					$element.swipeEvents().bind('swipeUp', function(event) {
						if (!$body.hasClass('disabled-scroller')) {
							event.preventDefault();
						}
						_this.moveDown();
					});
				}

				//Scroll Wheel Event
				$(document).bind('mousewheel DOMMouseScroll', function(event) {
					event.preventDefault();
					var delta = event.originalEvent.wheelDelta || -event.originalEvent.detail;
					if (!$body.hasClass('disabled-scroller')) {
						_this.scroll(event, delta);
					}
				});
			}
		};

		//Unbind Scroller Events
		Plugin.prototype._unbindEvents = function() {
			var $element = $(this.element);
			var $body = $(this.options.body);

			$body.addClass('disabled-scroller');
			$(document).unbind('mousewheel DOMMouseScroll');
			if (this.options.swipe == true) {
				$element.swipeEvents().unbind('swipeDown swipeUp');
			}
		};

		//Scroll on Scroll Event
		Plugin.prototype.scroll = function(event, delta) {
			var _this = this;
			var $element = $(this.element);
			var lastAnimation = this.data.lastAnimation;
			var quietPeriod = this.options.quietPeriod;
			var speed = this.options.speed;
			var timeNow = new Date().getTime();

			//Reset Delta Count after a Second
			if (!this.scrollStart || (timeNow - this.scrollStart > 1000)) {
				this.deltaCount = 0;
				this.scrollStart = timeNow;
			}

			this.deltaCount += delta;

			//Only move when Scroll Delta over a Threshold
			if (Math.abs(this.deltaCount) < 50) {
				return;
			}

			//Cancel Scroll if Currently Animating or Within Quiet Period
			if(timeNow - lastAnimation < quietPeriod + speed) {
				event.preventDefault();
				return;
			}

			//Move Up/Down Depending on Delta
			if (delta < 0) {
				_this.moveDown();
			} else {
				_this.moveUp();
			}

			//Update Last Animation Time
			$.data(this, 'lastAnimation', timeNow);
		};

		//Update Active
		Plugin.prototype.updateActive = function(index) {
			var section = this.options.section;
			var $index = $(section + '[data-index="' + index + '"]');

			//Set Active Section
			$(section + '.active').removeClass('active');
			$index.addClass('active');

			//Set Active Pagination
			if(this.options.pagination == true) {
				$('.scroller-pagination li a' + '.active').removeClass('active');
				$('.scroller-pagination li a' + '[data-index="' + index + '"]').addClass('active');
			}
		};

		//Move Down
		Plugin.prototype.moveDown = function() {
			var distance;
			var _this = this;
			var loop = this.options.loop;
			var speed = this.options.speed;
			var section = this.options.section;
			var total = this.total;
			var index = $(section + '.active').data('index');
			var $next = $(section + '[data-index="' + (index + 1) + '"]');

			//Set Next Section
			if($next.length < 1) {

				//If Loop Next Section is First Section
				if (loop == true) {
					$next = $(section + '[data-index="1"]');
				} else {
					//If Footer Scroll to the Height of the Container
					if(this.options.footer) {
						if($next.length == 0) {
							this.footerActive = true;
							distance = $(this.options.container).height();
						} else {
							return;
						}
					} else {
						return;
					}
				}
			} else {
				//Get Distance
				distance = $next.offset().top;
			}

			//Set Active Section
			_this.updateActive(index + 1);

			//Update Window Location
			if (this.options.hash == true) {
				if (history.replaceState) {
					if((index == total) && (this.options.footer)) {
						var href = window.location.href.substr(0,window.location.href.indexOf('#')) + "#" + index;
						history.pushState({}, document.title, href);
					} else {
						var href = window.location.href.substr(0,window.location.href.indexOf('#')) + "#" + (index + 1);
						history.pushState({}, document.title, href);
					}
				}
			}

			//Animate Scroll
			_this.animateSection(distance, speed);

			$(this.element).trigger('change.' + pluginName);
		};

		//Move Up
		Plugin.prototype.moveUp = function() {
			var distance;
			var _this = this;
			var loop = this.options.loop;
			var speed = this.options.speed;
			var section = this.options.section;
			var total = this.total;
			var index = $(section + '.active').data('index');
			var $previous = $(section + '[data-index="' + (index - 1) + '"]');

			//Set Previous Section
			if($previous.length < 1) {

				//If Loop Previous Section is Last Section
				if (loop == true) {
					$previous = $(section + '[data-index="' + total + '"]');
				} else if (this.footerActive) {
					//If Footer Scroll to Last Section Top
					this.footerActive = false;
					distance = $(section + '[data-index="' + total + '"]').offset().top;
					_this.updateActive(total);
				} else {
					return;
				}

			} else {
				//Get Distance
				distance = $previous.offset().top;

				//Set Active Section
				_this.updateActive(index - 1);
			}

			//Update Window Location
			if (this.options.hash == true) {
				if (history.replaceState) {
					if(!(this.data.footerActive == true)) {
						var href = window.location.href.substr(0,window.location.href.indexOf('#')) + "#" + (index - 1);
						history.pushState({}, document.title, href);
					}
				}
			}

			//Animate Scroll
			_this.animateSection(distance, speed);

			$(this.element).trigger('change.' + pluginName);
		};

		//Move To
		Plugin.prototype.moveTo = function(index) {
			var distance;
			var _this = this;
			var speed = this.options.speed;
			var section = this.options.section;
			var $to = $(section + '[data-index="' + index + '"]');

			if($to.length > 0) {

				//Set Active Section
				_this.updateActive(index);

				distance = $to.offset().top;

				//Update Window Location
				if (this.options.hash == true) {
					if (history.replaceState) {
						var href = window.location.href.substr(0,window.location.href.indexOf('#')) + "#" + index;
						history.pushState({}, document.title, href);
					}
				}

				//Animate Scroll
				_this.animateSection(distance, speed);

				$(this.element).trigger('change.' + pluginName);
			}
		};

		//Animate Section
		Plugin.prototype.animateSection = function(distance, speed) {
			var $body = $(this.options.body);
			var easing = this.options.easing;

			$body.stop().animate({scrollTop: distance}, speed, easing);
		};

		//Declare jQuery Plugin
		$.fn[pluginName] = function (options) {
			var args = arguments;

			if (!$.data(this, "plugin_" + pluginName)) {
				$.data(this, "plugin_" + pluginName, new Plugin(this, options));
				return this;
			}
			else if ($.isFunction(Plugin.prototype[options])) {
				var returns;
				//Call Method Dyamically.
				var instance = $.data(this, 'plugin_' + pluginName);
				returns = instance[options].apply(instance, Array.prototype.slice.call(args, 1));

				//If the method returned a value, give that back, otherwise return the plugin (to support chaining).
				return (returns !== undefined ? returns : this);
			}
		};

	})(jQuery, window, document);

}).call(this);