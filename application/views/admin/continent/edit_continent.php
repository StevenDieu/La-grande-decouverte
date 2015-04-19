<div class="content admin-connexion">
	<h1>editer un continent</h1>
   <?php echo validation_errors(); ?>
   <?php if(isset($error)) echo $error;?>

   <?php echo '<a onclick="return confirm(confirmation);" href="'.base_url('admin/model_continent/delete').'?id='.$continent[0]->id.'">supprimer</a>
' ?>
   <?php echo form_open_multipart('admin/model_continent/edit'); ?>


    <div class="info_generale">
      <h2>information générale</h2>
      <label for="name">name:</label>
      <input type="text" id="name" name="name" value="<?php echo $continent[0]->name; ?>" />
      <br/>
      <input type="hidden" name ="id" value="<?php echo $continent[0]->id; ?>">

    </div>

     <input type="submit" value="enregistrer"/>
   </form>
</div>