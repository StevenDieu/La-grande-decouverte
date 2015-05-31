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
                        <a href="<?php echo base_url('admin/voyages/add'); ?>">ajouter voyage</a><br>
                        <?php
                        if ($voyages) {

                            echo "<table><tr><th>id</th><th>titre</th><th>supprimer</th></tr>";
                            foreach ($voyages as $voyage) {
                                echo '<tr><td>' . $voyage->id . '</td><td><a href="' . base_url('admin/voyages/edit') . '?id=' . $voyage->id . '">' . $voyage->titre . '</a></td>
	<td><a onclick="return confirm(confirmation);" href="' . base_url('admin/model_voyage/delete') . '?id=' . $voyage->id . '">X</a></td></tr>';
                            }
                            echo "</table";
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


