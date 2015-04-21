

<div class="content">
<script type="text/javascript">
	confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<a href="<?php echo base_url('admin/actualites/add'); ?>">ajouter acctu</a><br>
<?php 

if($actualites){

	foreach ($actualites as $actualite) {
		echo '
		'.$actualite->id.'
		<td><a href="'.base_url('admin/actualites/edit').'?id='.$actualite->id.'">'.$actualite->titre.'</a>
		';
	}


}else{
	
	echo "pas d'actualité";

}
?>
</div>

