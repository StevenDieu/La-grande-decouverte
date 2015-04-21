<script type="text/javascript">
    var url = '<?php echo base_url('user/model_article/edit'); ?>';
    var urlError = '<?php echo base_url('pages/messageErreur'); ?>';
    var urlSucces = '<?php echo base_url('pages/messageSucces'); ?>';
    var urlUpload = '<?php echo base_url('user/articles/upload'); ?>';
    var urlDelete = '<?php echo base_url('user/articles/delete'); ?>';
</script>

<div class="content admin-connexion">
    <h1>editer un voyage</h1>
    <div class="messageAlerte">
        <div id="alertType"></div>
    </div>
    <div class="clear"></div>
    <div class="info_generale">
        <h2>Carnet de voyage</h2>
        <label for="titre">titre:</label>
        <input type="text" id="titre" name="titre" value="<?php echo $article[0]->titre; ?>"/>
        <br/>
        <br/>
        <section id="editor" name="editor">
            <div id='edit' name="edit" style="margin-top: 30px;">
                <?php echo $article[0]->contenu; ?>
            </div>
        </section>
    </div>
    <input type="hidden" name="id_carnetvoyage" id="id_carnetvoyage" value="<?php echo $article[0]->id_carnetvoyage; ?>">
    <input type="hidden" name="id" id="id" value="<?php echo $article[0]->id; ?>">
    <input type="button" id='editArticle' value="modifier"/>
</div>



<!--[if lt IE 9]>
  <script src="<?php echo asset_url(''); ?>librairie/js/froala_editor_ie8.js" type="text/javascript"></script>
<![endif]-->