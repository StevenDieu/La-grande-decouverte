<form action="#" class="adress_form">
    <div class="address_fields">
        <div class="address_fields_left">
            <p><input type="text" value="Votre Email" onClick="if(this.value=='Votre Email')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre Email')" /></p>
        </div>
        <div class="address_fields_left address_fields_rgt">
            <p><input type="text" value="Votre Mot de passe" onClick="if(this.value=='Votre Mot de passe')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre Mot de passe')" /></p>
            <p><input type="text" value="Confirmation de votre mot de passe*" onClick="if(this.value=='Confirmation de votre mot de passe*')(this.value='')"  onBlur="if(this.value=='')(this.value='Confirmation de votre mot de passe*')" /></p>
        </div>
    </div>
    <div class="all_text_field">
        <div class="address_fields_left">
            <p><input type="text" value="Votre Nom*" onClick="if(this.value=='Votre Nom*')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre Nom*')" /></p>
        </div>
        <div class="address_fields_left address_fields_rgt">
            <p><input type="text" value="Votre Prénom*" onClick="if(this.value=='Votre Prénom*')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre Prénom*')" /></p>
        </div>
        <div class="address_fields_left">
            <p><input type="text" value="Votre Société" onClick="if(this.value=='Votre Société')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre Société')" /></p>
        </div>
    </div>
    <div class="full_text">
        <p><input type="text" value="Votre Adresse*" onClick="if(this.value=='Votre Adresse*')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre Adresse*')" /></p>
    </div>
    <div class="full_text">
        <p><input type="text" value="Complément de votre Adresse" onClick="if(this.value=='Complément de votre Adresse')(this.value='')"  onBlur="if(this.value=='')(this.value='Complément de votre Adresse')" /></p>
    </div>
    <div class="all_text_field">
        <div class="address_fields_left">
            <p><input type="text" value="Votre Code postal*" onClick="if(this.value=='Votre Code postal*')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre Code postal*')" /></p>
        </div>
        <div class="address_fields_left address_fields_rgt">
            <p><input type="text" value="Votre Ville*" onClick="if(this.value=='Votre Ville*')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre Ville*')" /></p>
        </div>
        <div class="address_fields_left">
            <div class="select_bg">
                <select>
                    <option>L’État / La Région*</option>
                    <option>L’État / La Région*</option>
                </select>
            </div>
        </div>
        <div class="address_fields_left address_fields_rgt">
            <div class="select_bg">
                <select>
                    <option>Le Pays*</option>
                    <option>Le Pays*</option>
                </select>
            </div>
        </div>
    </div>
    <div class="all_text_field">
        <div class="address_fields_left">
            <p><input type="text" value="Votre numéro de téléphone*" onClick="if(this.value=='Votre numéro de téléphone*')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre numéro de téléphone*')" /></p>
        </div>
        <div class="address_fields_left address_fields_rgt">
            <p><input type="text" value="Votre numéro de fax" onClick="if(this.value=='Votre numéro de fax')(this.value='')"  onBlur="if(this.value=='')(this.value='Votre numéro de fax')" /></p>
        </div>
    </div>
    <div class="require_field">* Champs obligatoires</div>
    <div class="all_text_field">
        <div class="address_fields_left">
            <div class="submit_all_text"><input type="submit" value="continuer" /></div>
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