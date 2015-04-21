<!---------- CONTENT ------- -->	
<div class="content">
    <?php if($this->session->flashdata('result_newsletter') > 0){ ?>
        <span class="success">Vous êtes bien inscrit à la newsletter.</span>
    <?php } ?>
    <div>

        <br/><br/><br/><br/>
        Page de developpement
        <br/><br/><br/>




        <br/><br/>
        Cette page vas juste référencer tous les liens pour ce balader sur le site <br/><br/>

        <a href="<?php echo base_url('user/account/inscription') ?>">Inscription</a><br/>

        <a href="<?php echo base_url('/voyage/fiche/?id=64') ?>">Fiche Produit</a><br/>

        <a href="<?php echo base_url('/voyage/carnet/') ?>">Carnet Voyage</a><br/>
        <a href="<?php echo base_url('/voyage/carnet/article') ?>">fiche Carnet Voyage</a><br/>
        
        <a href="<?php echo base_url('/contact/index') ?>">Contact</a><br/>
        <a href="<?php echo base_url('/pages/mentionsLegales') ?>">Mention Légales</a><br/>

        <a href="<?php echo base_url('admin/index/connexion') ?>">Back office général</a><br/>

        <a href="<?php echo base_url('/actualite/index') ?>">Liste des actualités</a><br/>
        <a href="<?php echo base_url('/checkout/cart/onepage') ?>">Tunnel de commande</a><br/>



        <br/><br/><br/><br/><br/><br/>
        <h2>Bloc des actualités</h2>
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

                    echo "<div class='clear:both'></div>";
                }


            }else{
                
                echo "pas d'actualité";

            }
            ?>

    </div>
</div>
<!---------- CONTENT ------- -->	
