
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
                    Statut
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
                    PDF
                </th>
            </tr>
            <?php
            if ($voyage) {
                $i = 0;
                foreach ($voyage as $v) {
                    $i++;
                    ?>
                    <tr>
                        <?php
                        if ($v->visible == 1) {
                            ?> 
                        <td class="center"><a href="<?= base_url('voyage/fiche/?id=') . $v->vId ?>" target="_BLANCK" ><?php echo $v->titre; ?></a></td>

                            <?php
                        } else {
                            ?>
                            <td class="center"><?php echo $v->titre; ?></td>

                            <?php
                        }
                        ?>
                        <td class="center"><?php echo $v->statut; ?></td>
                        <td class="center"><?php echo $v->prix_total; ?></td>
                        <td class="center"><?php echo $v->date_depart; ?></td>
                        <td class="center"><?php echo $v->date_arrivee; ?></td>
                        <td class="center"><?php echo $v->nb_participant; ?></td>
                        <td class="center"><?php
                            if ($v->payment == "CHECKMO") {
                                echo "CHEQUE";
                            } else {
                                echo $v->payment;
                            }
                            ?></td>
                        <td class="center"><a href="<?php echo base_url('checkout/cart/facture_pdf?id=') . $v->id ?>" target="_BLANK"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </div>
</div>
