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

/***/ "./resources/js/category/index.js":
/*!****************************************!*\
  !*** ./resources/js/category/index.js ***!
  \****************************************/
/***/ (() => {

eval("// Delete button clicked\n$('.delete-btn').click(function (e) {\n  var urlRequest = $(e.target).data('url');\n  var categoryId = $(e.target).data('id');\n  Swal.fire({\n    title: 'Bạn có chắc chắn muốn xóa?',\n    icon: 'warning',\n    buttonsStyling: false,\n    showCancelButton: true,\n    confirmButtonText: 'Xác nhận',\n    cancelButtonText: 'Hủy',\n    customClass: {\n      confirmButton: \"btn btn-danger\",\n      cancelButton: 'btn btn-light'\n    }\n  }).then(function (result) {\n    if (result.isConfirmed) {\n      $.ajax({\n        type: 'DELETE',\n        url: urlRequest,\n        success: function success(data) {\n          $(\"#category-item-\".concat(categoryId)).remove();\n          toastr.success('Xóa thành công!');\n        },\n        error: function error() {}\n      });\n    }\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwiY2xpY2siLCJlIiwidXJsUmVxdWVzdCIsInRhcmdldCIsImRhdGEiLCJjYXRlZ29yeUlkIiwiU3dhbCIsImZpcmUiLCJ0aXRsZSIsImljb24iLCJidXR0b25zU3R5bGluZyIsInNob3dDYW5jZWxCdXR0b24iLCJjb25maXJtQnV0dG9uVGV4dCIsImNhbmNlbEJ1dHRvblRleHQiLCJjdXN0b21DbGFzcyIsImNvbmZpcm1CdXR0b24iLCJjYW5jZWxCdXR0b24iLCJ0aGVuIiwicmVzdWx0IiwiaXNDb25maXJtZWQiLCJhamF4IiwidHlwZSIsInVybCIsInN1Y2Nlc3MiLCJjb25jYXQiLCJyZW1vdmUiLCJ0b2FzdHIiLCJlcnJvciJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvY2F0ZWdvcnkvaW5kZXguanM/Nzk4YyJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBEZWxldGUgYnV0dG9uIGNsaWNrZWRcbiQoJy5kZWxldGUtYnRuJykuY2xpY2soKGUpID0+IHtcbiAgICBjb25zdCB1cmxSZXF1ZXN0ID0gJChlLnRhcmdldCkuZGF0YSgndXJsJyk7XG4gICAgY29uc3QgY2F0ZWdvcnlJZCA9ICQoZS50YXJnZXQpLmRhdGEoJ2lkJyk7XG4gICAgU3dhbC5maXJlKHtcbiAgICAgICAgdGl0bGU6ICdC4bqhbiBjw7MgY2jhuq9jIGNo4bqvbiBtdeG7kW4geMOzYT8nLFxuICAgICAgICBpY29uOiAnd2FybmluZycsXG4gICAgICAgIGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcbiAgICAgICAgc2hvd0NhbmNlbEJ1dHRvbjogdHJ1ZSxcbiAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6ICdYw6FjIG5o4bqtbicsXG4gICAgICAgIGNhbmNlbEJ1dHRvblRleHQ6ICdI4buneScsXG4gICAgICAgIGN1c3RvbUNsYXNzOiB7XG4gICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBidG4tZGFuZ2VyXCIsXG4gICAgICAgICAgICBjYW5jZWxCdXR0b246ICdidG4gYnRuLWxpZ2h0JyxcbiAgICAgICAgfVxuICAgIH0pLnRoZW4oKHJlc3VsdCkgPT4ge1xuICAgICAgICBpZiAocmVzdWx0LmlzQ29uZmlybWVkKSB7XG4gICAgICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgICAgIHR5cGU6ICdERUxFVEUnLFxuICAgICAgICAgICAgICAgIHVybDogdXJsUmVxdWVzdCxcbiAgICAgICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbihkYXRhKSB7XG4gICAgICAgICAgICAgICAgICAgICQoYCNjYXRlZ29yeS1pdGVtLSR7Y2F0ZWdvcnlJZH1gKS5yZW1vdmUoKTtcbiAgICAgICAgICAgICAgICAgICAgdG9hc3RyLnN1Y2Nlc3MoJ1jDs2EgdGjDoG5oIGPDtG5nIScpO1xuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgZXJyb3I6IGZ1bmN0aW9uKCkge31cbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfSk7XG59KTtcbiJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQUEsQ0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDQyxLQUFLLENBQUMsVUFBQ0MsQ0FBQyxFQUFLO0VBQzFCLElBQU1DLFVBQVUsR0FBR0gsQ0FBQyxDQUFDRSxDQUFDLENBQUNFLE1BQU0sQ0FBQyxDQUFDQyxJQUFJLENBQUMsS0FBSyxDQUFDO0VBQzFDLElBQU1DLFVBQVUsR0FBR04sQ0FBQyxDQUFDRSxDQUFDLENBQUNFLE1BQU0sQ0FBQyxDQUFDQyxJQUFJLENBQUMsSUFBSSxDQUFDO0VBQ3pDRSxJQUFJLENBQUNDLElBQUksQ0FBQztJQUNOQyxLQUFLLEVBQUUsNEJBQTRCO0lBQ25DQyxJQUFJLEVBQUUsU0FBUztJQUNmQyxjQUFjLEVBQUUsS0FBSztJQUNyQkMsZ0JBQWdCLEVBQUUsSUFBSTtJQUN0QkMsaUJBQWlCLEVBQUUsVUFBVTtJQUM3QkMsZ0JBQWdCLEVBQUUsS0FBSztJQUN2QkMsV0FBVyxFQUFFO01BQ1RDLGFBQWEsRUFBRSxnQkFBZ0I7TUFDL0JDLFlBQVksRUFBRTtJQUNsQjtFQUNKLENBQUMsQ0FBQyxDQUFDQyxJQUFJLENBQUMsVUFBQ0MsTUFBTSxFQUFLO0lBQ2hCLElBQUlBLE1BQU0sQ0FBQ0MsV0FBVyxFQUFFO01BQ3BCcEIsQ0FBQyxDQUFDcUIsSUFBSSxDQUFDO1FBQ0hDLElBQUksRUFBRSxRQUFRO1FBQ2RDLEdBQUcsRUFBRXBCLFVBQVU7UUFDZnFCLE9BQU8sRUFBRSxTQUFBQSxRQUFTbkIsSUFBSSxFQUFFO1VBQ3BCTCxDQUFDLG1CQUFBeUIsTUFBQSxDQUFtQm5CLFVBQVUsRUFBRyxDQUFDb0IsTUFBTSxFQUFFO1VBQzFDQyxNQUFNLENBQUNILE9BQU8sQ0FBQyxpQkFBaUIsQ0FBQztRQUNyQyxDQUFDO1FBQ0RJLEtBQUssRUFBRSxTQUFBQSxNQUFBLEVBQVcsQ0FBQztNQUN2QixDQUFDLENBQUM7SUFDTjtFQUNKLENBQUMsQ0FBQztBQUNOLENBQUMsQ0FBQyIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9jYXRlZ29yeS9pbmRleC5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/category/index.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/category/index.js"]();
/******/ 	
/******/ })()
;