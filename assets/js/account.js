function changementOnglet(onglet) {
    var block = onglet.data("onglet");
    $(".actif").removeClass("actif");
    onglet.addClass("actif");
    $(".menuUtilisateur").height($(".content").height());

    chargementAjaxOnglet(block);
}

function chargementAjaxOnglet(block, tableauVariable) {
    var url = "";
    if (block === "carnets") {
        url = urlCarnet;
    } else if (block === "comptes") {
        url = urlCompte;
    } else if (block === "listArticle") {
        $(".carnets").addClass("actif");
        url = urlListeArticle;
    } else if (block === "editArticle") {
        $(".carnets").addClass("actif");
        url = urlViewEditArticle;
    } else if (block === "addArticle") {
        $(".carnets").addClass("actif");
        url = urlViewAddArticle;
    }
    if (url !== "") {
        $.ajax({
            url: url,
            type: "post",
            data: tableauVariable,
            beforeSend: function () {
                $("#compte").html('<div class="center" id="spinneur"><img src=" ' + urlSpiner + ' " name="spinner" alt="spinner"/></div>');
                $("#spinneur").css({"margin-top": ($(".content").height() / 2 - $("#spinneur").height() / 2 - 35) + 'px'});
            },
            success: function (result) {
                if (result === "co") {
                    document.location.href = urlReconnect;
                } else {
                    if (tableauVariable !== undefined) {
                        document.location.hash = block + "?" + tableauVariable;
                    } else {
                        document.location.hash = block;
                    }
                    $("#compte").html(result);
                    $(".menuUtilisateur").height($(".content").height());
                }

            }});
    }
}

function getParamUrl(param) {
    var tableau = document.location.hash.substring(1, document.location.hash.length).split(new RegExp("[?]", "g"));
    var tableau2 = tableau[1].split(new RegExp("[&]", "g"));
    for (var i = 0; i < tableau2.length; i++) {
        if (tableau2[i].indexOf(param) !== -1) {
            var tableau3 = tableau2[i].split(new RegExp("[=]", "g"));
            return tableau3[1];
        }
    }
}

function chargementPagePremier() {
    if (document.location.hash !== "") {
        var variable = document.location.hash;
        var page = variable.substring(1, variable.length);
        if (page.indexOf("?") === -1) {
            $("." + page).addClass("actif");
            chargementAjaxOnglet(page);
        } else {
            var reg = new RegExp("[?]", "g");
            var tableau = page.split(reg);
            chargementAjaxOnglet(tableau[0], tableau[1]);
        }
    } else {
        $(".comptes").addClass("actif");
        chargementAjaxOnglet("comptes");
    }
}

$(window).load(function () {
    chargementPagePremier();
    $(".menuUtilisateur").height($(".content").height());
    $(".menuChamp").on("click", function () {
        changementOnglet($(this));
    });

});