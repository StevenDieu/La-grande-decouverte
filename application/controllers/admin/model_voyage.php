<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_voyage extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('voyage');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function save() {
        
    }

    public function delete() {
        $id = $this->input->get('id');

        $result = $this->voyage->deleteVoyage($id);

        redirect('admin/voyages/liste', 'refresh');
    }

}
