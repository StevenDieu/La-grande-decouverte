<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pictos extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('picto');
    }

    public function add() {
        $this->load->view('admin/picto/upload/upload_image_picto.php');
    }

    public function delete() {

        if (!$this->input->post('id')) {
            redirect('admin/picto/liste', 'refresh');
        }

        $this->picto->setId($this->input->post('id'));
        $data["pictos"] = $this->picto->getPicto();
        if ($this->picto->deletePicto()) {
            $this->load->view('admin/picto/upload/delete_image_picto.php', $data);
        } else {
            echo -1;
        }
    }

    public function liste() {
        $data["adminJs"] = array("picto/picto");
        $this->load->helper(array('form'));
        $data["pictos"] = $this->picto->getPictos();
        $this->load->templateAdmin('/picto/list_picto', $data);
    }

}
