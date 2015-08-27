<?php

function content_facture($order) {
    return '<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Détails de la commande N°' . $order[0]->id . '</h3>
                </div>
                <div class="widget-content">

                    <div class="bloc_commande right">
                        <h4>Information de la commande N°' . $order[0]->id . '</h4>
                        <p>Date de la commmande : <span>' . $order[0]->date . '</span></p>
                    </div>

                    <div class="bloc_commande">
                        <h4>Information du compte</h4>
                        <p>Nom du client : <span>' . $order[0]->id_utilisateur[0]->nom . ' ' . $order[0]->id_utilisateur[0]->prenom . '</span></p>
                        <p>Email : <span>' . $order[0]->id_utilisateur[0]->mail . '</span></p>
                        <p>Date d\'inscription : <span>' . explode(' ', $order[0]->id_utilisateur[0]->date_inscription)[0] . '</span></p>
                    </div>

                    <div class="clear"></div>

                    <div class="bloc_commande factu right">
                        <h4>Adresse de facturation</h4>
                        <p>' . $order[0]->id_billing[0]->nom . ' ' . $order[0]->id_billing[0]->prenom . '</p>
                        <p>' . $order[0]->id_billing[0]->adresse . ' ' . $order[0]->id_billing[0]->complement_adresse . '</p>
                        <p>' . $order[0]->id_billing[0]->ville . ', ' . $order[0]->id_billing[0]->code_postal . '</p>
                        <p>' . $order[0]->id_billing[0]->pays . '</p>
                        <p>T :' . $order[0]->id_billing[0]->telephone . '</p>
                    </div>

                    <div class="bloc_commande">
                        <h4>Information sur le paiement</h4>
                        <p></p>
                    </div>

                    <div class="clear"></div>

                    <div class="bloc_commande parti">
                        <h4>Voyage</h4>
                        <p>Nom du voyage : <span>' . $order[0]->id_voyage[0]->titre . '</span></p>
                        <p>Date de départ : <span>' . $order[0]->id_info_voyage[0]->date_depart . '</span></p>
                        <p>Date d\'arrivée : <span>' . $order[0]->id_info_voyage[0]->date_arrivee . '</span></p>
                    </div>

                    <div class="bloc_commande parti">
                        <h4>Liste des participants</h4>
                        <table>
                        <tr><th>Nom</th><th>Prénom</th><th>Date d\'anniversaire</th><th>Commentaire</th></tr>
                        ' . participantHtml($order). '
                        </table>
                    </div>

                    <div class="clear"></div>

                    <div class="bloc_commande totaux">
                        <h4>Totaux commande</h4>
                        <p>Sous total : <span>' . $order[0]->sous_total . '</span></p>
                        <p>Taxe : <span>' . $order[0]->taxe . '</span></p>
                        <p>Total général (T.T.C) : <span>' . $order[0]->prix_total . '</span></p>
                        <p>Accompte : <span>' . $order[0]->acompte . '</span></p>
                        <p>Reste à payer : <span>' . $order[0]->reste_a_payer . '</span></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>';
}

function participantHtml($order) {
    $participant = "";
    foreach ($order[0]->nb_participant as $p) {
        $tmpparticipant =  "<tr><td>".$p->nom."</td> <td>".$p->prenom."</td><td>".$p->dob."</td><td>".$p->info."</td></tr>";
        $participant = $participant . $tmpparticipant;
    }
    
    return $participant;
}
