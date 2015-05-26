<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Order extends CI_Model {

    function _construct() {
        // Call the Model constructor
        parent::_construct();
    }

    function add(
        $date,
        $id_user,
        $id_billing,
        $nb_participant,
        $payment,
        $acompte,
        $ip,
        $prix_total,
        $reste_a_payer,
        $sous_total,
        $taxe,
        $id_voyage,
        $id_info_voyage
        ) {

        $this->db->set('date', $date);
        $this->db->set('id_user', $id_user);
        $this->db->set('id_billing', $id_billing);
        $this->db->set('nb_participant', $nb_participant);
        $this->db->set('payment', $payment);
        $this->db->set('acompte', $acompte);
        $this->db->set('ip', $ip);
        $this->db->set('prix_total', $prix_total);
        $this->db->set('reste_a_payer', $reste_a_payer);
        $this->db->set('sous_total', $sous_total);
        $this->db->set('taxe', $taxe);
        $this->db->set('id_voyage', $id_voyage);
        $this->db->set('id_info_voyage', $id_info_voyage);

        $this->db->insert('order');
        
        return $this->db->insert_id();
    }

}

?>