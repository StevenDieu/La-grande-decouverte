<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class User extends CI_Model {

    public $id;
    public $password;
    public $login;
    public $mail;

    function __construct() {
        parent::__construct();
    }

    function login($username, $password) {
        $this->db->select('id, login, password');
        $this->db->from('utilisateur');
        $this->db->where('login', $username);
        $this->db->where('banni', '0');
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function loginAdmin($login, $password) {
        $this->db->select('id, login, password');
        $this->db->from('user_admin');
        $this->db->where('login', $login);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function verifPassUser() {
        $this->db->select('id');
        $this->db->from('utilisateur');
        $this->db->where('id', $this->id);
        $this->db->where('password', MD5($this->password));
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    function verifPassAdmin() {
        $this->db->select('id, login, password');
        $this->db->from('user_admin');
        $this->db->where('id', $this->id);
        $this->db->where('password', MD5($this->password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function verifPassSuperAdmin($password) {
        $this->db->select('id, login, password');
        $this->db->from('user_admin');
        $this->db->where('privilege', '0');
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

    function check_user_admin($username) {
        $this->db->select('id');
        $this->db->from('user_admin');
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
        $this->db->set('password', MD5($mdp));
        $this->db->set('mail', $mail);
        $this->db->set('ip', $_SERVER["REMOTE_ADDR"]);
        $this->db->set('banni', "0");
        $this->db->set('security', "2");
        $this->db->set('token', "");
        $this->db->insert('utilisateur');

        return $this->db->insert_id();
    }

    function ajouterUserAdmin($login, $password, $privilege) {
        $this->db->set('login', $login);
        $this->db->set('password', MD5($password));
        $this->db->set('privilege', $privilege);
        $this->db->set('ip', $_SERVER["REMOTE_ADDR"]);
        $this->db->insert('user_admin');

        return $this->db->insert_id();
    }

    function getUserAdmins() {
        $this->db->select('*');
        $this->db->from('user_admin');
        $this->db->where('privilege', '1');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getUsers() {
        $this->db->select('*');
        $this->db->from('utilisateur');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getUserAdmin($id) {
        $this->db->select('*');
        $this->db->from('user_admin');
        $this->db->where('privilege', '1');
        $this->db->where('id', $id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getUser($id) {
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('id', $id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function deleteAdministrateur($id) {
        $data = array(
            'id' => $id,
        );

        $this->db->where('id', $id);
        $this->db->delete('user_admin');

        return true;
    }

    function editAdminUser($id, $login) {
        $data = array(
            'login' => $login,
        );

        $this->db->where('id', $id);
        $this->db->update('user_admin', $data);

        return true;
    }

    function editAdminPassword($id, $password) {
        $data = array(
            'password' => MD5($password),
        );

        $this->db->where('id', $id);
        $this->db->update('user_admin', $data);

        return true;
    }

    function setMdp() {
        $data = array(
            'password' => MD5($this->password),
        );
        $this->db->where('id', $this->id);
        $this->db->update('utilisateur', $data);

        return true;
    }

    function setMail() {
        $data = array(
            'mail' => $this->mail,
        );
        $this->db->where('id', $this->id);
        $this->db->update('utilisateur', $data);

        return true;
    }

    function bannir($id) {
        $data = array(
            'banni' => '1',
        );

        $this->db->where('id', $id);
        $this->db->update('utilisateur', $data);

        return true;
    }

}
