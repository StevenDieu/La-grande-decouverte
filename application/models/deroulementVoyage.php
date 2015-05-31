<?php

Class DeroulementVoyage extends CI_Model {

    private $id;
    private $titre;
    private $texte;
    private $jour;
    private $id_voyage;
    private $id_images;

    function _construct() {
        parent::_construct();
    }

    function addDeroulement() {
        $this->db->insert('deroulement_voyage', $this);
        $this->id = $this->db->insert_id();
    }

    function editDeroulement() {
        $this->db->where('id', $this->id);
        $this->db->update('deroulement_voyage', $this);
        return true;
    }

    function deleteDeroulement() {
        $this->db->where('id', $this->id);
        $this->db->delete('deroulement_voyage');

        return true;
    }

    function deleteDeroulementByidvoyage() {
        $this->db->where('id', $this->id);
        $this->db->delete('deroulement_voyage');

        return true;
    }

    function getAllDeroulementByVoyage() {
        $this->db->select('*');
        $this->db->from('info_voyage');
        $this->db->where('id_voyage', $this->id_voyage);
        $this->db->order_by("jour", "asc");

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

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setTexte($texte) {
        $this->texte = $texte;
    }

    function setJour($jour) {
        $this->jour = $jour;
    }

    function setId_voyage($id_voyage) {
        $this->id_voyage = $id_voyage;
    }

    function setId_images($id_images) {
        $this->id_images = $id_images;
    }

}
