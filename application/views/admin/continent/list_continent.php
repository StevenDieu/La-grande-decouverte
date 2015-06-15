<script type="text/javascript">
    confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Voyages</h3>
                    <a href="<?php echo base_url('admin/continent/add'); ?>" id="bouton_header" role="button" class="btn" data-toggle="">Ajouter un Continent</a>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <script type="text/javascript">
                            confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
                        </script>
                        <?php
                        if ($continents) {
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
                                        foreach ($continents as $continent) {
                                            ?>
                                            <tr>
                                                <td class="center ">
                                                    <?php echo $continent->id; ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/continent/edit') . '?id=' . $continent->id; ?>"><?php echo $continent->name; ?></a>
                                                </td>
                                                <td class="center">
                                                    <a onclick="return confirm(confirmation);" class="btn btn-danger" href="<?php echo base_url('admin/model_continent/delete') . '?id=' . $continent->id; ?>">X</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php
                        } else {
                            echo "Pas de continent";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


