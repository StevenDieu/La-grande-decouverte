<script type="text/javascript">
    var urlAddCarnet = "<?php echo base_url('user/carnet_voyages/add'); ?>";
    var urlAddCarnetModel = "<?php echo base_url('user/model_carnet_voyage/add'); ?>";
    var urlError = '<?php echo base_url('pages/messageErreur'); ?>';
    var urlSucces = '<?php echo base_url('pages/messageSucces'); ?>';
    var urlEditCarnet = '<?php echo base_url('user/model_carnet_voyage/edit'); ?>';
    var urlDeleteCarnet = '<?php echo base_url('user/model_carnet_voyage/delete'); ?>';
    var urlListeArticle = '<?php echo base_url('user/articles/liste'); ?>';

</script>

<legend>Gestion carnet de voyage</legend>

<script type="text/javascript" src = "<?php echo asset_url(''); ?>js/carnetVoyage.js" ></script>
<div class="content_carnet_voyage">
    <div class="messageAlerteCarnet">
        <div id="alertType"></div>
    </div>

    <a data-toggle="modal" data-target="#popUpAdd" class="buttonAjouterBoUtilisateur"> <span class="placementGlyphicon"><span class="glyphicon glyphicon-plus"></span></span>Ajouter Carnet</a><br><br/>
    <?php
    if ($carnet_voyages) {
        ?>
        <div class="table-responsive">
            <table class="table-carnet table">
                <tr>
                    <th  class="tdPetit">#</th>
                    <th>Titre</th>
                    <th class="tdMoyen">Editer article</th>
                    <th class="tdPetit">Supprimer</th>
                </tr>
                <?php
                $i = 0;
                foreach ($carnet_voyages as $carnet_voyage) {
                    $i++;
                    ?>
                    <tr>
                        <td  class="tdPetithauteur"> 
                            <?php echo $i; ?>
                        </td>
                        <td>
                            <input type="text" class="form-control inputTitreCarnetVoyage" id ="<?php echo $carnet_voyage->id; ?>" placeholder="Titre voyage"  value='<?php echo $carnet_voyage->titre; ?>' />
                            <span class="glyphiHide <?php echo $carnet_voyage->id; ?>">
                                <a class="glyphicon_input editCarnetVoyage" data-id="<?php echo $carnet_voyage->id; ?>"><span class="glyphicon glyphicon-ok" ></span></a>
                                <a class="glyphicon_input redoTitreCarnetVoyage" data-id="<?php echo $carnet_voyage->id; ?>"><span class="glyphicon glyphicon-repeat"></span></a>
                            </span>
                        </td>

                        <td class="tdPetitGlaphi">
                            <a href="#" class="editArticle" data-id="<?php echo $carnet_voyage->id; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        </td>
                        <td class="tdPetitGlaphi">
                            <a onclick="return confirm(confirmation);" class="deleteCarnetVoyage" data-id="<?php echo $carnet_voyage->id; ?>"><span class="glyphicon glyphicon-remove"></span></a>
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
<div class="modal fade" id="popUpAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

        </div>
    </div>
</div>
