<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fiche extends CI_Controller {

    /**
     * 
     */
    public function index() {
        if($this->input->get('id') == null) {
            redirect('pages/index/', 'refresh');
        }
        $this->load->model('voyage');
        $data['voyage'] = $this->voyage->getVoyage($this->input->get('id'));

        if($data['voyage'] == null) {
            redirect('pages/index/', 'refresh');
        }
        
        $data["allCss"] = array("ficheProduit");
        $data["alljs"] = array("slide","ficheProduit");
        $this->load->templateVoyage('/fiche_produit', $data);
    }

}
