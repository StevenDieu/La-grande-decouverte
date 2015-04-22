<script type="text/javascript">
	confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<?php 

if($customers){

	echo "<table><tr><th>id</th><th>login</th><th>nom</th><th>prenom</th><th>banni</th><th>bannir</th></tr>";
	foreach ($customers as $customer) {
		if($customer->banni == 0){
			$banni = 'non';
		}else{
			$banni = 'oui';
		}
		echo '<tr><td>'.$customer->id.'</td><td><a href="'.base_url('admin/customer/edit').'?id='.$customer->id.'">'.$customer->login.'</a></td>
		<td><a href="'.base_url('admin/customer/edit').'?id='.$customer->id.'">'.$customer->nom.'</a></td>
		<td><a href="'.base_url('admin/customer/edit').'?id='.$customer->id.'">'.$customer->prenom.'</a></td>
		<td><a href="'.base_url('admin/customer/edit').'?id='.$customer->id.'">'.$banni.'</a></td>
	<td><a onclick="return confirm(confirmation);" href="'.base_url('admin/model_customer/bannir').'?id='.$customer->id.'">X</a></td></tr>';
	}
	echo "</table";


}else{
	
	echo "pas d'actualité";

}
?>


