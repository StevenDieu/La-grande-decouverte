<!---------- CONTENT ---------->	
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZo93gQX7j_kr0Bn3oqfwfIIPCQLAKhuI"></script>
<script type="text/javascript" src ="<?php echo asset_url(''); ?>librairie/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link href="<?php echo asset_url(''); ?>librairie/css/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" rel="stylesheet"/>

<script type="text/javascript"> 
	//initialise le slider en prenant en param un id
	function initialiseResponsiveSilide(id){
		jQuery(function () {
		  jQuery(id).responsiveSlides({
		    auto: true,
		    pager: false,
		    timeout: 6000,
		    nav: true,
		    speed: 500,
		    namespace: "callbacks",
		    before: function () {
		      jQuery('.events').append("<li>before event fired.</li>");
		    },
		    after: function () {
		      jQuery('.events').append("<li>after event fired.</li>");
		    }
		  });
		
		});
	}

	//initialise la map google
    function initialize() {
        var mapOptions = {
          center: { lat: 50.633333, lng: 3.066667},
          scrollwheel: false,
          zoom: 10,
        };
        map = new google.maps.Map(document.getElementById('carte'),mapOptions);
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    //centre la map google
	function centrage(){
		var center = map.getCenter();
		google.maps.event.trigger(map, "resize");
		map.setCenter(center);
	}
</script>

<div class="content fiche_voyage">		
	<!-- Slideshow 4 -->
	<div class="callbacks_container">
	  <ul class="rslides" id="slider_top">
	    <li>
	      <img src="<?php echo asset_url(''); ?>images/1.jpg" alt="">
	      <p class="caption">This is a caption</p>
	    </li>
	    <li>
	      <img src="<?php echo asset_url(''); ?>images/2.jpg" alt="">
	      <p class="caption">This is another caption</p>
	    </li>
	    <li>
	      <img src="<?php echo asset_url(''); ?>images/3.jpg" alt="">
	      <p class="caption">The third caption</p>
	    </li>
	  </ul>
	</div>
	
	<div style="clear:both"></div>
	
	<div class="entete_fiche_produit">
	
	</div>
	
	<div class="onglet_fiche">
		<div class="onglet_fiche_inner">
			<div id="onglet1" class="onglet onglet1 active"><a href="#">Description du voyage</a></div>
			<div id="onglet2" class="onglet onglet2"><a href="#">Carte</a></div>
			<div id="onglet3" class="onglet onglet3"><a href="#">Carnet de voyage</a></div>
			<div id="onglet4" class="onglet onglet4"><a href="#">Déroulement</a></div>	
		</div>
	</div>
	
	<div class="contenu_onglet">
		<div id="onglet1mobile" class="onglet_mobile "><a href="#">Description du voyage</a></div>
		<div id="onglet1" class="contenu_fiche_onglet onglet1mobile active">
			<script charset='UTF-8' src='http://www.meteofrance.com/mf3-rpc-portlet/rest/vignettepartenaire/624980/type/VILLE_FRANCE/size/PAYSAGE_VIGNETTE' type='text/javascript'></script>
		</div>
		<div id="onglet2mobile" class="onglet_mobile"><a href="#">Carte</a></div>
		<div id="onglet2" class="contenu_fiche_onglet onglet2mobile"><div id="carte"></div></div>
		<div id="onglet3mobile" class="onglet_mobile"><a href="#">Les carnets de voyage</a></div>
		<div id="onglet3" class="contenu_fiche_onglet onglet3mobile">
			<div class="article_first">
				<div class="image">
					<div class="callbacks_container carnet">
						<a href="#">
						  <ul class="rslides" id="slidercarnet1">
						    <li>
						      <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut.jpg" alt="">
						    </li>
						    <li>
						      <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut2.jpg" alt="">
						    </li>
						  </ul>
						</a>
					</div>
					<script type="text/javascript">
						$(document).ready(function(){ 
							initialiseResponsiveSilide('#slidercarnet1');
						    $(".slide_carnet1").fancybox({
						 		maxWidth	: 1000, 		
						        maxHeight	: 600,
						        fitToView	: false,
						 		width		: '80%',
						 		height		: '80%',
						 		autoSize	: false,
						 		closeClick	: false,
						 		openEffect	: 'none',
						 		closeEffect	: 'none',
						 		ajax: {
						 			type     : "POST",
						 			cache    : false,
						 			data	 : "var=1|<?php echo asset_url(''); ?>",
						 			success	 : function(data){ $.fancybox(data); },
						 		}
						     }); 
						});
					</script>
					<a class="slide_carnet1 fancybox.ajax zoom" href="<?php echo asset_url(''); ?>../fancybox/popup_carnet.php"></a>
					<div style="clear:both"></div>
				</div>
				<div class="partie_droite">
					<a class="titre">Deux semaines au Chili</a>
					<div class="date_auteur">Thomas l'aventurier - 22 / 03 / 2015</div>
					<div class="texte">Le mois de Mai dernier, je m’envollais pour deux semaines au Chili, venez dècouvrir ce que le Chili vous reserves et envolez vous avec lagrandecouverte.com au coeur de se pays ...</div>
					<a href="#" class="lire_suite">Voir le carnet ></a>
				</div>
			</div>

			<div class="separateur_article"></div>
			
			<div class="contenu_article_suivant">
				<div class="un_article left">
					<div class="callbacks_container carnet">
						<a href="#">
						  <ul class="rslides" id="slidercarnet2">
						    <li>
						      <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut.jpg" alt="">
						    </li>
						    <li>
						      <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut2.jpg" alt="">
						    </li>
						  </ul>
						</a>
					</div>
					<div style="clear:both"></div>
					<div class="date_auteur"><span>Thomas l'aventurier - 22 / 03 / 2015</span></div>
					<a class="titre">Deux semaines au Chili</a>
					<div class="texte">Le mois de Mai dernier, je m’envollais pour deux semaines au Chili, venez dècouvrir ce que le Chili vous reserves et envolez vous avec lagrandecouverte.com au coeur de se pays ...</div>
					<a href="#" class="lire_suite">Voir le carnet ></a>
					<script type="text/javascript">initialiseResponsiveSilide('#slidercarnet2');</script>
				</div>

				<div class="un_article">
					<div class="callbacks_container carnet">
						<a href="#">
						  <ul class="rslides" id="slidercarnet3">
						    <li>
						      <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut.jpg" alt="">
						    </li>
						    <li>
						      <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut2.jpg" alt="">
						    </li>
						  </ul>
						</a>
					</div>
					<div style="clear:both"></div>
					<div class="date_auteur"><span>Thomas l'aventurier - 22 / 03 / 2015</span></div>
					<a class="titre">Deux semaines au Chili</a>
					<div class="texte">Le mois de Mai dernier, je m’envollais pour deux semaines au Chili, venez dècouvrir ce que le Chili vous reserves et envolez vous avec lagrandecouverte.com au coeur de se pays ...</div>
					<a href="#" class="lire_suite">Voir le carnet ></a>
					<script type="text/javascript">initialiseResponsiveSilide('#slidercarnet3');</script>
				</div>

				<div style="clear:both"></div>

				<div class="un_article left">
					<div class="callbacks_container carnet">
						<a href="#">
						  <ul class="rslides" id="slidercarnet4">
						    <li>
						      <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut.jpg" alt="">
						    </li>
						    <li>
						      <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut2.jpg" alt="">
						    </li>
						  </ul>
						</a>
					</div>
					<div style="clear:both"></div>
					<div class="date_auteur"><span>Thomas l'aventurier - 22 / 03 / 2015</span></div>
					<a class="titre">Deux semaines au Chili</a>
					<div class="texte">Le mois de Mai dernier, je m’envollais pour deux semaines au Chili, venez dècouvrir ce que le Chili vous reserves et envolez vous avec lagrandecouverte.com au coeur de se pays ...</div>
					<a href="#" class="lire_suite">Voir le carnet ></a>
					<script type="text/javascript">initialiseResponsiveSilide('#slidercarnet4');</script>
				</div>
				<div style="clear:both"></div>
			</div>	
		</div>
		<div id="onglet4mobile" class="onglet_mobile"><a href="#">Déroulement</a></div>
		<div id="onglet4" class="contenu_fiche_onglet onglet4mobile">
			<div class="contenu">
				<div class="titre"><span>JOUR 1</span> - Vol domestique Santiago - Calama et transfert en voiture vers votre lodge.</div>
				<div class="description">4 nuits à l'Alto Atacama dans une Chambre Quitor en pension complète avec activités.</div>
				<div class="inter_jour"></div>

				<div class="titre"><span>JOURS 2 à 5</span> - Désert d'Atacama</div>
				<div class="description">Alto Atacama propose un large éventail d'activités au choix : Excursions en voiture, à pied ou en VTT vers les splendeurs de l’Atacama : lacs de haute montagne, Andes, geysers del Tatio, visites de villages, déserts de sel, randonnées, ascensions de volcans, … avec des guides expérimentés connaissant les moindres recoins de la région.
Le soir, l'observation des étoiles y est incroyable !</div>
				<div class="inter_jour"></div>

				<div class="titre"><span>JOUR 5</span> - Transfert en voiture vers Atacama.</div>
				<div class="description">Vol domestique vers Punta Arenas (avec escale nécessaire à Santiago).
Transfert en voiture de Punta Arenas à votre lodge.
4 nuits au Patagonia Camp dans une yourte de luxe en pension complète avec activités.</div>
				<div class="inter_jour"></div>

				<div class="titre"><span>JOURS 6 à 9</span> - Patagonie & Torres del Paine</div>
				<div class="description">Patagonia Camp propose un large éventail d'activités au choix : randonnées dans le Parc de Torres del Paine à la découverte de la faune, de la flore, des lacs et des glaciers.</div>
				<div class="inter_jour"></div>
				
				<div class="titre"><span>JOUR 9</span> - Transfert en voiture vers Punta Arenas.</div>
				<div class="description">Vol vers Santiago de Chile.</div>
			</div>
		</div>
	</div>	
	<br>
</div>


<script type="text/javascript">
$(document).ready(function() {
	initialiseResponsiveSilide('#slider_top');
	
    $('.onglet_fiche_inner a').click(function(event){
	    event.preventDefault();
	});
	
	$('.onglet_mobile a').click(function(event){
	    event.preventDefault();
	});
	
	$( ".onglet_fiche_inner a" ).click(function() {
		$('.contenu_onglet .contenu_fiche_onglet').hide();
		$('.onglet_fiche .onglet_fiche_inner .onglet' ).removeClass('active');
		$('.contenu_onglet .contenu_fiche_onglet').removeClass('active');
		$('.contenu_onglet .onglet_mobile' ).removeClass('active');
		
		$(this).parent().toggleClass('active');
		$('.contenu_onglet #'+$(this).parent().attr('id')).toggleClass('active');
		$('.contenu_onglet #'+$(this).parent().attr('id')+"mobile").toggleClass('active');
		if($(this).parent().attr('id') == 'onglet2'){
			$('.contenu_onglet #'+$(this).parent().attr('id')).show();
			centrage();
		}else{
			$('.contenu_onglet #'+$(this).parent().attr('id')).slideDown("slow");
		}
	});
	
	$( ".contenu_onglet .onglet_mobile a" ).click(function() {
		if($('.contenu_onglet #'+$(this).parent().attr('id')).hasClass('active')){
			$('.contenu_onglet .contenu_fiche_onglet').slideUp("slow");
			$('.contenu_onglet .onglet_mobile').removeClass('active');
			$('.contenu_onglet .contenu_fiche_onglet').removeClass('active');
			return true;
		}
		$('.contenu_onglet .contenu_fiche_onglet').hide();
		$('.contenu_onglet .onglet_mobile').removeClass('active');
		$('.contenu_onglet .contenu_fiche_onglet').removeClass('active');
		
		$('.contenu_onglet #'+$(this).parent().attr('id')).toggleClass('active');
		if($(this).parent().attr('id') == 'onglet2mobile'){		
			$('.contenu_onglet .'+$(this).parent().attr('id')).show();centrage();
		}else{
			$('.contenu_onglet .'+$(this).parent().attr('id')).slideDown("slow");
		}
	});
});
</script>

