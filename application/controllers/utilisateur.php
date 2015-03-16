<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

    /**
     * 
     */
    public function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['user'];
            $data['logger'] = true;
            $this->load->templateUtilisateur('developpement', $data);
        } else {
            $this->load->helper(array('form'));
            $data['logger'] = false;
            $this->load->templateUtilisateur('developpement', $data);
        }
    }

    public function accueil() {
        $data["css"] = "accueil";
        $this->load->templateUtilisateur('accueil', $data);
    }

    public function fiche_voyage_descriptif() {
        $this->load->templateUtilisateur('fiche_voyage_descriptif');
    }

}
