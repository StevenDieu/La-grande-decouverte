<!---------- CONTENT --------->	
<div class="content">
    <div>

        <br/><br/><br/><br/>
        Page de developpement
        <br/><br/><br/>

		<?php if($logger){ ?>
            <h2>Welcome <?php echo $username; ?>!</h2>
            <a href="user/account/logout">Logout</a>
        <?php }else{ ?>
            <a href="<?php echo base_url('user/account/connexion') ?>">Connexion</a><br/>
        <?php } ?>

		<br/><br/><br/>

        Cette page vas juste référencer tous les liens pour ce balader sur le site <br/><br/>
        <a href="<?php echo base_url('user/account/inscription') ?>">Inscription</a><br/>
        
        <a href="<?php echo base_url('/pages/fiche_voyage_descriptif') ?>">Fiche Voyage</a><br/>


</div>
</div>
<!---------- CONTENT --------->	
