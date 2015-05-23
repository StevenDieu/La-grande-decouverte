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
            <p><input name="billing_societe" id="billing_societe" type="text" value="Votre Société" onClick="if(this.value=='Votre Société')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre Société')" /></p>
        </div>
        <div class="address_fields_left address_fields_rgt">
            <p><input class="required" name="billing_email" id="billing_email" type="text" value="Votre Email" onClick="if(this.value=='Votre Email')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre Email')" /></p>
        </div>
    </div>

    <div class="full_text">
        <p><input class="required" name="billing_adresse" id="billing_adresss" type="text" placeholder="Votre Adresse*" /></p>
    </div>
    <div class="full_text">
        <p><input name="billing_complement_adresse" id="billing_complement_adresse" type="text" value="Complément de votre Adresse" onClick="if(this.value=='Complément de votre Adresse')(this.value='')"  onBlur="if(this.value=='')(this.value='Complément de votre Adresse')" /></p>
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
                    <option value="62">Pas de Calais</option>
                </select>
            </div>
        </div>
        <div class="address_fields_left address_fields_rgt">
            <div class="select_bg">
                <select name="billing_pays" id="billing_pays" >
                    <option value="" disabled selected>Pays*</option>
                    <option value="FR">France</option>
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
            <p><input name="billing_fax" id="billing_fax" type="text" value="Votre numéro de fax" onClick="if(this.value=='Votre numéro de fax')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre numéro de fax')" /></p>
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

    $('#billing_confirmation').click(function () {
        if(verifChampBilling()){
            createJsonBilling();
            //console.log(billing);
            $(".open_command.containBilling").removeClass('active');
            $(".inside_command_panel.billing").css('display','none');
            $(".open_command.containBilling").addClass('check');
            getParticipants();
            jQuery(".open_command.containParticipants").toggleClass("active").next().slideToggle("slow");
        }
        return false;
    });

    
</script>