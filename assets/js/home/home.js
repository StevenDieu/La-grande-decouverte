var sizeForMap;

function searchSizeWindowsForMap() {
    $(".displayMapSize").css({"visibility": "visible"});
    if ($(window).innerWidth() >= 960) {
        sizeForMap = 960;
    } else if ($(window).innerWidth() <= 650) {
        $(".displayMapSize").css({"visibility": "hidden"});
    } else if ($(window).innerWidth() <= 750) {
        sizeForMap = 540;
    } else if ($(window).innerWidth() <= 850) {
        sizeForMap = 650;
    } else if ($(window).innerWidth() <= 960) {
        sizeForMap = 750;
    }
}


function rezizeMap() {
    searchSizeWindowsForMap();
    if ($("#map-continents").attr('class') !== "m" + sizeForMap) {
        $("#map-continents").removeAttr("class");
        $("#map-continents").addClass("css-map-container m" + sizeForMap);
    }
    $(".map").height($(".callbacks_container ").height());
    $(".css-map-container").css({"top": (($(".callbacks_container").height() / 2) - ($(".continents ").height() / 2)) + "px"});
}

function accelere(nombreDeRepete, nombreDeReppetition) {
    if (nombreDeRepete <= nombreDeReppetition / 1.25) {
        return 5;
    } else if (nombreDeRepete <= nombreDeReppetition / 2) {
        return 3;
    } else if (nombreDeRepete <= nombreDeReppetition / 4) {
        return 1;
    }
}


function aggradirLetireur(classString, concatenation, compilateur, sens, nombreDeReppetition, nombreDeRepete, acceleration, concatenationFleche, compilateurFleche) {
    concatenation = concatenation - compilateur;
    $("." + classString).css({"top": (sens * concatenation) + "px"});
    if (classString === 'blurpMenu') {
        concatenationFleche = concatenationFleche - compilateurFleche;
        $(".btn--top_text").css({"top": concatenationFleche + "px"});
    }
    if (nombreDeRepete <= nombreDeReppetition) {
        nombreDeRepete++;
        acceleration = accelere(nombreDeRepete, nombreDeReppetition);
        setTimeout(function () {
            aggradirLetireur(classString, concatenation, compilateur, sens, nombreDeReppetition, nombreDeRepete, acceleration, concatenationFleche, compilateurFleche);
        }, acceleration);
    }

}


function afficherCacherMap(afficher) {
    if (afficher === 1) {
        $(".divLeTireurTop").css({"top": -130 + "px"});
        $(".divLeTireurBottom").addClass("rotate180");
    }
    $(".map").slideToggle("slow", function () {
        var nombreDeReppetition = 50;
        if (afficher === 0) {
            aggradirLetireur("divLeTireurTop", 130, ((130 - 82) / nombreDeReppetition), -1, nombreDeReppetition, 0, 7, null, null);
        } else {
            $(".divLeTireurBottom").removeClass("rotate180");
            $(".blurpMenu").css({"top": 108 + "px"});
            $(".btn--top_text").css({"top": 108 + "px"});
            aggradirLetireur("blurpMenu", 108, ((108 - 59) / nombreDeReppetition), 1, nombreDeReppetition, 0, 7, 65, ((65 - 36) / nombreDeReppetition));
        }
    });


}
$(window).load(function () {

    $('.btn--top_text').click(function () {
        afficherCacherMap(0);
        $('.divLeTireurVoyage').css({"display":"block"});
    });
    $('.btn--top_textRetour').click(function () {
        afficherCacherMap(1);
        $('.divLeTireurVoyage').css({"display":"none"});
    });
    sizeForMap = searchSizeWindowsForMap();
    $(window).resize(function () {
        rezizeMap();
    });
    rezizeMap();

    $(".voyage").mouseenter(function () {
        $(this).find('.bloc_description').stop(true,true).slideUp();
        $(this).find('.bloc_description').slideDown("fast");
    });

    $('.voyage').mouseleave(function () {
        $(this).find('.bloc_description').stop(true,true).slideDown();
        $(this).find('.bloc_description').slideUp("fast");
    });



});


        $(window).load(function(){
            //Initialisation des variables
            var thumbnail = {
                effectDuration : 400
            };

            //Quand le curseur survol l'image...
            $('.carnet_voyages ul li').hover(function(){
                //Montre la légende utilisant l'événement slideDown
                $(this).find('.legende:not(:animated)').slideDown(thumbnail.effectDuration);
                $(this).find('.titre_sans_hover').hide();
            //Quand le curseur ne survol plus la zone...
            }, function(){
                //Cache la légende utilisant l'événement slideUp
                $(this).find('.legende').slideUp(thumbnail.effectDuration);
                $(this).find('.titre_sans_hover').show();
            });
            
        });