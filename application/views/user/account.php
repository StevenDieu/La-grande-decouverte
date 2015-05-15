<script type="text/javascript">
    var urlReconnect = '<?php echo base_url('user/verification/login'); ?>';
    var urlCarnet = '<?php echo base_url('user/carnet_voyages/liste'); ?>';
    var urlAddCarnet = "<?php echo base_url('user/carnet_voyages/add'); ?>";
    var urlAddCarnetModel = "<?php echo base_url('user/model_carnet_voyage/add'); ?>";
    var urlError = '<?php echo base_url('pages/messageErreur'); ?>';
    var urlSucces = '<?php echo base_url('pages/messageSucces'); ?>';
    var urlEditCarnet = '<?php echo base_url('user/model_carnet_voyage/edit'); ?>';
    var urlDeleteCarnet = '<?php echo base_url('user/model_carnet_voyage/delete'); ?>';
    var urlListeArticle = '<?php echo base_url('user/articles/liste'); ?>';
    var urlviewCarnet = '<?php echo base_url('voyage/carnet'); ?>';
    var urlUpload = '<?php echo base_url('user/articles/upload'); ?>';
    var urlDelete = '<?php echo base_url('user/articles/delete'); ?>';
    var urlAddArticle = '<?php echo base_url('user/model_article/add'); ?>';
    var urlEditArticle = '<?php echo base_url('user/model_article/edit'); ?>';
    var urlViewAddArticle = '<?php echo base_url('user/articles/add'); ?>';
    var urlDeleteArticle = '<?php echo base_url('user/model_article/delete'); ?>'
    var urlViewEditArticle = '<?php echo base_url('user/articles/edit'); ?>';
    var urlSpiner = '<?php echo asset_url() . "images/spinner.gif"; ?>';
    var urlCompte = '<?php echo base_url('user/account/myaccount'); ?>';
    var urlChangeEmail = '<?php echo base_url('user/verification/changeEmail'); ?>';
    var urlChangeMdp = '<?php echo base_url('user/verification/changeMdp'); ?>';
    var urlChangeDecription = '<?php echo base_url('user/verification/changeDescription'); ?>';
</script>

</script>


<div class="content content_account">
    <ul name="menuUtilisateur" class="menuUtilisateur">
        <li name="titre Menu" class="menuTitre">
            <?php echo $username; ?>
        </li>
        <li class="menuChamp menuChampPremier comptes" data-onglet="comptes">
            <a href="#" ><span class="icon"><span class="glyphicon glyphicon-user"></span></span>Mon compte</a>
        </li>
        <li class="menuChamp voyages" data-onglet="voyages">
            <a href="#" ><span class="icon"><span class="glyphicon glyphicon-road"></span></span>Mes voyages</a>
        </li>
        <li class="menuChamp carnets" data-onglet="carnets">
            <a href="#" data-onglet="carnets"><span class="icon"><span class="glyphicon glyphicon-book"></span></span>Mes carnets</a>
        </li>
        <li class="menuChamp">
            <a href="../user/account/logout"><span class="icon"><span class="glyphicon glyphicon-off"></span></span>Se déconnecter</a>
        </li>
    </ul>

    <div class="contentUtilisateur" id="compte">

    </div>

    <br><br><br><br>

</div>