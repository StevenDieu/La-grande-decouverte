<script type="text/javascript">
	confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<div class="widget-content">
	<?php if($cms): ?>
		
			<table class="table table-striped table-bordered">
				<thead>
	                  <tr>
	                    <th>id</th>
						<th>code</th>
						<th>label</th>
						<th>activé</th>
	                    <th class="td-actions">supprimer</th>
	                  </tr>
	            </thead>
	            <tbody>

				<?php foreach ($cms as $c): ?>
					<tr>
						<td><?php echo $c->id ?></td>
						<td><a href="<?php echo base_url('admin/cmss/edit').'?id='.$c->id ?>"><?php echo $c->code ?></a></td>
						<td><a href="<?php echo base_url('admin/cmss/edit').'?id='.$c->id ?>"><?php echo $c->label ?></a></td>
						<td><?php if($c->active == 1 )echo 'Oui'; else echo 'Non'; ?></td>
						<td class="td-actions"><a onclick="return confirm(confirmation);"  href="<?php echo base_url('admin/model_cms/delete') ?>?id=<?php echo $c->id ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
					</tr>
				<?php endforeach ?>

				</tbody>
	        </table>

	<?php else: ?>
		Il n'y a aucun contenu cms.
	<?php endif ?>
</div>
                
                
