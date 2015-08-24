<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customer extends CI_Controller {

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
        $crud->set_table('utilisateur');
        $crud->set_subject('Utilisateurs');
        $crud->columns('id','nom','prenom','banni');
        $crud->required_fields('nom','prenom','mail','description');
        $crud->add_fields('nom','prenom','mail','description','banni','password','cpassword');
        $crud->edit_fields('nom','prenom','mail','description','banni','password','cpassword','last_password');
        $crud->change_field_type('cpassword','password');
        $crud->change_field_type('last_password','password');
        $crud->callback_edit_field('password',array($this,'set_password_input_to_empty'));
        $crud->callback_add_field('password',array($this,'set_password_input_to_empty'));
        
        // vérif des champs mot de passe
        $crud->set_rules('password', 'password', 'callback_check_mdp');
        $crud->callback_before_update(array($this,'encrypt_password_callback'));
        $crud->callback_before_insert(array($this,'encrypt_password_callback_insert'));        

        $crud->unique_fields('mail');
        $crud->unset_read();
        $crud->unset_texteditor('description','full_text');
        $crud->display_as('password','Nouveau mot de passe');
        $crud->display_as('cpassword','Confirmation nouveau mot de passe');
        $crud->display_as('last_password','Ancien mot de passe');
        $output = $crud->render();
        $this->_example_output($output);
    }

    function check_mdp($mdp) {
        //si on est en edit
        $mdp = $this->input->post('password');
        $cmdp = $this->input->post('cpassword');
        $last_password = $this->input->post('last_password');
        if($this->uri->segment(4) == 'update_validation'){
            //si les 3 sont vides
            if(empty($mdp) && empty($cmdp)&& empty($last_password)){
                return true;
            }else{
                //si les 3 sont plein
                if(!empty($mdp) && !empty($cmdp) && !empty($last_password)){
                    //on fait le traitement car les 3 sont remplis
                    $this->load->model('user');
                    $this->user->setId($this->uri->segment(5));
                    $this->user->setPassword($last_password);
                    if(($mdp == $cmdp) && $this->user->verifPassUser()){
                        //tous les mots de passe sont bon
                        return true;
                    }else{
                        $this->form_validation->set_message('check_mdp', 'Nouveau mot de passe différent ou ancien mot de passe incorrect.' );
                        return false;
                    }
                }else{
                    $this->form_validation->set_message('check_mdp', 'Vous devez remplir les 3 champs pour pouvoir modifier le mot de passe' );
                    return false;
                }
            }
        }else if($this->uri->segment(4) == 'insert_validation'){
            //si deux sont plein
            if(!empty($mdp) && !empty($cmdp)){
                if($mdp == $cmdp){
                    //tous les mots de passe sont bon
                    return true;
                }else{
                    $this->form_validation->set_message('check_mdp', 'Les mots de passe ne sont pas identiques.');
                    return false; 
                }
            }else{
                $this->form_validation->set_message('check_mdp', 'Vous devez remplir les 2 champs mot de passe.' );
                return false;
            }

        }
 
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

    /*$this->load->model('user');
                $this->user->setId($primary_key);
                $this->user->setMail($post_array['mail']);
                $result = $this->user->check_mail_user();*/

    function encrypt_password_callback($post_array, $primary_key) {        
        //si tous les champs sont remplis
        if(!empty($post_array['password']) && !empty($post_array['cpassword']) && !empty($post_array['last_password']))
        {
            $post_array['password'] = MD5($post_array['password']);
            unset($post_array['cpassword']);
            unset($post_array['last_password']);
            return $post_array; 
        }else{
            unset($post_array['password']);
            unset($post_array['cpassword']);
            unset($post_array['last_password']);
            return $post_array; 
        }
    }

    function encrypt_password_callback_insert($post_array) {        
        //si tous les champs sont remplis
        if(!empty($post_array['password']) && !empty($post_array['cpassword']))
        {
            $post_array['password'] = MD5($post_array['password']);
            unset($post_array['cpassword']);
            return $post_array; 
        }
    }


}
