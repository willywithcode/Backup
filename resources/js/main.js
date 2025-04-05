// Logout button clicked
$('#logout-btn').click((e) => {
    e.preventDefault();
    $('#logout-form').submit();
});

$('#logout-btn-mobile').click((e) => {
    e.preventDefault();
    $('#logout-form-mobile').submit();
});

// Show success toast message
const message = window.localStorage.getItem('success');
if (message) {
    window.localStorage.removeItem('success');
    toastr.success(message);
}

if ($('#success-message').val()) {
    toastr.success($('#success-message').val());
}

// Search
var urlParams = new URLSearchParams(window.location.search);

if (urlParams.get('name')) {
    $('.product-search-input').val((urlParams.get('name')));
}

$('.product-search-input').keyup(function (e) {
    const keyword = $(this).val();
    urlParams.delete('name');
    urlParams.append('name', keyword);

    if (e.which === 13) {
        window.location.href = `?${urlParams.toString()}`;
    }
});

$('.product-search-btn').on('click', (e) => {
    e.preventDefault();
    window.location.href = `?${urlParams.toString()}`;
});

$(".lang-select").change(function () {
    var lang = $(this).val();
    window.location.href = `/update-language/${lang}`;
});
