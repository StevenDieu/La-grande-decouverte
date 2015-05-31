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

    function ajouterActualite() {
        $this->db->insert('actualite',$this);

        return $this->db->insert_id();
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

    function editActualite() {
        $this->db->where('id', $this->id);
        $this->db->update('actualite', $this);

        return true;
    }

    function deleteActualite() {
        $this->db->where('id', $this->id);
        $this->db->delete('actualite');
        return true;
    }

}

?>