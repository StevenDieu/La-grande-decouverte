<div class="faq">
    <div class="content">

        <div class="entete">
            <div class="titre">FAQ</div>
            <div class="description">Les questions les plus fréquentes.</div>
            <div class="cercleGauche"></div>
            <div class="cercleDroit"></div>
        </div>

        <div id="main_content"><!--start main_content-->
        	<div id="page_content"><!--start page_content-->
                <div id="admin_content"><!--start admin_content-->
                    <?php if($faqs): ?>
                        <?php foreach ($faqs as $faq): ?>
                            <div class="entry">
                                <div class="toggle_widget"><!--start toggle_widget-->
                                	<div class="show_content">
                                    	<h2><?php echo $faq->question; ?></span></h2>
                                        <a href="#"><span>répondre</span><small>fermer</small></a>
                                    </div>
                                    <div class="display_content">
                                    	<?php echo $faq->reponse; ?>
                                    </div>
                                </div><!--//end .toggle_widget-->
                            </div>
                        <?php endforeach ?>
                    <?php else: ?>
                        Il n'y a aucune question faq.
                    <?php endif ?>
                </div><!--//end #admin_content-->
            </div><!--//end #page_content-->
        </div><!--//end #main_content-->
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function(){
        //admin_faq panels
        jQuery(".display_content").hide(); 
            jQuery(".show_content").click(function(){
            jQuery(this).toggleClass("active").next().slideToggle("slow");
            return false; 
        });
    });

</script>



