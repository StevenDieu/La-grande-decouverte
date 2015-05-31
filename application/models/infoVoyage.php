<?php

/**
 * Created by PhpStorm.
 * User: steven
 * Date: 15/03/15
 * Time: 18:47
 */
Class InfoVoyage extends CI_Model {

    private $id;
    private $date_depart;
    private $date_arrivee;
    private $depart;
    private $arrivee;
    private $formalite;
    private $asavoir;
    private $comprenant;
    private $place_dispo;
    private $prix;
    private $special_price;
    private $tva;
    private $id_voyage;

    function _construct() {
        parent::_construct();
    }

    function addInfoVoyage() {
        $this->db->insert('info_voyage', $this);
        $this->id = $this->db->insert_id();
    }

    function editInfoVoyage() {
        $this->db->where('id', $this->id);
        $this->db->update('info_voyage', $this);
        return true;
    }

    function deleteInfoVoyage() {
        $this->db->where('id', $this->id);
        $this->db->delete('info_voyage');
        return true;
    }

    function getInfoVoyage() {
        $this->db->select('*');
        $this->db->from('info_voyage');
        $this->db->where('id_voyage', $this->id_voyage);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getInfoVoyageById($id) {
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

    function getInfoVoyageMin() {
        $this->db->select('*');
        $this->db->from('info_voyage');
        $this->db->where('id_voyage', $this->id_voyage);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getId() {
        return $this->id;
    }

    function getId_voyage() {
        return $this->id_voyage;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate_depart($date_depart) {
        $this->date_depart = $date_depart;
    }

    function setDate_arrivee($date_arrivee) {
        $this->date_arrivee = $date_arrivee;
    }

    function setDepart($depart) {
        $this->depart = $depart;
    }

    function setArrivee($arrivee) {
        $this->arrivee = $arrivee;
    }

    function setFormalite($formalite) {
        $this->formalite = $formalite;
    }

    function setAsavoir($asavoir) {
        $this->asavoir = $asavoir;
    }

    function setComprenant($comprenant) {
        $this->comprenant = $comprenant;
    }

    function setPlace_dispo($place_dispo) {
        $this->place_dispo = $place_dispo;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setSpecial_price($special_price) {
        $this->special_price = $special_price;
    }

    function setTva($tva) {
        $this->tva = $tva;
    }

    function setId_voyage($id_voyage) {
        $this->id_voyage = $id_voyage;
    }

}
