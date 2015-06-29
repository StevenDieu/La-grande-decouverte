<?php

Class PictoVoyage extends CI_Model {

    private $id_picto;
    private $id_voyage;

    function __construct() {
        parent::__construct();
    }

    function addPictoVoyage() {
        $this->db->set('id_picto', $this->id_picto);
        $this->db->set('id_voyage', $this->id_voyage);
        $this->db->insert("picto_voyage");
        return $this->db->insert_id();
    }

    function getPictoVoyages() {
        $this->db->select('*');
        $this->db->from("image_picto as ip");
        $this->db->join('picto_voyage AS pv', 'ip.id = pv.id_picto');
        $this->db->where('pv.id_voyage', $this->id_voyage);

        $query = $this->db->get();

        if ($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function deletePictoVoyage() {
        $this->db->where('id_voyage', $this->id_voyage);
        if ($this->db->delete("picto_voyage") >= 1) {
            return true;
        } else {
            return false;
        }
    }

    function setId_image_picto($id_picto) {
        $this->id_picto = $id_picto;
    }

    function setId_voyage($id_voyage) {
        $this->id_voyage = $id_voyage;
    }

}
