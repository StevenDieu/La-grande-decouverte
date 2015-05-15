
<legend>Mon compte</legend>
<script type="text/javascript" src = "<?php echo asset_url(''); ?>js/myAccount.js" ></script>
<h2>Welcome <?php echo $username["user"]; ?>!</h2>
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
                    <form action="#" class="form-horizontal center" >

                        <div class="form-group form-Nom">
                            <label for="Nom" class="col-sm-4 control-label">Nom :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control nom" placeholder="Nom" value="<?php echo $username["nom"]; ?>">
                            </div>
                        </div>
                        <div class="form-group form-Prenom">
                            <label for="Prenom" class="col-sm-4 control-label">Prenom :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control Prenom" placeholder="Prenom" value="<?php echo $username["prenom"]; ?>">
                            </div>
                        </div>
                        <div class="form-group form-description">
                            <label for="description" class="col-sm-4 control-label">Parlez nous de vous :</label>
                            <div class="col-sm-5">
                                <textarea type="password" class="form-control description" id="zone" style="overflow-y: visible;" placeholder="Parlez nous de vous"><?php echo $username["description"]; ?></textarea>
                            </div>
                        </div>
                        <input type="button" class="bblue confirmationDescription" value="Modifier"/>
                    </form>
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
                                <input type="password" class="form-control mdp" placeholder="Mot de passe actuel">
                            </div>
                        </div>
                        <div class="form-group form-nmdp">
                            <label for="titre" class="col-sm-4 control-label">Nouveau mot de passe :</label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control nmdp" placeholder="Nouveau mot de passe">
                            </div>
                        </div>
                        <div class="form-group form-cnmdp">
                            <label for="titre" class="col-sm-4 control-label">Retapez mot de passe :</label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control cnmdp" placeholder="Retapez mot de passe">
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