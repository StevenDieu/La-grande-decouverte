<!---------- CONTENT ---------->	
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZo93gQX7j_kr0Bn3oqfwfIIPCQLAKhuI"></script>
<script type="text/javascript" src ="<?php echo asset_url(''); ?>librairie/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link href="<?php echo asset_url(''); ?>librairie/css/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" rel="stylesheet"/>

<div class="content listCarnet">
    <div class="carnet_voyages">
        <h2>Nos récents carnets</h2>
        <p class="soush">Retrouvez les derniers récits de voyages créés par nos voyageurs</p>
        <ul>
            <?php
            $y =1;
            if ($carnetVoyage):
                for ($i = 0; $i < count($carnetVoyage); $i++) {
                    if($y == 4) $y=1;
                    if($y == 1) carnet_first($carnetVoyage,$i);
                    if($y == 2) carnet_second($carnetVoyage,$i);
                    if($y == 3) carnet_third($carnetVoyage,$i);
                    $y++;
                }                               
            endif;
            ?>
            <div class="clear"></div>
        </ul>
    </div>
    <div class="clear"></div>
    &nbsp;
</div>
