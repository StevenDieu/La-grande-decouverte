
<legend>Mon compte</legend>

<h2>Welcome <?php echo $username; ?>!</h2>
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
                    <form action="#" class="form-horizontal" >
                        <div class="form-group form-titre">
                            <label for="titre" class="col-sm-4 control-label">Mot de passe actuel :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="titre" placeholder="Mot de passe actuel">
                            </div>
                        </div>
                        <div class="form-group form-titre">
                            <label for="titre" class="col-sm-4 control-label">Nouveau mot de passe :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="titre" placeholder="Nouveau mot de passe">
                            </div>
                        </div>
                        <div class="form-group form-titre">
                            <label for="titre" class="col-sm-4 control-label">Retapez mot de passe :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="titre" placeholder="Retapez mot de passe">
                            </div>
                        </div>
                        <input type="button" class="buttonAjouterBoUtilisateur" value="Modifier"/>
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
                    <form action="#" class="form-horizontal" >

                        <div class="form-group form-titre">
                            <label for="titre" class="col-sm-4 control-label">Nouvel adresse mail :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="titre" placeholder="Nouvel adresse mail">
                            </div>
                        </div>
                        <div class="form-group form-titre">
                            <label for="titre" class="col-sm-4 control-label">retapez adresse mail :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="titre" placeholder="retapez adresse mail">
                            </div>
                        </div>
                        <div class="form-group form-titre">
                            <label for="titre" class="col-sm-4 control-label">Mot de passe :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="titre" placeholder="Mot de passe">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>