<script type="text/javascript">
    
    var id_carnet_voyage = '<?php echo $article[0]->id_carnetvoyage; ?>';
</script>

<?php
if (isset($librairieCss)) {
    foreach ($librairieCss as $css) {
        ?>
        <link href="<?php echo asset_url(''); ?>librairie/css/<?php echo $css; ?>.css" type="text/css" rel="stylesheet"/>
        <?php
    }
}
?>

<legend>Editer un article</legend>


<div class="messageAlerteCarnet">
    <div class="alertType"></div>
</div>

<a data-toggle="modal" data-target="#popUp" class="borange retourListArticle"> 
    <span class="placementGlyphicon">
        <span class="glyphicon glyphicon-arrow-left"></span>
    </span>
    Retour
</a>

<form action="#" class="form-horizontal" >

    <div class="info_generale">
        <div class="form-group form-titre">
            <label for="titre" class="col-sm-4 control-label">Titre :</label>
            <div class="col-sm-5">
                <input type="text" class="form-control titre" placeholder="Titre de l'article" value="<?php echo $article[0]->titre; ?>">
            </div>
        </div>
        <section id="editor" name="editor">
            <div id='edit' name="edit" style="margin-top: 30px;">
                <?php echo $article[0]->contenu; ?>
            </div>
        </section>
        <br/>
        <div class="center">
            <button type="button" data-id="<?php echo $article[0]->id; ?>" class="editArticle bblue">Enregistrer</button>
        </div>

    </div>
</form>
<!--[if lt IE 9]>
  <script src="<?php echo asset_url(''); ?>librairie/js/froala_editor_ie8.js" type="text/javascript"></script>
<![endif]-->

<?php
if (isset($librairieJs)) {
    foreach ($librairieJs as $js) {
        ?>
        <script src="<?php echo asset_url(''); ?>librairie/js/<?php echo $js; ?>.js" type="text/javascript"></script>
        <?php
    }
}
?>
<script type="text/javascript" src = "<?php echo asset_url(''); ?>js/article.js" ></script>

<script type="text/javascript">
    $('#edit').editable(
            {
                inlineMode: false,
                language: 'fr',
                imageUploadURL: urlUpload,
                imageDeleteURL: urlDelete,
                idArticle: <?php echo $article[0]->id; ?>,
                imageUploadParams: {
                    id: 'edit'
                }

            }
    ).on('editable.afterRemoveImage', function (e, editor, $img) {
        editor.options.imageDeleteParams = {src: $img.attr('src')};

        editor.deleteImage($img);
    }).on('editable.imageDeleteSuccess', function () {
        editArticle(<?php echo $article[0]->id; ?>);
    });
</script>