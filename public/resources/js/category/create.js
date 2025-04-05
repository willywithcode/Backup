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

/***/ "./resources/js/category/create.js":
/*!*****************************************!*\
  !*** ./resources/js/category/create.js ***!
  \*****************************************/
/***/ (() => {

eval("// Description editor\nvar fullEditor = new Quill('#category-description-editor', {\n  modules: {\n    toolbar: [[{\n      header: [1, 2, false]\n    }], ['bold', 'italic', 'underline'], ['image', 'code-block']]\n  },\n  theme: 'snow' // or 'bubble'\n});\n\nfullEditor.root.innerHTML = $('#category-description').val();\n\n// Add category submit event\n$('#submit-btn').on('click', function (e) {\n  e.preventDefault();\n  var description = fullEditor.root.innerHTML;\n  $('#category-description').val(description);\n  $('#kt_ecommerce_add_category_form').submit();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvY2F0ZWdvcnkvY3JlYXRlLmpzLmpzIiwibmFtZXMiOlsiZnVsbEVkaXRvciIsIlF1aWxsIiwibW9kdWxlcyIsInRvb2xiYXIiLCJoZWFkZXIiLCJ0aGVtZSIsInJvb3QiLCJpbm5lckhUTUwiLCIkIiwidmFsIiwib24iLCJlIiwicHJldmVudERlZmF1bHQiLCJkZXNjcmlwdGlvbiIsInN1Ym1pdCJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2NhdGVnb3J5L2NyZWF0ZS5qcz9mYTI3Il0sInNvdXJjZXNDb250ZW50IjpbIi8vIERlc2NyaXB0aW9uIGVkaXRvclxudmFyIGZ1bGxFZGl0b3IgPSBuZXcgUXVpbGwoJyNjYXRlZ29yeS1kZXNjcmlwdGlvbi1lZGl0b3InLCB7XG4gICAgbW9kdWxlczoge1xuICAgICAgICB0b29sYmFyOiBbXG4gICAgICAgICAgICBbe1xuICAgICAgICAgICAgICAgIGhlYWRlcjogWzEsIDIsIGZhbHNlXVxuICAgICAgICAgICAgfV0sXG4gICAgICAgICAgICBbJ2JvbGQnLCAnaXRhbGljJywgJ3VuZGVybGluZSddLFxuICAgICAgICAgICAgWydpbWFnZScsICdjb2RlLWJsb2NrJ11cbiAgICAgICAgXVxuICAgIH0sXG4gICAgdGhlbWU6ICdzbm93JyAvLyBvciAnYnViYmxlJ1xufSk7XG5cbmZ1bGxFZGl0b3Iucm9vdC5pbm5lckhUTUwgPSAkKCcjY2F0ZWdvcnktZGVzY3JpcHRpb24nKS52YWwoKTtcblxuLy8gQWRkIGNhdGVnb3J5IHN1Ym1pdCBldmVudFxuJCgnI3N1Ym1pdC1idG4nKS5vbignY2xpY2snLCAoZSkgPT4ge1xuICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICBjb25zdCBkZXNjcmlwdGlvbiA9IGZ1bGxFZGl0b3Iucm9vdC5pbm5lckhUTUw7XG4gICAgJCgnI2NhdGVnb3J5LWRlc2NyaXB0aW9uJykudmFsKGRlc2NyaXB0aW9uKTtcbiAgICAkKCcja3RfZWNvbW1lcmNlX2FkZF9jYXRlZ29yeV9mb3JtJykuc3VibWl0KCk7XG59KTtcbiJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQSxJQUFJQSxVQUFVLEdBQUcsSUFBSUMsS0FBSyxDQUFDLDhCQUE4QixFQUFFO0VBQ3ZEQyxPQUFPLEVBQUU7SUFDTEMsT0FBTyxFQUFFLENBQ0wsQ0FBQztNQUNHQyxNQUFNLEVBQUUsQ0FBQyxDQUFDLEVBQUUsQ0FBQyxFQUFFLEtBQUs7SUFDeEIsQ0FBQyxDQUFDLEVBQ0YsQ0FBQyxNQUFNLEVBQUUsUUFBUSxFQUFFLFdBQVcsQ0FBQyxFQUMvQixDQUFDLE9BQU8sRUFBRSxZQUFZLENBQUM7RUFFL0IsQ0FBQztFQUNEQyxLQUFLLEVBQUUsTUFBTSxDQUFDO0FBQ2xCLENBQUMsQ0FBQzs7QUFFRkwsVUFBVSxDQUFDTSxJQUFJLENBQUNDLFNBQVMsR0FBR0MsQ0FBQyxDQUFDLHVCQUF1QixDQUFDLENBQUNDLEdBQUcsRUFBRTs7QUFFNUQ7QUFDQUQsQ0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDRSxFQUFFLENBQUMsT0FBTyxFQUFFLFVBQUNDLENBQUMsRUFBSztFQUNoQ0EsQ0FBQyxDQUFDQyxjQUFjLEVBQUU7RUFDbEIsSUFBTUMsV0FBVyxHQUFHYixVQUFVLENBQUNNLElBQUksQ0FBQ0MsU0FBUztFQUM3Q0MsQ0FBQyxDQUFDLHVCQUF1QixDQUFDLENBQUNDLEdBQUcsQ0FBQ0ksV0FBVyxDQUFDO0VBQzNDTCxDQUFDLENBQUMsaUNBQWlDLENBQUMsQ0FBQ00sTUFBTSxFQUFFO0FBQ2pELENBQUMsQ0FBQyJ9\n//# sourceURL=webpack-internal:///./resources/js/category/create.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/category/create.js"]();
/******/ 	
/******/ })()
;