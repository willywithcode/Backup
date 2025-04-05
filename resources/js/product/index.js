// Delete button clicked
$('.delete-btn').click((e) => {
    const urlRequest = $(e.target).data('url');
    const productId = $(e.target).data('id');
    Swal.fire({
        title: 'Bạn có chắc chắn muốn xóa?',
        icon: 'warning',
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: 'Xác nhận',
        cancelButtonText: 'Hủy',
        customClass: {
            confirmButton: "btn btn-danger",
            cancelButton: 'btn btn-light',
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'DELETE',
                url: urlRequest,
                success: function(data) {
                    $(`#product-item-${productId}`).remove();
                    toastr.success('Xóa thành công!');
                },
                error: function() {}
            });
        }
    });
});
