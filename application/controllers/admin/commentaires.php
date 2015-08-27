<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Commentaires extends CI_Controller {

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
        $crud->set_table('commentaire');
        $crud->set_subject('Commentaire');
        $crud->columns('id','name','mail','commentaire','active','date_creation','signal');
        $crud->display_as('name','Nom');
        $crud->display_as('active','Actif');
        $crud->display_as('date_creation','Date création');
        $crud->fields('name','mail','commentaire','active','date_creation','signal');
        $crud->required_fields('name','mail','commentaire','active','date_creation','signal');
        $crud->unset_read();
        $output = $crud->render();
        $this->_example_output($output);
    }

    public function _example_output($output = null)
    {
        $this->load->templateAdmin('commentaire/list', $output);
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
