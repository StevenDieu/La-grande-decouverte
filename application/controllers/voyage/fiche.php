<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fiche extends CI_Controller {

    /**
     * 
     */
    public function ficheProduit() {
        $data["css"] = "ficheProduit";
        $this->load->templateVoyage('/fiche_produit', $data);
    }

    /**
     * 
     */
    public function ficheVoyage() {
        $data["css"] = "ficheVoyage";
        $this->load->templateVoyage('/fiche_voyage', $data);
    }

}
