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
fullEditor.root.innerHTML = $('#product-description').val();

// Dropzone product images
const productId = $('#product-id-value').val();

var myDropzone = new Dropzone("#add_product_media", {
    url: `/products/${productId}/images`,
    paramName: 'image', // The name that will be used to transfer the file
    maxFiles: 10,
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    },
    accept: function (file, done) {
        done();
    },
    removedfile: function (file) {
        $.ajax({
            type: 'DELETE',
            url: `/products/${productId}/images/${file.id}`,
            success: function (data) {
                if (file.previewElement != null && file.previewElement.parentNode != null) {
                    file.previewElement.parentNode.removeChild(file.previewElement);
                }
                return this._updateMaxFilesReachedClass();
            },
        });
    },
});

$("#discount-deadline-picker").flatpickr();

$.ajax({
    type: 'GET',
    url: `/products/${productId}/images`,
    success: function (data) {
        data.forEach((image) => {
            let mockFile = { name: 'Image', size: 1000, id: image.id };
            myDropzone.displayExistingFile(mockFile, image.link);
        });
    },
});

// Add product submit
$('#submit-btn').on('click', (e) => {
    e.preventDefault();

    if (validateProductVariants()) {
        return;
    }

    const description = fullEditor.root.innerHTML;
    $('#product-description').val(description);
    $('#kt_ecommerce_add_product_form').submit();
});

let variantId = $('#product-variant-count').val();
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
