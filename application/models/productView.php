<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class ProductView extends CI_Model {

    function _construct() {
        // Call the Model constructor
        parent::_construct();
    }

    private $id;
    private $product_id;
    private $view;

    function setProductId($product_id) {
        $this->product_id = $product_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setView($view) {
        $this->view = $view;
    }

    function add() {
        $this->db->set('product_id', $this->product_id);
        $this->db->set('view', '1');
        $this->db->insert('product_view');
        
        return $this->db->insert_id();
    }

    function getByProduct() {
        $this->db->select('*');
        $this->db->from('product_view');
        $this->db->where('product_id', $this->product_id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function edit() {
        $data = array(
           'view' => $this->view
        );

        $this->db->where('product_id', $this->product_id);
        $this->db->update('product_view', $data);

        return true;
    }

}

?>