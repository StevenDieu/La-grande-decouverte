<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

define('TARGETIMAGE', str_replace('\\', '/', getcwd()) . "/media/produit/");

class Model_voyage extends CI_Controller {

    private $id_voyage;
    private $inputInfoGene;
    private $inputInfopays;
    private $inputImages = array("meteo_image", "drapeau", "image_sous_slider", "img_deroulement_voyage");
    private $tabExt = array('jpg', 'gif', 'png', 'jpeg');

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->library('form_validation');
        $this->load->model('voyage');
        $this->load->model('pays');
        $this->load->model('images');
        $this->load->model('pictoVoyage');
        $this->load->model('infoVoyage');
        $this->load->model('deroulementVoyage');

        $this->load->model('imagePicto');
        $this->load->model('continents');

        $this->load->helper('file');
    }

    public function save() {
        $this->generateSetRules(true);
        $this->uploadImage();
        if ($this->form_validation->run() == FALSE) {
            $data["continents"] = $this->continents->getContinents();
            $data["pictos"] = $this->imagePicto->getPictos();
            $data["adminJs"] = array("voyage/voyage");
            $this->load->templateAdmin('/voyage/add_voyage', $data);
        } else {
            $this->id_voyage = $this->ajouterVoyage();
            if ($this->id_voyage > 0) {
                $this->ajouterPays();
                $this->ajouterImage($this->input->post('image_image_slider'), "image_slider");
                $this->ajouterImage($this->input->post('image_banniere'), "banniere");
                $this->ajouterImage($this->input->post('image_image_description'), "image_description");
                $this->ajouterPicto();
                $this->ajouterInfoVoyage();
                $this->ajouterDeroulementVoyage();
                redirect('admin/voyages/liste', 'refresh');
            }
        }
    }

    public function edit() {
        if ($this->input->post("id_voyage") == null) {
            redirect('admin/voyages/liste', 'refresh');
        }
        $this->id_voyage = $this->input->post("id_voyage");
        $this->generateSetRules(false);
        $this->uploadImage();
        if ($this->form_validation->run() == FALSE) {
            $data["continents"] = $this->continents->getContinents();
            $data["pictos"] = $this->imagePicto->getPictos();
            $data["adminJs"] = array("voyage/voyage");
            $this->load->templateAdmin('/voyage/edit?id=' + $this->input->post("id_voyage"), $data);
        } else {
            $this->editerVoyage();
            $this->editerPays();
            $this->images->setId_voyage($this->id_voyage);
            $this->images->deleteImageByVoyage();
            $this->ajouterImage($this->input->post('image_image_slider'), "image_slider");
            $this->ajouterImage($this->input->post('image_banniere'), "banniere");
            $this->ajouterImage($this->input->post('image_image_description'), "image_description");
            $this->pictoVoyage->setId_voyage($this->id_voyage);
            $this->pictoVoyage->deletePictoVoyage();
            $this->ajouterPicto();
            die();
            $this->editerInfoVoyage();
            $this->editerDeroulementVoyage();
            redirect('admin/voyages/liste', 'refresh');
        }
    }

    private function generateSetRules($addVoyage) {
        //information générale
        $this->inputInfoGene = $this->voyage->getInput();
        $inputInfoGene = remove_last_element_array($this->inputInfoGene, 1);
        foreach ($inputInfoGene as $input) {
            $this->form_validation->set_rules($input, $input, 'trim|xss_clean|required');
        }
        if (empty($_FILES['image_sous_slider']['name']) && $addVoyage) {
            $this->form_validation->set_rules('image_sous_slider', 'image_sous_slider', 'xss_clean|required');
        }

        //information pays
        $this->inputInfopays = $this->pays->getInput();
        $inputInfoPays = remove_last_element_array($this->inputInfoGene, 2);
        foreach ($inputInfoPays as $input) {
            $this->form_validation->set_rules($input, $input, 'trim|xss_clean');
        }
        $this->form_validation->set_rules("id_continent", "id_continent", 'trim|xss_clean|required');


        //images
        $this->form_validation->set_rules('image_image_slider', 'image_image_slider', 'xss_clean|required');
        $this->form_validation->set_rules('image_banniere', 'image_banniere', 'xss_clean|required');
        $this->form_validation->set_rules('image_image_description', 'image_image_description', 'xss_clean|required');
        $this->form_validation->set_rules('picto_hidden', 'picto_hidden', 'xss_clean|required');


        //info voyage
        $this->inputInfoVoyage = $this->infoVoyage->getInput();
        $this->form_validation->set_rules('date_depart', 'date_depart', 'xss_clean|required');
        $this->form_validation->set_rules('date_arrivee', 'date_arrivee', 'xss_clean|required');
        $this->form_validation->set_rules('depart', 'depart', 'xss_clean|required');
        $this->form_validation->set_rules('arrivee', 'arrivee', 'xss_clean|required');
        $this->form_validation->set_rules('prix', 'prix', 'xss_clean|required|callback_is_price');
        $this->form_validation->set_rules('special_price', 'special_price', 'xss_clean|callback_is_price');
        $this->form_validation->set_rules('tva', 'tva', 'xss_clean|required|callback_is_price');
        $this->form_validation->set_rules('formalite', 'formalite', 'xss_clean');
        $this->form_validation->set_rules('asavoir', 'asavoir', 'xss_clean');
        $this->form_validation->set_rules('comprenant', 'comprenant', 'xss_clean');

        //info déroulement
        $this->inputDeroulementVoyage = $this->deroulementVoyage->getInput();
        $inputDeroulementVoyage = remove_last_element_array($this->inputDeroulementVoyage, 2);
        foreach ($inputDeroulementVoyage as $input) {
            $this->form_validation->set_rules($input, $input, 'xss_clean|required');
        }
    }

    private function uploadImage() {
        foreach ($this->inputImages as $inputImage) {
            if ($_FILES[$inputImage]["size"] != 0) {
                $this->add_upload($_FILES[$inputImage], $inputImage);
            }
        }
    }

    private function ajouterVoyage() {
        foreach ($this->inputInfoGene as $input) {
            if ($input == "image_sous_slider" && isset($this->inputImages[$input])) {
                $this->voyage->__set($input, $this->inputImages[$input][0]);
            } else {
                $this->voyage->__set($input, $this->input->post($input));
            }
        }
        return $this->voyage->addVoyage();
    }

    private function editerVoyage() {
        foreach ($this->inputInfoGene as $input) {
            if ($input == "image_sous_slider" && isset($this->inputImages[$input])) {
                $this->voyage->__set($input, $this->inputImages[$input][0]);
            } else {
                $this->voyage->__set($input, $this->input->post($input));
            }
        }
        $this->voyage->setId($this->id_voyage);
        $this->voyage->editerVoyage();
    }

    private function ajouterPays() {
        foreach ($this->inputInfopays as $input) {
            if (($input == "meteo_image" || $input == "drapeau") && isset($this->inputImages[$input])) {
                $this->pays->__set($input, $this->inputImages[$input][0]);
            } else {
                $this->pays->__set($input, $this->input->post($input));
            }
        }
        $this->pays->__set('id_voyage', $this->id_voyage);
        $this->pays->addPays();
    }

    private function editerPays() {
        foreach ($this->inputInfopays as $input) {
            if (($input == "meteo_image" || $input == "drapeau") && isset($this->inputImages[$input])) {
                $this->pays->__set($input, $this->inputImages[$input][0]);
            } else {
                $this->pays->__set($input, $this->input->post($input));
            }
        }
        $this->pays->__set('id_voyage', $this->id_voyage);
        $this->pays->editerPays();
    }

    private function ajouterImage($input, $emplacement) {
        for ($i = 0; $i < count($input); $i++) {
            $nom = $this->input->post('titre_' . $emplacement)[$i];
            $this->images->setLien($input[$i]);
            $this->images->setNom($nom);
            $this->images->setEmplacement($emplacement);
            $this->images->setId_voyage($this->id_voyage);
            $this->images->addImage();
        }
    }

    private function ajouterPicto() {
        $input = explode(",", $this->input->post("picto_hidden"));
        for ($i = 0; $i < count($input); $i++) {
            $this->pictoVoyage->setId_image_picto($input[$i]);
            $this->pictoVoyage->setId_voyage($this->id_voyage);
            $this->pictoVoyage->addPictoVoyage();
        }
    }

    private function ajouterInfoVoyage() {
        $inputs = $this->input->post("date_depart");
        for ($i = 0; $i < count($inputs); $i++) {
            foreach ($this->inputInfoVoyage as $input) {
                $this->infoVoyage->__set($input, $this->input->post($input)[$i]);
            }
            $this->infoVoyage->__set('id_voyage', $this->id_voyage);
            $this->infoVoyage->addInfoVoyage();
        }
    }

    private function ajouterDeroulementVoyage() {
        $inputs = $this->input->post("titrederoulement");
        $image = 0;
        for ($i = 0; $i < count($inputs); $i++) {
            foreach ($this->inputDeroulementVoyage as $input) {
                if ($input == "img_deroulement_voyage" && isset($this->inputImages[$input]) && $_FILES[$input]["size"][$i] != 0) {
                    $this->deroulementVoyage->__set($input, $this->inputImages[$input][$image]);
                    $image++;
                } else {
                    $this->deroulementVoyage->__set($input, $this->input->post($input)[$i]);
                }
            }
            $this->deroulementVoyage->__set('id_voyage', $this->id_voyage);
            $this->deroulementVoyage->addDeroulement();
        }
    }

    public function is_price($prix) {
        $regex = "/^[0-9]*(,[0-9]{2}|[.][0-9]{2}|)$/";
        for ($i = 0; $i < count($prix); $i++) {
            if (!empty($prix[$i])) {
                if (preg_match($regex, $prix[$i])) {
                    return true;
                } else {
                    if ("%s" === "prix") {
                        $label = "Prix";
                    } else if ("%s" === "special_price") {
                        $label = "Prix spécial";
                    } else {
                        $label = "Tva";
                    }
                    $this->form_validation->set_message('is_price', $label . ' doit être un prix.');
                    return false;
                }
            }
        }
    }

    public function delete() {
        if (!$this->input->get('id')) {
            redirect('admin/voyages/liste', 'refresh');
        }
        $this->voyage->setId($this->input->get('id'));
        $this->pictoVoyage->setId_voyage($this->input->get('id'));
        $this->pays->__set("id_voyage", $this->input->get('id'));
        $this->images->setId_voyage($this->input->get('id'));
        $this->infoVoyage->__set("id_voyage", $this->input->get('id'));
        $this->deroulementVoyage->__set("id_voyage", $this->input->get('id'));

        $data["pictoVoyage"] = $this->pictoVoyage->deletePictoVoyage();
        $data["pays"] = $this->pays->deletePaysByVoyage();
        $data["images"] = $this->images->deleteImagesByVoyage();

        $data["infoVoyages"] = $this->infoVoyage->deleteInfoVoyageByVoyage();
        $data["deroulementVoyages"] = $this->deroulementVoyage->deleteAllDeroulementByVoyage();

        $data["voyage"] = $this->voyage->deleteVoyage();

        redirect('admin/voyages/liste', 'refresh');
    }

    private function add_upload($file, $dossier) {
        if (is_array($file["name"])) {
            for ($i = 0; $i < count($file["name"]); $i++) {
                $name = $file["name"][$i];
                $error = $file['error'][$i];
                $tmp_name = $file['tmp_name'][$i];
                $this->upload($name, $error, $tmp_name, $dossier);
            }
        } else {
            $name = $file["name"];
            $error = $file['error'];
            $tmp_name = $file['tmp_name'];
            $this->upload($name, $error, $tmp_name, $dossier);
        }
    }

    private function upload($name, $error, $tmp_name, $dossier) {
        if (!empty($name)) {
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            if (in_array(strtolower($extension), $this->tabExt)) {
                if (isset($error) && UPLOAD_ERR_OK === $error) {
                    $nomImage = md5(uniqid()) . '.' . $extension;
                    if (move_uploaded_file($tmp_name, TARGETIMAGE . $dossier . "/" . $nomImage)) {
                        if (!isset($this->inputImages[$dossier])) {
                            $this->inputImages[$dossier] = array();
                        }
                        array_push($this->inputImages[$dossier], "produit/" . $dossier . "/" . $nomImage);
                    }
                }
            }
        }
    }

}
