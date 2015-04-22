<div class="content admin-connexion">
	<h1>confirmation mot de passe super admin</h1>

    <?php if($this->session->flashdata('mdp_administrateur') != ''){ ?>
        <span class="success"><?php echo $this->session->flashdata('mdp_administrateur'); ?></span>
    <?php } ?>
    <?php if($this->session->flashdata('login_administrateur') != ''){ ?>
        <span class="success"><?php echo $this->session->flashdata('login_administrateur'); ?></span>
    <?php } ?>

   <?php echo validation_errors(); ?>
   <?php if(isset($error)) echo $error;?>
   <?php echo form_open_multipart('admin/model_administrateur/delete'); ?>

    <div class="info_generale">
      <label for="password">password:</label>
      <input type="password" id="password" name="password"/>
      <br/>
    </div>

    <input type="hidden" name ="id" value="<?php echo $id; ?>">

     <input type="submit" value="supprimer"/>
   </form>
</div>