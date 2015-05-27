<form action="#" class="adress_form" id="form_participant">
    <div class="ensembleParticipants">
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
                    <p><input class='required' name='participant_dob' id='participant_dob' type='text' onfocus="(this.type = 'date')" onblur="(this.type = 'text')" placeholder="Date de naissance*" /></p>
                </div>
            </div>
            <div class='full_text'>
                <p><input name='participant_info' id='participant_info' type='text' placeholder='Information complèmentaire' /></p>
            </div>
            <a href='javascript:;' id='delete_participant'><img src='<?php echo base_url(''); ?>assets/images/checkout/icon_cancel.png' alt='cancel'>Supprime ce participant</a>
        </div>
    </div>
    <a id="add_participant" href="javascript:;" class="buttonAjouterBoUtilisateur bgreen"> 
        <span class="placementGlyphicon">
            <span class="glyphicon glyphicon-plus"></span>
        </span>
        ajouter un participant
    </a>

    <div class="require_field">* Champs obligatoires</div>
    <div class="all_text_field">
        <div class="address_fields_left">
            <div class="submit_all_text"><input type="submit" id="participant_confirmation" value="continuer" /></div>
        </div>
    </div>
</form>
<script type="text/javascript">
    var confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";

    $(document).ready(function () {

        $('#form_participant').on('click', '#delete_participant', function () {
            if ($('div.unParticipant').length == 1) {
                alert("Vous devez garder au un participant au voyage !");
                return false;
            }
            if (confirm(confirmation)) {
                $(this).parent().remove();
            }
        });

        $('#add_participant').click(function () {
            $('.ensembleParticipants').append("<div class='unParticipant'><div class='all_text_field'><div class='address_fields_left'><p><input class='required' name='participant_nom' id='participant_nom' type='text' placeholder='Nom*' /></p></div><div class='address_fields_left address_fields_rgt'><p><input class='required' name='participant_prenom' id='participant_prenom' type='text' placeholder='Prénom*' /></p></div><div class='clear'></div><div class='address_fields_left'><p><input class='required' name='participant_dob' id='participant_dob' type='text' onfocus='(this.type=\"date\")' onblur='(this.type=\"text\")' placeholder='Date de naissance*' /></p></div></div><div class='full_text'><p><input name='participant_info' id='participant_info' type='text' placeholder='Information complèmentaire' /></p></div><a href='javascript:;' id='delete_participant'><img src='<?php echo base_url(''); ?>assets/images/checkout/icon_cancel.png' alt='cancel'>Supprime ce participant</a></div>");
        });

    });
</script>