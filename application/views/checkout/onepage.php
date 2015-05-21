<script type="text/javascript">
    var urlBilling = '<?php echo base_url('checkout/cart/billing'); ?>';
</script>

<div class="content">
	<div id="wrapper"><!--start wrapper-->        
  		<div id="main_content"><!--start main_content-->
        	<div id="page_content"><!--start page_content-->
                <div id="admin_content"><!--start admin_content-->
                    <div id="commande_two_column"><!--start commande_two_column-->
                    	<div id="command_left_column"><!--start command_left_column-->
                        	<div class="command_panel"><!--start command_panel-->
                            	<h2 class="open_command">Identification</h2>
                                <div class="inside_command_panel">
                                	<div class="identification">
                                    	<div class="identification_left">
                                        	<h3>vous avez déjà un compte ?</h3>
                                            <form action="#">
                                            	<p><input type="text" value="Votre Email" onClick="if(this.value=='Votre Email')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre Email')" /></p>
                                                <p><input type="text" value="Votre Mot de passe" onClick="if(this.value=='Votre Mot de passe')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre Mot de passe')" /></p>
                                                <span><a href="#">J’ai perdu mon mot de passe ?</a></span>
                                                <div class="submit_command"><input type="submit" value="connexion" /></div>
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
                            <div class="command_panel"><!--start command_panel-->
                            	<h2 class="open_command">Mode de paiement</h2>
                                <div class="inside_command_panel">
                                	<form action="#" class="form_option differ_bg">
                                    	<div class="radio_holder">
                                        	<div class="radio_option"><input name="radio"  type="radio" /></div>
                                            <div class="payment_rgt">
                                            	<h6>carte bancaire</h6>
                                                <div class="payment_drop">
                                                	<select>
                                                    	<option>MasterCard</option>
                                                        <option>MasterCard</option>
                                                        <option>MasterCard</option>
                                                    </select>
                                                </div>
                                                <p>Vous serez redirigé vers le site Sogenactif à la fin du processus de commande pour procéder au paiement.</p>
                                            </div>
                                        </div>
                                        
                                        <div class="radio_holder">
                                        	<div class="radio_option"><input name="radio"  type="radio" /></div>
                                            <div class="payment_rgt">
                                            	<h6>paypal</h6>
                                            </div>
                                        </div>
                                        <div class="radio_holder">
                                        	<div class="radio_option"><input name="radio"  type="radio" /></div>
                                            <div class="payment_rgt">
                                            	<h6>Chèque / Mandat</h6>
                                            </div>
                                        </div>
                                        <div class="btn_postal_submit"><input type="submit" value="continuer" /></div>
                                    </form>
                                </div>
                            </div><!--//end .command_panel-->
                            <div class="command_panel"><!--start command_panel-->
                            	<h2 class="open_command">Vérification de ma commande</h2>
                                <div class="inside_command_panel">
                                	<div class="price_table title_table">
                                    	<div class="price_leftcolumn">
                                        	<h5 class="price_title">DESCRIPTION</h5>
                                        </div>
                                        <div class="total_rgt">
                                        	<h5 class="price_title">TOTAL</h5>
                                        </div>
                                    </div>
                                    <div class="price_table">
                                    	<div class="price_leftcolumn">
                                        	<span>Réf. 04</span>
                                            <h3><a href="#">Gourmandise</a></h3>
                                            <ul>
                                            	<li>Vaisselle</li>
                                                <li>Bol à talon</li>
                                                <li>x4</li>
                                            </ul>
                                            <strong>35,80 €</strong>
                                        </div>
                                        <div class="total_rgt">
                                        	<strong>35,80 €</strong>
                                        </div>
                                    </div>
                                    <div class="price_table">
                                    	<div class="price_leftcolumn">
                                        	<span>Réf. 04</span>
                                            <h3><a href="#">Le temps d'un week end</a></h3>
                                            <ul>
                                            	<li>Eponge brodée</li>
                                                <li>Drap de douche 70x140</li> 
                                                <li>x2</li>
                                            </ul>
                                            <strong>58,00 €</strong>
                                        </div>
                                        <div class="total_rgt">
                                        	<strong>58,00 €</strong>
                                        </div>
                                    </div>
                                    <div class="price_table">
                                    	<div class="price_leftcolumn">
                                        	<span>Réf. 04</span>
                                            <h3><a href="#">Les beaux jours</a></h3>
                                            <ul>
                                            	<li>ge de lit brodés &amp; imprimés</li>
                                                <li>Housse de couette 200x200</li>
                                                <li>x1</li>
                                            </ul>
                                            <strong>69,00 €</strong>
                                        </div>
                                        <div class="total_rgt">
                                        	<strong>69,00 €</strong>
                                        </div>
                                    </div>
                                    <div class="price_table subtotal">
                                    	<div class="price_leftcolumn">
                                        	<h5 class="price_title">sous - TOTAL</h5>
                                        </div>
                                        <div class="total_rgt">
                                        	<strong>135.67 €</strong>
                                        </div>
                                    </div>
                                    <div class="price_table subtotal">
                                    	<div class="price_leftcolumn">
                                        	<h5 class="price_title">TVA &amp; AUTRES TAXES</h5>
                                        </div>
                                        <div class="total_rgt">
                                        	<strong>27.10 €</strong>
                                        </div>
                                    </div>
                                    <div class="price_table total_price">
                                    	<div class="price_leftcolumn">
                                        	<h5 class="price_title">MONTANT GLOBAL</h5>
                                        </div>
                                        <div class="total_rgt">
                                        	<strong>162,80 €</strong>
                                        </div>
                                    </div>
                                    <div class="price_radio"><label><input name="radio" type="radio" />J'accepte <a href="#">les conditions générales de vente</a></label></div>
                                    <div class="reset_field">
                                    	<input type="reset" value="modifier ma commande" />
                                        <input type="submit" value="valider ma commande" />
                                    </div>
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

    function getBilling(){
        $.ajax({
            url: urlBilling , // ici l'url du controleur de la vue que tu veux faire appeller
            type: "post",
            data: "" ,
            beforeSend : function (){
                $(".inside_command_panel.billing").html(chargement)
            },
            success: function (result) {
                // Le result qui est déclaré est le code html que le controlleur va te renvoyer donc tu fais :
                $(".inside_command_panel.billing").html(result) // Pour afficher le contenu de la view
            }
        });
    }

    
    $( document ).ready(function() {
        $( ".openBilling h2" ).click(function() {
          getBilling();
        });
    });

</script>

