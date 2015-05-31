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

    <a href="<?php echo base_url('admin/continent/add'); ?>">ajouter continent</a><br>
    <a href="<?php echo base_url('admin/continent/liste'); ?>">liste des continents</a><br>

   <h3>Gestion des newsletters</h3>
   <a href="<?php echo base_url('admin/newsletters/liste'); ?>">liste des newsletters</a><br>

   <h3>Gestion des actualite</h3>
    <a href="<?php echo base_url('admin/actualites/add'); ?>">ajouter une actualité</a><br>
   <a href="<?php echo base_url('admin/actualites/liste'); ?>">liste des actualites</a><br>

   <h3>Gestion des administrateurs</h3>
    <a href="<?php echo base_url('admin/administrateur/add'); ?>">ajouter un administrateur</a><br>
   <a href="<?php echo base_url('admin/administrateur/liste'); ?>">liste des administrateurs</a><br>

   <h3>Gestion des clients</h3>
   <a href="<?php echo base_url('admin/customer/liste'); ?>">liste des clients</a><br>

   <h3>Gestion des questions faq</h3>
    <a href="<?php echo base_url('admin/faqs/add'); ?>">ajouter une question faq</a><br>
   <a href="<?php echo base_url('admin/faqs/liste'); ?>">liste des questions faqs</a><br>

</div>