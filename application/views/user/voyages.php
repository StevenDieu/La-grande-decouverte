
<legend>Mes voyages</legend>

<div class="content_voyage">
    <div class="table-responsive">
        <table class="table-voyage table">
            <tr>
                <th colspan="8" class="tdMoyen">Voyages réservés :</th>
            </tr>
            <tr>
                <th class="center">
                    Nom du voyage
                </th>
                <th class="center">
                    Prix total
                </th>
                <th class="center">
                    Date de départ
                </th>
                <th class="center">
                    Date de arrivée
                </th>
                <th class="center">
                    Nombre de participants
                </th>
                <th class="center">
                    Payement
                </th>
                <th class="center">
                    + Infos
                </th>
            </tr>
            <?php
            if ($voyage) {
                $i = 0;
                foreach ($voyage as $v) {
                    $i++;
                    ?>
                    <tr>
                        <td class="center"><?php echo $v->titre; ?></td>
                        <td class="center"><?php echo $v->prix_total; ?></td>
                        <td class="center"><?php echo $v->date_depart; ?></td>
                        <td class="center"><?php echo $v->date_arrivee; ?></td>
                        <td class="center"><?php echo $v->nb_participant; ?></td>
                        <td class="center"><?php echo $v->payment; ?></td>
                        <td class="center"> <span class="glyphicon glyphicon-arrow-down"></span></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </div>
</div>
