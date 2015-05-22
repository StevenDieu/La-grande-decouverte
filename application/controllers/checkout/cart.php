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
}
