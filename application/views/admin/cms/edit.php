<script type="text/javascript">
   confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<div class="content admin-connexion">
   <h1>éditer ce contenu</h1>
   <?php echo validation_errors(); ?>
   <?php if(isset($error)) echo $error;?>
   <?php echo form_open_multipart('admin/model_cms/edit'); ?>

   <a onclick="return confirm(confirmation);" href="<?php echo base_url('admin/model_cms/delete') ?>?id=<?php echo $cms[0]->id ?>">Supprimer ce contenu ?</a>

    <div class="info_generale">

      <input type="hidden" name="id" id="id" value="<?php echo $cms[0]->id; ?>">

      <label for="code">code:</label>
      <input type="text" id="code" name="code" value="<?php echo $cms[0]->code; ?>" />
      <br/>

      <label for="label">label:</label>
      <input type="text" id="label" name="label" value="<?php echo $cms[0]->label; ?>" />
      <br/>

      <label for="value">value:</label>
      <TEXTAREA NAME="value" id="value"><?php echo $cms[0]->value; ?></TEXTAREA>
      <br/>

       <label for="active">active:</label>
       <select name="active">
             <option <?php if($cms[0]->active == 1) echo "selected"; ?> value="1">activé</option> 
             <option <?php if($cms[0]->active == 0) echo "selected"; ?> value="0">désactivé</option> 
       </select>
       <br/>
    </div>

     <input type="submit" value="enregistrer"/>
   </form>
</div>