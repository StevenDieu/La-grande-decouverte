<script type="text/javascript">
    var id_carnet_voyage = '<?php echo $article[0]->id_carnetvoyage; ?>';
    var confirmationDelete = "Etes vous sûre de vouloir supprimer cette valeur ?";
    var urlUpload = '<?php echo base_url('admin/model_carnet_voyage/upload'); ?>';
    var urlEditArticle = '<?php echo base_url('admin/model_carnet_voyage/edit'); ?>';
    var urlDelete = '<?php echo base_url('admin/model_carnet_voyage/delete'); ?>';
    var urlAddImageFiche = '<?php echo base_url("admin/model_carnet_voyage/addImageFiche") ?>';
</script>

<div class="container">
    <div class="row">
        <div class="alertType"></div>
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Fiches voyages</h3>
                    <a href="<?php echo base_url('admin/carnet_voyages/list_fiche_voyage')."?id=".$article[0]->id_carnetvoyage; ?>" id="bouton_header" role="button" class="btn" data-toggle="">Retour à la liste d'articles</a>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <legend>Editer un article</legend>

                        <form action="#" method="post" class="form-horizontal center">
                            <div class="info_generale">
                                <div class="control-group">											
                                    <div class="controls">
                                        Titre : <input type="text" class="span5 titre form-titre" placeholder="Titre de l'article" value="<?php echo $article[0]->titre; ?>">
                                    </div>			
                                </div>
                            </div>

                            <section id="editor" name="editor">
                                <div id='edit' name="edit" style="margin-top: 30px;">
                                    <?php echo $article[0]->contenu; ?>
                                </div>
                            </section>
                            <br/>
                            <div class="form-actions">
                                <button type="button" data-id="<?php echo $article[0]->id; ?>" class="editArticle btn btn-primary submit_bouton_verif">Editer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

