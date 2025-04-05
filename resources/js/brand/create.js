// Description editor
var fullEditor = new Quill('#brand-description-editor', {
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

fullEditor.root.innerHTML = $('#brand-description').val();

// Add category submit event
$('#submit-btn').on('click', (e) => {
    e.preventDefault();
    const description = fullEditor.root.innerHTML;
    $('#brand-description').val(description);
    $('#kt_ecommerce_add_brand_form').submit();
});
