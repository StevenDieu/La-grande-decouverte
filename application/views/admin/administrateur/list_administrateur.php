<script type="text/javascript">
	confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<a href="<?php echo base_url('admin/administrateur/add'); ?>">ajouter un admin</a><br>
<?php if($this->session->flashdata('login_administrateur') != ''){ ?>
        <span class="success"><?php echo $this->session->flashdata('login_administrateur'); ?></span>
    <?php } ?>

</br>
<?php 
if($administrateurs){
	echo "<table><tr><th>id</th><th>login</th><th>supprimer</th></tr>";
	foreach ($administrateurs as $administrateur) {
		echo '<tr><td>'.$administrateur->id.'</td><td><a href="'.base_url('admin/administrateur/edit').'?id='.$administrateur->id.'">'.$administrateur->login.'</a></td>
	<td><a onclick="return confirm(confirmation);" href="'.base_url('admin/administrateur/delete').'?id='.$administrateur->id.'">X</a></td></tr>';
	}
	echo "</table";
}else{	
	echo "pas d'administrateur";
}
?>


