/*
 * jquery.scrolltop.js v0.1
 *
 * Copyright (c) 2014, Bigfish
 * http://bigfish.tv
 *
 */


(function() {

	(function($, window, document) {

		var Plugin, defaults, pluginName;
		pluginName = "scrolltop";

		//Plugin Options
		defaults = {
			body: 'html, body',
			element: '[data-scroll-top]',
			speed: 650,
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
			var $element = $(this),
			_this = this;
			$element = $(this.options.element);
			speed = this.options.speed;
			easing = this.options.easing;
			$body = $(this.options.body);

			//Animate Scroll with Easing
			function scrollAnimate() {
				$body.stop().animate({scrollTop: 0}, speed, easing);
			}

			//Click Event
			$element.on('click', function(e) {
				e.preventDefault();
				scrollAnimate();
			});
		};

		//Animate Scroll
		Plugin.prototype.scrollAnimate = function() {
			this.$body.stop().animate({scrollTop: 0}, speed, easing);
		};

		//Declare jQuery Plugin
		return jQuery.prototype[pluginName] = function(options) {
			return this.each(function() {
				if (!$.data(this, "plugin_" + pluginName)) {
					return $.data(this, "plugin_" + pluginName, new Plugin(this, options));
				}
			});
		};

	})(jQuery, window, document);

}).call(this);