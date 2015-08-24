<script type="text/javascript">
    var confirmationDelete = "Etes vous sûre de vouloir supprimer cette valeur ?";
    var urlVisibleFiche = '<?php echo base_url('admin/model_carnet_voyage/visible'); ?>';
    var urlDeleteArticle = '<?php echo base_url('admin/model_carnet_voyage/deleteArticle'); ?>'
    var urlSucces = '<?php echo base_url('pages/messageSucces'); ?>';
    var urlError = '<?php echo base_url('pages/messageErreur'); ?>';
</script>
<div class="container adminCarnetVoyage">
    <div class="row">
        <div class="alertType"></div>
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Fiches voyages</h3>
                    <a href="<?php echo base_url('admin/carnet_voyages/liste'); ?>" id="bouton_header" role="button" class="btn" data-toggle="">Retour à la liste des carnets de voyages</a>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <legend>Liste fiches voyages</legend>
                        <?php
                        if ($articles) {
                            ?>
                            <div class="w60 center">
                                <table class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <th class="center w10">#</th>
                                            <th>Titre</th>
                                            <th class="center w10">Valider</th>
                                            <th class="center w10">Modifier</th>
                                            <th class="center w10">Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($articles as $article) {
                                            ?>
                                            <tr>
                                                <td class="center ">
                                                    <?php echo $article->id; ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('/voyage/carnet/article') . '?id=' . $article->id; ?>" target="_BLANCK"><?php echo $article->titre; ?></a>
                                                </td>
                                                <td class="center action_validate validate<?= $article->id; ?>">
                                                    <?php if ($article->visible == 1) { ?>
                                                        <span class="validate icon_click" data-visible="0" data-id="<?= $article->id; ?>"><span class="icon-ok"></span></span>
                                                    <?php } else { ?>
                                                        <span class="validate icon_click" data-visible="1" data-id="<?= $article->id; ?>"><span class="icon-remove"></span></span>
                                                    <?php } ?>
                                                </td>
                                                <td class="center">
                                                    <a class="icon_click" href="<?php echo base_url('admin/carnet_voyages/edit_article') . '?idArticle=' . $article->id; ?>"><span class="icon-pencil"></span></a>
                                                </td>
                                                <td class="center">
                                                    <a onclick="return confirm(confirmationDelete);" class="btn btn-danger deleteArticle" data-id="<?= $article->id; ?>">X</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php
                        } else {
                            ?>
                            <br/>Ce carnet n'a pas d'article<br/><br/>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

