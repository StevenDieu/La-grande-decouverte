<div class="content admin-connexion">
    <h1>ajouter un carnet de voyage</h1>
    <?php echo validation_errors(); ?>
    <?php if (isset($error)) echo $error; ?>
    <?php echo form_open('user/model_carnet_voyage/add'); ?>

    <div class="info_generale">
        <h2>information générale</h2>
        <label for="titre">titre:</label>
        <input type="text" id="titre" name="titre"/>
        <br/>

        <label for="phrase_accroche">Choix du voyage:</label>
        <select name="id_voyage" id="id_voyage" name="id_voyage">
            <option value="">Choix du voyage</option>

            <?php foreach ($voyages as $voyage) { ?>

                <option value="<?php echo $voyage[0]->id; ?>"><?php echo $voyage[0]->titre ?></option>

            <?php } ?>

        </select>
        <br/>
    </div>
    <input type="submit" value="enregistrer"/>
</form>
</div>