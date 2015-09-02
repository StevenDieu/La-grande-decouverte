jQuery(document).ready(function () {
    //mode de commande panels	

    jQuery(".inside_command_panel").hide();
    jQuery(".open_command").click(function () {
        if (!$(this).hasClass('check')) {
            if ($(this).hasClass('first') && !$(this).hasClass('active')) {
                jQuery(".open_command.containInscription").toggleClass("active").next().slideToggle("slow");
                $('.openInscription').hide();
                jQuery(this).toggleClass("active").next().slideToggle("slow");
                $('#command_right_column li').removeClass('active');
                $('#command_right_column li.iden').addClass('active');
            }
        }

        if ($(this).hasClass('containInfo') && $(this).hasClass('check')) {
            if ($('.open_command.containInfo').hasClass('active'))
                return false;
            jQuery(".open_command.first").removeClass("active");
            jQuery(".open_command.first").next().hide();
            jQuery(".open_command.containBilling").removeClass("active");
            jQuery(".open_command.containBilling").next().hide();
            jQuery(".open_command.containParticipants").removeClass("active");
            jQuery(".open_command.containParticipants").next().hide();
            jQuery(".open_command.containPayment").removeClass("active");
            jQuery(".open_command.containPayment").next().hide();
            jQuery(".open_command.containRecap").removeClass("active");
            jQuery(".open_command.containRecap").next().hide();
            jQuery(".open_command.containInfo").toggleClass("active").next().slideToggle("slow");
            $('.inside_command_panel.inscription').hide();

            $('#command_right_column li').removeClass('active');
            $('#command_right_column li.info').addClass('active');
        }

        if ($(this).hasClass('containBilling') && $(this).hasClass('check')) {
            if ($('.open_command.containBilling').hasClass('active'))
                return false;
            jQuery(".open_command.containParticipants").removeClass("active");
            jQuery(".open_command.containParticipants").next().hide();
            jQuery(".open_command.containPayment").removeClass("active");
            jQuery(".open_command.containPayment").next().hide();
            jQuery(".open_command.containRecap").removeClass("active");
            jQuery(".open_command.containRecap").next().hide();
            jQuery(".open_command.containBilling").toggleClass("active").next().slideToggle("slow");

            $('#command_right_column li').removeClass('active');
            $('#command_right_column li.billing').addClass('active');
        }

        if ($(this).hasClass('containParticipants') && $(this).hasClass('check')) {
            if ($('.open_command.containBilling').hasClass('active'))
                return false;
            if ($('.open_command.containParticipants').hasClass('active'))
                return false;
            jQuery(".open_command.containPayment").removeClass("active");
            jQuery(".open_command.containPayment").next().hide();
            jQuery(".open_command.containRecap").removeClass("active");
            jQuery(".open_command.containRecap").next().hide();
            jQuery(".open_command.containParticipants").toggleClass("active").next().slideToggle("slow");

            $('#command_right_column li').removeClass('active');
            $('#command_right_column li.participants').addClass('active');
        }

        if ($(this).hasClass('containPayment') && $(this).hasClass('check')) {
            jQuery(".open_command.containRecap").removeClass("active");
            jQuery(".open_command.containRecap").next().hide();
            jQuery(".open_command.containPayment").toggleClass("active").next().slideToggle("slow");

            $('#command_right_column li').removeClass('active');
            $('#command_right_column li.payment').addClass('active');
        }

        return false;
    });

    jQuery(".open_command.containInfo").toggleClass("active").next().slideToggle("slow");
});



//function tunnel de commande ajax



function getBilling() {
    if ($('.command_panel.openBilling').hasClass('charger'))
        return false;
    $.ajax({
        url: urlBilling, // ici l'url du controleur de la vue que tu veux faire appeller
        type: "get",
        data: "",
        async: true,
        beforeSend: function () {
            $(".inside_command_panel.billing").html(chargement)
        },
        success: function (result) {
            // Le result qui est déclaré est le code html que le controlleur va te renvoyer donc tu fais :
            $(".inside_command_panel.billing").html(result) // Pour afficher le contenu de la view
            $(".inside_command_panel.billing").parent().addClass('charger');
        }
    });
}

function getPayment() {
    if ($('.command_panel.openPayment').hasClass('charger'))
        return false;
    $.ajax({
        url: urlPayment, // ici l'url du controleur de la vue que tu veux faire appeller
        type: "post",
        data: "",
        beforeSend: function () {
            $(".inside_command_panel.payment").html(chargement)
        },
        success: function (result) {
            // Le result qui est déclaré est le code html que le controlleur va te renvoyer donc tu fais :
            $(".inside_command_panel.payment").html(result) // Pour afficher le contenu de la view
            $(".inside_command_panel.payment").parent().addClass('charger');
        }
    });
}

function getRecap(id, idInfo, nb) {
    $.ajax({
        url: urlRecap, // ici l'url du controleur de la vue que tu veux faire appeller
        type: "post",
        data: {id: id, idInfo: idInfo, nbParticipant: nb},
        beforeSend: function () {
            $(".inside_command_panel.recap").html(chargement);
        },
        success: function (result) {
            // Le result qui est déclaré est le code html que le controlleur va te renvoyer donc tu fais :
            $(".inside_command_panel.recap").html(result) // Pour afficher le contenu de la view
            $(".inside_command_panel.recap").parent().addClass('charger');
        }
    });
}

function getParticipants() {
    if ($('.command_panel.openParticipants').hasClass('charger'))
        return false;
    $.ajax({
        url: urlParticipant, // ici l'url du controleur de la vue que tu veux faire appeller
        type: "post",
        data: "",
        beforeSend: function () {
            $(".inside_command_panel.participants").html(chargement);
        },
        success: function (result) {
            // Le result qui est déclaré est le code html que le controlleur va te renvoyer donc tu fais :
            $(".inside_command_panel.participants").html(result) // Pour afficher le contenu de la view
            $(".inside_command_panel.participants").parent().addClass('charger');
        }
    });
}

function getInscription() {
    $.ajax({
        url: urlInscription, // ici l'url du controleur de la vue que tu veux faire appeller
        type: "post",
        data: "",
        beforeSend: function () {
            $(".inside_command_panel.inscription").html(chargement);
        },
        success: function (result) {
            // Le result qui est déclaré est le code html que le controlleur va te renvoyer donc tu fais :
            $(".inside_command_panel.inscription").html(result) // Pour afficher le contenu de la view
            $(".inside_command_panel.inscription").parent().addClass('charger');
        }
    });
}

function getVerifMailView() {
    $.ajax({
        url: urlViewVerifMail, // ici l'url du controleur de la vue que tu veux faire appeller
        type: "post",
        data: "mail=" + mail,
        beforeSend: function () {
            $(".inside_command_panel.inscription").html(chargement);
        },
        success: function (result) {
            // Le result qui est déclaré est le code html que le controlleur va te renvoyer donc tu fais :
            $(".inside_command_panel.inscription").html(result) // Pour afficher le contenu de la view
            $(".inside_command_panel.inscription").parent().addClass('charger');
            sendMailClick();
        }
    });
}

function getLogin() {
    $.ajax({
        url: urlRecap, // ici l'url du controleur de la vue que tu veux faire appeller
        async: true,
        type: "post",
        data: "",
        beforeSend: function () {
            $(".inside_command_panel.recap").html(chargement);
        },
        success: function (result) {
            // Le result qui est déclaré est le code html que le controlleur va te renvoyer donc tu fais :
            $(".inside_command_panel.recap").html(result) // Pour afficher le contenu de la view
            $(".inside_command_panel.recap").parent().addClass('charger');
        }
    });
}

function verifConnexion() {
    $.ajax({
        url: urlVerif, // ici l'url du controleur de la vue que tu veux faire appeller
        async: false,
        type: "post",
        data: "",
        success: function (result) {
            data = jQuery.parseJSON(result);
            if (data.retour == true) {
                $('#isLogin').val('1');
            } else {
                $('#isLogin').val('0');
            }
        }
    });
}

function isConnecter() {
    $(".inside_command_panel.ajaxLogin").html('');
    $(".inside_command_panel.ajaxLogin").css('display', 'none');
    $(".open_command.info").removeClass('active');
    $("#command_right_column li.info").removeClass('active');
    $("#command_right_column li.info").addClass('active');
    //jQuery(".open_command.containInfo").toggleClass("active").next().slideToggle("slow");
}

function createAccountClic() {
    jQuery(".open_command.first").next().slideToggle("slow");
    $('.openInscription').show();
    getInscription();
    jQuery(".open_command.containInscription").toggleClass("active").next().slideToggle("slow");
}

function getVerifMail() {
    jQuery(".open_command.first").next().slideToggle("slow");
    $('.openInscription').show();
    getVerifMailView();
    jQuery(".open_command.containInscription").toggleClass("active").next().slideToggle("slow");
}

function connexionOnepage() {
    $.ajax({
        url: urlLogin, // ici l'url du controleur de la vue que tu veux faire appeller
        type: "post",
        data: {mail: $('.identification_left #mail').val(), mdp: $('#password').val()},
        beforeSend: function () {
            $(".identification_left form").append(chargmeentLogin);
        },
        success: function (result) {
            data = jQuery.parseJSON(result);
            if (data.retour == 'connexion') {
                if (data.verif == true) {
                    mail = $('.identification_left #mail').val();
                    getVerifMail();
                } else {
                    $('.identification_left .chargement').remove();
                    $(".inside_command_panel.ajaxLogin").html('');
                    $(".inside_command_panel.ajaxLogin").css('display', 'none');
                    $(".open_command.first").addClass('check');
                    $(".open_command.first").removeClass('active');
                    getBilling();
                    jQuery(".open_command.containBilling").toggleClass("active").next().slideToggle("slow");
                }
            } else {
                $('.identification_left .chargement').remove();
                alert('Identifiant ou mot de passe incorrect');
            }

        }
    });
}
var mail;
function createAccount() {
    $.ajax({
        url: urlCreate, // ici l'url du controleur de la vue que tu veux faire appeller
        type: "post",
        data: {
            nom: $('#inscription_nom').val(),
            prenom: $('#inscription_prenom').val(),
            email: $('#inscription_email').val(),
            confirmer_email: $('#inscription_confirmer_email').val(),
            mdp: $('#inscription_mdp').val(),
            confirmer_mdp: $('#inscription_confirmer_mdp').val()
        },
        beforeSend: function () {
            $(".submit_all_text.ins").append(chargmeentLogin);
        },
        success: function (result) {
            data = jQuery.parseJSON(result);
            if (data.retour == 'creation') {
                mail = $('#inscription_email').val();
                getVerifMailView();
            } else {
                $('.submit_all_text.ins .chargement').remove();
                alert(data.message);
            }

        }
    });
    return false;
}

function verifMail() {
    $.ajax({
        url: urlMailConfirm,
        type: "post",
        data: {
            email: mail
        },
        beforeSend: function () {
            $(".submit_all_text.ins").append(chargmeentLogin);
        },
        success: function (result) {
            data = jQuery.parseJSON(result);
            if (data.retour == 'verifier') {
                $(".inside_command_panel.inscription").html('');
                $(".inside_command_panel.inscription").css('display', 'none');
                $(".open_command.containInscription").removeClass('active');
                $(".open_command.first").removeClass('active');
                $(".open_command.first").addClass('check');
                $(".open_command.containInscription").addClass('check');
                getBilling();
                jQuery(".open_command.containBilling").toggleClass("active").next().slideToggle("slow");
            } else {
                $('.submit_all_text.ins .chargement').remove();
                alert(data.message);
            }

        }
    });
    return false;

}

function verifChampBilling() {
    var submit = true;
    $('#form_billing span.mess_required').remove();
    $('#form_billing p.failed').removeClass("failed");
    $('.selector.failed').removeClass("failed");
    $('#form_billing input.required').each(function () {
        if ($(this).val() == '') {
            $($(this).parent().parent()).append(spanObligatoire);
            $($(this)).toggleClass('failed');
            submit = false;
        }
    });

    if ($('#billing_pays').val() == null) {
        $('#billing_pays').parent().toggleClass('failed');
        $('#billing_pays').parent().parent().parent().append(spanObligatoire);
        submit = false;
    }

    if ($('#billing_region').val() == null) {
        $('#billing_region').parent().toggleClass('failed');
        $('#billing_region').parent().parent().parent().append(spanObligatoire);
        submit = false;
    }
    return submit;

}

var spanObligatoire = "<span class='mess_required'>Ce champ est obligatoire.</span>";

function createJsonBilling() {
    billing =
            {
                nom: $('#billing_nom').val(),
                prenom: $('#billing_prenom').val(),
                societe: $('#billing_societe').val(),
                email: $('#billing_email').val(),
                adresss: $('#billing_adresss').val(),
                complement_adresse: $('#billing_complement_adresse').val(),
                codePostal: $('#billing_code_postal').val(),
                ville: $('#billing_ville').val(),
                region: $('#billing_region').val(),
                pays: $('#billing_pays').val(),
                telephone: $('#billing_telephone').val(),
                fax: $('#billing_fax').val()
            };
}

function createJsonBillingEdit() {
    billing =
            {
                nom: $('#billing_nom').val(),
                prenom: $('#billing_prenom').val(),
                societe: $('#billing_societe').val(),
                email: $('#billing_email').val(),
                adresss: $('#billing_adresss').val(),
                complement_adresse: $('#billing_complement_adresse').val(),
                codePostal: $('#billing_code_postal').val(),
                ville: $('#billing_ville').val(),
                region: $('#billing_region').val(),
                pays: $('#billing_pays').val(),
                telephone: $('#billing_telephone').val(),
                fax: $('#billing_fax').val(),
                id: $('#billing_id').val()
            };
}

function vérifFormulaireParticipant() {
    var submit = true;
    $('#form_participant span.mess_required').remove();
    $('#form_participant failed').removeClass("failed");
    $('#form_participant input.required').each(function () {
        if ($(this).val() == '') {
            $($(this).parent()).append(spanObligatoire);
            $($(this)).toggleClass('failed');
            submit = false;
        }
    });

    return submit;
}

function createJsonParticipant() {
    listeParticipant = new Array();
    $('#form_participant div.unParticipant').each(function () {
        participant = {
            nom: $("#participant_nom", this).val(),
            prenom: $("#participant_prenom", this).val(),
            dob: $("#participant_dob", this).val(),
            info: $("#participant_info", this).val()
        }
        listeParticipant.push(participant);
    });
}

function getSucces(id) {
    $.ajax({
        url: urlSucces, // ici l'url du controleur de la vue que tu veux faire appeller
        type: "post",
        data: {increment_id: id},
        success: function (result) {
            $(".content").html(result) // Pour afficher le contenu de la view
        }
    });
}

function verifPlaceDispo() {
    var nb_place_demande = $(".unParticipant").length + 1;
    $.ajax({
        url: urlPlacedispo, // ici l'url du controleur de la vue que tu veux faire appeller
        type: "post",
        data: {idInfo: $("#idInfo").val(), nb_place_demande: nb_place_demande},
        success: function (result) {
            data = jQuery.parseJSON(result);
            if (data.retour == false) {
                alert(data.message);
            } else {
                $('.ensembleParticipants').append(newParticipant);
            }
        }
    });
    return data.retour;
}

function verifPlaceDispoFinal() {
    var nb_place_demande = listeParticipant.length;
    $.ajax({
        url: urlPlacedispo, // ici l'url du controleur de la vue que tu veux faire appeller
        type: "post",
        data: {idInfo: $("#idInfo").val(), nb_place_demande: nb_place_demande},
        success: function (result) {
            data = jQuery.parseJSON(result);
            if (data.retour == true) {
                save(order, billing, listeParticipant);
            } else {
                alert(result.message);
            }
        }
    });

}

function save(order, billing, participant) {
    $.ajax({
        url: urlSave, // ici l'url du controleur de la vue que tu veux faire appeller
        type: "post",
        data: {
            order: order,
            billing: billing,
            participant: participant
        },
        async: true,
        beforeSend: function () {
            $(".reset_field.save").append(chargement)
        },
        success: function (result) {
            data = jQuery.parseJSON(result);
            if (data.retour == 'PAYPAL') {
                document.location.href = urlPaypal;
            } else if (data.retour == 'CB') {
                document.location.href = urlCb;
            } else {
                getSucces(data.message);
            }
            return false;
        }
    });
}












