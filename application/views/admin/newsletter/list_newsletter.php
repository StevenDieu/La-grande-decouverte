
<script type="text/javascript">
    confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>

<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-envelope"></i>
                    <h3>Newsletter</h3>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#formcontrols" data-toggle="tab">Liste des inscrits à la newsletter</a>
                            </li>
                        </ul>

                        <br>

                        <div class="tab-content">
                            <div class="tab-pane active" id="formcontrols">
                                <div id="liste-text-cms" class="form-horizontal">
                                    <div class="widget-content">
                                        <?php if($newsletters): ?>
                                            
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                          <tr>
                                                            <th>#</th>
                                                            <th>Mail</th>
                                                            <th>Type client</th>
                                                            <th>Prénom du client</th>
                                                            <th>Nom du client</th>
                                                            <th>Date d'inscription</th>
                                                            <th>Statut</th>
                                                            <th class="td-actions">Action</th>
                                                          </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php foreach ($newsletters as $c): ?>
                                                        <tr>
                                                            <td><?php echo $c->id ?></td>
                                                            <td><?php echo $c->mail ?></td>
                                                            <td><?php if($c->customer == false) echo 'Invité'; else echo 'Client'; ?></td>
                                                            <td><?php if($c->customer != false) echo $c->customer[0]->nom; else echo '---'; ?></td>
                                                            <td><?php if($c->customer != false) echo $c->customer[0]->nom; else echo '---'; ?></td>
                                                            <?php
                                                            $d = explode(' ', $c->date_inscription);
                                                            $da = explode('-', $d[0]);
                                                            $date = $da[2].'/'.$da[1].'/'.$da[0].' '.$d[1];
                                                             ?>
                                                            <td><?php echo $date; ?></td>
                                                            <td><?php if($c->statut == '2') echo 'Inscrit'; else echo 'Déscinscrit'; ?></td>
                                                            <td class="td-actions">                                                           	                                                              
                                                                <a href="<?php echo base_url('admin/newsletters/edit').'?id='.$c->id ?>" class="btn btn-small btn-default"><i class="btn-icon-only icon-edit"> </i></a>
                                                            	<a onclick="return confirm(confirmation);" href="<?php echo base_url('admin/model_newsletter/delete').'?id='.$c->id; ?>" class="btn btn-danger btn-small" alt="bannir"><i class="btn-icon-only icon-remove"> </i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>

                                                    </tbody>
                                                </table>

                                        <?php else: ?>
                                            Il n'y a aucune personne inscrit à la newsletter.
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







