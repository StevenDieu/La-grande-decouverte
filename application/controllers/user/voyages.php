<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voyages extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            echo "co";
            die;
        }
        $this->load->model('voyage');
    }

    function mesvoyages() {
        $data["alljs"] = array("voyage");
        $data['username'] = $this->session->userdata('logged_in');
        $this->load->helper(array('form'));
        $data["voyage"] = $this->voyage->getVoyageOrderInfo($this->session->userdata('logged_in')["id"]);
        $this->load->view('user/voyages', $data);
    }

}
