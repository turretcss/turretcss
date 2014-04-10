/*
 * jquery.slides.js v1.0
 *
 * Copyright (c) 2014, Bigfish
 * http://bigfish.tv
 *
 */

(function() {

	(function($, window, document) {

		var Plugin, defaults, pluginName;
		pluginName = 'slides';

		//Plugin Options
		defaults = {
			width: 940,
			height: 528,
			start: 1,
			container: false,
			navigation: {
				active: true,
				effect: 'slide'
			},
			pagination: {
				active: true,
				effect: 'slide'
			},
			play: {
				active: false,
				effect: 'slide',
				interval: 5000,
				auto: false,
				swap: true,
				pauseOnHover: false,
				restartDelay: 2500
			},
			effect: {
				slide: {
					speed: 500
				},
				fade: {
					speed: 300,
					crossfade: true
				}
			},
			callback: {
				loaded: function() {},
				start: function() {},
				complete: function() {}
			}
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
			var $element, nextButton, pagination, playButton, prevButton, stopButton,
			_this = this;
			$element = $(this.element);
			slidesTotal = $element.children().not('.slides-navigation', $element).length;
			this.data = $.data(this);
			$.data(this, 'animating', false);
			$.data(this, 'total', slidesTotal);
			$.data(this, 'current', this.options.start - 1);
			$.data(this, 'vendorPrefix', this._getVendorPrefix());

			if (typeof TouchEvent !== 'undefined') {
				$.data(this, 'touch', true);
				this.options.effect.slide.speed = this.options.effect.slide.speed / 2;
			}

			if (slidesTotal > 1) {

				//Set Overflow Hidden
				$element.css({
					overflow: 'hidden'
				});

				//Create Slides Container
				$element.slidesContainer = $element.children().not('.slides-navigation', $element).wrapAll('<div class="slides-container">', $element).parent().css({
					overflow: 'hidden',
					position: 'relative'
				});

				$('.slides-container', $element).wrapInner('<div class="slides-control">', $element).children();
				$('.slides-control', $element).css({position: 'relative', left: 0});

				//Add Class and CSS Styles to Slides
				$('.slides-control', $element).children().addClass('slides-slide').css({
					position: 'absolute',
					top: 0,
					left: 0,
					width: '100%',
					height: '100%',
					zIndex: 0,
					display: 'none',
					transform: 'translate3d(0,0,0)'
				});

				//Add Slide Index to Each Slide
				$.each($('.slides-control', $element).children(), function(i) {
					var $slide;
					$slide = $(this);
					return $slide.attr('slides-index', i);
				});

				//Touch Events
				if (this.data.touch) {
					$('.slides-control', $element).on('touchstart', function(e) {
						return _this._touchstart(e);
					});
					$('.slides-control', $element).on('touchmove', function(e) {
						return _this._touchmove(e);
					});
					$('.slides-control', $element).on('touchend', function(e) {
						return _this._touchend(e);
					});
				}

				this.update();

				//Setup Touch
				if (this.data.touch) {
					this._setuptouch();
				}

				//Slides Controls
				$('.slides-control', $element).children(':eq(' + this.data.current + ')').eq(0).fadeIn(0, function() {
					return $(this).css({
						zIndex: 10
					});
				});

				//Add Slides Navigation
				if (this.options.navigation.active) {
					slidesNavigation = $('<div class="slides-navigation" data-slides-navigation></div>').appendTo($element);
					prevButton = $('<a class="slides-previous" href="#" title="Previous"></a>');
					nextButton = $('<a class="slides-next" href="#" title="Next"></a>');
					if (this.options.container) {
						container = $('<div class="container"></div>');
						container.appendTo(slidesNavigation);
						prevButton.appendTo(container);
						nextButton.appendTo(container);
					} else {
						prevButton.appendTo(slidesNavigation);
						nextButton.appendTo(slidesNavigation);
					}
				}

				//Slides Next on Click to to Next Slide
				$('.slides-next', $element).click(function(e) {
					e.preventDefault();
					clearTimeout($.data(_this, 'restartDelay'));
					$.data(_this, 'restartDelay', null);
					_this.stop(true);
					return _this.next(_this.options.navigation.effect);
				});

				//Slides Previous on Click to to Previous Slide
				$('.slides-previous', $element).click(function(e) {
					e.preventDefault();
					clearTimeout($.data(_this, 'restartDelay'));
					$.data(_this, 'restartDelay', null);
					_this.stop(true);
					return _this.previous(_this.options.navigation.effect);
				});

				//Play/Stop Controls
				if (this.options.play.active) {
					playButton = $('<a class="slides-play" href="#" title="Play">Play</a>').appendTo($element);
					stopButton = $('<a class="slides-stop" href="#" title="Stop">Stop</a>').appendTo($element);

					//Play Slides
					playButton.click(function(e) {
						e.preventDefault();
						return _this.play(true);
					});

					//Stop Slides
					stopButton.click(function(e) {
						e.preventDefault();
						return _this.stop(true);
					});

					//Swap Icons
					if (this.options.play.swap) {
						stopButton.css({
							display: 'none'
						});
					}
				}

				//Pagination Controls
				if (this.options.pagination.active) {
					pagination = $('<ul class="slides-pagination" data-slides-pagination></ul>').appendTo($element);
					var slide = $element.children('.slides-container').children('.slides-control').children('.slide');
					$.each(new Array(this.data.total), function(i) {
						var paginationItem, paginationTitle, paginationLink;
						paginationItem = $('<li class="slides-pagination-item"></li>').appendTo(pagination);
						paginationTitle = $(slide[i]).data('title') ? $(slide[i]).data('title') : i;
						paginationLink = $('<a href="#" data-slides-item="' + i + '">' + paginationTitle + '</a>').appendTo(paginationItem);
						return paginationLink.click(function(e) {
							e.preventDefault();
							_this.stop(true);
							return _this.display(($(e.currentTarget).attr('data-slides-item') * 1) + 1);
						});
					});
				}

				//Update on Window Resize
				$(window).bind('resize', function() {
					return _this.update();
				});
				this._setActive();

				//Set Up Autoplay
				if (this.options.play.auto) {
					this.play();
				}

				//Start Callback
				return this.options.callback.loaded(this.options.start);
			}
		};

		//Set Active
		Plugin.prototype._setActive = function(number) {
			var $element, current;
			$element = $(this.element);
			this.data = $.data(this);
			current = number > -1 ? number : this.data.current;
			$('.active', $element).removeClass('active');
			return $('li.slides-pagination-item:eq(' + current + ') a', $element).addClass('active');
		};

		//Update Slides
		Plugin.prototype.update = function() {
			if (!this.data.animating) {
				var $element, height, width;
				$element = $(this.element);
				this.data = $.data(this);

				$('.slides-control', $element).children(':not(:eq(' + this.data.current + '))').css({
					display: 'none',
					left: 0,
					zIndex: 0
				});

				width = $element.width();
				height = (this.options.height / this.options.width) * width;
				this.options.width = width;
				this.options.height = height;

				return $('.slides-control, .slides-container', $element).css({
					width: width,
					height: height
				});
			}
		};

		//Next Slide
		Plugin.prototype.next = function(effect) {
			var $element;
			$element = $(this.element);
			this.data = $.data(this);

			$.data(this, 'direction', 'next');

			if (effect === void 0) {
				effect = this.options.navigation.effect;
			}
			if (effect === 'fade') {
				return this._fade();
			} else {
				return this._slide();
			}
		};

		//Previous Slide
		Plugin.prototype.previous = function(effect) {
			var $element;
			$element = $(this.element);
			this.data = $.data(this);

			$.data(this, 'direction', 'previous');

			if (effect === void 0) {
				effect = this.options.navigation.effect;
			}
			if (effect === 'fade') {
				return this._fade();
			} else {
				return this._slide();
			}
		};

		//Go To Slide
		Plugin.prototype.display = function(number) {
			var $element, effect;
			$element = $(this.element);
			this.data = $.data(this);

			if (effect === void 0) {
				effect = this.options.pagination.effect;
			}
			if (number > this.data.total) {
				number = this.data.total;
			} else if (number < 1) {
				number = 1;
			}
			if (typeof number === 'number') {
				if (effect === 'fade') {
					return this._fade(number);
				} else {
					return this._slide(number);
				}
				} else if (typeof number === 'string') {
				if (number === 'first') {
					if (effect === 'fade') {
						return this._fade(0);
					} else {
						return this._slide(0);
					}
				} else if (number === 'last') {
					if (effect === 'fade') {
						return this._fade(this.data.total);
					} else {
						return this._slide(this.data.total);
					}
				}
			}
		};

		//Setup Touch
		Plugin.prototype._setuptouch = function() {
			var $element, next, previous, slidesControl;
			$element = $(this.element);
			this.data = $.data(this);
			slidesControl = $('.slides-control', $element);

			//next and Previous Slides (loop)
			next = this.data.current + 1;
			previous = this.data.current - 1;
			if (previous < 0) {
				previous = this.data.total - 1;
			}
			if (next > this.data.total - 1) {
				next = 0;
			}

			//Show Next and Previous Slides offset Slide Width
			slidesControl.children(':eq(' + next + ')').css({
				display: 'block',
				left: this.options.width
			});
			return slidesControl.children(':eq(' + previous + ')').css({
				display: 'block',
				left: -this.options.width
			});
		};

		//Touch Start
		Plugin.prototype._touchstart = function(e) {
			var $element, touches;
			$element = $(this.element);
			this.data = $.data(this);
			touches = e.originalEvent.touches[0];
			this._setuptouch();
			$.data(this, 'touchtimer', Number(new Date()));
			$.data(this, 'touchstartx', touches.pageX);
			$.data(this, 'touchstarty', touches.pageY);
			return e.stopPropagation();
		};

		//Touch Move
		Plugin.prototype._touchmove = function(e) {
			var $element, prefix, slidesControl, touches, transform;
			$element = $(this.element);
			this.data = $.data(this);
			prefix = this.data.vendorPrefix;
			slidesControl = $('.slides-control', $element);
			transform = prefix + 'Transform';

			//Get Original Touch Event
			touches = e.originalEvent.touches[0];

			//Measure Touch Movement
			touchMovement = Math.abs(touches.pageX - this.data.touchstartx) < Math.abs(touches.pageY - this.data.touchstarty);
			$.data(this, 'scrolling', touchMovement);

			//If not Animating or Scrolling Tranform X Axis to Touch Event
			if (!this.data.animating && !this.data.scrolling) {
				e.preventDefault();
				this._setuptouch();
				touchOffset = touches.pageX - this.data.touchstartx;
				//Use Translate3D for hardware acceleration
				slidesControl[0].style[transform] = 'translate3d(' + touchOffset + 'px, 0px, 0px)';
			}
			return e.stopPropagation();
		};

		//Touch End
		Plugin.prototype._touchend = function(e) {
			var $element, duration, prefix, slidesControl, timing, touches, transform,
			_this = this;
			$element = $(this.element);
			this.data = $.data(this);
			slidesControl = $('.slides-control', $element);

			//Get Original Touch Event
			touches = e.originalEvent.touches[0];

			//If Slides are Moved 25% Slide to Next/Previous Slide
			if (slidesControl.position().left > this.options.width * 0.25 || slidesControl.position().left > this.options.width * 0.1 && (Number(new Date()) - this.data.touchtimer < 250)) {
				$.data(this, 'direction', 'previous');
				this._slide();
			} else if (slidesControl.position().left < -(this.options.width * 0.25) || slidesControl.position().left < -(this.options.width * 0.1) && (Number(new Date()) - this.data.touchtimer < 250)) {
				$.data(this, 'direction', 'next');
				this._slide();
			} else {
				prefix = this.data.vendorPrefix;
				transform = prefix + 'Transform';
				duration = prefix + 'TransitionDuration';
				timing = prefix + 'TransitionTimingFunction';
				slidesControl[0].style[transform] = 'translateX(0px)';
				slidesControl[0].style[duration] = this.options.effect.slide.speed * 0.85 + 'ms';
			}

			//On CSS Transition End Event
			slidesControl.on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function() {
				prefix = _this.data.vendorPrefix;
				transform = prefix + 'Transform';
				duration = prefix + 'TransitionDuration';
				timing = prefix + 'TransitionTimingFunction';
				slidesControl[0].style[transform] = '';
				slidesControl[0].style[duration] = '';
				return slidesControl[0].style[timing] = '';
			});
			return e.stopPropagation();
		};

		//Play Slides
		Plugin.prototype.play = function(next) {
			var $element, currentSlide, slidesContainer,
			_this = this;
			$element = $(this.element);
			this.data = $.data(this);

			if (!this.data.playInterval) {
				if (next) {
					currentSlide = this.data.current;
					this.data.direction = 'next';
					if (this.options.play.effect === 'fade') {
						this._fade();
					} else {
						this._slide();
					}
				}

				//Play Interval
				$.data(this, 'playInterval', setInterval((function() {
					currentSlide = _this.data.current;
					_this.data.direction = 'next';
					if (_this.options.play.effect === 'fade') {
						return _this._fade();
					} else {
						return _this._slide();
					}
				}), this.options.play.interval));

				slidesContainer = $('.slides-container', $element);

				//Pause Slides on Hover
				if (this.options.play.pauseOnHover) {
					slidesContainer.unbind();
					slidesContainer.bind('mouseenter', function() {
						clearTimeout($.data(_this, 'restartDelay'));
						$.data(_this, 'restartDelay', null);
						_this.stop();
					});
					slidesContainer.bind('mouseleave', function() {
						if (_this.options.play.restartDelay) {
							$.data(_this, 'restartDelay', setTimeout((function() {
								return _this.play(true);
							}), _this.options.play.restartDelay));
						} else {
							_this.play();
						}
					});
				}

				//Set Data Playing to True
				$.data(this, 'playing', true);

				//Add Slides Playing Class
				$('.slides-play', $element).addClass('slides-playing');

				//Swap Play/Stop Controls
				if (this.options.play.swap) {
					$('.slides-play', $element).hide();
					return $('.slides-stop', $element).show();
				}
			}
		};

		//Stop Slides
		Plugin.prototype.stop = function(clicked) {
			var $element;
			$element = $(this.element);
			this.data = $.data(this);

			//Clear Interval
			clearInterval(this.data.playInterval);

			//Unbind Pause Slides on Hover
			if (this.options.play.pauseOnHover && clicked) {
				$('.slides-container', $element).unbind();
			}

			//Remove Playing and Play Interval Data Attributes
			$.data(this, 'playInterval', null);
			$.data(this, 'playing', false);

			//Remove Slides Playing Class
			$('.slides-play', $element).removeClass('slides-playing');

			//Swap Play/Stop Controls
			if (this.options.play.swap) {
				$('.slides-stop', $element).hide();
				return $('.slides-play', $element).show();
			}
		};

		//Slide Transition
		Plugin.prototype._slide = function(number) {
			var $element, currentSlide, direction, duration, next, prefix, slidesControl, timing, transform, value,
			_this = this;
			$element = $(this.element);
			this.data = $.data(this);

			if (!this.data.animating && number !== this.data.current + 1) {

				//Set Data Attribute Animating to True
				$.data(this, 'animating', true);

				//Set Current Slide
				currentSlide = this.data.current;

				if (number > -1) {
					number = number - 1;
					value = number > currentSlide ? 1 : -1;
					direction = number > currentSlide ? -this.options.width : this.options.width;
					next = number;
				} else {
					value = this.data.direction === 'next' ? 1 : -1;
					direction = this.data.direction === 'next' ? -this.options.width : this.options.width;
					next = currentSlide + value;
				}
				if (next === -1) {
					next = this.data.total - 1;
				}
				if (next === this.data.total) {
					next = 0;
				}

				//Set Active
				this._setActive(next);

				//Hide Other Slides
				slidesControl = $('.slides-control', $element);
				if (number > -1) {
					slidesControl.children(':not(:eq(' + currentSlide + '))').css({
						display: 'none',
						left: 0,
						zIndex: 0
					});
				}
				slidesControl.children(':eq(' + next + ')').css({
					display: 'block',
					left: value * this.options.width,
					zIndex: 10
				});
				this.options.callback.start(currentSlide + 1);

				//If Vendor Prefixes use CSS Transitions alse use JQuery Animations
				if (this.data.vendorPrefix) {
					prefix = this.data.vendorPrefix;
					transform = prefix + 'Transform';
					duration = prefix + 'TransitionDuration';
					timing = prefix + 'TransitionTimingFunction';
					slidesControl[0].style[transform] = 'translateX(' + direction + 'px)';
					slidesControl[0].style[duration] = this.options.effect.slide.speed + 'ms';
					return slidesControl.on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function() {
						slidesControl[0].style[transform] = '';
						slidesControl[0].style[duration] = '';
						slidesControl.children(':eq(' + next + ')').css({
							left: 0
						});
						slidesControl.children(':eq(' + currentSlide + ')').css({
							display: 'none',
							left: 0,
							zIndex: 0
						});
						$.data(_this, 'current', next);
						$.data(_this, 'animating', false);
						slidesControl.unbind('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd');
						slidesControl.children(':not(:eq(' + next + '))').css({
							display: 'none',
							left: 0,
							zIndex: 0
						});
						if (_this.data.touch) {
							_this._setuptouch();
						}
						return _this.options.callback.complete(next + 1);
					});
				} else {
					return slidesControl.stop().animate({
						left: direction
					}, this.options.effect.slide.speed, (function() {
						slidesControl.css({
							left: 0
						});
						slidesControl.children(':eq(' + next + ')').css({
							left: 0
						});
						return slidesControl.children(':eq(' + currentSlide + ')').css({
							display: 'none',
							left: 0,
							zIndex: 0
						}, $.data(_this, 'current', next), $.data(_this, 'animating', false), _this.options.callback.complete(next + 1));
					}));
				}
			}
		};

		//Fade Transition
		Plugin.prototype._fade = function(number) {
			var $element, currentSlide, next, slidesControl, value,
			_this = this;
			$element = $(this.element);
			this.data = $.data(this);
			if (!this.data.animating && number !== this.data.current + 1) {

				//Set Data Attribute Animating to True
				$.data(this, 'animating', true);

				//Set Current Slide
				currentSlide = this.data.current;

				if (number) {
					number = number - 1;
					value = number > currentSlide ? 1 : -1;
					next = number;
				} else {
					value = this.data.direction === 'next' ? 1 : -1;
					next = currentSlide + value;
				}
				if (next === -1) {
					next = this.data.total - 1;
				}
				if (next === this.data.total) {
					next = 0;
				}

				//Set Active
				this._setActive(next);

				//Hide Other Slides
				slidesControl = $('.slides-control', $element);
				slidesControl.children(':eq(' + next + ')').css({
					display: 'none',
					left: 0,
					zIndex: 10
				});

				this.options.callback.start(currentSlide + 1);

				//Crossfade if set in Options else FadeIn/FadeOut
				if (this.options.effect.fade.crossfade) {
					slidesControl.children(':eq(' + this.data.current + ')').stop().fadeOut(this.options.effect.fade.speed);
					return slidesControl.children(':eq(' + next + ')').stop().fadeIn(this.options.effect.fade.speed, (function() {
						slidesControl.children(':eq(' + next + ')').css({
							zIndex: 0
						});
						$.data(_this, 'animating', false);
						$.data(_this, 'current', next);
						return _this.options.callback.complete(next + 1);
					}));
				} else {
					return slidesControl.children(':eq(' + currentSlide + ')').stop().fadeOut(this.options.effect.fade.speed, (function() {
						slidesControl.children(':eq(' + next + ')').stop().fadeIn(_this.options.effect.fade.speed, (function() {
							return slidesControl.children(':eq(' + next + ')').css({
								zIndex: 10
							});
						}));
						$.data(_this, 'animating', false);
						$.data(_this, 'current', next);
						return _this.options.callback.complete(next + 1);
					}));
				}
			}
		};

		//Get Vendor Prefix
		Plugin.prototype._getVendorPrefix = function() {
			var body, i, style, transition, vendor;
			body = document.body || document.documentElement;
			style = body.style;
			transition = 'transition';
			vendor = ['Moz', 'Webkit', 'Khtml', 'O', 'ms'];
			transition = transition.charAt(0).toUpperCase() + transition.substr(1);
			i = 0;
			while (i < vendor.length) {
				if (typeof style[vendor[i] + transition] === 'string') {
					return vendor[i];
				}
				i++;
			}
			return false;
		};

		//Declare jQuery Plugin
		return $.fn[pluginName] = function(options) {
			return this.each(function() {
				if (!$.data(this, 'plugin_' + pluginName)) {
					return $.data(this, 'plugin_' + pluginName, new Plugin(this, options));
				}
			});
		};

	})(jQuery, window, document);

}).call(this);
