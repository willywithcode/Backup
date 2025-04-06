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

/***/ "./resources/js/posts/create.js":
/*!**************************************!*\
  !*** ./resources/js/posts/create.js ***!
  \**************************************/
/***/ (() => {

eval("var fullEditor = new Quill('#product-description-editor', {\n  modules: {\n    toolbar: [[{\n      header: [1, 2, false]\n    }], ['bold', 'italic', 'underline'], ['image', 'code-block']]\n  },\n  theme: 'snow'\n});\nvar initialContent = $('#product-description').val();\nif (initialContent) {\n  fullEditor.root.innerHTML = initialContent;\n}\nfunction quillHtmlToTextWithNewlines(html) {\n  var tempDiv = document.createElement('div');\n  tempDiv.innerHTML = html;\n  tempDiv.querySelectorAll('p, br, div').forEach(function (el) {\n    var lineBreak = document.createTextNode('\\n');\n    el.parentNode.insertBefore(lineBreak, el.nextSibling);\n  });\n  return tempDiv.textContent.replace(/\\n{2,}/g, '\\n').trim();\n}\n$('form').on('submit', function () {\n  var htmlContent = fullEditor.root.innerHTML;\n  var plainTextWithNewlines = quillHtmlToTextWithNewlines(htmlContent);\n  $('#product-description').val(plainTextWithNewlines);\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJmdWxsRWRpdG9yIiwiUXVpbGwiLCJtb2R1bGVzIiwidG9vbGJhciIsImhlYWRlciIsInRoZW1lIiwiaW5pdGlhbENvbnRlbnQiLCIkIiwidmFsIiwicm9vdCIsImlubmVySFRNTCIsInF1aWxsSHRtbFRvVGV4dFdpdGhOZXdsaW5lcyIsImh0bWwiLCJ0ZW1wRGl2IiwiZG9jdW1lbnQiLCJjcmVhdGVFbGVtZW50IiwicXVlcnlTZWxlY3RvckFsbCIsImZvckVhY2giLCJlbCIsImxpbmVCcmVhayIsImNyZWF0ZVRleHROb2RlIiwicGFyZW50Tm9kZSIsImluc2VydEJlZm9yZSIsIm5leHRTaWJsaW5nIiwidGV4dENvbnRlbnQiLCJyZXBsYWNlIiwidHJpbSIsIm9uIiwiaHRtbENvbnRlbnQiLCJwbGFpblRleHRXaXRoTmV3bGluZXMiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3Bvc3RzL2NyZWF0ZS5qcz8zMzA3Il0sInNvdXJjZXNDb250ZW50IjpbInZhciBmdWxsRWRpdG9yID0gbmV3IFF1aWxsKCcjcHJvZHVjdC1kZXNjcmlwdGlvbi1lZGl0b3InLCB7XHJcbiAgICBtb2R1bGVzOiB7XHJcbiAgICAgICAgdG9vbGJhcjogW1xyXG4gICAgICAgICAgICBbeyBoZWFkZXI6IFsxLCAyLCBmYWxzZV0gfV0sXHJcbiAgICAgICAgICAgIFsnYm9sZCcsICdpdGFsaWMnLCAndW5kZXJsaW5lJ10sXHJcbiAgICAgICAgICAgIFsnaW1hZ2UnLCAnY29kZS1ibG9jayddXHJcbiAgICAgICAgXVxyXG4gICAgfSxcclxuICAgIHRoZW1lOiAnc25vdycgXHJcbn0pO1xyXG5cclxuY29uc3QgaW5pdGlhbENvbnRlbnQgPSAkKCcjcHJvZHVjdC1kZXNjcmlwdGlvbicpLnZhbCgpO1xyXG5pZiAoaW5pdGlhbENvbnRlbnQpIHtcclxuICAgIGZ1bGxFZGl0b3Iucm9vdC5pbm5lckhUTUwgPSBpbml0aWFsQ29udGVudDtcclxufVxyXG5cclxuZnVuY3Rpb24gcXVpbGxIdG1sVG9UZXh0V2l0aE5ld2xpbmVzKGh0bWwpIHtcclxuICAgIGNvbnN0IHRlbXBEaXYgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcclxuICAgIHRlbXBEaXYuaW5uZXJIVE1MID0gaHRtbDtcclxuXHJcbiAgICB0ZW1wRGl2LnF1ZXJ5U2VsZWN0b3JBbGwoJ3AsIGJyLCBkaXYnKS5mb3JFYWNoKGVsID0+IHtcclxuICAgICAgICBjb25zdCBsaW5lQnJlYWsgPSBkb2N1bWVudC5jcmVhdGVUZXh0Tm9kZSgnXFxuJyk7XHJcbiAgICAgICAgZWwucGFyZW50Tm9kZS5pbnNlcnRCZWZvcmUobGluZUJyZWFrLCBlbC5uZXh0U2libGluZyk7XHJcbiAgICB9KTtcclxuXHJcbiAgICByZXR1cm4gdGVtcERpdi50ZXh0Q29udGVudC5yZXBsYWNlKC9cXG57Mix9L2csICdcXG4nKS50cmltKCk7XHJcbn1cclxuXHJcbiQoJ2Zvcm0nKS5vbignc3VibWl0JywgZnVuY3Rpb24gKCkge1xyXG4gICAgY29uc3QgaHRtbENvbnRlbnQgPSBmdWxsRWRpdG9yLnJvb3QuaW5uZXJIVE1MO1xyXG4gICAgY29uc3QgcGxhaW5UZXh0V2l0aE5ld2xpbmVzID0gcXVpbGxIdG1sVG9UZXh0V2l0aE5ld2xpbmVzKGh0bWxDb250ZW50KTtcclxuXHJcbiAgICAkKCcjcHJvZHVjdC1kZXNjcmlwdGlvbicpLnZhbChwbGFpblRleHRXaXRoTmV3bGluZXMpO1xyXG59KTtcclxuIl0sIm1hcHBpbmdzIjoiQUFBQSxJQUFJQSxVQUFVLEdBQUcsSUFBSUMsS0FBSyxDQUFDLDZCQUE2QixFQUFFO0VBQ3REQyxPQUFPLEVBQUU7SUFDTEMsT0FBTyxFQUFFLENBQ0wsQ0FBQztNQUFFQyxNQUFNLEVBQUUsQ0FBQyxDQUFDLEVBQUUsQ0FBQyxFQUFFLEtBQUs7SUFBRSxDQUFDLENBQUMsRUFDM0IsQ0FBQyxNQUFNLEVBQUUsUUFBUSxFQUFFLFdBQVcsQ0FBQyxFQUMvQixDQUFDLE9BQU8sRUFBRSxZQUFZLENBQUM7RUFFL0IsQ0FBQztFQUNEQyxLQUFLLEVBQUU7QUFDWCxDQUFDLENBQUM7QUFFRixJQUFNQyxjQUFjLEdBQUdDLENBQUMsQ0FBQyxzQkFBc0IsQ0FBQyxDQUFDQyxHQUFHLEVBQUU7QUFDdEQsSUFBSUYsY0FBYyxFQUFFO0VBQ2hCTixVQUFVLENBQUNTLElBQUksQ0FBQ0MsU0FBUyxHQUFHSixjQUFjO0FBQzlDO0FBRUEsU0FBU0ssMkJBQTJCQSxDQUFDQyxJQUFJLEVBQUU7RUFDdkMsSUFBTUMsT0FBTyxHQUFHQyxRQUFRLENBQUNDLGFBQWEsQ0FBQyxLQUFLLENBQUM7RUFDN0NGLE9BQU8sQ0FBQ0gsU0FBUyxHQUFHRSxJQUFJO0VBRXhCQyxPQUFPLENBQUNHLGdCQUFnQixDQUFDLFlBQVksQ0FBQyxDQUFDQyxPQUFPLENBQUMsVUFBQUMsRUFBRSxFQUFJO0lBQ2pELElBQU1DLFNBQVMsR0FBR0wsUUFBUSxDQUFDTSxjQUFjLENBQUMsSUFBSSxDQUFDO0lBQy9DRixFQUFFLENBQUNHLFVBQVUsQ0FBQ0MsWUFBWSxDQUFDSCxTQUFTLEVBQUVELEVBQUUsQ0FBQ0ssV0FBVyxDQUFDO0VBQ3pELENBQUMsQ0FBQztFQUVGLE9BQU9WLE9BQU8sQ0FBQ1csV0FBVyxDQUFDQyxPQUFPLENBQUMsU0FBUyxFQUFFLElBQUksQ0FBQyxDQUFDQyxJQUFJLEVBQUU7QUFDOUQ7QUFFQW5CLENBQUMsQ0FBQyxNQUFNLENBQUMsQ0FBQ29CLEVBQUUsQ0FBQyxRQUFRLEVBQUUsWUFBWTtFQUMvQixJQUFNQyxXQUFXLEdBQUc1QixVQUFVLENBQUNTLElBQUksQ0FBQ0MsU0FBUztFQUM3QyxJQUFNbUIscUJBQXFCLEdBQUdsQiwyQkFBMkIsQ0FBQ2lCLFdBQVcsQ0FBQztFQUV0RXJCLENBQUMsQ0FBQyxzQkFBc0IsQ0FBQyxDQUFDQyxHQUFHLENBQUNxQixxQkFBcUIsQ0FBQztBQUN4RCxDQUFDLENBQUMiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcG9zdHMvY3JlYXRlLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/posts/create.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/posts/create.js"]();
/******/ 	
/******/ })()
;