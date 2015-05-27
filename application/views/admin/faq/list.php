<script type="text/javascript">
	confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<a href="<?php echo base_url('admin/faqs/add'); ?>">ajouter une actualité</a><br>


<?php if($faqs): ?>

	<table>
		<tr>
			<th>id</th>
			<th>question</th>
			<th>activé</th>
			<th>supprimer</th>
		</tr>

		<?php foreach ($faqs as $faq): ?>
			<tr>
				<td><?php echo $faq->id ?></td>
				<td><a href="<?php echo base_url('admin/faqs/edit').'?id='.$faq->id ?>"><?php echo $faq->question ?></a></td>
				<td><?php if($faq->active == 1 )echo 'Oui'; else echo 'Non'; ?></td>
				<td><a onclick="return confirm(confirmation);" href="<?php echo base_url('admin/model_faq/delete') ?>?id=<?php echo $faq->id ?>">X</a></td>
			</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	Il n'y a aucune question faq.
<?php endif ?>

<style type="text/css">
	th,td{
		width: 150px;
	}
</style>

