<div class="content admin-connexion">
    <h1>ajouter un carnet de voyage</h1>
    <?php echo validation_errors(); ?>
    <?php if (isset($error)) echo $error; ?>
    <?php echo form_open_multipart('admin/model_carnet_voyage/save'); ?>

    <div class="info_generale">
        <h2>information générale</h2>
        <label for="titre">titre:</label>
        <input type="text" id="titre" name="titre"/>
        <br/>

        <label for="phrase_accroche">Mes Voyages:</label>
        <input type="text" id="phrase_accroche" name="phrase_accroche"/>
        <br/>
    </div>
    <input type="submit" value="enregistrer"/>
</form>
</div>