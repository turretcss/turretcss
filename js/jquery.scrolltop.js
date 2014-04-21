/*
 * jquery.scrolltop.js v0.1
 *
 * Copyright (c) 2014, Bigfish
 * http://bigfish.tv
 *
 */


(function() {

	(function($, window, document) {
	
		'use strict';

		var Plugin, defaults, pluginName;
		pluginName = 'scrolltop';

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
			var _this = this;
			var $element = $(this.element);

			//Click Event
			$element.on('click', function(e) {
				e.preventDefault();
				_this.scrollAnimate();
			});
		};

		//Animate Scroll with Easing
		Plugin.prototype.scrollAnimate = function() {
			var $body = $(this.options.body);
			var speed = this.options.speed;
			var easing = this.options.easing;
			
			$body.stop().animate({scrollTop: 0}, speed, easing);
		};

		//Declare jQuery Plugin
		return jQuery.prototype[pluginName] = function(options) {
			return this.each(function() {
				if (!$.data(this, 'plugin_' + pluginName)) {
					return $.data(this, 'plugin_' + pluginName, new Plugin(this, options));
				}
			});
		};

	})(jQuery, window, document);

}).call(this);