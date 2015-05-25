jQuery(document).ready(function(){
	//mode de commande panels	
	jQuery('#command_right_column ul li').click(function(){
		jQuery(this).toggleClass("active");
		var index = jQuery(this).index();
		if( index == 0 ) {
		jQuery('#command_left_column .command_panel:first-child .open_command').toggleClass("active").next().slideToggle("slow");
		return false;
		}
		else {
		var num = index+1;
		jQuery('#command_left_column .command_panel:nth-child('+num+') .open_command').toggleClass("active").next().slideToggle("slow");
		return false;
		}
	});
	 jQuery('h2.open_command').click(function(){
		var parent = jQuery(this).parent().index();
		if( parent == 0 ) {
		jQuery('#command_right_column ul li:first-child').toggleClass("active");
		}
		else {
		var num = parent+1;
		jQuery('#command_right_column ul li:nth-child('+num+')').toggleClass("active");
		}
	});	
	
	
	jQuery(".inside_command_panel").hide(); 
	jQuery(".open_command").click(function(){
		if(!$(this).hasClass('check')){
			if($(this).hasClass('first') && !$(this).hasClass('active')){
				jQuery(".open_command.containInscription").toggleClass("active").next().slideToggle("slow");
				$('.openInscription').hide();
				jQuery(this).toggleClass("active").next().slideToggle("slow");
			}	
		}
        if($(this).hasClass('containBilling') && $(this).hasClass('check')){
            if($('.open_command.containBilling').hasClass('active')) return false;
            jQuery(".open_command.containParticipants").removeClass("active");
            jQuery(".open_command.containParticipants").next().hide();
            jQuery(".open_command.containPayment").removeClass("active");
            jQuery(".open_command.containPayment").next().hide();
            jQuery(".open_command.containRecap").removeClass("active");
            jQuery(".open_command.containRecap").next().hide();
            jQuery(".open_command.containBilling").toggleClass("active").next().slideToggle("slow");
        }

        if($(this).hasClass('containParticipants') && $(this).hasClass('check')){
            if($('.open_command.containBilling').hasClass('active')) return false;
            if($('.open_command.containParticipants').hasClass('active')) return false;
            jQuery(".open_command.containPayment").removeClass("active");
            jQuery(".open_command.containPayment").next().hide();
            jQuery(".open_command.containRecap").removeClass("active");
            jQuery(".open_command.containRecap").next().hide();
            jQuery(".open_command.containParticipants").toggleClass("active").next().slideToggle("slow");  
        }

        if($(this).hasClass('containPayment') && $(this).hasClass('check')){
            jQuery(".open_command.containRecap").removeClass("active");
            jQuery(".open_command.containRecap").next().hide();
            jQuery(".open_command.containPayment").toggleClass("active").next().slideToggle("slow");  
        }

		return false; 
	});

	jQuery(".open_command.first").toggleClass("active").next().slideToggle("slow");
});



//function tunnel de commande ajax

    

    function getBilling(){
        if($('.command_panel.openBilling').hasClass('charger')) return false;
        $.ajax({
            url: urlBilling , // ici l'url du controleur de la vue que tu veux faire appeller
            type: "get",
            data: "" ,
            async: true,
            beforeSend : function (){
                $(".inside_command_panel.billing").html(chargement)
            },
            success: function (result) {
                // Le result qui est déclaré est le code html que le controlleur va te renvoyer donc tu fais :
                $(".inside_command_panel.billing").html(result) // Pour afficher le contenu de la view
                $(".inside_command_panel.billing").parent().addClass('charger');
            }
        });
    }

    function getPayment(){
        if($('.command_panel.openPayment').hasClass('charger')) return false;
        $.ajax({
            url: urlPayment , // ici l'url du controleur de la vue que tu veux faire appeller
            type: "post",
            data: "" ,
            beforeSend : function (){
                $(".inside_command_panel.payment").html(chargement)
            },
            success: function (result) {
                // Le result qui est déclaré est le code html que le controlleur va te renvoyer donc tu fais :
                $(".inside_command_panel.payment").html(result) // Pour afficher le contenu de la view
                $(".inside_command_panel.payment").parent().addClass('charger');
            }
        });
    }

    function getRecap(id,idInfo,nb){
        $.ajax({
            url: urlRecap , // ici l'url du controleur de la vue que tu veux faire appeller
            type: "post",
            data: {id: id, idInfo: idInfo, nbParticipant :nb} ,
            beforeSend : function (){
                $(".inside_command_panel.recap").html(chargement);
            },
            success: function (result) {
                // Le result qui est déclaré est le code html que le controlleur va te renvoyer donc tu fais :
                $(".inside_command_panel.recap").html(result) // Pour afficher le contenu de la view
                $(".inside_command_panel.recap").parent().addClass('charger');
            }
        });
    }

    function getParticipants(){
        if($('.command_panel.openParticipants').hasClass('charger')) return false;
        $.ajax({
            url: urlParticipant , // ici l'url du controleur de la vue que tu veux faire appeller
            type: "post",
            data: "" ,
            beforeSend : function (){
                $(".inside_command_panel.participants").html(chargement);
            },
            success: function (result) {
                // Le result qui est déclaré est le code html que le controlleur va te renvoyer donc tu fais :
                $(".inside_command_panel.participants").html(result) // Pour afficher le contenu de la view
                $(".inside_command_panel.participants").parent().addClass('charger');
            }
        });
    }

    function getInscription(){
        $.ajax({
            url: urlInscription , // ici l'url du controleur de la vue que tu veux faire appeller
            type: "post",
            data: "" ,
            beforeSend : function (){
                $(".inside_command_panel.inscription").html(chargement);
            },
            success: function (result) {
                // Le result qui est déclaré est le code html que le controlleur va te renvoyer donc tu fais :
                $(".inside_command_panel.inscription").html(result) // Pour afficher le contenu de la view
                $(".inside_command_panel.inscription").parent().addClass('charger');
            }
        });
    }

    function getLogin(){
        $.ajax({
            url: urlRecap , // ici l'url du controleur de la vue que tu veux faire appeller
            async: true,
            type: "post",
            data: "" ,
            beforeSend : function (){
                $(".inside_command_panel.recap").html(chargement);
            },
            success: function (result) {
                // Le result qui est déclaré est le code html que le controlleur va te renvoyer donc tu fais :
                $(".inside_command_panel.recap").html(result) // Pour afficher le contenu de la view
                $(".inside_command_panel.recap").parent().addClass('charger');
            }
        });
    }

    function isConnecter(){
        $(".inside_command_panel.ajaxLogin").html('');
        $(".inside_command_panel.ajaxLogin").css('display','none');
        $(".open_command.first").removeClass('active');
        $(".open_command.first").addClass('check');
        getBilling();
        jQuery(".open_command.containBilling").toggleClass("active").next().slideToggle("slow");

    }

    function createAccountClic(){
        jQuery(".open_command.first").toggleClass("active").next().slideToggle("slow");
        $('.openInscription').show();
        getInscription();
        jQuery(".open_command.containInscription").toggleClass("active").next().slideToggle("slow");
    }

    function connexionOnepage(){
        $.ajax({
            url: urlLogin , // ici l'url du controleur de la vue que tu veux faire appeller
            type: "post",
            data: {login: $('#login').val(), mdp: $('#password').val()},
            beforeSend : function (){
                $(".identification_left form").append(chargmeentLogin);
            },
            success: function (result) {
                data = jQuery.parseJSON(result);
                if(data.retour == 'connexion'){
                    $('.identification_left .chargement').remove();
                    $(".inside_command_panel.ajaxLogin").html('');
                    $(".inside_command_panel.ajaxLogin").css('display','none');
                    $(".open_command.first").removeClass('active');
                    getBilling();
                    jQuery(".open_command.containBilling").toggleClass("active").next().slideToggle("slow");
                }else{
                    $('.identification_left .chargement').remove();
                    alert('Identifiant ou mot de passe incorrect');
                }
                
            }
        });
    }

    function createAccount(){
        $.ajax({
            url: urlCreate , // ici l'url du controleur de la vue que tu veux faire appeller
            type: "post",
            data:{
                    nom: $('#inscription_nom').val(), 
                    prenom: $('#inscription_prenom').val(),
                    login: $('#inscription_login').val(),
                    email: $('#inscription_email').val(),
                    confirmer_email: $('#inscription_confirmer_email').val(),
                    mdp: $('#inscription_mdp').val(),
                    confirmer_mdp: $('#inscription_confirmer_mdp').val()
                },
            beforeSend : function (){
                $(".submit_all_text.ins").append(chargmeentLogin);
                console.log(chargmeentLogin);
            },
            success: function (result) {
                data = jQuery.parseJSON(result);
                console.log(data);
                if(data.retour == 'creation'){
                    $(".inside_command_panel.inscription").html('');
                    $(".inside_command_panel.inscription").css('display','none');
                    $(".open_command.containInscription").removeClass('active');
                    $(".open_command.first").addClass('check');
                    $(".open_command.containInscription").addClass('check');
                    getBilling();
                    jQuery(".open_command.containBilling").toggleClass("active").next().slideToggle("slow");
                }else{
                    $('.submit_all_text.ins .chargement').remove();
                    alert('L\'utilisateur n\'a pas pu être créé');
                }
                
            }
        });
        return false;
    }

    function verifChampBilling(){
        var submit = true;
        $('#form_billing span.mess_required').remove();
        $('#form_billing p.failed').removeClass("failed");
        $('.selector.failed').removeClass("failed");
        $('#form_billing input.required').each(function () {
            if ($(this).val() == '') {
                $($(this).parent().parent()).append(spanObligatoire);
                $($(this).parent()).toggleClass('failed');
                submit = false;
            }
        });

        if($('#billing_pays').val() == null){
            $('#billing_pays').parent().toggleClass('failed');
            $('#billing_pays').parent().parent().parent().append(spanObligatoire);
            submit = false;
        }

        if($('#billing_region').val() == null){
            $('#billing_region').parent().toggleClass('failed');
            $('#billing_region').parent().parent().parent().append(spanObligatoire);
            submit = false;
        }
        return submit;
        
    }

    var spanObligatoire = "<span class='mess_required'>Ce champ est obligatoire.</span>";

    function createJsonBilling(){
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

    function vérifFormulaireParticipant(){
        var submit = true;
        $('#form_participant span.mess_required').remove();
        $('#form_participant p.failed').removeClass("failed");
        $('#form_participant input.required').each(function () {
            if ($(this).val() == '') {
                $($(this).parent().parent()).append(spanObligatoire);
                $($(this).parent()).toggleClass('failed');
                submit = false;
            }
        });

        return submit;
    }

    function createJsonParticipant(){
        listeParticipant = new Array();
        $('#form_participant div.unParticipant').each(function () {
            participant = {
                nom : $("#participant_nom", this).val(),
                prenom : $("#participant_prenom", this).val(),
                dob : $("#participant_dob", this).val(),
                info : $("#participant_info", this).val()
            }
            listeParticipant.push(participant);
        });
    }







