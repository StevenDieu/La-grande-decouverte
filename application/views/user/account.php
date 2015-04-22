<script type="text/javascript">
    var urlCarnet = '<?php echo base_url('user/carnet_voyages/liste'); ?>';
</script>


<div class="content content_account">
    <ul name="menuUtilisateur" class="menuUtilisateur">
        <li name="titre Menu" class="menuTitre">
            <?php echo $username; ?>
        </li>
        <li class="menuChamp menuChampPremier actif" data-onglet="compte">
            <a href="#" ><span class="icon"><span class="glyphicon glyphicon-user"></span></span>Mon compte</a>
        </li>
        <li class="menuChamp" data-onglet="voyages">
            <a href="#" ><span class="icon"><span class="glyphicon glyphicon-road"></span></span>Mes voyages</a>
        </li>
        <li class="menuChamp" data-onglet="carnets">
            <a href="#" data-onglet="carnets"><span class="icon"><span class="glyphicon glyphicon-book"></span></span>Mes carnets</a>
        </li>
        <li class="menuChamp">
            <a href="../user/account/logout"><span class="icon"><span class="glyphicon glyphicon-off"></span></span>Se déconnecter</a>
        </li>
    </ul>

    <div class="contentUtilisateur active" id="compte">
        <h1>Home</h1>
        <h2>Welcome <?php echo $username; ?>!</h2>
    </div>
    <div class="contentUtilisateur" id="voyages">

    </div>
    <div class="contentUtilisateur" id="carnets">
        
    </div>

    <br><br><br><br>

</div>