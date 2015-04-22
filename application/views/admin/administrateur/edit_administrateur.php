<div class="content admin-connexion">
	<h1>editer un administrateur</h1>
   <?php echo validation_errors(); ?>
   <?php if(isset($error)) echo $error;?>

   <?php echo '<a onclick="return confirm(confirmation);" href="'.base_url('admin/administrateur/delete').'?id='.$administrateur[0]->id.'">supprimer</a>
' ?>
   <?php echo form_open_multipart('admin/model_administrateur/edit'); ?>

    <?php if($this->session->flashdata('actually_password_administrateur') != ''){ ?>
        <span class="success"><?php echo $this->session->flashdata('actually_password_administrateur'); ?></span>
    <?php } ?>
    <?php if($this->session->flashdata('login_administrateur') != ''){ ?>
        <span class="success"><?php echo $this->session->flashdata('login_administrateur'); ?></span>
    <?php } ?>
    <div class="info_generale">
      <h2>information générale</h2>
      <label for="login">login:</label>
      <input type="text" id="login" name="login" value="<?php echo $administrateur[0]->login; ?>" />
      <br/><br/>
      <input type="hidden" name ="id" value="<?php echo $administrateur[0]->id; ?>">

      <label for="password">password:</label>
      <input type="password" id="password" name="password"/>
      <br/>

      <label for="cpassword">cpassword:</label>
      <input type="password" id="cpassword" name="cpassword"/>
      <br/><br/>

      <label for="actually_password">actually_password:</label>
      <input type="password" id="actually_password" name="actually_password"/>
      <br/>

    </div>

     <input type="submit" value="enregistrer"/>
   </form>
</div>