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
                                            <?php echo form_open('checkout/cart/onepage'); ?>
                                            	<p><input type="text" name="user" maxlength="50" class="" id="user" placeholder="Nom d'utilisateur*" /></p>
                                                <p><input type="text" name="mdp" maxlength="50" class="" id="mdp" placeholder="Mot de passe*"></p>
                                                <span><a href="#">J’ai perdu mon mot de passe ?</a></span>  
                                                <div class="submit_command"><input type="submit" name="submit" class="" value="Valider"/></div>
                                                <?php
                                                echo form_close();
                                                ?>
                                        </div>
                                        <div class="identification_left rgt_command">
                                        	<h3>VOUS êtes Nouveau client ?</h3>
                                            <a href="<?php echo base_url('user/account/inscription') ?>" class="command_btn">créer un compte</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--//end .command_panel-->
                            <div class="command_panel"><!--start command_panel-->
                            	<h2 class="open_command">Liste des participants </h2>
                                <div class="inside_command_panel">
                                	<form action="#" class="adress_form">
                                        <h3>Merci de choisir le nombre de participants au voyage et de remplir les champs d'informations ci-dessous.</h3>
                                        <div class="nb_participants_fields">
                                            <h4>Nombres de participants :</h4>
                                            <div class="select_bg">
                                                <select class="nb_participants">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Contenu dynamique -->
                                        <div class="participants">
                                        </div>
                                        <div class="all_text_field">
                                        	<div class="address_fields_left">
                                            	<div class="submit_all_text"><input type="submit" value="continuer" /></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!--//end .command_panel-->
                            <div class="command_panel"><!--start command_panel-->
                            	<h2 class="open_command">Informations de facturation</h2>
                                <div class="inside_command_panel">
                                	<form action="#" class="adress_form">
                                    	<h3>Merce de reiseigner les informations ci-dessous concernant la facturation.</h3>
                                        <div class="btn_check_box">
                                            <div class="check_widget">
                                                <div class="rowElem">
                                                   <label><input name="civilite"  type="radio" /> Madame</label>
                                                </div>
                                            </div>
                                            <div class="check_widget">
                                                <div class="rowElem">
                                                   <label><input name="civilite"  type="radio" /> Mademoiselle</label>
                                                </div>
                                            </div>
                                            <div class="check_widget">
                                                <div class="rowElem">
                                                   <label><input name="civilite"  type="radio" /> Monsieur</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="radio_holder">
                                            <input type="radio" name="civilite" value="Mme">Mme
                                            <input type="radio" name="civilite" value="Mlle">Mlle
                                            <input type="radio" name="civilite" value="M">M
                                        </div>-->
                                        <div class="all_text_field">
                                        	<div class="address_fields_left">
                                            	<p><input type="text" placeholder="Votre Nom*" name="nom" /></p>
                                            </div>
                                            <div class="address_fields_left address_fields_rgt">
                                            	<p><input type="text" placeholder="Votre Prénom*" name="prenom" /></p>
                                            </div>
                                        </div>
                                        <div class="full_text">
                                        	<p><input type="text" placeholder="Votre Adresse*" name="adresse" /></p>
                                        </div>
                                        <div class="full_text">
                                        	<p><input type="text" placeholder="Complément de votre Adresse" name="complementAdresse" /></p>
                                        </div>
                                        <div class="all_text_field">
                                        	<div class="address_fields_left">
                                            	<p><input type="text" placeholder="Votre Code postal*" name="codePostal" /></p>
                                            </div>
                                            <div class="address_fields_left address_fields_rgt">
                                            	<p><input type="text" placeholder="Votre Ville*" name="ville" /></p>
                                            </div>
                                            <div class="address_fields_left address_fields_rgt">
                                                <p><input type="text" placeholder="Votre Pays*" name="pays" /></p>
                                            </div>
                                        </div>
                                        <div class="all_text_field">
                                        	<div class="address_fields_left">
                                            	<p><input type="text" placeholder="Votre numéro de téléphone*" name="telephone" /></p>
                                            </div>
                                            <div class="address_fields_left address_fields_rgt">
                                            	<p><input type="text" placeholder="Votre numéro de fax" name="fax" /></p>
                                            </div>  
                                        </div>
                                        <div class="require_field">* Champs obligatoires</div>
                                        
                                        <div class="all_text_field">
                                        	<div class="address_fields_left">
                                            	<div class="submit_all_text"><input type="submit" value="continuer" /></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!--//end .command_panel-->
                            
                            <div class="command_panel"><!--start command_panel-->
                            	<h2 class="open_command">Mode de paiement</h2>
                                <div class="inside_command_panel">
                                	<form action="#" class="form_option differ_bg adress_form">
                                        <div class="btn_check_box">
                                            <div class="check_widget">
                                                <div class="rowElem">
                                                   <label><input name="modePayement"  type="radio" /> Carte Bleu</label>
                                                </div>
                                            </div>
                                            <div class="check_widget">
                                                <div class="rowElem">
                                                   <label><input name="modePayement"  type="radio" /> Visa</label>
                                                </div>
                                            </div>
                                            <div class="check_widget">
                                                <div class="rowElem">
                                                   <label><input name="modePayement"  type="radio" /> MasterCard</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="full_text">
                                            <p><input type="text" placeholder="Nom du titulaire de la carte*" name="titulaire"/></p>
                                        </div>
                                        <div class="full_text">
                                            <p><input type="text" placeholder="Numero de la carte*" name="numeroCB"/></p>
                                        </div>
                                        <div class="full_text">
                                            <h4>Date de validite</h4>
                                            <div class="select_bg">
                                                <input type="text" class="datepicker">
                                            </div>
                                        </div>
                                        <div class="full_text">
                                            <p><input type="text" placeholder="Cryptogramme de sécurité*" name="cryptogramme"/></p>
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
                        <div id="command_right_column"><!--start command_right_column-->
                        	<ul>
                            	<li><a href="#">identification</a></li>
                                <li><a href="#">Adresse de facturation</a></li>
                                <li><a href="#">Adresse de livraison</a></li>
                                <li><a href="#">mode de paiement</a></li>
                                <li><a href="#">Vérification</a></li>
                            </ul>
                        </div><!--//end #command_right_column-->
                    </div><!--//end #commande_two_column-->
                </div><!--//end #admin_content-->
            </div><!--//end #page_content-->
        </div><!--//end #main_content-->
    </div><!--//end #wrapper-->
</div>
    <script type="text/javascript" src="<?php echo asset_url(''); ?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo asset_url(''); ?>js/jquery.uniform.js" ></script>
    <!--<script type="text/javascript" src="<?php echo asset_url(''); ?>js/custom.js"></script>-->
    <script type="text/javascript">
		jQuery(function () {
			var jQuerymin, jQueryremove, jQueryapply, jQueryuniformed;

            /*******************************************************
			 * génère le contenu HTML pour pouvoir saisir les informations des participats, en fonction du nombre de participants sélectionnés.
             *******************************************************/
            jQuery(".nb_participants").change(function () {
                if (typeof console !== 'undefined' && typeof console.log !== 'undefined') {
                    jQuery(".participants").empty();
                    for (var i=1; i<=jQuery(this).val(); i++)
                    {
                        jQuery(".participants").append(
                            "<div class='participant'><h3>Participant " + i + "</h3>" +
                                "<div class='info_participants'>" +
                                    "<p><input type='text' name='participant_nom" + i + "' placeholder='Nom*'/></p>" +
                                    "<p><input type='text' name='participant_prenom" + i + "' placeholder='Prénom*'/></p>" +
                                    "<p><input type='text' name='participant_dateDeNaissance" + i + "' placeholder='Date de naissance*'/></p>" +
                                "</div>" +
                            "</div>")
                    }
                }
            });

			jQueryuniformed = jQuery(".select_bg,.rowElem,.radio_option,.postal_radio_left,.payment_drop,.price_radio").find("select,input").not(".skipThese");
			jQueryuniformed.uniform();
		});
    </script>
