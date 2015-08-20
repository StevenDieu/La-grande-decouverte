function validate(element) {
    var visible = element.data("visible");
    var id = element.data("id");
    $.ajax({
        url: urlVisibleFiche,
        type: "POST",
        data: "id=" + id + "&visible=" + visible,
        beforeSend: function () {
            $(".validate" + id).children().remove();
            $(".validate" + id).append('<div class="center spinneur"><img src=" ' + urlSpiner + ' " name="spinner" alt="spinner"/></div>');
        },
        success: function (result) {
            $(".validate" + id).children().remove();
            if (result === "0") {
                message(urlError, "Une erreure c'est produite veuillez recharger la page...");
            }
            if (visible === 1) {
                $(".validate" + id).append('<span class="validate icon_click" data-visible="0" data-id="' + id + '"><span class="icon-ok"></span></span>');
            } else {
                $(".validate" + id).append('<span class="validate icon_click" data-visible="1" data-id="' + id + '"><span class="icon-remove"></span></span>');
            }
        }
    });
}


function editArticle(id) {
    if ($('#edit').editable('getHTML', false, false) !== "" && $('.titre').val() !== "" && $('#id').val() !== "" && $('#id_carnetvoyage').val() !== "") {
        var contenu = $('#edit').editable('getHTML', false, false);
        var reg = new RegExp('style', "g");
        contenu = contenu.replace(reg, "style/");
        $.ajax({
            type: "post",
            url: urlEditArticle,
            data: "contenu=" + contenu + "&titre=" + $('.titre').val() + "&id=" + id,
            success: function (result) {
                if (result === "1") {
                    couleurAlerteCss(".titre", {"border": " 1px #3c763d solid"}, {"border": "1px solid #cccccc"});
                    couleurAlerteCss(".froala-view.froala-element.not-msie.f-basic", {"border": " 7px #3c763d solid", padding: "3px"}, {"border": " 0px #3c763d solid", padding: "10px"});
                } else {
                    message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
                }
            }});
    } else {
        if ($(".titre").val() === "" && $('#edit').editable('getHTML', false, false) === "") {
            couleurAlerteCss(".titre", {"border": " 1px #a94442 solid"}, {"border": " 1px solid #cccccc"});
            couleurAlerteCss(".froala-view.froala-element.not-msie.f-basic", {"border": " 5px #a94442 solid", padding: "5px"}, {"border": " 0px #3c763d solid", padding: "10px"});
        } else if ($(".titre").val() === "") {
            couleurAlerteCss(".titre", {"border": " 1px #a94442 solid"}, {"border": " 1px solid #cccccc"});
        } else {
            couleurAlerteCss(".froala-view.froala-element.not-msie.f-basic", {"border": " 5px #a94442 solid", padding: "5px"}, {"border": " 0px #3c763d solid", padding: "10px"});
        }
    }
}

function addImage(nom, id_fichevoyage) {
    if (nom !== "" && id_fichevoyage !== "") {
        $.ajax({
            type: "post",
            url: urlAddImageFiche,
            data: "nom=" + nom + "&id_article=" + id_fichevoyage + "&id_carnet_voyage=" + id_carnet_voyage,
            success: function (result) {
                console.log(id_carnet_voyage);
            }});
    }
}

function deleteArticle(bouton) {
    var id_article = bouton.data("id");
    $.ajax({
        type: "post",
        url: urlDeleteArticle,
        data: "id=" + id_article,
        success: function (result) {
            if (result !== "0") {
                message(urlSucces, "Article supprimé avec succés.");
                bouton.parent().parent().remove();
            } else {
                message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
            }
        }});
}

$(document).ready(function () {
    $(".editArticle").on("click", function () {
        editArticle($(this).data("id"));
    });
    $(".deleteArticle").on("click", function () {
        deleteArticle($(this));
    });
    $('.action_validate').on('click', function () {
        validate($(this).children());
    });
});

$(".froala-wrapper").ready(function () {
    $(".froala-wrapper").next().remove();
})
