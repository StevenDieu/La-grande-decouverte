<script type="text/javascript">
    confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
    var urlDeleteCarnet = '<?php echo base_url('admin/model_carnet_voyage/deleteCarnetVoyage'); ?>';
    var urlEditCarnet = '<?php echo base_url('admin/model_carnet_voyage/editCarnetVoyage'); ?>';
    var urlVisibleCarnet = '<?php echo base_url('admin/model_carnet_voyage/validateCarnetVoyage'); ?>';
    var urlError = '<?php echo base_url('pages/messageErreur'); ?>';
    var urlSucces = '<?php echo base_url('pages/messageSucces'); ?>';
</script>
<div class="container adminCarnetVoyage">
    <div class="row">
        <div class="alertType"></div>
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Carnet de voyages</h3>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <div class="controls">
                            <div class="accordion" id="accordion2">
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                            Carnets ou articles en attente de validation
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <?php
                                            if ($carnetVoyagesNotVisibles) {
                                                ?>
                                                <div class="w60 center">
                                                    <table class="table  table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th class="center w10">#</th>
                                                                <th>Titre</th>
                                                                <th class="center w10">Editer</th>
                                                                <th class="tdPetit">Visuel</th>
                                                                <th class="center w10">Valider</th>
                                                                <th class="center w10">Supprimer</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            foreach ($carnetVoyagesNotVisibles as $carnetVoyagesNotVisible) {
                                                                ?>
                                                                <tr>
                                                                    <td class="center ">
                                                                        <?php echo $carnetVoyagesNotVisible->id; ?>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control inputTitreCarnetVoyage" id="<?= $carnetVoyagesNotVisible->id ?>" placeholder="Titre voyage" value="<?= $carnetVoyagesNotVisible->titre ?>">
                                                                        <span class="<?= $carnetVoyagesNotVisible->id ?> glyphiHide">
                                                                            <a class="icon-check  editCarnetVoyage" data-id="<?= $carnetVoyagesNotVisible->id ?>"><span class="glyphicon glyphicon-ok"></span></a>
                                                                            <a class="icon-repeat redoTitreCarnetVoyage" data-id="<?= $carnetVoyagesNotVisible->id ?>"><span class="glyphicon glyphicon-repeat"></span></a>
                                                                        </span> 
                                                                    </td>
                                                                    <td class="center w10">
                                                                        <a  href="<?php echo base_url('admin/carnet_voyages/list_fiche_voyage') . '?id=' . $carnetVoyagesNotVisible->id; ?>"><span class="icon-pencil"></span></a>
                                                                    </td>
                                                                    <td class="center w10">
                                                                        <a target="_BLANK" href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyagesNotVisible->id . "&token=" . $carnetVoyagesNotVisible->token; ?>"><span class="icon-list-alt"></span></a>
                                                                    </td>
                                                                    <td class="center action_validate validate<?= $carnetVoyagesNotVisible->id; ?>">
                                                                        <?php if ($carnetVoyagesNotVisible->visible == 1) { ?>
                                                                            <span class="validate icon_click" data-visible="0" data-id="<?= $carnetVoyagesNotVisible->id; ?>"><span class="icon-ok"></span></span>
                                                                        <?php } else { ?>
                                                                            <span class="validate icon_click" data-visible="1" data-id="<?= $carnetVoyagesNotVisible->id; ?>"><span class="icon-remove"></span></span>
                                                                        <?php } ?>
                                                                    </td>
                                                                    <td class="center">
                                                                        <a onclick="return confirm(confirmation);" class="btn btn-danger deleteCarnetVoyage" data-id="<?= $carnetVoyagesNotVisible->id ?>">X</a>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <?php
                                            } else {
                                                ?>
                                                <br/>Pas de carnets de voyage ou d'articles à valider<br/><br/>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                            Tous les carnets de voyages
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <?php
                                            if ($carnetVoyagesVisibles) {
                                                ?>
                                                <div class="w60 center">
                                                    <table class="table  table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th class="center w10">#</th>
                                                                <th>Titre</th>
                                                                <th class="center w10">Editer</th>
                                                                <th class="tdPetit">Visuel</th>
                                                                <th class="center w10">Valider</th>
                                                                <th class="center w10">Supprimer</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            foreach ($carnetVoyagesVisibles as $carnetVoyagesVisible) {
                                                                ?>
                                                                <tr>
                                                                    <td class="center ">
                                                                        <?php echo $carnetVoyagesVisible->id; ?>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control inputTitreCarnetVoyage" id="<?= $carnetVoyagesVisible->id ?>" placeholder="Titre voyage" value="<?= $carnetVoyagesVisible->titre ?>">
                                                                        <span class="<?= $carnetVoyagesVisible->id ?> glyphiHide">
                                                                            <a class="icon-check  editCarnetVoyage" data-id="<?= $carnetVoyagesVisible->id ?>"><span class="glyphicon glyphicon-ok"></span></a>
                                                                            <a class="icon-repeat redoTitreCarnetVoyage" data-id="<?= $carnetVoyagesVisible->id ?>"><span class="glyphicon glyphicon-repeat"></span></a>
                                                                        </span>
                                                                    </td>
                                                                    <td class="center w10">
                                                                        <a  href="<?php echo base_url('admin/carnet_voyages/list_fiche_voyage') . '?id=' . $carnetVoyagesVisible->id; ?>"><span class="icon-pencil"></span></a>
                                                                    </td>
                                                                    <td class="center w10">
                                                                        <a target="_BLANK" href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyagesVisible->id . "&token=" . $carnetVoyagesVisible->token; ?>"><span class="icon-list-alt"></span></a>
                                                                    </td>
                                                                    <td class="center action_validate validate<?= $carnetVoyagesVisible->id; ?>">
                                                                        <?php if ($carnetVoyagesVisible->visible == 1) { ?>
                                                                            <span class="validate icon_click" data-visible="0" data-id="<?= $carnetVoyagesVisible->id; ?>"><span class="icon-ok"></span></span>
                                                                        <?php } else { ?>
                                                                            <span class="validate icon_click" data-visible="1" data-id="<?= $carnetVoyagesVisible->id; ?>"><span class="icon-remove"></span></span>
                                                                        <?php } ?>
                                                                    </td>
                                                                    <td class="center">
                                                                        <a onclick="return confirm(confirmation);" class="btn btn-danger deleteCarnetVoyage" data-id="<?= $carnetVoyagesVisible->id ?>">X</a>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <?php
                                            } else {
                                                ?>
                                                <br/>Pas de carnet de voyage avec des articles à valider<br/><br/>
                                                <?php
                                            }
                                            ?>                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

