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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/assets/js/burger.js":
/*!*********************************!*\
  !*** ./src/assets/js/burger.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("const burger = document.getElementById('burger');\r\nconst sidebar = document.getElementById('sidebar');\r\nconst page = document.getElementById('page');\r\nconst body = document.body;\r\nburger.addEventListener('click', event => {\r\n\r\n    if (body.classList.contains('show_sidebar')) {\r\n        closeSidebar();\r\n    } else {\r\n        showSidebar();\r\n    }\r\n});\r\n\r\nfunction showSidebar() {\r\n    let mask = document.createElement('div');\r\n    mask.classList.add('page_mask');\r\n    mask.addEventListener('click', closeSidebar);\r\n    page.appendChild(mask);\r\n\r\n    body.classList.add('show_sidebar');\r\n}\r\n\r\nfunction closeSidebar() {\r\n    body.classList.remove('show_sidebar');\r\n    document.querySelector('.page_mask').remove();\r\n}\n\n//# sourceURL=webpack:///./src/assets/js/burger.js?");

/***/ }),

/***/ "./src/assets/js/modal.js":
/*!********************************!*\
  !*** ./src/assets/js/modal.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("const body = document.body;\r\n\r\nconst modal = document.querySelectorAll('.modal');\r\nconst modalBtn = document.querySelectorAll('[data-modal]');\r\nconst modalClose = document.querySelectorAll('.modal_close');\r\n\r\nmodalBtn.forEach(item => {\r\n    item.addEventListener('click', event => {\r\n        let $this = event.currentTarget;\r\n        let modelId = $this.getAttribute('data-modal');\r\n        let modal = document.getElementById(modelId);\r\n        let modalContent = modal.querySelector('.modal_content');\r\n        modalContent.addEventListener('click', event => {\r\n            event.stopPropagation();\r\n        })\r\n        modal.classList.add(\"show\");\r\n        body.classList.add(\"no-scroll\");\r\n\r\n        setTimeout(function () {\r\n            modalContent.style.transform = 'none'\r\n            modalContent.style.opacity = '1'\r\n        }, 1);\r\n\r\n    });\r\n});\r\nmodalClose.forEach(item => {\r\n    item.addEventListener('click', event => {\r\n        let currentModal = event.target.closest('.modal');\r\n        closeModal(currentModal)\r\n    });\r\n});\r\nmodal.forEach(item => {\r\n    item.addEventListener('click', event => {\r\n        let currentModal = event.target.closest('.modal');\r\n        closeModal(currentModal)\r\n\r\n    });\r\n});\r\n\r\nfunction closeModal(currentModal) {\r\n\r\n  \r\n        let modalContent = currentModal.querySelector('.modal_content');\r\n        modalContent.removeAttribute('style');\r\n      setTimeout(() => {\r\n        currentModal.classList.remove(\"show\");\r\n        body.classList.remove(\"no-scroll\"); \r\n    }, 250)\r\n\r\n\r\n}\r\n\n\n//# sourceURL=webpack:///./src/assets/js/modal.js?");

/***/ }),

/***/ "./src/assets/js/service.js":
/*!**********************************!*\
  !*** ./src/assets/js/service.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("window.onload = function() {\r\n    get_comments();\r\n\r\n\r\n    var form_comment = document.getElementById('form_comment');\r\n    var text_comment = document.getElementById('text_comment');\r\n\r\n    console.log(text_comment.value);\r\n    console.log(id);\r\n    form_comment.onclick = function() {\r\n        get_comments();\r\n\r\n        axios({\r\n            method: 'post',\r\n            url: './assets/includes/_add_comment.php',\r\n            data: {\r\n                author: 'Fred',\r\n                text: text_comment.value,\r\n                articlesid: id\r\n            }\r\n        });\r\n\r\n\r\n\r\n\r\n\r\n\r\n        \r\n    }\r\n    function get_comments() {\r\n            axios.get('./assets/includes/_get_comments.php')\r\n                .then(function(response) {\r\n                    // handle success\r\n                    console.log(response.data);\r\n\r\n\r\n\r\n\r\n                    $(document).ready(function() {\r\n\r\n                        var a = Object.keys(response.data);\r\n                     for (let i = 1; i-1 < a.length; i++) {\r\n                            console.log(response.data[i]);\r\n\r\n\r\n                            $('.comments_content_main').append(' <ul class=\"comments\">' +\r\n                                ' <li class=\"comments_item\">' +\r\n                                ' <div class=\"comments_header\">' +\r\n                                '   <img class=\"comments_avatar\" src=\"https://placehold.it/30\" alt=\"\">' +\r\n                                ' <div class=\"comments_author\">' +\r\n                                 `<div class=\"comments_name\">${response.data[i].author}</div>` +\r\n                                `<time datetime=\"2020-12-21 19:21\" class=\"comments_pubdate\">${response.data[i].pubdate}</time>` +\r\n\r\n                                '</div>' +\r\n                                '</div>' +\r\n                                `<div class=\"comments_text\">${response.data[i].text}</div>` +\r\n                                '<button class=\"comments_reply\" type=\"button\">ответить</button>' +\r\n\r\n\r\n                                '</li>' +\r\n\r\n                                '</ul>'\r\n\r\n\r\n\r\n\r\n\r\n                            );\r\n                        };\r\n                    })\r\n                });\r\n\r\n        }\r\n\r\n}\n\n//# sourceURL=webpack:///./src/assets/js/service.js?");

/***/ }),

/***/ "./src/assets/js/textarea.js":
/*!***********************************!*\
  !*** ./src/assets/js/textarea.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("const textArea = document.querySelectorAll('[data-autoresize]');\r\n\r\ntextArea.forEach(item => {\r\n    let textAreaH= item.offsetHeight;\r\n    item.addEventListener('input', event => {\r\n        let $this=event.target;\r\n       $this.style.height=textAreaH+'px';\r\n       $this.style.height=$this.scrollHeight+'px';\r\n    });\r\n});\n\n//# sourceURL=webpack:///./src/assets/js/textarea.js?");

/***/ }),

/***/ 0:
/*!***********************************************************************************************************************!*\
  !*** multi ./src/assets/js/burger.js ./src/assets/js/modal.js ./src/assets/js/service.js ./src/assets/js/textarea.js ***!
  \***********************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("__webpack_require__(/*! C:\\openserver\\domains\\personal-blog-gulp\\src\\assets\\js\\burger.js */\"./src/assets/js/burger.js\");\n__webpack_require__(/*! C:\\openserver\\domains\\personal-blog-gulp\\src\\assets\\js\\modal.js */\"./src/assets/js/modal.js\");\n__webpack_require__(/*! C:\\openserver\\domains\\personal-blog-gulp\\src\\assets\\js\\service.js */\"./src/assets/js/service.js\");\nmodule.exports = __webpack_require__(/*! C:\\openserver\\domains\\personal-blog-gulp\\src\\assets\\js\\textarea.js */\"./src/assets/js/textarea.js\");\n\n\n//# sourceURL=webpack:///multi_./src/assets/js/burger.js_./src/assets/js/modal.js_./src/assets/js/service.js_./src/assets/js/textarea.js?");

/***/ })

/******/ });