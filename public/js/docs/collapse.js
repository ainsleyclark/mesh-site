function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/******/
(function (modules) {
  // webpackBootstrap

  /******/
  // The module cache

  /******/
  var installedModules = {};
  /******/

  /******/
  // The require function

  /******/

  function __webpack_require__(moduleId) {
    /******/

    /******/
    // Check if module is in cache

    /******/
    if (installedModules[moduleId]) {
      /******/
      return installedModules[moduleId].exports;
      /******/
    }
    /******/
    // Create a new module (and put it into the cache)

    /******/


    var module = installedModules[moduleId] = {
      /******/
      i: moduleId,

      /******/
      l: false,

      /******/
      exports: {}
      /******/

    };
    /******/

    /******/
    // Execute the module function

    /******/

    modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
    /******/

    /******/
    // Flag the module as loaded

    /******/

    module.l = true;
    /******/

    /******/
    // Return the exports of the module

    /******/

    return module.exports;
    /******/
  }
  /******/

  /******/

  /******/
  // expose the modules object (__webpack_modules__)

  /******/


  __webpack_require__.m = modules;
  /******/

  /******/
  // expose the module cache

  /******/

  __webpack_require__.c = installedModules;
  /******/

  /******/
  // define getter function for harmony exports

  /******/

  __webpack_require__.d = function (exports, name, getter) {
    /******/
    if (!__webpack_require__.o(exports, name)) {
      /******/
      Object.defineProperty(exports, name, {
        enumerable: true,
        get: getter
      });
      /******/
    }
    /******/

  };
  /******/

  /******/
  // define __esModule on exports

  /******/


  __webpack_require__.r = function (exports) {
    /******/
    if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
      /******/
      Object.defineProperty(exports, Symbol.toStringTag, {
        value: 'Module'
      });
      /******/
    }
    /******/


    Object.defineProperty(exports, '__esModule', {
      value: true
    });
    /******/
  };
  /******/

  /******/
  // create a fake namespace object

  /******/
  // mode & 1: value is a module id, require it

  /******/
  // mode & 2: merge all properties of value into the ns

  /******/
  // mode & 4: return value when already ns object

  /******/
  // mode & 8|1: behave like require

  /******/


  __webpack_require__.t = function (value, mode) {
    /******/
    if (mode & 1) value = __webpack_require__(value);
    /******/

    if (mode & 8) return value;
    /******/

    if (mode & 4 && _typeof(value) === 'object' && value && value.__esModule) return value;
    /******/

    var ns = Object.create(null);
    /******/

    __webpack_require__.r(ns);
    /******/


    Object.defineProperty(ns, 'default', {
      enumerable: true,
      value: value
    });
    /******/

    if (mode & 2 && typeof value != 'string') for (var key in value) {
      __webpack_require__.d(ns, key, function (key) {
        return value[key];
      }.bind(null, key));
    }
    /******/

    return ns;
    /******/
  };
  /******/

  /******/
  // getDefaultExport function for compatibility with non-harmony modules

  /******/


  __webpack_require__.n = function (module) {
    /******/
    var getter = module && module.__esModule ?
    /******/
    function getDefault() {
      return module['default'];
    } :
    /******/
    function getModuleExports() {
      return module;
    };
    /******/

    __webpack_require__.d(getter, 'a', getter);
    /******/


    return getter;
    /******/
  };
  /******/

  /******/
  // Object.prototype.hasOwnProperty.call

  /******/


  __webpack_require__.o = function (object, property) {
    return Object.prototype.hasOwnProperty.call(object, property);
  };
  /******/

  /******/
  // __webpack_public_path__

  /******/


  __webpack_require__.p = "/";
  /******/

  /******/

  /******/
  // Load entry module and return exports

  /******/

  return __webpack_require__(__webpack_require__.s = 4);
  /******/
})(
/************************************************************************/

/******/
{
  /***/
  "./resources/js/docs/collapse.js":
  /*!***************************************!*\
    !*** ./resources/js/docs/collapse.js ***!
    \***************************************/

  /*! no static exports found */

  /***/
  function resourcesJsDocsCollapseJs(module, exports) {
    function Collapse(options) {
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
    }

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
    /***/
  },

  /***/
  4:
  /*!*********************************************!*\
    !*** multi ./resources/js/docs/collapse.js ***!
    \*********************************************/

  /*! no static exports found */

  /***/
  function _(module, exports, __webpack_require__) {
    module.exports = __webpack_require__(
    /*! /Users/ainsley/Desktop/Web/mesh-site/resources/js/docs/collapse.js */
    "./resources/js/docs/collapse.js");
    /***/
  }
  /******/

});
