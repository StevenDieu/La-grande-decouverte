<script type="text/javascript">
   confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<div class="content admin-connexion">
	<h1>ajouter un voyage</h1>
        <?php echo '<a onclick="return confirm(confirmation);" href="'.base_url('admin/model_voyage/delete').'?id='.$voyage[0]->id.'">supprimer</a>
'; ?>
   <?php echo validation_errors(); ?>
   <?php if(isset($error)) echo $error;?>
   <?php echo form_open_multipart('admin/model_voyage/edit'); ?>

    <div class="info_generale">
      <h2>information générale</h2>
      <label for="titre">titre:</label>
      <input type="text" id="titre" name="titre" value="<?php echo $voyage[0]->titre; ?>"/>
      <br/>

      <label for="phrase_accroche">phrase_accroche:</label>
      <input type="text" id="phrase_accroche" name="phrase_accroche" value="<?php echo $voyage[0]->phrase_accroche; ?>"/>
      <br/>

      <label for="duree">duree:</label>
      <input type="text" id="duree" name="duree" value="<?php echo $voyage[0]->duree; ?>"/>
      <br/>

      <label for="prix">prix:</label>
      <input type="text" id="prix" name="prix" value="<?php echo $voyage[0]->prix; ?>"/>
      <br/>

      <label for="description_first_bloc">description_first_bloc:</label>
      <TEXTAREA NAME="description_first_bloc" id="description_first_bloc" > <?php echo $voyage[0]->description_first_bloc; ?></TEXTAREA>
      <br/>

      <label for="description_second_bloc">description_second_bloc:</label>
      <TEXTAREA NAME="description_second_bloc" id="description_second_bloc"> <?php echo $voyage[0]->description_second_bloc; ?> </TEXTAREA>
      <br/>

      <label for="description_third_bloc">description_third_bloc:</label>
      <TEXTAREA NAME="description_third_bloc" id="description_third_bloc"> <?php echo $voyage[0]->description_third_bloc; ?> </TEXTAREA>
      <br/>
    </div>


    <div class="info_pays">
      <h2>information pays</h2>

      <label for="capital">capital:</label>
      <input type="text" id="capital" name="capital" value="<?php echo $voyage[0]->capital; ?>"/>
      <br/>

      <?php if($continents){ ?>
         <label for="continent">continent:</label>
         <select name="continent">
         <?php 
            foreach ($continents as $continent) { ?>
              <option <?php if($continent->id == $voyage[0]->continent) echo "selected='selected'" ?> value="<?php echo $continent->id; ?>"><?php echo $continent->name; ?></option> 
            <?php }
         ?>
         </select>
         <br/>
      <?php } ?>

      <label for="meteo_temperature">meteo_temperature:</label>
      <input type="text" id="meteo_temperature" name="meteo_temperature" value="<?php echo $voyage[0]->meteo_temperature; ?>"/>
      <br/>

      <label for="meteo_image">meteo_image:</label>
      <?php if($voyage[0]->meteo_image){
      	echo '<img src="'.base_url('').'media/produit/meteo_image/'.$voyage[0]->meteo_image.'" alt="'.$voyage[0]->meteo_image.'" height="50" width="50" />';
      }else{
      	echo "aucune image dispo";
      }	?>
      <input type='file' id="meteo_image" name='meteo_image'/>
      </br/>

      <label for="villes_principales">villes_principales:</label>
      <input type="text" id="villes_principales" name="villes_principales" value="<?php echo $voyage[0]->villes_principales; ?>"/>
      <br/>

      <label for="religion">religion:</label>
      <input type="text" id="religion" name="religion" value="<?php echo $voyage[0]->religion; ?>"/>
      <br/>

      <label for="nombre_habitant">nombre_habitant:</label>
      <input type="text" id="nombre_habitant" name="nombre_habitant" value="<?php echo $voyage[0]->nombre_habitant; ?>"/>
      <br/>

      <label for="monnaie">monnaie:</label>
      <input type="text" id="monnaie" name="monnaie" value="<?php echo $voyage[0]->monnaie; ?>"/>
      <br/>

      <label for="fete">fete:</label>
      <input type="text" id="fete" name="fete" value="<?php echo $voyage[0]->fete; ?>"/>
      <br/>

      <label for="langue_officielle">langue_officielle:</label>
      <input type="text" id="langue_officielle" name="langue_officielle" value="<?php echo $voyage[0]->langue_officielle; ?>"/>
      <br/>

      <label for="drapeau">drapeau:</label>
      <?php if($voyage[0]->drapeau){
         echo '<img src="'.base_url('').'media/produit/drapeau/'.$voyage[0]->drapeau.'" alt="'.$voyage[0]->drapeau.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="drapeau" name='drapeau'/>
      </br/>

    </div>


    <div class="carte">
      <h2>information carte</h2>
      <label for="lattitude">lattitude:</label>
      <input type="text" id="lattitude" name="lattitude" value="<?php echo $voyage[0]->lattitude; ?>"/>
      <br/>

      <label for="longitude">longitude:</label>
      <input type="text" id="longitude" name="longitude" value="<?php echo $voyage[0]->longitude; ?>"/>
      <br/>
    </div>

    <div class="image">
    <h2>Image</h2>
      <label for="image_slider_1">image_slider_1:</label>
      <?php if($voyage[0]->image_slider_1){
         echo '<img src="'.base_url('').'media/produit/image_slider/'.$voyage[0]->image_slider_1.'" alt="'.$voyage[0]->image_slider_1.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_slider_1" name='image_slider_1' value="<?php echo $voyage[0]->image_slider_1 ?>"/>
      </br/>

      <label for="image_slider_2">image_slider_2:</label>
      <?php if($voyage[0]->image_slider_2){
         echo '<img src="'.base_url('').'media/produit/image_slider/'.$voyage[0]->image_slider_2.'" alt="'.$voyage[0]->image_slider_2.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_slider_2" name='image_slider_2'/>
      </br/>

      <label for="image_slider_3">image_slider_3:</label>
      <?php if($voyage[0]->image_slider_3){
         echo '<img src="'.base_url('').'media/produit/image_slider/'.$voyage[0]->image_slider_3.'" alt="'.$voyage[0]->image_slider_3.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_slider_3" name='image_slider_3'/>
      </br/>
      </br>
      </br>

      <label for="picto_1">picto_1:</label>
      <?php if($voyage[0]->picto_1){
         echo '<img src="'.base_url('').'media/produit/picto/'.$voyage[0]->picto_1.'" alt="'.$voyage[0]->picto_1.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="picto_1" name='picto_1'/>
      </br/>

      <label for="picto_2">picto_2:</label>
      <?php if($voyage[0]->picto_2){
         echo '<img src="'.base_url('').'media/produit/picto/'.$voyage[0]->picto_2.'" alt="'.$voyage[0]->picto_2.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="picto_2" name='picto_2'/>
      </br/>

      <label for="picto_3">picto_3:</label>
      <?php if($voyage[0]->picto_3){
         echo '<img src="'.base_url('').'media/produit/picto/'.$voyage[0]->picto_3.'" alt="'.$voyage[0]->picto_3.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="picto_3" name='picto_3'/>
      </br/>

      <label for="picto_4">picto_4:</label>
      <?php if($voyage[0]->picto_4){
         echo '<img src="'.base_url('').'media/produit/picto/'.$voyage[0]->picto_4.'" alt="'.$voyage[0]->picto_4.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="picto_4" name='picto_4'/>
      </br/>

      <label for="picto_5">picto_5:</label>
      <?php if($voyage[0]->picto_5){
         echo '<img src="'.base_url('').'media/produit/picto/'.$voyage[0]->picto_5.'" alt="'.$voyage[0]->picto_5.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="picto_5" name='picto_5'/>
      </br/>

      <label for="picto_6">picto_6:</label>
      <?php if($voyage[0]->picto_5){
         echo '<img src="'.base_url('').'media/produit/picto/'.$voyage[0]->picto_5.'" alt="'.$voyage[0]->picto_5.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="picto_6" name='picto_6'/>
      </br/>
      </br>
      </br>

      <label for="image_baniere_1">image_baniere_1:</label>
      <?php if($voyage[0]->image_baniere_1){
         echo '<img src="'.base_url('').'media/produit/banniere/'.$voyage[0]->image_baniere_1.'" alt="'.$voyage[0]->image_baniere_1.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_baniere_1" name='image_baniere_1'/>
      </br/>

      <label for="image_baniere_2">image_baniere_2:</label>
      <?php if($voyage[0]->image_baniere_2){
         echo '<img src="'.base_url('').'media/produit/banniere/'.$voyage[0]->image_baniere_2.'" alt="'.$voyage[0]->image_baniere_2.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_baniere_2" name='image_baniere_2'/>
      </br/>

      <label for="image_baniere_3">image_baniere_3:</label>
      <?php if($voyage[0]->image_baniere_3){
         echo '<img src="'.base_url('').'media/produit/banniere/'.$voyage[0]->image_baniere_3.'" alt="'.$voyage[0]->image_baniere_3.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_baniere_3" name='image_baniere_3'/>
      </br/>

      <label for="image_baniere_4">image_baniere_4:</label>
      <?php if($voyage[0]->image_baniere_4){
         echo '<img src="'.base_url('').'media/produit/banniere/'.$voyage[0]->image_baniere_4.'" alt="'.$voyage[0]->image_baniere_4.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_baniere_4" name='image_baniere_4'/>
      </br/>
      </br>
      </br>

      <label for="image_description_1">image_description_1:</label>
      <?php if($voyage[0]->image_description_1){
         echo '<img src="'.base_url('').'media/produit/image_description/'.$voyage[0]->image_description_1.'" alt="'.$voyage[0]->image_description_1.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_description_1" name='image_description_1' value="<?php echo $voyage[0]->image_description_1 ?>" />
      </br/>

      <label for="image_description_2">image_description_2:</label>
      <?php if($voyage[0]->image_description_2){
         echo '<img src="'.base_url('').'media/produit/image_description/'.$voyage[0]->image_description_2.'" alt="'.$voyage[0]->image_description_2.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_description_2" name='image_description_2' value="<?php echo $voyage[0]->image_description_2 ?>" />
      </br/>

      <label for="image_description_3">image_description_3:</label>
      <?php if($voyage[0]->image_description_3){
         echo '<img src="'.base_url('').'media/produit/image_description/'.$voyage[0]->image_description_3.'" alt="'.$voyage[0]->image_description_3.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_description_3" name='image_description_3' value="<?php echo $voyage[0]->image_description_3 ?>" />
      </br/>

      <label for="image_description_4">image_description_4:</label>
      <?php if($voyage[0]->image_description_4){
         echo '<img src="'.base_url('').'media/produit/image_description/'.$voyage[0]->image_description_4.'" alt="'.$voyage[0]->image_description_4.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_description_4" name='image_description_4' value="<?php echo $voyage[0]->image_description_4 ?>" />
      </br/>

      <label for="image_description_5">image_description_5:</label>
      <?php if($voyage[0]->image_description_5){
         echo '<img src="'.base_url('').'media/produit/image_description/'.$voyage[0]->image_description_5.'" alt="'.$voyage[0]->image_description_5.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_description_5" name='image_description_5' value="<?php echo $voyage[0]->image_description_5 ?>" />
      </br/>

      <label for="image_description_6">image_description_6:</label>
      <?php if($voyage[0]->image_description_6){
         echo '<img src="'.base_url('').'media/produit/image_description/'.$voyage[0]->image_description_6.'" alt="'.$voyage[0]->image_description_6.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_description_6" name='image_description_6' value="<?php echo $voyage[0]->image_description_6 ?>" />
      </br/>
      </br>
      </br>

      <label for="image_sous_sliderimage_sous_slider">image_sous_slider:</label>
      <?php if($voyage[0]->image_sous_slider){
         echo '<img src="'.base_url('').'media/produit/image_sous_slider/'.$voyage[0]->image_sous_slider.'" alt="'.$voyage[0]->image_sous_slider.'" height="50" width="50" />';
      }else{
         echo "aucune image dispo";
      }  ?>
      <input type='file' id="image_sous_slider" name='image_sous_slider' value="<?php echo $voyage[0]->image_sous_slider ?>"/>
      </br/>
    </div>
    <input type="hidden" name="id" value="<?php echo $voyage[0]->id; ?>">
     <input type="submit" value="enregistrer"/>
   </form>
</div>