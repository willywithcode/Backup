var urlParams = new URLSearchParams(window.location.search);

$('#product-filter-form').submit(function(event) {
    event.preventDefault();

    urlParams.delete('brands[]');
    urlParams.delete('categories[]');

    var searchData = $(this).serializeArray();

    searchData.forEach((item) => {
        console.log(item.name);
        urlParams.append(item.name + '[]', item.value);
    })

    window.location.href = `/?${urlParams.toString()}`;
});

$('#clear-filter-btn').on('click', (e) => {
    e.preventDefault();
    window.location.href = `/`;
});

// $('.add-to-cart').on('click', (e) => {
//     e.preventDefault();
//     const url = $(e.target).data('url');
//     $.ajax({
//         type: 'POST',
//         url,
//         data: {
//             quantity: 1,
//         },
//         success: function(data) {
//             $('#cart-count').html(`&nbsp;(${data})`);
//             toastr.options.positionClass = 'toast-top-center';
//             toastr.success('Thêm vào giỏ hàng thành công.');
//         },
//         error: function(e) {
//             if (e.status === 401) {
//                 window.location.href = '/login';
//             }
//         },
//     });
// });
