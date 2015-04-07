function  clickContenuOnglet(element) {
    $('.contenu_onglet .contenu_fiche_onglet').hide();
    $('.onglet_fiche .onglet_fiche_inner .onglet').removeClass('active');
    $('.contenu_onglet .contenu_fiche_onglet').removeClass('active');
    $('.contenu_onglet .onglet_mobile').removeClass('active');

    $(element).parent().toggleClass('active');
    $('.contenu_onglet #' + $(element).parent().attr('id')).toggleClass('active');
    $('.contenu_onglet #' + $(element).parent().attr('id') + "mobile").toggleClass('active');
    if ($(element).parent().attr('id') == 'onglet2') {
        $('.contenu_onglet #' + $(element).parent().attr('id')).show();
        centrage();
    } else {
        $('.contenu_onglet #' + $(element).parent().attr('id')).slideDown("slow");
    }
}

function  clickContenuOngletMobile(element) {
    if ($('.contenu_onglet #' + $(element).parent().attr('id')).hasClass('active')) {
        $('.contenu_onglet .contenu_fiche_onglet').hide();
        $('.contenu_onglet .onglet_mobile').removeClass('active');
        $('.contenu_onglet .contenu_fiche_onglet').removeClass('active');
        return true;
    }
    $('.contenu_onglet .contenu_fiche_onglet').hide();
    $('.contenu_onglet .onglet_mobile').removeClass('active');
    $('.contenu_onglet .contenu_fiche_onglet').removeClass('active');

    $('.contenu_onglet #' + $(element).parent().attr('id')).toggleClass('active');
    if ($(element).parent().attr('id') == 'onglet2mobile') {
        $('.contenu_onglet .' + $(element).parent().attr('id')).show();
        centrage();
    } else {
        $('.contenu_onglet .' + $(element).parent().attr('id')).show();
    }

}

//centre la map google
function centrage() {
    if(typeof map != "undefined"){
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
    }      
}


$( document ).ready(function() {
    $('#onglet2').click(function() {
      if(typeof map == "undefined"){
        initialize();
      }
    });

    $('#onglet2mobile').click(function() {
      if(typeof map == "undefined"){
        initialize();
      }
    });

    $(".onglet_fiche_inner a").click(function () {
        clickContenuOnglet(this);
    });

    $(".contenu_onglet .onglet_mobile a").click(function () {
        clickContenuOngletMobile(this);
    });

    $('.onglet_fiche_inner a').click(function (event) {
        event.preventDefault();
    });

    $('.onglet_mobile a').click(function (event) {
        event.preventDefault();
    });

    initialiseResponsiveSilide('#slidercarnet1');
    
});
