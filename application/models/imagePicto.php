<?php

Class ImagePicto extends CI_Model {

    private $id;
    private $lien;

    function __construct() {
        parent::__construct();
    }

    function addPicto() {
        $this->db->set('lien', $this->lien);
        $this->db->insert("image_picto");
        return $this->db->insert_id();
    }

    function getPicto() {
        $this->db->select('*');
        $this->db->from("image_picto");
        $this->db->where('id', $this->id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getPictos() {
        $this->db->select('*');
        $this->db->from("image_picto");
        $query = $this->db->get();

        if ($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function deletePicto() {
        $this->db->where('id', $this->id);
        if ($this->db->delete("image_picto") >= 1) {
            return true;
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

    function setLien($lien) {
        $this->lien = $lien;
    }

}
