<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

    public function index() {
        $this->load->templateUtilisateur('accueil');
    }

    public function connexion() {
        $this->load->templateTemplates('accueil');
    }

    public function validerConnexion() {
    }

    public function inscription() {
        $this->load->templateTemplates('accueil');
    }

    public function validerInscription() {
    }

    public function fiche_voyage_descriptif() {
        $this->load->templateUtilisateur('fiche_voyage_descriptif');
    }

}
