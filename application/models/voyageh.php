<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Voyageh extends CI_Model {

    function _construct() {
        // Call the Model constructor
        parent::_construct();
    }

    function getIdHome() {
        $this->db->select('*');
        $this->db->from('voyage_home');
        $this->db->where('active', 1);
        $this->db->order_by("rang", "asc"); 
        $this->db->limit(4);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

}

?>