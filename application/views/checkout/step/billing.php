<form action="#" class="adress_form" id="form_billing">
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
                        <option value="<?php echo $departement->label ?>"><?php echo $departement->code ?> <?php echo $departement->label ?></option>
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