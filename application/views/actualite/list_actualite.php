<div class="content">
	<?php

	if($actualites){

		foreach ($actualites as $actualite) {
			echo $actualite->titre.'</br>';
			echo $actualite->description.'</br>';
			echo $actualite->date.'  ';
			echo $actualite->time.'</br>';

			if($actualite->image_1){
		      	echo '<img src="'.base_url('').'media/actualite/'.$actualite->image_1.'" alt="'.$actualite->image_1.'" width="300"/>';
		    }
		    if($actualite->image_2){
		      	echo '<img src="'.base_url('').'media/actualite/'.$actualite->image_2.'" alt="'.$actualite->image_2.'" width="300"/>';
		    }
		    if($actualite->image_3){
		      	echo '<img src="'.base_url('').'media/actualite/'.$actualite->image_3.'" alt="'.$actualite->image_3.'" width="300"/>';
		    }
		}


	}else{
		
		echo "pas d'actualité";

	}
	?>
</div>

