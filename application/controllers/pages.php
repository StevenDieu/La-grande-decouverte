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
        $this->load->model('continents');
        $this->load->model('images');
        $this->load->model('productView');

        $this->productView->addLog();

        $data["voyages"] = $this->voyage->getVoyagesHome();

        $data['carnetVoyages'] = $this->carnetVoyage->getAllCarnetVoyages(4, 0);

        if (!empty($data['carnetVoyages'])) {
            for ($i = 0; $i < count($data['carnetVoyages']); $i++) {
                $this->images->setId_voyage($data['carnetVoyages'][$i]->vId);
                $this->images->setEmplacement("image_slider");
                $data['images'] = $this->images->getImagesByVoyageEmplacement();
                $j = 0;
                foreach ($data['images'] as $image) {
                    $data['carnetVoyages'][$i]->lien[$j] = $image->lien;
                    $data['carnetVoyages'][$i]->nom[$j] = $image->nom;
                    $j++;
                }
            }
        }
        $data["actualites"] = $this->actualite->getActualitesHome();
        if($data["actualites"]){
            foreach ($data["actualites"] as $actu) {
                $actu->date = $this->DateFr($actu->date);
                $actu->description = substr($actu->description, 0, 90).'...';
            }  
        }
        

        $data["continents"] = $this->continents->getContinents();

        $data["allCss"] = array("listeActu", "ficheProduit", "home/home", "home/cssmap-continents", "voyage");
        $data["alljs"] = array("slide", "ficheProduit", "home/home", "home/jquery.cssmap");
        $data["map"] = 1;

        $this->load->model('cms');
        $this->cms->setCode('bloc_image_cms _home_page');
        $data["image_cms"] = $this->cms->getByCode();

        $this->load->templatePages('home', $data);
    }

    public function cms() {
        $this->load->helper('url');
        $code = $this->uri->segment(3);
        if ($code) {
            $this->load->model('cms');
            $this->cms->setCode($code);
            $result = $this->cms->getPageByCode();
            if ($result) {
                $data['page'] = $result;
                $this->load->templatePages('cms', $data);
            } else {
                redirect('pages/index', 'refresh');
            }
        }
    }

    public function mailling() {
        $this->load->view('mailling/mailling');
    }

    public function mentionsLegales() {
        $this->load->templatePages('mentions_legales');
    }

    public function cgv() {
        $this->load->templatePages('cgv');
    }

    public function qui_sommes_nous() {
        $this->load->templatePages('qui_sommes_nous');
    }

    public function presse() {
        $this->load->templatePages('presse');
    }

    public function nous_rejoindre() {
        $this->load->templatePages('nous_rejoindre');
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

    public function addNewletter() {
        $this->load->model('newsletter');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('mail', 'mail', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $this->newsletter->setMail($this->input->post('mail'));
            $result = $this->newsletter->check_mail_unique();

            if ($result) {
                // deja inscrit
                $donnee = "Vous êtes déjà inscrit à la newsletter.";
            } else {
                //pas inscrit a la news
                $this->newsletter->setMail($this->input->post('mail'));
                $this->newsletter->setDate(date("Y-m-d H:i:s"));
                $this->newsletter->ajouterNewsletter();
                $donnee = "Vous êtes désormais inscrit à la newsletter.";
            }

            $this->load->library('session');
            $this->session->set_flashdata('result_newsletter', $donnee);
            redirect('pages/index', 'refresh');
        }
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
