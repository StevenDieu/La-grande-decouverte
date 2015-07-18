<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Verification extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->load->library('form_validation');
    }
    
    /****** connexion ****/
    function login() {

        $this->form_validation->set_rules('mail', 'mail', 'trim|callback_requireMail|xss_clean');
        $this->form_validation->set_rules('mdp', 'mdp', 'trim|callback_requireMdp|xss_clean|callback_check_database_login');

        if ($this->form_validation->run() == FALSE) {
            $this->load->templateUser('page_connexion');
        } else {
            redirect('user/account', 'refresh');
        }
    }

    function requireMail($mail){
        if ($mail == '') {
            $this->form_validation->set_message('requireMail', 'Le champ mail est obligatoire.');
            return false;
        }
        return true;
    }

    function requireMdp($mdr){
        if ($mdr == '') {
            $this->form_validation->set_message('requireMail', 'Le champ mot de passe est obligatoire.');
            return false;
        }
        return true;
    }

    function check_database_login($mdp) {
        $this->user->setMail($this->input->post('mail'));
        $this->user->setPassword($mdp);
        $result = $this->user->login();

        if ($result) {
            $sess_array = array();

            foreach ($result as $row) { 
                $sess_array = array(
                    'id' => $row->id,
                    'prenom' => $row->prenom
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', "Le mail ou le mot de passe ne sont pas valides");
            return false;
        }
    }
    /****** fin connexion ****/


    /****** inscription ****/
    function inscription() {

        $this->form_validation->set_rules('nom', 'nom', 'trim|required|xss_clean|callback_check_size_50');
        $this->form_validation->set_rules('prenom', 'prenom', 'trim|required|xss_clean|callback_check_size_50');
        $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean|callback_check_email|callback_check_email_unique');
        $this->form_validation->set_rules('cemail', 'cemail', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mdp', 'mdp', 'trim|required|xss_clean|callback_check_size|callback_check_size');
        $this->form_validation->set_rules('cmdp', 'cmdp', 'trim|required|xss_clean|callback_check_mdp');

        if ($this->form_validation->run() == FALSE) {
            $this->load->templateUser('page_inscription');
        } else {
            $this->user->setNom($this->input->post('nom'));
            $this->user->setPrenom($this->input->post('prenom'));
            $this->user->setPassword($this->input->post('mdp'));
            $this->user->setMail($this->input->post('email'));
            $this->user->setDate_inscription(date("Y-m-d"));

            $result = $this->user->ajouterUser();
            if ($result != 0) {
                $sess_array = array(
                    'id' => $result,
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            redirect('user/account', 'refresh');
        }
    }

    function check_email() {
        $email = $this->input->post('email');
        $cemail = $this->input->post('cemail');

        if ($email == $cemail) {
            return true;
        }
        $this->form_validation->set_message('check_email', 'Les adresses mails ne sont pas identiques');

        return false;
    }

    function check_email_unique() {
        $this->user->setMail($this->input->post('email'));
        $result = $this->user->check_mail_unique();


        if ($result) {
            $this->form_validation->set_message('check_email_unique', 'Le mail est déjà utilisé.');
            return false;
        }

        return true;
        
    }
    function check_size_50($valeur) {
        if (strlen($valeur) <= 50) {
            return true;
        }
        if ('%s' == "prenom") {
            $label = "Prenom";
        } else {
            $label = "Nom";
        }
        $this->form_validation->set_message('check_size_50', $label . ' doit être inférieur à 50 caractères');

        return false;
    }
    /****** fin inscription ****/




    function changeEmail() {
        if (!$this->session->userdata('logged_in')) {
            echo "co";
            die;
        }
        $this->form_validation->set_rules('mdp', 'mdp', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean|callback_change_email');
        if ($this->form_validation->run() == FALSE) {
            echo "0";
        } else {
            echo "1";
        }
    }

    function changeMdp() {
        if (!$this->session->userdata('logged_in')) {
            echo "co";
            die;
        }
        $this->form_validation->set_rules('mdp', 'mdp', 'trim|required|xss_clean');
        $this->form_validation->set_rules('nmdp', 'nmdp', 'trim|required|xss_clean|callback_change_mdp');
        if ($this->form_validation->run() == FALSE) {
            echo "0";
        } else {
            echo "1";
        }
    }

    function changeDescription() {
        if (!$this->session->userdata('logged_in')) {
            echo "co";
            die;
        }
        $this->form_validation->set_rules('nom', 'mdp', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prenom', 'nmdp', 'trim|required|xss_clean');
        $this->form_validation->set_rules('description', 'description', 'trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            echo "0";
        } else {
            $this->user->nom = $this->input->post('nom');
            $this->user->prenom = $this->input->post('prenom');
            $this->user->description = $this->input->post('description');
            $this->user->id = $this->session->userdata('logged_in')["id"];
            if ($this->user->setDescription()) {
                $sess_array = array(
                    'id' => $this->user->id,
                    'nom' => $this->user->nom,
                    'prenom' => $this->user->prenom,
                    'description' => $this->user->description,
                    'id_image' => $this->session->userdata('logged_in')["id_image"],
                    'lien_image' => $this->session->userdata('logged_in')["lien_image"],
                    'nom_image' => $this->session->userdata('logged_in')["nom_image"],
                    'user' => $this->session->userdata('logged_in')["user"]
                );
                $this->session->set_userdata('logged_in', $sess_array);
                echo "1";
            } else {
                echo "0";
            }
        }
    }

    function uploadProfile() {
        if (!$this->session->userdata('logged_in')) {
            echo 'co';
            die;
        }
        $this->load->view('user/myaccount/uploadImageProfile.php');
    }





    function check_size($valeur) {
        if (strlen($valeur) >= 6 && strlen($valeur) <= 50) {
            return true;
        }
        if ('%s' == "mdp") {
            $label = "Mot de passe";
        } else {
            $label = "Nom d'utilisateur";
        }
        $this->form_validation->set_message('check_size', $label . ' doit être compris entre 6 et 50 caractères');
        return false;
    }

    



    function check_mdp() {
        $mdp = $this->input->post('mdp');
        $cmdp = $this->input->post('cmdp');

        if ($mdp == $cmdp) {
            return true;
        }
        $this->form_validation->set_message('check_mdp', 'Les mots de passe ne sont pas identiques');

        return false;
    }


    function check_database_user($user) {
        $result = $this->user->check_user($user);
        if ($result) {
            $this->form_validation->set_message('check_database', "Nom d'utilisateur déja utiliser");
            return false;
        } else {
            return true;
        }
    }

    function change_email($email) {
        $this->user->id = $this->session->userdata('logged_in')["id"];
        $this->user->password = $this->input->post('mdp');
        $this->user->mail = $email;

        if ($this->user->verifPassUser()) {
            if ($this->user->setMail()) {
                return true;
            }
        }
        return false;
    }

    function change_mdp($nmdp) {
        $this->user->password = $this->input->post('mdp');
        $this->user->id = $this->session->userdata('logged_in')["id"];
        if ($this->user->verifPassUser()) {
            $this->user->password = $nmdp;
            if ($this->user->setMdp()) {
                return true;
            }
        }
        return false;
    }

    function changeDecrition() {
        $this->user->password = $this->input->post('mdp');
        $this->user->id = $this->session->userdata('logged_in')["id"];
        if ($this->user->verifPassUser()) {
            $this->user->password = $nmdp;
            if ($this->user->setMdp()) {
                return true;
            }
        }
        return false;
    }

}
