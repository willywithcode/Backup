$(".delete-btn").click((function(t){var n=$(t.target).data("url"),c=$(t.target).data("id");Swal.fire({title:"Bạn có chắc chắn muốn xóa?",icon:"warning",buttonsStyling:!1,showCancelButton:!0,confirmButtonText:"Xác nhận",cancelButtonText:"Hủy",customClass:{confirmButton:"btn btn-danger",cancelButton:"btn btn-light"}}).then((function(t){t.isConfirmed&&$.ajax({type:"DELETE",url:n,success:function(t){$("#product-item-".concat(c)).remove(),toastr.success("Xóa thành công!")},error:function(){}})}))}));
//# sourceMappingURL=index.js.map