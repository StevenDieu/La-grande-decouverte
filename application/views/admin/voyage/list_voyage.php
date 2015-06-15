<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Voyages</h3>
                    <a href="<?php echo base_url('admin/voyages/add'); ?>" id="bouton_header" role="button" class="btn" data-toggle="">Ajouter un voyage</a>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <script type="text/javascript">
                            confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
                        </script>
                        <?php
                        if ($voyages) {
                            ?>
                            <table>
                                <tr>
                                    <th>id</th>
                                    <th>titre</th>
                                    <th>supprimer</th>
                                </tr>
                                <?php
                                foreach ($voyages as $voyage) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $voyage->id; ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('admin/voyages/edit') . '?id=' . $voyage->id; ?>"><?php echo $voyage->titre; ?></a>
                                        </td>
                                        <td>
                                            <a onclick="return confirm(confirmation);" href="<?php echo base_url('admin/model_voyage/delete') . '?id=' . $voyage->id; ?>">X</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                            <?php
                        } else {

                            echo "pas de voyage";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


