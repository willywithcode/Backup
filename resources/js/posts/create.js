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

// Initialize Quill editor with existing content from hidden input
const initialContent = $('#product-description').val();
if (initialContent) {
    fullEditor.root.innerHTML = initialContent;
}

// Add text-change event listener to update description field
fullEditor.on('text-change', function() {
    const description = fullEditor.root.innerHTML;
    $('#product-description').val(description);
});
