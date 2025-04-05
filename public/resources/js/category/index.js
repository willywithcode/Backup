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

eval("// Delete button clicked\n$('.delete-btn').click(function (e) {\n  var urlRequest = $(e.target).data('url');\n  var categoryId = $(e.target).data('id');\n  Swal.fire({\n    title: 'Bạn có chắc chắn muốn xóa?',\n    icon: 'warning',\n    buttonsStyling: false,\n    showCancelButton: true,\n    confirmButtonText: 'Xác nhận',\n    cancelButtonText: 'Hủy',\n    customClass: {\n      confirmButton: \"btn btn-danger\",\n      cancelButton: 'btn btn-light'\n    }\n  }).then(function (result) {\n    if (result.isConfirmed) {\n      $.ajax({\n        type: 'DELETE',\n        url: urlRequest,\n        success: function success(data) {\n          $(\"#category-item-\".concat(categoryId)).remove();\n          toastr.success('Xóa thành công!');\n        },\n        error: function error() {}\n      });\n    }\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvY2F0ZWdvcnkvaW5kZXguanMuanMiLCJuYW1lcyI6WyIkIiwiY2xpY2siLCJlIiwidXJsUmVxdWVzdCIsInRhcmdldCIsImRhdGEiLCJjYXRlZ29yeUlkIiwiU3dhbCIsImZpcmUiLCJ0aXRsZSIsImljb24iLCJidXR0b25zU3R5bGluZyIsInNob3dDYW5jZWxCdXR0b24iLCJjb25maXJtQnV0dG9uVGV4dCIsImNhbmNlbEJ1dHRvblRleHQiLCJjdXN0b21DbGFzcyIsImNvbmZpcm1CdXR0b24iLCJjYW5jZWxCdXR0b24iLCJ0aGVuIiwicmVzdWx0IiwiaXNDb25maXJtZWQiLCJhamF4IiwidHlwZSIsInVybCIsInN1Y2Nlc3MiLCJjb25jYXQiLCJyZW1vdmUiLCJ0b2FzdHIiLCJlcnJvciJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2NhdGVnb3J5L2luZGV4LmpzPzc5OGMiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gRGVsZXRlIGJ1dHRvbiBjbGlja2VkXG4kKCcuZGVsZXRlLWJ0bicpLmNsaWNrKChlKSA9PiB7XG4gICAgY29uc3QgdXJsUmVxdWVzdCA9ICQoZS50YXJnZXQpLmRhdGEoJ3VybCcpO1xuICAgIGNvbnN0IGNhdGVnb3J5SWQgPSAkKGUudGFyZ2V0KS5kYXRhKCdpZCcpO1xuICAgIFN3YWwuZmlyZSh7XG4gICAgICAgIHRpdGxlOiAnQuG6oW4gY8OzIGNo4bqvYyBjaOG6r24gbXXhu5FuIHjDs2E/JyxcbiAgICAgICAgaWNvbjogJ3dhcm5pbmcnLFxuICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXG4gICAgICAgIHNob3dDYW5jZWxCdXR0b246IHRydWUsXG4gICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiAnWMOhYyBuaOG6rW4nLFxuICAgICAgICBjYW5jZWxCdXR0b25UZXh0OiAnSOG7p3knLFxuICAgICAgICBjdXN0b21DbGFzczoge1xuICAgICAgICAgICAgY29uZmlybUJ1dHRvbjogXCJidG4gYnRuLWRhbmdlclwiLFxuICAgICAgICAgICAgY2FuY2VsQnV0dG9uOiAnYnRuIGJ0bi1saWdodCcsXG4gICAgICAgIH1cbiAgICB9KS50aGVuKChyZXN1bHQpID0+IHtcbiAgICAgICAgaWYgKHJlc3VsdC5pc0NvbmZpcm1lZCkge1xuICAgICAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgICAgICB0eXBlOiAnREVMRVRFJyxcbiAgICAgICAgICAgICAgICB1cmw6IHVybFJlcXVlc3QsXG4gICAgICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24oZGF0YSkge1xuICAgICAgICAgICAgICAgICAgICAkKGAjY2F0ZWdvcnktaXRlbS0ke2NhdGVnb3J5SWR9YCkucmVtb3ZlKCk7XG4gICAgICAgICAgICAgICAgICAgIHRvYXN0ci5zdWNjZXNzKCdYw7NhIHRow6BuaCBjw7RuZyEnKTtcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbigpIHt9XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH0pO1xufSk7XG4iXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0FBLENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQ0MsS0FBSyxDQUFDLFVBQUNDLENBQUMsRUFBSztFQUMxQixJQUFNQyxVQUFVLEdBQUdILENBQUMsQ0FBQ0UsQ0FBQyxDQUFDRSxNQUFNLENBQUMsQ0FBQ0MsSUFBSSxDQUFDLEtBQUssQ0FBQztFQUMxQyxJQUFNQyxVQUFVLEdBQUdOLENBQUMsQ0FBQ0UsQ0FBQyxDQUFDRSxNQUFNLENBQUMsQ0FBQ0MsSUFBSSxDQUFDLElBQUksQ0FBQztFQUN6Q0UsSUFBSSxDQUFDQyxJQUFJLENBQUM7SUFDTkMsS0FBSyxFQUFFLDRCQUE0QjtJQUNuQ0MsSUFBSSxFQUFFLFNBQVM7SUFDZkMsY0FBYyxFQUFFLEtBQUs7SUFDckJDLGdCQUFnQixFQUFFLElBQUk7SUFDdEJDLGlCQUFpQixFQUFFLFVBQVU7SUFDN0JDLGdCQUFnQixFQUFFLEtBQUs7SUFDdkJDLFdBQVcsRUFBRTtNQUNUQyxhQUFhLEVBQUUsZ0JBQWdCO01BQy9CQyxZQUFZLEVBQUU7SUFDbEI7RUFDSixDQUFDLENBQUMsQ0FBQ0MsSUFBSSxDQUFDLFVBQUNDLE1BQU0sRUFBSztJQUNoQixJQUFJQSxNQUFNLENBQUNDLFdBQVcsRUFBRTtNQUNwQnBCLENBQUMsQ0FBQ3FCLElBQUksQ0FBQztRQUNIQyxJQUFJLEVBQUUsUUFBUTtRQUNkQyxHQUFHLEVBQUVwQixVQUFVO1FBQ2ZxQixPQUFPLEVBQUUsU0FBQUEsUUFBU25CLElBQUksRUFBRTtVQUNwQkwsQ0FBQyxtQkFBQXlCLE1BQUEsQ0FBbUJuQixVQUFVLEVBQUcsQ0FBQ29CLE1BQU0sRUFBRTtVQUMxQ0MsTUFBTSxDQUFDSCxPQUFPLENBQUMsaUJBQWlCLENBQUM7UUFDckMsQ0FBQztRQUNESSxLQUFLLEVBQUUsU0FBQUEsTUFBQSxFQUFXLENBQUM7TUFDdkIsQ0FBQyxDQUFDO0lBQ047RUFDSixDQUFDLENBQUM7QUFDTixDQUFDLENBQUMifQ==\n//# sourceURL=webpack-internal:///./resources/js/category/index.js\n");

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