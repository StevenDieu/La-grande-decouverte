<div class="content admin-connexion">
	<div class="container_dash">

		<div class="dash_left">
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
	            		<tr class="ligne" data-id="<?php echo $order->id; ?>">
		            		<td><?php echo $order->id_utilisateur[0]->nom.' '.$order->id_utilisateur[0]->prenom ?></td>
		            		<td><?php echo $order->nb_participant; ?></td>
		            		<td><?php echo $order->prix_total; ?> €</td>
		            	</tr>

	            	<?php endforeach; ?>
	            </table>
	        </div>
		</div>

		<div class="dash_right">
	        <div class="bloc_commande">

	        	<div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>


	            <ul class="nav nav-tabs">
				  <li class="active"><a data-toggle="tab" href="#home">Meilleures ventes</a></li>
				  <li><a data-toggle="tab" href="#menu1">Produits les plus consultés</a></li>
				  <li><a data-toggle="tab" href="#menu2">Nouveaux clients</a></li>
				  <li><a data-toggle="tab" href="#menu3">Derniers abonnés</a></li>
				</ul>

				<div class="tab-content">
				  <div id="home" class="tab-pane fade in active">
				    <?php if($view): ?>
				     <table>
		            	<tr class="entete">
		            		<th>Nom du produit</th>
		            		<th>Prix</th>
		            		<th>Quantité commandée</th>
		            	</tr>
		            	<?php foreach ($view as $v): ?>
		            		<tr class="ligne" data-id="<?php echo $v->product_id[0]->id; ?>">
			            		<td><?php echo $v->product_id[0]->titre; ?></td>
			            		<td><?php echo $v->product_id[0]->duree; ?> jours</td>
			            		<td><?php echo $v->view; ?></td>
			            	</tr>

		            	<?php endforeach; ?>
		             </table>
		            <?php endif; ?>
				  </div>
				  <div id="menu1" class="tab-pane fade">
				  	<?php if($view): ?>
				     <table>
		            	<tr class="entete">
		            		<th>Nom du produit</th>
		            		<th>Durée</th>
		            		<th>Nombre de consultations</th>
		            	</tr>
		            	<?php foreach ($view as $v): ?>
		            		<tr class="ligne" data-id="<?php echo $v->product_id[0]->id; ?>">
			            		<td><?php echo $v->product_id[0]->titre; ?></td>
			            		<td><?php echo $v->product_id[0]->duree; ?> jours</td>
			            		<td><?php echo $v->view; ?></td>
			            	</tr>

		            	<?php endforeach; ?>
		             </table>
		            <?php endif; ?>
				  </div>
				  <div id="menu2" class="tab-pane fade">
				  	<?php if($users): ?>
				  	 <table>
				    	<tr class="entete">
		            		<th>Nom du client</th>
		            		<th>Date d'inscription</th>
		            		<th>Adresse mail</th>
		            		<th>Nombre de commande</th>
		            	</tr>
		            	<?php foreach ($users as $u): ?>
		            		<tr class="ligne" data-id="<?php echo $u->id; ?>">
			            		<td><?php echo $u->nom.' '.$u->prenom; ?></td>
			            		<td><?php echo explode(' ',$u->date_inscription)[0]; ?></td>
			            		<td><?php echo $u->mail; ?></td>
			            		<td><?php echo $u->description ?></td>
			            	</tr>
		            	<?php endforeach; ?>
		             </table>
		            <?php endif; ?>
				  </div>
				  <div id="menu3" class="tab-pane fade">
				  	<?php if($newsletter): ?>
				     <table>
				    	<tr class="entete">
		            		<th>Adresse mail</th>
		            		<th>Date d'inscription</th>
		            	</tr>
		            	<?php foreach ($newsletter as $n): ?>
		            		<tr class="ligne" data-id="<?php echo $n->id; ?>">
			            		<td><?php echo $n->mail; ?></td>
			            		<td><?php echo $n->date_inscription ?></td>
			            	</tr>
		            	<?php endforeach; ?>
		             </table>
		            <?php endif; ?>
				  </div>
				</div>
	        </div>
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

		$( ".container_dash .bloc_commande table tr.ligne" ).hover(
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

	$( "#menu1 tr.ligne" ).click(function() {
		var id = $(this).data('id');
	  	window.location = "<?php echo base_url() ?>admin/voyages/edit?id="+id;
	});

	$( "#menu2 tr.ligne" ).click(function() {
		var id = $(this).data('id');
	  	window.location = "<?php echo base_url() ?>admin/customer/liste/edit/"+id;
	});

	$( "#menu3 tr.ligne" ).click(function() {
		var id = $(this).data('id');
	  	window.location = "<?php echo base_url() ?>admin/newsletters/liste/read/"+id;
	});

	            Morris.Bar({
                element: 'morris-bar-chart',
                data: [{
                    y: '2006',
                    a: 100,
                    b: 90
                }, {
                    y: '2007',
                    a: 75,
                    b: 65
                }, {
                    y: '2008',
                    a: 50,
                    b: 40
                }, {
                    y: '2009',
                    a: 75,
                    b: 65
                }, {
                    y: '2010',
                    a: 50,
                    b: 40
                }, {
                    y: '2011',
                    a: 75,
                    b: 65
                }, {
                    y: '2012',
                    a: 100,
                    b: 90
                }],
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Series A', 'Series B'],
                hideHover: 'auto',
                resize: true
            });
	
</script>



