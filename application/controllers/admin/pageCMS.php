<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class PageCMS extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
    }

    public function liste() {
        $crud = new grocery_CRUD();

        $crud->set_table('page_cms');
        $crud->set_subject('Page CMS');
        $crud->display_as('label','Titre de la page');

        $crud->columns('code','label','active');

        $crud->fields();
        $crud->required_fields('code','label','active','value');

        $output = $crud->render();

        $this->_example_output($output);

    }

    public function _example_output($output = null)
    {
        $this->load->templateAdmin('cms/page', $output);
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


