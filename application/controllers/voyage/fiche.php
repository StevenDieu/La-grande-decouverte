<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fiche extends CI_Controller {

    /**
     * 
     */
    public function index() {
        $data["allCss"] = array("ficheProduit");
        $data["alljs"] = array("slide","ficheProduit");
        $this->load->templateVoyage('/fiche_produit', $data);
    }

}
