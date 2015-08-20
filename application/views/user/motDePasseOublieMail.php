<div class="content">
    <div class="content-motdepass">
        <div class="legend">Récupération Mot de passe</div>


        <?php if (isset($message)) { ?>
            <span class="mess_required">
                <p><?= $message ?></p>
            </span>
            <?php
        } else if (isset($mail) && isset($token)) {

            if (isset($messageRetour)) {
                ?>
                <span class="mess_required">
                    <p><?= $messageRetour ?></p>
                </span>
                <?php
            }
            echo form_open('user/verification/reloadPasswordMail');
            ?> 
            <input type="hidden" value="<?= $mail ?>" name="mail" />
            <input type="hidden" value="<?= $token ?>" name="token" />

            <span class="mess_required"><?php echo validation_errors(); ?></span>
            <div class="une_row">
                <p>
                    <input type="password" name="mdp" maxlength="50" class="required" id="mdp" placeholder="Mot de passe">
                </p>
            </div>

            <div class="une_row">
                <p>
                    <input type="password" name="cmdp" maxlength="50" class="required" id="cmdp" placeholder="Confirmation mot de passe">
                </p>
            </div>

            <div class="legend"></div>

            <div class="une_row">
                <input type="submit" name="submit" class="bblue w100 center" id="input_page_password" value="Valider">
            </div>
            <?php
            echo form_close();
        } else {
            ?>
            <span class="mess_required">
                <p>Un problème est survenu veuillez recommencer.</p>
            </span>
<?php } ?>
    </div>
</div>

<div class="clear"></div>
</div>
</div>