


<script type="text/javascript">
  confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>   

<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Supprimer administrateur</h3>
                    <a href="<?php echo base_url('admin/administrateur/liste') ?>" id="bouton_header" role="button" class="btn" data-toggle="">Retour à la liste</a>
                    <a href="<?php echo base_url('admin/administrateur/edit').'?id='.$id; ?>" id="bouton_header" role="button" class="btn" data-toggle="">Retour à l'administrateur</a>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#formcontrols" data-toggle="tab">Confirmation mot de passe super admin</a>
                            </li>
                        </ul>

                        <br>

                        <div class="tab-content">
                            <div class="tab-pane active" id="formcontrols">
                                <div id="liste-text-cms" class="form-horizontal">
                                   

                                   <div class="control-group">                      
                                        <div class="controls error">
                                            <?php echo validation_errors(); ?>
                                            <?php if(isset($error)) echo $error;?>
                                        </div>      
                                    </div>

                                    <?php if($this->session->flashdata('mdp_administrateur') != ''){ ?>
                                        <span class="success"><?php echo $this->session->flashdata('mdp_administrateur'); ?></span>
                                    <?php } ?>
                                    <?php if($this->session->flashdata('login_administrateur') != ''){ ?>
                                        <span class="success"><?php echo $this->session->flashdata('login_administrateur'); ?></span>
                                    <?php } ?>

                                    <?php echo form_open_multipart('admin/model_administrateur/delete'); ?>

                                      <input type="hidden" name ="id" value="<?php echo $id; ?>">

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Mot de passe : </label>
                                          <div class="controls">
                                              <input type="password" name="password" class="span6" id="password" placeholder="Mot de passe">
                                          </div>      
                                      </div>


                                      <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Supprimer</button> 
                                      </div>

                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









