function clearPicture() {
    $(".clear_pictures").val("Nettoyage en cours...");
    $(".clear_pictures").prop('onclick', null).off('click');
    $.ajax({
        type: "post",
        url: urlClearPicture,
        success: function () {
            $(".clear_pictures").val("Nettoyage terminé");
        }});
}


$(document).ready(function () {
    $(".container_dash .bloc_commande.price table tr.ligne").hover(
            function () {
                $(this).addClass("hover");
            }, function () {
        $(this).removeClass("hover");
    }
    );

    $(".container_dash .bloc_commande table tr.ligne").hover(
            function () {
                $(this).addClass("hover");
            }, function () {
        $(this).removeClass("hover");
    }
    );

    $(".clear_pictures").click(function () {
        clearPicture();
    });

});


