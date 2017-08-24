/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
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
/******/ 	// identity function for calling harmory imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmory exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		Object.defineProperty(exports, name, {
/******/ 			configurable: false,
/******/ 			enumerable: true,
/******/ 			get: getter
/******/ 		});
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports) {

eval("(function($) {\r\n\r\n\t$(function() {\r\n\r\n\t\t// profil modal\r\n\t\tvar $playerInfos = $('.wrap-player-infos'),\r\n\t\t$playerform = $('.wrap-player-form');\r\n\t\t// toggle edit infos form user\r\n\t\t$('#toggle-edit-profile')\r\n\t\t\t.on('click', function() {\r\n\r\n\t\t\t\tif( $playerform.is(':visible') == false ) {\r\n\t\t\t\t\t$playerInfos\r\n\t\t\t\t\t\t.hide();\r\n\t\t\t\t\t$playerform\r\n\t\t\t\t\t\t.fadeIn();\r\n\t\t\t\t}\r\n\t\t\t\telse {\r\n\t\t\t\t\t$playerform\r\n\t\t\t\t\t\t.hide();\r\n\t\t\t\t\t$playerInfos\r\n\t\t\t\t\t\t.fadeIn();\r\n\t\t\t\t}\r\n\t\t\t});\r\n\r\n\t\t$('#profilJoueur')\r\n\t\t\t.on('hidden.bs.modal', function () {\r\n\t\t    $playerform\r\n\t\t\t\t\t.hide();\r\n\t\t\t\t$playerInfos\r\n\t\t\t\t\t.fadeIn();\r\n\t\t\t});\r\n\t});\r\n\r\n})(jQuery);\r\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL21hbGlndWUuanM/NDE2NiJdLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24oJCkge1xyXG5cclxuXHQkKGZ1bmN0aW9uKCkge1xyXG5cclxuXHRcdC8vIHByb2ZpbCBtb2RhbFxyXG5cdFx0dmFyICRwbGF5ZXJJbmZvcyA9ICQoJy53cmFwLXBsYXllci1pbmZvcycpLFxyXG5cdFx0JHBsYXllcmZvcm0gPSAkKCcud3JhcC1wbGF5ZXItZm9ybScpO1xyXG5cdFx0Ly8gdG9nZ2xlIGVkaXQgaW5mb3MgZm9ybSB1c2VyXHJcblx0XHQkKCcjdG9nZ2xlLWVkaXQtcHJvZmlsZScpXHJcblx0XHRcdC5vbignY2xpY2snLCBmdW5jdGlvbigpIHtcclxuXHJcblx0XHRcdFx0aWYoICRwbGF5ZXJmb3JtLmlzKCc6dmlzaWJsZScpID09IGZhbHNlICkge1xyXG5cdFx0XHRcdFx0JHBsYXllckluZm9zXHJcblx0XHRcdFx0XHRcdC5oaWRlKCk7XHJcblx0XHRcdFx0XHQkcGxheWVyZm9ybVxyXG5cdFx0XHRcdFx0XHQuZmFkZUluKCk7XHJcblx0XHRcdFx0fVxyXG5cdFx0XHRcdGVsc2Uge1xyXG5cdFx0XHRcdFx0JHBsYXllcmZvcm1cclxuXHRcdFx0XHRcdFx0LmhpZGUoKTtcclxuXHRcdFx0XHRcdCRwbGF5ZXJJbmZvc1xyXG5cdFx0XHRcdFx0XHQuZmFkZUluKCk7XHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9KTtcclxuXHJcblx0XHQkKCcjcHJvZmlsSm91ZXVyJylcclxuXHRcdFx0Lm9uKCdoaWRkZW4uYnMubW9kYWwnLCBmdW5jdGlvbiAoKSB7XHJcblx0XHQgICAgJHBsYXllcmZvcm1cclxuXHRcdFx0XHRcdC5oaWRlKCk7XHJcblx0XHRcdFx0JHBsYXllckluZm9zXHJcblx0XHRcdFx0XHQuZmFkZUluKCk7XHJcblx0XHRcdH0pO1xyXG5cdH0pO1xyXG5cclxufSkoalF1ZXJ5KTtcclxuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIHJlc291cmNlcy9hc3NldHMvanMvbWFsaWd1ZS5qcyJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7Iiwic291cmNlUm9vdCI6IiJ9");

/***/ }
/******/ ]);