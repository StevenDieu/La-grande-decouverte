<html>
    <head lang="fr">

        <meta charset="UTF-8">  
        <title>La Grande Decouverte</title>
        <meta name="description" content="">
        <meta name="keywords" content="lagrandecouverte,la grande decouverte, agence, Globetrotter voyage chez l’habitant ,voyage aventure ,voyage en immersion,voyage communautaire,voyage unique,voyage atypique,voyage en terre inconnue, tourisme communautaire,séjour atypique"> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="google" content="notranslate">
        <meta name="viewport" content="width=device-width">
        <meta name="msapplication-TileImage" content="http://localhost/TVAFS-1.0/assets/images/header/favicon.png">
        <meta property="fb:page-id" content="http://localhost/TVAFS-1.0/user/account">
        <link rel="canonical" href="http://localhost/TVAFS-1.0/user/account">
        <link rel="apple-touch-icon" href="http://localhost/TVAFS-1.0/assets/images/header/favicon.png">
        <link rel="icon" href="http://localhost/TVAFS-1.0/assets/images/header/favicon.png" type="image/x-icon">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-header">
                            <i class="icon-road"></i>
                            <h3>Détails de la commande N° <?php echo $order[0]->id ?></h3>
                        </div>
                        <div class="widget-content">

                            <div class="bloc_commande right">
                                <h4>Information de la commande N°<?php echo $order[0]->id ?></h4>
                                <p>Date de la commmande : <span><?php echo $order[0]->date ?></span></p>
                            </div>

                            <div class="bloc_commande">
                                <h4>Information du compte</h4>
                                <p>Nom du client : <span><?php echo $order[0]->id_utilisateur[0]->nom ?> <?php echo $order[0]->id_utilisateur[0]->prenom ?></span></p>
                                <p>Email : <span><?php echo $order[0]->id_utilisateur[0]->mail ?></span></p>
                                <p>Date d\'inscription : <span><?php echo explode(' ', $order[0]->id_utilisateur[0]->date_inscription)[0] ?></span></p>
                            </div>

                            <div class="clear"></div>

                            <div class="bloc_commande factu right">
                                <h4>Adresse de facturation</h4>
                                <p><?php echo $order[0]->id_billing[0]->nom ?> <?php echo $order[0]->id_billing[0]->prenom ?></p>
                                <p><?php echo $order[0]->id_billing[0]->adresse ?> <?php echo $order[0]->id_billing[0]->complement_adresse ?></p>
                                <p><?php echo $order[0]->id_billing[0]->ville ?>, <?php echo $order[0]->id_billing[0]->code_postal ?></p>
                                <p><?php echo $order[0]->id_billing[0]->pays ?></p>
                                <p>T :<?php echo $order[0]->id_billing[0]->telephone ?></p>
                            </div>

                            <div class="bloc_commande">
                                <h4>Information sur le paiement</h4>
                                <p></p>
                            </div>

                            <div class="clear"></div>

                            <div class="bloc_commande parti">
                                <h4>Voyage</h4>
                                <p>Nom du voyage : <span><?php echo $order[0]->id_voyage[0]->titre ?></span></p>
                                <p>Date de départ : <span><?php echo $order[0]->id_info_voyage[0]->date_depart ?></span></p>
                                <p>Date d\'arrivée : <span><?php echo $order[0]->id_info_voyage[0]->date_arrivee ?></span></p>
                            </div>

                            <div class="bloc_commande parti">
                                <h4>Liste des participants</h4>
                                <table>
                                    <tr><th>Nom</th><th>Prénom</th><th>Date d\'anniversaire</th><th>Commentaire</th></tr>
                                    <?php echo participantHtml($order); ?>
                                </table>
                            </div>

                            <div class="clear"></div>

                            <div class="bloc_commande totaux">
                                <h4>Totaux commande</h4>
                                <p>Sous total : <span><?php echo $order[0]->sous_total ?></span></p>
                                <p>Taxe : <span><?php echo $order[0]->taxe ?></span></p>
                                <p>Total général (T.T.C) : <span><?php echo $order[0]->prix_total ?></span></p>
                                <p>Accompte : <span><?php echo $order[0]->acompte ?></span></p>
                                <p>Reste à payer : <span><?php echo $order[0]->reste_a_payer ?></span></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>