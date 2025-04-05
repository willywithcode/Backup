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

eval("// Description editor\nvar fullEditor = new Quill('#product-description-editor', {\n  modules: {\n    toolbar: [[{\n      header: [1, 2, false]\n    }], ['bold', 'italic', 'underline'], ['image', 'code-block']]\n  },\n  theme: 'snow' // or 'bubble'\n});\n\n// Initialize Quill editor with existing content from hidden input\nvar initialContent = $('#product-description').val();\nif (initialContent) {\n  fullEditor.root.innerHTML = initialContent;\n}\n\n// Add text-change event listener to update description field\nfullEditor.on('text-change', function () {\n  var description = fullEditor.root.innerHTML;\n  $('#product-description').val(description);\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJmdWxsRWRpdG9yIiwiUXVpbGwiLCJtb2R1bGVzIiwidG9vbGJhciIsImhlYWRlciIsInRoZW1lIiwiaW5pdGlhbENvbnRlbnQiLCIkIiwidmFsIiwicm9vdCIsImlubmVySFRNTCIsIm9uIiwiZGVzY3JpcHRpb24iXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3Bvc3RzL2NyZWF0ZS5qcz8zMzA3Il0sInNvdXJjZXNDb250ZW50IjpbIi8vIERlc2NyaXB0aW9uIGVkaXRvclxudmFyIGZ1bGxFZGl0b3IgPSBuZXcgUXVpbGwoJyNwcm9kdWN0LWRlc2NyaXB0aW9uLWVkaXRvcicsIHtcbiAgICBtb2R1bGVzOiB7XG4gICAgICAgIHRvb2xiYXI6IFtcbiAgICAgICAgICAgIFt7XG4gICAgICAgICAgICAgICAgaGVhZGVyOiBbMSwgMiwgZmFsc2VdXG4gICAgICAgICAgICB9XSxcbiAgICAgICAgICAgIFsnYm9sZCcsICdpdGFsaWMnLCAndW5kZXJsaW5lJ10sXG4gICAgICAgICAgICBbJ2ltYWdlJywgJ2NvZGUtYmxvY2snXVxuICAgICAgICBdXG4gICAgfSxcbiAgICB0aGVtZTogJ3Nub3cnIC8vIG9yICdidWJibGUnXG59KTtcblxuLy8gSW5pdGlhbGl6ZSBRdWlsbCBlZGl0b3Igd2l0aCBleGlzdGluZyBjb250ZW50IGZyb20gaGlkZGVuIGlucHV0XG5jb25zdCBpbml0aWFsQ29udGVudCA9ICQoJyNwcm9kdWN0LWRlc2NyaXB0aW9uJykudmFsKCk7XG5pZiAoaW5pdGlhbENvbnRlbnQpIHtcbiAgICBmdWxsRWRpdG9yLnJvb3QuaW5uZXJIVE1MID0gaW5pdGlhbENvbnRlbnQ7XG59XG5cbi8vIEFkZCB0ZXh0LWNoYW5nZSBldmVudCBsaXN0ZW5lciB0byB1cGRhdGUgZGVzY3JpcHRpb24gZmllbGRcbmZ1bGxFZGl0b3Iub24oJ3RleHQtY2hhbmdlJywgZnVuY3Rpb24oKSB7XG4gICAgY29uc3QgZGVzY3JpcHRpb24gPSBmdWxsRWRpdG9yLnJvb3QuaW5uZXJIVE1MO1xuICAgICQoJyNwcm9kdWN0LWRlc2NyaXB0aW9uJykudmFsKGRlc2NyaXB0aW9uKTtcbn0pO1xuIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBLElBQUlBLFVBQVUsR0FBRyxJQUFJQyxLQUFLLENBQUMsNkJBQTZCLEVBQUU7RUFDdERDLE9BQU8sRUFBRTtJQUNMQyxPQUFPLEVBQUUsQ0FDTCxDQUFDO01BQ0dDLE1BQU0sRUFBRSxDQUFDLENBQUMsRUFBRSxDQUFDLEVBQUUsS0FBSztJQUN4QixDQUFDLENBQUMsRUFDRixDQUFDLE1BQU0sRUFBRSxRQUFRLEVBQUUsV0FBVyxDQUFDLEVBQy9CLENBQUMsT0FBTyxFQUFFLFlBQVksQ0FBQztFQUUvQixDQUFDO0VBQ0RDLEtBQUssRUFBRSxNQUFNLENBQUM7QUFDbEIsQ0FBQyxDQUFDOztBQUVGO0FBQ0EsSUFBTUMsY0FBYyxHQUFHQyxDQUFDLENBQUMsc0JBQXNCLENBQUMsQ0FBQ0MsR0FBRyxFQUFFO0FBQ3RELElBQUlGLGNBQWMsRUFBRTtFQUNoQk4sVUFBVSxDQUFDUyxJQUFJLENBQUNDLFNBQVMsR0FBR0osY0FBYztBQUM5Qzs7QUFFQTtBQUNBTixVQUFVLENBQUNXLEVBQUUsQ0FBQyxhQUFhLEVBQUUsWUFBVztFQUNwQyxJQUFNQyxXQUFXLEdBQUdaLFVBQVUsQ0FBQ1MsSUFBSSxDQUFDQyxTQUFTO0VBQzdDSCxDQUFDLENBQUMsc0JBQXNCLENBQUMsQ0FBQ0MsR0FBRyxDQUFDSSxXQUFXLENBQUM7QUFDOUMsQ0FBQyxDQUFDIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3Bvc3RzL2NyZWF0ZS5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/posts/create.js\n");

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