<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fiche extends CI_Controller {

    /**
     * 
     */
    public function index() {
        $this->load->model('voyage');
        $data['voyage'] = $this->voyage->getVoyage($this->input->get('id'));
        $data["allCss"] = array("ficheProduit");
        $data["alljs"] = array("slide","ficheProduit");
        $this->load->templateVoyage('/fiche_produit', $data);
    }

}
