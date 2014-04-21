/*
 * jquery.affix.js v1.0
 *
 * Copyright (c) 2014, Bigfish
 * http://bigfish.tv
 *
 */


(function() {

	(function($, window, document) {
	
		'use strict';

		var Plugin, defaults, pluginName;
		pluginName = 'affix';
		
		//Plugin Options
		defaults = {
			offset: 0
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
			var offset = this.options.offset;
			var top = $element.offset().top;
			var width = $element.width();
			
			if (offset){
				top = $element.offset().top - offset;
			}
			
			
			//Update Width on Window Resize
			$(window).resize(function() {
				width = $element.width();
			});
			
			//Scroll Event
			$(window).scroll(function() {
				var scrollTop = $(window).scrollTop();

				if (top < scrollTop) {
					$element.css({position: 'fixed', top: offset, width: width});
					$element.trigger('affixed.' + pluginName);
				} else {
					$element.css({position: 'static'});
				}
			});
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