<div class="content admin-connexion">
	<h1>ajouter un continent</h1>
   <?php echo validation_errors(); ?>
   <?php if(isset($error)) echo $error;?>
   <?php echo form_open_multipart('admin/model_continent/save'); ?>

    <div class="info_generale">
      <h2>information générale</h2>
      <label for="name">name:</label>
      <input type="text" id="name" name="name"/>
      <br/>

    </div>

     <input type="submit" value="enregistrer"/>
   </form>
</div>