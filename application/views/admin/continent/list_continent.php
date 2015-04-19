<script type="text/javascript">
	confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<a href="<?php echo base_url('admin/continent/add'); ?>">ajouter continent</a><br>
<?php 

if($continents){

	echo "<table><tr><th>id</th><th>nom</th><th>supprimer</th></tr>";
	foreach ($continents as $continent) {
		echo '<tr><td>'.$continent->id.'</td><td><a href="'.base_url('admin/continent/edit').'?id='.$continent->id.'">'.$continent->name.'</a></td>
	<td><a onclick="return confirm(confirmation);" href="'.base_url('admin/model_continent/delete').'?id='.$continent->id.'">X</a></td></tr>';
	}
	echo "</table";


}else{
	
	echo "pas de continent";

}
?>


