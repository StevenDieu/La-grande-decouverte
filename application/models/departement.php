<?php

/**
 * Created by PhpStorm.
 * User: flo
 * Date: 26/05/2015
 * Time: 15:29
 */
Class Departements extends CI_Model {

    function _construct() {
        parent::_construct();
    }


    function getAllDepartements() {
        $this->db->select('*');
        $this->db->from('departements');
        $this->db->order_by('label','asc');
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}