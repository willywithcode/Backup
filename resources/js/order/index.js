var urlParams = new URLSearchParams(window.location.search);

const from = urlParams.get('from');
const to = urlParams.get('to');
const keywordFilter = urlParams.get('keyword');
const statusFilter = urlParams.get('status');
const totalFilter = urlParams.get('total');

if (keywordFilter) {
    $('.keyword-filter').val(keywordFilter);
}

if (statusFilter) {
    $('.status-filter').val(statusFilter);
} else {
    $('.status-filter').val('-1');
}

if (totalFilter) {
    $('.total-filter').val(totalFilter);
} else {
    $('.total-filter').val('-1');
}

$('.status-filter').on('input', function () {
    const statusValue = $(this).val();

    if (statusValue && statusValue !== '-1') {
        urlParams.delete('status');
        urlParams.append('status', statusValue);
        window.location.href = `/orders?${urlParams.toString()}`;
    }

    if (statusValue === '-1') {
        urlParams.delete('status');
        window.location.href = `/orders?${urlParams.toString()}`;
    }
});

$('.total-filter').on('input', function () {
    const totalValue = $(this).val();

    if (totalValue && totalValue !== '-1') {
        urlParams.delete('total');
        urlParams.append('total', totalValue);
        window.location.href = `/orders?${urlParams.toString()}`;
    }

    if (totalValue === '-1') {
        urlParams.delete('total');
        window.location.href = `/orders?${urlParams.toString()}`;
    }
});

$('.keyword-filter').keyup (function (e) {
    const keyword = $(this).val();
    urlParams.delete('keyword');
    urlParams.append('keyword', keyword);

    if (e.which === 13) {
        window.location.href = `/orders?${urlParams.toString()}`;
    }
});

$('.cancel-btn').click((e) => {
    const url = $(e.target).data('url');
    const id = $(e.target).data('id');
    Swal.fire({
        title: 'Bạn có chắc chắn muốn huỷ đơn hàng?',
        icon: 'warning',
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: 'Xác nhận',
        cancelButtonText: 'Hủy thao tác',
        customClass: {
            confirmButton: "btn btn-danger",
            cancelButton: 'btn btn-light',
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'DELETE',
                url,
                success: function(data) {
                    window.localStorage.setItem('success', 'Huỷ đơn hàng thành công!');
                    window.location.href = '/orders';
                },
            });
        }
    });
});

$('.confirm-btn').click((e) => {
    const url = $(e.target).data('url');

    $.ajax({
        type: 'PUT',
        url,
        data: {
            status: 'confirmed',
        },
        success: function (res) {
            window.localStorage.setItem('success', 'Xác nhận đơn hàng thành công!');
            window.location.href = '/orders';
        },
    });
});

$('.status-select').on('input', function () {
    const status = $(this).val();
    const url = $(this).data('url');

    if (status) {
        $.ajax({
            type: 'PUT',
            url,
            data: {
                status,
            },
            success: function (res) {
                window.localStorage.setItem('success', 'Cập nhật trạng thái đơn hàng thành công!');
                window.location.href = '/orders';
            },
        });
    }
});

// Class definition
var KTAppEcommerceSalesListing = function () {
    // Shared variables
    var table;
    var datatable;
    var flatpickr;
    var minDate, maxDate;

    // Private functions
    var initDatatable = function () {
        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            "info": false,
            'order': [],
            'pageLength': 10,
            'columnDefs': [
                { orderable: false, targets: 6 }, // Disable ordering on column 7 (actions)
            ]
        });

        // Re-init functions on datatable re-draws
        datatable.on('draw', function () {
            handleDeleteRows();
        });
    }

    // Init flatpickr --- more info :https://flatpickr.js.org/getting-started/
    var initFlatpickr = () => {
        const element = document.querySelector('#kt_ecommerce_sales_flatpickr');
        flatpickr = $(element).flatpickr({
            altInput: true,
            altFormat: "d/m/Y",
            dateFormat: "Y-m-d",
            defaultDate: [from, to],
            locale: {
                rangeSeparator: ' - ',
            },
            mode: "range",
            onChange: function (selectedDates, dateStr, instance) {
                handleFlatpickr(selectedDates, dateStr, instance);
            },
        });
    }

    // Handle flatpickr --- more info: https://flatpickr.js.org/events/
    var handleFlatpickr = (selectedDates, dateStr, instance) => {
        const dates = dateStr.split(' - ');
        minDate = dates[0] ?? null;
        maxDate = dates[1] ?? null;

        if (minDate && maxDate) {
            urlParams.delete('from');
            urlParams.delete('to');
            urlParams.append('from', minDate);
            urlParams.append('to', maxDate);

            window.location.href = `/orders?${urlParams.toString()}`;
        }

        if (!minDate && !maxDate) {
            urlParams.delete('from');
            urlParams.delete('to');

            window.location.href = `/orders?${urlParams.toString()}`;
        }
    }

    // Handle clear flatpickr
    var handleClearFlatpickr = () => {
        const clearButton = document.querySelector('#kt_ecommerce_sales_flatpickr_clear');
        clearButton.addEventListener('click', e => {
            flatpickr.clear();
        });
    }

    // Delete cateogry
    var handleDeleteRows = () => {
        // Select all delete buttons
        const deleteButtons = table.querySelectorAll('[data-kt-ecommerce-order-filter="delete_row"]');

        deleteButtons.forEach(d => {
            // Delete button on click
            d.addEventListener('click', function (e) {
                e.preventDefault();

                // Select parent row
                const parent = e.target.closest('tr');

                // Get category name
                const orderID = parent.querySelector('[data-kt-ecommerce-order-filter="order_id"]').innerText;

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: "Are you sure you want to delete order: " + orderID + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function (result) {
                    if (result.value) {
                        Swal.fire({
                            text: "You have deleted " + orderID + "!.",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        }).then(function () {
                            // Remove current row
                            datatable.row($(parent)).remove().draw();
                        });
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: orderID + " was not deleted.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        });
                    }
                });
            })
        });
    }


    // Public methods
    return {
        init: function () {
            table = document.querySelector('#kt_ecommerce_sales_table');

            if (!table) {
                return;
            }

            initDatatable();
            initFlatpickr();
            handleDeleteRows();
            handleClearFlatpickr();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAppEcommerceSalesListing.init();
});
