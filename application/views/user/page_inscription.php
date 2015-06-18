<div class="content">
    <div class="content-inscription">

        <span class="mess_required"><?php echo validation_errors(); ?></span>
        <?php
        echo form_open('user/verification/inscription');
        ?>
        <div class="legend">Inscription</div>
        <h3>INFORMATION PERSONNELLE</h3>
        <div class="une_row">
            <!--<label for="nom" class="">Nom *</label>-->
            <p>
                <input type="text" name="nom" maxlength="50" class="required" id="nom" placeholder="Votre nom*">
            </p>
        </div>

        <div class="une_row">
            <!--<label for="prenom" class="">Prenom *</label>-->
            <p>
                <input type="text" name="prenom" maxlength="50" class="required" id="prenom" placeholder="Votre prenom*">
            </p>
        </div>

        <div class="une_row mail">
            <!--<label for="email" class="">E-mail *</label>-->
            <p>
                <input type="email" name="email" class="required mail" id="email" placeholder="Votre e-mail*" <?php if (isset($mail)) {
            echo "value='" . $mail . "'";
        } ?>>
            </p>
        </div>

        <div class="une_row mail cmail">
            <!--<label for="cemail" class="">Confirmation E-mail *</label>-->
            <p>
                <input type="email" name="cemail" class="required cmail" id="cemail" placeholder="Confirmer votre e-mail*">
            </p>
        </div>
        <h3>INFORMATION DE CONNEXION</h3>
        <div class="une_row mdp">
            <!--<label for="mdp" class="">Mot de passe *</label>-->
            <p>
                <input type="password" name="mdp" maxlength="50" class="required mdp" id="mdp" placeholder="Votre mot de passe*">
            </p>
        </div>

        <div class="une_row mdp cmdp">
            <!--<label for="cmdp" class="">Confirmation mot de passe *</label>-->
            <p>
                <input type="password" name="cmdp" maxlength="50" class="required cmdp" id="cmdp" placeholder="Confirmer votre mot de passe*">
            </p>
        </div>
        <div class="une_row">
            <a href="<?php echo base_url('user/account/connexion') ?>" class="">
                <small>«</small>Connexion
            </a>
            <span class="floatright">* Champs obligatoires</span>

        </div>
        <div class="une_row">
            <div class="submit_all_text">
                <input type="submit" name="submit" class="" id="bouton_page_inscription" value="Valider"/>
            </div>
            <div class="clear"></div>
        </div>
        <?php
        echo form_close();
        ?>
        <div class="clear"></div>
    </div>
</div>
