<?php

/**
 * Created by PhpStorm.
 * User: steven
 * Date: 15/03/15
 * Time: 18:47
 */
Class InfoVoyage extends CI_Model {

    private $id;
    private $input = array('date_depart', 'date_arrivee', 'depart', 'arrivee', 'formalite', 'asavoir', 'comprenant', 'place_dispo', 'prix', 'special_price', 'tva', 'id_voyage');
    private $data = array();

    function __construct() {
        parent::__construct();
    }

    function addInfoVoyage() {
        $this->db->insert('info_voyage', $this->data);
        $this->id = $this->db->insert_id();
    }

    function editInfoVoyage() {
        $this->db->where('id', $this->id);
        $this->db->update('info_voyage', $this);
    }

    function getInfoVoyageByVoyage() {
        $this->db->select('*');
        $this->db->from('info_voyage');
        $this->db->where('id_voyage', $this->data["id_voyage"]);


        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getInfoVoyageById() {
        $this->db->select('*');
        $this->db->from('info_voyage');
        $this->db->where('id', $this->id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getPlaceDispoById() {
        $this->db->select('place_dispo');
        $this->db->from('info_voyage');
        $this->db->where('id', $this->id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function updateQuantitePlace($place){
        $data = array(
               'place_dispo' => $place
            );

        $this->db->where('id', $this->id);
        $this->db->update('info_voyage', $data); 
    }

    function getInfoVoyageMin() {
        $this->db->select('*');
        $this->db->from('info_voyage');
        $this->db->where('id_voyage', $this->data["id_voyage"]);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function deleteInfoVoyageByVoyage() {
        $this->db->where('id_voyage', $this->data["id_voyage"]);
        $this->db->delete('info_voyage');
    }

    function deleteInfoVoyage() {
        $this->db->where('id', $this->id);
        $this->db->delete('info_voyage');
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
