<?php

Class Commentaire extends CI_Model {

    private $id;
    private $name;
    private $mail;
    private $commentaire;
    private $active;
    private $date_creation;
    private $signal;
    private $id_article;
    private $limit;
    private $start;

    function _construct() {
        parent::_construct();
    }

    function addComment() {
        $this->db->set('name', $this->name);
        $this->db->set('mail', $this->mail);
        $this->db->set('commentaire', $this->commentaire);
        $this->db->set('active', '1');
        $this->db->set('signal', '0');
        $this->db->set('id_article', $this->id_article);
        $this->db->insert("commentaire");
        return $this->db->insert_id();
    }

    function countAllCommentArticle() {
        $this->db->select('id');
        $this->db->from('commentaire');
        $this->db->where('active', '1');
        $this->db->where('id_article', $this->id_article);

        return $this->db->count_all_results();
    }

    function getAllComments() {
        $this->db->select('*');
        $this->db->from('commentaire');
        $this->db->where('active', '1');
        $this->db->where('id_article', $this->id_article);
        $this->db->order_by("id", "desc");
        if (isset($this->limit) && isset($this->start)) {
            $this->db->limit($this->limit, $this->start);
        }

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getLastComs() {
        $this->db->select('*');
        $this->db->from('commentaire');
        $this->db->order_by("id", "desc");
        $this->db->limit(5);

        $query = $this->db->get();

        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getLastComsSignale() {
        $this->db->select('*');
        $this->db->from('commentaire');
        $this->db->where('signal', '1');
        $this->db->order_by("id", "desc");
        $this->db->limit(5);

        $query = $this->db->get();

        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function setSignalArticle() {
        $data = array(
            'signal' => $this->signal,
        );

        $this->db->where('id', $this->id);
        if ($this->db->update('commentaire', $data) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function setActiveArticle() {
        
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }

    function setActive($active) {
        $this->active = $active;
    }

    function setDate_creation($date_creation) {
        $this->date_creation = $date_creation;
    }

    function setSignal($signal) {
        $this->signal = $signal;
    }

    function setLimit($limit) {
        $this->limit = $limit;
    }

    function setStart($start) {
        $this->start = $start;
    }

    function setId_article($id_article) {
        $this->id_article = $id_article;
    }

}
