// Description editor
var fullEditor = new Quill('#product-description-editor', {
    modules: {
        toolbar: [
            [{
                header: [1, 2, false]
            }],
            ['bold', 'italic', 'underline'],
            ['image', 'code-block']
        ]
    },
    theme: 'snow' // or 'bubble'
});

// Product images
var images = [];

var myDropzone = new Dropzone("#add_product_media", {
    url: '#',
    paramName: 'file', // The name that will be used to transfer the file
    maxFiles: 10,
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    accept: function (file, done) {
        images.push({
            name: file.name,
            file,
        });
    }
});

$("#discount-deadline-picker").flatpickr();

let variantId = 1;
// Add product variant
$('#add-variant-btn').click(function (e) {
    e.preventDefault();
    var lastRow = $('.variant').last(); // select the last row
    var newRow = lastRow.clone(); // clone the last row
    newRow.find('input').val(''); // clear the values of the inputs in the new row
    variantId++;
    newRow.attr('id', 'variant-' + variantId);
    newRow.find('a').css({
        'opacity': 1,
        'cursor': 'pointer',
    });
    newRow.find('.variant-error-message').first().html('');
    lastRow.after(newRow); // insert the new row after the last row
});

$(document).on('click', '.remove-variant-btn', function(e) {
    e.preventDefault();
    if ($(this).css('opacity') == 1) {
        $(this).parent().parent().parent().remove();
    }
});

// Add product submit
$('#submit-btn').on('click', (e) => {
    e.preventDefault();

    if (validateProductVariants()) {
        return;
    }

    const description = fullEditor.root.innerHTML;
    $('#product-description').val(description);
    const formData = new FormData(document.getElementById('kt_ecommerce_add_product_form'));
    images.forEach((image) => {
        formData.append('images[]', image.file, image.name);
    });

    $.ajax({
        type: 'POST',
        enctype: 'multipart/form-data',
        url: '/products',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success: function () {
            window.localStorage.setItem('success', 'Thêm mới thành công!');
            window.location.href = '/products';
        },
        error: function (data) {
            if (data.status === 422) {
                $('.error-message').each(function () {
                    $(this).html('');
                    const inputElement = $(this).parent().children('input');
                    if (inputElement) {
                        inputElement.removeClass('is-invalid');
                    }
                });

                Object.entries(data.responseJSON.errors).forEach(([key, val]) => {
                    $(`#error-message-${key}`).append(`<small>${val[0]}</small>`);
                    $(`#error-message-${key}`).css('display', 'block');
                    const inputElement = $(`#error-message-${key}`).parent().children('input');
                    if (inputElement) {
                        inputElement.addClass('is-invalid');
                    }
                });
            }
        },
    });
});

function validateProductVariants() {
    $('.variant-error-message').html('');

    let hasError = false;
    $('.variant').each(function() {
        let isError = false;
        $(this).find('select').each(function() {
            if (!$(this).val()) {
                // $(this).addClass('is-invalid');
                isError = true;
                return;
            }
        });
        $(this).find('input').each(function() {
            if (!$(this).val()) {
                // $(this).addClass('is-invalid');
                isError = true;
                return;
            }
        });
        if (isError) {
            hasError = true;
            $(this).find('.variant-error-message').html(`<small>Trường bắt buộc</small>`)
        }
    });

    return hasError;
}
