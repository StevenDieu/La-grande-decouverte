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
    }
    if (url !== "") {
        $.ajax({
            url: url,
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
});