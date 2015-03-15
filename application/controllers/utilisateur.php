<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

    public function index() {
        $this->load->templateUtilisateur('developpement');
    }

    public function accueil() {
        $data["css"] = "accueil";
        $this->load->templateUtilisateur('accueil', $data);
    }

    public function connexion() {
        $this->load->templateTemplates('connexion');
    }

    public function validerConnexion() {
        
    }

    public function inscription() {
        $this->load->templateTemplates('inscription');
    }

    public function validerInscription() {
        
    }

    public function fiche_voyage_descriptif() {
        $this->load->templateUtilisateur('fiche_voyage_descriptif');
    }

}
