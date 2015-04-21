<script type="text/javascript">
  confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<div class="content admin-connexion">
	<h1>editer une actu</h1>
   <?php echo validation_errors(); ?>
   <?php if(isset($error)) echo $error;?>

   <?php echo '<a onclick="return confirm(confirmation);" href="'.base_url('admin/model_actualite/delete').'?id='.$actualite[0]->id.'">supprimer</a>
' ?>
   <?php echo form_open_multipart('admin/model_actualite/edit'); ?>
    <div class="info_generale">
      <label for="titre">titre:</label>
      <input type="text" id="titre" name="titre" value="<?php echo $actualite[0]->titre; ?>"/>
      <br/>

      <label for="description">description:</label>
      <TEXTAREA NAME="description" id="description"> <?php echo $actualite[0]->description; ?></TEXTAREA>
      <br/>

      <h2>Image</h2>
      <label for="image_1">image_1:</label>
      <?php if($actualite[0]->image_1){
         echo '<img src="'.base_url('').'media/actualite/'.$actualite[0]->image_1.'" alt="'.$actualite[0]->image_1.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_1" name='image_1' value="<?php echo $actualite[0]->image_1 ?>"/>
      </br/>

      <label for="image_2">image_2:</label>
      <?php if($actualite[0]->image_2){
         echo '<img src="'.base_url('').'media/actualite/'.$actualite[0]->image_2.'" alt="'.$actualite[0]->image_2.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_2" name='image_2'/>
      </br/>

      <label for="image_3">image_3:</label>
      <?php if($actualite[0]->image_3){
         echo '<img src="'.base_url('').'media/actualite/'.$actualite[0]->image_3.'" alt="'.$actualite[0]->image_3.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_3" name='image_3'/>
      </br/>
      </br>
      </br>

      <input type="hidden" name ="id" value="<?php echo $actualite[0]->id; ?>">

    </div>

     <input type="submit" value="enregistrer"/>
   </form>
</div>