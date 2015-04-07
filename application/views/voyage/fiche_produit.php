<!---------- CONTENT ---------->	
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZo93gQX7j_kr0Bn3oqfwfIIPCQLAKhuI"></script>
<script type="text/javascript" src ="<?php echo asset_url(''); ?>librairie/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link href="<?php echo asset_url(''); ?>librairie/css/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" rel="stylesheet"/>
<script type="text/javascript">
function initialize() {
    var mapOptions = {
        center: {lat: -33.46912, lng: -70.641997},
        scrollwheel: false,
        zoom: 8,
    };
    map = new google.maps.Map(document.getElementById('carte'), mapOptions);
}
</script>
<div class="fiche_produit">		
    <!-- Slideshow 4 -->
    <div class="callbacks_container slider_principal">
        <ul class="rslides" id="slider_top">
            <li>
                <img src="<?php echo asset_url(''); ?>images/ficheproduit/slidertop/1.jpg" alt="image1">
            </li>
            <li>
                <img src="<?php echo asset_url(''); ?>images/ficheproduit/slidertop/2.jpg" alt="image2">
            </li>
            <li>
                <img src="<?php echo asset_url(''); ?>images/ficheproduit/slidertop/3.jpg" alt="image3">
            </li>
        </ul>
        <!-- caption desktop -->
        <div class="caption">
            <h1>Au coeur du Chili</h1>
            <h2>Le CHILI séduit par la richesse de son environnement. La variété des paysages du Chili, le patrimoine architectural, les Andes, la densité de la faune du Chili et les mystérieuses statues de l'île de Pâques promettent au voyageur une merveilleuse découverte.</h2>
        </div>
        <!-- fin caption desktop -->
    </div>

    <div style="clear:both"></div>

    <div class="fil_arianne_conteneur">
        <div class="fil_arianne">
            <ul class="breadcrumbs">
                <li class="acceuil"><a href="/">Acceuil</a></li>
                <li><a href="/">Voyages</a></li>
                <li class="last">Au coeur du Chili</li>
            </ul>
        </div>
    </div>

    <!-- caption mobile -->
    <h1 class="caption_titre_mobile"><span>Au coeur du Chili</span></h1>
    <h2 class="caption_mobile"><span>Le CHILI séduit par la richesse de son environnement. La variété des paysages du Chili, le patrimoine architectural, les Andes, la densité de la faune du Chili et les mystérieuses statues de l'île de Pâques promettent au voyageur une merveilleuse découverte.</span></h2>
    <!-- fin caption mobile -->

    <div class="contain_top_bloc">
        <div class="top_bloc">
            <!-- bloc achat -->
            <div class="image_fond"><img src="<?php echo asset_url(''); ?>images/ficheproduit/paysage.jpg" alt="paysage"></div>
            <div class="bloc_achat">
                <form action="#">
                    <div class="nom_pays">Au coeur du Chili</div>
                    <div class="trait_sous_titre"></div>
                    <div class="info_prix">
                        <div class="info">
                            <span class="titre">Durée</span>
                            <span class="valeur">9 jours</span>
                        </div>
                        <div class="prix">
                            <span class="titre">à partir de</span>
                            <span class="valeur">4990 €</span>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <a href="javascript:;" class="voir_date" id="deplier_date">Dates de départ <span></span></a>
                    <span class="result_date">Vous n'avez pas sélectionné de date.</span>
                    <button id="embarque" type="submit" value="J'embarque">> J'embarque</button>
                    <div style="clear:both"></div>
                    <input type="hidden" name="choix_date" id="choix_date" value="0">
                </form>
                <div style="clear:both"></div>
            </div>
            <!-- fin bloc achat -->
            <div class="ombreright"></div>
            <div class="ombreleft"></div>
            <div class="clear"></div>
            <!-- bloc choix date -->
            <div class="container_dates" style="display:none">
                <!-- choix d'un départ -->
                <div class="choix" id="1">
                    <ul>
                        <li class="titre">Du 12 mai 2015 au 21 mai 2015</li>
                        <li class="nb_places instock">Il reste 8 places pour ce voyages.</li>
                        <li class="description"><span>Départ de :</span> Paris Roissy- Charles de Gaulle à 6h45</li>
                        <li class="description"><span>Arrivée :</span> Santiago, Chili à 20h55</li>
                        <li class="description"><span>Compagnie :</span> Air France</li>
                        <li class="description"><span>Vol :</span> 1 escale à Mexico, Mexique</li>
                    </ul>
                    <button id="choisir_date" type="submit" value="J'embarque">> Choisir ce voyage</button>
                </div>
                <!-- fin choix d'un départ -->
                <div class="separation_choix_date"></div>
                <!-- choix d'un départ -->
                <div class="choix" id="2">
                    <ul>
                        <li class="titre">Du 12 mai 2015 au 21 mai 2015</li>
                        <li class="nb_places outstock">Il ne reste plus de place pour ce voyages.</li>
                        <li class="description"><span>Départ de :</span> Paris Roissy- Charles de Gaulle à 8h55</li>
                        <li class="description"><span>Arrivée :</span> Santiago, Chili à 23h05</li>
                        <li class="description"><span>Compagnie :</span> Air France</li>
                        <li class="description"><span>Vol :</span> 1 escale à Mexico, Mexique</li>
                    </ul>
                </div>
                <!-- fin choix d'un départ -->
                
                
            </div>
            <!-- fin bloc choix date -->
        </div>
        <div class="clear"></div>
    </div>

    <script type="text/javascript">
        $( document ).ready(function() {
            $('#deplier_date').click(function() {
                $('.container_dates').slideToggle("slow" );
                jQuery('#deplier_date span').toggleClass( "active" );
            });    

            $('#choisir_date').click(function() {
                jQuery("#choix_date").val(jQuery(this).parent().attr('id'));
                $('.container_dates').slideToggle("slow" );
                jQuery('#deplier_date span').toggleClass( "active" );
                jQuery(".result_date").html("Vous avez sélectionné le voyage "+jQuery("#"+jQuery(this).parent().attr('id')+" li.titre").html());
            });   

            $('#embarque').click(function() {
                if(jQuery("#choix_date").val() == 0){
                    alert("Vous devez séléctionné un voyage");
                    $('.container_dates').slideToggle("slow" );
                    jQuery('#deplier_date span').toggleClass( "active" );
                    return false;
                }
            });
        });
    </script>

    <div class="onglet_fiche">
        <div class="onglet_fiche_inner">
            <!-- onglet vu desktop -->
            <div id="onglet1" class="onglet onglet1 active"><a href="#">Description voyage</a></div>
            <div id="onglet2" class="onglet onglet2"><a href="#">Carte</a></div>
            <div id="onglet3" class="onglet onglet3"><a href="#">Carnet de voyage</a></div>
            <div id="onglet4" class="onglet onglet4"><a href="#">Déroulement</a></div>	
            <!-- fin onglet vu desktop -->
        </div>
    </div>

    <div class="contenu_onglet">
        <div id="onglet1mobile" class="onglet_mobile active"><a href="#">Description voyage</a></div>
        <div id="onglet1" class="contenu_fiche_onglet onglet1mobile active">
            <!-- contenu description -->

            <div class="text">
                <p>Nous débuterons ce voyage sous les tropiques, dans le désert d'Atacama, dans un paysage couronné de volcans, ponctué de lagunes multicolores, de salars, et de surprenants geysers. Une petite incursion en territoire bolivien vers la laguna Verde nous permettra d'appréhender les merveilles du Sud Lipez. Cette première partie du voyage sera l'occasion d'observer les constellations australes et de profiter de la limpidité exceptionnelle du ciel lors d'une soirée en compagnie d'un astronome.</p>
            </div>

            <div class="info_pratique">
                <div class="inner">
                    <div class="left">
                        <!-- tableau d'info pays -->
                        <div class="table_info">
                            <div class="une_ligne">
                                <div class="gauche"><span class="tgauche">Drapeau</span><span class="tdroit"><img src="<?php echo asset_url(''); ?>images/ficheproduit/drapeau/chili.png" alt="car"></span></div>
                                 <?php
                                    $date = new DateTime(null, new DateTimeZone('America/Santiago'));
                                ?>
                                <div class="droit"><span class="tgauche">Heure locale</span><span class="tdroit"><?php echo str_replace(':','h',$date->format('H:i')); ?></span></div>
                                <div class="clear"></div>
                            </div>
                            <div class="une_ligne">
                                <div class="gauche"><span class="tgauche">Capital</span><span class="tdroit">SANTIAGO DU chili</span></div>
                                <div class="droit"><span class="tgauche">Météo</span><span class="tdroit">Météo</span></div>
                                <div class="clear"></div>
                            </div>
                            <div class="une_ligne">
                                <div class="gauche"><span class="tgauche">Continent</span><span class="tdroit">AMÉRIQUE</span></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <!-- fin tableau d'info pays -->
                    </div>
                    <div class="right">
                        <div class="separation"></div>
                        <div class="picto">
                            <ul>
                                <li><img src="<?php echo asset_url(''); ?>images/ficheproduit/icons/car.png" alt="car"></li>
                                <li><img src="<?php echo asset_url(''); ?>images/ficheproduit/icons/excursion.png" alt="excursion"></li>
                                <li><img src="<?php echo asset_url(''); ?>images/ficheproduit/icons/google.png" alt="google"></li>
                                <li><img src="<?php echo asset_url(''); ?>images/ficheproduit/icons/sunblock.png" alt="sunblock"></li>
                                <li><img src="<?php echo asset_url(''); ?>images/ficheproduit/icons/swimming.png" alt="swimming"></li>
                                <li class="last"><img src="<?php echo asset_url(''); ?>images/ficheproduit/icons/t-shirt.png" alt="t-shirt"></li>
                            </ul>
                        </div>
                        <div class="information_medicale">

                        </div>
                    </div>
                    <div class="sous_info">
                        <div class="sous_info_left">
                            <p><span>Villes principales :</span> Concepción, Valparaíso, Viña del Mar, Talcahuano, Antofagasta, Temuco, Punta Arenas</li>
                            <p><span>Religion :</span> Au <u>Chili</u>, la religion catholique est majoritaire.</p>
                            <p><span>Nombre d'habitants :</span> Le Chili compte 16 600 000 habitants</p>
                        </div>
                        <div class="sous_info_right">
                            <p><span>Monnaie :</span> Le Peso chilien (CLP) est utilisé au <u>Chili</u></p>
                            <p><span>Fête :</span> Indépendance du Chili, 18 Septembre (1810)</p>
                            <p><span>Langue officielle :</span> l'espagnol est la langue officielle du Chili</p>
                        </div>
                    </div>                   
                    <div class="clear"></div>
                </div>
            </div>

            <div class="text">
                <p>Nous débuterons ce voyage sous les tropiques, dans le désert d'Atacama, dans un paysage couronné de volcans, ponctué de lagunes multicolores, de salars, et de surprenants geysers. Une petite incursion en territoire bolivien vers la laguna Verde nous permettra d'appréhender les merveilles du Sud Lipez. Cette première partie du voyage sera l'occasion d'observer les constellations australes et de profiter de la limpidité exceptionnelle du ciel lors d'une soirée en compagnie d'un astronome.</p>
            </div>

            <div class="text">
                <p>La deuxième partie de votre voyage nous transporte à l'autre bout de la cordillère des Andes. Nous quitterons l'Altiplano et les paysages lunaires de l'Atacama pour rejoindre la Patagonie et ses terres polaires, parsemées de lacs, de glaciers et entrecoupées de sommets déchiquetés. Ici tout est vert, bleu et blanc.</p>
            </div>

            <div class="text">
                <p>Après un court passage par le mythique port de Valparaiso, l'une des villes les plus singulières d'Amérique du Sud avec ses collines, son funiculaire et son air de bohème, nous rechausserons nos bottes de sept lieues pour terminer notre périple près de 4000 km plus à l'Ouest en plein Océan Pacifique. La mystérieuse et prodigieuse île de Pâques nous enchantera par une combinaison unique entre nature et culture sur l'une des terres les plus isolées du globe!</p>
            </div>

            <div class="ligne_image">
                <div class="img img1"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/1.jpg" alt=""></div>
                <div class="img img2"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/2.jpg" alt=""></div>
                <div class="separation_image"></div>
                <div class="img img3"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/3.jpg" alt=""></div>
                <div class="img img4"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/4.jpg" alt=""></div>
                <div class="clear"></div>
            </div>

            <div class="text">
                <p>Après un court passage par le mythique port de Valparaiso, l'une des villes les plus singulières d'Amérique du Sud avec ses collines, son funiculaire et son air de bohème, nous rechausserons nos bottes de sept lieues pour terminer notre périple près de 4000 km plus à l'Ouest en plein Océan Pacifique. La mystérieuse et prodigieuse île de Pâques nous enchantera par une combinaison unique entre nature
                 et culture sur l'une des terres les plus isolées du globe! Bref, nous vous proposons ici un voyage d'exception pour une découverte des multiples facettes d'un pays atypique avec la tête sous les tropiques, les pieds en Antarctique et les mains tendues vers la Polynésie...</p>
            </div>

            <div id="jcl-demo">
                <div class="custom-container widget">
                    <div class="mid">
                        <img class="zoom" src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/description1.jpg" alt="">
                    </div>
                    <div class="carousel">  
                        <ul>
                            <li class="miniature"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/description1.jpg" alt=""></li>
                            <li class="miniature"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/description2.jpg" alt=""></li>
                            <li class="miniature last"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/description3.jpg" alt=""></li>
                            <li class="miniature"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/description4.jpg" alt=""></li>
                            <li class="miniature"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/description5.jpg" alt=""></li>
                            <li class="miniature last"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/description6.jpg" alt=""></li>
                        </ul> 
                    </div>                        
                    <div class="clear"></div>
                </div>


                <script type="text/javascript">
                    $(function() {
                        $(".widget img").click(function() {
                            $(".widget .mid img").attr("src", $(this).attr("src"));
                        })
                    });
                </script>
            </div>
            <!-- fin contenu description -->
            <div class="clear"></div>
        </div>
        <div id="onglet2mobile" class="onglet_mobile"><a href="#">Carte</a></div>
        <div id="onglet2" class="contenu_fiche_onglet onglet2mobile"><div id="carte"></div></div>
        <div id="onglet3mobile" class="onglet_mobile"><a href="#">Les carnets de voyage</a></div>
        <div id="onglet3" class="contenu_fiche_onglet onglet3mobile">
        <!-- contenu carnet de voyage -->
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
                    <a class="slide_carnet1 fancybox.ajax zoom" href="<?php echo asset_url(''); ?>../fancybox/popup_carnet.php"></a>
                    <div style="clear:both"></div>
                    <script type="text/javascript">
                        $(".slide_carnet1").fancybox({
                            maxWidth: 1000,
                            maxHeight: 600,
                            fitToView: false,
                            width: '80%',
                            height: '80%',
                            autoSize: false,
                            closeClick: false,
                            openEffect: 'none',
                            closeEffect: 'none',
                            ajax: {
                                type: "POST",
                                cache: false,
                                data: "var=1|<?php echo asset_url(''); ?>",
                                success: function (data) {
                                    $.fancybox(data);
                                }
                            }
                        });
                    </script>
                </div>
                <div class="partie_droite">
                    <a  href="#" class="titre">Deux semaines au Chili</a>
                    <div class="date_auteur">Thomas l'aventurier - 22 / 03 / 2015</div>
                    <div class="texte">Le mois de Mai dernier, je m’envollais pour deux semaines au Chili, venez dècouvrir ce que le Chili vous reserves et envolez vous avec lagrandecouverte.com au coeur de se pays ...</div>
                    <a href="#" class="lire_suite">Voir le carnet ></a>
                </div>
            </div>

            <div class="separateur_article"></div>

            <div class="contenu_article_suivant">

                <!-- un article -->
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
                <!-- fin un article -->

                <!-- un article -->
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
                    <a  href="#" class="titre">Deux semaines au Chili</a>
                    <div class="texte">Le mois de Mai dernier, je m’envollais pour deux semaines au Chili, venez dècouvrir ce que le Chili vous reserves et envolez vous avec lagrandecouverte.com au coeur de se pays ...</div>
                    <a href="#" class="lire_suite">Voir le carnet ></a>
                    <script type="text/javascript">initialiseResponsiveSilide('#slidercarnet3');</script>
                </div>
                <!-- fin un article -->

                <div style="clear:both"></div>

                <!-- un article -->
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
                    <a href="#" class="titre">Deux semaines au Chili</a>
                    <div class="texte">Le mois de Mai dernier, je m’envollais pour deux semaines au Chili, venez dècouvrir ce que le Chili vous reserves et envolez vous avec lagrandecouverte.com au coeur de se pays ...</div>
                    <a href="#" class="lire_suite">Voir le carnet ></a>
                    <script type="text/javascript">initialiseResponsiveSilide('#slidercarnet4');</script>
                </div>
                <!-- fin un article -->

                <div style="clear:both"></div>
            </div>
        <!-- fin contenu carnet de voyage -->	
        </div>
        <div id="onglet4mobile" class="onglet_mobile"><a href="#">Déroulement</a></div>
        <div id="onglet4" class="contenu_fiche_onglet onglet4mobile">
            <div class="contenu">
                <div class="blue_line"></div>

                <!-- 1 jour -->
                <div class="jour_container">
                    <div class="day_counter">
                        <div class="pointRouge"></div><div class="day">Jour 1</div>                       
                    </div>
                    <div class="day_container">
                        <div class="fleche_jour"></div>
                        <div class="description_container">
                            <div class="image">
                                <img src="<?php echo asset_url(''); ?>images/ficheproduit/deroulement/imagen_unidad_2.jpg" alt="">
                            </div>
                            <div class="texte">
                                <div class="titre">Vol domestique Santiago - Calama et transfert en voiture vers votre lodge.</div>
                                <div class="text">Alto Atacama propose un large éventail d'activités au choix : Excursions en voiture, à pied ou en VTT vers les splendeurs de l’Atacama : lacs de haute montagne, Andes, geysers del Tatio, visites de villages, déserts de sel, randonnées, ascensions de volcans, … avec des guides expérimentés connaissant les moindres recoins de la région.
                    Le soir, l'observation des étoiles y est incroyable !</div>
                            </div>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                </div>
                <!-- fin 1 jour -->

                <!-- 1 jour -->
                <div class="jour_container">
                    <div class="day_counter">
                        <div class="pointRouge"></div><div class="day">Jour 2</div>                       
                    </div>
                    <div class="day_container">
                        <div class="fleche_jour"></div>
                        <div class="description_container">
                            <div class="texte no-image">
                                <div class="titre">Vol domestique Santiago - Calama et transfert en voiture vers votre lodge.</div>
                                <div class="text">Alto Atacama propose un large éventail d'activités au choix : Excursions en voiture, à pied ou en VTT vers les splendeurs de l’Atacama : lacs de haute montagne, Andes, geysers del Tatio, visites de villages, déserts de sel, randonnées, ascensions de volcans, … avec des guides expérimentés connaissant les moindres recoins de la région.
                    Le soir, l'observation des étoiles y est incroyable !</div>
                            </div>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                </div>
                <!-- fin 1 jour -->

                <!-- 1 jour -->
                <div class="jour_container">
                    <div class="day_counter">
                        <div class="pointRouge"></div><div class="day">Jour 3</div>                       
                    </div>
                    <div class="day_container">
                        <div class="fleche_jour"></div>
                        <div class="description_container">
                            <div class="image">
                                <img src="<?php echo asset_url(''); ?>images/ficheproduit/deroulement/imagen_unidad_2.jpg" alt="">
                            </div>
                            <div class="texte">
                                <div class="titre">Vol domestique Santiago - Calama et transfert en voiture vers votre lodge.</div>
                                <div class="text">Alto Atacama propose un large éventail d'activités au choix : Excursions en voiture, à pied ou en VTT vers les splendeurs de l’Atacama : lacs de haute montagne, Andes, geysers del Tatio, visites de villages, déserts de sel, randonnées, ascensions de volcans, … avec des guides expérimentés connaissant les moindres recoins de la région.
                    Le soir, l'observation des étoiles y est incroyable !</div>
                            </div>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                </div>
                <!-- fin 1 jour -->
            </div>
        </div>
    </div>	
    <br>
</div>

