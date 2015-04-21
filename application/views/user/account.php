<div class="content">
    <h1>Home</h1>
    <h2>Welcome <?php echo $username; ?>!</h2>
    <a href="../user/account/logout">Logout</a><br/>

    <a href="<?php echo base_url('user/carnet_voyages/add'); ?>">ajouter carnet voyage</a><br>
    <a href="<?php echo base_url('user/carnet_voyages/edit'); ?>">editer carnet voyage</a><br>
    <a href="<?php echo base_url('user/carnet_voyages/liste'); ?>">liste des carnet voyages</a><br><br>
    
        <a href="<?php echo base_url('user/articles/add'); ?>">ajouter article</a><br>
</div>