<?php

/**
 * Created by PhpStorm.
 * User: steven
 * Date: 15/03/15
 * Time: 18:47
 */
Class Voyage extends CI_Model {

    private $id;
    private $input = array('titre', 'phrase_accroche', 'phrase_accroche_slider', 'duree', 'description_first_bloc', 'description_second_bloc', 'description_third_bloc', 'lattitude', 'longitude', 'image_sous_slider');
    private $data = array();

    function __construct() {
        parent::__construct();
    }

    function addVoyage() {
        $this->db->insert('voyage', $this->data);
        return $this->db->insert_id();
    }

    function editerVoyage() {
        if ($this->data["image_sous_slider"] == null) {
            unset($this->data["image_sous_slider"]);
        }
        $this->db->where('id', $this->id);
        $this->db->update('voyage', $this->data);

        return true;
    }

    function getVoyage() {
        $this->db->select('*');
        $this->db->from('voyage');
        //$this->db->where('id', $this->id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getVoyages() {
        $this->db->select('id, titre');
        $this->db->from('voyage');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getVoyagesHome() {
        $this->db->select('id,titre,description_first_bloc');
        $this->db->from('voyage');
        $this->db->order_by("id", "desc");
        $this->db->limit(4);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getVoyagesCustomer() {
        $this->db->select('id, titre, prix');
        $this->db->from('voyage');
        $this->db->where('id', $this->id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getAllVoyages($limit, $start) {

        $this->db->_protect_identifiers=false;  //empeche l'ajout de quotes ( `` ) automatique
        $this->db->select('v.id as vId, v.titre as titre, v.phrase_accroche, phrase_accroche, i.nom as nom, i.lien as lien');
        $this->db->from('voyage AS v');
        $this->db->join("images AS i","emplacement = 'image_slider' AND i.id_voyage = v.id", "inner");
        $this->db->order_by("titre", "asc");
        $this->db->_protect_identifiers = TRUE; //remet l'ajout de quotes automatique
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

    function getRowAllVoyages() {

        $this->db->_protect_identifiers=false;  //empeche l'ajout de quotes ( `` ) automatique
        $this->db->select('*');
        $this->db->from('voyage');
        $this->db->join("images","emplacement = 'image_slider' AND images.id = voyage.id", "inner");
        $this->db->order_by("titre", "asc");    
        $this->db->_protect_identifiers = TRUE; //remet l'ajout de quotes automatique

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return false;
        }
    }

    function deleteVoyage() {
        $this->db->where('id', $this->id);
        $this->db->delete('voyage');
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
