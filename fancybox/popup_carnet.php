<?php
  if( isset($_POST['var']) && !empty($_POST['var']) ) {
    $var = explode('|',$_POST['var']);
    $id = $var[0];
    $url = $var[1];
    
?>
 
<script type="text/javascript">
jQuery(function () {
  jQuery("#sliderpopup").responsiveSlides({
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
<div class="callbacks_container carnet">
	<ul class="rslides" id="sliderpopup">
		<li>
			<img src="<?php echo $url; ?>images/ficheproduit/carnet/tributzoom.jpg" alt="">
		</li>
		<li>
			<img src="<?php echo $url; ?>images/ficheproduit/carnet/tribut2zoom.jpg" alt="">
		</li>
	</ul>
</div>
    
    
<?php    
  } else {
    echo 'Une erreur est survenue.';
  }
?>