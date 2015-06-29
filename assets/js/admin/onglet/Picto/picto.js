flagAddImageVoyage = true;

function add_image() {
    if (flagAddImageVoyage) {
        $(".file_design_green").val()
        var data = new FormData();
        for (var $i = 0; $i < $('.add_image')[0].files.length; $i++) {
            data.append('fichier_' + $i, $('.add_image')[0].files[$i]);
        }
        data.append('nombre', $('.add_image')[0].files.length);
        flagAddImageVoyage = false;
        $.ajax({
            url: urlAjouterImage,
            type: "POST",
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                for (var i = 0; i < $i; i++) {
                    $(".tabbable").append('<div class="blockPicto attenteSuppr">\n\
                       <img src=" ' + urlSpiner + ' " class="img_picto" name="spinner" alt="spinner"/>\n\
                        </div>');
                }
            },
            success: function (result) {
                $(".attenteSuppr").remove();
                result = JSON.parse(result);
                $(".alert").hide();
                $(".message").empty();
                if (result !== "-1") {
                    for (var i = 0; i < result["nombre"]; i++) {
                        if (result["message" + i] !== undefined) {
                            $(".alert").show();
                            $(".message").append(result["message" + i]);
                        } else if(result["id" + i] !== undefined) {
                            if ($(".tabbable").html().indexOf("Pas de picto") !== -1) {
                                $(".tabbable").empty();
                                $(".tabbable").append('<div class="blockPicto">\n\
                                <img class="img_picto" data-id="' + result["id" + i] + '" src="' + result["src" + i] + '" />\n\
                                <button class="btn btn-danger btn-circle delete_picto button_delete_picto" data-id="' + result["id" + i] + '""><i class="icon-remove"></i></button>\n\
                                </div>');
                            } else {
                                $(".tabbable").append('<div class="blockPicto">\n\
                                <img class="img_picto" data-id="' + result["id" + i] + '" src="' + result["src" + i] + '" />\n\
                                <button class="btn btn-danger btn-circle delete_picto button_delete_picto" data-id="' + result["id" + i] + '""><i class="icon-remove"></i></button>\n\
                                </div>');
                            }
                        }
                    }
                    $('.add_image').val("");
                    flagAddImageVoyage = true;
                    reload();
                }
            }});

    }
}

function delete_picto(button) {
    var old_button_html = button.html();

    $.ajax({
        url: urlDeleteImage,
        type: "POST",
        data: "id=" + button.data("id"),
        beforeSend: function () {
            button.html('<img src=' + urlLittleSpinneur + ' alt="Little Spinner" />');
            button.removeClass("delete_picto");
            button.css({"padding": "0px"});
        },
        success: function (result) {
            if (result !== "-1") {
                button.parent().remove();
            } else {
                button.html(old_button_html);
                button.css({"padding": "-63px 0px 0 -21px;"});
                button.addClass("delete_picto");
            }
        }
    });
}

function reload() {
    $(".delete_picto").on("click", function () {
        delete_picto($(this));
    });
}

$(document).ready(function () {
    $(".add_image").on("change", function () {
        add_image();
    });
    reload();
});