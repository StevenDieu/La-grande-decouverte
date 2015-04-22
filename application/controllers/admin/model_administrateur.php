<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_administrateur extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('user');
    }

    public function save() {
        $this->load->library('form_validation');

        //information générale
        $this->form_validation->set_rules('login', 'login', 'trim|xss_clean|required');
        $this->form_validation->set_rules('password', 'password', 'trim|xss_clean|required');
        $this->form_validation->set_rules('cpassword', 'cpassword', 'trim|xss_clean|required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->templateAdmin('administrateur/add_administrateur');
        } else {
            //information générale
            $login = $this->input->post('login');
            $password = $this->input->post('password');
            $cpassword = $this->input->post('cpassword');

            $this->check_mdp($password,$cpassword);
            $this->check_unique_login_admin($login);

            $result = $this->user->ajouterUserAdmin($login, $password, '1');

            redirect('admin/administrateur/liste', 'refresh');
        }
    }

    public function edit() {
        $this->load->library('form_validation');

        //information générale
        $this->form_validation->set_rules('login', 'login', 'trim|xss_clean|required');
        $this->form_validation->set_rules('password', 'password', 'trim|xss_clean');
        $this->form_validation->set_rules('cpassword', 'cpassword', 'trim|xss_clean');
        $this->form_validation->set_rules('actually_password', 'actually_password', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->library('session');
            $this->session->set_flashdata('login_administrateur','Le champ login ne peux pas être vide.');
            redirect('admin/administrateur/edit?id='.$this->input->post('id'), 'refresh');
        } else {
            //information générale
            $id = $this->input->post('id');
            $login = $this->input->post('login');
            $password = $this->input->post('password');
            $cpassword = $this->input->post('cpassword');
            $actually_password = $this->input->post('actually_password');

            $this->check_actually_password_admin($id,$actually_password);

            if($password != ''){
                $this->check_mdp($password,$cpassword);
                $result = $this->user->editAdminPassword($id, $password);

            }
            $result = $this->user->editAdminUser($id, $login);
            redirect('admin/administrateur/liste', 'refresh');
        }
    }

    public function delete() {
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean|required');
        $this->form_validation->set_rules('password', 'password', 'trim|xss_clean|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->library('session');
            $this->session->set_flashdata('login_administrateur','Le mot de passe du super admin ne peut pas être vide.');
            redirect('admin/administrateur/liste', 'refresh');
        } else {
            $id = $this->input->post('id');
            $password = $this->input->post('password');

            if($this->user->verifPassSuperAdmin($password)){
                $result = $this->user->getUserAdmin($id);
                $this->session->set_flashdata('login_administrateur','L\'utilisateur '.$result[0]->login.' a été supprimé.');
                $this->user->deleteAdministrateur($id); 
            }else{
                $this->session->set_flashdata('login_administrateur','Le mot de passe du super admin n\'est pas correct.');
            }
            redirect('admin/administrateur/liste', 'refresh');
        }


        $result = $this->user->deleteAdministrateur($id);

        redirect('admin/administrateur/liste', 'refresh');
    }

    function check_mdp($password,$cpassword) {
        if ($password == $cpassword) {
            return true;
        }
        $this->load->library('session');
        $this->session->set_flashdata('mdp_administrateur','Les mots de passe ne sont pas identiques.');
        redirect('admin/administrateur/add', 'refresh');

        return false;
    }

    function check_unique_login_admin($login) {
        if (!$this->user->check_user_admin($login)) {
            return true;
        }
        $this->load->library('session');
        $this->session->set_flashdata('login_administrateur','Le login est déjà utilisé.');
        redirect('admin/administrateur/add', 'refresh');

        return false;
    }

    function check_actually_password_admin($id,$password) {
        if ($this->user->verifPassAdmin($id,$password)) {
            return true;
        }
        $this->load->library('session');
        $this->session->set_flashdata('actually_password_administrateur','Le mot de passe actuel n\'est pas correct.');
        redirect('admin/administrateur/edit?id='.$id, 'refresh');

        return false;
    }

}
