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
    public $nom;
    public $prenom;
    public $description;
    public $mail;
    private $token;
    public $banni;
    public $lien_image;
    public $date_inscription;

    function __construct() {
        parent::__construct();
    }

    function ajouterUser() {
        $this->db->set('nom', ucfirst(strtolower($this->nom)));
        $this->db->set('prenom', ucfirst(strtolower($this->prenom)));
        $this->db->set('password', MD5($this->password));
        $this->db->set('mail', $this->mail);
        $this->db->set('date_inscription', $this->date_inscription);
        $this->db->set('ip', $_SERVER["REMOTE_ADDR"]);
        $this->db->set('banni', "0");
        $this->db->set('token', "");
        $this->db->insert('utilisateur');

        return $this->db->insert_id();
    }

    function login() {
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('mail', $this->mail);
        $this->db->where('banni', '0');
        $this->db->where('password', MD5($this->password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function check_mail_unique() {
        $this->db->select('id');
        $this->db->from('utilisateur');
        $this->db->where('mail', $this->mail);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    function generate_token() {
        $token = random_string("alnum", 49);
        $data = array(
            'token' => $token,
        );

        $this->db->where('mail', $this->mail);
        if ($this->db->update('utilisateur', $data) == 1) {
            return $token;
        } else {
            return false;
        }
    }

    function verif_token() {
        $this->db->select('id');
        $this->db->from('utilisateur');
        $this->db->where('mail', $this->mail);
        $this->db->where('token', $this->token);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function check_mail_user() {
        $this->db->select('id');
        $this->db->from('utilisateur');
        $this->db->where('mail', $this->mail);
        $this->db->where('id', $this->id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    function bannir() {
        $data = array(
            'banni' => 1,
        );

        $this->db->where('id', $this->id);
        if ($this->db->update('utilisateur', $data) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function autoriser() {
        $data = array(
            'banni' => 0,
        );

        $this->db->where('id', $this->id);
        if ($this->db->update('utilisateur', $data) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function get() {
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('id', $this->id);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function editBO() {
        $data = array(
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'mail' => $this->mail,
            'banni' => $this->banni
        );
        $this->db->where('id', $this->id);
        $this->db->update('utilisateur', $data);

        return true;
    }

    function getByMail() {
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('mail', $this->mail);

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

    function getUser() {
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('id', $this->id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function setDescription() {
        $data = array(
            'nom' => ucfirst(strtolower($this->nom)),
            'prenom' => ucfirst(strtolower($this->prenom)),
            'description' => $this->description
        );
        $this->db->where('id', $this->id);
        if ($this->db->update('utilisateur', $data) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function setMdp() {
        $data = array(
            'password' => MD5($this->password),
        );
        $this->db->where('id', $this->id);
        if ($this->db->update('utilisateur', $data) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function setMdpMail() {
        $data = array(
            'password' => MD5($this->password),
        );
        $this->db->where('mail', $this->mail);
        if ($this->db->update('utilisateur', $data) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function setImageProfil() {
        $data = array(
            'lien_image' => $this->lien_image,
        );
        $this->db->where('id', $this->id);
        if ($this->db->update('utilisateur', $data) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setLien_image($lien_image) {
        $this->lien_image = $lien_image;
    }

    function setDate_inscription($date_inscription) {
        $this->date_inscription = $date_inscription;
    }

    function setToken($token) {
        $this->token = $token;
    }

    function setBanni($banni) {
        $this->banni = $banni;
    }

    function getLastUser() {
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->order_by("id", "desc");
        $this->db->limit(5);

        $query = $this->db->get();

        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

}
