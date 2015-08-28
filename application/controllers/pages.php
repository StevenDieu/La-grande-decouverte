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

        $this->load->model('imagesFiche');

        $data["voyages"] = $this->voyage->getVoyagesHome();

        $data['carnetVoyages'] = $this->carnetVoyage->getAllCarnetVoyages(4, 0);

        if (!empty($data['carnetVoyages'])) {
            for ($i = 0; $i < count($data['carnetVoyages']); $i++) {
                $this->imagesFiche->setid_carnet_voyage($data['carnetVoyages'][$i]->cvId);
                $imagesCanetVoyage = $this->imagesFiche->getImagesCarnetVoyage();
                if ($imagesCanetVoyage) {
                    $data['carnetVoyages'][$i]->lien[0] = $imagesCanetVoyage[0]->lien;
                    $data['carnetVoyages'][$i]->nom[0] = "image carnet voyage " . ($i + 1);
                } else {
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
        }
        $data["actualites"] = $this->actualite->getActualitesHome();
        if ($data["actualites"]) {
            foreach ($data["actualites"] as $actu) {
                $actu->date = $this->DateFr($actu->date);
                $actu->description = substr($actu->description, 0, 90) . '...';
            }
        }


        $data["continents"] = $this->continents->getContinents();

        $data["allCss"] = array("listeActu", "ficheProduit", "home/home", "home/cssmap-continents", "voyage");
        $data["alljs"] = array("slide", "ficheProduit", "home/home", "home/jquery.cssmap");
        $data["map"] = 1;

        $this->load->model('cms');
        $this->cms->setCode('bloc_image_cms _home_page');
        $data["image_cms"] = $this->cms->getByCode();
        $data["titre"] = "Page accueil";
        $this->load->templatePages('home', $data);
    }

    public function cgu() {
        $data["titre"] = "Conditions générales d'utilisation";
        $this->load->templatePages('cgu', $data);
    }

    public function facture() {
        $data["titre"] = "Facture";
        $this->load->templatePages('facture', $data);
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
        $data["titre"] = "Mailling";
        $this->load->view('mailling/mailling', $data);
    }

    public function mentionsLegales() {
        $data["titre"] = "Mentions legales";
        $this->load->templatePages('mentions_legales', $data);
    }

    public function cgv() {
        $data["titre"] = "Conditions générales de ventes";
        $this->load->templatePages('cgv', $data);
    }

    public function qui_sommes_nous() {
        $data["titre"] = "Mailling";
        $this->load->templatePages('qui_sommes_nous', $data);
    }

    public function presse() {
        $data["titre"] = "Presse";
        $this->load->templatePages('presse', $data);
    }

    public function nous_rejoindre() {
        $data["titre"] = "Nous rejoindre";
        $this->load->templatePages('nous_rejoindre', $data);
    }

    public function messageSucces() {
        if ($this->input->post('message')) {
            $data["message"] = $this->input->post('message');
            $this->load->view('templates/great.php', $data);
        }
        redirect('pages/index', 'refresh');
    }

    public function messageErreur() {
        if ($this->input->post('message')) {
            $data["message"] = $this->input->post('message');
            $this->load->view('templates/error.php', $data);
        }
        redirect('pages/index', 'refresh');
    }

    public function addNewletter() {
        $this->load->model('newsletter');

        if ($this->input->get('mail') == null) {
            echo "Le mail est nécessaire.";
            return;
        }

        $this->newsletter->setMail($this->input->get('mail'));
        if ($this->newsletter->check_mail_unique()) {
            echo "Vous êtes déjà inscrit à la newsletter.";
            return;
        }
        $this->newsletter->setDate(date("Y-m-d H:i:s"));
        $this->newsletter->ajouterNewsletter();
        echo "Vous êtes désormais inscrit à la newsletter.";
    }

    private function DateFr($date) {
        $date = explode(' ', $date);
        $date = explode('-', $date[0]);
        if ($date[2][0] == 0)
            $date[2][0] = '';
        return $date[2] . ' ' . $this->getMonth($date[1]) . ' ' . $date[0];
    }

    private function getMonth($month) {
        $month_arr[1] = "Janvier";
        $month_arr[2] = "Février";
        $month_arr[3] = "Mars";
        $month_arr[4] = "Avril";
        $month_arr[5] = "Mai";
        $month_arr[6] = "Juin";
        $month_arr[7] = "Juillet";
        $month_arr[8] = "Août";
        $month_arr[9] = "Septembre";
        $month_arr[10] = "Octobre";
        $month_arr[11] = "Novembre";
        $month_arr[12] = "Décembre";

        return $month_arr[(int) $month];
    }

}
