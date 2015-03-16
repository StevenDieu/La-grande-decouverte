<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Account extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['user'];
            $this->load->view('user/account', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('user/login', 'refresh');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('', 'refresh');
    }
    
    function connexion() {
        $this->load->helper(array('form'));
        $this->load->templateUser('page_connexion');
    }

    function inscription() {
        $this->load->helper(array('form'));
        $this->load->templateUser('page_inscription');
    }

}

?>