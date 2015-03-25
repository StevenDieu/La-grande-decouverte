<div class="content">
	<div class="content-contact form-horizontal">
		<?php
        echo validation_errors();
        echo form_open('contact/index/verifContact');
        // echo form_open('user/verifIdentification/verifInscription');
        
        ?>
            <!-- Form Name -->
            <legend>Contact</legend>

            <!-- Text input-->
            <div class="form-group">
                <label for="nom" class="control-label col-sm-3">Nom *</label>
                <div class="col-sm-9">
                    <input id="nom" name="nom" type="text" placeholder="nom" class="form-control">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="control-label col-sm-3" for="prenom">Prénom *</label>
                <div class="col-sm-9">
                    <input id="prenom" name="prenom" type="text" placeholder="prenom" class="form-control">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="control-label col-sm-3" for="mail">Email *</label>
                <div class="col-sm-9">
                    <input id="mail" name="mail" type="text" placeholder="mail" class="form-control">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="control-label col-sm-3" for="objet">Objet *</label>
                <div class="col-sm-9">
                    <input id="objet" name="objet" type="text" placeholder="objet" class="form-control">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="control-label col-sm-3" for="message">Votre message *</label>
                <div class="col-sm-9">                     
                    <textarea id="message" class="form-control" placeholder="Votre message" name="message"></textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="control-label col-sm-3" for="envoyer"></label>
                <div class="col-sm-9">
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