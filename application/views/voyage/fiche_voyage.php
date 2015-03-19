<!---------- CONTENT --------->	
<div class="content fiche_voyage">
	<script>
	// You can also use "$(window).load(function() {"
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
	
	<div class="onglet_fiche">
		<div class="onglet_fiche_inner">
			<div id="onglet1" class="onglet onglet1 active"><a href="#">Description du voyage</a></div>
			<div id="onglet2" class="onglet onglet2"><a href="#">Carte</a></div>
			<div id="onglet3" class="onglet onglet3"><a href="#">Carnet de voyage</a></div>	
		</div>
	</div>
	
	<div class="contenu_onglet">
		<div id="onglet1mobile" class="onglet_mobile"><a href="#">Description du voyage</a></div>
		<div id="onglet1" class="contenu_fiche_onglet onglet1mobile active"></div>
		<div id="onglet2mobile" class="onglet_mobile"><a href="#">Carte</a></div>
		<div id="onglet2" class="contenu_fiche_onglet onglet2mobile"></div>
		<div id="onglet3mobile" class="onglet_mobile"><a href="#">Carnet de voyage</a></div>
		<div id="onglet3" class="contenu_fiche_onglet onglet3mobile"></div>
	</div>
	
	<div style="clear:both"></div>
	
	
	
	
	fin

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
		
		$(this).parent().toggleClass('active');
		$('.contenu_onglet #'+$(this).parent().attr('id')).toggleClass('active');
		$('.contenu_onglet #'+$(this).parent().attr('id')).show();
	});
	
	$( ".contenu_onglet .onglet_mobile a" ).click(function() {
		$('.contenu_onglet .contenu_fiche_onglet').hide();
		$('.contenu_onglet .'+$(this).parent().attr('id')).show();
	});
});
</script>

