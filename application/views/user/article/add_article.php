<script type="text/javascript">
    var url = '<?php echo base_url('user/model_article/add'); ?>';
    var urlError = '<?php echo base_url('pages/messageErreur'); ?>';
    var urlSucces = '<?php echo base_url('pages/messageSucces'); ?>';
    var urlUpload = '<?php echo base_url('user/articles/upload'); ?>';
    var urlDelete = '<?php echo base_url('user/articles/delete'); ?>';
</script>

<div class="content admin-connexion">
    <h1>ajouter un article</h1>
    <div class="messageAlerte">
        <div id="alertType"></div>
    </div>

    <div class="info_generale">
        <h2>information générale</h2>
        <label for="titre">titre:</label>
        <input type="text" id="titre" name="titre"/>
        <br/>
        <section id="editor" name="editor">
            <textarea id='edit' name="edit" style="margin-top: 30px;">
            </textarea>
        </section>

    </div>
    <input type="hidden" id="contenu" name="contenu" value=''>
    <input type="hidden" id="id_carnetvoyage" id="id_carnetvoyage" name="contenu" value='<?php echo $id_carnet_voyage; ?>'>
    <input type="button" id='addArticle' value="enregistrer"/>

    <br/>
    <br/><br/>
</div>

<!--[if lt IE 9]>
  <script src="<?php echo asset_url(''); ?>librairie/js/froala_editor_ie8.js" type="text/javascript"></script>
<![endif]-->