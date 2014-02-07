/*!
 * jquery.map.js v0.1
 *
 * Copyright (c) 2014, Bigfish
 * http://bigfish.tv
 *
 */

(function() {

	(function($, window, document) {

		var Plugin, defaults, pluginName, map, infowindow;
		pluginName = "gmap";

		//Plugin Options
		defaults = {
			labelClass: '',
			pagination: false,
			scale: 1,
			path: 'M 25 -60 -25 -60 -25 -11.181 -10.314 -11.181 0.141 0 10.598 -11.181 25 -11.181 Z',
			color: '#000000',
			icon: null,
			locations: null,
			mapOptions: {
				zoom: 9,
				minZoom: 0,
				maxZoom: 19,
				center: null,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				styles: null,
				scrollwheel: false,
				panControl: false,
				zoomControl: false,
				mapTypeControl: false,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			},
			zoomInControl: true,
			zoomOutControl: true,
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
			_this = this,
			locations = this.options.locations,
			pagination = this.options.pagination;
			//Map Options
			zoom = this.options.mapOptions.zoom,
			minZoom = this.options.mapOptions.minZoom,
			maxZoom = this.options.mapOptions.maxZoom,
			center = this.options.mapOptions.center,
			mapTypeId = this.options.mapOptions.mapTypeId,
			styles = this.options.mapOptions.styles,
			scrollwheel = this.options.mapOptions.scrollwheel,
			panControl = this.options.mapOptions.panControl,
			zoomControl = this.options.mapOptions.zoomControl,
			mapTypeControl = this.options.mapOptions.mapTypeControl,
			scaleControl = this.options.mapOptions.scaleControl,
			streetViewControl = this.options.mapOptions.streetViewControl,
			overviewMapControl = this.options.mapOptions.overviewMapControl;
			//Controls
			zoomInControl = this.options.zoomInControl,
			zoomOutControl = this.options.zoomOutControl,

			google.maps.event.addDomListener(window, 'load', function() {
				google.maps.visualRefresh = true;

				//Center Map on Center Value or First Location in Array
				if (center) {
					position = new google.maps.LatLng(center[0].lat, center[0].lng);
				} else {
					position = new google.maps.LatLng(locations[0].position.lat, locations[0].position.lng);
				}

				//Map Options
				var mapOptions = {
					center: position,
					zoom: zoom,
					minZoom: minZoom,
					maxZoom: maxZoom,
					mapTypeId: mapTypeId,
					styles: styles,
					scrollwheel: scrollwheel,
					panControl: panControl,
					zoomControl: zoomControl,
					mapTypeControl: mapTypeControl,
					scaleControl: scaleControl,
					streetViewControl: streetViewControl,
					overviewMapControl: overviewMapControl
				};

				//Create Map
				map = new google.maps.Map($element[0].element, mapOptions);

				//Create Infowindow
				infowindow = new google.maps.InfoWindow();

				//Close Infowindow on Map Click
				google.maps.event.addListener(map, 'click', function() {
					//infowindow.close();
					infoBox.close();
				});

				//Create Infobox
				var infoBoxOptions = {
					disableAutoPan: false,
					maxWidth: 0,
					boxClass: 'infobox',
					pixelOffset: new google.maps.Size(-125,-245),
					zIndex: null,
					closeBoxMargin: 0,
					closeBoxURL: '',
					infoBoxClearance: new google.maps.Size(1, 1),
					isHidden: false,
					pane: 'floatPane',
					enableEventPropagation: false
			    };

			    infoBox = new InfoBox(infoBoxOptions);

				_this.createMarkers(map, locations);

				//Create Location Controls
				if (pagination) {
					_this.createPagination(map, locations);
				}
				//Create Custom Zoom Controls
				if (zoomInControl) {
					_this.createZoomInControl(map);
				}
				//Create Custom Zoom Controls
				if (zoomOutControl) {
					_this.createZoomOutControl(map);
				}
			});
		};

		//Create Pagination
		Plugin.prototype.createPagination = function(map, locations) {
			_this = this;
			var pagination = $('<ul class="map-pagination"></ul>');

			$('#map').after(pagination);
			for (var i = 0; i < locations.length; i++) {
				var location = locations[i];
				pagination.append('<li class="map-pagination-item"><a data-lat="' + location.position.lat + '" data-lng="' + location.position.lng + '">' + location.title + '</a></li>');
			}
			if (center) {
				pagination.prepend('<li class="map-pagination-item"><a class="all active" data-lat="' + center[0].lat + '" data-lng="' + center[0].lng + '">All</a></li>');
			}

			//Change Locaiton on Click
			$('.map-pagination-item a').on('click', function() {
				$('.map-pagination-item a').removeClass('active');
				$(this).addClass('active');
				var lat = $(this).data('lat');
				var lng = $(this).data('lng');
				_this.mapPanTo(lat,lng);
				if ($(this).hasClass('all')) {
					map.setZoom(zoom);
				} else {
					map.setZoom(15);
				}
			});
		};

		//Create Zoom In Control
		Plugin.prototype.createZoomInControl = function(map) {

			function ZoomInControl(controlDiv, map) {

				//Create Control
				var controlUI = document.createElement('DIV');
				controlUI.className = 'map-controls map-controls-zoom-in hidden-small';
				controlUI.style.cursor = 'pointer';
				controlUI.title = 'Click to Zoom In';
				controlDiv.appendChild(controlUI);

				//Create Control Inner Content
				var controlText = document.createElement('DIV');
				controlText.innerHTML = '<span class="icon-zoom-in"></span>';
				controlUI.appendChild(controlText);

				//Google Maps Controls
				google.maps.event.addDomListener(controlUI, 'click', function() {
					var newZoom = map.getZoom() + 1;
					map.setZoom(newZoom);
				});
			}

			// Zoom In Control
			var zoomInControlDiv = document.createElement('DIV');
			var zoomInControl = new ZoomInControl(zoomInControlDiv, map);
			zoomInControlDiv.index = 1;
			map.controls[google.maps.ControlPosition.LEFT_TOP].push(zoomInControlDiv);
		};

		//Create Zoom Out Control
		Plugin.prototype.createZoomOutControl = function(map) {

			function ZoomOutControl(controlDiv, map) {

				//Create Control
				var controlUI = document.createElement('DIV');
				controlUI.className = 'map-controls map-controls-zoom-out hidden-small';
				controlUI.style.cursor = 'pointer';
				controlUI.title = 'Click to Zoom Out';
				controlDiv.appendChild(controlUI);

				//Create Control Inner Content
				var controlText = document.createElement('DIV');
				controlText.innerHTML = '<span class="icon-zoom-out"></span>';
				controlUI.appendChild(controlText);

				//Google Maps Controls
				google.maps.event.addDomListener(controlUI, 'click', function() {
					var newZoom = map.getZoom() - 1;
					map.setZoom(newZoom);
				});
			}

			// Zoom Out Control
			var zoomOutControlDiv = document.createElement('DIV');
			var zoomOutControl = new ZoomOutControl(zoomOutControlDiv, map);
			zoomOutControlDiv.index = 1;
			map.controls[google.maps.ControlPosition.LEFT_TOP].push(zoomOutControlDiv);
		};

		//Map Pan To
		Plugin.prototype.mapPanTo = function(lat,lng) {
			var LatLng = new google.maps.LatLng(lat, lng);
			map.panTo(LatLng);
		};

		//Create Markers
		Plugin.prototype.createMarkers = function(map,locations) {
			var path = this.options.path,
			icon = this.options.icon,
			color = this.options.color,
			scale = this.options.scale,
			labelClass = this.options.labelClass;

			for (var i = 0; i < locations.length; i++) {
				var location = locations[i];
				var LatLng = new google.maps.LatLng(location.position.lat, location.position.lng);

				//Create Marker
				var marker = new Marker({
					map: map,
					position: LatLng,
					zIndex: 1 + i,
					title: location.title,
					icon: {
						path: path,
						fillColor: color,
						fillOpacity: 1,
						strokeColor: '',
						strokeWeight: 0,
						scale: scale
					},
					label: '<i class="icon ' + labelClass + ' ' + icon + '"></i>'
				});

				//Add Content to Infowindow
				/*
google.maps.event.addListener(marker, 'click', (function(marker, location) {
					return function() {
						infowindow.setContent(location.content);
						infowindow.open(map, marker);
					}
				})(marker, location));
*/

				//Infobox
				google.maps.event.addListener(marker, 'click', (function(marker, location) {
					return function() {
						infoBox.setContent(location.content);
						infoBox.open(map, marker);
					}
				})(marker, location));
			}

		}

		//Define Marker
		var Marker = function(options) {
			google.maps.Marker.apply(this, arguments);
			if (options.label) {
				this.MarkerLabel = new MarkerLabel({
					map: this.map,
					marker: this,
					text: options.label
				});
				this.MarkerLabel.bindTo('position', this, 'position');
			}
		};

		//Create Custom Marker Object
		Marker.prototype = new google.maps.Marker();

		//Custom Marker SetMap
		Marker.prototype.setMap = function() {
			google.maps.Marker.prototype.setMap.apply(this, arguments);
			(this.MarkerLabel) && this.MarkerLabel.setMap.apply(this.MarkerLabel, arguments);
		};

		//Marker Label Overlay
		var MarkerLabel = function(options) {
			var self = this;
			this.setValues(options);

			//Create the label container
			this.div = document.createElement('div');
			this.div.className = 'marker-label';
			var span = document.createElement('span');
			span.className = 'marker-icon';
			this.div.appendChild(span);

			//Trigger the marker click handler if clicking on the label
			google.maps.event.addDomListener(this.div, 'click', function(e){
				(e.stopPropagation) && e.stopPropagation();
				google.maps.event.trigger(self.marker, 'click');
			});
		};

		//Create MarkerLabel Object
		MarkerLabel.prototype = new google.maps.OverlayView;

		//Marker Label onAdd
		MarkerLabel.prototype.onAdd = function() {
			 var pane = this.getPanes().overlayImage.appendChild(this.div);
			 var self = this;
			 this.listeners = [
				  google.maps.event.addListener(this, 'position_changed', function() { self.draw(); }),
				  google.maps.event.addListener(this, 'text_changed', function() { self.draw(); }),
				  google.maps.event.addListener(this, 'zindex_changed', function() { self.draw(); })
			 ];
		};

		//Marker Label onRemove
		MarkerLabel.prototype.onRemove = function() {
			 this.div.parentNode.removeChild(this.div);
			 for (var i = 0, I = this.listeners.length; i < I; ++i) {
				  google.maps.event.removeListener(this.listeners[i]);
			 }
		};

		//Implement draw
		MarkerLabel.prototype.draw = function() {
			 var projection = this.getProjection();
			 var position = projection.fromLatLngToDivPixel(this.get('position'));
			 var div = this.div;
			 div.style.left = position.x + 'px';
			 div.style.top = position.y + 'px';
			 div.style.display = 'block';
			 //z-index to allow label to overlay marker
			 div.style.zIndex = this.get('zIndex');
			 this.div.innerHTML = this.get('text').toString();
		};

		//Declare jQuery Plugin
		return $.fn[pluginName] = function(options) {
			return this.each(function() {
				if (!$.data(this, "plugin_" + pluginName)) {
					return $.data(this, "plugin_" + pluginName, new Plugin(this, options));
				}
			});
		};

	})(jQuery, window, document);

}).call(this);