</div>
</div>
<script src="<?php echo asset_url('js/admin/excanvas.min.js'); ?>"></script> 
<script src="<?php echo asset_url('js/admin/chart.min.js'); ?>"></script> 
<script src="<?php echo asset_url('js/admin/bootstrap.js'); ?>"></script>
<script src="<?php echo asset_url('js/admin/main.js'); ?>"></script>
<script language="javascript" type="text/javascript" src="<?php echo asset_url('js/admin/full-calendar/fullcalendar.min.js'); ?>"></script>

<script src="<?php echo asset_url('js/admin/base.js'); ?>"></script> 

<?php
if (isset($adminJs)) {
    foreach ($adminJs as $js) {
        ?>
        <script src="<?php echo asset_url(''); ?>js/admin/onglet/<?php echo $js; ?>.js" type="text/javascript"></script>
        <?php
    }
}
?>

<div class="footer">
</div>
<div class="sous_footer">
	ver. <b>1.0.0</b>
</div>

</body> 
</html>
