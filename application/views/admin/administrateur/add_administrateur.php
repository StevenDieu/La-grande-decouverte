<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Administrateur</h3>
                    <a href="<?php echo base_url('admin/administrateur/liste') ?>" id="bouton_header" role="button" class="btn" data-toggle="">Retour à la liste</a>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#formcontrols" data-toggle="tab">Ajouter un administrateur</a>
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

                                    <?php echo form_open_multipart('admin/model_administrateur/save'); ?>

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Login : </label>
                                          <div class="controls">
                                              <input type="text" name="login" class="span6" id="login" placeholder="Login">
                                          </div>      
                                      </div>

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Mot de passe : </label>
                                          <div class="controls">
                                              <input type="password" name="password" class="span6" id="password" placeholder="Mot de passe">
                                          </div>      
                                      </div>

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Confirmation mot de passe : </label>
                                          <div class="controls">
                                              <input type="password" name="cpassword" class="span6" id="cpassword" placeholder="Confirmation mot de passe">
                                          </div>      
                                      </div>

                                      <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button> 
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









