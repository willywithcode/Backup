$(document).on('input', '.quantity-input', function(e) {
    const quantity = $(this).val();
    const url = $(this).data('url');

    if (quantity) {
        updateCart(url, quantity);
    }
});

$(document).on('click', '.dec-btn', function(e) {
    const id = $(e.target).data('id');
    const url = $(e.target).data('url');
    const quantity = $(`#quantity-input-${id}`).val();

    if (quantity > 1) {
        $(`#quantity-input-${id}`).val(quantity - 1);
        updateCart(url, quantity - 1);
    }
});

$(document).on('click', '.inc-btn', function(e) {
    const id = $(e.target).data('id');
    const url = $(e.target).data('url');
    const quantity = Number($(`#quantity-input-${id}`).val());

    if (1) {
        $(`#quantity-input-${id}`).val(quantity + 1);
        updateCart(url, quantity + 1);
    }
});

function updateCart(url, quantity) {
    $.ajax({
        type: 'PUT',
        url,
        data: {
            quantity,
        },
        success: function(res) {
            window.location.href = '/cart';
        },
    });
}
