<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

    public function index() {

        $this->load->templateAdministrateur('accueil');
        
    }
    
}
