function editArticle(id) {
    if ($('#edit').editable('getHTML', false, false) !== "" && $('#titre').val() !== "" && $('#id').val() !== "" && $('#id_carnetvoyage').val() !== "") {
        var contenu = $('#edit').editable('getHTML', false, false);
        var reg = new RegExp('style', "g");
        contenu = contenu.replace(reg, "style/");
        $.ajax({
            type: "post",
            url: urlEditArticle,
            data: "contenu=" + contenu + "&titre=" + $('#titre').val() + "&id=" + id,
            success: function (result) {
                if (result === "1") {
                    couleurAlerteClass(".form-titre", "has-success");
                    couleurAlerteCss(".froala-view.froala-element.not-msie.f-basic", {"border": " 7px #3c763d solid", padding: "3px"}, {"border": " 0px #3c763d solid", padding: "10px"});
                } else {
                    message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
                }
            }});
    } else {
        if ($("#titre").val() === "" && $('#edit').editable('getHTML', false, false) === "") {
            couleurAlerteClass(".form-titre", "has-error");
            couleurAlerteCss(".froala-view.froala-element.not-msie.f-basic", {"border": " 5px #a94442 solid", padding: "5px"}, {"border": " 0px #3c763d solid", padding: "10px"});
        } else if ($("#titre").val() === "") {
            couleurAlerteClass(".form-titre", "has-error");
        } else {
            couleurAlerteCss(".froala-view.froala-element.not-msie.f-basic", {"border": " 5px #a94442 solid", padding: "5px"}, {"border": " 0px #3c763d solid", padding: "10px"});
        }
    }
}
function addArticle() {
    if ($('#edit').editable('getHTML', false, false) !== "" && $('#titre').val() !== "") {
        var contenu = $('#edit').editable('getHTML', false, false);
        var reg = new RegExp('style', "g");
        contenu = contenu.replace(reg, "style/");
        $.ajax({
            type: "post",
            url: urlAddArticle,
            data: "contenu=" + contenu + "&titre=" + $('#titre').val() + "&id_carnet_voyage=" + id_carnet_voyage,
            success: function (result) {
                if (result !== "0") {
                    returnListArticle("Article ajouté avec succés");
                } else {
                    message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
                }
            }});
    } else {
        if ($("#titre").val() === "" && $('#edit').editable('getHTML', false, false) === "") {
            couleurAlerteClass(".form-titre", "has-error");
            couleurAlerteCss(".froala-view.froala-element.not-msie.f-basic", {"border": " 5px #a94442 solid", padding: "5px"}, {"border": " 0px #3c763d solid", padding: "10px"});
        } else if ($("#titre").val() === "") {
            couleurAlerteClass(".form-titre", "has-error");
        } else {
            couleurAlerteCss(".froala-view.froala-element.not-msie.f-basic", {"border": " 5px #a94442 solid", padding: "5px"}, {"border": " 0px #3c763d solid", padding: "10px"});
        }
    }
}


function popUpAddArticle() {
    $.ajax({
        type: "get",
        url: urlViewAddArticle,
        data: "id_carnet_voyage=" + id_carnet_voyage,
        success: function (result) {
            if (result == "0") {
                message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
            } else {
                $("#carnets").html(result);
            }
        }});
}
function popUpEditArticle(id) {
    $.ajax({
        type: "get",
        url: urlViewEditArticle,
        data: "id=" + id,
        success: function (result) {
            if (result === "0") {
                message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
            } else {
                $("#carnets").html(result);
            }
        }
    });
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

function returnListArticle(messageText) {
    $.ajax({
        type: "post",
        url: urlListeArticle,
        data: "id=" + id_carnet_voyage,
        success: function (result) {
            if (result !== "0") {
                $("#carnets").html(result);
                if (message !== "") {
                    message(urlSucces, messageText);
                }
            } else {
                message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
            }
        }});
}
$(document).ready(function () {
    $('#editArticle').click(function () {
        editArticle();
    });
    $(".buttonAjouterArticle").on("click", function () {
        popUpAddArticle();
    });
    $(".buttonEditArticle").on("click", function () {
        popUpEditArticle($(this).data("id"));
    });

    $(".retourListArticle").on("click", function () {
        returnListArticle("");
    });
    $(".validArticle").on("click", function () {
        addArticle();
    });
    $(".editArticle").on("click", function () {
        editArticle($(this).data("id"));
    });
    $(".deleteArticle").on("click", function () {
        deleteArticle($(this));
    });

    $(".retourListCarnet").on("click", function () {
        chargementAjaxOnglet("carnets");
    });

});


