<?php

/**
 * Created by PhpStorm.
 * User: steven
 * Date: 20/04/15
 * Time: 9:50
 */
Class Article extends CI_Model {

    public $id;
    public $titre;
    public $contenu;
    public $id_carnetvoyage;
    public $id_utilisateur;
    public $visible;

    function __construct() {
        parent::__construct();
    }

    function addArticle() {
        $this->db->insert('fichevoyage', $this);
        return $this->db->insert_id();
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

    function getArticleVisible() {
        $this->db->select('*');
        $this->db->from('fichevoyage');
        $this->db->where('id', $this->id);
        $this->db->where('visible', 1);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
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

}

?>