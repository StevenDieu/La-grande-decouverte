<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

    public function index() {
        $this->load->templateUtilisateur('accueil');
    }

    public function fiche_voyage_descriptif() {
        $this->load->templateUtilisateur('fiche_voyage_descriptif');
    }

}
