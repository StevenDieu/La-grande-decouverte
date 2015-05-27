<script type="text/javascript">
    var urlBilling = '<?php echo base_url('checkout/cart/billing'); ?>';
    var urlPayment = '<?php echo base_url('checkout/cart/payment'); ?>';
    var urlRecap = '<?php echo base_url('checkout/cart/recap'); ?>';
    var urlLogin = '<?php echo base_url('checkout/cart/login'); ?>';
    var urlParticipant = '<?php echo base_url('checkout/cart/participants'); ?>';
    var urlInscription = '<?php echo base_url('checkout/cart/inscription'); ?>';
    var urlCreate = '<?php echo base_url('checkout/cart/create'); ?>';
    var urlSave = '<?php echo base_url('checkout/cart/save'); ?>';
    var urlSucces = '<?php echo base_url('checkout/cart/getSucces'); ?>';
    var urlcgv = '<?php echo base_url('checkout/cart/getCgv'); ?>';
</script>

<?php 
if ($this->session->userdata('logged_in')) { ?>
    <script type="text/javascript">$( document ).ready(function() {isConnecter();});</script>
<?php } ?>

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
                                                <p><input id="password" name="password" type="password" value="Votre Mot de passe" onClick="if(this.value=='Votre Mot de passe')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre Mot de passe')" /></p>
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
                                            <a id="createAccount" href="#" class="command_btn">créer un compte</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--//end .command_panel-->

                            <div class="command_panel openInscription" style="display:none;"><!--start command_panel-->
                                <h2 class="open_command containInscription">Inscription</h2>
                                <div class="inside_command_panel inscription">
                                    <!-- contenu inscrition -->
                                </div>
                            </div><!--//end .command_panel-->

                            <div class="command_panel openBilling"><!--start command_panel-->
                            	<h2 class="open_command containBilling">Adresse de facturation </h2>
                                <div class="inside_command_panel billing">
                                	<!-- contenu adresse de facturation -->
                                </div>
                            </div><!--//end .command_panel-->

                            <div class="command_panel openParticipants"><!--start command_panel-->
                                <h2 class="open_command containParticipants">Liste des participants </h2>
                                <div class="inside_command_panel participants">
                                    <!-- contenu voyageur -->
                                </div>
                            </div><!--//end .command_panel-->

                            <div class="command_panel openPayment"><!--start command_panel-->
                            	<h2 class="open_command containPayment">Mode de paiement</h2>
                                <div class="inside_command_panel payment">
                                <!-- contenu payment -->
                                </div>
                            </div><!--//end .command_panel-->

                            <div class="command_panel openRecap"><!--start command_panel-->
                            	<h2 class="open_command containRecap">Vérification de ma commande</h2>
                                <div class="inside_command_panel recap">
                                	<!-- contenu recap -->
                                </div>
                            </div><!--//end .command_panel-->
                        </div><!--//end #command_left_column-->
                        <div id="command_right_column"><!--start command_right_column-->
                            <ul>
                                <li class="iden active"><a href="#">Identification</a></li>
                                <li class="billing">
                                    <a href="#">Adresse de facturation</a>
                                    <div class="container_adr">
                                        <p class="nom"></p>
                                        <p class="societe"></p>
                                        <p class="mail"></p>
                                        <p class="adr"></p>
                                        <p class="cpville"></p>
                                        <p class="regionpays"></p>
                                        <p class="tel"></p>
                                    </div>
                                </li>
                                <li class="participants">
                                    <a href="#">Liste des participants</a>
                                    <div class="container_participant">
                                    </div>
                                </li>
                                <li class="payment">
                                    <a href="#">Mode de paiement</a>
                                    <div class="container_payment"></div>
                                </li>
                                <li class="recap"><a href="#">Vérification de ma commande</a></li>
                            </ul>
                        </div><!--//end #command_right_column-->
                    </div><!--//end #commande_two_column-->
                </div><!--//end #admin_content-->
            </div><!--//end #page_content-->
        </div><!--//end #main_content-->
    </div><!--//end #wrapper-->
</div>

<script type="text/javascript">
    var chargement ="<p><img class='chargement' src='<?php echo base_url(''); ?>assets/images/checkout/ajax-loader.gif' alt='loader'></p>";
    var chargmeentLogin = "<img class='chargement' src='<?php echo base_url(''); ?>assets/images/checkout/ajax-loader.gif' alt='loader'>";

    $( document ).ready(function() {
        $( ".openPayment h2" ).click(function() {
            if(!$(this).parent().hasClass( "charger" )) getPayment();
        });
        $( ".openRecap h2" ).click(function() {
            if(!$(this).parent().hasClass( "charger" )) getRecap();
        });
        $( ".openParticipants h2" ).click(function() {
            if(!$(this).parent().hasClass( "charger" )) getParticipants();
        });
        $( "#createAccount" ).click(function() {
            createAccountClic();
        });

        $( "#connexion" ).click(function() {
            connexionOnepage();
            return false;
        });

        $('#wrapper').on('click', '#inscription_bouton', function () {
            createAccount();
            return false;
        });

        $('#wrapper').on('click', '#billing_confirmation', function () {
            if(verifChampBilling()){
                createJsonBilling();
                //console.log(billing);
                $(".open_command.containBilling").removeClass('active');
                $(".inside_command_panel.billing").css('display','none');
                $(".open_command.containBilling").addClass('check');
                getParticipants();
                jQuery(".open_command.containParticipants").toggleClass("active").next().slideToggle("slow");
                //affiche donnée dans bloc à droite
                $('#command_right_column li.billing p.nom').html(billing.nom+' '+billing.prenom);
                $('#command_right_column li.billing p.societe').html(billing.societe);
                $('#command_right_column li.billing p.mail').html(billing.email);
                $('#command_right_column li.billing p.adr').html(billing.adresss+' '+billing.complement_adresse);
                $('#command_right_column li.billing p.cpville').html(billing.codePostal+' '+billing.ville);
                $('#command_right_column li.billing p.regionpays').html(billing.region+' '+billing.pays);
                $('#command_right_column li.billing p.tel').html(billing.telephone+' '+billing.fax);
                $('#command_right_column li.billing .container_adr').show();
                $('#command_right_column li').removeClass('active');
                $('#command_right_column li.billing').addClass('check');
                $('#command_right_column li.participants').addClass('active');
            }
            return false;
        });

        $('#wrapper').on('click', '#participant_confirmation', function () {
            if(vérifFormulaireParticipant()){
                createJsonParticipant();
                $(".open_command.containParticipants").removeClass('active');
                $(".inside_command_panel.participants").css('display','none');
                $(".open_command.containParticipants").addClass('check');
                getPayment();
                jQuery(".open_command.containPayment").toggleClass("active").next().slideToggle("slow");
                //on affiche les participants dans bloc à droite
                var nbP = listeParticipant.length;
                $('#command_right_column div.container_participant').html('');
                $('#command_right_column div.container_participant').append('<p> '+nbP+' particpant(s) :<p>');
                for (var i = 0; i < nbP; i++) {
                    $('#command_right_column div.container_participant').append('<p class="nom_participant"> - '+listeParticipant[i].nom+' '+listeParticipant[i].prenom+'<p>');
                };
                $('#command_right_column li').removeClass('active');
                $('#command_right_column li.participants').addClass('check');
                $('#command_right_column li.payment').addClass('active');
            }else{
                alert('Tous les champs de chaque participant doivent être remplis !')
            }
            return false;
        });

        $('#wrapper').on('click', '#confirmation_payment', function () {
            if(!$('input.radio_payment:checked').val()){
                alert('Vous devez sélectionner au moins un mode de paiment');
            }else{
                createJsonOrder();
                $(".open_command.containPayment").removeClass('active');
                $(".inside_command_panel.payment").css('display','none');
                $(".open_command.containPayment").addClass('check');
                getRecap(<?php echo $id; ?>,<?php echo $idInfo; ?>,order.nb_participant);
                jQuery(".open_command.containRecap").toggleClass("active").next().slideToggle("slow");
                getCgv();
                $('#command_right_column li').removeClass('active');
                $('#command_right_column li.payment').addClass('check');
                if(order.payment == 'PAYPAL'){
                    var methode_paiement = 'Paypal';
                }else if(order.payment == 'CB'){
                    var methode_paiement = 'Carte bleue';
                }else{
                    var methode_paiement = 'Chèque';
                }
                $('#command_right_column li.payment div.container_payment').html('<p>'+methode_paiement+'</p>');
                $('#command_right_column li.recap').addClass('active');
            }
            
            return false;
        });


    });
</script>

