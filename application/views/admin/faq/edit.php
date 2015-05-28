<script type="text/javascript">
   confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<div class="content admin-connexion">
   <h1>éditer faq</h1>
   <?php echo validation_errors(); ?>
   <?php if(isset($error)) echo $error;?>
   <?php echo form_open_multipart('admin/model_faq/edit'); ?>

   <a onclick="return confirm(confirmation);" href="<?php echo base_url('admin/model_faq/delete') ?>?id=<?php echo $faq[0]->id ?>">Supprimer cette question</a>

    <div class="info_generale">

      <input type="hidden" name="id" id="id" value="<?php echo $faq[0]->id; ?>">

      <label for="question">question:</label>
      <input type="text" id="question" name="question" value="<?php echo $faq[0]->question; ?>" />
      <br/>

      <label for="reponse">reponse:</label>
      <TEXTAREA NAME="reponse" id="reponse"><?php echo $faq[0]->reponse; ?></TEXTAREA>
      <br/>

       <label for="active">active:</label>
       <select name="active">
             <option <?php if($faq[0]->active == 1) echo "selected"; ?> value="1">activé</option> 
             <option <?php if($faq[0]->active == 0) echo "selected"; ?> value="0">désactivé</option> 
       </select>
       <br/>
    </div>

     <input type="submit" value="enregistrer"/>
   </form>
</div>