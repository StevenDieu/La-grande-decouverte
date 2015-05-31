<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Cms extends CI_Model {

    function _construct() {
        // Call the Model constructor
        parent::_construct();
    }

    function add(
        $code,
        $label,
        $value,
        $active
        ) {
        
        $this->db->set('code', $code);
        $this->db->set('label', $label);
        $this->db->set('value', $value);
        $this->db->set('active', $active);
        $this->db->insert('cms');

        return $this->db->insert_id();
    }

    function getAll() {
        $this->db->select('*');
        $this->db->from('cms');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getAllVisible() {
        $this->db->select('*');
        $this->db->from('cms');
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
        $this->db->from('cms');
        $this->db->where('id', $id);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getByCode($code){
        $this->db->select('*');
        $this->db->from('cms');
        $this->db->where('code', $code);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('cms'); 

        return true;
    }

    function edit(
        $id,
        $code,
        $label,
        $value,
        $active
        ) {
        $data = array(
               'id' => $id,
               'code' => $code,
               'label' => $label,
               'value' => $value,
               'active' => $active,
            );

        $this->db->where('id', $id);
        $this->db->update('cms', $data);

        return true;
    }
}

?>