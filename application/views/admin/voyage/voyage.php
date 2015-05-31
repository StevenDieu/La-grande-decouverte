<script type="text/javascript">
    var urlAddVoyage = '<?php echo base_url('admin/voyages/add'); ?>';
    var urlListeVoyage = '<?php echo base_url('admin/voyages/liste'); ?>';
    var urlEditVoyage = '<?php echo base_url('admin/voyages/edit'); ?>';
</script>

<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Voyages</h3>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#formcontrols" data-toggle="tab">Ajouter Voyage</a>
                            </li>
                            <li class=""><a href="#jscontrols" data-toggle="tab">Edition Voyage</a></li>
                        </ul>

                        <br>

                        <div class="tab-content">
                            <div class="tab-pane active" id="formcontrols">
                                <div id="add-travel" class="form-horizontal">

                                </div>
                            </div>

                            <div class="tab-pane" id="jscontrols">
                                <div id="edit-travel" class="form-vertical">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

