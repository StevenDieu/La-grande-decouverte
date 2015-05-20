<!---------- CONTENT ------- -->	
<div class="content content-home">
    <div class="displayMapSize">
        <div class="divLeTireurTop">
            <svg class="blurpMenuRetour" width="192" height="61" viewBox="0 0 160.7 61.5" >
            <path fill="#FFFFFF" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z">
            </path>
            </svg>
            <div class="btn--top_textRetour"> 
                <span class="btn__arrow btn__arrow--top"></span> 
                <span class="btn__arrow btn__arrow--bottom"></span> 
            </div> 
        </div>
    </div>
    <div class="callbacks_container slider_principal">
        <ul class="rslides" id="slider_top">
            <li>
                <img src="<?php echo base_url(''); ?>media/produit/image_slider/8h93mj8l3.jpg" alt="">
            </li>
            <li>
                <img src="<?php echo base_url(''); ?>media/produit/image_slider/8merof6u1.jpg" alt="">
            </li>
            <li>
                <img src="<?php echo base_url(''); ?>media/produit/image_slider/o8u46nfq2.jpg" alt="">
            </li>
        </ul>
        <div class="caption">
            <h1>test</h1>
            <h2>test test test test test test test test</h2>
        </div>
    </div>
    <div class="displayMapSize">
        <div class="map">
            <div id="map-continents">
                <ul class="continents">
                    <li class="c1"><a href="#africa">Africa</a></li>
                    <li class="c2"><a href="#asia">Asia</a></li>
                    <li class="c3"><a href="#australia">Australia</a></li>
                    <li class="c4"><a href="#europe">Europe</a></li>
                    <li class="c5"><a href="#north-america">North America</a></li>
                    <li class="c6"><a href="#south-america">South America</a></li>
                </ul>
            </div>
            <div class="divLeTireurBottom">
                <svg class="blurpMenu" width="192" height="61" viewBox="0 0 160.7 61.5" >
                <path fill="#FFFFFF" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z">
                </path>
                </svg>
                <div class="btn--top_text"> 
                    <span class="btn__arrow btn__arrow--top"></span> 
                    <span class="btn__arrow btn__arrow--bottom"></span> 
                </div>
            </div>
        </div>
    </div>


    <?php if ($this->session->flashdata('result_newsletter') > 0) { ?>
        <span class="success">Vous êtes bien inscrit à la newsletter.</span>
    <?php } ?>
    <div>

        <br/><br/>
        Cette page vas juste référencer tous les liens pour ce balader sur le site <br/><br/>

        <a href="<?php echo base_url('/voyage/fiche/?id=64') ?>">Fiche Produit</a><br/>


        <a href="<?php echo base_url('admin/index/connexion') ?>">Back office général</a><br/>

        <a href="<?php echo base_url('/checkout/cart/onepage') ?>">Tunnel de commande</a><br/>



        <br/><br/><br/><br/><br/><br/>
        <h2>Bloc des actualités</h2>
        <?php
        if ($actualites) {

            foreach ($actualites as $actualite) {
                echo $actualite->titre . '</br>';
                echo $actualite->description . '</br>';
                echo $actualite->date . '  ';
                echo $actualite->time . '</br>';

                if ($actualite->image_1) {
                    echo '<img src="' . base_url('') . 'media/actualite/' . $actualite->image_1 . '" alt="' . $actualite->image_1 . '" width="300"/>';
                }
                if ($actualite->image_2) {
                    echo '<img src="' . base_url('') . 'media/actualite/' . $actualite->image_2 . '" alt="' . $actualite->image_2 . '" width="300"/>';
                }
                if ($actualite->image_3) {
                    echo '<img src="' . base_url('') . 'media/actualite/' . $actualite->image_3 . '" alt="' . $actualite->image_3 . '" width="300"/>';
                }

                echo "<div class='clear:both'></div>";
            }
        } else {

            echo "pas d'actualité";
        }
        ?>

    </div>
</div>
<!---------- CONTENT ------- -->	
