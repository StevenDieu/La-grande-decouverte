
<script type="text/javascript">
	confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<?php 

if($newsletters){

	echo "<table><tr><th>id</th><th>titre</th><th>supprimer</th></tr>";
	foreach ($newsletters as $newsletter) {
		echo '<tr><td>'.$newsletter->id.'</td><td><a href="'.base_url('admin/newsletters/edit').'?id='.$newsletter->id.'">'.$newsletter->mail.'</a></td>
	<td><a onclick="return confirm(confirmation);" href="'.base_url('admin/model_newsletter/delete').'?id='.$newsletter->id.'">X</a></td></tr>';
	}
	echo "</table";


}else{
	
	echo "pas de newsletter";

}
?>