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
        if($this->input->get('idInfo')){
            $data['voyageInfo'] = $this->voyage->getInfoVoyageById($this->input->get('idInfo'));
            $data['voyageInfo'][0]->date_depart = $this->DateFr($data['voyageInfo'][0]->date_depart);
            $data['voyageInfo'][0]->date_arrivee = $this->DateFr($data['voyageInfo'][0]->date_arrivee);
        }else{
            $data['voyageInfo'] = $this->voyage->getInfoVoyageMin($this->input->get('id'));
            $data['voyageInfo'][0]->date_depart = $this->DateFr($data['voyageInfo'][0]->date_depart);
            $data['voyageInfo'][0]->date_arrivee = $this->DateFr($data['voyageInfo'][0]->date_arrivee);
        }
        
        if($data['voyage'] == null) {
            redirect('pages/index/', 'refresh');
        }
        
        $data["allCss"] = array("ficheProduit");
        $data["alljs"] = array("slide","ficheProduit","stickyfloat");
        $this->load->templateVoyage('/fiche_produit', $data);
    }

    function DateFr($date) {
        setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
        return (strftime("%A %d %B %Y",strtotime($date)));
    }

}
