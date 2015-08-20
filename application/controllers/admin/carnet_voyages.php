<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Carnet_voyages extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->model('carnetVoyage');
        $this->load->model('article');
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
    }

    public function liste() {
        $data["carnetVoyagesVisibles"] = $this->carnetVoyage->getAllCarnetVoyagesVisibleBO();
        $data["carnetVoyagesNotVisibles"] = $this->carnetVoyage->getAllCarnetVoyagesNotVisibleBO();
        $data["adminJs"] = array("carnetVoyage/carnetVoyage");
        $this->load->templateAdmin('/carnet/list_carnet_voyage', $data);
    }

    public function list_fiche_voyage() {
        if (!$this->input->get('id')) {
            redirect('admin/carnet_voyages/liste', 'refresh');
        }
        $data["adminJs"] = array("ficheVoyage/article");
        $this->article->setId_carnetvoyage($this->input->get('id'));
        $data["articles"] = $this->article->getAllArticle();
        $this->load->templateAdmin('/ficheVoyage/list_fiche_voyage', $data);
    }

    public function edit_article() {
        if (!$this->input->get('idArticle')) {
            $data["carnetVoyagesVisibles"] = $this->carnetVoyage->getAllCarnetVoyagesVisibleBO();
            $data["carnetVoyagesNotVisibles"] = $this->carnetVoyage->getAllCarnetVoyagesNotVisibleBO();
            $this->load->templateAdmin('/carnet/list_carnet_voyage', $data);
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
            $this->article->setId($this->input->get('idArticle'));
            $data["article"] = $this->article->getArticleAdmin();
            $this->load->templateAdmin('/ficheVoyage/edit_article', $data);
        }
    }
}
