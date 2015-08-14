<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fiche extends CI_Controller {

    private $id_voyage;

    function __construct() {
        parent::__construct();
        if ($this->input->get('id') == null) {
            redirect('pages/index/', 'refresh');
        }
        $this->load->model('voyage');
        $this->load->model('pays');
        $this->load->model('images');
        $this->load->model('pictoVoyage');
        $this->load->model('infoVoyage');
        $this->load->model('deroulementVoyage');
        $this->load->model('carnetVoyage');
        $this->load->model('continents');
    }

    /**
     * 
     */
    public function index() {
        if ($this->input->get('id') == null) {
            redirect('pages/index/', 'refresh');
        }

        $this->load->model('productView');
        $this->productView->setProductId($this->input->get('id'));

        $view = $this->productView->getByProduct();

        if($view)
        {
            $this->productView->setView($view[0]->view +1);
            $this->productView->edit();
        }
        else
        {
            $this->productView->add();
        }


        $this->id_voyage = $this->input->get('id');

        $this->voyage->setId($this->id_voyage);
        $data['voyage'] = $this->voyage->getVoyage();

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

        if ($data['voyage'] == null) {
            redirect('pages/index/', 'refresh');
        }

        $this->infoVoyage->__set('id_voyage', $this->id_voyage);

        if ($this->input->get('idInfo')) {
            $this->infoVoyage->setId($this->input->get('idInfo'));
            $data['voyageInfo'] = $this->infoVoyage->getInfoVoyageById();
            $data['voyageInfo'][0]->date_depart = $this->DateFr($data['voyageInfo'][0]->date_depart);
            $data['voyageInfo'][0]->date_arrivee = $this->DateFr($data['voyageInfo'][0]->date_arrivee);
        } else {
            $data['voyageInfo'] = $this->infoVoyage->getInfoVoyageMin();
            $data['voyageInfo'][0]->date_depart = $this->DateFr($data['voyageInfo'][0]->date_depart);
            $data['voyageInfo'][0]->date_arrivee = $this->DateFr($data['voyageInfo'][0]->date_arrivee);
        }

        $data['allInfoVoyage'] = $this->infoVoyage->getInfoVoyageByVoyage();

        foreach ($data['allInfoVoyage'] as $info) {
            $info->date_depart = $this->DateFr($info->date_depart);
            $info->date_arrivee = $this->DateFr($info->date_arrivee);
        }

        if ($data['voyage'] == null) {
            redirect('pages/index/', 'refresh');
        }
        $this->carnetVoyage->setId_voyage($this->input->get('id'));
        $data["carnetVoyages"] = $this->carnetVoyage->getVoyageProduit();
        $data["allCss"] = array("ficheProduit");
        $data["alljs"] = array("slide", "ficheProduit");
        $this->load->templateVoyage('/fiche_produit', $data);
    }

    function DateFr($date) {
        $date = explode('-', $date);
        if ($date[2][0] == 0)
            $date[2][0] = '';
        return $date[2] . ' ' . $this->getMonth($date[1]) . ' ' . $date[0];
    }

    function getMonth($month) {
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
