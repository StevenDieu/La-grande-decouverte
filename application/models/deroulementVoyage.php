<?php

Class DeroulementVoyage extends CI_Model {

    private $id;
    private $input = array('titrederoulement', 'texte', 'jour', 'img_deroulement_voyage', 'id_voyage');
    private $data = array();

    function _construct() {
        parent::_construct();
    }

    function addDeroulement() {
        $this->db->insert('deroulement_voyage', $this->data);
        $this->id = $this->db->insert_id();
    }

    function editDeroulement() {
        if ($this->data["img_deroulement_voyage"] == null) {
            unset($this->data["img_deroulement_voyage"]);
        }
        $this->db->where('id', $this->id);
        $this->db->update('deroulement_voyage', $this->data);
        return true;
    }

    function getAllDeroulementByVoyage() {
        $this->db->select('*');
        $this->db->from('deroulement_voyage');
        $this->db->where('id_voyage', $this->data['id_voyage']);
        $this->db->order_by("id", "asc");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getImageDeroulement() {
        $this->db->select('img_deroulement_voyage');
        $this->db->from('deroulement_voyage');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function deleteDeroulement() {
        $this->db->where('id', $this->id);
        $this->db->delete('deroulement_voyage');
        return true;
    }

    function deleteAllDeroulementByVoyage() {
        $this->db->where('id_voyage', $this->data['id_voyage']);
        $this->db->delete('deroulement_voyage');
        return true;
    }

    function setId($id) {
        $this->id = $id;
    }

    function __set($name, $value) {
        $this->data[$name] = $value;
    }

    function getInput() {
        return $this->input;
    }

}
