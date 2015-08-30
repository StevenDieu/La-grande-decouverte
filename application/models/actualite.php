<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Actualite extends CI_Model {

    private $id;
    private $titre;
    private $desciption;
    private $date;

    function _construct() {
        // Call the Model constructor
        parent::_construct();
    }

    function getActualite() {
        $this->db->select('*');
        $this->db->from('actualite');
        $this->db->where('id', $this->id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getActualitesListe($limit,$start) {
        $this->db->select('*');
        $this->db->from('actualite');
        
        if (isset($limit) && isset($start)) {
            $this->db->limit($limit, $start);
        }
        
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getActualites() {
        $this->db->select('*');
        $this->db->from('actualite');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getCount() {
        $this->db->select('*');
        $this->db->from('actualite');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function getActualitesHome() {
        $this->db->select('*');
        $this->db->from('actualite');
        $this->db->order_by("id", "desc");
        $this->db->limit(3);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setDesciption($desciption) {
        $this->desciption = $desciption;
    }

    function setDate($date) {
        $this->date = $date;
    }

}

?>