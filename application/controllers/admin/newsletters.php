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
        $this->load->model('newsletter');
        $this->load->helper(array('form'));
    }

    public function edit() {
        if (!$this->input->get('id')) {
            redirect('admin/newsletter/liste', 'refresh');
        }
        $data["newsletter"] = $this->newsletter->getNewsletter($this->input->get('id'));
        $this->load->templateAdmin('newsletter/edit_newsletter', $data);
    }

    public function index() {
        $data["newsletters"] = $this->newsletter->getNewsletters();
        $this->load->model('user');
        if($data["newsletters"]){
            foreach ($data["newsletters"] as $value) {
                $this->user->setMail($value->mail);
                $value->customer = $this->user->getByMail();
            }
        }  
        $this->load->templateAdmin('/newsletter/list_newsletter', $data);
    }

}
