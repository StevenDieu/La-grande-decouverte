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
			
			return false; 
		}

		
	});

	jQuery(".open_command.first").toggleClass("active").next().slideToggle("slow");
});



//function tunnel de commande ajax

    

    function getBilling(){
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

    function getRecap(){
        $.ajax({
            url: urlRecap , // ici l'url du controleur de la vue que tu veux faire appeller
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

    function getParticipants(){
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




