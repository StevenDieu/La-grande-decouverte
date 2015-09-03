<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fiche extends CI_Controller {

    private $id_voyage;

    function __construct() {
        parent::__construct();
        if ($this->input->get('id') == null) {
            redirect('pages/introuvable', 'refresh');
        }
        $this->load->model('voyage');
        $this->load->model('pays');
        $this->load->model('images');
        $this->load->model('pictoVoyage');
        $this->load->model('infoVoyage');
        $this->load->model('deroulementVoyage');
        $this->load->model('carnetVoyage');
        $this->load->model('continents');
        $this->load->model('imagesFiche');
    }

    /**
     * 
     */
    public function index() {
        if ($this->input->get('id') == null) {
            redirect('pages/introuvable', 'refresh');
        }

        $this->id_voyage = $this->input->get('id');

        $this->voyage->setId($this->id_voyage);
        $data['voyage'] = $this->voyage->getVoyageFiche();

        if ($data['voyage'] == null) {
            redirect('pages/introuvable', 'refresh');
        }

        $this->load->model('productView');
        $this->productView->setProductId($this->input->get('id'));

        $view = $this->productView->getByProduct();

        if ($view) {
            $this->productView->setView($view[0]->view + 1);
            $this->productView->edit();
        } else {
            $this->productView->add();
        }

        $this->images->setId_voyage($this->id_voyage);
        $data['images'] = $this->images->getImagesByVoyage();

        $this->pays->__set('id_voyage', $this->id_voyage);
        $data['pays'] = $this->pays->getPaysByVoyage();

        $this->continents->setId($data['pays'][0]->id_continent);
        $data['continent'] = $this->continents->getContinent();

        $this->pictoVoyage->setId_voyage($this->id_voyage);
        $data['pictoVoyages'] = $this->pictoVoyage->getPictoVoyages();

        $this->deroulementVoyage->__set('id_voyage', $this->id_voyage);
        $data['deroulementVoyages'] = $this->deroulementVoyage->getAllDeroulementByVoyage();

        $data['date'] = new DateTime(null, new DateTimeZone('America/Santiago'));



        $this->infoVoyage->__set('id_voyage', $this->id_voyage);

        if ($this->input->get('idInfo')) {
            $this->infoVoyage->setId($this->input->get('idInfo'));
            $data['voyageInfo'] = $this->infoVoyage->getInfoVoyageById();
        } else {
            $data['voyageInfo'] = $this->infoVoyage->getInfoVoyageMin();
        }

        $data['allInfoVoyage'] = $this->infoVoyage->getInfoVoyageByVoyage();

        if ($data['voyage'] == null) {
            redirect('pages/introuvable', 'refresh');
        }
        $this->carnetVoyage->setId_voyage($this->input->get('id'));
        $data["carnetVoyages"] = $this->carnetVoyage->getVoyageProduit();

        if (!empty($data['carnetVoyages'])) {
            for ($i = 0; $i < count($data['carnetVoyages']); $i++) {
                $this->imagesFiche->setid_carnet_voyage($data['carnetVoyages'][$i]->cvId);
                $imagesCanetVoyages = $this->imagesFiche->getImagesCarnetVoyage();
                if ($imagesCanetVoyages) {
                    $j = 0;
                    foreach ($imagesCanetVoyages as $imagesCanetVoyage) {
                        $data['carnetVoyages'][$i]->lien[$j] = $imagesCanetVoyage->lien;
                        $data['carnetVoyages'][$i]->nom[$j] = "image carnet voyage " . ($i + 1);
                        $j++;
                    }
                } else {
                    $this->images->setId_voyage($data['carnetVoyages'][$i]->vId);
                    $this->images->setEmplacement("image_slider");
                    $imagesCanetVoyage = $this->images->getImagesByVoyageEmplacement();
                    $j = 0;
                    foreach ($imagesCanetVoyage as $image) {
                        $data['carnetVoyages'][$i]->lien[$j] = $image->lien;
                        $data['carnetVoyages'][$i]->nom[$j] = $image->nom;
                        $j++;
                    }
                }
            }
        }

        $data["allCss"] = array("ficheProduit", "home/home");
        $data["alljs"] = array("slide", "ficheProduit", "home/home");
        $data["titre"] = "Fiche produit d'un voyage";
        $this->load->templateVoyage('/fiche_produit', $data);
    }

    private function DateFr($date) {
        $date = explode('-', $date);
        if ($date[2][0] == 0)
            $date[2][0] = '';
        return $date[2] . ' ' . $this->getMonth($date[1]) . ' ' . $date[0];
    }

    private function getMonth($month) {
        $month_arr[01] = "Janvier";
        $month_arr[02] = "Février";
        $month_arr[03] = "Mars";
        $month_arr[04] = "Avril";
        $month_arr[05] = "Mai";
        $month_arr[06] = "Juin";
        $month_arr[07] = "Juillet";
        $month_arr[08] = "Août";
        $month_arr[9] = "Septembre";
        $month_arr[10] = "Octobre";
        $month_arr[11] = "Novembre";
        $month_arr[12] = "Décembre";

        return $month_arr[(int) $month];
    }

}
