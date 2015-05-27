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
                    <div class="entry">
                        <div class="toggle_widget"><!--start toggle_widget-->
                        	<div class="show_content">
                            	<h2>Comment contacter Lagrandecouverte <span>?</span></h2>
                                <a href="#"><span>répondre</span><small>fermer</small></a>
                            </div>
                            <div class="display_content">
                            	<p class="padding_null">Pour toute information, question ou conseil, notre service clients est à votre disposition :</p>
                                <ul class="list_item">
                                    <li>Soit par téléphone : 03 20 00 00 00 (<em>communication non surtaxée – Coût variable suivant opérateur</em>)</li>
                                    <li>Soit fax : 03 20 00 00 00(<em>communication non surtaxée – Coût variable suivant opérateur</em>)</li>
                                    <li>Soit par email : <a href="mailto:lagrandecouverte@gmail.com">lagrandecouverte@gmail.com</a></li>
                                </ul>
                            </div>
                        </div><!--//end .toggle_widget-->
                    </div>
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



