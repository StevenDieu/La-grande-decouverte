<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Faq extends CI_Model {

    function _construct() {
        parent::_construct();
    }

    private $id;
    private $question;
    private $reponse;
    private $active;

    function setId($id) {
        $this->id = $id;
    }

    function setQuestion($question) {
        $this->question = $question;
    }

    function setReponse($reponse) {
        $this->reponse = $reponse;
    }

    function setActive($active) {
        $this->active = $active;
    }

    function add() {
        $data = array(
            'question' => $this->question,
            'reponse' => $this->reponse,
            'active' => $this->active
        );
        $this->db->insert('faq', $data);
        $this->id = $this->db->insert_id();
    }

    function getAll() {
        $this->db->select('*');
        $this->db->from('faq');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getAllVisible() {
        $this->db->select('*');
        $this->db->from('faq');
        $this->db->where('active', 1);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function get($id){
        $this->db->select('*');
        $this->db->from('faq');
        $this->db->where('id', $id);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function delete() {
        $this->db->where('id', $this->id);
        $this->db->delete('faq'); 

        return true;
    }

    function edit() {
        $data = array(
            'question' => $this->question,
            'reponse' => $this->reponse,
            'active' => $this->active
        );
        $this->db->where('id', $this->id);
        $this->db->update('faq', $data);

        return true;
    }
}

?>