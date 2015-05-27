<div class="content admin-connexion">
	<h1>ajouter une faq</h1>
   <?php echo validation_errors(); ?>
   <?php if(isset($error)) echo $error;?>
   <?php echo form_open_multipart('admin/model_faq/save'); ?>

    <div class="info_generale">

      <label for="question">question:</label>
      <input type="text" id="question" name="question"/>
      <br/>

      <label for="reponse">reponse:</label>
      <TEXTAREA NAME="reponse" id="reponse"> </TEXTAREA>
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