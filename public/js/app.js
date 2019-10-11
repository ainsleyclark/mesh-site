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

/***/ "./resources/js/docs.js":
/*!******************************!*\
  !*** ./resources/js/docs.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

//Get page 
var main = document.querySelector('main').classList;
document.addEventListener('DOMContentLoaded', function () {
  //Alerts
  if (main == 'page-alert') {
    document.querySelectorAll('.js-alert .alert .close').forEach(function (close) {
      close.addEventListener('click', function () {
        close.parentNode.remove();
      });
    });
  } //Badges


  if (main == 'page-badges') {
    document.querySelectorAll('.badge-close .badge-delete').forEach(function (close) {
      close.addEventListener('click', function () {
        close.parentNode.remove();
      });
    });
  } //Turn clearfix text on & |/off


  if (main == 'page-float') {
    document.querySelector('#clearfixBtn').addEventListener('click', function () {
      this.innerHTML = this.innerHTML.indexOf('off') ? "Turn clearfix on" : "Turn clearfix off";
      document.querySelector('#clearfixDemo').classList.toggle('clearfix');
    });
  } //Grid demos


  if (main == 'page-grid') {
    //Switch to fullwidth
    document.querySelector('#btnBrowser').addEventListener('click', function () {
      this.innerHTML = this.innerHTML.indexOf('full') ? "Switch to container" : "Switch to container-fullwidth";
      document.querySelector('#fullwidth').classList.toggle('d-none');
      document.querySelector('#container').classList.toggle('d-none');
    }); //Turn gaps on & off

    document.querySelector('#btnNoGaps').addEventListener('click', function () {
      this.innerHTML = this.innerHTML.indexOf('off') ? "Turn gaps on" : "Turn gaps off";
      document.querySelector('.column-demo .row').classList.toggle('no-gaps');
    });
  } //Turn responsive text on & off


  if (main == 'page-text') {
    document.querySelector('#responsiveTextBtn').addEventListener('click', function () {
      this.innerHTML = this.innerHTML.indexOf('off') ? "Turn responsive text on" : "Turn responsive text off";
      var responsiveText = document.querySelector('#responsiveText');
      responsiveText.classList.toggle('t-responsive');
      responsiveText.classList.toggle('font-size-2');
    });
  } //Invisible - Display none


  if (main == 'page-visibility') {
    document.querySelector('#visibleBtn').addEventListener('click', function () {
      var invisibleDemo = document.querySelector('#invisibleDemo');
      var invisibleCode = document.querySelector('#invisibleCode');
      invisibleDemo.classList.toggle('invisible');
      invisibleDemo.classList.toggle('d-none');

      if (this.innerHTML.indexOf('none')) {
        invisibleCode.innerHTML = invisibleCode.innerHTML.replace('invisible', 'd-none');
        this.innerHTML = "Switch to invisible";
      } else {
        invisibleCode.innerHTML = invisibleCode.innerHTML.replace('d-none', 'invisible');
        this.innerHTML = "Switch to display none";
      }
    });
  } //Toast


  if (main == 'page-toast') {
    //Main toast function
    var meshToast = function meshToast(text) {
      var opts = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
      var defaults = {
        classes: "bg-primary",
        container: document.getElementsByClassName("toast")[0]
      };
      var options = Object.assign(defaults, opts);

      if (!document.querySelector('.toast')) {
        var toast = document.createElement('div');
        toast.setAttribute('class', "toast");
        console.log(toast);
        document.body.appendChild(toast);
      }

      var toastContainer = options.container;
      var toastBody = document.createElement("div");
      var toastText = document.createElement("span");
      toastBody.setAttribute('class', "toast-body " + options.classes);
      toastText.innerHTML = text;
      toastBody.appendChild(toastText);
      toastContainer.appendChild(toastBody);
      toastBody.addEventListener("animationend", function (e) {
        toastBody.remove(1);
      });
      toastBody.classList.add("toast-show");

      if (options.displayTime) {
        toastBody.style.animationDuration = options.displayTime;
      }
    }; //Toast demos


    document.querySelector('#makeToast').addEventListener('click', function () {
      meshToast('Mmmmmmmmmmmm Toast', {
        displayTime: '5s' // container:

      });
    });
  } //Collapse


  if (main == 'page-collapse') {
    var Collapse = function Collapse(options) {
      var defaultOpt = {
        parent: document.body,
        accordion: false,
        outer: '.collapse-js',
        header: '.collapse-header',
        inner: '.collapse-content'
      };
      this.options = Object.assign(defaultOpt, options);
      this.elements = {};
      this.options.parent._collapse = this;
      this.init();
    };

    Collapse.prototype.init = function () {
      var opt = this.options,
          ele = this.elements,
          self = this;
      var collapses = ele.collapses = opt.parent.querySelectorAll(opt.outer);
      collapses.forEach(function (collapse) {
        var headers = collapse.querySelectorAll(opt.header);
        headers.forEach(function (header) {
          header.addEventListener('click', function () {
            if (opt.accordion) {
              self.accordion(headers, header);
            } else {
              self.toggle(header.parentNode, false);
            }
          });
        });
      });
    };

    Collapse.prototype.accordion = function (header, current) {
      var s = this;
      header.forEach(function (el) {
        s.toggle(el.parentNode, el !== current);
      });
    };

    Collapse.prototype.toggle = function (item, closeForce) {
      var height = 0;
      var inner = item.querySelector(this.options.inner);

      if (!item.classList.contains('active') && !closeForce) {
        height = this.calcHeight(inner);
        item.classList.add('active');
      } else {
        item.classList.remove('active');
      }

      inner.style.maxHeight = height + 'px';
    };

    Collapse.prototype.calcHeight = function (inner) {
      var children = inner.children;
      var height = 0;

      for (var i = 0; i < children.length; i++) {
        height += children[i].clientHeight;
      }

      return height;
    };

    var collapse = new Collapse({
      parent: document.body.querySelector('.expand')
    });
    var accordion = new Collapse({
      accordion: true,
      parent: document.body.querySelector('.accordion')
    });
  }
});

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
/*!*******************************************************************************************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/js/docs.js ./resources/sass/app.scss ./mesh-src/src/mesh-grid.scss ./mesh-src/src/mesh.scss ***!
  \*******************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/Ainsley/Desktop/Web/mesh-site/resources/js/app.js */"./resources/js/app.js");
__webpack_require__(/*! /Users/Ainsley/Desktop/Web/mesh-site/resources/js/docs.js */"./resources/js/docs.js");
__webpack_require__(/*! /Users/Ainsley/Desktop/Web/mesh-site/resources/sass/app.scss */"./resources/sass/app.scss");
__webpack_require__(/*! /Users/Ainsley/Desktop/Web/mesh-site/mesh-src/src/mesh-grid.scss */"./mesh-src/src/mesh-grid.scss");
module.exports = __webpack_require__(/*! /Users/Ainsley/Desktop/Web/mesh-site/mesh-src/src/mesh.scss */"./mesh-src/src/mesh.scss");


/***/ })

/******/ });