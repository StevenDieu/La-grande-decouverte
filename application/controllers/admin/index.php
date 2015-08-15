<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('userAdmin', '', TRUE);
    }

    public function connexion() {
        if (!$this->session->userdata('logged_admin')) {
            $this->load->helper(array('form'));
            $data["allCss"] = array("admin/connexion");
            $data["alljs"] = array("admin/main");
            $this->load->view('admin/connexion', $data);
        } else {
            redirect('admin/index/dashboard', 'refresh');
        }
    }

    function login() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        if ($this->form_validation->run() == FALSE) {
            $this->connexion();
        } else {
            redirect('admin/index/dashboard', 'refresh');
        }
    }

    function check_database($password) {
        $login = $this->input->post('username');
        $this->userAdmin->setLogin($login);
        $this->userAdmin->setPassword($password);
        $result = $this->userAdmin->loginAdmin();

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->id,
                    'username' => $row->login
                );

                $this->session->set_userdata('logged_admin', $sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

    function dashboard() {
        if ($this->session->userdata('logged_admin')) {
            $session_data = $this->session->userdata('logged_admin');
            $data['username'] = $session_data['username'];
            

            //chargement de toutes les données du dashboard
            $this->load->model('order');
            $this->load->model('user');
            $this->load->model('productView');
            $this->load->model('voyage');
            $data['somme'] = $this->order->getSum();
            $data['moyenne'] = $this->order->getMoyenne();
            $data['order_last'] = $this->order->getLastOrder();
            $data['view'] = $this->productView->getMoreView();
            $data['users'] = $this->user->getLastUser();

            foreach ($data['order_last'] as $order) {
                $this->user->setId($order->id_utilisateur);
                $order->id_utilisateur = $this->user->get();
            }

            foreach ($data['view'] as $view) {
                $this->voyage->setId($view->product_id);
                $view->product_id = $this->voyage->getVoyage();
            }

            foreach ($data['users'] as $user) {
                $this->order->setId_utilisateur($user->id);
                $user->description = $this->order->countOrderByCustomer(); 
            }

            $this->load->templateAdmin('dashboard', $data);

        } else {
            redirect('admin/index/connexion', 'refresh');
        }
    }

    function logout() {
        $this->session->unset_userdata('logged_admin');
        session_destroy();
        redirect('admin/index/connexion', 'refresh');
    }

}
