<script type="text/javascript" src ="<?php echo asset_url(''); ?>librairie/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link href="<?php echo asset_url(''); ?>librairie/css/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" rel="stylesheet"/>

<?php
//var_dump($voyage);
//var_dump($voyageInfo);
?>

<div class="price_table title_table">
    <div class="price_leftcolumn">
        <h5 class="price_title">DESCRIPTION DU VOYAGE</h5>
    </div>
    <div class="price_leftcolumn_nb_participant">
        <h5 class="price_title">Nombre de participant</h5>
    </div>
    <div class="total_rgt">
        <h5 class="price_title">TOTAL</h5>
    </div>
</div>

<div class="price_table">
    <div class="price_leftcolumn">
        <!--<span>Réf. 04</span>-->
        <h3><a href="#"><?php echo $voyage[0]->titre; ?></a></h3>
        <ul>
            <li>Du <?php echo $voyageInfo[0]->date_depart; ?></li>
            <li>Au <?php echo $voyageInfo[0]->date_arrivee; ?></li>
            <li>Prix par personne : <?php echo number_format($voyageInfo[0]->prix, 2, ',', ' '); ?> €</li>
            <li class="last"></li>
            <script type="text/javascript">$('.price_leftcolumn ul li.last').html('Nombre de participant : '+order.nb_participant);</script>
        </ul>
        <strong><?php echo $prixTotal; ?> €</strong>
    </div>
    <div class="price_leftcolumn_nb_participant">
        <span></span>
    </div>
    <script type="text/javascript">$('.price_leftcolumn_nb_participant span').html(order.nb_participant);</script>
    <div class="total_rgt">
        <strong><?php echo $prixTotal; ?> €</strong>
    </div>
</div>


<div class="price_table subtotal">
    <div class="price_leftcolumn">
        <h5 class="price_title">sous - TOTAL</h5>
    </div>
    <div class="total_rgt">
        <strong><?php echo $sousTotal; ?> €</strong>
    </div>
</div>
<div class="price_table subtotal">
    <div class="price_leftcolumn">
        <h5 class="price_title">TVA &amp; AUTRES TAXES</h5>
    </div>
    <div class="total_rgt">
        <strong><?php echo $taxe; ?> €</strong>
    </div>
</div>
<div class="price_table subtotal">
    <div class="price_leftcolumn">
        <h5 class="price_title">MONTANT TOTAL DU VOYAGE</h5>
    </div>
    <div class="total_rgt">
        <strong><?php echo $prixTotal; ?> €</strong>
    </div>
</div>
<div class="price_table total_price">
    <div class="price_leftcolumn">
        <h5 class="price_title">MONTANT DE L'ACOMPTE À VERSER</h5>
    </div>
    <div class="total_rgt">
        <strong><?php echo $acompte; ?> €</strong>
    </div>
</div>

<div class="price_radio"><label><input class="radiocgv" name="radiocgv" type="radio" />J'accepte <a class="popCGV" href="#popCGV">les conditions générales de vente</a></label></div>
<!-- popup -->
<div style="display:none">
    <div id="popCGV">
        <?php echo $cgv_tunnel[0]->value; ?>
    </div>
</div>
<script type="text/javascript">
//        maxWidth : 900,
    $("a.popCGV").fancybox({
        helpers : {
            overlay : {
                css : {
                    'background' : 'rgba(0, 0, 0, 0.65)'
                }
            }
        }
    });
</script>
<!-- fin popup -->
<span>Un conseiller vous joindra par téléphone pour régler le reste de votre voyage.</span>
<span>Somme restante à payer : <?php echo $resteAPayer; ?> €</span>
<div class="reset_field save">
    <input id="validation_commade" type="submit" value="valider ma commande" />
</div>

<script type="text/javascript">
$( document ).ready(function() {


    $('#validation_commade').click(function () {
        if(!$('input.radiocgv:checked').val()){
            alert('Vous devez accepter les conditions générales de ventes !');
        }else{
            order.date = "<?php echo date('Y-m-d H:i:s'); ?>";
            order.prixTotal = "<?php echo $prixTotal; ?>";
            order.sousTotal = "<?php echo $sousTotal; ?>";
            order.taxe = "<?php echo $taxe; ?>";
            order.acompte = "<?php echo $acompte; ?>";
            order.resteAPayer = "<?php echo $resteAPayer; ?>";
            order.id_voyage = "<?php echo $voyage[0]->id; ?>";
            order.id_info_voyage = "<?php echo $voyageInfo[0]->id; ?>";

            verifPlaceDispoFinal();

        }
        return false;
    });
});
</script>










