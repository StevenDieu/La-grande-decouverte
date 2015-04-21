<script type="text/javascript">
	confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<a href="<?php echo base_url('admin/actualites/add'); ?>">ajouter acctu</a><br>
<?php 

if($actualites){

	echo "<table><tr><th>id</th><th>nom</th><th>supprimer</th></tr>";
	foreach ($actualites as $actualite) {
		echo '<tr><td>'.$actualite->id.'</td><td><a href="'.base_url('admin/actualites/edit').'?id='.$actualite->id.'">'.$actualite->titre.'</a></td>
	<td><a onclick="return confirm(confirmation);" href="'.base_url('admin/model_actualite/delete').'?id='.$actualite->id.'">X</a></td></tr>';
	}
	echo "</table";


}else{
	
	echo "pas d'actualité";

}
?>


