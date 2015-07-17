
<legend>Mes voyages</legend>
<div class="messageAlerteCarnet center">
    <div class="alertType"></div>
</div>
<div class="content_voyage">
	<div class="table-responsive">
        <table class="table-voyage table">
        	<tr>
        		<th colspan="8" class="tdMoyen">Voyages réservés :</th>
        	</tr>
        	<?php if ($voyage) { 
        			$i = 0;
                    foreach ($voyage as $v) {
                        $i++;
						?>
            <tr>
                <td class="tdMoyen">Nom du voyage : <br/><?php echo $v->titre; ?></td>
                <td class="tdPetit">Prix total : <?php echo $v->prix_total; ?></td>
                <td class="tdPetit">Date de départ : <br/><?php echo $v->date_depart; ?></td>
                <td class="tdPetit">Date de arrivée : <br/><?php echo $v->date_arrivee; ?></td>
                <td class="tdPetit">Nombre de participants : <br/><?php echo $v->nb_participant; ?></td>
                <td class="tdPetit">Payement : <br/><?php echo $v->payment; ?></td>
                <td class="tdPetit">Accompte : <br/><?php echo $v->acompte; ?></td>
                <td class="tdPetit">Prix total : <br/><?php echo $v->prix_total; ?></td>
            </tr>
        	<tr>
                
        	</tr>
        		<?php 
        			}
        		} ?>
        </table>
    </div>
</div>
