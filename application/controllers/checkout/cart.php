<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
    }

    public function onepage() {

	    $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');
	    $this->form_validation->set_rules('idInfo', 'idInfo', 'trim|xss_clean');

	    if ($this->form_validation->run() == FALSE) {
            redirect('pages', 'refresh');
        } else {
        	$id = $this->input->post('id');
            $idInfo = $this->input->post('idInfo');
        }

        $data["allCss"] = array("checkout/style","checkout/responsive","checkout/uniform.default");
        $data["alljs"] = array("checkout/custom");
        $this->load->templateCheckout('/onepage', $data);
    }

    public function billing(){
        $this->load->view('checkout/step/billing');
    }
    
    public function payment(){
        $this->load->view('checkout/step/payment');
    }

    public function recap(){
        $this->load->view('checkout/step/recap');
    }

    public function participants(){
        $this->load->view('checkout/step/participants');
    }

    public function inscription(){
        $this->load->view('checkout/step/inscription');
    }

    public function login(){

        $this->form_validation->set_rules('login', 'login', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mdp', 'mdp', 'trim|required|xss_clean|callback_check_database_login');

        if ($this->form_validation->run() == FALSE) {
            $res = array(
                'retour' => 'error',
                'message' => 'login ou mot de passe invalide'
            );
        } else {
            $login = $this->input->post('login');
            $mdp = $this->input->post('mdp');

            $result = $this->user->login($login, $mdp);
            if ($result != 0) {
                $sess_array = array(
                    'id' => $result[0]->id,
                    'user' => $login
                );
                $this->session->set_userdata('logged_in', $sess_array);
                $res = array(
                    'retour' => 'connexion',
                    'message' => "L'utilisateur est connecte"
                );
            }else{
                $res = array(
                    'retour' => 'error',
                    'message' => 'login ou mot de passe invalide'
                );
            }   
        }

        echo json_encode($res);

    }

    public function create(){

        $this->form_validation->set_rules('nom', 'nom', 'trim|required|xss_clean|callback_check_size_50');
        $this->form_validation->set_rules('prenom', 'prenom', 'trim|required|xss_clean|callback_check_size_50');
        $this->form_validation->set_rules('login', 'login', 'trim|required|xss_clean|callback_check_database_user|callback_check_size');
        $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('confirmer_email', 'confirmer_email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mdp', 'mdp', 'trim|required|xss_clean|callback_check_size|callback_check_size');
        $this->form_validation->set_rules('confirmer_mdp', 'confirmer_mdp', 'trim|required|xss_clean|callback_check_mdp');

        if ($this->form_validation->run() == FALSE) {
            $res = array(
                    'retour' => 'error',
                    'message' => "L'utilisateur n'a pas pu etre créé"
            );
        } else {
            $nom = $this->input->post('nom');
            $prenom = $this->input->post('prenom');
            $login = $this->input->post('login');
            $mdp = $this->input->post('mdp');
            $mail = $this->input->post('email');
            $result = $this->user->ajouterUser($nom, $prenom, $login, $mdp, $mail);
            if ($result != 0) {
                $sess_array = array(
                    'id' => $result,
                    'user' => $login,
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'description' => "",
                    'id_image' => "",
                    'lien_image' => "",
                    'nom_image' => ""
                );
                $this->session->set_userdata('logged_in', $sess_array);
                $res = array(
                    'retour' => 'creation',
                    'message' => "L'utilisateur est créé"
                );
            }
        }
        echo json_encode($res);
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
        $cmdp = $this->input->post('confirmer_mdp');

        if ($mdp == $cmdp) {
            return true;
        }
        $this->form_validation->set_message('check_mdp', 'Les mots de passe ne sont pas identiques');

        return false;
    }
}
