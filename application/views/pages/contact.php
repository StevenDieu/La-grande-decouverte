<div class="content">
    <div class="content-contact form-horizontal">

        <script src='https://www.google.com/recaptcha/api.js'></script>
        <?php
        echo validation_errors();
        echo form_open('contact/index/verifContact');
        // echo form_open('user/verifIdentification/verifInscription');
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
        <legend>Contact</legend>

        <!-- Text input-->
        <div class="form-group">
            <label for="nom" class="control-label col-sm-4">Nom *</label>
            <div class="controls">
                <div class="col-sm-8">
                    <input id="nom" name="nom" type="text" placeholder="nom" class="form-control">
                </div>
            </div>

        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="control-label col-sm-4" for="prenom">Prénom *</label>
            <div class="col-sm-8">
                <input id="prenom" name="prenom" type="text" placeholder="prenom" class="form-control">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="control-label col-sm-4" for="mail">Email *</label>
            <div class="col-sm-8">
                <input id="mail" name="mail" type="text" placeholder="mail" class="form-control">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="control-label col-sm-4" for="objet">Objet *</label>
            <div class="col-sm-8">
                <input id="objet" name="objet" type="text" placeholder="objet" class="form-control">

            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="control-label col-sm-4" for="message">Votre message *</label>
            <div class="col-sm-8">                     
                <textarea id="message" class="form-control" placeholder="Votre message" name="message"></textarea>
            </div>
        </div>
        <!-- ReCaptcha -->
        <div class="form-group">
            <label class="control-label col-sm-4" for="captacha"></label>
            <div class="col-sm-8">  
                <div class="g-recaptcha" data-sitekey="6LdLFAQTAAAAAJkTVuZtdW-Nf3mOQFIvNDQEhHDt"></div>
            </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <label class="control-label col-sm-4" for="envoyer"></label>
            <div class="col-sm-push-3 col-sm-8">
                <button id="envoyer" name="nvoyer" class="btn btn-success">Envoyer</button>
            </div>
        </div>
        <div class="form-group">
            <span class="help-block">* Champs obligatoires.</span>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>