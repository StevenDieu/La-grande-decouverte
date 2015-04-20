<div class="content admin-connexion">
	<h1>editer une newsletter</h1>
   <?php echo validation_errors(); ?>
   <?php if(isset($error)) echo $error;?>
   <?php echo form_open_multipart('admin/model_newsletter/edit'); ?>

       <div class="info_generale">
         <h2>information générale</h2>
         <label for="mail">mail:</label>
         <input type="text" id="mail" name="mail" value="<?php echo $newsletter[0]->mail; ?>"/>
         <br/>
       </div>

      <input type="hidden" name="id" value="<?php echo $newsletter[0]->id; ?>">
      <input type="submit" value="enregistrer"/>
   </form>
</div>