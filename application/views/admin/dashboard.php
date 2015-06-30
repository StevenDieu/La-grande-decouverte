<div class="content admin-connexion">
    <h1>Home du backoffice</h1>
    <h2>Welcome <?php echo $username; ?>!</h2>
    <a href="<?php echo base_url('admin/index/logout') ?>">Logout</a>

    <br>
    <br>
    <br>

    <h3>Gestion des voyages</h3>
    <a href="<?php echo base_url('admin/voyages/add'); ?>">ajouter voyage</a><br>
    <a href="<?php echo base_url('admin/voyages/liste'); ?>">liste des voyages</a><br><br>


    <a href="<?php echo base_url('admin/carnet_voyages/edit'); ?>">editer carnet voyage</a><br>
    <a href="<?php echo base_url('admin/carnet_voyages/liste'); ?>">liste des carnet voyages</a><br><br>
</div>