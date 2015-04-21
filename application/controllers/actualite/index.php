<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        //recaptcha
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('actualite');
    }

    public function index() {
        $data ["error"] = 0;
        $data["actualites"] = $this->actualite->getActualites();
        $this->load->templateActualite('list_actualite', $data);
    }
}
