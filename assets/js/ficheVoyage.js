function longueurTraitVerticale() {
    nombreBloc = $(".content_fiche_voyage").find(".blocVoyage").size()
    longueurBloc = $(".blocVoyage").height();
    $(".traiVerticalePoitiller").height((longueurBloc + 85) * nombreBloc + 50);
}


function addComment() {
    $(".addComment").prop('onclick', null).off('click');
    $(".addComment").val("CHARGEMENT ...");

    $.ajax({
        type: "post",
        url: urlAddComment,
        data: "name=" + $('.name').val() + "&mail=" + $('.mail').val() + "&commentaire=" + $('.commentaire').val().split("\n").join('<br/>') + "&id_article=" + $(".id_article").val(),
        success: function (result) {
            if (result >= '1') {
                $(".list_comment").prepend(
                        '<div class="comment">' +
                        '<div class="titre_comment">' +
                        '   <span class="name_comment">' + $('.name').val() + '</span><span class="hour_comment"> à l\'instant</span>' +
                        '</div>' +
                        '<div class="texte_comment">' +
                        $(".commentaire").val().split("\n").join('<br/>') +
                        '</div>' +

                        '</div>');
                clear_comment();
            } else {
                message(urlError, "Veuillez recharger la page !")
                $("body").animate({scrollTop: ($('.alertType').next().offset().top) - 80}, 500, 'easeInOutCubic');

            }
            on_click_js();
            $(".addComment").val("ENVOYER");


        },
        error: function (result) {

            message(urlError, "Veuillez recharger la page !")
            $("body").animate({scrollTop: ($('.alertType').offset().top)}, 500, 'easeInOutCubic');

            on_click_js();
            $(".addComment").val("ENVOYER");

        }
    });
}

function on_click_js() {
    $(".addComment").on("click", function () {

        $('.form_add_comment span.mess_required').remove();
        $('.form_add_comment .failed').removeClass("failed");
        var submit = true;
        $('.form_add_comment .required').each(function () {
            if ($(this).val() == '') {
                $($(this).parent()).append(mess_required);
                $($(this)).toggleClass('failed');
                submit = false;
            }
        });
        var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
        if (submit) {
            if (!reg.test($('.mail').val())) {
                $($('.mail').parent()).append("<span class='mess_required'>Ceci n'est pas un email</span>");
                $('.mail').toggleClass('failed');
                submit = false;
            }
        }


        if (submit) {
            addComment();
        }

    });
}

function getNextPage(numPage) {
    $(".list_comment").append('<div class="center spinneur"><img src=" ' + urlSpiner + ' " name="spinner" alt="spinner"/></div>');

    $.ajax({
        type: "post",
        url: urlGetComments,
        data: "pageComment=" + numPage + "&id_article=" + $(".id_article").val(),
        success: function (result) {
            if (result !== '0') {
                $("body").animate({scrollTop: ($('.addComment').offset().top) - 30}, 500, 'easeInOutCubic');
                $(".active").removeClass("active")
                $(".page-" + numPage).addClass("active")
                $(".list_comment").empty();
                var allComment = JSON.parse(result);
                for (var i = (parseInt(allComment["nbr_comment_page"])-1); i >= 0 ; i--) {
                    $(".list_comment").prepend(
                            '<div class="comment">' +
                            '<div class="titre_comment">' +
                            '   <span class="name_comment">' + allComment["name"][i] + '</span><span class="hour_comment">' + allComment["date_creation"][i] + '</span>' +
                            '</div>' +
                            '<div class="texte_comment">' +
                            allComment["commentaire"][i] +
                            '</div>' +
                            '<div class="button_signal" >' +
                            '    <a data-id="' + allComment["id"][i] + '" class="comment_signal">' +
                            '        SIGNALER' +
                            '    </a>' +
                            '</div>' +
                            '</div>');
                }

            } else {
                $(".list_comment").empty();
                message(urlError, "Veuillez recharger la page !")
            }
        },
    });
}

function signalComment(text_signal) {
    text_signal.html("Chargement...");

    $.ajax({
        type: "post",
        url: urlSignalComment,
        data: "id_comment=" + text_signal.data("id"),
        success: function (result) {
            if (result !== '0') {
                text_signal.parent().html("Commentaire signaler");

            } else {
                message(urlError, "Veuillez recharger la page !")
                $("body").animate({scrollTop: ($('.alertType').next().offset().top) - 80}, 500, 'easeInOutCubic');
            }
        },
    });
}

function clear_comment() {
    $('.name').val("");
    $('.mail').val("");
    $('.commentaire').val("");
}

$(window).load(function () {
    on_click_js();
    longueurTraitVerticale();

    $(".comment_signal").on("click", function () {
        signalComment($(this));
    });

    $(".casePage").on("click", function () {
        getNextPage($(this).data("page"));
    });

});