$(document).ready(function(e) {
    $('li.page_item').addClass('nav-item');
    $('li.current_page_item').addClass('active');

    $('li.page_item a').addClass('nav-link');

    $('label').each(function(index, key) {
        $(this).parent().addClass('form-group');
    });

    $('textarea').addClass('form-control');
    $('input').addClass('form-control');

    $('.submit').addClass('btn');
    $('.submit').addClass('btn-primary');
});
