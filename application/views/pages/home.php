<!---------- CONTENT --------->	
<div class="content">
    <div>

        <br/><br/><br/><br/>
        Page de developpement
        <br/><br/><br/>





        Cette page vas juste référencer tous les liens pour ce balader sur le site <br/><br/>

        <?php if ($logger) { ?>
            <h2>Welcome <?php echo $username; ?>!</h2>
            <a href="user/account/logout">Logout</a>
        <?php } else { ?>
            <a href="<?php echo base_url('user/account/connexion') ?>">Connexion</a><br/>
        <?php } ?>

        <a href="<?php echo base_url('user/account/inscription') ?>">Inscription</a><br/>

        <a href="<?php echo base_url('/voyage/fiche/ficheProduit') ?>">Fiche Produit</a><br/>

        <a href="<?php echo base_url('/voyage/fiche/ficheVoyage') ?>">Fiche Voyage</a><br/>
        
        <a href="<?php echo base_url('/pages/contact') ?>">Contact</a><br/>

    </div>
</div>
<!---------- CONTENT --------->	
