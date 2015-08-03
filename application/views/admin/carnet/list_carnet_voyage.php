<script type="text/javascript">
    confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<div class="container">
    <div class="row">
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
                                            Carnet avec un article en attente de validation
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
                                                                        <a href="<?php echo base_url('admin/carnet_voyages/list_fiche_voyage') . '?id=' . $carnetVoyagesNotVisible->id; ?>"><?php echo $carnetVoyagesNotVisible->titre; ?></a>
                                                                    </td>
                                                                    <td class="center">
                                                                        <a onclick="return confirm(confirmation);" class="btn btn-danger" href="<?php echo base_url('admin/model_carnet_voyage/delete') . '?id=' . $carnetVoyagesNotVisible->id; ?>">X</a>
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
                                                                        <a href="<?php echo base_url('admin/carnet_voyages/list_fiche_voyage') . '?id=' . $carnetVoyagesVisible->id; ?>"><?php echo $carnetVoyagesVisible->titre; ?></a>
                                                                    </td>
                                                                    <td class="center">
                                                                        <a onclick="return confirm(confirmation);" class="btn btn-danger" href="<?php echo base_url('admin/model_carnet_voyage/delete') . '?id=' . $carnetVoyagesVisible->id; ?>">X</a>
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

