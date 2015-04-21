<div class="content admin-connexion">
	<h1>ajouter une actualitée</h1>
   <?php echo validation_errors(); ?>
   <?php if(isset($error)) echo $error;?>
   <?php echo form_open_multipart('admin/model_actualite/save'); ?>

    <div class="info_generale">
      <h2>information générale</h2>

      <label for="titre">titre:</label>
      <input type="text" id="titre" name="titre"/>
      <br/>

      <label for="description">description:</label>
      <TEXTAREA NAME="description" id="description"> </TEXTAREA>
      <br/>

      <label for="image_1">image_1:</label>
      <input type='file' id="image_1" name='image_1'/>
      </br/>

      <label for="image_2">image_2:</label>
      <input type='file' id="image_2" name='image_2'/>
      </br/>

      <label for="image_3">image_3:</label>
      <input type='file' id="image_3" name='image_3'/>
      </br/>

    </div>

     <input type="submit" value="enregistrer"/>
   </form>
</div>