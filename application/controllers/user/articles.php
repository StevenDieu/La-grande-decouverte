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
        $this->article->setId_utilisateur( $this->session->userdata('logged_in')["id"] );
    }

    public function add() {
        if (!$this->input->post('idCarnet')) {
            echo "0";
        } else {
            $this->load->helper(array('form'));
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
            $data["id_carnet_voyage"] = $this->input->post('idCarnet');
            if ($data["id_carnet_voyage"] != false) {
                $this->load->view('user/article/add_article', $data);
            }
        }
    }
    
    function addImageFiche(){
          if (!($this->input->post('nom') || $this->input->post('id_fichevoyage'))) {
            echo "0";
        } else {
            
        }
    }

    public function edit() {

        if (!$this->input->post('idArticle')) {
            echo "0";
        } else {
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
            $this->article->setId( $this->input->post('idArticle') );
            $data["article"] = $this->article->getArticle();
            if ($data["article"] != false) {
                $this->load->view('user/article/edit_article', $data);
            }
        }
    }

    public function liste() {
        if (!$this->input->post('idCarnet')) {
            echo "0";
        }
        $this->load->helper(array('form'));
        $this->article->setId_carnetvoyage( $this->input->post('idCarnet') );

        $data["articles"] = $this->article->getArticles();
        $data["id_carnet_voyage"] = $this->input->post('id');
        $this->load->view('user/article/list_article', $data);
    }

    public function upload() {
        $this->load->model('imageFiche');
        if (!$this->session->userdata('logged_in')) {
            echo 'co';
            die;
        }
        $this->load->view('user/article/upload_image.php');
    }

    public function delete() {
        if (!$this->session->userdata('logged_in')) {
            echo 'co';
            die;
        }
        $this->load->view('user/article/delete_image.php');
    }

}
