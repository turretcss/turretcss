/*!
 * jquery.gmap.js v1.0
 *
 * Copyright (c) 2014, Bigfish
 * http://bigfish.tv
 *
 */

(function() {

	(function($, window, document) {

		'use strict';

		var Plugin, defaults, pluginName, map, mapBounds, infowindow, infoBox, mapBounds,
		markerArray = [];
		pluginName = 'gmap';

		//Plugin Options
		defaults = {
			pagination: false,
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
				zoomInControl: true,
				zoomOutControl: true,
				zoomInIcon: 'icon-zoom-in',
				zoomOutIcon: 'icon-zoom-out',
				mapTypeControl: false,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			},
			markerOptions: {
				labelClass: '',
				width: 250,
				height: 100,
				scale: 1,
				path: 'M 55 -80 -55 -80 -55 -13.175 -12.015 -13.175 0.134 0 12.285 -13.175 55 -13.175 Z',
				color: '#1B2A3C',
				icon: 'icon-thiess-logo'
			},
			mapInfoBoxOptions: {
				width: 300,
				height: 175
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
			var $element = $(this);
			var _this = this;
			var locations = this.options.locations;
			var pagination = this.options.pagination;
			var zoom = this.options.mapOptions.zoom;
			var minZoom = this.options.mapOptions.minZoom;
			var maxZoom = this.options.mapOptions.maxZoom;
			var center = this.options.mapOptions.center;
			var mapTypeId = this.options.mapOptions.mapTypeId;
			var styles = this.options.mapOptions.styles;
			var scrollwheel = this.options.mapOptions.scrollwheel;
			var panControl = this.options.mapOptions.panControl;
			var zoomControl = this.options.mapOptions.zoomControl;
			var zoomInControl = this.options.mapOptions.zoomInControl;
			var zoomOutControl = this.options.mapOptions.zoomOutControl;
			var mapTypeControl = this.options.mapOptions.mapTypeControl;
			var scaleControl = this.options.mapOptions.scaleControl;
			var streetViewControl = this.options.mapOptions.streetViewControl;
			var overviewMapControl = this.options.mapOptions.overviewMapControl;
			var markerWidth = this.options.markerOptions.width;
			var markerHeight = this.options.markerOptions.height;
			var markerScale = this.options.markerOptions.scale;
			var infoboxWidth =  this.options.mapInfoBoxOptions.width;
			var infoboxHeight =  this.options.mapInfoBoxOptions.height;

			google.maps.event.addDomListener(window, 'load', function() {
				google.maps.visualRefresh = true;

				//Center Map on Center Value or First Location in Array
				if (center) {
					var position = new google.maps.LatLng(center[0].lat, center[0].lng);
				} else {
					var position = new google.maps.LatLng(locations[0].position.lat, locations[0].position.lng);
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
					boxStyle: {
						width: infoboxWidth + 'px',
						height: infoboxHeight + 'px'
					},
					pixelOffset: new google.maps.Size(-(infoboxWidth/2),-(infoboxHeight + (markerHeight * markerScale))),
					zIndex: null,
					closeBoxMargin: 0,
					closeBoxURL: '',
					infoBoxClearance: new google.maps.Size(1, 1),
					isHidden: false,
					pane: 'floatPane',
					enableEventPropagation: false
			    };
			    infoBox = new InfoBox(infoBoxOptions);

				//Create Markers
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
			var $element = $(this.element),
			_this = this,
			categories = [],
			pagination = $('<ul class="map-pagination"></ul>');
			$element.after(pagination);

			//Populate Categories Array with Unique Values
			$.each(locations, function(i, location) {
				if ($.inArray(location.category, categories) == -1) {
					if(location.category != 'Offices') {
						categories.push(location.category);
					}
				}
			});

			//Create Pagination Item for Each Category
			$.each(categories, function(i, category) {
				pagination.append('<li class="map-pagination-item"><a data-category="' + category + '">' + category + '</a></li>');
			});

			//Prepend All Pagination Item if Center is present
			pagination.prepend('<li class="map-pagination-item"><a class="active" data-category="All">All</a></li>');

			//Change Locaiton on Click
			var $paginationItem = $('.map-pagination-item a');

			//Filter Items on Click
			$paginationItem.on('click', function() {
				var category = $(this).data('category');

				//Update Active Item
				$paginationItem.removeClass('active');
				$(this).addClass('active');

				//Update Markers
				if ($(this).data('category') == 'All') {
					_this.clearMarkers();
					_this.createMarkers(map, locations);
				} else {
					_this.clearMarkers();
					_this.createMarkers(map, locations, category);
				}
			});
		};

		//Create Zoom In Control
		Plugin.prototype.createZoomInControl = function(map) {
			var zoomInIcon = this.options.mapOptions.zoomInIcon;

			function ZoomInControl(controlDiv, map) {

				//Create Control
				var controlUI = document.createElement('DIV');
				controlUI.className = 'map-controls map-controls-zoom-in hidden-small';
				controlUI.style.cursor = 'pointer';
				controlUI.title = 'Click to Zoom In';
				controlDiv.appendChild(controlUI);

				//Create Control Inner Content
				var controlText = document.createElement('DIV');
				controlText.innerHTML = '<span class="' + zoomInIcon + '"></span>';
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
			var zoomOutIcon = this.options.mapOptions.zoomOutIcon;

			function ZoomOutControl(controlDiv, map) {

				//Create Control
				var controlUI = document.createElement('DIV');
				controlUI.className = 'map-controls map-controls-zoom-out hidden-small';
				controlUI.style.cursor = 'pointer';
				controlUI.title = 'Click to Zoom Out';
				controlDiv.appendChild(controlUI);

				//Create Control Inner Content
				var controlText = document.createElement('DIV');
				controlText.innerHTML = '<span class="' + zoomOutIcon + '"></span>';
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

		//Clear Markers
		Plugin.prototype.clearMarkers = function() {
			//Close Infobox
			infoBox.close();
			//Remove Markers from Map
			$.each(markerArray, function(i, marker) {
				marker.setMap(null);
			});
			//Empty MarkerArray
			markerArray = [];
		}

		//Create Markers
		Plugin.prototype.createMarkers = function(map,locations,category) {
			var markerPath = this.options.markerOptions.path,
			markerWidth = this.options.markerOptions.width,
			markerHeight = this.options.markerOptions.height,
			markerIcon = this.options.markerOptions.icon,
			markerColor = this.options.markerOptions.color,
			markerScale = this.options.markerOptions.scale,
			labelClass = this.options.markerOptions.labelClass;

			//Create Bounds
			mapBounds = new google.maps.LatLngBounds();

			$.each(locations, function(i, location) {
				if(!category || location.category == category) {
					var LatLng = new google.maps.LatLng(location.position.lat, location.position.lng);

					//Create Marker
					var marker = new Marker({
						map: map,
						position: LatLng,
						zIndex: 1 + i,
						title: location.title,
						icon: {
							path: markerPath,
							fillColor: markerColor,
							fillOpacity: 1,
							strokeColor: '',
							strokeWeight: 0,
							scale: markerScale
						},
						label: '<i class="map-icon ' + labelClass + ' ' + markerIcon + '"></i>'
					});

					//Add Marker to MarkerArray
					markerArray.push(marker);

					//Extend Map Bounds for Marker Lat/Lng
					mapBounds.extend(marker.position);

					//Add Content to Infobox
					google.maps.event.addListener(marker, 'click', (function(marker, location) {
						return function() {
							infoBox.setContent(location.content);
							infoBox.open(map, marker);
						}
					})(marker, location));
				}
			});

			//Map Fit to Bounds
			map.fitBounds(mapBounds);
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

		//Implement Draw
		MarkerLabel.prototype.draw = function() {
			var div = this.div,
			projection = this.getProjection(),
			position = projection.fromLatLngToDivPixel(this.get('position'));

			div.style.left = position.x + 'px';
			div.style.top = position.y + 'px';
			div.style.display = 'block';
			div.style.zIndex = this.marker.get('zIndex') + 1; //z-index to allow label to overlay marker
			div.innerHTML = this.get('text').toString();
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