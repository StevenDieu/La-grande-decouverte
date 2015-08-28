<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="content">
    <div class="content-inscription">
        <div class="legend">ERREUR FACTURE</div>  
        <?php
            echo form_open('user/verification/inscription');
        ?> 
        <div class="left">
            <label>Impossible de générer la facture, veuillez réessayer ultérieurement, merci.</label>
        </div>

         <div class="clear"></div>

        <div class="legend"></div>

        <?php
        echo form_close();
        ?>
    </div>
</div>
