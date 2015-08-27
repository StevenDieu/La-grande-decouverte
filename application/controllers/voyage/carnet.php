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
        $this->load->model('commentaire');

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

        $this->commentaire->setId_article($this->input->get('id'));
        $data["countComment"] = $this->commentaire->countAllCommentArticle();
        $data["nbrPageComment"] = ceil($data["countComment"] / 10);
        $data["pageCourante"] = 1;
        if ($data["countComment"]) {
            $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
            $this->commentaire->setStart($page);
            $this->commentaire->setLimit(10);
            $data["comments"] = $this->commentaire->getAllComments();

            $i = 0;

            foreach ($data["comments"] as $comment) {
                $data["comments"][$i]->date_creation = $this->DateFr($comment->date_creation);
                $i++;
            }
        }



        $this->load->templateCarnet('/article', $data);
    }

    function addComment() {
        $name = $this->input->post('name');
        $commentaire = $this->input->post('commentaire');
        $mail = $this->input->post('mail');
        $idArticle = $this->input->post('id_article');


        if ((!isset($name) || empty($name)) || (!isset($commentaire) || empty($commentaire)) || (!isset($mail) || empty($mail)) || (!isset($idArticle) || empty($idArticle))) {
            echo "0";
            return;
        }

        $this->commentaire->setName($name);
        $this->commentaire->setMail($mail);
        $this->commentaire->setCommentaire($commentaire);
        $this->commentaire->setId_article($idArticle);
        $id = $this->commentaire->addComment();
        if ($id) {
            echo $id;
        } else {
            echo "0";
        }
    }

    function signalComment() {
        $id_comment = $this->input->post('id_comment');

        if ((!isset($id_comment) || empty($id_comment))) {
            echo "0";
            return;
        }
        $this->commentaire->setId($id_comment);
        $this->commentaire->setSignal(1);
        if ($this->commentaire->setSignalArticle()) {
            echo "1";
        } else {
            echo "0";
        }
    }

    function getCommentPerPage() {
        $pageComment = $this->input->post('pageComment');
        $id_article = $this->input->post('id_article');

        if ((!isset($pageComment) || empty($pageComment)) || (!isset($id_article) || empty($id_article))) {
            echo "0";
            return;
        }

        $this->commentaire->setId_article($id_article);
        $data["countComment"] = $this->commentaire->countAllCommentArticle();
        $data["nbrPageComment"] = ceil($data["countComment"] / 10);
        if ($data["countComment"]) {
            $this->commentaire->setStart($pageComment * 10 - 10);
            $this->commentaire->setLimit(10);
            $data["comments"] = $this->commentaire->getAllComments();
            $i = 0;
            foreach ($data["comments"] as $comment) {
                $json["name"][$i] = $comment->name;
                $json["id"][$i] = $comment->id;
                $json["commentaire"][$i] = $comment->commentaire;
                $json["date_creation"][$i] = $this->DateFr($comment->date_creation);
                $i++;
            }
            $json["nbr_comment_page"] = $i;
            echo json_encode($json);
        }
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
