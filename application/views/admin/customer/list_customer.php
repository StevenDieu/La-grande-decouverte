<script type="text/javascript">
    confirmation = "Etes vous sûre de vouloir bannir ce client ?";
</script>

<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Clients inscrit sur le site</h3>
                    <!--<a href="<?php echo base_url('admin/faqs/add') ?>" id="bouton_header" role="button" class="btn" data-toggle="">Ajouter une question FAQ</a>-->
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#formcontrols" data-toggle="tab">Liste des clients</a>
                            </li>
                        </ul>

                        <br>

                        <div class="tab-content">
                            <div class="tab-pane active" id="formcontrols">
                                <div id="liste-text-cms" class="form-horizontal">
                                    <div class="widget-content">
                                        <?php if($customers): ?>
                                            
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                          <tr>
                                                            <th>#</th>
                                                            <th>Login</th>
                                                            <th>Nom</th>
                                                            <th>prénom</th>
                                                            <th>Banni</th>
                                                            <th>Bannir</th>
                                                            <th class="td-actions">Éditer</th>
                                                          </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php foreach ($customers as $c): ?>
                                                        <tr>
                                                        	<?php 
                                                        		if($c->banni == 0){
																	$banni = 'Non';
																}else{
																	$banni = 'Oui';
																}
                                                        	?>
                                                            <td><?php echo $c->id ?></td>
                                                            <td><?php echo $c->login ?></td>
                                                            <td><?php echo $c->nom ?></td>
                                                            <td><?php echo $c->prenom ?></td>
                                                            <td><?php echo $banni ?></td>
                                                            <td class="td-actions"><a onclick="return confirm(confirmation);" href="<?php echo base_url('admin/model_customer/bannir').'?id='.$c->id; ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                                                            <td class="td-actions">
                                                                <a href="<?php echo base_url('admin/customer/edit').'?id='.$c->id ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>

                                                    </tbody>
                                                </table>

                                        <?php else: ?>
                                            Il n'y a pas de client.
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










