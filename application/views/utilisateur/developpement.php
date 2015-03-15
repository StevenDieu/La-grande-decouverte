<!---------- CONTENT --------->	
<div class="content">
    <div>

        <?php
        if($logger){ ?>
            <h2>Welcome <?php echo $username; ?>!</h2>
            <a href="user/account/logout">Logout</a>
        <?php }else{ ?>
            <?php echo validation_errors(); ?>
            <?php echo form_open('user/verifylogin'); ?>
            <label for="username">Username:</label>
            <input type="text" size="20" id="username" name="username"/>
            <br/>
            <label for="password">Password:</label>
            <input type="password" size="20" id="passowrd" name="password"/>
            <br/>
            <input type="submit" value="Login"/>
            </form>
        <?php } ?>


        <br/><br/><br/><br/>
        Page de developpement




        Cette page vas juste référencer tous les liens pour ce balader sur le site <br/><br/>
        <a href="<?php echo base_url('/utilisateur/inscription') ?>" target="_blank">Inscription</a><br/>
        <a href="<?php echo base_url('/utilisateur/connexion') ?>" target="_blank">Connexion</a><br/>
        <a href="<?php echo base_url('/utilisateur/fiche_voyage_descriptif') ?>" target="_blank">Fiche Voyage</a><br/>


</div>
</div>
<!---------- CONTENT --------->	
