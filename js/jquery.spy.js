/*
 * jquery.spy.js v1.0
 *
 * Copyright (c) 2014, Bigfish
 * http://bigfish.tv
 *
 */


(function() {

	(function($, window, document) {
	
		'use strict';

		var Plugin, defaults, pluginName;
		pluginName = 'spy';
		
		//Plugin Options
		defaults = {
			body: 'html, body',
			min: 0,
            max: 0,
            mode: 'vertical',
            buffer: 0,
            container: window,
            onEnter: function() {},
            onLeave: function() {},
            onTick: function() {},
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
			var element = this.element;
			var $container = $(this.options.container);
			var mode = this.options.mode;
			var buffer = this.options.buffer;
			var enters = 0;
			var leaves = 0;
			var inside = false;
			
			$container.bind('scroll', function(e){
				var position = {top: $(this).scrollTop(), left: $(this).scrollLeft()};
				var xy = (mode == 'vertical') ? position.top + buffer : position.left + buffer;
				var max = _this.options.max;
				var min = _this.options.min;
				
				if(max == 0){
					max = (mode == 'vertical') ? $container.height() : $container.outerWidth() + $(element).outerWidth();
				}
				
				//if we have reached the minimum bound but are below the max
				if(xy >= min && xy <= max) {
				
					if(!inside) {
						inside = true;
						enters++;
						
						//Trigger Enter Event
						$(element).trigger('enter.' + pluginName, {position: position});
						
						//Enter Callback Method
						if($.isFunction(_this.options.onEnter)) {
							_this.options.onEnter(element, position);
						}
					}
					
					//Tick Enter Event
					$(element).trigger('tick.' + pluginName,  {position: position, inside: inside, enters: enters, leaves: leaves});
					
					//Tick Callback Method
					if($.isFunction(_this.options.onTick)) {
						_this.options.onTick(element, position, inside, enters, leaves);
					}
					
				} else {
					
					if(inside) {
						inside = false;
						leaves++;
						
						//Trigger Leave Event
						$(element).trigger('leave.' + pluginName,  {position: position, leaves:leaves});
						
						//Leave Callback Method
						if($.isFunction(_this.options.onLeave)){
							_this.options.onLeave(element, position);
						}
					}
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