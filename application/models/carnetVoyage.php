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
    private $prive;

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

    function setCarnetVoyagePrive() {
        if ($this->prive == 1) {
            $this->prive = 0;
        } else {
            $this->prive = 1;
        }
        $data = array(
            'prive' => $this->prive,
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

    function getImagesCarnetVoyage() {
        $this->db->select('image_slider_1,image_slider_2,image_slider_3');
        $this->db->from('carnetvoyage AS cv');
        $this->db->join('voyage AS v', 'v.id = cv.id_voyage');
        $this->db->where('cv.id', $this->id);
        $query = $this->db->get();

        if ($query->num_rows() >= 1) {
            return $query->result();
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

    function getCarnetVoyagesHome() {
        $this->db->select('image_slider_1,image_slider_2,image_slider_3,cv.id AS cvId,cv.titre AS cvTitre, v.titre AS vTitre, v.phrase_accroche AS vAccroche');
        $this->db->from('carnetvoyage AS cv');
        $this->db->join('voyage AS v', 'v.id = cv.id_voyage');
        $this->db->order_by("v.id", "desc");
        $this->db->where('prive', '0');
        $this->db->limit(3);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getVoyageProduit() {
        $this->db->select('cv.id AS cvId,cv.titre AS cvTitre, v.titre AS vTitre, v.phrase_accroche AS vAccroche');
        $this->db->from('carnetvoyage AS cv');
        $this->db->join('voyage AS v', 'v.id = cv.id_voyage');
        $this->db->order_by("v.id", "desc");
        $this->db->where('prive', '0');
        $this->db->where('cv.id_voyage', $this->id_voyage);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
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
        $this->db->select("id, titre,prive");
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
        $this->db->select('cv.id AS cvId,cv.titre AS cvTitre, v.titre AS vTitre, v.phrase_accroche AS vAccroche');
        $this->db->from('carnetvoyage AS cv');
        $this->db->join('voyage AS v', 'v.id = cv.id_voyage');
        $this->db->where('prive', '0');
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

    //renvoie le nombre de carnets de voyages (pour la pagination)
    function getRowAllCarnetVoyages() {
        $this->db->select('cv.titre AS cvTitre, v.titre AS vTitre, v.phrase_accroche AS vAccroche');
        $this->db->from('carnetvoyage AS cv');
        $this->db->join('voyage AS v', 'v.id = cv.id_voyage');

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

    function setId($id) {
        $this->id = $id;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setId_voyage($id_voyage) {
        $this->id_voyage = $id_voyage;
    }

    function setId_utilisateur($id_utilisateur) {
        $this->id_utilisateur = $id_utilisateur;
    }

    function setPrive($prive) {
        $this->prive = $prive;
    }

}

?>