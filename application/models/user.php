<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class User extends CI_Model {

    function _construct() {
        // Call the Model constructor
        parent::_construct();
    }

    function login($username, $password) {
        $this->db->select('id, login, password');
        $this->db->from('utilisateur');
        $this->db->where('login', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function check_user($username) {
        $this->db->select('id');
        $this->db->from('utilisateur');
        $this->db->where('login', $username);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    function ajouterUser($nom, $prenom, $user, $mdp, $mail) {
        $this->db->set('nom', $nom);
        $this->db->set('prenom', $prenom);
        $this->db->set('login', $user);
        $this->db->set('password', $mdp);
        $this->db->set('mail', $mail);
        $this->db->set('ip', $_SERVER["REMOTE_ADDR"]);
        $this->db->set('banni', "0");
        $this->db->set('security', "2");
        $this->db->set('token', "");
        $this->db->insert('utilisateur');
        
        return $this->db->insert_id();
    }

}

?>