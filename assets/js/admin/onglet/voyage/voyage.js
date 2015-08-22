var confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";

if (tabImageSlider === undefined) {
    var tabImageSlider = new Array();
    var sizeTabImageSlider = tabImageSlider.length;
}
if (tabImageDescription === undefined) {
    var tabImageDescription = new Array();
    var sizeTabImageDescription = tabImageDescription.length;
}
if (tabImageBanniere === undefined) {
    var tabImageBanniere = new Array();
    var sizeTabImageBanniere = tabImageBanniere.length;
}
if (tabImagePicto === undefined) {
    var tabImagePicto = new Array();
} else {
    $(".picto_hidden").val(tabImagePicto);
}


var flagAddImageVoyage = true;

var html_info_vente = $(".ligne_info_vente").html();
var html_info_deroulement = $(".ligne_info_deroulement").html();
var $ligne_vente = 0;
var $ligne_deroulement = 0;

function addLigne() {
    $('.info_de_vente').append('<br/><div class="ligne' + $ligne_vente + '"><a href="javascript:;" class="delete_ligne btn btn-danger floatRight"><i class="icon-remove"></i></a>' + html_info_vente + '</div>');
    $(".ligne" + $ligne_vente + " input").val('');
    $ligne_vente++;
}

function addLigneDeroulement() {
    $('.info_deroulement').append('<br/><div class="ligne' + $ligne_deroulement + '"><a href="javascript:;" class="delete_ligne_deroulement btn btn-danger floatRight"><i class="icon-remove"></i></a>' + html_info_deroulement + '</div>');
    $(".ligne" + $ligne_deroulement + " input").val('');
    $ligne_deroulement++;
    btn_file()
}
function remove_nb(tableau, id) {
    var newTab = new Array();
    for (var i = 0; i < tableau.length; i++) {
        if (tableau[i].toString() !== id.toString()) {
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
    $('.form-horizontal span.mess_required').remove();
    $('.form-horizontal .failed').removeClass("failed");
    var regexp_nom_fichier = new RegExp("(^[a-zA-Z0-9]+)$");
    if (regexp_nom_fichier.test($(".titre_" + idHtml).val())) {
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
                        $("#content_end_" + idHtml).append('<tr><td colspan="4"><div class="center spinneur"><img src=" ' + urlSpiner + ' " name="spinner" alt="spinner"/></div></td></tr>');
                    },
                    success: function (result) {
                        $(".spinneur").parent().parent().remove();
                        result = JSON.parse(result);
                        if (result !== -1) {
                            $('#' + idHtml).modal('hide');
                            $("#content_end_" + idHtml).append
                                    ('<tr>\n\
                            <td>' + id + '</td>\n\
                            <td class="maxW115">\n\
                                <p>\n\
                                <input type="text" name="titre_' + idHtml + '[]" class="required" value="' + $(".titre_" + idHtml).val() + '" />\n\
                                </p>\n\
                            </td>\n\
                            <td class="center td_image">\n\
                                <input type="hidden" id="image_' + idHtml + '_' + id + '" name="image_' + idHtml + '[]" value="' + result["lien"] + '"/>\n\
                                <img class="image_100" src="' + result["src"] + '" alt="' + $(".titre_" + idHtml).val() + '" />\n\
                            </td>\n\
                            <td class="center">\n\
                                <input type="button" class="btn btn-danger remove_image width_auto" value="x" data-idhtml="' + idHtml + '" data-id="' + id + '"/>\n\
                            </td>\n\
                        </tr>');

                            $(".titre_" + idHtml).val('');
                            $('.image_' + idHtml).val('');
                            $('.text_' + idHtml).val('');
                            action_reload();
                        } else {
                            $(".image_" + idHtml).parent().parent().parent().append("<span class='mess_required'>Le format d'image n'est pas correct</span>");
                            $(".image_" + idHtml).parent().parent().parent().toggleClass('failed');
                            $('.image_' + idHtml).val('');
                            $('.text_' + idHtml).val('');
                        }
                        flagAddImageVoyage = true;

                    }});
            } else {
                if ($(".titre_" + idHtml).val() === '') {
                    $(".titre_" + idHtml).parent().append("<span class='mess_required'>Ce champ est obligatoire.</span>");
                    $(".titre_" + idHtml).toggleClass('failed');
                }

                if ($(".image_" + idHtml).val() === '') {
                    $(".image_" + idHtml).parent().parent().parent().append("<span class='mess_required'>Ce champ est obligatoire.</span>");
                    $(".image_" + idHtml).parent().parent().parent().toggleClass('failed');
                }

            }
        }
    } else {
        $(".titre_" + idHtml).parent().append("<span class='mess_required'>Ce champ n'est pas correct utiliser des lettres et/ou des chiffres.</span>");
        $(".titre_" + idHtml).toggleClass('failed');
    }
}

function remove_image(idhtml, id, button) {
    if ($("#image_" + idhtml + "_" + id).val() == undefined) {
        remove_nb_array(idhtml, id);
        button.parent().parent().remove();
    } else {
        $.ajax({
            url: urlDeleteImage,
            type: "POST",
            data: "lien=" + $("#image_" + idhtml + "_" + id).val(),
            success: function () {
                remove_nb_array(idhtml, id);
                button.parent().parent().remove();
            }
        });

    }

}

function add_picto(img) {
    if (tabImagePicto.length <= 5) {
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
}

function remove_picto(img) {
    img.removeClass("remove_picto");
    img.removeClass("img_picto_selected");
    img.addClass("add_picto");
    img.parent().children('span').addClass("hidden");

    tabImagePicto = remove_nb(tabImagePicto, img.data("id"));
    console.log(tabImagePicto);
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
    action_reload();
    $('.info_de_vente').on('click', '.delete_ligne', function () {
        if (confirm(confirmation)) {
            if ($(this).data("idinfo") !== undefined) {
                $(".info_de_vente").append('<type type="hidden" value="' + $(this).data("idinfo") + '" name="deleteInfoVente[]" />')
            }
            $(this).parent().remove();
        }
    });

    $('.info_deroulement').on('click', '.delete_ligne_deroulement', function () {
        if (confirm(confirmation)) {
            if ($(this).data("idderoulement") !== undefined) {
                $(".info_deroulement").append('<type type="hidden" value="' + $(this).data("idderoulement") + '" name="deleteDeroulement[]" />')
            }
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
