<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Articles extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            echo "co";
            die;
        }
        $this->load->helper(array('form'));
        $this->load->model('article');
        $this->article->setId_utilisateur($this->session->userdata('logged_in')["id"]);
    }

    function addImageFiche() {
        $this->load->model('imagesFiche');
        if (!($this->input->post('nom') || $this->input->post('id_article') || $this->input->post('id_carnet_voyage'))) {
            echo "0";
        } else {
            $this->imagesFiche->setLien("carnet/article/" . $this->input->post('nom'));
            $this->imagesFiche->setId_article($this->input->post('id_article'));
            $this->imagesFiche->setId_carnet_voyage($this->input->post('id_carnet_voyage'));
            $this->imagesFiche->addImage();
            echo "1";
        }
    }

    public function add() {
        $idCarnetVoyage = $this->input->post('idCarnet');
        if (isset($idCarnetVoyage)) {
            $this->article->setTitre("Exemple article");
            $this->article->setContenu("Exemple article");
            $this->article->setVisible("0");
            $this->article->setId_utilisateur($this->session->userdata('logged_in')["id"]);
            $this->article->setId_carnetvoyage($idCarnetVoyage);
            $idArticle = $this->article->addArticle();
            if (isset($idArticle)) {
                $data["librairieCss"] = array("font-awesome.min", "froala_editor.min", "froala_style.min");
                $data["librairieJs"] = array(
                    "froala_editor.min",
                    "plugins/tables.min",
                    "plugins/lists.min",
                    "plugins/colors.min",
                    "plugins/media_manager.min",
                    "plugins/font_family.min",
                    "plugins/font_size.min",
                    "plugins/block_styles.min",
                    "plugins/video.min",
                    "langs/fr"
                );
                $this->article->setId($idArticle);
                $data["article"] = $this->article->getArticle();
                if ($data["article"] != false) {
                    $data["article"][0]->titre = "";
                    $data["article"][0]->contenu = "";
                    $this->load->view('user/article/edit_article', $data);
                    return;
                }
            }
        }
        echo "0";
    }

    public function edit() {
        $idArticle = $this->input->post('idArticle');
        if (isset($idArticle)) {
            $data["librairieCss"] = array("font-awesome.min", "froala_editor.min", "froala_style.min");
            $data["librairieJs"] = array(
                "froala_editor.min",
                "plugins/tables.min",
                "plugins/lists.min",
                "plugins/colors.min",
                "plugins/media_manager.min",
                "plugins/font_family.min",
                "plugins/font_size.min",
                "plugins/block_styles.min",
                "plugins/video.min",
                "langs/fr"
            );
            $this->article->setId($idArticle);
            $data["article"] = $this->article->getArticle();
            if ($data["article"] != false) {
                $this->load->view('user/article/edit_article', $data);
                return;
            }
        }
        echo "0";
    }

    public function liste() {
        $idCarnet = $this->input->post('idCarnet');
        if (!isset($idCarnet)) {
            echo "0";
        }

        $this->load->helper(array('form'));
        $this->article->setId_carnetvoyage($idCarnet);
        $this->article->setId_utilisateur($this->session->userdata('logged_in')["id"]);

        if ($this->article->verifUserListArticle()) {
            $data["articles"] = $this->article->getArticles();
            $data["id_carnet_voyage"] = $this->input->post('id');
            $this->load->view('user/article/list_article', $data);
        }
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
            $this->imagesFiche->setLien('carnet/article/' . basename($src));
            $this->imagesFiche->deleteImageLien();
            unlink($src);
        }
    }

}
