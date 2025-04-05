$('.status-select').on('input', function (e) {
    const status = $(this).val();
    const url = $(this).data('url');

    if (status) {
        $.ajax({
            type: 'PUT',
            url,
            data: {
                status,
            },
            success: function () {
                toastr.success('Cập nhật trạng thái thành công!');
            },
        });
    }
});

// Datatable
var table = document.querySelector('#kt_ecommerce_products_table');;
var datatable;

datatable = $(table).DataTable({
    "info": false,
    'order': [],
    'pageLength': 10,
    'columnDefs': [
        { orderable: false, targets: 4 }, // Disable ordering on column 7 (actions)
    ]
});

const filterSearch = document.querySelector('[data-kt-ecommerce-product-filter="search"]');
filterSearch.addEventListener('keyup', function (e) {
    datatable.search(e.target.value).draw();
});
