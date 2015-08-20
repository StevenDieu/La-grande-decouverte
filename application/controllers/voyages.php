<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voyages extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('carnetVoyage');
        $this->load->model('Voyage');
        $this->load->model('article');

        $this->load->library('pagination');

        $this->load->model('user');
        $this->load->model('images');
        $this->load->model('continents');
    }

    public function index() {       
        $continent = $this->input->get('continent');

        $perPage = 6;   //nombres d'articles par page
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;  //numero de page

        if ($continent) {
            //si un continent a été passé en paramètre, j'affiche tous les voyages du continent choisi
            $data['voyages'] = $this->Voyage->getVoyagesByContinent($continent);

            if ($data['voyages'] != false) {
                //si il y a bien des voyages pour ce continent, je récupère le nom du continent.
                $this->continents->setId($continent);
                $data['nomContinent'] = $this->continents->getNomContinent();
            } else {
                //sinon, j'affiche tous les voyages
                $data['voyages'] = $this->Voyage->getAllVoyages($perPage, $page);

                //et je signal qu'il n'y a pas de voyages pour le continent choisi
                $data['erreur'] = "Il n'y a aucun voyages pour le continent sélectionné. Voici la liste des voyages :";
            }
        } else {
            //sinon j'affiche tous les voyages du continent sélectionné, avec une pagination
            $data['voyages'] = $this->Voyage->getAllVoyages($perPage, $page);
        }

        $config['base_url'] = base_url() . "voyage/index/voyage";
        $config['total_rows'] = $this->Voyage->getRowAllVoyages();
        $config['per_page'] = $perPage;
        $config["uri_segment"] = 4;

        // génération des css et js
        $data["allCss"] = array("voyage");
        $data["alljs"] = array("voyage", "slide");

        $this->pagination->initialize($config);

        //appel du template
        $this->load->templateVoyage('/voyage', $data);
    }

}
