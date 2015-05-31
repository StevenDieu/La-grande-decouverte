<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Newsletter extends CI_Model {

    function _construct() {
        // Call the Model constructor
        parent::_construct();
    }

    function ajouterNewsletter($mail) {
        $this->db->set('mail', $mail);
        $this->db->insert('newsletter');
        
        return $this->db->insert_id();
    }

    function getNewsletter($id) {
        $this->db->select('*');
        $this->db->from('newsletter');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getNewsletters() {
        $this->db->select('*');
        $this->db->from('newsletter');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function editNewsletter($id,$mail) {
        $data = array(
               'mail' => $mail,
            );

        $this->db->where('id', $id);
        $this->db->update('newsletter', $data);

        return true;
    }

    function deleteNewsletter($id) {
        $data = array(
               'id' => $id,
            );

        $this->db->where('id', $id);
        $this->db->delete('newsletter'); 

        return true;
    }
}

?>