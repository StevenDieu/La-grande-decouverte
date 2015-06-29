<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Newsletters extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->helper(array('form'));

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
    }

    public function liste() {
        $crud = new grocery_CRUD();

        $crud->set_table('newsletter');
        $crud->set_subject('Abonnés à la newsletter');
        $crud->unset_add();
        $crud->unset_edit();

        //$crud->columns('id','mail','nom','prenom','statut','date_inscription');

        //$crud->display_as('prenom','Prénom');
        //$crud->display_as('active','Activé');
        //$crud->unset_columns('productDescription');

        //$crud->set_relation('mail','utilisateur','prenom');

        //$crud->fields('question','reponse','active');
        //$crud->required_fields('question','reponse','active');

        $output = $crud->render();
        $this->_example_output($output);

    }

    public function _example_output($output = null)
    {
        $this->load->templateAdmin('newsletter/list', $output);
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
