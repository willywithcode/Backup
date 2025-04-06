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

/***/ "./resources/js/customer/home.js":
/*!***************************************!*\
  !*** ./resources/js/customer/home.js ***!
  \***************************************/
/***/ (() => {

eval("var urlParams = new URLSearchParams(window.location.search);\n$('#product-filter-form').submit(function (event) {\n  event.preventDefault();\n  urlParams[\"delete\"]('brands[]');\n  urlParams[\"delete\"]('categories[]');\n  var searchData = $(this).serializeArray();\n  searchData.forEach(function (item) {\n    console.log(item.name);\n    urlParams.append(item.name + '[]', item.value);\n  });\n  window.location.href = \"/?\".concat(urlParams.toString());\n});\n$('#clear-filter-btn').on('click', function (e) {\n  e.preventDefault();\n  window.location.href = \"/\";\n});\n\n// $('.add-to-cart').on('click', (e) => {\n//     e.preventDefault();\n//     const url = $(e.target).data('url');\n//     $.ajax({\n//         type: 'POST',\n//         url,\n//         data: {\n//             quantity: 1,\n//         },\n//         success: function(data) {\n//             $('#cart-count').html(`&nbsp;(${data})`);\n//             toastr.options.positionClass = 'toast-top-center';\n//             toastr.success('Thêm vào giỏ hàng thành công.');\n//         },\n//         error: function(e) {\n//             if (e.status === 401) {\n//                 window.location.href = '/login';\n//             }\n//         },\n//     });\n// });//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJ1cmxQYXJhbXMiLCJVUkxTZWFyY2hQYXJhbXMiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsInNlYXJjaCIsIiQiLCJzdWJtaXQiLCJldmVudCIsInByZXZlbnREZWZhdWx0Iiwic2VhcmNoRGF0YSIsInNlcmlhbGl6ZUFycmF5IiwiZm9yRWFjaCIsIml0ZW0iLCJjb25zb2xlIiwibG9nIiwibmFtZSIsImFwcGVuZCIsInZhbHVlIiwiaHJlZiIsImNvbmNhdCIsInRvU3RyaW5nIiwib24iLCJlIl0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9jdXN0b21lci9ob21lLmpzPzRlYzUiXSwic291cmNlc0NvbnRlbnQiOlsidmFyIHVybFBhcmFtcyA9IG5ldyBVUkxTZWFyY2hQYXJhbXMod2luZG93LmxvY2F0aW9uLnNlYXJjaCk7XG5cbiQoJyNwcm9kdWN0LWZpbHRlci1mb3JtJykuc3VibWl0KGZ1bmN0aW9uKGV2ZW50KSB7XG4gICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcblxuICAgIHVybFBhcmFtcy5kZWxldGUoJ2JyYW5kc1tdJyk7XG4gICAgdXJsUGFyYW1zLmRlbGV0ZSgnY2F0ZWdvcmllc1tdJyk7XG5cbiAgICB2YXIgc2VhcmNoRGF0YSA9ICQodGhpcykuc2VyaWFsaXplQXJyYXkoKTtcblxuICAgIHNlYXJjaERhdGEuZm9yRWFjaCgoaXRlbSkgPT4ge1xuICAgICAgICBjb25zb2xlLmxvZyhpdGVtLm5hbWUpO1xuICAgICAgICB1cmxQYXJhbXMuYXBwZW5kKGl0ZW0ubmFtZSArICdbXScsIGl0ZW0udmFsdWUpO1xuICAgIH0pXG5cbiAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9IGAvPyR7dXJsUGFyYW1zLnRvU3RyaW5nKCl9YDtcbn0pO1xuXG4kKCcjY2xlYXItZmlsdGVyLWJ0bicpLm9uKCdjbGljaycsIChlKSA9PiB7XG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gYC9gO1xufSk7XG5cbi8vICQoJy5hZGQtdG8tY2FydCcpLm9uKCdjbGljaycsIChlKSA9PiB7XG4vLyAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuLy8gICAgIGNvbnN0IHVybCA9ICQoZS50YXJnZXQpLmRhdGEoJ3VybCcpO1xuLy8gICAgICQuYWpheCh7XG4vLyAgICAgICAgIHR5cGU6ICdQT1NUJyxcbi8vICAgICAgICAgdXJsLFxuLy8gICAgICAgICBkYXRhOiB7XG4vLyAgICAgICAgICAgICBxdWFudGl0eTogMSxcbi8vICAgICAgICAgfSxcbi8vICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24oZGF0YSkge1xuLy8gICAgICAgICAgICAgJCgnI2NhcnQtY291bnQnKS5odG1sKGAmbmJzcDsoJHtkYXRhfSlgKTtcbi8vICAgICAgICAgICAgIHRvYXN0ci5vcHRpb25zLnBvc2l0aW9uQ2xhc3MgPSAndG9hc3QtdG9wLWNlbnRlcic7XG4vLyAgICAgICAgICAgICB0b2FzdHIuc3VjY2VzcygnVGjDqm0gdsOgbyBnaeG7jyBow6BuZyB0aMOgbmggY8O0bmcuJyk7XG4vLyAgICAgICAgIH0sXG4vLyAgICAgICAgIGVycm9yOiBmdW5jdGlvbihlKSB7XG4vLyAgICAgICAgICAgICBpZiAoZS5zdGF0dXMgPT09IDQwMSkge1xuLy8gICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gJy9sb2dpbic7XG4vLyAgICAgICAgICAgICB9XG4vLyAgICAgICAgIH0sXG4vLyAgICAgfSk7XG4vLyB9KTtcbiJdLCJtYXBwaW5ncyI6IkFBQUEsSUFBSUEsU0FBUyxHQUFHLElBQUlDLGVBQWUsQ0FBQ0MsTUFBTSxDQUFDQyxRQUFRLENBQUNDLE1BQU0sQ0FBQztBQUUzREMsQ0FBQyxDQUFDLHNCQUFzQixDQUFDLENBQUNDLE1BQU0sQ0FBQyxVQUFTQyxLQUFLLEVBQUU7RUFDN0NBLEtBQUssQ0FBQ0MsY0FBYyxFQUFFO0VBRXRCUixTQUFTLFVBQU8sQ0FBQyxVQUFVLENBQUM7RUFDNUJBLFNBQVMsVUFBTyxDQUFDLGNBQWMsQ0FBQztFQUVoQyxJQUFJUyxVQUFVLEdBQUdKLENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ0ssY0FBYyxFQUFFO0VBRXpDRCxVQUFVLENBQUNFLE9BQU8sQ0FBQyxVQUFDQyxJQUFJLEVBQUs7SUFDekJDLE9BQU8sQ0FBQ0MsR0FBRyxDQUFDRixJQUFJLENBQUNHLElBQUksQ0FBQztJQUN0QmYsU0FBUyxDQUFDZ0IsTUFBTSxDQUFDSixJQUFJLENBQUNHLElBQUksR0FBRyxJQUFJLEVBQUVILElBQUksQ0FBQ0ssS0FBSyxDQUFDO0VBQ2xELENBQUMsQ0FBQztFQUVGZixNQUFNLENBQUNDLFFBQVEsQ0FBQ2UsSUFBSSxRQUFBQyxNQUFBLENBQVFuQixTQUFTLENBQUNvQixRQUFRLEVBQUUsQ0FBRTtBQUN0RCxDQUFDLENBQUM7QUFFRmYsQ0FBQyxDQUFDLG1CQUFtQixDQUFDLENBQUNnQixFQUFFLENBQUMsT0FBTyxFQUFFLFVBQUNDLENBQUMsRUFBSztFQUN0Q0EsQ0FBQyxDQUFDZCxjQUFjLEVBQUU7RUFDbEJOLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDZSxJQUFJLE1BQU07QUFDOUIsQ0FBQyxDQUFDOztBQUVGO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9jdXN0b21lci9ob21lLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/customer/home.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/customer/home.js"]();
/******/ 	
/******/ })()
;