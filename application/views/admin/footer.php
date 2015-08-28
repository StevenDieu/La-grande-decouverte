</div>
</div>
<script src="<?php echo asset_url('js/admin/excanvas.min.js'); ?>"></script> 
<script src="<?php echo asset_url('js/admin/chart.min.js'); ?>"></script> 
<script src="<?php echo asset_url('js/admin/bootstrap.js'); ?>"></script>
<script src="<?php echo asset_url('js/admin/main.js'); ?>"></script>
<script language="javascript" type="text/javascript" src="<?php echo asset_url('js/admin/full-calendar/fullcalendar.min.js'); ?>"></script>
<script type="text/javascript" src = "<?php echo asset_url(''); ?>js/responsiveslides.min.js" ></script>
<script type="text/javascript" src = "<?php echo asset_url(''); ?>js/jquery-ui.min.js" >< /script
            >
            < script src = "<?php echo asset_url('js/admin/base.js'); ?>" ></script> 

<?php
if (isset($adminJs)) {
    foreach ($adminJs as $js) {
        ?>
        <script src="<?php echo asset_url(''); ?>js/admin/onglet/<?php echo $js; ?>.js" type="text/javascript"></script>
        <?php
    }
}
?>

<div class="footer">
</div>
<div class="sous_footer">
	V <b>1.0.0</b>
</div>


<?php
if (isset($librairieJs)) {
    ?>
    <!--[if lt IE 9]>
       <script src="<?php echo asset_url(''); ?>librairie/js/froala_editor_ie8.js" type="text/javascript"></script>
    <![endif]-->
    <script type="text/javascript" src = "<?php echo asset_url(''); ?>librairie/js/jquery.min.js" ></script>

    <?php
    foreach ($librairieJs as $js) {
        ?>
        <script src="<?php echo asset_url(''); ?>librairie/js/<?php echo $js; ?>.js" type="text/javascript"></script>
        <?php
    }
    ?>
        <script src="<?php echo asset_url(''); ?>js/admin/onglet/ficheVoyage/article.js" type="text/javascript"></script>
    <script type="text/javascript">
    $('#edit').editable(
            {
                inlineMode: false,
                language: 'fr',
                imageUploadURL: urlUpload,
                imageDeleteURL: urlDelete,
                idArticle: <?php if(isset($article)){echo $article[0]->id; }else{ echo "null";}?>,
                imageUploadParams: {
                    id: 'edit'
                }

            }
    ).on('editable.afterRemoveImage', function (e, editor, $img) {
        editor.options.imageDeleteParams = {src: $img.attr('src')};
        editor.deleteImage($img);
    }).on('editable.imageDeleteSuccess', function () {
        <?php if(isset($article)){ ?>
            editArticle(<?php echo $article[0]->id; ?>);
        <?php } ?>
    });
    </script>
    <?php
}
?>


</body> 
</html>
