function changementOnglet(onglet) {
    var block = onglet.data("onglet");
    $(".actif").removeClass("actif");
    onglet.addClass("actif");
    $(".active").removeClass("active");
    $("#" + block).addClass("active");
    $(".menuUtilisateur").height($(".content").height());

    chargementAjaxOnglet(block);
}

function chargementAjaxOnglet(block) {
    var url = "";
    if (block === "carnets") {
        url = urlCarnet;
    } else if (block === "compte") {
        url = urlCompte;
    }
    if (url !== "") {
        $.ajax({
            url: url,
            beforeSend: function () {
                $("#" + block).html('<div class="center" id="spinneur"><img src=" ' + urlSpiner + ' " name="spinner" alt="spinner"/></div>');
                $("#spinneur").css({"margin-top": ($(".content").height() / 2 - $("#spinneur").height() / 2 - 35) + 'px'});
            },
            success: function (result) {
                $("#" + block).html(result);
                $(".menuUtilisateur").height($(".content").height());
            }});
    }
}

$(window).load(function () {
    $(".menuUtilisateur").height($(".content").height());
    $(".menuChamp").on("click", function () {
        changementOnglet($(this));
    });
    chargementAjaxOnglet("compte")
});