function initialiseResponsiveSilide(id) {
    jQuery(function () {
        jQuery(id).responsiveSlides({
            auto: true,
            pager: false,
            timeout: 6000,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                jQuery('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                jQuery('.events').append("<li>after event fired.</li>");
            }
        });
    });
}



$(document).ready(function () {
    initialiseResponsiveSilide('#slider_top');

    $('.onglet_fiche_inner a').click(function (event) {
        event.preventDefault();
    });

    $('.onglet_mobile a').click(function (event) {
        event.preventDefault();
    });

    $(".onglet_fiche_inner a").click(function () {
        $('.contenu_onglet .contenu_fiche_onglet').hide();
        $('.onglet_fiche .onglet_fiche_inner .onglet').removeClass('active');
        $('.contenu_onglet .contenu_fiche_onglet').removeClass('active');
        $('.contenu_onglet .onglet_mobile').removeClass('active');

        $(this).parent().toggleClass('active');
        $('.contenu_onglet #' + $(this).parent().attr('id')).toggleClass('active');
        $('.contenu_onglet #' + $(this).parent().attr('id') + "mobile").toggleClass('active');
        if ($(this).parent().attr('id') == 'onglet2') {
            $('.contenu_onglet #' + $(this).parent().attr('id')).show();
            centrage();
        } else {
            $('.contenu_onglet #' + $(this).parent().attr('id')).slideDown("slow");
        }
    });

    $(".contenu_onglet .onglet_mobile a").click(function () {
        if ($('.contenu_onglet #' + $(this).parent().attr('id')).hasClass('active')) {
            $('.contenu_onglet .contenu_fiche_onglet').slideUp("slow");
            $('.contenu_onglet .onglet_mobile').removeClass('active');
            $('.contenu_onglet .contenu_fiche_onglet').removeClass('active');
            return true;
        }
        $('.contenu_onglet .contenu_fiche_onglet').hide();
        $('.contenu_onglet .onglet_mobile').removeClass('active');
        $('.contenu_onglet .contenu_fiche_onglet').removeClass('active');

        $('.contenu_onglet #' + $(this).parent().attr('id')).toggleClass('active');
        if ($(this).parent().attr('id') == 'onglet2mobile') {
            $('.contenu_onglet .' + $(this).parent().attr('id')).show();
            centrage();
        } else {
            $('.contenu_onglet .' + $(this).parent().attr('id')).slideDown("slow");
        }
    });
});
