<!---------- CONTENT ---------->	
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZo93gQX7j_kr0Bn3oqfwfIIPCQLAKhuI"></script>
<script type="text/javascript" src ="<?php echo asset_url(''); ?>librairie/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link href="<?php echo asset_url(''); ?>librairie/css/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" rel="stylesheet"/>

<script type="text/javascript">
    //initialise le slider en prenant en param un id

    //initialise la map google
    function initialize() {
        var mapOptions = {
            center: {lat: -35.675147, lng: -71.54296899999997},
            scrollwheel: false,
            zoom: 10,
        };
        map = new google.maps.Map(document.getElementById('carte'), mapOptions);
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    //centre la map google
    function centrage() {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
    }
</script>

<div class="fiche_produit">		
    <!-- Slideshow 4 -->
    <div class="callbacks_container slider_principal">
        <ul class="rslides" id="slider_top">
            <li>
                <img src="<?php echo asset_url(''); ?>images/1.jpg" alt="">
            </li>
            <li>
                <img src="<?php echo asset_url(''); ?>images/2.jpg" alt="">
            </li>
            <li>
                <img src="<?php echo asset_url(''); ?>images/3.jpg" alt="">
            </li>
        </ul>
        <h1 class="caption_titre"><span>Au coeur du Chili</span></h1>
        <h2 class="caption"><span>Le CHILI séduit par la richesse de son environnement. La variété des paysages du Chili, le patrimoine architectural, les Andes, la densité de la faune du Chili et les mystérieuses statues de l'île de Pâques promettent au voyageur une merveilleuse découverte.</span></h2>
    </div>

    <div style="clear:both"></div>

    <div class="entete_fiche_produit">
        <h2 class="accroche"></h2>
    </div>

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
        <div id="onglet1mobile" class="onglet_mobile "><a href="#">Description voyage</a></div>
        <div id="onglet1" class="contenu_fiche_onglet onglet1mobile active">
            <!-- contenu description -->
            <div class="conteneur_gauche">

                <div class="header_partie"><div class="icon"><img src="<?php echo asset_url(''); ?>images/ficheproduit/carteidentite.png" alt="carte identité"></div><h3>Carte d'identité</h3></div>
                <div class="contenu_partie">
                    <ul>
                        <li>Capitale : Santiago du Chili</li>
                        <li>Monnaie : Le Peso chilien (CLP) est utilisé au <strong>Chili</strong></li>
                        <li>Fête : Indépendance du Chili, 18 Septembre (1810)</li>
                        <li>Décalage horaire : lorsqu'il est midi en France, au <strong>Chili</strong> il est 7h en été (8h en hiver)</li>
                        <li>Langue officielle : l'espagnol est la langue officielle du Chili</li>
                        <li>Villes principales : Concepción, Valparaíso, Viña del Mar, Talcahuano, Antofagasta, Temuco, Punta Arenas</li>
                        <li>Religion : Au <strong>Chili</strong>, la religion catholique est majoritaire.</li>
                        <li>Nombre d'habitants : Le Chili compte 16 600 000 habitants</li>
                    </ul>
                </div>

                <div class="header_partie"><div class="icon"><img src="<?php echo asset_url(''); ?>images/ficheproduit/information2.png" alt="description"></div><h3>Description</h3></div>
                <div class="contenu_partie">
                    Nous débuterons ce voyage sous les tropiques, dans le désert d'Atacama, dans un paysage couronné de volcans, ponctué de lagunes multicolores, de salars, et de surprenants geysers. Une petite incursion en territoire bolivien vers la laguna Verde nous permettra d'appréhender les merveilles du Sud Lipez. Cette première partie du voyage sera l'occasion d'observer les constellations australes et de profiter de la limpidité exceptionnelle du ciel lors d'une soirée en compagnie d'un astronome.<br><br>
                    La deuxième partie de votre voyage nous transporte à l'autre bout de la cordillère des Andes. Nous quitterons l'Altiplano et les paysages lunaires de l'Atacama pour rejoindre la Patagonie et ses terres polaires, parsemées de lacs, de glaciers et entrecoupées de sommets déchiquetés. Ici tout est vert, bleu et blanc.<br><br>
                    Après un court passage par le mythique port de Valparaiso, l'une des villes les plus singulières d'Amérique du Sud avec ses collines, son funiculaire et son air de bohème, nous rechausserons nos bottes de sept lieues pour terminer notre périple près de 4000 km plus à l'Ouest en plein Océan Pacifique. La mystérieuse et prodigieuse île de Pâques nous enchantera par une combinaison unique entre nature et culture sur l'une des terres les plus isolées du globe!<br><br>
                    Bref, nous vous proposons ici un voyage d'exception pour une découverte des multiples facettes d'un pays atypique avec la tête sous les tropiques, les pieds en Antarctique et les mains tendues vers la Polynésie...
                </div>

                <div id="jcl-demo">
                    <div class="custom-container widget">
                        <div class="mid">
                            <img class="zoom" src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/carnaval.jpg" alt="">
                        </div>
                        <div class="carousel">  
                                                  
                            <ul>
                                <li class="miniature"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/carnaval.jpg" alt=""></li>
                                <li class="miniature"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/paysages_web.jpg" alt=""></li>
                                <li class="miniature"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/piment.jpg" alt=""></li>
                                <li class="miniature"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/carnaval.jpg" alt=""></li>
                                <li class="miniature"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/paysages_web.jpg" alt=""></li>
                                <li class="miniature"><img src="<?php echo asset_url(''); ?>images/ficheproduit/imagedescription/piment.jpg" alt=""></li>
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
            </div>

            <script type="text/javascript">
            $(".slide_bottom img").click(function() {
                $(".widget .mid img").attr("src", $(this).attr("src"));
            });
            </script>

            <div class="conteneur_droit">
                <div class="header_partie"><div class="icon"><img src="<?php echo asset_url(''); ?>images/ficheproduit/carteidentite.png" alt="carte identité"></div><h3>Infos pratiques</h3></div>
                <div class="contenu_partie">
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
                </div>
            </div>
            <div style="clear:both"></div>
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
                    <script type="text/javascript">
                        $(document).ready(function () {
                            initialiseResponsiveSilide('#slidercarnet1');
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
                        });
                    </script>
                    <a class="slide_carnet1 fancybox.ajax zoom" href="<?php echo asset_url(''); ?>../fancybox/popup_carnet.php"></a>
                    <div style="clear:both"></div>
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
                    <a  href="#" class="titre">Deux semaines au Chili</a>
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
                    <a href="#" class="titre">Deux semaines au Chili</a>
                    <div class="texte">Le mois de Mai dernier, je m’envollais pour deux semaines au Chili, venez dècouvrir ce que le Chili vous reserves et envolez vous avec lagrandecouverte.com au coeur de se pays ...</div>
                    <a href="#" class="lire_suite">Voir le carnet ></a>
                    <script type="text/javascript">initialiseResponsiveSilide('#slidercarnet4');</script>
                </div>
                <div style="clear:both"></div>
            </div>
        <!-- fin contenu carnet de voyage -->	
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

                <div class="titre"><span>JOUR 5 à 8</span> - Lac Budi</div>
                <div class="description">A une heure de la ville de Temuco, au sud du Chili et près de l’Océan Pacifique, le Lac Budi est une des destinations les plus photogéniques et paisibles de l’Araucanía. Encore méconnue des touristes étrangers, vous allez y rester 3 jours et dormir dans ses « rucas », goûter sa gastronomie et connaître de première main les secrets de la culture mapuche.</div>
                <img src="<?php echo asset_url(''); ?>images/ficheproduit/deroulement/imagen_unidad_2.jpg" alt="">
                <div class="inter_jour"></div>

                <div class="titre"><span>JOURS 9</span> - Patagonie & Torres del Paine</div>
                <div class="description">Patagonia Camp propose un large éventail d'activités au choix : randonnées dans le Parc de Torres del Paine à la découverte de la faune, de la flore, des lacs et des glaciers.</div>
                <div class="inter_jour"></div>

                <div class="titre"><span>JOUR 9</span> - Transfert en voiture vers Punta Arenas.</div>
                <div class="description">Vol vers Santiago de Chile.</div>
            </div>
        </div>
    </div>	
    <br>
</div>
