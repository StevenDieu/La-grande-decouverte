
<legend>Mon compte</legend>
<script type="text/javascript" src = "<?php echo asset_url(''); ?>js/myAccount.js" ></script>
<h2>Welcome <?php echo $username; ?>!</h2>
<div class="messageAlerteCarnet center">
    <div class="alertType"></div>
</div>
<div class="content_carnet_voyage">


    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
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