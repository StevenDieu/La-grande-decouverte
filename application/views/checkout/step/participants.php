<form action="#" class="adress_form" id="form_participant">

	<div class='unParticipant'>
	    <div class='all_text_field'>
	        <div class='address_fields_left'>
	            <p><input class='required' name='participant_nom' id='participant_nom' type='text' placeholder='Nom*' /></p>
	        </div>
	        <div class='address_fields_left address_fields_rgt'>
	            <p><input class='required' name='participant_prenom' id='participant_prenom' type='text' placeholder='Prénom*' /></p>
	        </div>
	        <div class='clear'></div>
	        <div class='address_fields_left'>
	            <p><input name='participant_dob' id='participant_dob' type='text' onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date de naissance" /></p>
	        </div>
	    </div>
	    <div class='full_text'>
	        <p><input class='required' name='participant_info' id='participant_info' type='text' placeholder='Information complèmentaire' /></p>
	    </div>
	    <a href='javascript:;'><img src='<?php echo base_url(''); ?>assets/images/checkout/icon_cancel.png' alt='cancel'>Supprime ce participant</a>
	</div>

    <div class="require_field">* Champs obligatoires</div>
    <div class="all_text_field">
        <div class="address_fields_left">
            <div class="submit_all_text"><input type="submit" id="participant_confirmation" value="continuer" /></div>
        </div>
    </div>
</form>
<script type="text/javascript">
	$('').click(function () {

    });
</script>