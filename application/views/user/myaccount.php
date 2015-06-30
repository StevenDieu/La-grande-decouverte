<legend>Mon compte</legend>
<script type="text/javascript" src = "<?php echo asset_url(''); ?>js/myAccount.js" ></script>
<h2>Welcome <?php echo $user[0]->prenom; ?>!</h2>
<div class="messageAlerteCarnet center">
    <div class="alertType"></div>
</div>
<div class="content_carnet_voyage">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title" id="-collapsible-group-item-#2-">
                        Description compte
                    </h4>
                </div>
            </a>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                    <div action="#" class="form-horizontal center" >
                        <div class="form-group form-Nom">
                            <label for="Nom" class="col-sm-4 control-label"></label>
                            <div class="col-sm-5">
                                <?php if ($user[0]->lien_image == "") { ?>
                                    <form action="#comptes" class="upload-form">
                                        <div class="tailleImageProfilMinature">
                                            <input type="file" class="modifImageProf uploadedfile" />
                                        </div>
                                    </form>
                                <?php } else { ?>
                                    <form action="#comptes" class="upload-form">
                                        <div class="tailleImageProfil" style="background-image: url('<?php echo asset_url("images/utilisateur/photoProfil/" . $user[0]->lien_image) ?>')">
                                            <input type="file" class="modifImageProf uploadedfile" />
                                        </div>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group form-Nom">
                            <label for="Nom" class="col-sm-4 control-label">Nom :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control nom" placeholder="Nom" value="<?php echo $user[0]->nom; ?>">
                            </div>
                        </div>
                        <div class="form-group form-Prenom">
                            <label for="Prenom" class="col-sm-4 control-label">Prenom :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control Prenom" placeholder="Prenom" value="<?php echo $user[0]->prenom; ?>">
                            </div>
                        </div>
                        <div class="form-group form-description">
                            <label for="description" class="col-sm-4 control-label">Parlez nous de vous :</label>
                            <div class="col-sm-5">
                                <textarea type="password" class="form-control description" style="overflow-y: visible;" placeholder="Parlez nous de vous"><?php echo $user[0]->description; ?></textarea>
                            </div>
                        </div>
                        <input type="button" class="bblue confirmationDescription" value="Modifier"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title" id="-collapsible-group-item-#2-">
                        Modifier mot de passe
                    </h4>
                </div>
            </a>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                    <form action="#" class="form-horizontal center" >
                        <div class="form-group form-mdp">
                            <label for="titre" class="col-sm-4 control-label">Mot de passe actuel :</label>
                            <div class="col-sm-5">
                                <p>
                                    <input type="password" class="form-control mdp" placeholder="Mot de passe actuel">
                                </p>
                            </div>
                        </div>
                        <div class="form-group form-nmdp">
                            <label for="titre" class="col-sm-4 control-label">Nouveau mot de passe :</label>
                            <div class="col-sm-5">
                                <p>
                                    <input type="password" class="form-control nmdp" placeholder="Nouveau mot de passe">
                                </p>
                            </div>
                        </div>
                        <div class="form-group form-cnmdp">
                            <label for="titre" class="col-sm-4 control-label">Retapez mot de passe :</label>
                            <div class="col-sm-5">
                                <p>
                                    <input type="password" class="form-control cnmdp" placeholder="Retapez mot de passe">
                                </p>
                            </div>
                        </div>
                        <input type="button" class="bblue confirmationMdp" value="Modifier"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title" id="-collapsible-group-item-#2-">
                        Modifier adresse mail
                    </h4>
                </div>
            </a>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                    <form action="#" class="form-horizontal center" >

                        <div class="form-group form-nemail">
                            <label for="titre" class="col-sm-4 control-label">Nouvel adresse mail :</label>
                            <div class="col-sm-5">
                                <input type="email" class="form-control nemail" placeholder="Nouvel adresse mail">
                            </div>
                        </div>
                        <div class="form-group form-cnemail">
                            <label for="titre" class="col-sm-4 control-label">retapez adresse mail :</label>
                            <div class="col-sm-5">
                                <input type="email" class="form-control cnemail" placeholder="retapez adresse mail">
                            </div>
                        </div>
                        <div class="form-group form-mdpMail">
                            <label for="titre" class="col-sm-4 control-label">Mot de passe :</label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control mdpMail" placeholder="Mot de passe">
                            </div>
                        </div>
                        <input type="button" class="bblue confirmationEmail" value="Modifier"/>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="popUpAddImageProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div action="#" class="form-horizontal" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Recadrage Image</h4>
                </div>
                <div class="modal-body">

                    <img id="imageProfile"/>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="x" name="x" />
                    <input type="hidden" id="y" name="y" />
                    <input type="hidden" id="w" name="w" />
                    <input type="hidden" id="h" name="h" />
                    <button type="button" class="bwhite" data-dismiss="modal">Close</button>
                    <button type="button" class="validCarnetVoyage bblue uploadImageProfil">Recadrer</button>
                </div>

            </div>
        </div>
    </div>
</div>
