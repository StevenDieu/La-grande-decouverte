<?php

Class ImageFiche extends CI_Model {

    private $id;
    private $id_fichevoyage;
    private $oldNom;
    private $nom;

    function __construct() {
        parent::__construct();
    }

    function addImageFiche() {
        $this->db->set('id_fichevoyage', $this->id_fichevoyage);
        $this->db->set('nom', $this->nom);
        $this->db->insert('image_fiche');

        return $this->db->insert_id();
    }

    function editImageFiche() {
        $data = array(
            'id_fichevoyage' => $this->id_fichevoyage,
            'nom' => $this->nom
        );
        unlink($this->oldNom);
        $this->db->where('id', $this->id);
        if ($this->db->update('image_fiche', $data) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function editImageFicheIdFicheVoyage() {
        $data = array(
            'id_fichevoyage' => $this->id_fichevoyage,
        );
        $this->db->where('id', $this->id);
        if ($this->db->update('image_fiche', $data) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function editImageFicheNom() {
        $data = array(
            'nom' => $this->nom,
        );
        $this->db->where('id', $this->id);
        if ($this->db->update('image_fiche', $data) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function getImageFiche() {
        $this->db->select('*');
        $this->db->from('image_fiche');
        $this->db->where('id', $this->id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function deleteImageFiche() {
        $this->db->where('id', $this->id);
        $this->db->delete('image_fiche');
    }

    function deleteImageFicheIdFicheVoyage() {
        $this->db->where('id_fichevoyage', $this->id_fichevoyage);
        $this->db->delete('image_fiche');
    }

    function getId() {
        return $this->id;
    }

    function getId_fichevoyage() {
        return $this->id_fichevoyage;
    }

    function setId_fichevoyage($id_fichevoyage) {
        $this->id_fichevoyage = $id_fichevoyage;
    }

    function setOldNom($oldNom) {
        $this->oldNom = $oldNom;
    }

    function getNom() {
        return $this->nom;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

}
