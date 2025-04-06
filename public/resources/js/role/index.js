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

/***/ "./resources/js/role/index.js":
/*!************************************!*\
  !*** ./resources/js/role/index.js ***!
  \************************************/
/***/ (() => {

eval("// Delete button clicked\n$('.delete-btn').click(function (e) {\n  var urlRequest = $(e.target).data('url');\n  var id = $(e.target).data('id');\n  Swal.fire({\n    title: 'Bạn có chắc chắn muốn xóa?',\n    icon: 'warning',\n    buttonsStyling: false,\n    showCancelButton: true,\n    confirmButtonText: 'Xác nhận',\n    cancelButtonText: 'Hủy',\n    customClass: {\n      confirmButton: \"btn btn-danger\",\n      cancelButton: 'btn btn-light'\n    }\n  }).then(function (result) {\n    if (result.isConfirmed) {\n      $.ajax({\n        type: 'DELETE',\n        url: urlRequest,\n        success: function success(data) {\n          $(\"#role-item-\".concat(id)).remove();\n          toastr.success('Xóa thành công!');\n        },\n        error: function error() {}\n      });\n    }\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwiY2xpY2siLCJlIiwidXJsUmVxdWVzdCIsInRhcmdldCIsImRhdGEiLCJpZCIsIlN3YWwiLCJmaXJlIiwidGl0bGUiLCJpY29uIiwiYnV0dG9uc1N0eWxpbmciLCJzaG93Q2FuY2VsQnV0dG9uIiwiY29uZmlybUJ1dHRvblRleHQiLCJjYW5jZWxCdXR0b25UZXh0IiwiY3VzdG9tQ2xhc3MiLCJjb25maXJtQnV0dG9uIiwiY2FuY2VsQnV0dG9uIiwidGhlbiIsInJlc3VsdCIsImlzQ29uZmlybWVkIiwiYWpheCIsInR5cGUiLCJ1cmwiLCJzdWNjZXNzIiwiY29uY2F0IiwicmVtb3ZlIiwidG9hc3RyIiwiZXJyb3IiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3JvbGUvaW5kZXguanM/MDZmYiJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBEZWxldGUgYnV0dG9uIGNsaWNrZWRcbiQoJy5kZWxldGUtYnRuJykuY2xpY2soKGUpID0+IHtcbiAgICBjb25zdCB1cmxSZXF1ZXN0ID0gJChlLnRhcmdldCkuZGF0YSgndXJsJyk7XG4gICAgY29uc3QgaWQgPSAkKGUudGFyZ2V0KS5kYXRhKCdpZCcpO1xuICAgIFN3YWwuZmlyZSh7XG4gICAgICAgIHRpdGxlOiAnQuG6oW4gY8OzIGNo4bqvYyBjaOG6r24gbXXhu5FuIHjDs2E/JyxcbiAgICAgICAgaWNvbjogJ3dhcm5pbmcnLFxuICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXG4gICAgICAgIHNob3dDYW5jZWxCdXR0b246IHRydWUsXG4gICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiAnWMOhYyBuaOG6rW4nLFxuICAgICAgICBjYW5jZWxCdXR0b25UZXh0OiAnSOG7p3knLFxuICAgICAgICBjdXN0b21DbGFzczoge1xuICAgICAgICAgICAgY29uZmlybUJ1dHRvbjogXCJidG4gYnRuLWRhbmdlclwiLFxuICAgICAgICAgICAgY2FuY2VsQnV0dG9uOiAnYnRuIGJ0bi1saWdodCcsXG4gICAgICAgIH1cbiAgICB9KS50aGVuKChyZXN1bHQpID0+IHtcbiAgICAgICAgaWYgKHJlc3VsdC5pc0NvbmZpcm1lZCkge1xuICAgICAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgICAgICB0eXBlOiAnREVMRVRFJyxcbiAgICAgICAgICAgICAgICB1cmw6IHVybFJlcXVlc3QsXG4gICAgICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24oZGF0YSkge1xuICAgICAgICAgICAgICAgICAgICAkKGAjcm9sZS1pdGVtLSR7aWR9YCkucmVtb3ZlKCk7XG4gICAgICAgICAgICAgICAgICAgIHRvYXN0ci5zdWNjZXNzKCdYw7NhIHRow6BuaCBjw7RuZyEnKTtcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbigpIHt9XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH0pO1xufSk7XG4iXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0FBLENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQ0MsS0FBSyxDQUFDLFVBQUNDLENBQUMsRUFBSztFQUMxQixJQUFNQyxVQUFVLEdBQUdILENBQUMsQ0FBQ0UsQ0FBQyxDQUFDRSxNQUFNLENBQUMsQ0FBQ0MsSUFBSSxDQUFDLEtBQUssQ0FBQztFQUMxQyxJQUFNQyxFQUFFLEdBQUdOLENBQUMsQ0FBQ0UsQ0FBQyxDQUFDRSxNQUFNLENBQUMsQ0FBQ0MsSUFBSSxDQUFDLElBQUksQ0FBQztFQUNqQ0UsSUFBSSxDQUFDQyxJQUFJLENBQUM7SUFDTkMsS0FBSyxFQUFFLDRCQUE0QjtJQUNuQ0MsSUFBSSxFQUFFLFNBQVM7SUFDZkMsY0FBYyxFQUFFLEtBQUs7SUFDckJDLGdCQUFnQixFQUFFLElBQUk7SUFDdEJDLGlCQUFpQixFQUFFLFVBQVU7SUFDN0JDLGdCQUFnQixFQUFFLEtBQUs7SUFDdkJDLFdBQVcsRUFBRTtNQUNUQyxhQUFhLEVBQUUsZ0JBQWdCO01BQy9CQyxZQUFZLEVBQUU7SUFDbEI7RUFDSixDQUFDLENBQUMsQ0FBQ0MsSUFBSSxDQUFDLFVBQUNDLE1BQU0sRUFBSztJQUNoQixJQUFJQSxNQUFNLENBQUNDLFdBQVcsRUFBRTtNQUNwQnBCLENBQUMsQ0FBQ3FCLElBQUksQ0FBQztRQUNIQyxJQUFJLEVBQUUsUUFBUTtRQUNkQyxHQUFHLEVBQUVwQixVQUFVO1FBQ2ZxQixPQUFPLEVBQUUsU0FBQUEsUUFBU25CLElBQUksRUFBRTtVQUNwQkwsQ0FBQyxlQUFBeUIsTUFBQSxDQUFlbkIsRUFBRSxFQUFHLENBQUNvQixNQUFNLEVBQUU7VUFDOUJDLE1BQU0sQ0FBQ0gsT0FBTyxDQUFDLGlCQUFpQixDQUFDO1FBQ3JDLENBQUM7UUFDREksS0FBSyxFQUFFLFNBQUFBLE1BQUEsRUFBVyxDQUFDO01BQ3ZCLENBQUMsQ0FBQztJQUNOO0VBQ0osQ0FBQyxDQUFDO0FBQ04sQ0FBQyxDQUFDIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3JvbGUvaW5kZXguanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/role/index.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/role/index.js"]();
/******/ 	
/******/ })()
;