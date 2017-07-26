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

eval("(function($) {\n\n\t$(function() {\n\n\t\t// profil modal\n\t\tvar $playerInfos = $('.wrap-player-infos'),\n\t\t$playerform = $('.wrap-player-form');\n\t\t// toggle edit infos form user\n\t\t$('#toggle-edit-profile')\n\t\t\t.on('click', function() {\n\n\t\t\t\tif( $playerform.is(':visible') == false ) {\n\t\t\t\t\t$playerInfos\n\t\t\t\t\t\t.hide();\n\t\t\t\t\t$playerform\n\t\t\t\t\t\t.fadeIn();\n\t\t\t\t}\n\t\t\t\telse {\n\t\t\t\t\t$playerform\n\t\t\t\t\t\t.hide();\n\t\t\t\t\t$playerInfos\n\t\t\t\t\t\t.fadeIn();\n\t\t\t\t}\n\t\t\t});\n\n\t\t$('#profilJoueur')\n\t\t\t.on('hidden.bs.modal', function () {\n\t\t    $playerform\n\t\t\t\t\t.hide();\n\t\t\t\t$playerInfos\n\t\t\t\t\t.fadeIn();\n\t\t\t});\n\t});\n\n})(jQuery);\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL21hbGlndWUuanM/NDE2NiJdLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24oJCkge1xuXG5cdCQoZnVuY3Rpb24oKSB7XG5cblx0XHQvLyBwcm9maWwgbW9kYWxcblx0XHR2YXIgJHBsYXllckluZm9zID0gJCgnLndyYXAtcGxheWVyLWluZm9zJyksXG5cdFx0JHBsYXllcmZvcm0gPSAkKCcud3JhcC1wbGF5ZXItZm9ybScpO1xuXHRcdC8vIHRvZ2dsZSBlZGl0IGluZm9zIGZvcm0gdXNlclxuXHRcdCQoJyN0b2dnbGUtZWRpdC1wcm9maWxlJylcblx0XHRcdC5vbignY2xpY2snLCBmdW5jdGlvbigpIHtcblxuXHRcdFx0XHRpZiggJHBsYXllcmZvcm0uaXMoJzp2aXNpYmxlJykgPT0gZmFsc2UgKSB7XG5cdFx0XHRcdFx0JHBsYXllckluZm9zXG5cdFx0XHRcdFx0XHQuaGlkZSgpO1xuXHRcdFx0XHRcdCRwbGF5ZXJmb3JtXG5cdFx0XHRcdFx0XHQuZmFkZUluKCk7XG5cdFx0XHRcdH1cblx0XHRcdFx0ZWxzZSB7XG5cdFx0XHRcdFx0JHBsYXllcmZvcm1cblx0XHRcdFx0XHRcdC5oaWRlKCk7XG5cdFx0XHRcdFx0JHBsYXllckluZm9zXG5cdFx0XHRcdFx0XHQuZmFkZUluKCk7XG5cdFx0XHRcdH1cblx0XHRcdH0pO1xuXG5cdFx0JCgnI3Byb2ZpbEpvdWV1cicpXG5cdFx0XHQub24oJ2hpZGRlbi5icy5tb2RhbCcsIGZ1bmN0aW9uICgpIHtcblx0XHQgICAgJHBsYXllcmZvcm1cblx0XHRcdFx0XHQuaGlkZSgpO1xuXHRcdFx0XHQkcGxheWVySW5mb3Ncblx0XHRcdFx0XHQuZmFkZUluKCk7XG5cdFx0XHR9KTtcblx0fSk7XG5cbn0pKGpRdWVyeSk7XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gcmVzb3VyY2VzL2Fzc2V0cy9qcy9tYWxpZ3VlLmpzIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTsiLCJzb3VyY2VSb290IjoiIn0=");

/***/ }
/******/ ]);