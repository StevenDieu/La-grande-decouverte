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
        $this->db->insert('carnetvoyage', $this);
        return $this->db->insert_id();
    }

    function setCarnetVoyage() {
        $data = array(
            'titre' => $this->titre,
        );
        $this->db->where('id', $this->id);
        $this->db->update('carnetvoyage', $data);
        return true;
    }

    function nbrArticle() {
        $this->db->select('*');
        $this->db->from('fichevoyage');
        $this->db->where('id_carnetvoyage', $this->id);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() >= 1) {
            return true;
        } else {
            return false;
        }
    }

    function verifCompte() {
        $this->db->select('*');
        $this->db->from('carnetvoyage');
        $this->db->where('id', $this->id);
        $this->db->where('id_utilisateur', $this->id_utilisateur);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
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

    function getVoyage() {
        $this->db->select('*');
        $this->db->from('carnetvoyage');
        $this->db->where('id_voyage', $this->id_voyage);
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

    function getAllCarnetVoyages($limit, $start) {
        $this->db->select('cv.titre AS cvTitre, v.titre AS vTitre, v.phrase_accroche AS vAccroche');
        $this->db->from('carnetvoyage AS cv');
        $this->db->join('voyage AS v',                    
                        'v.id = cv.id_voyage');

        if ( isset($limit) && isset($start) ) {
            $this->db->limit($limit, $start);
        }

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    //renvoie le nombre de carnets de voyages (pour la pagination)
    function getRowAllCarnetVoyages() {
       $this->db->select('cv.titre AS cvTitre, v.titre AS vTitre, v.phrase_accroche AS vAccroche');
        $this->db->from('carnetvoyage AS cv');
        $this->db->join('voyage AS v',                    
                        'v.id = cv.id_voyage');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
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