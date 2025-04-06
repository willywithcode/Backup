var fullEditor = new Quill('#product-description-editor', {
    modules: {
        toolbar: [
            [{ header: [1, 2, false] }],
            ['bold', 'italic', 'underline'],
            ['image', 'code-block']
        ]
    },
    theme: 'snow' 
});

const initialContent = $('#product-description').val();
if (initialContent) {
    fullEditor.root.innerHTML = initialContent;
}

function quillHtmlToTextWithNewlines(html) {
    const tempDiv = document.createElement('div');
    tempDiv.innerHTML = html;

    tempDiv.querySelectorAll('p, br, div').forEach(el => {
        const lineBreak = document.createTextNode('\n');
        el.parentNode.insertBefore(lineBreak, el.nextSibling);
    });

    return tempDiv.textContent.replace(/\n{2,}/g, '\n').trim();
}

$('form').on('submit', function () {
    const htmlContent = fullEditor.root.innerHTML;
    const plainTextWithNewlines = quillHtmlToTextWithNewlines(htmlContent);

    $('#product-description').val(plainTextWithNewlines);
});
