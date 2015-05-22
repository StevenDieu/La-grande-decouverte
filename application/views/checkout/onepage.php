<script type="text/javascript">
    var urlBilling = '<?php echo base_url('checkout/cart/billing'); ?>';
    var urlPayment = '<?php echo base_url('checkout/cart/payment'); ?>';
    var urlRecap = '<?php echo base_url('checkout/cart/recap'); ?>';
    var urlLogin = '<?php echo base_url('checkout/cart/login'); ?>';
</script>

<div class="content">
	<div id="wrapper"><!--start wrapper-->        
  		<div id="main_content"><!--start main_content-->
        	<div id="page_content"><!--start page_content-->
                <div id="admin_content"><!--start admin_content-->
                    <div id="commande_two_column"><!--start commande_two_column-->
                    	<div id="command_left_column"><!--start command_left_column-->
                        	<div class="command_panel"><!--start command_panel-->
                            	<h2 class="open_command first">Identification</h2>
                                <div class="inside_command_panel ajaxLogin">
                                	<div class="identification">
                                    	<div class="identification_left">
                                        	<h3>vous avez déjà un compte ?</h3>
                                            <form action="#">
                                            	<p><input id="login" name="login" type="text" value="Votre Email" onClick="if(this.value=='Votre Email')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre Email')" /></p>
                                                <p><input id="password" name="password" type="text" value="Votre Mot de passe" onClick="if(this.value=='Votre Mot de passe')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre Mot de passe')" /></p>
                                                <span><a href="#">J’ai perdu mon mot de passe ?</a></span>
                                                <div class="submit_command login"><input id="connexion" type="submit" value="connexion" /></div>
                                            </form>
                                        </div>
                                        <div class="identification_left rgt_command">
                                        	<h3>VOUS êtes Nouveau client ?</h3>
                                            <h4>Gagnez du temps !</h4>
                                            <p>Enregistrez-vous et profitez de nombreux avantages :</p>
                                            <ul class="list_item">
                                            	<li>Commander plus vite et plus facilement</li>
                                                <li>Consultez et suivez vos commandes</li>
                                            </ul>
                                            <a href="#" class="command_btn">créer un compte</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--//end .command_panel-->

                            <div class="command_panel openBilling"><!--start command_panel-->
                            	<h2 class="open_command">Adresse de facturation </h2>
                                <div class="inside_command_panel billing">
                                	<!-- contenu adresse de facturation -->
                                </div>
                            </div><!--//end .command_panel-->

                            <div class="command_panel openPayment"><!--start command_panel-->
                            	<h2 class="open_command">Mode de paiement</h2>
                                <div class="inside_command_panel payment">
                                <!-- contenu payment -->
                                </div>
                            </div><!--//end .command_panel-->

                            <div class="command_panel openRecap"><!--start command_panel-->
                            	<h2 class="open_command">Vérification de ma commande</h2>
                                <div class="inside_command_panel recap">
                                	<!-- contenu recap -->
                                </div>
                            </div><!--//end .command_panel-->

                        </div><!--//end #command_left_column-->
                    </div><!--//end #commande_two_column-->
                </div><!--//end #admin_content-->
            </div><!--//end #page_content-->
        </div><!--//end #main_content-->
    </div><!--//end #wrapper-->


</div>

<script type="text/javascript">
    var chargement ="<p><img src='<?php echo base_url(''); ?>assets/images/checkout/ajax-loader.gif' alt='loader'></p>";
    var chargmeentLogin = "<img class='chargement' src='<?php echo base_url(''); ?>assets/images/checkout/ajax-loader.gif' alt='loader'>";

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
    
    $( document ).ready(function() {
        $( ".openBilling h2" ).click(function() {
            if(!$(this).parent().hasClass( "charger" )) getBilling();
        });
        $( ".openPayment h2" ).click(function() {
          if(!$(this).parent().hasClass( "charger" )) getPayment();
        });
        $( ".openRecap h2" ).click(function() {
          if(!$(this).parent().hasClass( "charger" )) getRecap();
        });

        $( "#connexion" ).click(function() {
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
                }else{
                    $('.identification_left .chargement').remove();
                    alert('pas co');
                }
                
            }
        });

          return false;
        });
    });

</script>

