<div class="legend">
    Votre compte est en attente de validation
</div>  
<div class="identification">

    <div class="identification_left">
        <h3>INFORMATION PERSONNELLE</h3>
        <form action="#">
            <div>
                <p>   
                    &nbsp;&nbsp;&nbsp;&nbsp;Votre email :&nbsp;&nbsp;&nbsp;
                    <?php
                    if (isset($mail)) {
                        echo $mail;
                    }
                    ?>
                </p>
            </div>
            <div class="submit_command login"><input id="verifMailValidation" type="button" value="Continuer" /></div>
        </form>
    </div>
    <div class="identification_left rgt_command">
        <h3>INFORMATION COMPLEMENTAIRE</h3>
        &nbsp;&nbsp;&nbsp;&nbsp;Nous venons de <b>vous envoyez un mail</b>,vérifiez votre boite e-mail pour valider votre compte.<br/><br/>

        &nbsp;&nbsp;&nbsp;&nbsp;Vous n'avez pas reçu de mail ?<br/><br/><br/>

        <div class="submit_command login"><input type="button" data-mail="<?= $mail; ?>"  class="sendMail" value="Renvoyer le mail"></div>
    </div>
</div>

<script type="text/javascript">
    $("#verifMailValidation").on('click', function () {
        verifMail()
    });
</script>