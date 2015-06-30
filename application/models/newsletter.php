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

    private $mail;
    private $type_client;
    private $date_inscription;
    private $nom;
    private $prenom;
    private $statut;


    function setMail($mail) {
        $this->mail = $mail;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate($date_inscription) {
        $this->date_inscription = $date_inscription;
    }

    function setStatut($statut) {
        $this->statut = $statut;
    }

    function ajouterNewsletter() {
        $this->db->set('mail', $this->mail);
        $this->db->set('date_inscription', $this->date_inscription);
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

    function editNewsletter() {
        $data = array(
               'mail' => $this->mail,
               'statut' => $this->statut
            );

        $this->db->where('id', $this->id);
        $this->db->update('newsletter', $data);

        return true;
    }

    function check_mail_unique() {
        $this->db->select('id');
        $this->db->from('newsletter');
        $this->db->where('mail', $this->mail);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
}

?>