jQuery(function($){

	// Mobile menu
	$('.mobile-menu-toggle').click(function(){
		$('body').toggleClass('mobile-menu-expanded');
	});
	$('.submenu-expand').click(function(){
		$(this).parent().toggleClass('submenu-active');
	});

	$('.jarallax').jarallax({
		speed: 0.2
	});

	$(".home-hero-compare").twentytwenty({
		default_offset_pct: 0.5, // How much of the before image is visible when the page loads
		orientation: 'horizontal', // Orientation of the before and after images ('horizontal' or 'vertical')
		before_label: 'Before', // Set a custom before label
		after_label: 'After', // Set a custom after label
		no_overlay: true, //Do not show the overlay with before and after
		move_slider_on_hover: false, // Move slider on mouse hover?
		move_with_handle_only: false, // Allow a user to swipe anywhere on the image to control slider movement.
		click_to_move: true // Allow a user to click (or tap) anywhere on the image to move the slider to that location.
	});

	$(".compare-container").twentytwenty({
		default_offset_pct: 0.5, // How much of the before image is visible when the page loads
		orientation: 'horizontal', // Orientation of the before and after images ('horizontal' or 'vertical')
		before_label: 'Before', // Set a custom before label
		after_label: 'After', // Set a custom after label
		no_overlay: false, //Do not show the overlay with before and after
		move_slider_on_hover: false, // Move slider on mouse hover?
		move_with_handle_only: true, // Allow a user to swipe anywhere on the image to control slider movement.
		click_to_move: false // Allow a user to click (or tap) anywhere on the image to move the slider to that location.
  });
});

/*!
 * Name    : Just Another Parallax [Jarallax]
 * Version : 1.11.1
 * Author  : nK <https://nkdev.info>
 * GitHub  : https://github.com/nk-o/jarallax
 */
/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 11);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */,
/* 1 */,
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function (callback) {

	if (document.readyState === 'complete' || document.readyState === 'interactive') {
		// Already ready or interactive, execute callback
		callback.call();
	} else if (document.attachEvent) {
		// Old browsers
		document.attachEvent('onreadystatechange', function () {
			if (document.readyState === 'interactive') callback.call();
		});
	} else if (document.addEventListener) {
		// Modern browsers
		document.addEventListener('DOMContentLoaded', callback);
	}
};

/***/ }),
/* 3 */,
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(global) {

var win;

if (typeof window !== "undefined") {
	win = window;
} else if (typeof global !== "undefined") {
	win = global;
} else if (typeof self !== "undefined") {
	win = self;
} else {
	win = {};
}

module.exports = win;
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(5)))

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

var g;

// This works in non-strict mode
g = function () {
	return this;
}();

try {
	// This works if eval is allowed (see CSP)
	g = g || new Function("return this")();
} catch (e) {
	// This works if the window reference is available
	if ((typeof window === "undefined" ? "undefined" : _typeof(window)) === "object") g = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;

/***/ }),
/* 6 */,
/* 7 */,
/* 8 */,
/* 9 */,
/* 10 */,
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(12);


/***/ }),
/* 12 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

var _liteReady = __webpack_require__(2);

var _liteReady2 = _interopRequireDefault(_liteReady);

var _global = __webpack_require__(4);

var _jarallax = __webpack_require__(13);

var _jarallax2 = _interopRequireDefault(_jarallax);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

// no conflict
var oldPlugin = _global.window.jarallax;
_global.window.jarallax = _jarallax2.default;
_global.window.jarallax.noConflict = function () {
	_global.window.jarallax = oldPlugin;
	return this;
};

// jQuery support
if (typeof _global.jQuery !== 'undefined') {
	var jQueryPlugin = function jQueryPlugin() {
		var args = arguments || [];
		Array.prototype.unshift.call(args, this);
		var res = _jarallax2.default.apply(_global.window, args);
		return (typeof res === 'undefined' ? 'undefined' : _typeof(res)) !== 'object' ? res : this;
	};
	jQueryPlugin.constructor = _jarallax2.default.constructor;

	// no conflict
	var oldJqPlugin = _global.jQuery.fn.jarallax;
	_global.jQuery.fn.jarallax = jQueryPlugin;
	_global.jQuery.fn.jarallax.noConflict = function () {
		_global.jQuery.fn.jarallax = oldJqPlugin;
		return this;
	};
}

// data-jarallax initialization
(0, _liteReady2.default)(function () {
	(0, _jarallax2.default)(document.querySelectorAll('[data-jarallax]'));
});

/***/ }),
/* 13 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(global) {

Object.defineProperty(exports, "__esModule", {
	value: true
});

var _slicedToArray = function () { function sliceIterator(arr, i) { var _arr = []; var _n = true; var _d = false; var _e = undefined; try { for (var _i = arr[Symbol.iterator](), _s; !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"]) _i["return"](); } finally { if (_d) throw _e; } } return _arr; } return function (arr, i) { if (Array.isArray(arr)) { return arr; } else if (Symbol.iterator in Object(arr)) { return sliceIterator(arr, i); } else { throw new TypeError("Invalid attempt to destructure non-iterable instance"); } }; }();

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

var _liteReady = __webpack_require__(2);

var _liteReady2 = _interopRequireDefault(_liteReady);

var _rafl = __webpack_require__(14);

var _rafl2 = _interopRequireDefault(_rafl);

var _global = __webpack_require__(4);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var isIE = navigator.userAgent.indexOf('MSIE ') > -1 || navigator.userAgent.indexOf('Trident/') > -1 || navigator.userAgent.indexOf('Edge/') > -1;
var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

var supportTransform = function () {
	var prefixes = 'transform WebkitTransform MozTransform'.split(' ');
	var div = document.createElement('div');
	for (var i = 0; i < prefixes.length; i++) {
		if (div && div.style[prefixes[i]] !== undefined) {
			return prefixes[i];
		}
	}
	return false;
}();

var $deviceHelper = void 0;

/**
 * The most popular mobile browsers changes height after page scroll and this generates image jumping.
 * We can fix it using this workaround with vh units.
 */
function getDeviceHeight() {
	if (!$deviceHelper && document.body) {
		$deviceHelper = document.createElement('div');
		$deviceHelper.style.cssText = 'position: fixed; top: -9999px; left: 0; height: 100vh; width: 0;';
		document.body.appendChild($deviceHelper);
	}

	return ($deviceHelper ? $deviceHelper.clientHeight : 0) || _global.window.innerHeight || document.documentElement.clientHeight;
}

// Window data
var wndW = void 0;
var wndH = void 0;
var wndY = void 0;
var forceResizeParallax = false;
var forceScrollParallax = false;
function updateWndVars(e) {
	wndW = _global.window.innerWidth || document.documentElement.clientWidth;

	if (isMobile) {
		wndH = getDeviceHeight();
	} else {
		wndH = _global.window.innerHeight || document.documentElement.clientHeight;
	}

	if ((typeof e === 'undefined' ? 'undefined' : _typeof(e)) === 'object' && (e.type === 'load' || e.type === 'dom-loaded')) {
		forceResizeParallax = true;
	}
}
updateWndVars();
_global.window.addEventListener('resize', updateWndVars);
_global.window.addEventListener('orientationchange', updateWndVars);
_global.window.addEventListener('load', updateWndVars);
(0, _liteReady2.default)(function () {
	updateWndVars({
		type: 'dom-loaded'
	});
});

// list with all jarallax instances
// need to render all in one scroll/resize event
var jarallaxList = [];

// Animate if changed window size or scrolled page
var oldPageData = false;
function updateParallax() {
	if (!jarallaxList.length) {
		return;
	}

	if (_global.window.pageYOffset !== undefined) {
		wndY = _global.window.pageYOffset;
	} else {
		wndY = (document.documentElement || document.body.parentNode || document.body).scrollTop;
	}

	var isResized = forceResizeParallax || !oldPageData || oldPageData.width !== wndW || oldPageData.height !== wndH;
	var isScrolled = forceScrollParallax || isResized || !oldPageData || oldPageData.y !== wndY;

	forceResizeParallax = false;
	forceScrollParallax = false;

	if (isResized || isScrolled) {
		jarallaxList.forEach(function (item) {
			if (isResized) {
				item.onResize();
			}
			if (isScrolled) {
				item.onScroll();
			}
		});

		oldPageData = {
			width: wndW,
			height: wndH,
			y: wndY
		};
	}

	(0, _rafl2.default)(updateParallax);
}

// ResizeObserver
var resizeObserver = global.ResizeObserver ? new global.ResizeObserver(function (entry) {
	if (entry && entry.length) {
		(0, _rafl2.default)(function () {
			entry.forEach(function (item) {
				if (item.target && item.target.jarallax) {
					if (!forceResizeParallax) {
						item.target.jarallax.onResize();
					}
					forceScrollParallax = true;
				}
			});
		});
	}
}) : false;

var instanceID = 0;

// Jarallax class

var Jarallax = function () {
	function Jarallax(item, userOptions) {
		_classCallCheck(this, Jarallax);

		var self = this;

		self.instanceID = instanceID++;

		self.$item = item;

		self.defaults = {
			type: 'scroll', // type of parallax: scroll, scale, opacity, scale-opacity, scroll-opacity
			speed: 0.5, // supported value from -1 to 2
			imgSrc: null,
			imgElement: '.jarallax-img',
			imgSize: 'cover',
			imgPosition: '50% 50%',
			imgRepeat: 'no-repeat', // supported only for background, not for <img> tag
			keepImg: false, // keep <img> tag in it's default place
			elementInViewport: null,
			zIndex: -100,
			disableParallax: false,
			disableVideo: false,
			automaticResize: true, // use ResizeObserver to recalculate position and size of parallax image

			// video
			videoSrc: null,
			videoStartTime: 0,
			videoEndTime: 0,
			videoVolume: 0,
			videoLoop: true,
			videoPlayOnlyVisible: true,
			videoLazyLoading: true,

			// events
			onScroll: null, // function(calculations) {}
			onInit: null, // function() {}
			onDestroy: null, // function() {}
			onCoverImage: null // function() {}
		};

		// prepare data-options
		var dataOptions = self.$item.dataset || {};
		var pureDataOptions = {};
		Object.keys(dataOptions).forEach(function (key) {
			var loweCaseOption = key.substr(0, 1).toLowerCase() + key.substr(1);
			if (loweCaseOption && typeof self.defaults[loweCaseOption] !== 'undefined') {
				pureDataOptions[loweCaseOption] = dataOptions[key];
			}
		});

		self.options = self.extend({}, self.defaults, pureDataOptions, userOptions);
		self.pureOptions = self.extend({}, self.options);

		// prepare 'true' and 'false' strings to boolean
		Object.keys(self.options).forEach(function (key) {
			if (self.options[key] === 'true') {
				self.options[key] = true;
			} else if (self.options[key] === 'false') {
				self.options[key] = false;
			}
		});

		// fix speed option [-1.0, 2.0]
		self.options.speed = Math.min(2, Math.max(-1, parseFloat(self.options.speed)));

		// prepare disableParallax callback
		if (typeof self.options.disableParallax === 'string') {
			self.options.disableParallax = new RegExp(self.options.disableParallax);
		}
		if (self.options.disableParallax instanceof RegExp) {
			var disableParallaxRegexp = self.options.disableParallax;
			self.options.disableParallax = function () {
				return disableParallaxRegexp.test(navigator.userAgent);
			};
		}
		if (typeof self.options.disableParallax !== 'function') {
			self.options.disableParallax = function () {
				return false;
			};
		}

		// prepare disableVideo callback
		if (typeof self.options.disableVideo === 'string') {
			self.options.disableVideo = new RegExp(self.options.disableVideo);
		}
		if (self.options.disableVideo instanceof RegExp) {
			var disableVideoRegexp = self.options.disableVideo;
			self.options.disableVideo = function () {
				return disableVideoRegexp.test(navigator.userAgent);
			};
		}
		if (typeof self.options.disableVideo !== 'function') {
			self.options.disableVideo = function () {
				return false;
			};
		}

		// custom element to check if parallax in viewport
		var elementInVP = self.options.elementInViewport;
		// get first item from array
		if (elementInVP && (typeof elementInVP === 'undefined' ? 'undefined' : _typeof(elementInVP)) === 'object' && typeof elementInVP.length !== 'undefined') {
			var _elementInVP = elementInVP;

			var _elementInVP2 = _slicedToArray(_elementInVP, 1);

			elementInVP = _elementInVP2[0];
		}
		// check if dom element
		if (!(elementInVP instanceof Element)) {
			elementInVP = null;
		}
		self.options.elementInViewport = elementInVP;

		self.image = {
			src: self.options.imgSrc || null,
			$container: null,
			useImgTag: false,

			// position fixed is needed for the most of browsers because absolute position have glitches
			// on MacOS with smooth scroll there is a huge lags with absolute position - https://github.com/nk-o/jarallax/issues/75
			// on mobile devices better scrolled with absolute position
			position: /iPad|iPhone|iPod|Android/.test(navigator.userAgent) ? 'absolute' : 'fixed'
		};

		if (self.initImg() && self.canInitParallax()) {
			self.init();
		}
	}

	// add styles to element


	_createClass(Jarallax, [{
		key: 'css',
		value: function css(el, styles) {
			if (typeof styles === 'string') {
				return _global.window.getComputedStyle(el).getPropertyValue(styles);
			}

			// add transform property with vendor prefix
			if (styles.transform && supportTransform) {
				styles[supportTransform] = styles.transform;
			}

			Object.keys(styles).forEach(function (key) {
				el.style[key] = styles[key];
			});
			return el;
		}

		// Extend like jQuery.extend

	}, {
		key: 'extend',
		value: function extend(out) {
			var _arguments = arguments;

			out = out || {};
			Object.keys(arguments).forEach(function (i) {
				if (!_arguments[i]) {
					return;
				}
				Object.keys(_arguments[i]).forEach(function (key) {
					out[key] = _arguments[i][key];
				});
			});
			return out;
		}

		// get window size and scroll position. Useful for extensions

	}, {
		key: 'getWindowData',
		value: function getWindowData() {
			return {
				width: wndW,
				height: wndH,
				y: wndY
			};
		}

		// Jarallax functions

	}, {
		key: 'initImg',
		value: function initImg() {
			var self = this;

			// find image element
			var $imgElement = self.options.imgElement;
			if ($imgElement && typeof $imgElement === 'string') {
				$imgElement = self.$item.querySelector($imgElement);
			}
			// check if dom element
			if (!($imgElement instanceof Element)) {
				if (self.options.imgSrc) {
					$imgElement = new Image();
					$imgElement.src = self.options.imgSrc;
				} else {
					$imgElement = null;
				}
			}

			if ($imgElement) {
				if (self.options.keepImg) {
					self.image.$item = $imgElement.cloneNode(true);
				} else {
					self.image.$item = $imgElement;
					self.image.$itemParent = $imgElement.parentNode;
				}
				self.image.useImgTag = true;
			}

			// true if there is img tag
			if (self.image.$item) {
				return true;
			}

			// get image src
			if (self.image.src === null) {
				self.image.src = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';
				self.image.bgImage = self.css(self.$item, 'background-image');
			}
			return !(!self.image.bgImage || self.image.bgImage === 'none');
		}
	}, {
		key: 'canInitParallax',
		value: function canInitParallax() {
			return supportTransform && !this.options.disableParallax();
		}
	}, {
		key: 'init',
		value: function init() {
			var self = this;
			var containerStyles = {
				position: 'absolute',
				top: 0,
				left: 0,
				width: '100%',
				height: '100%',
				overflow: 'hidden',
				pointerEvents: 'none'
			};
			var imageStyles = {};

			if (!self.options.keepImg) {
				// save default user styles
				var curStyle = self.$item.getAttribute('style');
				if (curStyle) {
					self.$item.setAttribute('data-jarallax-original-styles', curStyle);
				}
				if (self.image.useImgTag) {
					var curImgStyle = self.image.$item.getAttribute('style');
					if (curImgStyle) {
						self.image.$item.setAttribute('data-jarallax-original-styles', curImgStyle);
					}
				}
			}

			// set relative position and z-index to the parent
			if (self.css(self.$item, 'position') === 'static') {
				self.css(self.$item, {
					position: 'relative'
				});
			}
			if (self.css(self.$item, 'z-index') === 'auto') {
				self.css(self.$item, {
					zIndex: 0
				});
			}

			// container for parallax image
			self.image.$container = document.createElement('div');
			self.css(self.image.$container, containerStyles);
			self.css(self.image.$container, {
				'z-index': self.options.zIndex
			});

			// fix for IE https://github.com/nk-o/jarallax/issues/110
			if (isIE) {
				self.css(self.image.$container, {
					opacity: 0.9999
				});
			}

			self.image.$container.setAttribute('id', 'jarallax-container-' + self.instanceID);
			self.$item.appendChild(self.image.$container);

			// use img tag
			if (self.image.useImgTag) {
				imageStyles = self.extend({
					'object-fit': self.options.imgSize,
					'object-position': self.options.imgPosition,
					// support for plugin https://github.com/bfred-it/object-fit-images
					'font-family': 'object-fit: ' + self.options.imgSize + '; object-position: ' + self.options.imgPosition + ';',
					'max-width': 'none'
				}, containerStyles, imageStyles);

				// use div with background image
			} else {
				self.image.$item = document.createElement('div');
				if (self.image.src) {
					imageStyles = self.extend({
						'background-position': self.options.imgPosition,
						'background-size': self.options.imgSize,
						'background-repeat': self.options.imgRepeat,
						'background-image': self.image.bgImage || 'url("' + self.image.src + '")'
					}, containerStyles, imageStyles);
				}
			}

			if (self.options.type === 'opacity' || self.options.type === 'scale' || self.options.type === 'scale-opacity' || self.options.speed === 1) {
				self.image.position = 'absolute';
			}

			// check if one of parents have transform style (without this check, scroll transform will be inverted if used parallax with position fixed)
			// discussion - https://github.com/nk-o/jarallax/issues/9
			if (self.image.position === 'fixed') {
				var parentWithTransform = 0;
				var $itemParents = self.$item;
				while ($itemParents !== null && $itemParents !== document && parentWithTransform === 0) {
					var parentTransform = self.css($itemParents, '-webkit-transform') || self.css($itemParents, '-moz-transform') || self.css($itemParents, 'transform');
					if (parentTransform && parentTransform !== 'none') {
						parentWithTransform = 1;
						self.image.position = 'absolute';
					}
					$itemParents = $itemParents.parentNode;
				}
			}

			// add position to parallax block
			imageStyles.position = self.image.position;

			// insert parallax image
			self.css(self.image.$item, imageStyles);
			self.image.$container.appendChild(self.image.$item);

			// set initial position and size
			self.onResize();
			self.onScroll(true);

			// ResizeObserver
			if (self.options.automaticResize && resizeObserver) {
				resizeObserver.observe(self.$item);
			}

			// call onInit event
			if (self.options.onInit) {
				self.options.onInit.call(self);
			}

			// remove default user background
			if (self.css(self.$item, 'background-image') !== 'none') {
				self.css(self.$item, {
					'background-image': 'none'
				});
			}

			self.addToParallaxList();
		}

		// add to parallax instances list

	}, {
		key: 'addToParallaxList',
		value: function addToParallaxList() {
			jarallaxList.push(this);

			if (jarallaxList.length === 1) {
				updateParallax();
			}
		}

		// remove from parallax instances list

	}, {
		key: 'removeFromParallaxList',
		value: function removeFromParallaxList() {
			var self = this;

			jarallaxList.forEach(function (item, key) {
				if (item.instanceID === self.instanceID) {
					jarallaxList.splice(key, 1);
				}
			});
		}
	}, {
		key: 'destroy',
		value: function destroy() {
			var self = this;

			self.removeFromParallaxList();

			// return styles on container as before jarallax init
			var originalStylesTag = self.$item.getAttribute('data-jarallax-original-styles');
			self.$item.removeAttribute('data-jarallax-original-styles');
			// null occurs if there is no style tag before jarallax init
			if (!originalStylesTag) {
				self.$item.removeAttribute('style');
			} else {
				self.$item.setAttribute('style', originalStylesTag);
			}

			if (self.image.useImgTag) {
				// return styles on img tag as before jarallax init
				var originalStylesImgTag = self.image.$item.getAttribute('data-jarallax-original-styles');
				self.image.$item.removeAttribute('data-jarallax-original-styles');
				// null occurs if there is no style tag before jarallax init
				if (!originalStylesImgTag) {
					self.image.$item.removeAttribute('style');
				} else {
					self.image.$item.setAttribute('style', originalStylesTag);
				}

				// move img tag to its default position
				if (self.image.$itemParent) {
					self.image.$itemParent.appendChild(self.image.$item);
				}
			}

			// remove additional dom elements
			if (self.$clipStyles) {
				self.$clipStyles.parentNode.removeChild(self.$clipStyles);
			}
			if (self.image.$container) {
				self.image.$container.parentNode.removeChild(self.image.$container);
			}

			// call onDestroy event
			if (self.options.onDestroy) {
				self.options.onDestroy.call(self);
			}

			// delete jarallax from item
			delete self.$item.jarallax;
		}

		// it will remove some image overlapping
		// overlapping occur due to an image position fixed inside absolute position element

	}, {
		key: 'clipContainer',
		value: function clipContainer() {
			// needed only when background in fixed position
			if (this.image.position !== 'fixed') {
				return;
			}

			var self = this;
			var rect = self.image.$container.getBoundingClientRect();
			var width = rect.width,
				height = rect.height;


			if (!self.$clipStyles) {
				self.$clipStyles = document.createElement('style');
				self.$clipStyles.setAttribute('type', 'text/css');
				self.$clipStyles.setAttribute('id', 'jarallax-clip-' + self.instanceID);
				var head = document.head || document.getElementsByTagName('head')[0];
				head.appendChild(self.$clipStyles);
			}

			var styles = '#jarallax-container-' + self.instanceID + ' {\n           clip: rect(0 ' + width + 'px ' + height + 'px 0);\n           clip: rect(0, ' + width + 'px, ' + height + 'px, 0);\n        }';

			// add clip styles inline (this method need for support IE8 and less browsers)
			if (self.$clipStyles.styleSheet) {
				self.$clipStyles.styleSheet.cssText = styles;
			} else {
				self.$clipStyles.innerHTML = styles;
			}
		}
	}, {
		key: 'coverImage',
		value: function coverImage() {
			var self = this;

			var rect = self.image.$container.getBoundingClientRect();
			var contH = rect.height;
			var speed = self.options.speed;

			var isScroll = self.options.type === 'scroll' || self.options.type === 'scroll-opacity';
			var scrollDist = 0;
			var resultH = contH;
			var resultMT = 0;

			// scroll parallax
			if (isScroll) {
				// scroll distance and height for image
				if (speed < 0) {
					scrollDist = speed * Math.max(contH, wndH);

					if (wndH < contH) {
						scrollDist -= speed * (contH - wndH);
					}
				} else {
					scrollDist = speed * (contH + wndH);
				}

				// size for scroll parallax
				if (speed > 1) {
					resultH = Math.abs(scrollDist - wndH);
				} else if (speed < 0) {
					resultH = scrollDist / speed + Math.abs(scrollDist);
				} else {
					resultH += (wndH - contH) * (1 - speed);
				}

				scrollDist /= 2;
			}

			// store scroll distance
			self.parallaxScrollDistance = scrollDist;

			// vertical center
			if (isScroll) {
				resultMT = (wndH - resultH) / 2;
			} else {
				resultMT = (contH - resultH) / 2;
			}

			// apply result to item
			self.css(self.image.$item, {
				height: resultH + 'px',
				marginTop: resultMT + 'px',
				left: self.image.position === 'fixed' ? rect.left + 'px' : '0',
				width: rect.width + 'px'
			});

			// call onCoverImage event
			if (self.options.onCoverImage) {
				self.options.onCoverImage.call(self);
			}

			// return some useful data. Used in the video cover function
			return {
				image: {
					height: resultH,
					marginTop: resultMT
				},
				container: rect
			};
		}
	}, {
		key: 'isVisible',
		value: function isVisible() {
			return this.isElementInViewport || false;
		}
	}, {
		key: 'onScroll',
		value: function onScroll(force) {
			var self = this;

			var rect = self.$item.getBoundingClientRect();
			var contT = rect.top;
			var contH = rect.height;
			var styles = {};

			// check if in viewport
			var viewportRect = rect;
			if (self.options.elementInViewport) {
				viewportRect = self.options.elementInViewport.getBoundingClientRect();
			}
			self.isElementInViewport = viewportRect.bottom >= 0 && viewportRect.right >= 0 && viewportRect.top <= wndH && viewportRect.left <= wndW;

			// stop calculations if item is not in viewport
			if (force ? false : !self.isElementInViewport) {
				return;
			}

			// calculate parallax helping variables
			var beforeTop = Math.max(0, contT);
			var beforeTopEnd = Math.max(0, contH + contT);
			var afterTop = Math.max(0, -contT);
			var beforeBottom = Math.max(0, contT + contH - wndH);
			var beforeBottomEnd = Math.max(0, contH - (contT + contH - wndH));
			var afterBottom = Math.max(0, -contT + wndH - contH);
			var fromViewportCenter = 1 - 2 * (wndH - contT) / (wndH + contH);

			// calculate on how percent of section is visible
			var visiblePercent = 1;
			if (contH < wndH) {
				visiblePercent = 1 - (afterTop || beforeBottom) / contH;
			} else if (beforeTopEnd <= wndH) {
				visiblePercent = beforeTopEnd / wndH;
			} else if (beforeBottomEnd <= wndH) {
				visiblePercent = beforeBottomEnd / wndH;
			}

			// opacity
			if (self.options.type === 'opacity' || self.options.type === 'scale-opacity' || self.options.type === 'scroll-opacity') {
				styles.transform = 'translate3d(0,0,0)';
				styles.opacity = visiblePercent;
			}

			// scale
			if (self.options.type === 'scale' || self.options.type === 'scale-opacity') {
				var scale = 1;
				if (self.options.speed < 0) {
					scale -= self.options.speed * visiblePercent;
				} else {
					scale += self.options.speed * (1 - visiblePercent);
				}
				styles.transform = 'scale(' + scale + ') translate3d(0,0,0)';
			}

			// scroll
			if (self.options.type === 'scroll' || self.options.type === 'scroll-opacity') {
				var positionY = self.parallaxScrollDistance * fromViewportCenter;

				// fix if parallax block in absolute position
				if (self.image.position === 'absolute') {
					positionY -= contT;
				}

				styles.transform = 'translate3d(0,' + positionY + 'px,0)';
			}

			self.css(self.image.$item, styles);

			// call onScroll event
			if (self.options.onScroll) {
				self.options.onScroll.call(self, {
					section: rect,

					beforeTop: beforeTop,
					beforeTopEnd: beforeTopEnd,
					afterTop: afterTop,
					beforeBottom: beforeBottom,
					beforeBottomEnd: beforeBottomEnd,
					afterBottom: afterBottom,

					visiblePercent: visiblePercent,
					fromViewportCenter: fromViewportCenter
				});
			}
		}
	}, {
		key: 'onResize',
		value: function onResize() {
			this.coverImage();
			this.clipContainer();
		}
	}]);

	return Jarallax;
}();

// global definition


var plugin = function plugin(items) {
	// check for dom element
	// thanks: http://stackoverflow.com/questions/384286/javascript-isdom-how-do-you-check-if-a-javascript-object-is-a-dom-object
	if ((typeof HTMLElement === 'undefined' ? 'undefined' : _typeof(HTMLElement)) === 'object' ? items instanceof HTMLElement : items && (typeof items === 'undefined' ? 'undefined' : _typeof(items)) === 'object' && items !== null && items.nodeType === 1 && typeof items.nodeName === 'string') {
		items = [items];
	}

	var options = arguments[1];
	var args = Array.prototype.slice.call(arguments, 2);
	var len = items.length;
	var k = 0;
	var ret = void 0;

	for (k; k < len; k++) {
		if ((typeof options === 'undefined' ? 'undefined' : _typeof(options)) === 'object' || typeof options === 'undefined') {
			if (!items[k].jarallax) {
				items[k].jarallax = new Jarallax(items[k], options);
			}
		} else if (items[k].jarallax) {
			// eslint-disable-next-line prefer-spread
			ret = items[k].jarallax[options].apply(items[k].jarallax, args);
		}
		if (typeof ret !== 'undefined') {
			return ret;
		}
	}

	return items;
};
plugin.constructor = Jarallax;

exports.default = plugin;
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(5)))

/***/ }),
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var global = __webpack_require__(15);

/**
 * `requestAnimationFrame()`
 */

var request = global.requestAnimationFrame || global.webkitRequestAnimationFrame || global.mozRequestAnimationFrame || fallback;

var prev = +new Date();
function fallback(fn) {
  var curr = +new Date();
  var ms = Math.max(0, 16 - (curr - prev));
  var req = setTimeout(fn, ms);
  return prev = curr, req;
}

/**
 * `cancelAnimationFrame()`
 */

var cancel = global.cancelAnimationFrame || global.webkitCancelAnimationFrame || global.mozCancelAnimationFrame || clearTimeout;

if (Function.prototype.bind) {
  request = request.bind(global);
  cancel = cancel.bind(global);
}

exports = module.exports = request;
exports.cancel = cancel;

/***/ }),
/* 15 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(global) {

var win;

if (typeof window !== "undefined") {
	win = window;
} else if (typeof global !== "undefined") {
	win = global;
} else if (typeof self !== "undefined") {
	win = self;
} else {
	win = {};
}

module.exports = win;
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(5)))

/***/ })
/******/ ]);

// DOM.event.move
//
// 2.0.0
//
// Stephen Band
//
// Triggers 'movestart', 'move' and 'moveend' events after
// mousemoves following a mousedown cross a distance threshold,
// similar to the native 'dragstart', 'drag' and 'dragend' events.
// Move events are throttled to animation frames. Move event objects
// have the properties:
//
// pageX:
// pageY:     Page coordinates of pointer.
// startX:
// startY:    Page coordinates of pointer at movestart.
// distX:
// distY:     Distance the pointer has moved since movestart.
// deltaX:
// deltaY:    Distance the finger has moved since last event.
// velocityX:
// velocityY: Average velocity over last few events.


(function(fn) {
	if (typeof define === 'function' && define.amd) {
        define([], fn);
    } else if ((typeof module !== "undefined" && module !== null) && module.exports) {
        module.exports = fn;
	} else {
		fn();
	}
})(function(){
	var assign = Object.assign || window.jQuery && jQuery.extend;

	// Number of pixels a pressed pointer travels before movestart
	// event is fired.
	var threshold = 8;

	// Shim for requestAnimationFrame, falling back to timer. See:
	// see http://paulirish.com/2011/requestanimationframe-for-smart-animating/
	var requestFrame = (function(){
		return (
			window.requestAnimationFrame ||
			window.webkitRequestAnimationFrame ||
			window.mozRequestAnimationFrame ||
			window.oRequestAnimationFrame ||
			window.msRequestAnimationFrame ||
			function(fn, element){
				return window.setTimeout(function(){
					fn();
				}, 25);
			}
		);
	})();
	
	// Shim for customEvent
	// see https://developer.mozilla.org/en-US/docs/Web/API/CustomEvent/CustomEvent#Polyfill
	(function () {
		if ( typeof window.CustomEvent === "function" ) return false;
		function CustomEvent ( event, params ) {
			params = params || { bubbles: false, cancelable: false, detail: undefined };
			var evt = document.createEvent( 'CustomEvent' );
			evt.initCustomEvent( event, params.bubbles, params.cancelable, params.detail );
			return evt;
		}
		
		CustomEvent.prototype = window.Event.prototype;
		window.CustomEvent = CustomEvent;
	})();

	var ignoreTags = {
			textarea: true,
			input: true,
			select: true,
			button: true
		};

	var mouseevents = {
		move:   'mousemove',
		cancel: 'mouseup dragstart',
		end:    'mouseup'
	};

	var touchevents = {
		move:   'touchmove',
		cancel: 'touchend',
		end:    'touchend'
	};

	var rspaces = /\s+/;


	// DOM Events

	var eventOptions = { bubbles: true, cancelable: true };

	var eventsSymbol = typeof Symbol === "function" ? Symbol('events') : {};

	function createEvent(type) {
		return new CustomEvent(type, eventOptions);
	}

	function getEvents(node) {
		return node[eventsSymbol] || (node[eventsSymbol] = {});
	}

	function on(node, types, fn, data, selector) {
		types = types.split(rspaces);

		var events = getEvents(node);
		var i = types.length;
		var handlers, type;

		function handler(e) { fn(e, data); }

		while (i--) {
			type = types[i];
			handlers = events[type] || (events[type] = []);
			handlers.push([fn, handler]);
			node.addEventListener(type, handler);
		}
	}

	function off(node, types, fn, selector) {
		types = types.split(rspaces);

		var events = getEvents(node);
		var i = types.length;
		var type, handlers, k;

		if (!events) { return; }

		while (i--) {
			type = types[i];
			handlers = events[type];
			if (!handlers) { continue; }
			k = handlers.length;
			while (k--) {
				if (handlers[k][0] === fn) {
					node.removeEventListener(type, handlers[k][1]);
					handlers.splice(k, 1);
				}
			}
		}
	}

	function trigger(node, type, properties) {
		// Don't cache events. It prevents you from triggering an event of a
		// given type from inside the handler of another event of that type.
		var event = createEvent(type);
		if (properties) { assign(event, properties); }
		node.dispatchEvent(event);
	}


	// Constructors

	function Timer(fn){
		var callback = fn,
		    active = false,
		    running = false;

		function trigger(time) {
			if (active){
				callback();
				requestFrame(trigger);
				running = true;
				active = false;
			}
			else {
				running = false;
			}
		}

		this.kick = function(fn) {
			active = true;
			if (!running) { trigger(); }
		};

		this.end = function(fn) {
			var cb = callback;

			if (!fn) { return; }

			// If the timer is not running, simply call the end callback.
			if (!running) {
				fn();
			}
			// If the timer is running, and has been kicked lately, then
			// queue up the current callback and the end callback, otherwise
			// just the end callback.
			else {
				callback = active ?
					function(){ cb(); fn(); } :
					fn ;

				active = true;
			}
		};
	}


	// Functions

	function noop() {}

	function preventDefault(e) {
		e.preventDefault();
	}

	function isIgnoreTag(e) {
		return !!ignoreTags[e.target.tagName.toLowerCase()];
	}

	function isPrimaryButton(e) {
		// Ignore mousedowns on any button other than the left (or primary)
		// mouse button, or when a modifier key is pressed.
		return (e.which === 1 && !e.ctrlKey && !e.altKey);
	}

	function identifiedTouch(touchList, id) {
		var i, l;

		if (touchList.identifiedTouch) {
			return touchList.identifiedTouch(id);
		}

		// touchList.identifiedTouch() does not exist in
		// webkit yet… we must do the search ourselves...

		i = -1;
		l = touchList.length;

		while (++i < l) {
			if (touchList[i].identifier === id) {
				return touchList[i];
			}
		}
	}

	function changedTouch(e, data) {
		var touch = identifiedTouch(e.changedTouches, data.identifier);

		// This isn't the touch you're looking for.
		if (!touch) { return; }

		// Chrome Android (at least) includes touches that have not
		// changed in e.changedTouches. That's a bit annoying. Check
		// that this touch has changed.
		if (touch.pageX === data.pageX && touch.pageY === data.pageY) { return; }

		return touch;
	}


	// Handlers that decide when the first movestart is triggered

	function mousedown(e){
		// Ignore non-primary buttons
		if (!isPrimaryButton(e)) { return; }

		// Ignore form and interactive elements
		if (isIgnoreTag(e)) { return; }

		on(document, mouseevents.move, mousemove, e);
		on(document, mouseevents.cancel, mouseend, e);
	}

	function mousemove(e, data){
		checkThreshold(e, data, e, removeMouse);
	}

	function mouseend(e, data) {
		removeMouse();
	}

	function removeMouse() {
		off(document, mouseevents.move, mousemove);
		off(document, mouseevents.cancel, mouseend);
	}

	function touchstart(e) {
		// Don't get in the way of interaction with form elements
		if (ignoreTags[e.target.tagName.toLowerCase()]) { return; }

		var touch = e.changedTouches[0];

		// iOS live updates the touch objects whereas Android gives us copies.
		// That means we can't trust the touchstart object to stay the same,
		// so we must copy the data. This object acts as a template for
		// movestart, move and moveend event objects.
		var data = {
			target:     touch.target,
			pageX:      touch.pageX,
			pageY:      touch.pageY,
			identifier: touch.identifier,

			// The only way to make handlers individually unbindable is by
			// making them unique.
			touchmove:  function(e, data) { touchmove(e, data); },
			touchend:   function(e, data) { touchend(e, data); }
		};

		on(document, touchevents.move, data.touchmove, data);
		on(document, touchevents.cancel, data.touchend, data);
	}

	function touchmove(e, data) {
		var touch = changedTouch(e, data);
		if (!touch) { return; }
		checkThreshold(e, data, touch, removeTouch);
	}

	function touchend(e, data) {
		var touch = identifiedTouch(e.changedTouches, data.identifier);
		if (!touch) { return; }
		removeTouch(data);
	}

	function removeTouch(data) {
		off(document, touchevents.move, data.touchmove);
		off(document, touchevents.cancel, data.touchend);
	}

	function checkThreshold(e, data, touch, fn) {
		var distX = touch.pageX - data.pageX;
		var distY = touch.pageY - data.pageY;

		// Do nothing if the threshold has not been crossed.
		if ((distX * distX) + (distY * distY) < (threshold * threshold)) { return; }

		triggerStart(e, data, touch, distX, distY, fn);
	}

	function triggerStart(e, data, touch, distX, distY, fn) {
		var touches = e.targetTouches;
		var time = e.timeStamp - data.timeStamp;

		// Create a movestart object with some special properties that
		// are passed only to the movestart handlers.
		var template = {
			altKey:     e.altKey,
			ctrlKey:    e.ctrlKey,
			shiftKey:   e.shiftKey,
			startX:     data.pageX,
			startY:     data.pageY,
			distX:      distX,
			distY:      distY,
			deltaX:     distX,
			deltaY:     distY,
			pageX:      touch.pageX,
			pageY:      touch.pageY,
			velocityX:  distX / time,
			velocityY:  distY / time,
			identifier: data.identifier,
			targetTouches: touches,
			finger: touches ? touches.length : 1,
			enableMove: function() {
				this.moveEnabled = true;
				this.enableMove = noop;
				e.preventDefault();
			}
		};

		// Trigger the movestart event.
		trigger(data.target, 'movestart', template);

		// Unbind handlers that tracked the touch or mouse up till now.
		fn(data);
	}


	// Handlers that control what happens following a movestart

	function activeMousemove(e, data) {
		var timer  = data.timer;

		data.touch = e;
		data.timeStamp = e.timeStamp;
		timer.kick();
	}

	function activeMouseend(e, data) {
		var target = data.target;
		var event  = data.event;
		var timer  = data.timer;

		removeActiveMouse();

		endEvent(target, event, timer, function() {
			// Unbind the click suppressor, waiting until after mouseup
			// has been handled.
			setTimeout(function(){
				off(target, 'click', preventDefault);
			}, 0);
		});
	}

	function removeActiveMouse() {
		off(document, mouseevents.move, activeMousemove);
		off(document, mouseevents.end, activeMouseend);
	}

	function activeTouchmove(e, data) {
		var event = data.event;
		var timer = data.timer;
		var touch = changedTouch(e, event);

		if (!touch) { return; }

		// Stop the interface from gesturing
		e.preventDefault();

		event.targetTouches = e.targetTouches;
		data.touch = touch;
		data.timeStamp = e.timeStamp;

		timer.kick();
	}

	function activeTouchend(e, data) {
		var target = data.target;
		var event  = data.event;
		var timer  = data.timer;
		var touch  = identifiedTouch(e.changedTouches, event.identifier);

		// This isn't the touch you're looking for.
		if (!touch) { return; }

		removeActiveTouch(data);
		endEvent(target, event, timer);
	}

	function removeActiveTouch(data) {
		off(document, touchevents.move, data.activeTouchmove);
		off(document, touchevents.end, data.activeTouchend);
	}


	// Logic for triggering move and moveend events

	function updateEvent(event, touch, timeStamp) {
		var time = timeStamp - event.timeStamp;

		event.distX =  touch.pageX - event.startX;
		event.distY =  touch.pageY - event.startY;
		event.deltaX = touch.pageX - event.pageX;
		event.deltaY = touch.pageY - event.pageY;

		// Average the velocity of the last few events using a decay
		// curve to even out spurious jumps in values.
		event.velocityX = 0.3 * event.velocityX + 0.7 * event.deltaX / time;
		event.velocityY = 0.3 * event.velocityY + 0.7 * event.deltaY / time;
		event.pageX =  touch.pageX;
		event.pageY =  touch.pageY;
	}

	function endEvent(target, event, timer, fn) {
		timer.end(function(){
			trigger(target, 'moveend', event);
			return fn && fn();
		});
	}


	// Set up the DOM

	function movestart(e) {
		if (e.defaultPrevented) { return; }
		if (!e.moveEnabled) { return; }

		var event = {
			startX:        e.startX,
			startY:        e.startY,
			pageX:         e.pageX,
			pageY:         e.pageY,
			distX:         e.distX,
			distY:         e.distY,
			deltaX:        e.deltaX,
			deltaY:        e.deltaY,
			velocityX:     e.velocityX,
			velocityY:     e.velocityY,
			identifier:    e.identifier,
			targetTouches: e.targetTouches,
			finger:        e.finger
		};

		var data = {
			target:    e.target,
			event:     event,
			timer:     new Timer(update),
			touch:     undefined,
			timeStamp: e.timeStamp
		};

		function update(time) {
			updateEvent(event, data.touch, data.timeStamp);
			trigger(data.target, 'move', event);
		}

		if (e.identifier === undefined) {
			// We're dealing with a mouse event.
			// Stop clicks from propagating during a move
			on(e.target, 'click', preventDefault);
			on(document, mouseevents.move, activeMousemove, data);
			on(document, mouseevents.end, activeMouseend, data);
		}
		else {
			// In order to unbind correct handlers they have to be unique
			data.activeTouchmove = function(e, data) { activeTouchmove(e, data); };
			data.activeTouchend = function(e, data) { activeTouchend(e, data); };

			// We're dealing with a touch.
			on(document, touchevents.move, data.activeTouchmove, data);
			on(document, touchevents.end, data.activeTouchend, data);
		}
	}

	on(document, 'mousedown', mousedown);
	on(document, 'touchstart', touchstart);
	on(document, 'movestart', movestart);


	// jQuery special events
	//
	// jQuery event objects are copies of DOM event objects. They need
	// a little help copying the move properties across.

	if (!window.jQuery) { return; }

	var properties = ("startX startY pageX pageY distX distY deltaX deltaY velocityX velocityY").split(' ');

	function enableMove1(e) { e.enableMove(); }
	function enableMove2(e) { e.enableMove(); }
	function enableMove3(e) { e.enableMove(); }

	function add(handleObj) {
		var handler = handleObj.handler;

		handleObj.handler = function(e) {
			// Copy move properties across from originalEvent
			var i = properties.length;
			var property;

			while(i--) {
				property = properties[i];
				e[property] = e.originalEvent[property];
			}

			handler.apply(this, arguments);
		};
	}

	jQuery.event.special.movestart = {
		setup: function() {
			// Movestart must be enabled to allow other move events
			on(this, 'movestart', enableMove1);

			// Do listen to DOM events
			return false;
		},

		teardown: function() {
			off(this, 'movestart', enableMove1);
			return false;
		},

		add: add
	};

	jQuery.event.special.move = {
		setup: function() {
			on(this, 'movestart', enableMove2);
			return false;
		},

		teardown: function() {
			off(this, 'movestart', enableMove2);
			return false;
		},

		add: add
	};

	jQuery.event.special.moveend = {
		setup: function() {
			on(this, 'movestart', enableMove3);
			return false;
		},

		teardown: function() {
			off(this, 'movestart', enableMove3);
			return false;
		},

		add: add
	};
});

(function($){

  $.fn.twentytwenty = function(options) {
    var options = $.extend({
      default_offset_pct: 0.5,
      orientation: 'horizontal',
      before_label: 'Before',
      after_label: 'After',
      no_overlay: false,
      move_slider_on_hover: false,
      move_with_handle_only: true,
      click_to_move: false
    }, options);

    return this.each(function() {

      var sliderPct = options.default_offset_pct;
      var container = $(this);
      var sliderOrientation = options.orientation;
      var beforeDirection = (sliderOrientation === 'vertical') ? 'down' : 'left';
      var afterDirection = (sliderOrientation === 'vertical') ? 'up' : 'right';


      container.wrap("<div class='twentytwenty-wrapper twentytwenty-" + sliderOrientation + "'></div>");
      if(!options.no_overlay) {
        container.append("<div class='twentytwenty-overlay'></div>");
        var overlay = container.find(".twentytwenty-overlay");
        overlay.append("<div class='twentytwenty-before-label' data-content='"+options.before_label+"'></div>");
        overlay.append("<div class='twentytwenty-after-label' data-content='"+options.after_label+"'></div>");
      }
      var beforeImg = container.find("img:first");
      var afterImg = container.find("img:last");
      container.append("<div class='twentytwenty-handle'></div>");
      var slider = container.find(".twentytwenty-handle");
      slider.append("<span class='twentytwenty-" + beforeDirection + "-arrow'></span>");
      slider.append("<span class='twentytwenty-" + afterDirection + "-arrow'></span>");
      container.addClass("twentytwenty-container");
      beforeImg.addClass("twentytwenty-before");
      afterImg.addClass("twentytwenty-after");
      
      var calcOffset = function(dimensionPct) {
        var w = beforeImg.width();
        var h = beforeImg.height();
        return {
          w: w+"px",
          h: h+"px",
          cw: (dimensionPct*w)+"px",
          ch: (dimensionPct*h)+"px"
        };
      };

      var adjustContainer = function(offset) {
      	if (sliderOrientation === 'vertical') {
          beforeImg.css("clip", "rect(0,"+offset.w+","+offset.ch+",0)");
          afterImg.css("clip", "rect("+offset.ch+","+offset.w+","+offset.h+",0)");
      	}
      	else {
          beforeImg.css("clip", "rect(0,"+offset.cw+","+offset.h+",0)");
          afterImg.css("clip", "rect(0,"+offset.w+","+offset.h+","+offset.cw+")");
    	}
        container.css("height", offset.h);
      };

      var adjustSlider = function(pct) {
        var offset = calcOffset(pct);
        slider.css((sliderOrientation==="vertical") ? "top" : "left", (sliderOrientation==="vertical") ? offset.ch : offset.cw);
        adjustContainer(offset);
      };

      // Return the number specified or the min/max number if it outside the range given.
      var minMaxNumber = function(num, min, max) {
        return Math.max(min, Math.min(max, num));
      };

      // Calculate the slider percentage based on the position.
      var getSliderPercentage = function(positionX, positionY) {
        var sliderPercentage = (sliderOrientation === 'vertical') ?
          (positionY-offsetY)/imgHeight :
          (positionX-offsetX)/imgWidth;

        return minMaxNumber(sliderPercentage, 0, 1);
      };


      $(window).on("resize.twentytwenty", function(e) {
        adjustSlider(sliderPct);
      });

      var offsetX = 0;
      var offsetY = 0;
      var imgWidth = 0;
      var imgHeight = 0;
      var onMoveStart = function(e) {
        if (((e.distX > e.distY && e.distX < -e.distY) || (e.distX < e.distY && e.distX > -e.distY)) && sliderOrientation !== 'vertical') {
          e.preventDefault();
        }
        else if (((e.distX < e.distY && e.distX < -e.distY) || (e.distX > e.distY && e.distX > -e.distY)) && sliderOrientation === 'vertical') {
          e.preventDefault();
        }
        container.addClass("active");
        offsetX = container.offset().left;
        offsetY = container.offset().top;
        imgWidth = beforeImg.width(); 
        imgHeight = beforeImg.height();          
      };
      var onMove = function(e) {
        if (container.hasClass("active")) {
          sliderPct = getSliderPercentage(e.pageX, e.pageY);
          adjustSlider(sliderPct);
        }
      };
      var onMoveEnd = function() {
          container.removeClass("active");
      };

      var moveTarget = options.move_with_handle_only ? slider : container;
      moveTarget.on("movestart",onMoveStart);
      moveTarget.on("move",onMove);
      moveTarget.on("moveend",onMoveEnd);

      if (options.move_slider_on_hover) {
        container.on("mouseenter", onMoveStart);
        container.on("mousemove", onMove);
        container.on("mouseleave", onMoveEnd);
      }

      slider.on("touchmove", function(e) {
        e.preventDefault();
      });

      container.find("img").on("mousedown", function(event) {
        event.preventDefault();
      });

      if (options.click_to_move) {
        container.on('click', function(e) {
          offsetX = container.offset().left;
          offsetY = container.offset().top;
          imgWidth = beforeImg.width();
          imgHeight = beforeImg.height();

          sliderPct = getSliderPercentage(e.pageX, e.pageY);
          adjustSlider(sliderPct);
        });
      }

      $(window).trigger("resize.twentytwenty");
    });
  };

})(jQuery);

/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
	var isIe = /(trident|msie)/i.test( navigator.userAgent );

	if ( isIe && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
} )();

jQuery(function($){

	// Smooth Scroll
	function smooth_scroll( hash ) {
		var target = null;

		try {
			target = $( hash );
		} catch( error ) {
			// Perhaps worth adding some error logging here in the future.
			return false;
		}

		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
			var top_offset = 0;
			if ( $('.site-header').css('position') == 'fixed' ) {
				top_offset = $('.site-header').height();
			}
			if( $('body').hasClass('admin-bar') ) {
				top_offset = top_offset + $('#wpadminbar').height();
			}
			 $('html,body').animate({
				 scrollTop: target.offset().top - top_offset
			}, 1000);
			return false;
		}
	}

	// -- Smooth scroll on pageload
	if( window.location.hash ) {
		smooth_scroll( window.location.hash );
	}
	// -- Smooth scroll on click
	$('a[href*="#"]:not([href="#"]):not(.no-scroll)').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
			smooth_scroll( this.hash );
		}
	});

});