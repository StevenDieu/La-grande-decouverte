<script type="text/javascript">
    var urlListeCms = '<?php echo base_url('admin/cmss/liste'); ?>';
</script>

<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Textes CMS</h3>
                    <a href="<?php echo base_url('admin/cmss/add') ?>" id="bouton_header" role="button" class="btn" data-toggle="">Ajouter un texte CMS</a>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#formcontrols" data-toggle="tab">Liste des textes CMS</a>
                            </li>
                        </ul>

                        <br>

                        <div class="tab-content">
                            <div class="tab-pane active" id="formcontrols">
                                <div id="liste-text-cms" class="form-horizontal">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
	function getListeCMS(){
        $.ajax({
            url: urlListeCms , // ici l'url du controleur de la vue que tu veux faire appeller
            type: "post",
            success: function (result) {
                $("#liste-text-cms").html(result);
            }
        });
    }

    jQuery(document).ready(function(){
    	getListeCMS();
    });
</script>



