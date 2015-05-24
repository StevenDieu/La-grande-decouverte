<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pages extends CI_Controller {

    /**
     * 
     */
    public function index() {
        $this->load->model('voyage');
        $this->load->model('carnetVoyage');
        $this->load->model('actualite');
        
        $data["voyages"] = $this->voyage->getVoyagesHome();
        $data["carnetVoyages"] = $this->carnetVoyage->getCarnetVoyagesHome();
        $data["actualites"] = $this->actualite->getActualitesHome();
        $data["allCss"] = array("home/home","home/cssmap-continents","ficheProduit");
        $data["alljs"] = array("slide","ficheProduit","home/home","home/jquery.cssmap");
        $data["map"] = 1;
        
        $this->load->templatePages('home', $data);
    }

    public function mailling() {
        $this->load->view('mailling/mailling');
    }

    public function mentionsLegales() {
        $this->load->templatePages('mentions_legales');
    }

    public function messageSucces() {
        if ($this->input->post('message')) {
            $data["message"] = $this->input->post('message');
            $this->load->view('templates/great.php', $data);
        }
    }

    public function messageErreur() {
        if ($this->input->post('message')) {
            $data["message"] = $this->input->post('message');
            $this->load->view('templates/error.php', $data);
        }
    }

}
