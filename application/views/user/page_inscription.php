<div class="content">
    <div class="content-inscription">
        <?php
        echo validation_errors();
        echo form_open('user/verifIdentification/verifInscription');
        ?>
        <div class="legend">Inscription</div>
        <h3>INFORMATION PERSONNELLE</h3>
        <div class="une_row">
            <!--<label for="nom" class="">Nom *</label>-->
            <p>
                <input type="text" name="nom" maxlength="50" class="" id="nom" placeholder="Votre nom">
            </p>
        </div>

        <div class="une_row">
            <!--<label for="prenom" class="">Prenom *</label>-->
            <p>
                <input type="text" name="prenom" maxlength="50" class="" id="prenom" placeholder="Votre prenom">
            </p>
        </div>

        <div class="une_row">
            <!--<label for="user" class="">Nom d'utilisateur *</label>-->
            <p>
                <input type="text" name="user" maxlength="50" class="" id="user" placeholder="Votre nom d'utilisateur">
            </p>
        </div>

        <div class="une_row">
            <!--<label for="email" class="">E-mail *</label>-->
            <p>
                <input type="email" name="email" class="" id="email" placeholder="Votre e-mail">
            </p>
        </div>

        <div class="une_row">
            <!--<label for="cemail" class="">Confirmation E-mail *</label>-->
            <p>
                <input type="email" name="cemail" class="" id="cemail" placeholder="Confirmer votre e-mail">
            </p>
            <div class="clear"></div>
        </div>
        <h3>INFORMATION DE CONNEXION</h3>
        <div class="une_row">
            <!--<label for="mdp" class="">Mot de passe *</label>-->
            <p>
                <input type="password" name="mdp" maxlength="50" class="" id="mdp" placeholder="Votre mot de passe">
            </p>
        </div>

        <div class="une_row">
            <!--<label for="cmdp" class="">Confirmation mot de passe *</label>-->
            <p>
                <input type="password" name="cmdp" maxlength="50" class="" id="cmdp" placeholder="Confirmer votre mot de passe">
            </p>
        </div>
        <div class="une_row">
            <a href="<?php echo base_url('user/account/connexion') ?>" class="back-link">
                <small>«</small>Retour
                <span class="floatright">* Champs obligatoires</span>
            </a>
        </div>
        <div class="une_row">
            <div class="submit_all_text">
                <input type="submit" name="submit" class="" value="Valider"/>
            </div>
            <div class="clear"></div>
        </div>
        <?php
        echo form_close();
        ?>
        <div class="clear"></div>
    </div>
</div>
