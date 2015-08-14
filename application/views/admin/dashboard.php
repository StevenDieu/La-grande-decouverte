<div class="content admin-connexion">
	<div class="container_dash">

		<div class="bloc_commande price">
            <h4>Ventes depuis le début</h4>
            <p><?php echo $somme[0]->prix_total; ?> €</p>
        </div>

        <div class="bloc_commande price">
            <h4>Moyenne des commandes</h4>
            <p><?php echo $moyenne[0]->prix_total; ?> €</p>
        </div>

        <div class="bloc_commande price">
            <h4>5 dernières commandes</h4>
            <table>
            	<tr class="entete">
            		<th>Client</th>
            		<th>Nb participant</th>
            		<th>Montant global</th>
            	</tr>
            	<?php foreach ($order_last as $order): ?>
            		<tr class="ligne" data-id="1">
	            		<td><?php echo $order->id_utilisateur[0]->nom.' '.$order->id_utilisateur[0]->prenom ?></td>
	            		<td><?php echo $order->nb_participant; ?></td>
	            		<td><?php echo $order->prix_total; ?> €</td>
	            	</tr>

            	<?php endforeach; ?>
            	
            </table>
        </div>

        <div class="clear"></div>

	</div>

</div>

<script type="text/javascript">
	$( document ).ready(function() {
	    $( ".container_dash .bloc_commande.price table tr.ligne" ).hover(
		  function() {
		    $( this ).addClass( "hover" );
		  }, function() {
		    $( this ).removeClass( "hover" );
		  }
		);
	});

	$( ".container_dash .bloc_commande.price table tr.ligne" ).click(function() {
		var id = $(this).data('id');
	  	window.location = "<?php echo base_url() ?>admin/orders/edit?id="+id;
	});

	
</script>
