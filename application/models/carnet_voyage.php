<?php

/**
 * Created by PhpStorm.
 * User: steven
 * Date: 20/04/15
 * Time: 9:50
 */
Class CarnetVoyage extends CI_Model {

    
    function _construct() {
        parent::_construct();
    }

    function addCarnetVoyage() {

        return $this->db->insert_id();
    }

    function setCarnetVoyage() {


        $this->db->update('carnetvoyage', $data);

        return true;
    }

    function getCarnetVoyage($id) {
        $this->db->select('*');
        $this->db->from('carnetvoyage');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getCarnetVoyages() {
        $this->db->select('id, titre, prix');
        $this->db->from('carnetvoyage');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function deleteCarnetVoyage($id) {
        $this->db->where('id', $id);
        $this->db->delete('carnetvoyage'); 

        return true;
    }

}

?>