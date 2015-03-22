<!---------- CONTENT --------->	
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZo93gQX7j_kr0Bn3oqfwfIIPCQLAKhuI"></script>
    
<div class="content fiche_voyage">
	<script type="text/javascript"> 
		jQuery(function () {
		  // Slideshow 4
		  jQuery("#slider4").responsiveSlides({
		    auto: false,
		    pager: false,
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
		
		jQuery(function () {
		  jQuery("#slidercarnet1").responsiveSlides({
		    auto: false,
		    pager: false,
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
		
	    function initialize() {
	        var mapOptions = {
	          center: { lat: 50.633333, lng: 3.066667},
	          scrollwheel: false,
	          zoom: 10
	        };
	        var map = new google.maps.Map(document.getElementById('carte'),
	            mapOptions);
	      }
	      google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	

		
	<!-- Slideshow 4 -->
	<div class="callbacks_container">
	  <ul class="rslides" id="slider4">
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
		</div>
	</div>
	
	<div class="contenu_onglet">
		<div id="onglet1mobile" class="onglet_mobile active"><a href="#">Description du voyage</a></div>
		<div id="onglet1" class="contenu_fiche_onglet onglet1mobile active"></div>
		<div id="onglet2mobile" class="onglet_mobile"><a href="#">Carte</a></div>
		<div id="onglet2" class="contenu_fiche_onglet onglet2mobile"><div id="carte"></div></div>
		<div id="onglet3mobile" class="onglet_mobile"><a href="#">Les carnets de voyage</a></div>
		<div id="onglet3" class="contenu_fiche_onglet onglet3mobile">
			<div class="article_first">
				<div class="image">
					<div class="callbacks_container carnet">
					  <ul class="rslides" id="slidercarnet1">
					    <li>
					      <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut.jpg" alt="">
					    </li>
					    <li>
					      <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut2.jpg" alt="">
					    </li>
					  </ul>
					</div>
					
					<a class="test fancybox.ajax zoom" href="<?php echo asset_url(''); ?>../fancybox/test.php"></a>			
				</div>
			</div>
			
			<div class="article">
				
			</div>
			
		</div>
	</div>	
	<br>
</div>

<script type="text/javascript">
$(document).ready(function() {
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
		$('.contenu_onglet #'+$(this).parent().attr('id')).slideDown("slow");
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
		
		$('.contenu_onglet .'+$(this).parent().attr('id')).slideDown("slow");
		$('.contenu_onglet #'+$(this).parent().attr('id')).toggleClass('active');
	});
});
$(document).ready(function(){ 
    $(".test").fancybox({
 		maxWidth	: 800, 		
        maxHeight	: 600,
        fitToView	: false,
 		width		: '50%',
 		height		: '50%',
 		autoSize	: false,
 		closeClick	: false,
 		openEffect	: 'none',
 		closeEffect	: 'none',
 		ajax: {
 			type     : "POST",
 			cache    : false,
 			data	 : "var=Artcompix à votre service",
 			success	 : function(data){ $.fancybox(data); },
 		}
     }); 
});
</script>

