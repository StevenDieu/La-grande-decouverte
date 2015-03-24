<div class="content">
	<div class="row">
		<div class="col-md-push-2 col-md-4">
			<div class="content-connexion connexion-right form-horizontal ">
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
		<div class="col-md-push-2 col-md-4">
			<div class="content-inscription connexion-left form-horizontal">
				<legend>Nouveaux Utilisateurs</legend>
				<div class="form-group">
					<div class="col-sm-offset-5 col-sm-7">
						<a class="btn btn-default btn-mobile" href="<?php echo base_url('user/account/inscription') ?>">Créer un compte</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>