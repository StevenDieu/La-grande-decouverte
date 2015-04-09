<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="content">
    <div class="content-contact">
        <span class="mess_required"><?php echo validation_errors(); ?></span>
        <?php
        echo form_open('contact/index/verification');
        //message d'erreur/validation après envoie du formulaire de contact.
        if ($error == -1) {
            echo "Erreur lors de l'envoie du message.";
        } elseif ($error == 1) {
            echo "Votre message à bien été envoyer, nous vous répondrons dès que possible.";
        } elseif ($error == -2) {
            echo "N'oubliez pas de dire que vous n'êtes pas un robot.";
        }
        ?>
        <!-- Form Name -->
        <div class="legend">Contact</div>

        <!-- Text input-->
        <div class="une_row">
            <!--<label for="nom" class="control-label col-sm-4">Nom *</label>-->
            <p>
                <input id="nom" name="nom" type="text" placeholder="Votre nom*" class="required">
            </p>
        </div>

        <!-- Text input-->
        <div class="une_row">
            <!--<label class="control-label col-sm-4" for="prenom">Prénom *</label>-->
            <p>
                <input id="prenom" name="prenom" type="text" placeholder="Votre prénom*" class="required">
            </p>
        </div>

        <!-- Text input-->
        <div class="une_row">
            <!--<label class="control-label col-sm-4" for="mail">Email *</label>-->
            <p>
                <input id="mail" name="mail" type="text" placeholder="Votre mail*" class="required">

            </p>
        </div>

        <!-- Text input-->
        <div class="une_row">
            <!--<label class="control-label col-sm-4" for="objet">Objet *</label>-->
            <p>
                <input id="objet" name="objet" type="text" placeholder="Votre objet*" class="required">
            </p>
        </div>

        <!-- Textarea -->
        <div class="une_row">
            <!--<label class="control-label col-sm-4" for="message">Votre message *</label>-->
                <textarea id="message" class="required" placeholder="Votre message*" name="message"></textarea>
        </div>
        <!-- ReCaptcha -->
        <div class="">
            <!--<label class="control-label col-sm-4" for="captacha"></label>-->
            <p>  
                <div class="g-recaptcha" data-sitekey="6LdLFAQTAAAAAJkTVuZtdW-Nf3mOQFIvNDQEhHDt"></div>
            </p>
        </div>
        <div class="une_row">
            <a href="#" class="">
                <span class="floatright">* Champs obligatoires</span>
            </a>
            <div class="clear"></div>
        </div>
        <!-- Button -->
        <div class="une_row">
            <div class="submit_all_text">
                <button name="envoyer" id="bouton_envoi_contact" class="">Envoyer</button>
            </div>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>