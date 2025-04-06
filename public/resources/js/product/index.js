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

/***/ "./resources/js/product/index.js":
/*!***************************************!*\
  !*** ./resources/js/product/index.js ***!
  \***************************************/
/***/ (() => {

eval("// Delete button clicked\n$('.delete-btn').click(function (e) {\n  var urlRequest = $(e.target).data('url');\n  var productId = $(e.target).data('id');\n  Swal.fire({\n    title: 'Bạn có chắc chắn muốn xóa?',\n    icon: 'warning',\n    buttonsStyling: false,\n    showCancelButton: true,\n    confirmButtonText: 'Xác nhận',\n    cancelButtonText: 'Hủy',\n    customClass: {\n      confirmButton: \"btn btn-danger\",\n      cancelButton: 'btn btn-light'\n    }\n  }).then(function (result) {\n    if (result.isConfirmed) {\n      $.ajax({\n        type: 'DELETE',\n        url: urlRequest,\n        success: function success(data) {\n          $(\"#product-item-\".concat(productId)).remove();\n          toastr.success('Xóa thành công!');\n        },\n        error: function error() {}\n      });\n    }\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwiY2xpY2siLCJlIiwidXJsUmVxdWVzdCIsInRhcmdldCIsImRhdGEiLCJwcm9kdWN0SWQiLCJTd2FsIiwiZmlyZSIsInRpdGxlIiwiaWNvbiIsImJ1dHRvbnNTdHlsaW5nIiwic2hvd0NhbmNlbEJ1dHRvbiIsImNvbmZpcm1CdXR0b25UZXh0IiwiY2FuY2VsQnV0dG9uVGV4dCIsImN1c3RvbUNsYXNzIiwiY29uZmlybUJ1dHRvbiIsImNhbmNlbEJ1dHRvbiIsInRoZW4iLCJyZXN1bHQiLCJpc0NvbmZpcm1lZCIsImFqYXgiLCJ0eXBlIiwidXJsIiwic3VjY2VzcyIsImNvbmNhdCIsInJlbW92ZSIsInRvYXN0ciIsImVycm9yIl0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9wcm9kdWN0L2luZGV4LmpzP2YxZTIiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gRGVsZXRlIGJ1dHRvbiBjbGlja2VkXG4kKCcuZGVsZXRlLWJ0bicpLmNsaWNrKChlKSA9PiB7XG4gICAgY29uc3QgdXJsUmVxdWVzdCA9ICQoZS50YXJnZXQpLmRhdGEoJ3VybCcpO1xuICAgIGNvbnN0IHByb2R1Y3RJZCA9ICQoZS50YXJnZXQpLmRhdGEoJ2lkJyk7XG4gICAgU3dhbC5maXJlKHtcbiAgICAgICAgdGl0bGU6ICdC4bqhbiBjw7MgY2jhuq9jIGNo4bqvbiBtdeG7kW4geMOzYT8nLFxuICAgICAgICBpY29uOiAnd2FybmluZycsXG4gICAgICAgIGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcbiAgICAgICAgc2hvd0NhbmNlbEJ1dHRvbjogdHJ1ZSxcbiAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6ICdYw6FjIG5o4bqtbicsXG4gICAgICAgIGNhbmNlbEJ1dHRvblRleHQ6ICdI4buneScsXG4gICAgICAgIGN1c3RvbUNsYXNzOiB7XG4gICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBidG4tZGFuZ2VyXCIsXG4gICAgICAgICAgICBjYW5jZWxCdXR0b246ICdidG4gYnRuLWxpZ2h0JyxcbiAgICAgICAgfVxuICAgIH0pLnRoZW4oKHJlc3VsdCkgPT4ge1xuICAgICAgICBpZiAocmVzdWx0LmlzQ29uZmlybWVkKSB7XG4gICAgICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgICAgIHR5cGU6ICdERUxFVEUnLFxuICAgICAgICAgICAgICAgIHVybDogdXJsUmVxdWVzdCxcbiAgICAgICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbihkYXRhKSB7XG4gICAgICAgICAgICAgICAgICAgICQoYCNwcm9kdWN0LWl0ZW0tJHtwcm9kdWN0SWR9YCkucmVtb3ZlKCk7XG4gICAgICAgICAgICAgICAgICAgIHRvYXN0ci5zdWNjZXNzKCdYw7NhIHRow6BuaCBjw7RuZyEnKTtcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbigpIHt9XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH0pO1xufSk7XG4iXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0FBLENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQ0MsS0FBSyxDQUFDLFVBQUNDLENBQUMsRUFBSztFQUMxQixJQUFNQyxVQUFVLEdBQUdILENBQUMsQ0FBQ0UsQ0FBQyxDQUFDRSxNQUFNLENBQUMsQ0FBQ0MsSUFBSSxDQUFDLEtBQUssQ0FBQztFQUMxQyxJQUFNQyxTQUFTLEdBQUdOLENBQUMsQ0FBQ0UsQ0FBQyxDQUFDRSxNQUFNLENBQUMsQ0FBQ0MsSUFBSSxDQUFDLElBQUksQ0FBQztFQUN4Q0UsSUFBSSxDQUFDQyxJQUFJLENBQUM7SUFDTkMsS0FBSyxFQUFFLDRCQUE0QjtJQUNuQ0MsSUFBSSxFQUFFLFNBQVM7SUFDZkMsY0FBYyxFQUFFLEtBQUs7SUFDckJDLGdCQUFnQixFQUFFLElBQUk7SUFDdEJDLGlCQUFpQixFQUFFLFVBQVU7SUFDN0JDLGdCQUFnQixFQUFFLEtBQUs7SUFDdkJDLFdBQVcsRUFBRTtNQUNUQyxhQUFhLEVBQUUsZ0JBQWdCO01BQy9CQyxZQUFZLEVBQUU7SUFDbEI7RUFDSixDQUFDLENBQUMsQ0FBQ0MsSUFBSSxDQUFDLFVBQUNDLE1BQU0sRUFBSztJQUNoQixJQUFJQSxNQUFNLENBQUNDLFdBQVcsRUFBRTtNQUNwQnBCLENBQUMsQ0FBQ3FCLElBQUksQ0FBQztRQUNIQyxJQUFJLEVBQUUsUUFBUTtRQUNkQyxHQUFHLEVBQUVwQixVQUFVO1FBQ2ZxQixPQUFPLEVBQUUsU0FBQUEsUUFBU25CLElBQUksRUFBRTtVQUNwQkwsQ0FBQyxrQkFBQXlCLE1BQUEsQ0FBa0JuQixTQUFTLEVBQUcsQ0FBQ29CLE1BQU0sRUFBRTtVQUN4Q0MsTUFBTSxDQUFDSCxPQUFPLENBQUMsaUJBQWlCLENBQUM7UUFDckMsQ0FBQztRQUNESSxLQUFLLEVBQUUsU0FBQUEsTUFBQSxFQUFXLENBQUM7TUFDdkIsQ0FBQyxDQUFDO0lBQ047RUFDSixDQUFDLENBQUM7QUFDTixDQUFDLENBQUMiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcHJvZHVjdC9pbmRleC5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/product/index.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/product/index.js"]();
/******/ 	
/******/ })()
;