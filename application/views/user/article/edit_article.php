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
        <h4 class="modal-title" id="myModalLabel">Editer un article</h4>
    </div>
    <div class="modal-body">
        <div class="info_generale">
            <div class="form-group form-titre">
                <label for="titre" class="col-sm-2 control-label">Titre :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="titre" placeholder="Titre de l'article" value="<?php echo $article[0]->titre; ?>">
                </div>
            </div>
            <section id="editor" name="editor">
                <div id='edit' name="edit" style="margin-top: 30px;">
                    <?php echo $article[0]->contenu; ?>
                </div>
            </section>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id='editArticle' class="validCarnetVoyage btn btn-primary">Enregistrer</button>
    </div>
</form>

<!--[if lt IE 9]>
  <script src="<?php echo asset_url(''); ?>librairie/js/froala_editor_ie8.js" type="text/javascript"></script>
<![endif]-->