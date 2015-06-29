<script type="text/javascript">
    var urlAjouterImage = '<?php echo base_url('admin/pictos/add'); ?>';
    var urlDeleteImage = '<?php echo base_url('admin/pictos/delete'); ?>';
</script>


<div class="container">

    <div class="alert hide">
        <strong>Alert!</strong><span class="message"></span>
    </div>
    
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Pictos</h3>
                    <input type="file" id="bouton_header" class="file_design_green add_image" multiple=""/>
                </div>
                <div class="widget-content">

                    <div class="tabbable">
                        <?php
                        if ($pictos) {
                            foreach ($pictos as $picto) {
                                ?>
                                <div class="blockPicto">
                                    <img src="<?php echo asset_media($picto->lien); ?>" alt="picto" class="img_picto" />
                                    <button class="btn btn-danger btn-circle delete_picto button_delete_picto" data-id="<?php echo $picto->id; ?>"><i class="icon-remove"></i></button>
                                </div>
                                <?php
                            }
                        } else {

                            echo "Pas de picto";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


