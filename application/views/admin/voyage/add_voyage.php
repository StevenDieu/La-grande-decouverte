<div class="content admin-connexion">
	<h1>ajouter un voyage</h1>
   <?php echo validation_errors(); ?>
   <?php if(isset($error)) echo $error;?>
   <?php echo form_open_multipart('admin/model_voyage/save'); ?>

    <div class="info_generale">
      <h2>information générale</h2>
      <label for="titre">titre:</label>
      <input type="text" id="titre" name="titre"/>
      <br/>

      <label for="phrase_accroche">phrase_accroche:</label>
      <input type="text" id="phrase_accroche" name="phrase_accroche"/>
      <br/>

      <label for="duree">duree:</label>
      <input type="text" id="duree" name="duree"/>
      <br/>

      <label for="prix">prix:</label>
      <input type="text" id="prix" name="prix"/>
      <br/>

      <label for="description_first_bloc">description_first_bloc:</label>
      <TEXTAREA NAME="description_first_bloc" id="description_first_bloc"> </TEXTAREA>
      <br/>

      <label for="description_second_bloc">description_second_bloc:</label>
      <TEXTAREA NAME="description_second_bloc" id="description_second_bloc"> </TEXTAREA>
      <br/>

      <label for="description_third_bloc">description_third_bloc:</label>
      <TEXTAREA NAME="description_third_bloc" id="description_third_bloc"> </TEXTAREA>
      <br/>
    </div>


    <div class="info_pays">
      <h2>information pays</h2>

      <label for="capital">capital:</label>
      <input type="text" id="capital" name="capital"/>
      <br/>

      <label for="continent">continent:</label>
      <input type="text" id="continent" name="continent"/>
      <br/>

      <label for="meteo_temperature">meteo_temperature:</label>
      <input type="text" id="meteo_temperature" name="meteo_temperature"/>
      <br/>

      <label for="meteo_image">meteo_image:</label>
      <input type='file' id="meteo_image" name='meteo_image'/>
      </br/>

      <label for="villes_principales">villes_principales:</label>
      <input type="text" id="villes_principales" name="villes_principales"/>
      <br/>

      <label for="religion">religion:</label>
      <input type="text" id="religion" name="religion"/>
      <br/>

      <label for="nombre_habitant">nombre_habitant:</label>
      <input type="text" id="nombre_habitant" name="nombre_habitant"/>
      <br/>

      <label for="monnaie">monnaie:</label>
      <input type="text" id="monnaie" name="monnaie"/>
      <br/>

      <label for="fete">fete:</label>
      <input type="text" id="fete" name="fete"/>
      <br/>

      <label for="langue_officielle">langue_officielle:</label>
      <input type="text" id="langue_officielle" name="langue_officielle"/>
      <br/>

    </div>


    <div class="carte">
      <h2>information carte</h2>
      <label for="lattitude">lattitude:</label>
      <input type="text" id="lattitude" name="lattitude"/>
      <br/>

      <label for="longitude">longitude:</label>
      <input type="text" id="longitude" name="longitude"/>
      <br/>
    </div>

    <div class="image">
    <h2>Image</h2>
      <label for="image_slider_1">image_slider_1:</label>
      <input type='file' id="image_slider_1" name='image_slider_1'/>
      </br/>

      <label for="image_slider_2">image_slider_2:</label>
      <input type='file' id="image_slider_2" name='image_slider_2'/>
      </br/>

      <label for="image_slider_3">image_slider_3:</label>
      <input type='file' id="image_slider_3" name='image_slider_3'/>
      </br/>
      </br>
      </br>

      <label for="picto_1">picto_1:</label>
      <input type='file' id="picto_1" name='picto_1'/>
      </br/>

      <label for="picto_2">picto_2:</label>
      <input type='file' id="picto_2" name='picto_2'/>
      </br/>

      <label for="picto_3">picto_3:</label>
      <input type='file' id="picto_3" name='picto_3'/>
      </br/>

      <label for="picto_4">picto_4:</label>
      <input type='file' id="picto_4" name='picto_4'/>
      </br/>

      <label for="picto_5">picto_5:</label>
      <input type='file' id="picto_5" name='picto_5'/>
      </br/>

      <label for="picto_6">picto_6:</label>
      <input type='file' id="picto_6" name='picto_6'/>
      </br/>
      </br>
      </br>

      <label for="image_baniere_1">image_baniere_1:</label>
      <input type='file' id="image_baniere_1" name='image_baniere_1'/>
      </br/>

      <label for="image_baniere_2">image_baniere_2:</label>
      <input type='file' id="image_baniere_2" name='image_baniere_2'/>
      </br/>

      <label for="image_baniere_3">image_baniere_3:</label>
      <input type='file' id="image_baniere_3" name='image_baniere_3'/>
      </br/>

      <label for="image_baniere_4">image_baniere_4:</label>
      <input type='file' id="image_baniere_4" name='image_baniere_4'/>
      </br/>
      </br>
      </br>

      <label for="image_description_1">image_description_1:</label>
      <input type='file' id="image_description_1" name='image_description_1'/>
      </br/>

      <label for="image_description_2">image_description_2:</label>
      <input type='file' id="image_description_2" name='image_description_2'/>
      </br/>

      <label for="image_description_3">image_description_3:</label>
      <input type='file' id="image_description_3" name='image_description_3'/>
      </br/>

      <label for="image_description_4">image_description_4:</label>
      <input type='file' id="image_description_4" name='image_description_4'/>
      </br/>

      <label for="image_description_5">image_description_5:</label>
      <input type='file' id="image_description_5" name='image_description_5'/>
      </br/>

      <label for="image_description_6">image_description_6:</label>
      <input type='file' id="image_description_6" name='image_description_6'/>
      </br/>
      </br>
      </br>

      <label for="image_sous_sliderimage_sous_slider">image_sous_slider:</label>
      <input type='file' id="image_sous_slider" name='image_sous_slider'/>
      </br/>






    </div>











     <input type="submit" value="enregistrer"/>
   </form>
</div>