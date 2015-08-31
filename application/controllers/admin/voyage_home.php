<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voyage_home extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/connexion', 'refresh');
        }

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
    }

    public function liste() {
        $crud = new grocery_CRUD();
        $crud->set_table('voyage_home');
        $crud->set_subject('Voyage homepage');
        $crud->required_fields('rang','id_voyage','active');
        $output = $crud->render();
        $this->_example_output($output);
    }

    public function _example_output($output = null)
    {
        $this->load->templateAdmin('voyagehome/list', $output);
    }

    public function offices()
    {
        $output = $this->grocery_crud->render();
        $this->_example_output($output);
    }

    public function index()
    {
        $this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
    }
}
