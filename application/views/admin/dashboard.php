<script type="text/javascript">
    var urlClearPicture = "<?= base_url('admin/fonction/clearPicture') ?>";
</script>

<div class="content">

    <div class="entete_dash">
        Tableau de bord
    </div>

    <div class="container_dash">

        <div class="dash_left">
            <div class="bloc_commande price">
                <h4>Ventes depuis le début</h4>
                <p><?php echo $somme; ?> €</p>
            </div>

            <div class="bloc_commande price">
                <h4>Moyenne des commandes</h4>
                <p><?php echo $moyenne; ?> €</p>
            </div>

            <div class="bloc_commande price">
                <h4>5 dernières commandes</h4>
                <table>
                    <tr class="entete">
                        <th>Client</th>
                        <th>Nb participant</th>
                        <th>Montant global</th>
                    </tr>
                    <?php if (isset($order_last) && $order_last != false): ?>
                        <?php foreach ($order_last as $order): ?>
                            <tr class="ligne" data-id="<?php echo $order->id; ?>">
                                <td><?php echo $order->id_utilisateur[0]->nom . ' ' . $order->id_utilisateur[0]->prenom ?></td>
                                <td><?php echo $order->nb_participant; ?></td>
                                <td><?php echo $order->prix_total; ?> €</td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </table>
            </div>
            <div class="bloc_commande price">
                <h4>Actions à faire</h4>
                <p><input type="submit" class="btn btn-primary clear_pictures" value="Nettoyage des images"></p>
            </div>

            <div class="bloc_commande price com1">
                <h4>5 derniers commentaires</h4>
                <table>
                    <tr class="entete">
                        <th>Nom</th>
                        <th>Mail</th>
                        <th>Commentaire</th>
                    </tr>
                    <?php if (isset($last_com) && $last_com != false): ?>
                        <?php foreach ($last_com as $com): ?>
                            <tr class="ligne" data-id="<?php echo $com->id; ?>">
                                <td><?php echo substr($com->name,0,30); ?></td>
                                <td><?php echo substr($com->mail,0,30); ?></td>
                                <td><?php echo substr($com->commentaire,0,50); ?>...</td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </table>
            </div>

            <div class="bloc_commande price com2">
                <h4>5 derniers commentaires signalés</h4>
                <table>
                    <tr class="entete">
                        <th>Nom</th>
                        <th>Mail</th>
                        <th>Commentaire</th>
                    </tr>
                    <?php if (isset($last_com_signale) && $last_com_signale != false): ?>
                        <?php foreach ($last_com_signale as $com): ?>
                            <tr class="ligne" data-id="<?php echo $com->id; ?>">
                                <td><?php echo substr($com->name,0,20); ?></td>
                                <td><?php echo substr($com->mail,0,30); ?></td>
                                <td><?php echo substr($com->commentaire,0,50); ?>...</td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </table>
            </div>
        </div>

        <div class="dash_right">
            <div class="bloc_commande">

                <div class="panel-body">
                    <div id="morris-bar-chart"></div>
                </div>


                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Meilleures ventes</a></li>
                    <li><a data-toggle="tab" href="#menu1">Produits les plus consultés</a></li>
                    <li><a data-toggle="tab" href="#menu2">Nouveaux clients</a></li>
                    <li><a data-toggle="tab" href="#menu3">Derniers abonnés</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <?php if ($order_vente): ?>
                            <table>
                                <tr class="entete">
                                    <th>Nom du produit</th>
                                    <th>Durée</th>
                                    <th>Quantité commandée</th>
                                </tr>
                                <?php foreach ($order_vente as $v): ?>
                                    <tr class="ligne" data-id="<?php echo $v->id_voyage[0]->id; ?>">
                                        <td><?php echo $v->id_voyage[0]->titre; ?></td>
                                        <td><?php echo $v->id_voyage[0]->duree; ?> jours</td>
                                        <td><?php echo $v->sum; ?></td>
                                    </tr>

                                <?php endforeach; ?>
                            </table>
                        <?php endif; ?>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <?php if ($view): ?>
                            <table>
                                <tr class="entete">
                                    <th>Nom du produit</th>
                                    <th>Durée</th>
                                    <th>Nombre de consultations</th>
                                </tr>
                                <?php foreach ($view as $v): ?>
                                    <tr class="ligne" data-id="<?php echo $v->product_id[0]->id; ?>">
                                        <td><?php echo $v->product_id[0]->titre; ?></td>
                                        <td><?php echo $v->product_id[0]->duree; ?> jours</td>
                                        <td><?php echo $v->view; ?></td>
                                    </tr>

                                <?php endforeach; ?>
                            </table>
                        <?php endif; ?>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <?php if ($users): ?>
                            <table>
                                <tr class="entete">
                                    <th>Nom du client</th>
                                    <th>Date d'inscription</th>
                                    <th>Adresse mail</th>
                                    <th>Nombre de commande</th>
                                </tr>
                                <?php foreach ($users as $u): ?>
                                    <tr class="ligne" data-id="<?php echo $u->id; ?>">
                                        <?php $date = explode('-', explode(' ', $u->date_inscription)[0]); ?>
                                        <td><?php echo $u->nom . ' ' . $u->prenom; ?></td>
                                        <td><?php echo $date[2] . '.' . $date[1] . '.' . $date[0]; ?></td>
                                        <td><?php echo $u->mail; ?></td>
                                        <td><?php echo $u->description ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php endif; ?>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <?php if ($newsletter): ?>
                            <table>
                                <tr class="entete">
                                    <th>Adresse mail</th>
                                    <th>Date d'inscription</th>
                                </tr>
                                <?php foreach ($newsletter as $n): ?>
                                    <tr class="ligne" data-id="<?php echo $n->id; ?>">
                                        <?php $date = explode('-', explode(' ', $n->date_inscription)[0]); ?>
                                        <td><?php echo $n->mail; ?></td>
                                        <td><?php echo $date[2] . '.' . $date[1] . '.' . $date[0] . ' ' . explode(' ', $n->date_inscription)[1]; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>


        <?php
        if (isset($graphique) && isset($log)) {
            $string = '';
            $mois = '';
            foreach ($graphique as $point) {
                $mois = (int) explode('-', $point->date)[1];
                $sum = $point->sum;
            }
            foreach ($log as $l) {
                $mois_log = (int) $l->date;
                $sum_log = $l->sum;
            }


            for ($month = 1; $month < 13; $month++) {
                $trouve = false;
                $sum = 0;
                $sum_log = 0;
                foreach ($graphique as $point) {
                    if ((int) explode('-', $point->date)[1] == $month && $trouve == false) {
                        $mois = (int) explode('-', $point->date)[1];
                        $sum = $point->sum;
                        $trouve = true;
                    }
                }

                $trouve = false;
                foreach ($log as $l) {
                    if ((int) $l->date == $month && $trouve == false) {
                        $mois_log = (int) $l->date;
                        $sum_log = $l->sum;
                        $trouve = true;
                    }
                }

                if ($month == 1) {
                    if ($month == $mois || $month == $mois_log) {
                        $string .= "{
    		                y: 'Janvier',
    		                a: " . $sum . ",
    		                b: " . $sum_log . "
    		            },";
                    } else {
                        $string .= "{
    		                y: 'Janvier',
    		                a: 0,
    		                b: 0
    		            },";
                    }
                }

                if ($month == 2) {
                    if ($month == $mois || $month == $mois_log) {
                        $string .= "{
    		                y: 'Février',
    		                a: " . $sum . ",
    		                b: " . $sum_log . "
    		            },";
                    } else {
                        $string .= "{
    		                y: 'Février',
    		                a: 0,
    		                b: 0
    		            },";
                    }
                }

                if ($month == 3) {
                    if ($month == $mois || $month == $mois_log) {
                        $string .= "{
    		                y: 'Mars',
    		                a: " . $sum . ",
    		                b: " . $sum_log . "
    		            },";
                    } else {
                        $string .= "{
    		                y: 'Mars',
    		                a: 0,
    		                b: 0
    		            },";
                    }
                }

                if ($month == 4) {
                    if ($month == $mois || $month == $mois_log) {
                        $string .= "{
    		                y: 'Avril',
    		                a: " . $sum . ",
    		                b: " . $sum_log . "
    		            },";
                    } else {
                        $string .= "{
    		                y: 'Avril',
    		                a: 0,
    		                b: 0
    		            },";
                    }
                }

                if ($month == 5) {
                    if ($month == $mois || $month == $mois_log) {
                        $string .= "{
    		                y: 'Mai',
    		                a: " . $sum . ",
    		                b: " . $sum_log . "
    		            },";
                    } else {
                        $string .= "{
    		                y: 'Mai',
    		                a: 0,
    		                b: 0
    		            },";
                    }
                }

                if ($month == 6) {
                    if ($month == $mois || $month == $mois_log) {
                        $string .= "{
    		                y: 'Juin',
    		                a: " . $sum . ",
    		                b: " . $sum_log . "
    		            },";
                    } else {
                        $string .= "{
    		                y: 'Juin',
    		                a: 0,
    		                b: 0
    		            },";
                    }
                }

                if ($month == 7) {
                    if ($month == $mois || $month == $mois_log) {
                        $string .= "{
    		                y: 'Juillet',
    		                a: " . $sum . ",
    		                b: " . $sum_log . "
    		            },";
                    } else {
                        $string .= "{
    		                y: 'Juillet',
    		                a: 0,
    		                b: 0
    		            },";
                    }
                }

                if ($month == 8) {
                    if ($month == $mois || $month == $mois_log) {
                        $string .= "{
    		                y: 'Août',
    		                a: " . $sum . ",
    		                b: " . $sum_log . "
    		            },";
                    } else {
                        $string .= "{
    		                y: 'Août',
    		                a: 0,
    		                b: 0
    		            },";
                    }
                }

                if ($month == 9) {
                    if ($month == $mois || $month == $mois_log) {
                        $string .= "{
    		                y: 'Septembre',
    		                a: " . $sum . ",
    		                b: " . $sum_log . "
    		            },";
                    } else {
                        $string .= "{
    		                y: 'Septembre',
    		                a: 0,
    		                b: 0
    		            },";
                    }
                }

                if ($month == 10) {
                    if ($month == $mois || $month == $mois_log) {
                        $string .= "{
    		                y: 'Octobre',
    		                a: " . $sum . ",
    		                b: " . $sum_log . "
    		            },";
                    } else {
                        $string .= "{
    		                y: 'Octobre',
    		                a: 0,
    		                b: 0
    		            },";
                    }
                }

                if ($month == 11) {
                    if ($month == $mois || $month == $mois_log) {
                        $string .= "{
    		                y: 'Novembre',
    		                a: " . $sum . ",
    		                b: " . $sum_log . "
    		            },";
                    } else {
                        $string .= "{
    		                y: 'Novembre',
    		                a: 0,
    		                b: 0
    		            },";
                    }
                }

                if ($month == 12) {
                    if ($month == $mois || $month == $mois_log) {
                        $string .= "{
    		                y: 'Décembre',
    		                a: " . $sum . ",
    		                b: " . $sum_log . "
    		            },";
                    } else {
                        $string .= "{
    		                y: 'Décembre',
    		                a: 0,
    		                b: 0
    		            },";
                    }
                }
            }
        }
        ?>



        <div class="clear"></div>

    </div>

</div>

<script type="text/javascript">
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [<?php echo $string; ?>],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Ventes par mois', 'Visites par mois'],
        hideHover: 'auto',
        resize: true
    });

    $(document).ready(function () {
        $(".container_dash .bloc_commande.price table tr.ligne").click(function () {
            var id = $(this).data('id');
            window.location = "<?php echo base_url() ?>admin/orders/edit?id=" + id;
        });

        $(".container_dash .bloc_commande.com1 table tr.ligne").click(function () {
            var id = $(this).data('id');
            window.location = "<?php echo base_url() ?>admin/commentaires/liste/edit/" + id;
        });

        $(".container_dash .bloc_commande.com2 table tr.ligne").click(function () {
            var id = $(this).data('id');
            window.location = "<?php echo base_url() ?>admin/commentaires/liste/edit/" + id;
        });

        $("#home tr.ligne").click(function () {
            var id = $(this).data('id');
            window.location = "<?php echo base_url() ?>admin/voyages/edit?id=" + id;
        });

        $("#menu1 tr.ligne").click(function () {
            var id = $(this).data('id');
            window.location = "<?php echo base_url() ?>admin/voyages/edit?id=" + id;
        });

        $("#menu2 tr.ligne").click(function () {
            var id = $(this).data('id');
            window.location = "<?php echo base_url() ?>admin/customer/liste/edit/" + id;
        });

        $("#menu3 tr.ligne").click(function () {
            var id = $(this).data('id');
            window.location = "<?php echo base_url() ?>admin/newsletters/liste/read/" + id;
        });
    });
</script>



