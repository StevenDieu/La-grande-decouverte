<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_carnet_voyage extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('carnetVoyage');
        $this->load->model('article');
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/connexion', 'refresh');
        }
    }

    public function edit() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'id', 'trim|required|xss_clean');
        $this->form_validation->set_rules('titre', 'titre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('contenu', 'contenu', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo "0";
        } else {
            $this->article->setId($this->input->post('id'));
            $this->article->setTitre($this->input->post('titre'));
            $this->article->setContenu(str_replace("style/", "style", $this->input->post('contenu')));
            $this->article->setArticleAdmin();
            echo "1";
        }
    }

    public function visible() {
        $id = $this->input->post('id');
        if (isset($id)) {
            $this->article->setId($this->input->post('id'));
            $this->article->setVisible($this->input->post('visible'));
            if ($this->article->setFicheVisible()) {
                echo "1";
                return;
            }
        }
        echo "0";
        return;
    }

    public function upload() {
        if (!$this->session->userdata('logged_in')) {
            echo 'co';
            die;
        }
        $allowedExts = array("gif", "jpeg", "jpg", "png");

        $temp = explode(".", $_FILES["file"]["name"]);

        $extension = end($temp);

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $_FILES["file"]["tmp_name"]);
        if ((($mime == "image/gif") || ($mime == "image/jpeg") || ($mime == "image/pjpeg") || ($mime == "image/x-png") || ($mime == "image/png")) && in_array($extension, $allowedExts)) {
            // Generate new random name.

            $name = sha1(microtime()) . "." . $extension;

            // Save file in the uploads folder.
            move_uploaded_file($_FILES["file"]["tmp_name"], getcwd() . "/media/carnet/article/" . $name);

            // Generate response.
            $response = new StdClass;
            $response->link = base_url('/media/carnet/article') . "/" . $name;
            echo stripslashes(json_encode($response));
        }
    }

    public function delete() {
        $this->load->model('imagesFiche');
        if (!$this->session->userdata('logged_in')) {
            echo 'co';
            die;
        }

        $src = $_POST["src"];
        $src = str_replace('http://localhost/TVAFS-1.0', getcwd(), $src);


        if (file_exists($src)) {
            $this->imagesFiche->setLien("carnet/article/" . basename($src));
            $this->imagesFiche->deleteImageLien();
            unlink($src);
        }
    }

    function addImageFiche() {
        $this->load->model('imagesFiche');
        if (!($this->input->post('nom') || $this->input->post('id_article') || $this->input->post('id_carnet_voyage'))) {
            echo "0";
        } else {
            $this->imagesFiche->setLien('carnet/article/' . $this->input->post('nom'));
            $this->imagesFiche->setId_article($this->input->post('id_article'));
            $this->imagesFiche->setId_carnet_voyage($this->input->post('id_carnet_voyage'));
            $this->imagesFiche->addImage();
            echo "1";
        }
    }

    public function deleteArticle() {
        if (!$this->input->post('id')) {
            echo "0";
        } else {
            $this->article->setId($this->input->post('id'));
            $this->article->setId_utilisateur($this->session->userdata('logged_in')["id"]);
            if ($this->article->verifCompteArticle()) {
                $this->article->deleteArticle();
                echo "1";
            } else {
                echo "0";
            }
        }
    }

    public function editCarnetVoyage() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('titre', 'titre', 'trim|xss_clean');
        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo "0";
        } else {
        $this->carnetVoyage->setTitre(str_replace("'", "&#146;", $this->input->post('titre')));
        $this->carnetVoyage->setId($this->input->post('id'));
        $this->carnetVoyage->setId_utilisateur($this->session->userdata('logged_in')["id"]);
            $this->carnetVoyage->setCarnetVoyage();
            echo "1";
        }
    }

    public function deleteCarnetVoyage() {
        $id = $this->input->post('id');
        if (!isset($id)) {
            echo "0";
            return;
        }
        $this->carnetVoyage->setId($this->input->post('id'));
        $this->carnetVoyage->setId_utilisateur($this->session->userdata('logged_in')["id"]);
        if ($this->carnetVoyage->nbrArticle()) {
            echo "-1";
        } else {
            $this->carnetVoyage->deleteCarnetVoyage();
            echo "1";
        }
    }

}
