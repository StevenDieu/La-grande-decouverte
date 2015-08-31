<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Cms extends CI_Model {

    function _construct() {
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

    function get() {
        $this->db->select('*');
        $this->db->from('cms');
        $this->db->where('id', $this->id);
        $this->db->where('active', '1');

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getByCode() {
        $this->db->select('*');
        $this->db->from('cms');
        $this->db->where('code', $this->code);
        $this->db->where('active', '1');

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getImagesCMS() {
        $this->db->select('image');
        $this->db->from('cms');

        $query = $this->db->get();

        if ($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getPageByCode() {
        $this->db->select('*');
        $this->db->from('page_cms');
        $this->db->where('code', $this->code);
        $this->db->where('active', '1');

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}
