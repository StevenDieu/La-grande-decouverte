<script type="text/javascript">
    var urlError = '<?php echo base_url('pages/messageErreur'); ?>';
    var urlSucces = '<?php echo base_url('pages/messageSucces'); ?>';
</script>

<legend>Gestion articles du carnet : </legend>

<script type="text/javascript" src = "<?php echo asset_url(''); ?>js/article.js" ></script>
<div class="content_article">
    <div class="messageAlerteCarnet">
        <div id="alertType"></div>
    </div>

    <a data-toggle="modal" data-target="#popUpAdd" class="buttonAjouterBoUtilisateur"> <span class="placementGlyphicon"><span class="glyphicon glyphicon-plus"></span></span>Ajouter Article</a><br><br/>
    <?php
    if ($articles) {
        ?>
        <div class="table-responsive">
            <table class="table-carnet table">
                <tr>
                    <th  class="tdPetit">#</th>
                    <th>Titre</th>
                    <th class="tdMoyen">Editer</th>
                    <th class="tdPetit">Supprimer</th>
                </tr>
                <?php
                $i = 0;
                foreach ($articles as $article) {
                    $i++;
                    ?>
                    <tr>
                        <td  class="tdPetithauteur"> 
                            <?php echo $i; ?>
                        </td>
                        <td>
                            <input type="text" class="form-control inputTitreCarnetVoyage" id ="<?php echo $article->id; ?>" placeholder="Titre voyage"  value='<?php echo $article->titre; ?>' />
                            <span class="glyphiHide <?php echo $article->id; ?>">
                                <a class="glyphicon_input editCarnetVoyage" data-id="<?php echo $article->id; ?>"><span class="glyphicon glyphicon-ok" ></span></a>
                                <a class="glyphicon_input redoTitreCarnetVoyage" data-id="<?php echo $article->id; ?>"><span class="glyphicon glyphicon-repeat"></span></a>
                            </span>
                        </td>

                        <td class="tdPetitGlaphi">
                            <a href="#" class="editArticle" data-id="<?php echo $article->id; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        </td>
                        <td class="tdPetitGlaphi">
                            <a onclick="return confirm(confirmation);" class="deleteCarnetVoyage" data-id="<?php echo $article->id; ?>"><span class="glyphicon glyphicon-remove"></span></a>
                        </td>

                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
        <?php
    } 
    ?>
</div>
<div class="modal fade" id="popUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

        </div>
    </div>
</div>
