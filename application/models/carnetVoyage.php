<?php

/**
 * Created by PhpStorm.
 * User: steven
 * Date: 20/04/15
 * Time: 9:50
 */
Class CarnetVoyage extends CI_Model {

    public $id;
    public $titre;
    public $id_voyage;
    public $id_utilisateur;

    function __construct() {
        parent::__construct();
    }

    function addCarnetVoyage() {
        $this->db->insert('carnetvoyage',$this);
        return $this->db->insert_id();
    }

    function setCarnetVoyage() {
        $this->db->where('id', $this->id);
        $this->db->update('carnetvoyage', $this);
        return true;
    }

    function getCarnetVoyage() {
        $this->db->select('*');
        $this->db->from('carnetvoyage');
        $this->db->where('id', $this->id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getCarnetVoyages() {
        $this->db->select('id, titre');
        $this->db->from('carnetvoyage');
        $this->db->where("id_utilisateur", $this->id_utilisateur);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function deleteCarnetVoyage() {
        $this->db->where('id', $this->id);
        $this->db->delete('carnetvoyage');
        return true;
    }

}

?>