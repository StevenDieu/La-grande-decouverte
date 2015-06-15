var confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
var tabImageSlider = new Array();
var sizeTabImageSlider = tabImageSlider.length + 1;

var tabImageDescription = new Array();
var sizeTabImageDescription = tabImageDescription.length + 1;

var tabImageBanniere = new Array();
var sizeTabImageBanniere = tabImageBanniere.length + 1;

var flagAddImageVoyage = true;

function addLigne() {
    $('.info_de_vente').append("<div class='ligne'><h3>Une déclinaison</h3><a href='javascript:;' class='delete_ligne'>X</a><label for='date_depart'>date_depart:</label><input type='date' id='date_depart' name='date_depart[]'/><br/><label for='date_arrivee'>date_arrivee:</label><input type='date' id='date_arrivee' name='date_arrivee[]'/><br/><label for='depart'>depart:</label><input type='text' id='depart' name='depart[]'/><br/><label for='arrivee'>arrivee:</label><input type='text' id='arrivee' name='arrivee[]'/><br/><label for='formalite'>formalite:</label><TEXTAREA NAME='formalite[]' id='formalite'> </TEXTAREA><br/><label for='asavoir'>asavoir:</label><TEXTAREA NAME='asavoir[]' id='asavoir'> </TEXTAREA><br/><label for='asavoir'>asavoir:</label><TEXTAREA NAME='asavoir[]' id='asavoir'> </TEXTAREA><br/><label for='place_dispo'>place_dispo:</label><input type='text' id='place_dispo' name='place_dispo[]'/><br/><label for='prix'>prix:</label><input type='text' id='prix' name='prix[]'/><br/><label for='special_price'>special_price:</label><input type='text' id='special_price' name='special_price[]'/><br/><label for='tva'>tva:</label><input type='text' id='tva' name='tva[]'/><br/></div>");
}

function remove_nb(tableau, id) {
    var newTab = new Array();
    for (var i = 0; i < tableau.length; i++) {
        if (tableau[i] !== id) {
            newTab.push(tableau[i]);
        }
    }
    return newTab;
}

function add_nb_array(idHtml) {
    switch (idHtml) {
        case "image_slider":
            tabImageSlider.push(sizeTabImageSlider++);
            return sizeTabImageSlider;
        case "banniere":
            tabImageBanniere.push(sizeTabImageBanniere++);
            return sizeTabImageBanniere;
        case "image_description":
            tabImageDescription.push(sizeTabImageDescription++);
            return sizeTabImageDescription;
        default:
            return -1;
    }
}

function remove_nb_array(idHtml, id) {
    switch (idHtml) {
        case "image_slider":
            tabImageSlider = remove_nb(tabImageSlider, id);
        case "banniere":
            tabImageBanniere = remove_nb(tabImageBanniere, id);
        case "image_description":
            tabImageDescription = remove_nb(tabImageDescription, id);
        default:
            return -1;
    }
}


function add_image(idHtml) {
    if (flagAddImageVoyage) {
        if ($(".titre_" + idHtml).val() !== "" && $(".image_" + idHtml).val() !== "") {
            var id = add_nb_array(idHtml);
            var data = new FormData();
            data.append('fichier', $('.image_' + idHtml)[0].files[0]);
            data.append('lien', idHtml);
            data.append('titre', $(".titre_" + idHtml).val());
            flagAddImageVoyage = false;
            $.ajax({
                url: urlAjouterImage,
                type: "POST",
                data: data,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $('#' + idHtml).modal('hide');
                    $("#content_end_" + idHtml).append('<tr><td colspan="4"><div class="center spinneur"><img src=" ' + urlSpiner + ' " name="spinner" alt="spinner"/></div></td></tr>');
                },
                success: function (result) {
                    $(".spinneur").parent().parent().remove();
                    result = JSON.parse(result)
                    if (result !== "-1") {
                        $("#content_end_" + idHtml).append
                                ('<tr>\n\
                            <td>' + sizeTabImageSlider + '</td>\n\
                            <td class="maxW115">\n\
                                <input type="text" class="titre_' + idHtml + '_' + sizeTabImageSlider + '" value="' + $(".titre_" + idHtml).val() + '" />\n\
                            </td>\n\
                            <td class="center td_image">\n\
                                <input type="hidden" class="image_' + idHtml + '_' + sizeTabImageSlider + '" name="image_' + idHtml + '_' + sizeTabImageSlider + '" value="' + result["lien"] + '"/>\n\
                                <img class="image_100" src="' + result["src"] + '" alt="' + $(".titre_" + idHtml).val() + '" />\n\
                            </td>\n\
                            <td class="center">\n\
                                <input type="button" class="btn btn-danger remove_image width_auto" value="x" data-idhtml="' + idHtml + '" data-id="' + sizeTabImageSlider + '"/>\n\
                            </td>\n\
                        </tr>');

                        $(".titre_" + idHtml).val("");
                        $('.image_' + idHtml).val("");
                        flagAddImageVoyage = true;
                        action_reload();
                    }
                }});
        }
    }
}

function remove_image(idhtml, id, button) {
    $.ajax({
        url: urlDeleteImage,
        type: "POST",
        data: "lien=" + $(".image_" + idhtml + "_" + id).val(),
        success: function () {
            remove_nb_array(idhtml, id);
            button.parent().parent().remove();
        }
    });

}

function addLigneDeroulement() {
    $('.info_deroulement').append("<div class='ligne'><h3>Une déclinaison</h3><a href='javascript:;' class='delete_ligne_deroulement'>X</a><label for='titre'>titre:</label><input type='text' id='titre' name='titrederoulement[]'/><br/><label for='texte'>texte:</label><TEXTAREA NAME='texte[]' id='texte'> </TEXTAREA><br/><label for='jour'>jour:</label><input type='text' id='jour' name='jour[]'/><br/></div>");
}

function action_reload() {
    $(".remove_image").on("click", function () {
        remove_image($(this).data("idhtml"), $(this).data("id"), $(this));
    });
}

$(document).ready(function () {
    $('.info_de_vente').on('click', '.delete_ligne', function () {
        if ($('div.ligne').length == 1) {
            alert("vous devez garder au moins une ligne");
            return false;
        }
        if (confirm(confirmation)) {
            $(this).parent().remove();
        }
    });

    $('.info_deroulement').on('click', '.delete_ligne_deroulement', function () {
        if ($('.info_deroulement div.ligne').length == 1) {
            alert("vous devez garder au moins une ligne");
            return false;
        }
        if (confirm(confirmation)) {
            $(this).parent().remove();
        }
    });

    $(".add_image").on("click", function () {
        add_image($(this).data("idhtml"));
    });
});