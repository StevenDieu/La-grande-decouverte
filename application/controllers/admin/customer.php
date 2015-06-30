<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customer extends CI_Controller {

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
        $crud->set_table('utilisateur');
        $crud->set_subject('Utilisateurs');
        $crud->columns('id','nom','prenom','banni');
        $crud->required_fields('nom','prenom','mail','description');
        $crud->add_fields('nom','prenom','mail','description','ip','banni','password','cpassword','last_password');
        $crud->edit_fields('nom','prenom','mail','description','ip','banni','password','cpassword','last_password');
        $crud->change_field_type('cpassword','password');
        $crud->change_field_type('last_password','password');
        $crud->callback_edit_field('password',array($this,'set_password_input_to_empty'));
        $crud->callback_add_field('password',array($this,'set_password_input_to_empty'));
        $crud->callback_before_update(array($this,'encrypt_password_callback'));
        $crud->unique_fields('mail');
        $crud->unset_read();
        $crud->unset_texteditor('description','full_text');
        $crud->display_as('password','Nouveau mot de passe');
        $crud->display_as('cpassword','Confirmation nouveau mot de passe');
        $crud->display_as('last_password','Ancien mot de passe');
        $output = $crud->render();
        $this->_example_output($output);
    }

    public function _example_output($output = null)
    {
        $this->load->templateAdmin('customer/list', $output);
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

    function set_password_input_to_empty() {
        return "<input type='password' name='password' value='' />";
    }

    function encrypt_password_callback($post_array, $primary_key) {
        $this->load->library('encrypt');
        
        //Encrypt password only if is not empty. Else don't change the password to an empty field
        if(!empty($post_array['password']) && !empty($post_array['cpassword']) && !empty($post_array['last_password']))
        {
            $this->load->model('user');
            $this->user->setId($primary_key);
            $this->user->setPassword($post_array['last_password']);
            if(($post_array['password'] == $post_array['cpassword']) && $this->user->verifPassUser()){
                $post_array['password'] = MD5($post_array['password']);
                unset($post_array['cpassword']);
                unset($post_array['last_password']);
                //verif de l'email //
                $this->load->model('user');
                $this->user->setId($primary_key);
                $this->user->setMail($post_array['mail']);
                $result = $this->user->check_mail_user();
                return $post_array; 
            }  
            unset($post_array['cpassword']);
            unset($post_array['last_password']);
            unset($post_array['password']);
            //verif de l'email //
            $this->load->model('user');
            $this->user->setId($primary_key);
            $this->user->setMail($post_array['mail']);
            $result = $this->user->check_mail_user();
            return $post_array; 
        }
        else
        {
            unset($post_array['password']);
            unset($post_array['cpassword']);
            unset($post_array['last_password']);
            return $post_array; 
        }
    }
}
