<form action="#" class="form_option differ_bg">
	<div class="radio_holder">
    	<div class="radio_option"><input class="radio_payment" name="radio"  type="radio" value="CB" /></div>
        <div class="payment_rgt">
        	<h6>carte bancaire</h6>
            <div class="payment_drop" style="display:none;">
                <select>
                    <option>MasterCard</option>
                    <option>MasterCard</option>
                    <option>MasterCard</option>
                </select>
                <p>Vous serez redirigé vers le site de votre banque après avoir confirmé votre achat.</p>
            </div>
        </div>
    </div>
    
    <div class="radio_holder">
    	<div class="radio_option"><input class="radio_payment" name="radio"  type="radio" value="PAYPAL" /></div>
        <div class="payment_rgt">
        	<h6>paypal</h6>
            <div class="payment_drop" style="display:none;">Vous serez redirigé vers le site paypal après avoir confirmé votre achat.</div>
        </div>
    </div>
    <div class="radio_holder">
    	<div class="radio_option"><input class="radio_payment" name="radio"  type="radio" value="CHECKMO" /></div>
        <div class="payment_rgt">
        	<h6>Chèque / Mandat</h6>
            <div class="payment_drop" style="display:none;">
                <ul>
                    <li>Le chèque sera à envoyer à l'adresse suivante :</li>
                    <li>Nom du magasin</li>
                    <li>nom de la rue</li>
                    <li>ville code postal</li>
                    <li>FRANCE</li>
                </ul>   
            </div>
        </div>
    </div>
    <div class="btn_postal_submit"><input id="confirmation_payment" type="submit" value="continuer" /></div>
</form>

<?php
$session_data = $this->session->userdata('logged_in');
$user_id = $session_data['id'];
?>

<script type="text/javascript">

function createJsonOrder(){
    order = 
    {
        date: '',
        id_user: '<?php echo $user_id; ?>',
        id_billing: '',
        nb_participant: listeParticipant.length,
        payment: $('input.radio_payment:checked').val(),
        prixTotal: '',
        sousTotal: '',
        taxe: '',
        acompte: '',
        resteAPayer: '',
        ip: '<?php echo $_SERVER['REMOTE_ADDR']; ?>',
        id_voyage: '',
        id_info_voyage : ''

    };
}

$( document ).ready(function() {
    $('.radio_payment').click(function () {
        $('.payment_drop').hide();
        $(this).parent().next().children('div.payment_drop').slideToggle("slow");
    });
});
</script>









