<form action="#" class="adress_form" id="form_billing">
    <?php if(isset($billing)): ?>
        <input type="hidden" name="billing_id" id="billing_id" value="<?php echo $billing[0]->id; ?>">
        <div class="all_text_field">
            <div class="address_fields_left">
                <p><input class="required" name="billing_nom" id="billing_nom" type="text" placeholder="Votre Nom*" value="<?php echo $billing[0]->nom; ?>" /></p>
            </div>
            <div class="address_fields_left address_fields_rgt">
                <p><input class="required" name="billing_prenom" id="billing_prenom" type="text" placeholder="Votre Prénom*" value="<?php echo $billing[0]->prenom; ?>"/></p>
            </div>
            <div class="clear"></div>
            <div class="address_fields_left">
                <p><input name="billing_societe" id="billing_societe" type="text" placeholder="Votre Société" value="<?php echo $billing[0]->societe; ?>"/></p>
            </div>
            <div class="address_fields_left address_fields_rgt">
                <p><input class="required" name="billing_email" id="billing_email" type="mail" placeholder="Votre Email*" value="<?php echo $billing[0]->email; ?>"/></p>
            </div>
        </div>

        <div class="full_text">
            <p><input class="required" name="billing_adresse" id="billing_adresss" type="text" placeholder="Votre Adresse*" value="<?php echo $billing[0]->adresse; ?>"/></p>
        </div>
        <div class="full_text">
            <p><input name="billing_complement_adresse" id="billing_complement_adresse" type="text" placeholder="Complément de votre Adresse" value="<?php echo $billing[0]->complement_adresse; ?>"/></p>
        </div>
        <div class="all_text_field">
            <div class="address_fields_left">
                <p><input class="required" name="billing_code_postal" id="billing_code_postal" type="text" placeholder="Votre Code postal*" value="<?php echo $billing[0]->code_postal; ?>"/></p>
            </div>
            <div class="address_fields_left address_fields_rgt">
                <p><input class="required" name="billing_ville" id="billing_ville" type="text" placeholder="Votre Ville*" value="<?php echo $billing[0]->ville; ?>"/></p>
            </div>
            <div class="address_fields_left">
                <div class="select_bg">
                    <select name="billing_region" id="billing_region" >
                        <option value="" disabled selected>L’État / La Région*</option>
                        <?php foreach ($departements as $departement) { ?>
                            <option <?php if($departement->id == $billing[0]->id_departements) echo "selected"; ?> value="<?php echo $departement->id ?>"><?php echo $departement->code ?> <?php echo $departement->label ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="address_fields_left address_fields_rgt">
                <div class="select_bg">
                    <select name="billing_pays" id="billing_pays" >
                        <option value="" disabled selected>Pays*</option>
                        <option <?php if($billing[0]->pays == "France") echo "selected"; ?> value="France">France</option>
                    </select>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="all_text_field">
            <div class="address_fields_left">
                <p><input class="required" name="billing_telephone" id="billing_telephone" type="text" placeholder="Votre numéro de téléphone*" value="<?php echo $billing[0]->telephone; ?>"/></p>
            </div>
            <div class="address_fields_left address_fields_rgt">
                <p><input name="billing_fax" id="billing_fax" type="text" placeholder="Votre numéro de fax" value="<?php echo $billing[0]->fax; ?>"/></p>
            </div>
        </div>
        <div class="require_field">* Champs obligatoires</div>
        <div class="all_text_field">
            <div class="address_fields_left">
                <div class="submit_all_text"><input type="submit" id="billing_confirmation_edit" value="continuer" /></div>
            </div>
        </div>
    <?php else: ?>
        <div class="all_text_field">
            <div class="address_fields_left">
                <p><input class="required" name="billing_nom" id="billing_nom" type="text" placeholder="Votre Nom*" /></p>
            </div>
            <div class="address_fields_left address_fields_rgt">
                <p><input class="required" name="billing_prenom" id="billing_prenom" type="text" placeholder="Votre Prénom*" /></p>
            </div>
            <div class="clear"></div>
            <div class="address_fields_left">
                <p><input name="billing_societe" id="billing_societe" type="text" placeholder="Votre Société"/></p>
            </div>
            <div class="address_fields_left address_fields_rgt">
                <p><input class="required" name="billing_email" id="billing_email" type="text" placeholder="Votre Email*" /></p>
            </div>
        </div>

        <div class="full_text">
            <p><input class="required" name="billing_adresse" id="billing_adresss" type="text" placeholder="Votre Adresse*" /></p>
        </div>
        <div class="full_text">
            <p><input name="billing_complement_adresse" id="billing_complement_adresse" type="text" placeholder="Complément de votre Adresse" /></p>
        </div>
        <div class="all_text_field">
            <div class="address_fields_left">
                <p><input class="required" name="billing_code_postal" id="billing_code_postal" type="text" placeholder="Votre Code postal*" /></p>
            </div>
            <div class="address_fields_left address_fields_rgt">
                <p><input class="required" name="billing_ville" id="billing_ville" type="text" placeholder="Votre Ville*" /></p>
            </div>
            <div class="address_fields_left">
                <div class="select_bg">
                    <select name="billing_region" id="billing_region" >
                        <option value="" disabled selected>L’État / La Région*</option>
                        <?php foreach ($departements as $departement) { ?>
                            <option value="<?php echo $departement->id ?>"><?php echo $departement->code ?> <?php echo $departement->label ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="address_fields_left address_fields_rgt">
                <div class="select_bg">
                    <select name="billing_pays" id="billing_pays" >
                        <option value="" disabled selected>Pays*</option>
                        <option value="France">France</option>
                    </select>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="all_text_field">
            <div class="address_fields_left">
                <p><input class="required" name="billing_telephone" id="billing_telephone" type="text" placeholder="Votre numéro de téléphone*" /></p>
            </div>
            <div class="address_fields_left address_fields_rgt">
                <p><input name="billing_fax" id="billing_fax" type="text" placeholder="Votre numéro de fax" /></p>
            </div>
        </div>
        <div class="require_field">* Champs obligatoires</div>
        <div class="all_text_field">
            <div class="address_fields_left">
                <div class="submit_all_text"><input type="submit" id="billing_confirmation" value="continuer" /></div>
            </div>
        </div>
    <?php endif; ?>
</form>
<script type="text/javascript" src="<?php echo asset_url(''); ?>js/checkout/jquery.uniform.js" ></script>
<script type="text/javascript">
    jQuery(function () {
        var jQuerymin, jQueryremove, jQueryapply, jQueryuniformed;
        // Debugging code to check for multiple click events
        jQueryselects = jQuery("select").click(function () {
            if (typeof console !== 'undefined' && typeof console.log !== 'undefined') {
                console.log(jQuery(this).attr('id') + " clicked");
            }
        });
        jQueryuniformed = jQuery(".select_bg,.rowElem,.radio_option,.postal_radio_left,.payment_drop,.price_radio").find("select,input").not(".skipThese");
        jQueryuniformed.uniform();
    });
    
</script>