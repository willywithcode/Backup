/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/brand/edit.js":
/*!************************************!*\
  !*** ./resources/js/brand/edit.js ***!
  \************************************/
/***/ (() => {

eval("var fullEditor = new Quill('#brand-description-editor', {\n  modules: {\n    toolbar: [[{\n      header: [1, 2, false]\n    }], ['bold', 'italic', 'underline'], ['image', 'code-block']]\n  },\n  theme: 'snow' // or 'bubble'\n});\n\nfullEditor.root.innerHTML = $('#brand-description').val();\n$('#submit-btn').on('click', function (e) {\n  e.preventDefault();\n  var description = fullEditor.root.innerHTML;\n  $('#brand-description').val(description);\n  $('#kt_ecommerce_add_brand_form').submit();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYnJhbmQvZWRpdC5qcy5qcyIsIm5hbWVzIjpbImZ1bGxFZGl0b3IiLCJRdWlsbCIsIm1vZHVsZXMiLCJ0b29sYmFyIiwiaGVhZGVyIiwidGhlbWUiLCJyb290IiwiaW5uZXJIVE1MIiwiJCIsInZhbCIsIm9uIiwiZSIsInByZXZlbnREZWZhdWx0IiwiZGVzY3JpcHRpb24iLCJzdWJtaXQiXSwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9icmFuZC9lZGl0LmpzPzFjY2IiXSwic291cmNlc0NvbnRlbnQiOlsidmFyIGZ1bGxFZGl0b3IgPSBuZXcgUXVpbGwoJyNicmFuZC1kZXNjcmlwdGlvbi1lZGl0b3InLCB7XG4gICAgbW9kdWxlczoge1xuICAgICAgICB0b29sYmFyOiBbXG4gICAgICAgICAgICBbe1xuICAgICAgICAgICAgICAgIGhlYWRlcjogWzEsIDIsIGZhbHNlXVxuICAgICAgICAgICAgfV0sXG4gICAgICAgICAgICBbJ2JvbGQnLCAnaXRhbGljJywgJ3VuZGVybGluZSddLFxuICAgICAgICAgICAgWydpbWFnZScsICdjb2RlLWJsb2NrJ11cbiAgICAgICAgXVxuICAgIH0sXG4gICAgdGhlbWU6ICdzbm93JyAvLyBvciAnYnViYmxlJ1xufSk7XG5cbmZ1bGxFZGl0b3Iucm9vdC5pbm5lckhUTUwgPSAkKCcjYnJhbmQtZGVzY3JpcHRpb24nKS52YWwoKTtcblxuJCgnI3N1Ym1pdC1idG4nKS5vbignY2xpY2snLCAoZSkgPT4ge1xuICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICBjb25zdCBkZXNjcmlwdGlvbiA9IGZ1bGxFZGl0b3Iucm9vdC5pbm5lckhUTUw7XG4gICAgJCgnI2JyYW5kLWRlc2NyaXB0aW9uJykudmFsKGRlc2NyaXB0aW9uKVxuICAgICQoJyNrdF9lY29tbWVyY2VfYWRkX2JyYW5kX2Zvcm0nKS5zdWJtaXQoKTtcbn0pO1xuXG4iXSwibWFwcGluZ3MiOiJBQUFBLElBQUlBLFVBQVUsR0FBRyxJQUFJQyxLQUFLLENBQUMsMkJBQTJCLEVBQUU7RUFDcERDLE9BQU8sRUFBRTtJQUNMQyxPQUFPLEVBQUUsQ0FDTCxDQUFDO01BQ0dDLE1BQU0sRUFBRSxDQUFDLENBQUMsRUFBRSxDQUFDLEVBQUUsS0FBSztJQUN4QixDQUFDLENBQUMsRUFDRixDQUFDLE1BQU0sRUFBRSxRQUFRLEVBQUUsV0FBVyxDQUFDLEVBQy9CLENBQUMsT0FBTyxFQUFFLFlBQVksQ0FBQztFQUUvQixDQUFDO0VBQ0RDLEtBQUssRUFBRSxNQUFNLENBQUM7QUFDbEIsQ0FBQyxDQUFDOztBQUVGTCxVQUFVLENBQUNNLElBQUksQ0FBQ0MsU0FBUyxHQUFHQyxDQUFDLENBQUMsb0JBQW9CLENBQUMsQ0FBQ0MsR0FBRyxFQUFFO0FBRXpERCxDQUFDLENBQUMsYUFBYSxDQUFDLENBQUNFLEVBQUUsQ0FBQyxPQUFPLEVBQUUsVUFBQ0MsQ0FBQyxFQUFLO0VBQ2hDQSxDQUFDLENBQUNDLGNBQWMsRUFBRTtFQUNsQixJQUFNQyxXQUFXLEdBQUdiLFVBQVUsQ0FBQ00sSUFBSSxDQUFDQyxTQUFTO0VBQzdDQyxDQUFDLENBQUMsb0JBQW9CLENBQUMsQ0FBQ0MsR0FBRyxDQUFDSSxXQUFXLENBQUM7RUFDeENMLENBQUMsQ0FBQyw4QkFBOEIsQ0FBQyxDQUFDTSxNQUFNLEVBQUU7QUFDOUMsQ0FBQyxDQUFDIn0=\n//# sourceURL=webpack-internal:///./resources/js/brand/edit.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/brand/edit.js"]();
/******/ 	
/******/ })()
;