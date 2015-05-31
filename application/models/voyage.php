<?php

/**
 * Created by PhpStorm.
 * User: steven
 * Date: 15/03/15
 * Time: 18:47
 */
Class Voyage extends CI_Model {

    private $id;
    private $titre;
    private $phrase_accroche;
    private $duree;
    private $description_first_bloc;
    private $description_second_bloc;
    private $description_third_bloc;
    private $lattitude;
    private $longitude;

    function _construct() {
        parent::_construct();
    }

    function ajouterVoyage() {
        $this->db->insert('voyage', $this);
        $this->id = $this->db->insert_id();
    }

    function editerVoyage() {

        $this->db->where('id', $this->id);
        $this->db->update('voyage', $this);

        return true;
    }

    function getVoyage() {
        $this->db->select('*');
        $this->db->from('voyage');
        $this->db->where('id', $this->id);
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
        $this->db->select('*');
        $this->db->from('voyage');
        $this->db->order_by("titre", "asc");
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
        $this->db->select('*');
        $this->db->from('voyage');
        $this->db->order_by("titre", "asc");

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
        return true;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setPhrase_accroche($phrase_accroche) {
        $this->phrase_accroche = $phrase_accroche;
    }

    function setDuree($duree) {
        $this->duree = $duree;
    }

    function setDescription_first_bloc($description_first_bloc) {
        $this->description_first_bloc = $description_first_bloc;
    }

    function setDescription_second_bloc($description_second_bloc) {
        $this->description_second_bloc = $description_second_bloc;
    }

    function setDescription_third_bloc($description_third_bloc) {
        $this->description_third_bloc = $description_third_bloc;
    }

    function setLattitude($lattitude) {
        $this->lattitude = $lattitude;
    }

    function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

}
