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
        $data["allCss"] = array("listeActu", "ficheProduit", "home/home", "home/cssmap-continents");
        $data["alljs"] = array("slide", "ficheProduit", "home/home", "home/jquery.cssmap");
        $data["map"] = 1;

        $this->load->templatePages('home', $data);
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

            if($result){
                // deja inscrit
                $donnee = "Vous êtes déjà inscrit à la newsletter.";
            }else{
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

}
