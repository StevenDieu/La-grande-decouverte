<div class="content admin-connexion">
    <h1>editer un voyage</h1>
    <?php echo validation_errors(); ?>
    <?php if (isset($error)) echo $error; ?>
    <?php echo form_open('user/model_carnet_voyage/edit'); ?>

    <div class="info_generale">
        <h2>Carnet de voyage</h2>
        <label for="titre">titre:</label>
        <input type="text" id="titre" name="titre" value="<?php echo $carnet_voyage[0]->titre; ?>"/>
        <br/>

    </div>
    <input type="hidden" name="id_voyage" value="<?php echo $carnet_voyage[0]->id_voyage; ?>">
    <input type="hidden" name="id" value="<?php echo $carnet_voyage[0]->id; ?>">
    <input type="submit" value="modifier"/>
</form>
</div>