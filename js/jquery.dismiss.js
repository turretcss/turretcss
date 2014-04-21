/*
 * jquery.dismiss.js v1.0
 *
 * Copyright (c) 2014, Bigfish
 * http://bigfish.tv
 *
 */


(function() {

	(function($, window, document) {
	
		'use strict';

		var Plugin, defaults, pluginName;
		pluginName = 'dismiss';

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
			
			$element.on('click', _this.close);
		};

		//Close
		Plugin.prototype.close = function(event) {
			var $this = $(this);
			var target = $this.attr('data-target');
			
			//Use href for Target
			if (!target) {
				target = $this.attr('href');
			}
			
			//Prevent Default Event
			if (event) {
				event.preventDefault();
			}
			
			//Set Target
			var $parent = $(target);
			
			if (!$parent.length) {
				var $parent = $this.parent();
			}
			
			//Hide Parent
			$parent.hide();
			
			//Trigger Dismissed Event
			$parent.trigger('dismissed.' + pluginName);
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