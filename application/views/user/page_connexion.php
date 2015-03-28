<div class="content">
    <div class="content-connexion">
        <div class="legend">Connectez-vous ou créez un compte</div>

        <div class="colonne_left first">
            <h3>VOUS AVEZ DÉJÀ UN COMPTE ?</h3>
                <?php echo validation_errors(); ?>
                <?php echo form_open('user/verifIdentification/verifLogin'); ?>
                <div class="une_row">
                    <!--<label for="user" class="col-sm-5 control-label">Nom d'utilisateur</label>-->
                    <p>
                        <input type="text" name="user" maxlength="50" class="" id="user" placeholder="Nom d'utilisateur">
                    </p>
                </div>
                <div class="une_row">
                    <!--<label for="mdp" class="col-sm-5 control-label">Mot de passe</label>-->
                    <p>
                        <input type="text" name="mdp" maxlength="50" class="" id="mdp" placeholder="Mot de passe">
                    </p>
                </div>
                <div class="une_row">
                    <a href="#" class="back-link">
                        Mot de passe oublié?
                        <span class="floatright">* Champs obligatoires</span>
                    </a>
                </div>
                <div class="une_row">
                    <div class="submit_all_text">
                        <input type="submit" name="submit" class="" value="Valider"/>
                    </div>
                </div>

                <?php
                echo form_close();
                ?>
        </div>

        <div class="colonne_left second">
        <h3>Nouveaux Utilisateurs</h3>
            <div class="">
                <p>
                    En créant un compte, vous serez capable de procéder aux achats plus rapidement, 
                    de voir et suivre vos commandes sur votre compte et plus encore.
                </p>

                <a class="btn_inscription" href="<?php echo base_url('user/account/inscription') ?>">Créer un compte</a>

            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>