<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fonction extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/connexion', 'refresh');
        }
    }

    public function clearPicture() {
        $this->load->model('images');
        $this->load->model('voyage');
        $this->load->model('pays');
        $this->load->model('pays');
        $this->load->model('deroulementvoyage');
        $this->load->model('pictovoyage');
        $this->load->model('imagesfiche');
        $this->load->model('actualite');
        $this->load->model('cms');

        $this->images->setEmplacement("image_slider");
        $imagesSlider = $this->images->getImagesByEmplacement();
        if (!empty($imagesSlider)) {
            $this->deleteImage($imagesSlider, "produit/image_slider/");
        }
        $this->images->setEmplacement("banniere");
        $imagesBaniere = $this->images->getImagesByEmplacement();
        if (!empty($imagesBaniere)) {
            $this->deleteImage($imagesBaniere, "produit/banniere/");
        }
        $this->images->setEmplacement("image_description");
        $imagesDescription = $this->images->getImagesByEmplacement();
        if (!empty($imagesDescription)) {
            $this->deleteImage($imagesDescription, "produit/image_description/");
        }

        $imageVoyageDrapeau = $this->pays->getImageVoyage();
        if (!empty($imageVoyageDrapeau)) {
            $this->deleteImage($imageVoyageDrapeau, "produit/drapeau/");
        }

        if (!empty($imageVoyageDrapeau)) {
            $this->deleteImage($imageVoyageDrapeau, "produit/meteo_image/");
        }

        $imageVoyageDeroulement = $this->deroulementvoyage->getImageDeroulement();
        if (!empty($imageVoyageDeroulement)) {
            $this->deleteImage($imageVoyageDeroulement, "produit/img_deroulement_voyage/");
        }

        $imageVoyageImageSousSlider = $this->voyage->getImageSousSlider();
        if (!empty($imageVoyageImageSousSlider)) {
            $this->deleteImage($imageVoyageImageSousSlider, "produit/image_sous_slider/");
        }

        $imageVoyagePicto = $this->pictovoyage->getImagePicto();
        if (!empty($imageVoyagePicto)) {
            $this->deleteImage($imageVoyagePicto, "produit/picto/");
        }

        $imageArticle = $this->imagesfiche->getImagesArticles();
        if (!empty($imageArticle)) {
            $this->deleteImage($imageArticle, "carnet/article/");
        }

        $imageActualite = $this->actualite->getImagesActualite();
        if (!empty($imageActualite)) {
            $this->deleteImage($imageActualite, "actualite/");
        }

        $imageCms = $this->cms->getImagesCMS();
        if (!empty($imageCms)) {
            $this->deleteImage($imageCms, "home/cms/");
        }
        
    }

    private function deleteImage($tabImages, $lien) {
        $dir = getcwd() . "/media/" . $lien;

        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file != "." && $file != "..") {
                        if ($this->searchInTab($tabImages, $lien . $file)) {
                            unlink(getcwd() . "/media/" . $lien . $file);
                        }
                    }
                }
                closedir($dh);
            }
        }
    }

    private function searchInTab($tabImages, $file) {
        foreach ($tabImages as $tabImage) {
            if (isset($tabImage->lien) && $tabImage->lien === $file) {
                return false;
            } else if (isset($tabImage->meteo_image) && $tabImage->meteo_image === $file) {
                return false;
            } else if (isset($tabImage->drapeau) && $tabImage->drapeau === $file) {
                return false;
            } else if (isset($tabImage->img_deroulement_voyage) && $tabImage->img_deroulement_voyage === $file) {
                return false;
            } else if (isset($tabImage->image_sous_slider) && $tabImage->image_sous_slider === $file) {
                return false;
            } else if (isset($tabImage->img1) && "actualite/" . $tabImage->img1 === $file) {
                return false;
            } else if (isset($tabImage->img2) && "actualite/" . $tabImage->img2 === $file) {
                return false;
            } else if (isset($tabImage->img3) && "actualite/" . $tabImage->img3 === $file) {
                return false;
            } else if (isset($tabImage->image) && "home/cms/" . $tabImage->image === $file) {
                return false;
            }
        }
        return true;
    }

}
