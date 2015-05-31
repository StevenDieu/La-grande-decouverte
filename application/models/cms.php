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

    private $id;
    private $code;
    private $label;
    private $value;
    private $active;

    function setId($id) {
        $this->id = $id;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setLabel($label) {
        $this->label = $label;
    }

    function setValue($value) {
        $this->value = $value;
    }

    function setActive($active) {
        $this->active = $active;
    }

    function add() {
        $data = array(
            'code' => $this->code,
            'label' => $this->label,
            'value' => $this->value,
            'active' => $this->active
        );
        $this->db->insert('cms', $data);
        $this->id = $this->db->insert_id();
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

    function get($id) {
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

    function getByCode($code) {
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

    function delete() {
        $this->db->where('id', $this->id);
        $this->db->delete('cms');
        return true;
    }

    function editerVoyage() {

        $this->db->where('id', $this->id);
        $this->db->update('cms', $this);

        return true;
    }

}

?>