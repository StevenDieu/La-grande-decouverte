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
	
	
    <div class="inner-content">
	    je suis la

    </div>
</div>

