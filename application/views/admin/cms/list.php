<script type="text/javascript">
	confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<a href="<?php echo base_url('admin/cmss/add'); ?>">ajouter un contenu cms</a><br>


<?php if($cms): ?>

	<table>
		<tr>
			<th>id</th>
			<th>code</th>
			<th>label</th>
			<th>activé</th>
			<th>supprimer</th>
		</tr>

		<?php foreach ($cms as $c): ?>
			<tr>
				<td><?php echo $c->id ?></td>
				<td><a href="<?php echo base_url('admin/cmss/edit').'?id='.$c->id ?>"><?php echo $c->code ?></a></td>
				<td><a href="<?php echo base_url('admin/cmss/edit').'?id='.$c->id ?>"><?php echo $c->label ?></a></td>
				<td><?php if($c->active == 1 )echo 'Oui'; else echo 'Non'; ?></td>
				<td><a onclick="return confirm(confirmation);" href="<?php echo base_url('admin/model_cms/delete') ?>?id=<?php echo $c->id ?>">X</a></td>
			</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	Il n'y a aucun contenu cms.
<?php endif ?>

<style type="text/css">
	th,td{
		width: 150px;
	}
</style>

