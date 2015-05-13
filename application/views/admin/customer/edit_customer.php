<script type="text/javascript">
  confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<div class="content admin-connexion">
	<h1>editer une actu</h1>
   <?php echo validation_errors(); ?>
   <?php if(isset($error)) echo $error;?>

   <?php echo '<a onclick="return confirm(confirmation);" href="'.base_url('admin/model_customer/bannir').'?id='.$customer[0]->id.'">Bannir</a>
' ?>
   <?php echo form_open_multipart('admin/model_customer/edit'); ?>
    <div class="info_generale">

      <label for="login">login:</label>
      <input type="text" id="login" name="login" value="<?php echo $customer[0]->login; ?>" />
      <br/>

      <label for="nom">nom:</label>
      <input type="text" id="nom" name="nom" value="<?php echo $customer[0]->nom; ?>" />
      <br/>

      <label for="prenom">prenom:</label>
      <input type="text" id="prenom" name="prenom" value="<?php echo $customer[0]->prenom; ?>" />
      <br/>

      <label for="mail">mail:</label>
      <input type="text" id="mail" name="mail" value="<?php echo $customer[0]->mail; ?>" />
      <br/>

      <label for="banni">banni:</label>
      <select id="banni" name="banni"> 
         <option <?php if($customer[0]->banni == 0) echo "selected='selected'"; ?> value="O">Non</option> 
         <option <?php if($customer[0]->banni == 1) echo "selected='selected'"; ?> value="1">Oui</option> 
      </select> 
      <br/>
      
      <input type="hidden" name ="id" value="<?php echo $customer[0]->id; ?>">

    </div>

     <input type="submit" value="enregistrer"/>
   </form>
</div>