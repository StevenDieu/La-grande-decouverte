var confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
var tabImageSlider = new Array();
var sizeTabImageSlider = tabImageSlider.length + 1;

var tabImageDescription = new Array();
var sizeTabImageDescription = tabImageDescription.length + 1;

var tabImageBanniere = new Array();
var sizeTabImageBanniere = tabImageBanniere.length + 1;

var tabImagePicto = new Array();

var flagAddImageVoyage = true;

function addLigne() {
    $('.info_de_vente').append('<br/><div class="ligne"><a href="javascript:;" class="delete_ligne btn btn-danger floatRight"><i class="icon-remove"></i></a>' + $(".ligne_info_vente").html() + '</div>');
}

function addLigneDeroulement() {
    $('.info_deroulement').append('<br/><div class="ligne"><a href="javascript:;" class="delete_ligne_deroulement btn btn-danger floatRight"><i class="icon-remove"></i></a>' + $(".ligne_info_deroulement").html() + '</div>');
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
                                <input type="hidden" class="image_' + idHtml + '_' + sizeTabImageSlider + '" name="image_' + idHtml + '[]" value="' + result["lien"] + '"/>\n\
                                <img class="image_100" src="' + result["src"] + '" alt="' + $(".titre_" + idHtml).val() + '" />\n\
                            </td>\n\
                            <td class="center">\n\
                                <input type="button" class="btn btn-danger remove_image width_auto" value="x" data-idhtml="' + idHtml + '" data-id="' + sizeTabImageSlider + '"/>\n\
                            </td>\n\
                        </tr>');

                        $(".titre_" + idHtml).val("");
                        $('.image_' + idHtml).val("");
                        $('.text_' + idHtml).val("");
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

function add_picto(img) {
    img.addClass("remove_picto");
    img.addClass("img_picto_selected");
    img.removeClass("add_picto");
    img.parent().children('span').removeClass("hidden");

    tabImagePicto.push(img.data("id"));
    $(".picto_hidden").val(tabImagePicto);

    img.unbind("click");
    img.on("click", function () {
        remove_picto($(this));
    });
}

function remove_picto(img) {
    img.removeClass("remove_picto");
    img.removeClass("img_picto_selected");
    img.addClass("add_picto");
    img.parent().children('span').addClass("hidden");

    tabImagePicto = remove_nb(tabImagePicto, img.data("id"));
    $(".picto_hidden").val(tabImagePicto);

    img.unbind("click");
    img.on("click", function () {
        add_picto($(this));
    });
}



function action_reload() {
    $(".remove_image").on("click", function () {
        remove_image($(this).data("idhtml"), $(this).data("id"), $(this));
    });
}


$(document).ready(function () {
    $('.info_de_vente').on('click', '.delete_ligne', function () {
        if (confirm(confirmation)) {
            $(this).parent().remove();
        }
    });

    $('.info_deroulement').on('click', '.delete_ligne_deroulement', function () {
        if (confirm(confirmation)) {
            $(this).parent().remove();
        }
    });

    $(".add_image").on("click", function () {
        add_image($(this).data("idhtml"));
    });
    $(".add_picto").on("click", function () {
        add_picto($(this));
    });

    $(".remove_picto").on("click", function () {
        remove_picto($(this));
    });
});