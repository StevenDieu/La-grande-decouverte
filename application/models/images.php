<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Images extends CI_Model {

    private $id;
    private $lien;
    private $nom;
    private $emplacement;
    private $id_voyage;

    function __construct() {
        parent::__construct();
    }

    function addImage() {
        $this->db->set('lien', $this->lien);
        $this->db->set('nom', $this->nom);
        $this->db->set('emplacement', $this->emplacement);
        $this->db->set('id_voyage', $this->id_voyage);
        $this->db->insert("images");
        return $this->db->insert_id();
    }

    function getImagesByVoyage() {
        $this->db->select('*');
        $this->db->from('images');
        $this->db->where('id_voyage', $this->id_voyage);
        $query = $this->db->get();

        if ($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getImages() {
        $this->db->select('*');
        $this->db->from("images");
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function deleteImageByVoyage() {
        $this->db->select('lien');
        $this->db->from('images');
        $this->db->where('id_voyage', $this->id_voyage);
        $query = $this->db->get();
        $this->db->where('id_voyage', $this->id_voyage);
        $this->db->delete("images");
        if ($query->num_rows() >= 1) {
            foreach ($query->result() as $result) {
                $lien = str_replace('\\', '/', getcwd()) . "/media/" . $result->lien;
                if (file_exists($lien)) {
                    unlink($lien);
                }
            }
            return true;
        } else {
            return false;
        }
    }

    function deleteImagesByVoyage() {
        if ($this->deleteImageByVoyage()) {
            $this->db->where('id_voyage', $this->id_voyage);
            $this->db->delete("images");
        } else {
            return false;
        }
    }

    function deleteImage() {
        $this->db->where('id', $this->id);
        $this->db->delete("images");
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLien($lien) {
        $this->lien = $lien;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setEmplacement($emplacement) {
        $this->emplacement = $emplacement;
    }

    function setId_voyage($id_voyage) {
        $this->id_voyage = $id_voyage;
    }

}
