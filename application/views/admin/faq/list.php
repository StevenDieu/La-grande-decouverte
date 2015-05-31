
<script type="text/javascript">
    confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>

<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Textes CMS</h3>
                    <a href="<?php echo base_url('admin/faqs/add') ?>" id="bouton_header" role="button" class="btn" data-toggle="">Ajouter une question FAQ</a>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#formcontrols" data-toggle="tab">Liste des questions FAQs</a>
                            </li>
                        </ul>

                        <br>

                        <div class="tab-content">
                            <div class="tab-pane active" id="formcontrols">
                                <div id="liste-text-cms" class="form-horizontal">
                                    <div class="widget-content">
                                        <?php if($faqs): ?>
                                            
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                          <tr>
                                                            <th>id</th>
                                                            <th>question</th>
                                                            <th>activé</th>
                                                            <th class="td-actions">supprimer</th>
                                                          </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php foreach ($faqs as $c): ?>
                                                        <tr>
                                                            <td><?php echo $c->id ?></td>
                                                            <td><?php echo $c->question ?></td>
                                                            <td><?php if($c->active == 1 )echo 'Oui'; else echo 'Non'; ?></td>
                                                            <td class="td-actions">
                                                                <a href="<?php echo base_url('admin/faqs/edit').'?id='.$c->id ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a>
                                                                <a onclick="return confirm(confirmation);"  href="<?php echo base_url('admin/model_faq/delete') ?>?id=<?php echo $c->id ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>

                                                    </tbody>
                                                </table>

                                        <?php else: ?>
                                            Il n'y a aucune question faq.
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







