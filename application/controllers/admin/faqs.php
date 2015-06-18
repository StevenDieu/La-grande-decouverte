<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Faqs extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('faq');

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
    }

    public function liste() {
        $crud = new grocery_CRUD();

        $crud->set_table('faq');
        $crud->set_subject('question FAQ');
        $crud->display_as('reponse','Réponse');
        $crud->display_as('active','Activé');
        //$crud->unset_columns('productDescription');

        $crud->fields('question','reponse','active');
        $crud->required_fields('question','reponse','active');

        $output = $crud->render();

        $this->_example_output($output);

    }

    public function _example_output($output = null)
    {
        $this->load->templateAdmin('faq/list', $output);
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
