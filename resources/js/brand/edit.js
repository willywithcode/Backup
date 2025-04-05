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

$('#submit-btn').on('click', (e) => {
    e.preventDefault();
    const description = fullEditor.root.innerHTML;
    $('#brand-description').val(description)
    $('#kt_ecommerce_add_brand_form').submit();
});

