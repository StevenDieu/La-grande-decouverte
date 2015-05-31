<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Faq extends CI_Model {

    function _construct() {
        // Call the Model constructor
        parent::_construct();
    }

    function add(
        $question,
        $reponse,
        $active
        ) {
        
        $this->db->set('question', $question);
        $this->db->set('reponse', $reponse);
        $this->db->set('active', $active);
        $this->db->insert('faq');

        return $this->db->insert_id();
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

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('faq'); 

        return true;
    }

    function edit(
        $id,
        $question,
        $reponse,
        $active
        ) {
        $data = array(
               'id' => $id,
               'question' => $question,
               'reponse' => $reponse,
               'active' => $active,
            );

        $this->db->where('id', $id);
        $this->db->update('faq', $data);

        return true;
    }
}

?>