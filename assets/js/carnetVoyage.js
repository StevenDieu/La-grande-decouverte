var inputTitre = new Array();

function enregistrerCarnetVoyage() {
    if ($(".titre").val() !== "" && $("#id_voyage").val() !== "") {
        $.ajax({
            type: "post",
            url: urlAddCarnetModel,
            data: "titre=" + $(".titre").val() + "&id_voyage=" + $("#id_voyage").val(),
            success: function (result) {
                $('#popUpAdd').modal("hide");
                if (result !== "0") {
                    message(urlSucces, "Carnet ajouté avec succés");
                    var id;
                    var resultTable = $(".divTable").find(".hideTable").size();
                    if (resultTable !== 0) {
                        $(".hideTable").removeClass("hideTable");
                        $(".showText").addClass("hideTable");
                        id = 1;
                    } else {
                        id = parseInt($('.table-carnet tbody>tr:last td:first').html()) + 1;
                    }
                    $(".table-carnet > tbody:last").append("<tr><td class='tdPetithauteur'>" + id + "</td><td> "
                            + '<input type="text" class="form-control inputTitreCarnetVoyage" id ="' + result + '" placeholder="Titre voyage"  value="' + $(".titre").val() + '" />'
                            + '<span class="glyphiHide ' + result + '">'
                            + '<a class="glyphicon_input editCarnetVoyage" data-id="' + result + '"><span class="glyphicon glyphicon-ok" ></span></a>'
                            + '<a class="glyphicon_input redoTitreCarnetVoyage" data-id="' + result + '"><span class="glyphicon glyphicon-repeat"></span></a>'
                            + '</span></td><td class="tdPetitGlaphi">'
                            + "<a data-id='" + result + "' class='editArticle'><span class='glyphicon glyphicon-pencil'></span></a>"
                            + "</td><td class='tdPetitGlaphi'>"
                            + "<a class='deleteCarnetVoyage' data-id='" + result + "'><span class='glyphicon glyphicon-trash'></span></a>"
                            + "</td>"
                            + '<td class="tdPetitGlaphi">'
                            + '<a target="_BLANK" href="' + urlviewCarnet + '?id=' + result + '"><span class="glyphicon glyphicon-list-alt"></span></a>'
                            + '</td>'
                            + '<td class="tdPetitGlaphi">'
                            + '<span class="curserPointer"><img class="locked" data-id="' + result + '" data-lock="0" src="' + ImageUnlock + '" alt="unlock"/></span>'
                            + '</td>'
                            + '</tr>');
                    clickButton();
                } else {
                    message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
                }
            }});
    } else {
        if ($(".titre").val() === "" && $("#id_voyage").val() === "") {
            $(".form-titre").addClass("has-error");
            $(".form-voyage").addClass("has-error");
            setTimeout(function () {
                $(".form-titre").removeClass("has-error");
                $(".form-voyage").removeClass("has-error");
            }, 5000);
        } else if ($(".titre").val() === "") {
            $(".form-titre").addClass("has-error");
            setTimeout(function () {
                $(".form-titre").removeClass("has-error");
            }, 5000);
        } else {
            $(".form-voyage").addClass("has-error");
            setTimeout(function () {
                $(".form-voyage").removeClass("has-error");
            }, 5000);
        }
    }
}

function editCarnetVoyage(bouton) {
    if ($("#" + bouton.data("id")).val() !== "") {
        $.ajax({
            type: "post",
            url: urlEditCarnet,
            data: "id=" + bouton.data("id") + "&titre=" + $("#" + bouton.data("id")).val(),
            success: function (result) {
                if (result !== "0") {
                    message(urlSucces, "Carnet modifié avec succés.");
                    inputTitre[bouton.data("id")] = $("#" + bouton.data("id")).val();
                    $("." + bouton.data("id")).addClass("glyphiHide");
                } else {
                    message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
                }
            }});
    } else {
        message(urlError, "Le champ titre ne doit pas être vide.");
    }

}
function deleteCarnetVoyage(bouton) {
    var id_voyage = bouton.data("id");
    $.ajax({
        type: "post",
        url: urlDeleteCarnet,
        data: "id=" + id_voyage,
        success: function (result) {
            if (result === "1") {
                message(urlSucces, "Carnet supprimé avec succés.");
                bouton.parent().parent().remove();
            } else if (result === "-1") {
                message(urlError, "Il reste des articles dans votre carnet");
            } else {
                message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
            }
        }});
}

function verificationInputTitre(input) {
    if (inputTitre[input.attr("id")] !== input.val()) {
        $("." + input.attr("id")).removeClass("glyphiHide");
    } else {
        $("." + input.attr("id")).addClass("glyphiHide");
    }

}

function editArticles(id) {
    chargementAjaxOnglet("listArticle", "idCarnet=" + id);
}

function setPrive(button) {
    var parent = button.parent();
    $.ajax({
        type: "post",
        url: urlSetPrive,
        data: "id=" + button.data("id") + "&prive=" + button.data("lock"),
        beforeSend: function () {
            parent.html('<img class="locked" src="' + urlSpiner + '"/>');
        },
        success: function (result) {
            if (result === "1") {
                if (button.data("lock") === 1) {
                    parent.html('<img class="locked" data-id="' + button.data("id") + '" data-lock="0" src="' + ImageUnlock + '"/>');
                    message(urlSucces, "Carnet privé.");
                } else {
                    parent.html('<img class="locked" data-id="' + button.data("id") + '" data-lock="1" src="' + ImageLock + '"/>');
                    message(urlSucces, "Carnet non privé.");
                }
                $(".locked").on("click", function () {
                    setPrive($(this));
                });
            } else {
                message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
            }
        }});
}

function clickButton() {
    $(".editCarnetVoyage").on("click", function () {
        editCarnetVoyage($(this));
    });
    $(".deleteCarnetVoyage").on("click", function () {
        deleteCarnetVoyage($(this));
    });
    $(".inputTitreCarnetVoyage").keydown("click", function () {
        if (inputTitre[$(this).attr("id")] === undefined || inputTitre[$(this).attr("id")] === "") {
            inputTitre[$(this).attr("id")] = $(this).val();
        }
    });

    $(".inputTitreCarnetVoyage").keyup("click", function () {
        verificationInputTitre($(this));
    });

    $(".redoTitreCarnetVoyage").on("click", function () {
        $("#" + $(this).data("id")).val(inputTitre[$(this).data("id")]);
        $("." + $(this).data("id")).addClass("glyphiHide");
    });

    $(".editArticle").on("click", function () {
        editArticles($(this).data("id"));
    });

    $(".locked").on("click", function () {
        setPrive($(this));
    });

}

function popUpAddCarnet() {
    $.ajax({
        url: urlAddCarnet,
        success: function (result) {
            $(".modal-content").html(result);
            $(".validCarnetVoyage").on("click", function () {
                enregistrerCarnetVoyage();
            });
        }});
}

$(document).ready(function () {
    $(".buttonAjouterBoUtilisateur").on("click", function () {
        popUpAddCarnet();
    });
    clickButton();
});