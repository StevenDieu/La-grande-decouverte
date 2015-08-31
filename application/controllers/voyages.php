<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voyages extends CI_Controller {

    private $limit = 8;

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

        $data['activePaginate'] = true;

        if ($continent) {
            $data['voyages'] = $this->Voyage->getVoyagesByContinent($continent);
            if ($data['voyages'] != false) {
                $this->continents->setId($continent);
                $data['nomContinent'] = $this->continents->getNomContinent();
                $data['activePaginate'] = false;
            } else {
                $data['voyages'] = $this->Voyage->getAllVoyages($this->limit, 0);
                $data['erreur'] = "Il n'y a aucun voyages pour le continent sélectionné. Voici la liste des voyages :";
            }
        } else {
            $data['voyages'] = $this->Voyage->getAllVoyages($this->limit, 0);
        }
        
        if (isset($data['voyages']) && count($data['voyages']) < 7) {
            $data['activePaginate'] = false;
        }

        $data["allCss"] = array("voyage");
        $data["alljs"] = array("voyage", "slide", "ajaxPaginate");

        $data["titre"] = "Liste voyages";
        $this->load->templateVoyage('/voyage', $data);
    }

    function addInList() {
        $pagePost = $this->input->post('page');
        if (!isset($pagePost) && empty($pagePost)) {
            echo "0";
            return;
        }
        $page = $pagePost * $this->limit;
        $voyages = $this->Voyage->getAllVoyages($this->limit, $page);
        if ($voyages) {
            $i = 0;
            foreach ($voyages as $voyage) {
                if (($i % 2) == 0) {
                    $right = "right";
                } else {
                    $right = "";
                }
                $json["id"][$i] = $voyage->vId;
                $json["header"][$i] = '<li class="listElement-' . $voyage->vId . ' voyage  ' . $right . '" style="display:none;"></li>';
                $json["content"][$i] = '<div class="bloc_image">' .
                        '<a href="' . base_url('/voyage/fiche/?id=') . $voyage->vId . '">' .
                        '<img src="' . base_url('') . 'media/' . $voyage->lien . '" alt="' . $voyage->nom . '" title="' . $voyage->nom . '">' .
                        '</a>' .
                        '</div>' .
                        '<div class="bloc_bottom">' .
                        '<a href="' . base_url('/voyage/fiche/?id=') . $voyage->vId . '">Voir<br><span>le voyage</span></a>' .
                        '<p class="titre">' . $voyage->titre . '</p>' .
                        '<p class="accroche">' . tronque($voyage->phrase_accroche, 200) . '</p>' .
                        '</div>' .
                        '</li>';
                $i++;
            }

            $json["nbr_limit"] = $this->limit;
            $json["nbr_list"] = $i;
            echo json_encode($json);
            return;
        }
        echo "0";
    }

}
