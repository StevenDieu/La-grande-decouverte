<?php

/**
 * Created by PhpStorm.
 * User: steven
 * Date: 20/04/15
 * Time: 9:50
 */
Class Article extends CI_Model {

    private $id;
    private $titre;
    private $contenu;
    private $id_carnetvoyage;
    private $id_utilisateur;
    private $visible;

    function __construct() {
        parent::__construct();
    }

    function addArticle() {
        $this->db->insert('fichevoyage', $this);
        $this->id = $this->db->insert_id();
    }

    function verifCompteArticle() {
        $this->db->select('*');
        $this->db->from('fichevoyage');
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

    function setArticle() {
        $data = array(
            'titre' => $this->titre,
            'contenu' => $this->contenu,
            'visible' => 0
        );
        $this->db->where('id', $this->id);
        $this->db->update('fichevoyage', $data);
        return true;
    }

    function getArticle() {
        $this->db->select('*');
        $this->db->from('fichevoyage');
        $this->db->where('id', $this->id);
        $this->db->where("id_utilisateur", $this->id_utilisateur);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getIdCarnetVoyage() {
        $this->db->select('*');
        $this->db->from('fichevoyage');
        $this->db->where('id', $this->id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getArticlePublic() {
        $this->db->select('*');
        $this->db->from('fichevoyage');
        $this->db->where('id', $this->id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getArticleVisible() {
        $this->db->select('*');
        $this->db->from('fichevoyage');
        $this->db->where('id_carnetvoyage', $this->id_carnetvoyage);
        $this->db->where('visible', 1);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getArticles() {
        $this->db->select('id, titre, contenu, visible');
        $this->db->from('fichevoyage');
        $this->db->where("id_carnetvoyage", $this->id_carnetvoyage);
        $this->db->where("id_utilisateur", $this->id_utilisateur);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function deleteArticle() {
        $this->db->where('id', $this->id);
        $this->db->delete('fichevoyage');
        return true;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getTitre() {
        return $this->titre;
    }

    function getContenu() {
        return $this->contenu;
    }

    function getId_carnetvoyage() {
        return $this->id_carnetvoyage;
    }

    function getId_utilisateur() {
        return $this->id_utilisateur;
    }

    function getVisible() {
        return $this->visible;
    }


}

?>