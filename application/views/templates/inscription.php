<div class="content ">
    <div class="content-inscription form-horizontal">
        <?php
        echo validation_errors();
        echo form_open('utilisateur/valider_inscription');
        ?>
        <legend>Inscription</legend>
        <div class="form-group">
            <label for="Nom" class="col-sm-5 control-label">Nom *</label>
            <div class="col-sm-7">
                <input type="text" name="nom" maxlength="50" class="form-control"id="nom" placeholder="Nom">
                <span class="help-block">Entre 6 et 50 caratères</span>
            </div>
        </div>

        <div class="form-group">
            <label for="Prenom" class="col-sm-5 control-label">Prenom *</label>
            <div class="col-sm-7">
                <input type="text" name="prenom" maxlength="50" class="form-control" id="prenom" placeholder="Prenom">
                <span class="help-block">Entre 6 et 50 caratères</span>
            </div>
        </div>

        <div class="form-group">
            <label for="user" class="col-sm-5 control-label">Nom d'utilisateur *</label>
            <div class="col-sm-7">
                <input type="text" name="user" maxlength="50" class="form-control" id="user" placeholder="Nom d'utilisateur">
                <span class="help-block">Entre 6 et 50 caratères</span>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-5 control-label">E-mail *</label>
            <div class="col-sm-7">
                <input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
            </div>
        </div>

        <div class="form-group">
            <label for="cemail" class="col-sm-5 control-label">Confirmation E-mail *</label>
            <div class="col-sm-7">
                <input type="email" name="cemail" class="form-control" id="cemail" placeholder="Confirmation E-mail">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-5 control-label">Mot de passe *</label>
            <div class="col-sm-7">
                <input type="password" name="mdp" maxlength="50" class="form-control" id="mdp" placeholder="Mot de passe">
                <span class="help-block">Entre 6 et 50 caratères</span>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-5 control-label">Confirmation mot de passe *</label>
            <div class="col-sm-7">
                <input type="password" name="cmdp" maxlength="50" class="form-control" id="cmdp" placeholder="Confirmation mot de passe">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-7">
                <input type="submit" name="submit" class="btn btn-default btn-mobile" value="Valider"/>
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
