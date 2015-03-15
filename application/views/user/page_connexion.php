<div class="content ">
    <div class="content-inscription form-horizontal">
        <legend>Connexion</legend>
        <?php echo validation_errors(); ?>
        <?php echo form_open('user/verifIdentification/verifLogin'); ?>
        <div class="form-group">
            <label for="user" class="col-sm-5 control-label">Nom d'utilisateur</label>
            <div class="col-sm-7">
                <input type="text" name="user" maxlength="50" class="form-control" id="user" placeholder="Nom d'utilisateur">
            </div>
        </div>
        <div class="form-group">
            <label for="mdp" class="col-sm-5 control-label">Mot de passe</label>
            <div class="col-sm-7">
                <input type="text" name="mdp" maxlength="50" class="form-control" id="mdp" placeholder="Mot de passe">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-7">
                <input type="submit" name="submit" class="btn btn-default btn-mobile" value="Valider"/>
            </div>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>