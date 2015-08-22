<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Pays extends CI_Model {

    private $id;
    private $input = array('capital', 'villes_principales', 'religion', 'nombre_habitant', 'monnaie', 'fete', 'langue_officielle', 'meteo_temperature', 'drapeau', 'meteo_image', 'id_continent', 'id_voyage');
    private $data = array();

    function __construct() {
        parent::__construct();
    }

    function addPays() {
        
        if ($this->data["meteo_image"] == null) {
            unset($this->data["meteo_image"]);
        }

        if ($this->data["drapeau"] == null) {
            unset($this->data["drapeau"]);
        }


        $this->db->insert("pays", $this->data);
        return $this->db->insert_id();
    }

    function editerPays() {


        if ($this->data["meteo_image"] == null) {
            unset($this->data["meteo_image"]);
        }

        if ($this->data["drapeau"] == null) {
            unset($this->data["drapeau"]);
        }

        $this->db->where('id_voyage', $this->data["id_voyage"]);
        $this->db->update("pays", $this->data);
        return true;
    }

    function getPaysByVoyage() {
        $this->db->select('*');
        $this->db->from("pays");
        $this->db->where('id_voyage', $this->data["id_voyage"]);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function deletePaysByVoyage() {
        $this->db->where('id_voyage', $this->data["id_voyage"]);
        $this->db->delete("pays");
    }

    function deletePays() {
        $this->db->where('id', $this->id);
        $this->db->delete("pays");
    }

    function setId($id) {
        $this->id = $id;
    }

    function getInput() {
        return $this->input;
    }

    function __set($name, $value) {
        $this->data[$name] = $value;
    }

}
