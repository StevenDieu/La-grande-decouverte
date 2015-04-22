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

    </div>
    <input type="hidden" id="contenu" name="contenu" value=''>
    <input type="hidden" id="id_carnetvoyage" id="id_carnetvoyage" name="contenu" value='<?php echo $id_carnet_voyage; ?>'>
    <input type="button" id='addArticle' value="enregistrer"/>

    <br/>
    <br/><br/>
</div>


<script type="text/javascript">
    var url = '<?php echo base_url('user/model_article/edit'); ?>';
    var urlError = '<?php echo base_url('pages/messageErreur'); ?>';
    var urlSucces = '<?php echo base_url('pages/messageSucces'); ?>';
    var urlUpload = '<?php echo base_url('user/articles/upload'); ?>';
    var urlDelete = '<?php echo base_url('user/articles/delete'); ?>';
</script>

<form action="#" class="form-horizontal" >
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ajouter un article</h4>
    </div>
    <div class="modal-body">
        <div class="info_generale">
            <div class="form-group form-titre">
                <label for="titre" class="col-sm-2 control-label">Titre :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="titre" placeholder="Titre de l'article">
                </div>
            </div>
            <section id="editor" name="editor">
                <div id='edit' name="edit" style="margin-top: 30px;">
                </div>
            </section>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id='addArticle' class="validCarnetVoyage btn btn-primary">Enregistrer</button>
    </div>
</form>

<!--[if lt IE 9]>
  <script src="<?php echo asset_url(''); ?>librairie/js/froala_editor_ie8.js" type="text/javascript"></script>
<![endif]-->