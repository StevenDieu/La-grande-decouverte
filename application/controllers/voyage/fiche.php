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
        $data["alljs"] = array("slide","ficheProduit");
        $this->load->templateVoyage('/fiche_produit', $data);
    }

    function DateFr($date) {
        $date = explode('-', $date);
        if($date[2][0] == 0) $date[2][0] = '';
        return $date[2].' '.$this->getMonth($date[1]).' '.$date[0];
    }

    function getMonth($month) {
        $month_arr[01] =   "Janvier";
        $month_arr[02] =   "Février";
        $month_arr[03] =   "Mars";
        $month_arr[04] =   "Avril";
        $month_arr[05] =   "Mai";
        $month_arr[06] =   "Juin";
        $month_arr[07] =   "Juillet";
        $month_arr[08] =   "Août";
        $month_arr[09] =   "Septembre";
        $month_arr[10] =  "Octobre";
        $month_arr[11] =  "Novembre";
        $month_arr[12] =  "Décembre";

        return $month_arr[(int)$month];
    }

}
