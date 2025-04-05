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

eval("// Description editor\nvar fullEditor = new Quill('#product-description-editor', {\n  modules: {\n    toolbar: [[{\n      header: [1, 2, false]\n    }], ['bold', 'italic', 'underline'], ['image', 'code-block']]\n  },\n  theme: 'snow' // or 'bubble'\n});\n\n// Initialize Quill editor with existing content from hidden input\nvar initialContent = $('#product-description').val();\nif (initialContent) {\n  fullEditor.root.innerHTML = initialContent;\n}\n\n// Add text-change event listener to update description field\nfullEditor.on('text-change', function () {\n  var description = fullEditor.root.innerHTML;\n  $('#product-description').val(description);\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcG9zdHMvY3JlYXRlLmpzLmpzIiwibmFtZXMiOlsiZnVsbEVkaXRvciIsIlF1aWxsIiwibW9kdWxlcyIsInRvb2xiYXIiLCJoZWFkZXIiLCJ0aGVtZSIsImluaXRpYWxDb250ZW50IiwiJCIsInZhbCIsInJvb3QiLCJpbm5lckhUTUwiLCJvbiIsImRlc2NyaXB0aW9uIl0sInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcG9zdHMvY3JlYXRlLmpzPzMzMDciXSwic291cmNlc0NvbnRlbnQiOlsiLy8gRGVzY3JpcHRpb24gZWRpdG9yXG52YXIgZnVsbEVkaXRvciA9IG5ldyBRdWlsbCgnI3Byb2R1Y3QtZGVzY3JpcHRpb24tZWRpdG9yJywge1xuICAgIG1vZHVsZXM6IHtcbiAgICAgICAgdG9vbGJhcjogW1xuICAgICAgICAgICAgW3tcbiAgICAgICAgICAgICAgICBoZWFkZXI6IFsxLCAyLCBmYWxzZV1cbiAgICAgICAgICAgIH1dLFxuICAgICAgICAgICAgWydib2xkJywgJ2l0YWxpYycsICd1bmRlcmxpbmUnXSxcbiAgICAgICAgICAgIFsnaW1hZ2UnLCAnY29kZS1ibG9jayddXG4gICAgICAgIF1cbiAgICB9LFxuICAgIHRoZW1lOiAnc25vdycgLy8gb3IgJ2J1YmJsZSdcbn0pO1xuXG4vLyBJbml0aWFsaXplIFF1aWxsIGVkaXRvciB3aXRoIGV4aXN0aW5nIGNvbnRlbnQgZnJvbSBoaWRkZW4gaW5wdXRcbmNvbnN0IGluaXRpYWxDb250ZW50ID0gJCgnI3Byb2R1Y3QtZGVzY3JpcHRpb24nKS52YWwoKTtcbmlmIChpbml0aWFsQ29udGVudCkge1xuICAgIGZ1bGxFZGl0b3Iucm9vdC5pbm5lckhUTUwgPSBpbml0aWFsQ29udGVudDtcbn1cblxuLy8gQWRkIHRleHQtY2hhbmdlIGV2ZW50IGxpc3RlbmVyIHRvIHVwZGF0ZSBkZXNjcmlwdGlvbiBmaWVsZFxuZnVsbEVkaXRvci5vbigndGV4dC1jaGFuZ2UnLCBmdW5jdGlvbigpIHtcbiAgICBjb25zdCBkZXNjcmlwdGlvbiA9IGZ1bGxFZGl0b3Iucm9vdC5pbm5lckhUTUw7XG4gICAgJCgnI3Byb2R1Y3QtZGVzY3JpcHRpb24nKS52YWwoZGVzY3JpcHRpb24pO1xufSk7XG4iXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0EsSUFBSUEsVUFBVSxHQUFHLElBQUlDLEtBQUssQ0FBQyw2QkFBNkIsRUFBRTtFQUN0REMsT0FBTyxFQUFFO0lBQ0xDLE9BQU8sRUFBRSxDQUNMLENBQUM7TUFDR0MsTUFBTSxFQUFFLENBQUMsQ0FBQyxFQUFFLENBQUMsRUFBRSxLQUFLO0lBQ3hCLENBQUMsQ0FBQyxFQUNGLENBQUMsTUFBTSxFQUFFLFFBQVEsRUFBRSxXQUFXLENBQUMsRUFDL0IsQ0FBQyxPQUFPLEVBQUUsWUFBWSxDQUFDO0VBRS9CLENBQUM7RUFDREMsS0FBSyxFQUFFLE1BQU0sQ0FBQztBQUNsQixDQUFDLENBQUM7O0FBRUY7QUFDQSxJQUFNQyxjQUFjLEdBQUdDLENBQUMsQ0FBQyxzQkFBc0IsQ0FBQyxDQUFDQyxHQUFHLEVBQUU7QUFDdEQsSUFBSUYsY0FBYyxFQUFFO0VBQ2hCTixVQUFVLENBQUNTLElBQUksQ0FBQ0MsU0FBUyxHQUFHSixjQUFjO0FBQzlDOztBQUVBO0FBQ0FOLFVBQVUsQ0FBQ1csRUFBRSxDQUFDLGFBQWEsRUFBRSxZQUFXO0VBQ3BDLElBQU1DLFdBQVcsR0FBR1osVUFBVSxDQUFDUyxJQUFJLENBQUNDLFNBQVM7RUFDN0NILENBQUMsQ0FBQyxzQkFBc0IsQ0FBQyxDQUFDQyxHQUFHLENBQUNJLFdBQVcsQ0FBQztBQUM5QyxDQUFDLENBQUMifQ==\n//# sourceURL=webpack-internal:///./resources/js/posts/create.js\n");

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