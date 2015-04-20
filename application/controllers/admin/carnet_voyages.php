<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voyages extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function add() {
        if ($this->session->userdata('logged_admin')) {
            $this->load->model('carnet_voyage');
            $this->load->helper(array('form'));
            $data["allCss"] = "";
            $data["alljs"] = "";
            $this->load->templateAdmin('/carnet/add_carnet_voyage', $data);
        } else {
            //If no session, redirect to login page
            redirect('admin/index/connexion', 'refresh');
        }
    }

    public function edit() {
        if ($this->session->userdata('logged_admin')) {
            $this->load->model('carnet_voyage');
            if (!$this->input->get('id')) {
                redirect('admin/carnet_voyages/liste', 'refresh');
            }
            $data["carnet_voyage"] = $this->carnet_voyage->getCarnetVoyage($this->input->get('id'));
            $this->load->helper(array('form'));
            $data["allCss"] = array("admin/main");
            $data["alljs"] = array("admin/main");
            $this->load->templateAdmin('/carnet/edit_carnet_voyage', $data);
        } else {
            //If no session, redirect to login page
            redirect('admin/index/connexion', 'refresh');
        }
    }

    public function liste() {
        if ($this->session->userdata('logged_admin')) {
            $this->load->helper(array('form'));
            $this->load->model('carnet_voyage');
            $data["carnet_voyages"] = $this->carnet_voyage->getCarnetVoyages();
            $data["allCss"] = array("admin/main");
            $data["alljs"] = array("admin/main");
            $this->load->templateAdmin('/carnet/list_carnet_voyage', $data);
        } else {
            //If no session, redirect to login page
            redirect('admin/index/connexion', 'refresh');
        }
    }

}
