<div class="content admin-connexion">
	<h1>ajouter un contenu cms</h1>
   <?php echo validation_errors(); ?>
   <?php if(isset($error)) echo $error;?>
   <?php echo form_open_multipart('admin/model_cms/save'); ?>

    <div class="info_generale">

      <label for="code">code:</label>
      <input type="text" id="code" name="code"/>
      <br/>

      <label for="label">label:</label>
      <input type="text" id="label" name="label"/>
      <br/>

      <label for="value">value:</label>
      <TEXTAREA NAME="value" id="value"> </TEXTAREA>
      <br/>

       <label for="active">active:</label>
       <select name="active">
             <option value="1">activé</option> 
             <option value="0">désactivé</option> 
       </select>
       <br/>
    </div>

     <input type="submit" value="enregistrer"/>
   </form>
</div>