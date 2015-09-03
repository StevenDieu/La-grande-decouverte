function sendNewsletter() {


    if ($('#edit').editable('getHTML', false, false) !== "" && $('.titre').val() !== "" && $('#id').val() !== "" && $('#id_carnetvoyage').val() !== "") {
        $(".sendNewsletter").val("Envoi en cours...");
        $(".sendNewsletter").prop('onclick', null).off('click');
        var contenu = $('#edit').editable('getHTML', false, false);
        var reg = new RegExp('style', "g");
        contenu = encodeURIComponent(contenu.replace(reg, "style/"));
        $.ajax({
            type: "post",
            url: urlSendNewsletter,
            data: "contenu=" + contenu + "&titre=" + $('.titre').val(),
            success: function (result) {
                if (result === "1") {
                    $(".sendNewsletter").val("Envoyer");
                    $('#edit').editable('setHTML', '', false);
                    $('.titre').val("")
                    newsletter_action();
                    message(urlSucces, "Newsletter envoyée avec succes");
                } else {
                    message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
                }
            }});
    } else {
        if ($(".titre").val() === "" && $('#edit').editable('getHTML', false, false) === "") {
            couleurAlerteCss(".form-titre.titre", {"border": " 1px #a94442 solid"}, {"border": " 1px solid #cccccc"});
            couleurAlerteCss(".froala-view.froala-element.not-msie.f-basic", {"border": " 5px #a94442 solid", padding: "5px"}, {"border": " 0px #3c763d solid", padding: "10px"});
        } else if ($(".titre").val() === "") {
            couleurAlerteCss(".form-titre.titre", {"border": " 1px #a94442 solid"}, {"border": " 1px solid #cccccc"});
        } else {
            couleurAlerteCss(".froala-view.froala-element.not-msie.f-basic", {"border": " 5px #a94442 solid", padding: "5px"}, {"border": " 0px #3c763d solid", padding: "10px"});
        }
    }
}

function newsletter_action() {
    $(".sendNewsletter").on("click", function () {
        sendNewsletter();
    });
}

$(document).ready(function () {
    newsletter_action();
});