$(document).ready(function(e) {
    $('.navbar-nav li.page_item').addClass('nav-item');
    $('.navbar-nav li.current_page_item').addClass('active');

    $('.navbar-nav li.page_item a').addClass('nav-link');

    $('label').each(function(index, key) {
        $(this).parent().addClass('form-group');
    });

    $('textarea').addClass('form-control');
    $('input').addClass('form-control');

    $('.submit').addClass('btn');
    $('.submit').addClass('btn-primary');

    $(".attachment-post-thumbnail ").addClass("img-fluid");
});
