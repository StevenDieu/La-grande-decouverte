<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Participant extends CI_Model {

    function _construct() {
        // Call the Model constructor
        parent::_construct();
    }

    function add(
        $nom,
        $prenom,
        $info,
        $dob,
        $id_order
        ) {

        $this->db->set('nom', $nom);
        $this->db->set('prenom', $prenom);
        $this->db->set('info', $info);
        $this->db->set('dob', $dob);
        $this->db->set('id_order', $id_order);

        $this->db->insert('participants');
        
        return $this->db->insert_id();
    }

}

?>