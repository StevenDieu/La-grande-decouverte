<div class="content carnet_liste">

    <script type="text/javascript">
        confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
    </script>
    <a href="<?php echo base_url('user/carnet_voyages/add'); ?>">ajouter voyage</a><br>
    <?php
    if ($carnet_voyages) {
        ?>
        <table>
            <tr>
                <th>id</th>
                <th>titre</th>
                <th>supprimer</th>
            </tr>
            <?php foreach ($carnet_voyages as $carnet_voyage) { ?>
                <tr>
                    <td>
                        <?php echo $carnet_voyage->id; ?>
                    </td>
                    <td>
                        <a href=" <?php echo base_url('user/carnet_voyages/edit') . '?id=' . $carnet_voyage->id; ?> ">
                            <?php echo $carnet_voyage->titre; ?>
                        </a>
                    </td>
                    <td>
                        <a onclick="return confirm(confirmation);" href="<?php echo base_url('user/model_carnet_voyage/delete') . '?id=' . $carnet_voyage->id; ?>">X</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    } else {
        ?>
        Pas de carnet de voyage
        <?php
    }
    ?>
</div>