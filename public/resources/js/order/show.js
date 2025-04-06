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

/***/ "./resources/js/order/show.js":
/*!************************************!*\
  !*** ./resources/js/order/show.js ***!
  \************************************/
/***/ (() => {

eval("$(\"#status-select\").on(\"input\", function () {\n  var status = $(this).val();\n  var url = $(this).data('url');\n  if (status) {\n    $.ajax({\n      type: 'PUT',\n      url: url,\n      data: {\n        status: status\n      },\n      success: function success(res) {\n        toastr.success('Cập nhật trạng thái đơn hàng thành công!');\n      }\n    });\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwib24iLCJzdGF0dXMiLCJ2YWwiLCJ1cmwiLCJkYXRhIiwiYWpheCIsInR5cGUiLCJzdWNjZXNzIiwicmVzIiwidG9hc3RyIl0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9vcmRlci9zaG93LmpzPzU5ZGMiXSwic291cmNlc0NvbnRlbnQiOlsiJChcIiNzdGF0dXMtc2VsZWN0XCIpLm9uKFwiaW5wdXRcIiwgZnVuY3Rpb24gKCkge1xuICAgIGNvbnN0IHN0YXR1cyA9ICQodGhpcykudmFsKCk7XG4gICAgY29uc3QgdXJsID0gJCh0aGlzKS5kYXRhKCd1cmwnKTtcblxuICAgIGlmIChzdGF0dXMpIHtcbiAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgIHR5cGU6ICdQVVQnLFxuICAgICAgICAgICAgdXJsLFxuICAgICAgICAgICAgZGF0YToge1xuICAgICAgICAgICAgICAgIHN0YXR1cyxcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAocmVzKSB7XG4gICAgICAgICAgICAgICAgdG9hc3RyLnN1Y2Nlc3MoJ0Phuq1wIG5o4bqtdCB0cuG6oW5nIHRow6FpIMSRxqFuIGjDoG5nIHRow6BuaCBjw7RuZyEnKTtcbiAgICAgICAgICAgIH0sXG4gICAgICAgIH0pO1xuICAgIH1cbn0pO1xuIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDLGdCQUFnQixDQUFDLENBQUNDLEVBQUUsQ0FBQyxPQUFPLEVBQUUsWUFBWTtFQUN4QyxJQUFNQyxNQUFNLEdBQUdGLENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ0csR0FBRyxFQUFFO0VBQzVCLElBQU1DLEdBQUcsR0FBR0osQ0FBQyxDQUFDLElBQUksQ0FBQyxDQUFDSyxJQUFJLENBQUMsS0FBSyxDQUFDO0VBRS9CLElBQUlILE1BQU0sRUFBRTtJQUNSRixDQUFDLENBQUNNLElBQUksQ0FBQztNQUNIQyxJQUFJLEVBQUUsS0FBSztNQUNYSCxHQUFHLEVBQUhBLEdBQUc7TUFDSEMsSUFBSSxFQUFFO1FBQ0ZILE1BQU0sRUFBTkE7TUFDSixDQUFDO01BQ0RNLE9BQU8sRUFBRSxTQUFBQSxRQUFVQyxHQUFHLEVBQUU7UUFDcEJDLE1BQU0sQ0FBQ0YsT0FBTyxDQUFDLDBDQUEwQyxDQUFDO01BQzlEO0lBQ0osQ0FBQyxDQUFDO0VBQ047QUFDSixDQUFDLENBQUMiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvb3JkZXIvc2hvdy5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/order/show.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/order/show.js"]();
/******/ 	
/******/ })()
;