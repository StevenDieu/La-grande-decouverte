<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_voyage extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
    }

}
