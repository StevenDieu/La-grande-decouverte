<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Carnet extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('carnetVoyage');
        $this->load->model('Voyage');
        $this->load->model('article');
        $this->load->model('imagesFiche');

        $this->load->library('pagination');

        $this->load->model('user');
        $this->load->model('images');
        $this->load->model('continents');
    }

    public function index() {
        $data["allCss"] = array("ficheVoyage");
        $data["alljs"] = array("slide", "ficheVoyage");

        if ($this->input->get('id') == null) {
            redirect('pages/index/', 'refresh');
        }

        $this->carnetVoyage->setId($this->input->get('id'));
        $data['carnetVoyage'] = $this->carnetVoyage->getCarnetVoyage();
        $data['imagesCarnetVoyages'] = $this->carnetVoyage->getImagesCarnetVoyage();


        if ($data['carnetVoyage'] == null) {
            redirect('pages/index/', 'refresh');
        }
        $this->article->setId_carnetvoyage($data['carnetVoyage'][0]->id);
        $this->user->setId($data['carnetVoyage'][0]->id_utilisateur);
        $data["user"] = $this->user->getUser();
        $data["articles"] = $this->article->getArticleVisible();

        if (!empty($data["articles"])) {
            foreach ($data["articles"] as $article) {
                if (!empty($article)) {
                    $this->imagesFiche->setId_article($article->id);
                    $imagesArticle = $this->imagesFiche->getImagesArticle();
                    if ($imagesArticle) {
                        $article->lien = $imagesArticle[0]->lien;
                        $article->nom = "image carnet voyage " . $article->id;
                    }
                }
            }
        }

        $this->load->templateCarnet('/carnet', $data);
    }

    public function article() {
        if ($this->input->get('id') == null) {
            redirect('pages/index/', 'refresh');
        }
        $this->article->setId($this->input->get('id'));
        $data["articles"] = $this->article->getArticlePublic();

        if ($data['articles'] == null) {
            redirect('pages/index/', 'refresh');
        }
        $this->carnetVoyage->setId($data["articles"][0]->id_carnetvoyage);
        $data['imagesCarnetVoyages'] = $this->carnetVoyage->getImagesCarnetVoyage();

        $data["librairieCss"] = array("font-awesome.min", "froala_editor.min", "froala_style.min");
        $data["allCss"] = array("article");
        $data["alljs"] = array("slide", "ficheVoyage");

        $data["articles"][0]->date_creation = $this->DateFr($data["articles"][0]->date_creation);

        $this->load->templateCarnet('/article', $data);
    }

    function DateFr($date) {
        $date = explode(' ', $date);
        $date = explode('-', $date[0]);

        if ($date[2][0] == 0)
            $date[2][0] = '';
        return $date[2] . ' ' . $this->getMonth($date[1]) . ' ' . $date[0];
    }

    function getMonth($month) {
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
