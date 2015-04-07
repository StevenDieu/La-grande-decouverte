<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fiche extends CI_Controller {

    /**
     * 
     */
    public function ficheProduit() {
        $data["allCss"] = array("ficheProduit");
        $data["alljs"] = array("slide","ficheProduit");
        $this->load->templateVoyage('/fiche_produit', $data);
    }

    /**
     * 
     */
    public function ficheVoyage() {
        $data["allCss"] = array("ficheVoyage");
        $data["alljs"] = array("slide","ficheVoyage");
        $this->load->templateVoyage('/fiche_voyage', $data);
    }

    public function article(){
        $data["allCss"] = array("article");
        $data["alljs"] = array("slide","ficheVoyage");
        $this->load->templateVoyage('/article',$data);
    }

}
