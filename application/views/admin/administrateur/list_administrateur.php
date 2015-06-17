
<script type="text/javascript">
	confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>

<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Administrateurs</h3>
                    <a href="<?php echo base_url('admin/administrateur/add') ?>" id="bouton_header" role="button" class="btn" data-toggle="">Ajouter un administrateur</a>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#formcontrols" data-toggle="tab">Liste des administrateurs</a>
                            </li>
                        </ul>

                        <br>

                        <div class="tab-content">
                            <div class="tab-pane active" id="formcontrols">
                            	<?php if($this->session->flashdata('login_administrateur') != ''){ ?>
									<span class="success"><?php echo $this->session->flashdata('login_administrateur'); ?></span>
								<?php } ?>
                                <div id="liste-text-cms" class="form-horizontal">
                                    <div class="widget-content">
                                        <?php if($administrateurs): ?>
                                            	
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                          <tr>
                                                            <th>#</th>
                                                            <th>Login</th>
                                                            <th>Éditer</th>
                                                          </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php foreach ($administrateurs as $c): ?>
                                                        <tr>
                                                            <td><?php echo $c->id ?></td>
                                                            <td><?php echo $c->login ?></td>
                                                            <td class="td-actions">
                                                            	<a href="<?php echo base_url('admin/administrateur/edit').'?id='.$c->id ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a>
                                                            	<a onclick="return confirm(confirmation);" href="<?php echo base_url('admin/administrateur/delete').'?id='.$c->id; ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>

                                                    </tbody>
                                                </table>

                                        <?php else: ?>
                                            Il n'y a pas d'administrateur.
                                        <?php endif ?>
                                    </div>
   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
