<form action="#" class="form-horizontal" >
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ajouter un carnet de voyage</h4>
    </div>
    <div class="modal-body">
        <div class="info_generale">
            <?php 
            if ($voyages) { 
                ?>
                <div class="form-group form-titre">
                    <label for="titre" class="col-sm-2 control-label">Titre :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control titre" placeholder="Titre du carnet">
                    </div>
                </div>
                <div class="form-group form-voyage">
                    <label for="SelectVoyage" class="col-sm-2 control-label">Voyage :</label>
                    <div class="col-sm-10">
                        <select id="id_voyage" name="id_voyage" class="form-control">
                            <option value="">Choix du voyage</option>

                            <?php foreach ($voyages as $voyage) { 
                                ?>

                                <option value="<?php echo $voyage[0]->id; ?>"><?php echo $voyage[0]->titre; ?></option>

                            <?php } ?>
                        </select>
                    </div>
                </div>
            <?php } else { ?>
                Aucune création de carnet disponible
            <?php } ?>

        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="bwhite" data-dismiss="modal">Close</button>
        <button id="creation_carnet" type="button" class="validCarnetVoyage bblue">Enregistrer</button>
    </div>
</form>


<script type="text/javascript">

$('.form-horizontal').keypress(function(e){
    if( e.which == 13 ){
        $('#creation_carnet').trigger('click');
    }
});
</script>

