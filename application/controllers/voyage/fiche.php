<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fiche extends CI_Controller {

    /**
     * 
     */
    public function index() {
        $data["css"] = "ficheproduit";
        $this->load->templateVoyage('/fiche_voyage', $data);
        
    }
}
