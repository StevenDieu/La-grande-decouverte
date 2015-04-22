<div class="content admin-connexion">
	<h1>ajouter un continent</h1>

    <?php if($this->session->flashdata('mdp_administrateur') != ''){ ?>
        <span class="success"><?php echo $this->session->flashdata('mdp_administrateur'); ?></span>
    <?php } ?>
    <?php if($this->session->flashdata('login_administrateur') != ''){ ?>
        <span class="success"><?php echo $this->session->flashdata('login_administrateur'); ?></span>
    <?php } ?>

   <?php echo validation_errors(); ?>
   <?php if(isset($error)) echo $error;?>
   <?php echo form_open_multipart('admin/model_administrateur/save'); ?>

    <div class="info_generale">
      <h2>information générale</h2>
      <label for="login">login:</label>
      <input type="text" id="login" name="login"/>
      <br/>

      <label for="password">password:</label>
      <input type="password" id="password" name="password"/>
      <br/>

      <label for="cpassword">cpassword:</label>
      <input type="password" id="cpassword" name="cpassword"/>
      <br/>

    </div>

     <input type="submit" value="enregistrer"/>
   </form>
</div>