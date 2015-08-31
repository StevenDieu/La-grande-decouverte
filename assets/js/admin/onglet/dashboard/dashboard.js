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


    $(".container_dash .bloc_commande.price table tr.ligne").click(function () {
        var id = $(this).data('id');
        window.location = "<?php echo base_url() ?>admin/orders/edit?id=" + id;
    });

    $("#menu1 tr.ligne").click(function () {
        var id = $(this).data('id');
        window.location = "<?php echo base_url() ?>admin/voyages/edit?id=" + id;
    });

    $("#menu2 tr.ligne").click(function () {
        var id = $(this).data('id');
        window.location = "<?php echo base_url() ?>admin/customer/liste/edit/" + id;
    });

    $("#menu3 tr.ligne").click(function () {
        var id = $(this).data('id');
        window.location = "<?php echo base_url() ?>admin/newsletters/liste/read/" + id;
    });

    $(".clear_pictures").click(function () {
        clearPicture();
    });

});


