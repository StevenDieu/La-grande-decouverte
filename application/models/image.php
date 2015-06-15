<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Image extends CI_Model {

    private $id;
    private $lien;
    private $oldLien;
    private $bd;
    private $nom;

    function __construct() {
        parent::__construct();
    }

    function addImage() {
        $this->db->set('lien', $this->lien);
        $this->db->set('nom', $this->nom);
        $this->db->insert($this->bd);

        return $this->db->insert_id();
    }

    function editImage() {
        $data = array(
            'lien' => $this->lien,
            'nom' => $this->nom
        );
        unlink($this->oldLien);
        $this->db->where('id', $this->id);
        if ($this->db->update($this->bd, $data) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function editImageLien() {
        $data = array(
            'lien' => $this->lien,
        );
        $this->db->where('id', $this->id);
        if ($this->db->update($this->bd, $data) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function editImageNom() {
        $data = array(
            'nom' => $this->nom,
        );
        $this->db->where('id', $this->id);
        if ($this->db->update($this->bd, $data) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function getImage() {
        $this->db->select('*');
        $this->db->from($this->bd);
        $this->db->where('id', $this->id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getImages() {
        $this->db->select('*');
        $this->db->from($this->bd);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function deleteImage() {
        $this->db->where('id', $this->id);
        $this->db->delete($this->bd);
    }

    function getId() {
        return $this->id;
    }

    function getLien() {
        return $this->lien;
    }

    function getNom() {
        return $this->nom;
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

    function setOldLien($oldLien) {
        $this->oldLien = $oldLien;
    }

    function getBd() {
        return $this->bd;
    }

    function setBd($bd) {
        $this->bd = $bd;
    }

}
