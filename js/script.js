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

    // Maak het functieoverzicht ook leesbaar op mobiel door het te transfomeren naar en UL (ga ervanuit dat er 3 regels zijn, met 6 kolommen)
    if ($(window).width() < 960) {
        var $htmlOrganisatieListOutput = '<ul>';
        var $insertHere0 = '';
        var $insertHere1_0 = '';
        var $insertHere1_1 = '';
        var $insertHere1_2 = '';
        var $insertHere1_3 = '';
        var $insertHere1_4 = '';
        var $insertHere1_5 = '';
        $(".functie-overzicht .row").each(function (index, key) {
            if (index == 0) {
                $(this).children().each(function() { 
                    $htmlOrganisatieListOutput = $htmlOrganisatieListOutput + '<li>' + $(this).html() + '<ul>__INSERTHERE_0</ul>' + '</li>';
                });
            }
            else if (index == 1) {
                $(this).children().each(function(index2, key2) { 
                    $insertHere0 = $insertHere0 + '<li>' + $(this).html() + '<ul>__INSERTHERE_1_' + index2 + '</ul></li>';
                });
            }
            else if (index == 2) {
                $(this).children().each(function(index2, key2) { 
                    if (index2 == 0) {
                        $insertHere1_0 = $insertHere1_0 + '<li>' + $(this).html().replace(/<br>/g, '</li><li>').replace(/<br\/>/g, '</li><li>') + '</li>';
                    }
                    if (index2 == 1) {
                        $insertHere1_1 = $insertHere1_1 + '<li>' + $(this).html().replace(/<br>/g, '</li><li>').replace(/<br\/>/g, '</li><li>') + '</li>';
                    }
                    if (index2 == 2) {
                        $insertHere1_2 = $insertHere1_2 + '<li>' + $(this).html().replace(/<br>/g, '</li><li>').replace(/<br\/>/g, '</li><li>') + '</li>';
                    }
                    if (index2 == 3) {
                        $insertHere1_3 = $insertHere1_3 + '<li>' + $(this).html().replace(/<br>/g, '</li><li>').replace(/<br\/>/g, '</li><li>') + '</li>';
                    }
                    if (index2 == 4) {
                        $insertHere1_4 = $insertHere1_4 + '<li>' + $(this).html().replace(/<br>/g, '</li><li>').replace(/<br\/>/g, '</li><li>') + '</li>';
                    }
                    if (index2 == 5) {
                        $insertHere1_5 = $insertHere1_5 + '<li>' + $(this).html().replace(/<br>/g, '</li><li>').replace(/<br\/>/g, '</li><li>') + '</li>';
                    }
                });
            }
        });

        $insertHere0 = $insertHere0.replace('__INSERTHERE_1_0', $insertHere1_0);
        $insertHere0 = $insertHere0.replace('__INSERTHERE_1_1', $insertHere1_1);
        $insertHere0 = $insertHere0.replace('__INSERTHERE_1_2', $insertHere1_2);
        $insertHere0 = $insertHere0.replace('__INSERTHERE_1_3', $insertHere1_3);
        $insertHere0 = $insertHere0.replace('__INSERTHERE_1_4', $insertHere1_4);
        $insertHere0 = $insertHere0.replace('__INSERTHERE_1_5', $insertHere1_5);
        $htmlOrganisatieListOutput = $htmlOrganisatieListOutput.replace('__INSERTHERE_0', $insertHere0);
        $htmlOrganisatieListOutput = $htmlOrganisatieListOutput.replace(/- /g, '');
        $htmlOrganisatieListOutput = $htmlOrganisatieListOutput.replace(/\/ /g, '/');
        $htmlOrganisatieListOutput = $htmlOrganisatieListOutput + '</ul>';

        $(".functie-overzicht").html($htmlOrganisatieListOutput);
    }
});
