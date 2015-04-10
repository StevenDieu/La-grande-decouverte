<div class="content admin-connexion">
   <h1>Home du backoffice</h1>
   <h2>Welcome <?php echo $username; ?>!</h2>
   <a href="<?php echo base_url('admin/index/logout') ?>">Logout</a>

   <br>
   <br>
   <br>



   <a href="<?php echo base_url('admin/voyage/add'); ?>">ajouter voyage</a><br>
   <a href="<?php echo base_url('admin/voyage/edit'); ?>">editer voyage</a><br>
   <a href="<?php echo base_url('admin/voyage/liste'); ?>">liste des voyages</a><br>
</div>