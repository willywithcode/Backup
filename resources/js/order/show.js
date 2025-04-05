$("#status-select").on("input", function () {
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
                toastr.success('Cập nhật trạng thái đơn hàng thành công!');
            },
        });
    }
});
