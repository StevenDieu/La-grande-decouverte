<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        //recaptcha
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('actualite');
    }

    public function index() {
        $data["alljs"] = array("slide");
        $data["allCss"] = array("listeActu");
        $data["actualites"] = $this->actualite->getActualites();
        $data['nbActu'] = $this->actualite->getCount();
        foreach ($data["actualites"] as $actu) {
            $actu->date = $this->DateFr($actu->date);
        }
        $this->load->templateActualite('list_actualite', $data);
    }

    function DateFr($date) {
        $date = explode(' ', $date);
        $date = explode('-', $date[0]);
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
