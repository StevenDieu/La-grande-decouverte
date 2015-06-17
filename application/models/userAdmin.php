<?php

Class UserAdmin extends CI_Model {

    public $id;
    public $login;
    public $password;
    public $privilege;
    public $ip;

    function __construct() {
        parent::__construct();
    }

    function ajouterUserAdmin() {
        $this->db->set('login', $this->login);
        $this->db->set('password', MD5($this->password));
        $this->db->set('privilege', $this->privilege);
        $this->db->set('ip', $_SERVER["REMOTE_ADDR"]);
        $this->db->insert('user_admin');

        return $this->db->insert_id();
    }

    function loginAdmin() {
        $this->db->select('id, login, password');
        $this->db->from('user_admin');
        $this->db->where('login', $this->login);
        $this->db->where('password', MD5($this->password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
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

    function verifPassSuperAdmin() {
        $this->db->select('id, login, password');
        $this->db->from('user_admin');
        $this->db->where('privilege', '0');
        $this->db->where('password', MD5($this->password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getUserAdmin() {
        $this->db->select('*');
        $this->db->from('user_admin');
        $this->db->where('privilege', '1');
        $this->db->where('id', $this->id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
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

    function check_user_admin() {
        $this->db->select('id');
        $this->db->from('user_admin');
        $this->db->where('login', $this->login);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    function editAdminUser() {
        $data = array(
            'login' => $this->login,
        );

        $this->db->where('id', $this->id);
        if ($this->db->update('user_admin', $data) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function editAdminPassword() {
        $data = array(
            'password' => MD5($this->password),
        );

        $this->db->where('id', $this->id);
        if ($this->db->update('user_admin', $data) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function deleteAdministrateur() {
        $this->db->where('id', $this->id);
        $this->db->delete('user_admin');

        return true;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setPrivilege($privilege) {
        $this->privilege = $privilege;
    }

    function setIp($ip) {
        $this->ip = $ip;
    }



}
