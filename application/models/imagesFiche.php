<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class ImagesFiche extends CI_Model {

    private $id;
    private $lien;
    private $id_article;
    private $id_carnet_voyage;

    function __construct() {
        parent::__construct();
    }

    function addImage() {
        $this->db->set('lien', $this->lien);
        $this->db->set('id_article', $this->id_article);
        $this->db->set('id_carnet_voyage', $this->id_carnet_voyage);
        $this->db->insert("images_fiche");
        return $this->db->insert_id();
    }

    function getImages() {
        $this->db->select('*');
        $this->db->from("images_fiche");
        $query = $this->db->get();

        if ($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    function getImagesCarnetVoyage() {
        $this->db->select('lien');
        $this->db->from("images_fiche");
        $this->db->where('id_carnet_voyage', $this->id_carnet_voyage);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function deleteImage() {
        $this->db->where('id', $this->id);
        $this->db->delete("images_fiche");
    }
    
    function deleteImageLien() {
        $this->db->where('lien', $this->lien);
        $this->db->delete("images_fiche");
    }
    
    

    function setId($id) {
        $this->id = $id;
    }

    function setLien($lien) {
        $this->lien = $lien;
    }

    function setId_article($id_article) {
        $this->id_article = $id_article;
    }

    function setId_carnet_voyage($id_carnet_voyage) {
        $this->id_carnet_voyage = $id_carnet_voyage;
    }


}
