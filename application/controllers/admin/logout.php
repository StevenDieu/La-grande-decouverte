<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logout extends CI_Controller {

    function index() {
        $this->session->unset_userdata('logged_admin');
        session_destroy();
        redirect('admin/connexion', 'refresh');
    }

}
