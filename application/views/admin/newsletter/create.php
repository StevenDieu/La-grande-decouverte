<script type="text/javascript">
    var urlSendNewsletter = '<?php echo base_url('admin/newsletters/send'); ?>';
    var urlUpload = '<?php echo base_url('admin/newsletters/upload'); ?>';
    var urlDelete = '<?php echo base_url('admin/newsletters/delete'); ?>';
</script>

<div class="container">
    <div class="row">
        <div class="alertType"></div>
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Envoyer une newsletter</h3>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <form action="#" method="post" class="form-horizontal">
                            <br/>
                            <div class="info_generale">
                                <div class="control-group">											
                                    <div class="center">
                                        sujet : <input type="text" class="span5 titre form-titre" placeholder="Sujet de la newsletter">
                                    </div>			
                                </div>
                            </div>

                            <section id="editor" name="editor">
                                <div id='edit' name="edit" style="margin-top: 30px;">
                                </div>
                            </section>
                            <br/>
                            <div class="form-actions">
                                <input type="button" class="sendNewsletter btn btn-primary submit_bouton_verif" value="Envoyer">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







