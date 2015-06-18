<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Faq extends CI_Model {

    function _construct() {
        parent::_construct();
    }

    private $id;
    private $question;
    private $reponse;
    private $active;

    function setId($id) {
        $this->id = $id;
    }

    function getAllVisible() {
        $this->db->select('*');
        $this->db->from('faq');
        $this->db->where('active', 1);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}

?>