<?php

Class Continents extends CI_Model {

    private $id;
    private $name;
    private $tag;

    function _construct() {
        parent::_construct();
    }

    function addContinent() {
        $this->db->insert('continent', $this);
        return $this->db->insert_id();
    }

    function getContinent() {
        $this->db->select('*');
        $this->db->from('continent');
        $this->db->where('id', $this->id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getContinents() {
        $this->db->select('*');
        $this->db->from('continent');
        $this->db->order_by("tag", "asc");
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function editContinent() {
        $this->db->where('id', $this->id);
        $this->db->update('continent', $this);
        return true;
    }

    function deleteContinent() {
        $this->db->where('id', $this->id);
        $this->db->delete('continent');

        return true;
    }

    function getNomContinent() {
        $this->db->select('name');
        $this->db->from('continent');
        $this->db->where('id', $this->id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getName() {
        return $this->name;
    }

    function getTag() {
        return $this->tag;
    }

}
