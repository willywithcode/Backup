var fullEditor = new Quill('#category-description-editor', {
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

fullEditor.root.innerHTML = $('#category-description').val();

$('#submit-btn').on('click', (e) => {
    e.preventDefault();
    const description = fullEditor.root.innerHTML;
    $('#category-description').val(description)
    $('#kt_ecommerce_add_category_form').submit();
});

