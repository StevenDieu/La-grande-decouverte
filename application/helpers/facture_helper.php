<?php

function content_facture($order) {
    return ' <body style="font-family:  Arial; margin: 0px;">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="widget">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="font-family:  Arial;margin:0px; padding:0px;">
                            <tbody>
                                <tr style="color: white;background-color: #1a171b;">

                                    <td colspan=2 align="center">
                                        <div style="max-width: 1200px;width: 100% ;margin: 0 auto">
                                         <h1>LA GRANDE</h1>
                                         <h1>DECOUVERTE</h1>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan=2 class="titre" style=" font-size: 27px;padding: 15px 0 15px 15px; font-weight: 600;text-transform: uppercase">
                                        <div style="max-width: 1200px;width: 100% ;margin: 0 auto;text-align:center;">
                                           Facutre de la commande N° ' . $order[0]->id . '
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="widget-content">
                            <table style=" width: 100%; ">
                                <tr style=" width: 100%; ">
                                    <td style=" width: 100%; ">
                                        <div style=" width: 95%;  min-height: 140px;position:absolute;top:0;  border: 1px solid #d6d6d6; background: #fafafa; ">
                                            <h4  style="  margin: 0; font-family: inherit; font-weight: bold; color: inherit; text-rendering: optimizelegibility; display: block; width: 100%; height: 30px; background: #6f8992; color: white; line-height: 31px; padding-left: 15px; box-sizing: border-box; font-size: 14px;     margin-bottom: 10px;">Information de la commande N°' . $order[0]->id . '</h4>
                                            <p style="    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">Date de la commmande : <span style="    font-weight: bold;">' . $order[0]->date . '</span></p>
                                        </div>
                                    </td>
                                    <td style=" width: 100%; ">
                                        <div style=" width: 95%;margin-left:5%; min-height: 140px;  border: 1px solid #d6d6d6; background: #fafafa;">
                                            <h4  style="  margin: 0; font-family: inherit; font-weight: bold; color: inherit; text-rendering: optimizelegibility; display: block; width: 100%; height: 30px; background: #6f8992; color: white; line-height: 31px; padding-left: 15px; box-sizing: border-box; font-size: 14px;     margin-bottom: 10px;">Information du compte</h4>
                                            <p style="    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">Nom du client : <span style="    font-weight: bold;">' . $order[0]->id_utilisateur[0]->nom . ' ' . $order[0]->id_utilisateur[0]->prenom . '</span></p>
                                            <p style="    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">Email : <span style="    font-weight: bold;">' . $order[0]->id_utilisateur[0]->mail . '</span></p>
                                            <p style="    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">Date d\'inscription : <span style="    font-weight: bold;">' . explode(' ', $order[0]->id_utilisateur[0]->date_inscription)[0] . '</span></p>
                                        </div>
                                    </td>
                                </tr>
                            
                                <tr style=" width: 100%; ">
                                    <td style=" width: 100%; ">
                                        <div style=" width: 95%;  min-height: 140px;border: 1px solid #d6d6d6; background: #fafafa; ">
                                            <h4  style="  margin: 0; font-family: inherit; font-weight: bold; color: inherit; text-rendering: optimizelegibility; display: block; width: 100%; height: 30px; background: #6f8992; color: white; line-height: 31px; padding-left: 15px; box-sizing: border-box; font-size: 14px;     margin-bottom: 10px;">Adresse de facturation</h4>
                                            <p style="    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">' . $order[0]->id_billing[0]->nom . ' ' . $order[0]->id_billing[0]->prenom . '</p>
                                            <p style="    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">' . $order[0]->id_billing[0]->adresse . ' ' . $order[0]->id_billing[0]->complement_adresse . '</p>
                                            <p style="    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">' . $order[0]->id_billing[0]->ville . ', ' . $order[0]->id_billing[0]->code_postal . '</p>
                                            <p style="    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">' . $order[0]->id_billing[0]->pays . '</p>
                                            <p style="    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">T :' . $order[0]->id_billing[0]->telephone . '</p>
                                        </div>
                                    </td>
                                    <td style=" width: 100%; ">
                                        <div style=" width: 95%;position:absolute;top:0;margin-left:5%; min-height: 140px;  border: 1px solid #d6d6d6; background: #fafafa;">
                                            <h4  style="  margin: 0; font-family: inherit; font-weight: bold; color: inherit; text-rendering: optimizelegibility; display: block; width: 100%; height: 30px; background: #6f8992; color: white; line-height: 31px; padding-left: 15px; box-sizing: border-box; font-size: 14px;     margin-bottom: 10px;">Information sur le paiement</h4>
                                            <p style="    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">' . $order[0]->payment . '</p>
                                        </div>
                                    </td>
                                </tr>
                            
                                <tr>
                                    <td colspan="2">
                                        <div style="float: left; min-height: 140px;border: 1px solid #d6d6d6; background: #fafafa;width: 100%;">
                                            <h4  style="  margin: 0; font-family: inherit; font-weight: bold; color: inherit; text-rendering: optimizelegibility; display: block; width: 100%; height: 30px; background: #6f8992; color: white; line-height: 31px; padding-left: 15px; box-sizing: border-box; font-size: 14px;    margin-bottom: 10px;">Voyage</h4>
                                            <p style="    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">Nom du voyage : <span style="    font-weight: bold;">' . $order[0]->id_voyage[0]->titre . '</span></p>
                                            <p style="    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">Date de départ : <span style="    font-weight: bold;">' . $order[0]->id_info_voyage[0]->date_depart . '</span></p>
                                            <p style="    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">Date d\'arrivée : <span style="    font-weight: bold;">' . $order[0]->id_info_voyage[0]->date_arrivee . '</span></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div style=" border: 1px solid #d6d6d6; background: #fafafa;     width: 100%;">
                                            <h4  style="  margin: 0; font-family: inherit; font-weight: bold; color: inherit; text-rendering: optimizelegibility; display: block; width: 100%; height: 30px; background: #6f8992; color: white; line-height: 31px; padding-left: 15px; box-sizing: border-box; font-size: 14px;">Liste des participants</h4>
                                            <table style="    border-top: 1px solid #d6d6d6;    text-align: left;    margin-top: -1px;  width: 100%;     max-width: 100%;    border-collapse: collapse;    border-spacing: 0;    background-color: transparent;">
                                                <tr style="text-align: center;"><th style="   border: 1px solid #d6d6d6; border-left: 0px solid #d6d6d6;     text-align: center;">Nom</th><th style="    border: 1px solid #d6d6d6;    text-align: center;">Prénom</th><th  style="   border: 1px solid #d6d6d6;    text-align: center;">Date d\'anniversaire</th><th style="    border: 1px solid #d6d6d6; border-right: 0px solid #d6d6d6;    text-align: center;">Commentaire</th></tr>
                                                ' . participantHtml($order) . '
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td >
                                        <div style="width: 100%;min-height: 140px; margin-left: 20px; border: 1px solid #d6d6d6; background: #fafafa;     float: right;    margin-left: 0px;    margin-right: 20px;">
                                            <h4  style="padding-left:50%;   margin: 0; font-family: inherit; font-weight: bold; color: inherit; text-rendering: optimizelegibility; display: block; width: 100%; height: 30px; background: #6f8992; color: white; line-height: 31px; padding-left: 15px; box-sizing: border-box; font-size: 14px;     margin-bottom: 10px;">Totaux commande</h4>
                                            <p style="padding-right: 15px;    text-align: right;    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">Sous total : <span style="    font-weight: bold;">' . $order[0]->sous_total . '</span></p>
                                            <p style="padding-right: 15px;    text-align: right;    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">Taxe : <span style="    font-weight: bold;">' . $order[0]->taxe . '</span></p>
                                            <p style="padding-right: 15px;    text-align: right;    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">Total général (T.T.C) : <span style="    font-weight: bold;">' . $order[0]->prix_total . '</span></p>
                                            <p style="padding-right: 15px;    text-align: right;    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">Accompte : <span style="    font-weight: bold;">' . $order[0]->acompte . '</span></p>
                                            <p style="padding-right: 15px;    text-align: right;    padding-left: 15px;    font: 15px/1.7em ;     margin: 0 0 9px;    zoom: 1;">Reste à payer : <span style="    font-weight: bold;">' . $order[0]->reste_a_payer . '</span></p>
                                        </div>
                                    </td>
                                </tr>
   
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>';
}

function participantHtml($order) {
    $participant = "";
    foreach ($order[0]->nb_participant as $p) {
        $tmpparticipant = '<tr><td style=" padding-left: 15px;   border: 1px solid #d6d6d6;border-left: 0px solid; #d6d6d6;border-bottom: 0px solid; #d6d6d6;    text-align: left;">' . $p->nom . '</td> <td style="padding-left: 15px;    border: 1px solid #d6d6d6;border-bottom: 0px solid; #d6d6d6;     text-align: left;">' . $p->prenom . '</td><td style=" padding-left: 15px;   border: 1px solid #d6d6d6;border-bottom: 0px solid; #d6d6d6;     text-align: left;">' . $p->dob . '</td><td style="  padding-left: 15px;  border: 1px solid #d6d6d6; border-right: 0px solid #d6d6d6;border-bottom: 0px solid; #d6d6d6;   text-align: left;">' . $p->info . '</td></tr>';
        $participant = $participant . $tmpparticipant;
    }

    return $participant;
}
