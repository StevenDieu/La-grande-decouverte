<script type="text/javascript">
    var urlAddArticle = '<?php echo base_url('carnetsdevoyage/addInList'); ?>';
    var urlSpiner = '<?php echo asset_url() . "images/spinner.gif"; ?>';
    var activePaginate = '<?= $activePaginate ?>'
</script>

<!---------- CONTENT ---------->	
<div class="content listCarnet">
    <div class="carnet_voyages list">
        <h2>Nos récents carnets</h2>
        <p class="soush">Retrouvez les derniers récits de voyages créés par nos voyageurs</p>
        <ul class="ulList">
            <?php
            $y = 1;
            if ($carnetVoyage):
                for ($i = 0; $i < count($carnetVoyage); $i++) {
                    if ($y == 4)
                        $y = 1;
                    if ($y == 1)
                        carnet_first($carnetVoyage, $i);
                    if ($y == 2)
                        carnet_second($carnetVoyage, $i);
                    if ($y == 3)
                        carnet_third($carnetVoyage, $i);
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
