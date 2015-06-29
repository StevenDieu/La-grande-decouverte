$(document).on('change', '.btn-file :file', function () {
    var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.innerHTML = "";
    input.trigger('fileselect', [numFiles, label]);
});

$(document).ready(function () {
    $('.btn-file :file').on('fileselect', function (event, numFiles, label) {

        var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;

        if (input.length) {
            input.val(log);
        } else {
            if (log)
                alert(log);
        }

    });
});

$(document).ready(function () {
    var mess_required = "<span class='mess_required'>Ce champ est obligatoire.</span>";
    var mess_required_image = "<span class='mess_required'>Il faut au moins une image.</span>";
    var mess_required_picto = "<span class='mess_required'>Il faut au moins un picto de selectionner.</span>";
    var mess_nombre = "<span class='mess_required'>Ce champ doit être un nombre.</span>";

    //page inscription
    $('.submit_bouton_verif').click(function () {
        $('.form-horizontal span.mess_required').remove();
        $('.form-horizontal .failed').removeClass("failed");
        var submit = true;
        $('.form-horizontal .required').each(function () {
            if ($(this).val() == '') {
                $($(this).parent().parent()).append(mess_required);
                if ($(this).attr("type") === "file") {
                    $(this).parent().parent().parent().toggleClass('failed');
                } else {
                    $($(this).parent()).toggleClass('failed');
                }
                submit = false;
            }
        });



        $('.form-horizontal .content_image').each(function () {
            if ($(this).find("tr").length <= 1) {
                var regexp_localisation = new RegExp("^[0-9]*(,[0-9]*|[.][0-9]*)$", "g");

                $(this).parent().append(mess_required_image);
                $(this).parent().addClass("failed");
                submit = false;
            }
        });

        if ($(".form-horizontal").find(".img_picto_selected").length == 0) {
            $(".picto_hidden").parent().append(mess_required_picto);
            $(".picto_hidden").parent().addClass("failed");
            submit = false;
        }

        if (submit) {

            if (!regexp_localisation.test($('#lattitude').val())) {
                $('#lattitude').val($('#lattitude').val().replace(",", "."));
                $('#lattitude').parent().parent().append(mess_nombre);
                $('#lattitude').toggleClass('failed');
                submit = false;
            }

            if (!regexp_localisation.test($('#longitude').val())) {
                $('#longitude').val($('#longitude').val().replace(",", "."));
                $('#longitude').parent().parent().append(mess_nombre);
                $('#longitude').toggleClass('failed');
                submit = false;
            }
        }

        if (submit) {
            var regexp_nombre = new RegExp("^[0-9]*$", "g");

            if (!regexp_nombre.test($("#duree").val())) {
                $("#duree").parent().parent().append(mess_nombre);
                $("#duree").toggleClass('failed');
                submit = false;
            }

            $('.form-horizontal .place_dispo').each(function () {
                if (!regexp_nombre.test($(this).val())) {
                    $(this).parent().parent().append(mess_nombre);
                    $(this).toggleClass('failed');
                    submit = false;
                }
            });

            $('.form-horizontal .place_dispo').each(function () {
                if (regexp_nombre.test($(this).val())) {
                    $(this).parent().parent().append(mess_nombre);
                    $(this).toggleClass('failed');
                    submit = false;
                }
            });
        }

        if (submit) {
            var regexp_prix = new RegExp("^[0-9]*(,[0-9]{2}|[.][0-9]{2}|)$", "g");
            $('.form-horizontal .prix').each(function () {
                if (regexp_prix.test($(this).val())) {
                    $(this).parent().parent().append(mess_nombre);
                    $(this).toggleClass('failed');
                    submit = false;
                }
            });

            $('.form-horizontal .tva').each(function () {
                if (regexp_prix.test($(this).val())) {
                    $(this).parent().parent().append(mess_nombre);
                    $(this).toggleClass('failed');
                    submit = false;
                }

            });

            $('.form-horizontal .special_price').each(function () {
                if ($(this).val() !== '') {
                    if (regexp_prix.test($(this).val())) {
                        $(this).parent().parent().append(mess_nombre);
                        $(this).toggleClass('failed');
                        submit = false;
                    }
                }
            });


        }

        return submit;
    });
});