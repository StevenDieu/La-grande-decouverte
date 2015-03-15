<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Identification extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function connexion() {
        $this->load->helper(array('form'));
        $this->load->templateUser('page_connexion');
    }

    function inscription() {
        $this->load->helper(array('form'));
        $this->load->templateUser('page_inscription');
    }
}
?>