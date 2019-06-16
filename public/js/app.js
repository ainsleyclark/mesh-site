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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./mesh-src/src/mesh-grid.scss":
/*!*************************************!*\
  !*** ./mesh-src/src/mesh-grid.scss ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./mesh-src/src/mesh.scss":
/*!********************************!*\
  !*** ./mesh-src/src/mesh.scss ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

/***********************************************************************************************/

/* Add Active to SmallNav on Scroll */

/***********************************************************************************************/
var scrollSection = document.querySelectorAll('.section-scroll');
var contentsItems = document.querySelectorAll('.contents-item');
window.addEventListener('scroll', function () {
  var scrollPosY = window.pageYOffset | document.body.scrollTop;
  reset();

  if (scrollPosY > scrollSection[0].offsetTop + 80) {
    scrollPosY += innerHeight / 2;
    var elements = [];

    for (var i = 0; i < scrollSection.length; i++) {
      var sectionHeight = scrollSection[i].offsetHeight;
      var sectionOffset = scrollSection[i].offsetTop - 43;
      var is = scrollPosY >= sectionOffset + sectionHeight || scrollPosY < sectionOffset;

      if (!is) {
        contentsItems[i]._i = i;
        elements.push(contentsItems[i]);
      }
    }

    findActive(elements, scrollPosY);
  } else {
    contentsItems[0].classList.add('active');
  }
}, {
  passive: true
});

function findActive(elements, scrollPosY) {
  if (elements.length > 0) {
    var activeEl = {
      d: Infinity,
      el: null
    };
    elements.forEach(function (el) {
      var sec = scrollSection[el._i];
      var d = scrollPosY - sec.offsetHeight;

      if (d < activeEl.d) {
        activeEl.d = d;
        activeEl.el = el;
      }
    });
    activeEl.el.classList.add('active');
  }
}

function reset() {
  contentsItems.forEach(function (el) {
    el.classList.remove('active');
  });
}
/****************************/

/* Delegated Event Listener */

/****************************/


Node.prototype.addDelegatedEventListener = function (eventType, aim, callback) {
  var events = eventType.split(',');
  events.forEach(function (value) {
    this.addEventListener(value.trim(), function (event) {
      if (event.target.matches) {
        if (event.target.matches(aim + ', ' + aim + ' *')) {
          callback(event, event.target.closest(aim));
        }
      }
    }, false);
  });
};
/***********************************************************************************************/

/* Copy to Clipboard */

/***********************************************************************************************/
//Copy Click


document.body.addDelegatedEventListener('click', '.copy-to-clipboard', getCopyData);

function getCopyData(e, el) {
  //Get the HTML of the codes sibling
  var sibling = el.parentNode.firstChild.outerHTML;
  sibling = strip(sibling);
  var fullLink = document.createElement('textarea');
  document.body.appendChild(fullLink);
  fullLink.value = sibling;
  copyToClipboard(fullLink);
  changeToTick(el);
  fullLink.remove();
} //Strip HTML tags from a given string


function strip(html) {
  var doc = new DOMParser().parseFromString(html, 'text/html');
  return doc.body.textContent || '';
} //Copy to Clipboard


function copyToClipboard(el) {
  el.select();
  document.execCommand('copy');
} //Change Clipboard Icon to Tick


var changeToTick = function changeToTick(el) {
  el.style.display = 'none';
  el.nextElementSibling.style.display = 'block';
};
/***********************************************************************************************/

/* Scroll to Anchor */

/***********************************************************************************************/


document.body.addDelegatedEventListener('click', '.smallnav a[href^="#"]', function (e, el) {
  e.preventDefault();
  var headerOffset = -400;
  var section = document.querySelector(el.getAttribute('href'));
  var elementPosition = section.offsetTop;
  var offsetPosition = elementPosition - headerOffset;
  window.scrollTo({
    top: offsetPosition - (innerHeight / 2 - 200),
    behavior: 'smooth'
  });
});
/***********************************************************************************************/

/* Highlight Code */

/***********************************************************************************************/

hljs.initHighlightingOnLoad();

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!********************************************************************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ./mesh-src/src/mesh-grid.scss ./mesh-src/src/mesh.scss ***!
  \********************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/ainsley/Desktop/Web/mesh-site/resources/js/app.js */"./resources/js/app.js");
__webpack_require__(/*! /Users/ainsley/Desktop/Web/mesh-site/resources/sass/app.scss */"./resources/sass/app.scss");
__webpack_require__(/*! /Users/ainsley/Desktop/Web/mesh-site/mesh-src/src/mesh-grid.scss */"./mesh-src/src/mesh-grid.scss");
module.exports = __webpack_require__(/*! /Users/ainsley/Desktop/Web/mesh-site/mesh-src/src/mesh.scss */"./mesh-src/src/mesh.scss");


/***/ })

/******/ });