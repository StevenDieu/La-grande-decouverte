<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Actualites extends CI_Controller {

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

        $crud->set_table('actualite');
        $crud->set_subject('Actualités');

        $crud->add_fields('titre','description','img1','img2','img3','active');
        $crud->edit_fields('titre','description','img1','img2','img3','active');
        $crud->required_fields('titre','description','img1','active');
        $crud->columns('titre','date','active');

        $crud->set_field_upload('img1','media/actualite');
        $crud->set_field_upload('img2','media/actualite');
        $crud->set_field_upload('img3','media/actualite');

        $crud->unset_read();

        $crud->display_as('titre','Titre de l\'actualité');
        $crud->display_as('date','Date d\'ajout');

        $output = $crud->render();
        $this->_example_output($output);
    }

    public function _example_output($output = null)
    {
        $this->load->templateAdmin('faq/list', $output);
    }

    function add_field_callback_1()
    {
    return '+30 <input type="text" maxlength="50" value="YOUR VALUE" name="phone" style="width:462px">';
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
