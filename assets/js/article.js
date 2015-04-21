function editArticle() {
    if ($('#edit').editable('getHTML', true, true) !== "" && $('#titre').val() !== "" && $('#id').val() !== "" && $('#id_carnetvoyage').val() !== "") {
        var contenu = $('#edit').editable('getHTML', false, false);
        var reg = new RegExp('style', "g");
        var contenu = contenu.replace(reg, "style/");
        $.ajax({
            type: "post",
            url: url,
            data: "contenu=" + contenu + "&titre=" + $('#titre').val() + "&id=" + $('#id').val() + "&id_carnetvoyage=" + $('#id_carnetvoyage').val(),
            success: function (result) {
                if (result === "1") {
                    message(urlSucces, "Article édité avec succès");
                    $(".froala-view.froala-element.not-msie.f-basic").stop(true);
                    $(".froala-view.froala-element.not-msie.f-basic").css({"border": " 7px #3c763d solid", padding: "3px"});
                    setTimeout(function () {
                        $(".froala-view.froala-element.not-msie.f-basic").css({"border": "solid 0px #252525", padding: "10px"})
                    }, 2000);
                } else {
                    message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
                }
            }});
    } else {
        message(urlError, "Les champs ne doivent pas être vide.");
    }
}

function addArticle() {
    if ($('#edit').editable('getHTML', true, true) !== "" && $('#titre').val() !== "" && $('#id').val() !== "" && $('#id_carnetvoyage').val() !== "") {
        $.ajax({
            type: "post",
            url: url,
            data: "contenu=" + encodeURIComponent($('#edit').editable('getHTML', true, true)) + "&titre=" + $('#titre').val() + "&id_carnetvoyage=" + $('#id_carnetvoyage').val(),
            success: function (result) {
                if (result === "1") {
                    message(urlSucces, "Article édité avec succès");
                } else {
                    message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
                }
            }});
    } else {
        message(urlError, "Les champs ne doivent pas être vide.");
    }
}



$(document).ready(function () {
    $('#editArticle').click(function () {
        editArticle();
    });
    $('#addArticle').click(function () {
        addArticle();
    });
    $('#edit').editable(
            {
                inlineMode: false,
                language: 'fr',
                imageUploadURL: urlUpload,
                imageUploadParams: {
                    id: 'edit'
                },
                imageDeleteURL: urlDelete
            }
    ).on('editable.imageDeleteSuccess', function () {
        editArticle();
    });
});


