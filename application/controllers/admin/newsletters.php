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
        $this->load->model('user');

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

        $crud->callback_column('nom',array($this,'nom_client'));
        $crud->callback_column('prenom',array($this,'prenom_client'));

        $output = $crud->render();
        $this->_example_output($output);

    }

    function nom_client($value, $row)
    {
        $mail = $row->mail;
        $this->user->setMail($mail);

        $result = $this->user->getByMail();
        if($result){
            return $result[0]->nom;
        }else{
            return '--';
        }
    }

    function prenom_client($value, $row)
    {
        $mail = $row->mail;
        $this->user->setMail($mail);

        $result = $this->user->getByMail();
        if($result){
            return $result[0]->prenom;
        }else{
            return '--';
        }
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
