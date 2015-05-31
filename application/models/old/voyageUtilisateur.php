<?php

/**
 * Created by PhpStorm.
 * User: steven
 * Date: 20/04/15
 * Time: 9:50
 */
Class VoyageUtilisateur extends CI_Model {

    
    function _construct() {
        parent::_construct();
    }

    function addVoyageUtilisateur() {

        return $this->db->insert_id();
    }

    function setVoyageUtilisateur() {


        $this->db->update('voyageutilisateur', $data);

        return true;
    }

    function getVoyageUtilisateur($id) {
        $this->db->select('*');
        $this->db->from('voyageutilisateur');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getVoyageUtilisateurs($id) {
        $this->db->select('voyage_id');
        $this->db->from('voyageutilisateur');
        $this->db->where('utilisateur_id', $id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function deleteVoyageUtilisateur($id) {
        $this->db->where('id', $id);
        $this->db->delete('voyageutilisateur'); 

        return true;
    }

}

?>