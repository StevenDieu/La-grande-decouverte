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
	
	
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a></li>
      <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Profile</a></li>
      <li role="presentation" class="dropdown">
        <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
          <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">@fat</a></li>
          <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a></li>
        </ul>
      </li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
      </div>
    </div>
  </div>
	
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

