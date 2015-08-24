var inputTitre = new Array();

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

$(document).ready(function () {

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

});