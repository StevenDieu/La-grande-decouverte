<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class OrderGrid extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function add(
        $num,
        $date,
        $nom,
        $prenom,
        $prix_total,
        $reste_a_payer,
        $payment,
        $statut) {

        $this->db->set('numCommande', $num);
        $this->db->set('date', $date);
        $this->db->set('nom', $nom);
        $this->db->set('prenom', $prenom);
        $this->db->set('prix_total', $prix_total);
        $this->db->set('reste_a_payer', $reste_a_payer);
        $this->db->set('payment', $payment);
        $this->db->set('statut', $statut);

        $this->db->insert('grid_order');

        $this->id = $this->db->insert_id();
    }

    function editStatut($id,$statut){
        $data = array(
               'statut' => $statut
            );

        $this->db->where('numCommande', $id);
        $this->db->update('grid_order', $data); 

    }

    function getOrderByNum($num) {
        $this->db->select('*');
        $this->db->from('grid_order');
        $this->db->where('numCommande', $num);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }


}
