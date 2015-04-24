
<legend>Gestion carnet de voyage</legend>

<script type="text/javascript" src = "<?php echo asset_url(''); ?>js/carnetVoyage.js" ></script>
<div class="content_carnet_voyage">
    <div class="messageAlerteCarnet">
        <div id="alertType"></div>
    </div>

    <a data-toggle="modal" data-target="#popUpAdd" class="buttonAjouterBoUtilisateur"> <span class="placementGlyphicon"><span class="glyphicon glyphicon-plus"></span></span>Ajouter Carnet</a><br><br/>
    <div class="divTable">
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
                        <th class="tdPetit">Visuel</th>
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
                                <a class="deleteCarnetVoyage" data-id="<?php echo $carnet_voyage->id; ?>"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                            <td class="tdPetitGlaphi">
                                <a target="_BLANK" href="<?php echo base_url('voyage/carnet') . "?id=" . $carnet_voyage->id; ?>"><span class="glyphicon glyphicon-list-alt"></span></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <?php
        } else {
            ?>
            <br/><br/>
            <div class="showText">
                Il n'y a pas de carnet
            </div>
            <div class="hideTable">
                <div class="table-responsive">
                    <table class="table-carnet table">
                        <tr>
                            <th  class="tdPetit">#</th>
                            <th>Titre</th>
                            <th class="tdMoyen">Editer article</th>
                            <th class="tdPetit">Supprimer</th>
                            <th class="tdPetit">Visuel</th>
                        </tr>
                    </table>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<div class="modal fade" id="popUpAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

        </div>
    </div>
</div>
