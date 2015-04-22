<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Administrateur extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('user');
    }

    public function add() {
        $this->load->helper(array('form'));
        $this->load->templateAdmin('/administrateur/add_administrateur');
    }

    public function delete() {
        if (!$this->input->get('id')) {
            redirect('admin/administrateur/liste', 'refresh');
        }
        $data['id'] = $this->input->get('id');
        $this->load->helper(array('form'));
        $this->load->templateAdmin('/administrateur/delete_administrateur', $data);
    }

    public function edit() {
        if (!$this->input->get('id')) {
            redirect('admin/administrateur/liste', 'refresh');
        }
        $data["administrateur"] = $this->user->getUserAdmin($this->input->get('id'));
        $this->load->helper(array('form'));
        $this->load->templateAdmin('/administrateur/edit_administrateur', $data);
    }

    public function liste() {
        $this->load->helper(array('form'));
        $data["administrateurs"] = $this->user->getUserAdmins();
        $this->load->templateAdmin('/administrateur/list_administrateur', $data);
    }

}
