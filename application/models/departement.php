<?php

/**
 * Created by PhpStorm.
 * User: flo
 * Date: 26/05/2015
 * Time: 15:29
 */
Class Departement extends CI_Model {

    function _construct() {
        parent::_construct();
    }

    function getAllDepartements() {
        $this->db->select('*');
        $this->db->from('departements');
        $query = $this->db->get();

        if ($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getDepartement() {
        $this->db->select('*');
        $this->db->from('departements');
        $this->db->where('id', $id);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}