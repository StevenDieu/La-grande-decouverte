<div class="content">
    <div class="content-motdepass">
        <div class="legend">Mot de passe oublié</div>

        <?php
        echo form_open('user/verification/reloadPassword');
        ?> 

        <?php if (isset($message)) { ?>
            <span class="mess_required">
                <p><?= $message ?></p>
            </span>
        <?php } ?>

        <div class="left">
            <span class="mess_required"><?php echo validation_errors(); ?></span>
            <div class="une_row">
                <p>
                    <input type="text" name="mail" maxlength="50" class="required" id="mail" placeholder="Votre adresse mail">
                </p>
            </div>
        </div>


        <div class="legend"></div>

        <div class="une_row">
            <input type="submit" name="submit" class="bblue w100 center" id="input_page_password" value="Valider">
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>

<div class="clear"></div>
</div>
</div>