<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_voyage extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('voyage');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }








    public function save() {
        //information générale
        $this->form_validation->set_rules('titre', 'titre', 'trim|xss_clean|required');
        $this->form_validation->set_rules('phrase_accroche', 'phrase_accroche', 'trim|xss_clean|required');
        $this->form_validation->set_rules('duree', 'duree', 'trim|xss_clean|required');
        $this->form_validation->set_rules('description_first_bloc', 'description_first_bloc', 'trim|xss_clean|required');
        $this->form_validation->set_rules('description_second_bloc', 'description_second_bloc', 'trim|xss_clean|required');
        $this->form_validation->set_rules('description_third_bloc', 'description_third_bloc', 'trim|xss_clean|required');

        //information pays
        $this->form_validation->set_rules('capital', 'capital', 'trim|xss_clean');
        $this->form_validation->set_rules('continent', 'continent', 'trim|xss_clean');
        $this->form_validation->set_rules('meteo_temperature', 'meteo_temperature', 'trim|xss_clean');
        $this->form_validation->set_rules('villes_principales', 'villes_principales', 'trim|xss_clean');
        $this->form_validation->set_rules('religion', 'religion', 'trim|xss_clean');
        $this->form_validation->set_rules('nombre_habitant', 'nombre_habitant', 'trim|xss_clean');
        $this->form_validation->set_rules('monnaie', 'monnaie', 'trim|xss_clean');
        $this->form_validation->set_rules('fete', 'fete', 'trim|xss_clean');
        $this->form_validation->set_rules('langue_officielle', 'langue_officielle', 'trim|xss_clean');

        //images
        $this->form_validation->set_rules('image_slider_1', 'image_slider_1', 'trim|xss_clean');
        $this->form_validation->set_rules('image_slider_2', 'image_slider_2', 'trim|xss_clean');
        $this->form_validation->set_rules('image_slider_3', 'image_slider_3', 'trim|xss_clean');

        $this->form_validation->set_rules('picto_1', 'picto_1', 'trim|xss_clean');
        $this->form_validation->set_rules('picto_2', 'picto_2', 'trim|xss_clean');
        $this->form_validation->set_rules('picto_3', 'picto_3', 'trim|xss_clean');
        $this->form_validation->set_rules('picto_4', 'picto_4', 'trim|xss_clean');
        $this->form_validation->set_rules('picto_5', 'picto_5', 'trim|xss_clean');
        $this->form_validation->set_rules('picto_6', 'picto_6', 'trim|xss_clean');

        $this->form_validation->set_rules('drapeau', 'drapeau', 'trim|xss_clean');

        //info vente
        $this->form_validation->set_rules('date_depart', 'date_depart', 'xss_clean');
        $this->form_validation->set_rules('date_arrivee', 'date_arrivee', 'xss_clean');
        $this->form_validation->set_rules('depart', 'depart', 'xss_clean');
        $this->form_validation->set_rules('arrivee', 'arrivee', 'xss_clean');
        $this->form_validation->set_rules('formalite', 'formalite', 'xss_clean');
        $this->form_validation->set_rules('asavoir', 'asavoir', 'xss_clean');
        $this->form_validation->set_rules('comprenant', 'comprenant', 'xss_clean');
        $this->form_validation->set_rules('place_dispo', 'place_dispo', 'xss_clean');
        $this->form_validation->set_rules('prix', 'prix', 'xss_clean');
        $this->form_validation->set_rules('special_price', 'special_price', 'xss_clean');
        $this->form_validation->set_rules('tva', 'tva', 'xss_clean');

        //info déroulement
        $this->form_validation->set_rules('titrederoulement', 'titrederoulement', 'xss_clean');
        $this->form_validation->set_rules('texte', 'texte', 'xss_clean');
        $this->form_validation->set_rules('jour', 'jour', 'xss_clean');

        //information carte
        $this->form_validation->set_rules('lattitude', 'lattitude', 'trim|xss_clean');
        $this->form_validation->set_rules('longitude', 'longitude', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $data["continents"] = $this->voyage->getContinents();
            $this->load->templateAdmin('voyage/add_voyage',$data);
        } else {
            //information générale
            $titre = $this->input->post('titre');
            $phrase_accroche = $this->input->post('phrase_accroche');
            $duree = $this->input->post('duree');
            $description_first_bloc = $this->input->post('description_first_bloc');
            $description_second_bloc = $this->input->post('description_second_bloc');
            $description_third_bloc = $this->input->post('description_third_bloc');

            //information pays
            $capital = $this->input->post('capital');
            $continent = $this->input->post('continent');
            $meteo_temperature = $this->input->post('meteo_temperature');
            $villes_principales = $this->input->post('villes_principales');
            $religion = $this->input->post('religion');
            $nombre_habitant = $this->input->post('nombre_habitant');
            $monnaie = $this->input->post('monnaie');
            $fete = $this->input->post('fete');
            $langue_officielle = $this->input->post('langue_officielle');

            //information carte
            $lattitude = $this->input->post('lattitude');
            $longitude = $this->input->post('longitude');

            //images
            $image_slider_1 = $_FILES['image_slider_1']["name"];
            $image_slider_2 = $_FILES['image_slider_2']["name"];
            $image_slider_3 = $_FILES['image_slider_3']["name"];

            $picto_1 = $_FILES['picto_1']["name"];
            $picto_2 = $_FILES['picto_2']["name"];
            $picto_3 = $_FILES['picto_3']["name"];
            $picto_4 = $_FILES['picto_4']["name"];
            $picto_5 = $_FILES['picto_5']["name"];
            $picto_6 = $_FILES['picto_6']["name"];

            //info vente
            $date_depart = $this->input->post('date_depart');
            $date_arrivee = $this->input->post('date_arrivee');
            $depart = $this->input->post('depart');
            $arrivee = $this->input->post('arrivee');
            $formalite = $this->input->post('formalite');
            $asavoir = $this->input->post('asavoir');
            $comprenant = $this->input->post('comprenant');
            $place_dispo = $this->input->post('place_dispo');
            $prix = $this->input->post('prix');
            $special_price = $this->input->post('special_price');
            $tva = $this->input->post('tva');

            //info déroulement
            $titrederoulement = $this->input->post('titrederoulement');
            $texte = $this->input->post('texte');
            $jour = $this->input->post('jour');

            $image_description_1 = $_FILES['image_description_1']["name"];
            $image_description_2 = $_FILES['image_description_2']["name"];
            $image_description_3 = $_FILES['image_description_3']["name"];
            $image_description_4 = $_FILES['image_description_4']["name"];
            $image_description_5 = $_FILES['image_description_5']["name"];
            $image_description_6 = $_FILES['image_description_6']["name"];

            $image_baniere_1 = $_FILES['image_baniere_1']["name"];
            $image_baniere_2 = $_FILES['image_baniere_2']["name"];
            $image_baniere_3 = $_FILES['image_baniere_3']["name"];
            $image_baniere_4 = $_FILES['image_baniere_4']["name"];

            $drapeau = $_FILES['drapeau']["name"];

            $image_sous_slider = $_FILES['image_sous_slider']["name"];

            $meteo_image = $_FILES['meteo_image']["name"];

            if ($image_slider_1 != "" || $image_slider_2 != "" || $image_slider_3 != "") {
                $this->upload->initialize($this->initailisationConfig( getcwd()."/media/produit/image_slider/",
                    'gif|jpg|png','2048000','2048','2048'));

                $image_slider_1 = $this->uploadImage($image_slider_1,'image_slider_1');
                $image_slider_2 = $this->uploadImage($image_slider_2,'image_slider_2');
                $image_slider_3 = $this->uploadImage($image_slider_3,'image_slider_3');
            }

            if ($picto_1 != '' || $picto_2 != '' || $picto_3 != '' || $picto_4 != '' || $picto_5 != '' || $picto_6 = '') {
                $this->upload->initialize($this->initailisationConfig( getcwd()."/media/produit/picto/",
                    'gif|jpg|png','2048000','100','100'));

                $picto_1 = $this->uploadImage($picto_1,'picto_1');
                $picto_2 = $this->uploadImage($picto_2,'picto_2');
                $picto_3 = $this->uploadImage($picto_3,'picto_3');
                $picto_4 = $this->uploadImage($picto_4,'picto_4');
                $picto_5 = $this->uploadImage($picto_5,'picto_5');
                $picto_6 = $this->uploadImage($picto_6,'picto_6');
            }

            if ($image_baniere_1 != '' || $image_baniere_2 != '' || $image_baniere_3 != '' || $image_baniere_4 != '') {
                $this->upload->initialize($this->initailisationConfig( getcwd()."/media/produit/banniere/",
                    'gif|jpg|png','2048000','1024','768'));

                $image_baniere_1 = $this->uploadImage($image_baniere_1,'image_baniere_1');
                $image_baniere_2 = $this->uploadImage($image_baniere_2,'image_baniere_2');
                $image_baniere_3 = $this->uploadImage($image_baniere_3,'image_baniere_3');
                $image_baniere_4 = $this->uploadImage($image_baniere_4,'image_baniere_4');
            }

            if ($image_description_1 != '' || $image_description_2 != '' || $image_description_3 != '' || $image_description_4 != '' || $image_description_5 != '' || $image_description_6 = '') {
                $this->upload->initialize($this->initailisationConfig( getcwd()."/media/produit/image_description/",
                    'gif|jpg|png','2048000','1024','768'));

                $image_description_1 = $this->uploadImage($image_description_1,'image_description_1');
                $image_description_2 = $this->uploadImage($image_description_2,'image_description_2');
                $image_description_3 = $this->uploadImage($image_description_3,'image_description_3');
                $image_description_4 = $this->uploadImage($image_description_4,'image_description_4');
                $image_description_5 = $this->uploadImage($image_description_5,'image_description_5');
                $image_description_6 = $this->uploadImage($image_description_6,'image_description_6');
            }

            if ($image_sous_slider != '') {
                $this->upload->initialize($this->initailisationConfig( getcwd()."/media/produit/image_sous_slider/",
                    'gif|jpg|png','2048000','1024','768'));

                $image_sous_slider = $this->uploadImage($image_sous_slider,'image_sous_slider');
            }

            if ($meteo_image != '') {
                $this->load->library('upload');
                $this->upload->initialize($this->initailisationConfig( getcwd()."/media/produit/meteo_image/",
                    'gif|jpg|png','2048000','1024','768'));

                $meteo_image = $this->uploadImage($meteo_image,'meteo_image');
            }

            if ($drapeau != '') {
                $this->upload->initialize($this->initailisationConfig( getcwd()."/media/produit/drapeau/",
                    'gif|jpg|png','2048000','1024','768'));

                $drapeau = $this->uploadImage($drapeau,'drapeau');
            }


            $resultid = $this->voyage->ajouterVoyage(
                    $image_slider_1, $image_slider_2, $image_slider_3, $titre, $phrase_accroche, $duree, $image_sous_slider, //
                    $description_first_bloc, $description_second_bloc, $description_third_bloc, $drapeau, $capital, $continent, $meteo_image, //
                    $meteo_temperature, $picto_1, //
                    $picto_2, //
                    $picto_3, //
                    $picto_4, //
                    $picto_5, //
                    $picto_6, //
                    $villes_principales, $religion, $nombre_habitant, $monnaie, $fete, $langue_officielle, $image_baniere_1, //
                    $image_baniere_2, //
                    $image_baniere_3, //
                    $image_baniere_4, //
                    $image_description_1, //
                    $image_description_2, //
                    $image_description_3, //
                    $image_description_4, //
                    $image_description_5, //
                    $image_description_6, //
                    $lattitude, $longitude);

            

            for ($i=0; $i < count($date_depart); $i++) { 
                $this->voyage->addInfoVoyage(
                $date_depart[$i],
                $date_arrivee[$i],
                $depart[$i],
                $arrivee[$i],
                $formalite[$i],
                $asavoir[$i],
                $comprenant[$i], 
                $place_dispo[$i],
                $prix[$i],
                $special_price[$i],
                $tva[$i],
                $resultid
                );
            }

            $photo = array("aze","e");

            for ($i=0; $i < count($titrederoulement); $i++) { 
                $this->voyage->addDeroulement(
                $titrederoulement[$i],
                $texte[$i],
                $photo[$i],
                $jour[$i],
                $resultid
                );
            }

            //redirect('admin/voyages/liste', 'refresh');
        }
    }







    function chaine_aleatoire($nb_car, $chaine = 'azertyuiopqsdfghjklmwxcvbn123456789') {
        $nb_lettres = strlen($chaine) - 1;
        $generation = '';
        for ($i = 0; $i < $nb_car; $i++) {
            $pos = mt_rand(0, $nb_lettres);
            $car = $chaine[$pos];
            $generation .= $car;
        }
        return $generation;
    }








    public function delete() {
        $id = $this->input->get('id');

        $result = $this->voyage->deleteVoyage($id);

        redirect('admin/voyages/liste', 'refresh');
    }






    public function edit() {
        //information générale
        $this->form_validation->set_rules('titre', 'titre', 'trim|xss_clean|required');
        $this->form_validation->set_rules('phrase_accroche', 'phrase_accroche', 'trim|xss_clean|required');
        $this->form_validation->set_rules('duree', 'duree', 'trim|xss_clean|required');
        $this->form_validation->set_rules('description_first_bloc', 'description_first_bloc', 'trim|xss_clean|required');
        $this->form_validation->set_rules('description_second_bloc', 'description_second_bloc', 'trim|xss_clean|required');
        $this->form_validation->set_rules('description_third_bloc', 'description_third_bloc', 'trim|xss_clean|required');

        //information pays
        $this->form_validation->set_rules('capital', 'capital', 'trim|xss_clean');
        $this->form_validation->set_rules('continent', 'continent', 'trim|xss_clean');
        $this->form_validation->set_rules('meteo_temperature', 'meteo_temperature', 'trim|xss_clean');
        $this->form_validation->set_rules('villes_principales', 'villes_principales', 'trim|xss_clean');
        $this->form_validation->set_rules('religion', 'religion', 'trim|xss_clean');
        $this->form_validation->set_rules('nombre_habitant', 'nombre_habitant', 'trim|xss_clean');
        $this->form_validation->set_rules('monnaie', 'monnaie', 'trim|xss_clean');
        $this->form_validation->set_rules('fete', 'fete', 'trim|xss_clean');
        $this->form_validation->set_rules('langue_officielle', 'langue_officielle', 'trim|xss_clean');

        //images
        $this->form_validation->set_rules('image_slider_1', 'image_slider_1', 'trim|xss_clean');
        $this->form_validation->set_rules('image_slider_2', 'image_slider_2', 'trim|xss_clean');
        $this->form_validation->set_rules('image_slider_3', 'image_slider_3', 'trim|xss_clean');

        $this->form_validation->set_rules('picto_1', 'picto_1', 'trim|xss_clean');
        $this->form_validation->set_rules('picto_2', 'picto_2', 'trim|xss_clean');
        $this->form_validation->set_rules('picto_3', 'picto_3', 'trim|xss_clean');
        $this->form_validation->set_rules('picto_4', 'picto_4', 'trim|xss_clean');
        $this->form_validation->set_rules('picto_5', 'picto_5', 'trim|xss_clean');
        $this->form_validation->set_rules('picto_6', 'picto_6', 'trim|xss_clean');

        $this->form_validation->set_rules('date_depart', 'date_depart', 'xss_clean');
        $this->form_validation->set_rules('date_arrivee', 'date_arrivee', 'xss_clean');
        $this->form_validation->set_rules('depart', 'depart', 'xss_clean');
        $this->form_validation->set_rules('arrivee', 'arrivee', 'xss_clean');
        $this->form_validation->set_rules('formalite', 'formalite', 'xss_clean');
        $this->form_validation->set_rules('asavoir', 'asavoir', 'xss_clean');
        $this->form_validation->set_rules('comprenant', 'comprenant', 'xss_clean');
        $this->form_validation->set_rules('place_dispo', 'place_dispo', 'xss_clean');
        $this->form_validation->set_rules('prix', 'prix', 'xss_clean');
        $this->form_validation->set_rules('special_price', 'special_price', 'xss_clean');
        $this->form_validation->set_rules('tva', 'tva', 'xss_clean');
        $this->form_validation->set_rules('id_voyage_vente', 'id_voyage_vente', 'xss_clean');

        //information carte
        $this->form_validation->set_rules('lattitude', 'lattitude', 'trim|xss_clean');
        $this->form_validation->set_rules('longitude', 'longitude', 'trim|xss_clean');

        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $data["voyage"] = $this->voyage->getVoyage($this->input->post('id'));
            $data["voyageVente"] = $this->voyage->getInfoVoyage($this->input->post('id'));
            $data["continents"] = $this->voyage->getContinents();
            $this->load->templateAdmin('voyage/edit_voyage',$data);
        } else {
            //information générale
            $titre = $this->input->post('titre');
            $phrase_accroche = $this->input->post('phrase_accroche');
            $duree = $this->input->post('duree');
            $description_first_bloc = $this->input->post('description_first_bloc');
            $description_second_bloc = $this->input->post('description_second_bloc');
            $description_third_bloc = $this->input->post('description_third_bloc');
            $id = $this->input->post('id');

            //information pays
            $capital = $this->input->post('capital');
            $continent = $this->input->post('continent');
            $meteo_temperature = $this->input->post('meteo_temperature');
            $villes_principales = $this->input->post('villes_principales');
            $religion = $this->input->post('religion');
            $nombre_habitant = $this->input->post('nombre_habitant');
            $monnaie = $this->input->post('monnaie');
            $fete = $this->input->post('fete');
            $langue_officielle = $this->input->post('langue_officielle');

            //information carte
            $lattitude = $this->input->post('lattitude');
            $longitude = $this->input->post('longitude');

            //info vente
            $date_depart = $this->input->post('date_depart');
            $date_arrivee = $this->input->post('date_arrivee');
            $depart = $this->input->post('depart');
            $arrivee = $this->input->post('arrivee');
            $formalite = $this->input->post('formalite');
            $asavoir = $this->input->post('asavoir');
            $comprenant = $this->input->post('comprenant');
            $place_dispo = $this->input->post('place_dispo');
            $prix = $this->input->post('prix');
            $special_price = $this->input->post('special_price');
            $tva = $this->input->post('tva');
            $id_voyage_vente = $this->input->post('id_voyage_vente');

            //images
            $image_slider_1 = $_FILES['image_slider_1']["name"];
            $image_slider_2 = $_FILES['image_slider_2']["name"];
            $image_slider_3 = $_FILES['image_slider_3']["name"];

            $picto_1 = $_FILES['picto_1']["name"];
            $picto_2 = $_FILES['picto_2']["name"];
            $picto_3 = $_FILES['picto_3']["name"];
            $picto_4 = $_FILES['picto_4']["name"];
            $picto_5 = $_FILES['picto_5']["name"];
            $picto_6 = $_FILES['picto_6']["name"];

            $image_description_1 = $_FILES['image_description_1']["name"];
            $image_description_2 = $_FILES['image_description_2']["name"];
            $image_description_3 = $_FILES['image_description_3']["name"];
            $image_description_4 = $_FILES['image_description_4']["name"];
            $image_description_5 = $_FILES['image_description_5']["name"];
            $image_description_6 = $_FILES['image_description_6']["name"];

            $image_baniere_1 = $_FILES['image_baniere_1']["name"];
            $image_baniere_2 = $_FILES['image_baniere_2']["name"];
            $image_baniere_3 = $_FILES['image_baniere_3']["name"];
            $image_baniere_4 = $_FILES['image_baniere_4']["name"];

            $image_sous_slider = $_FILES['image_sous_slider']["name"];

            $drapeau = $_FILES['drapeau']["name"];

            $meteo_image = $_FILES['meteo_image']["name"];

            if ($image_slider_1 != "" || $image_slider_2 != "" || $image_slider_3 != "") {
                $this->upload->initialize($this->initailisationConfig( getcwd()."/media/produit/image_slider/",
                    'gif|jpg|png','2048000','2048','2048'));

                $image_slider_1 = $this->uploadImage($image_slider_1,'image_slider_1');
                $image_slider_2 = $this->uploadImage($image_slider_2,'image_slider_2');
                $image_slider_3 = $this->uploadImage($image_slider_3,'image_slider_3');
            }

            if ($picto_1 != '' || $picto_2 != '' || $picto_3 != '' || $picto_4 != '' || $picto_5 != '' || $picto_6 = '') {
                $this->upload->initialize($this->initailisationConfig( getcwd()."/media/produit/picto/",
                    'gif|jpg|png','2048000','100','100'));

                $picto_1 = $this->uploadImage($picto_1,'picto_1');
                $picto_2 = $this->uploadImage($picto_2,'picto_2');
                $picto_3 = $this->uploadImage($picto_3,'picto_3');
                $picto_4 = $this->uploadImage($picto_4,'picto_4');
                $picto_5 = $this->uploadImage($picto_5,'picto_5');
                $picto_6 = $this->uploadImage($picto_6,'picto_6');
            }

            if ($image_baniere_1 != '' || $image_baniere_2 != '' || $image_baniere_3 != '' || $image_baniere_4 != '') {
                $this->upload->initialize($this->initailisationConfig( getcwd()."/media/produit/banniere/",
                    'gif|jpg|png','2048000','1024','768'));

                $image_baniere_1 = $this->uploadImage($image_baniere_1,'image_baniere_1');
                $image_baniere_2 = $this->uploadImage($image_baniere_2,'image_baniere_2');
                $image_baniere_3 = $this->uploadImage($image_baniere_3,'image_baniere_3');
                $image_baniere_4 = $this->uploadImage($image_baniere_4,'image_baniere_4');
            }

            if ($image_description_1 != '' || $image_description_2 != '' || $image_description_3 != '' || $image_description_4 != '' || $image_description_5 != '' || $image_description_6 = '') {
                $this->upload->initialize($this->initailisationConfig( getcwd()."/media/produit/image_description/",
                    'gif|jpg|png','2048000','1024','768'));

                $image_description_1 = $this->uploadImage($image_description_1,'image_description_1');
                $image_description_2 = $this->uploadImage($image_description_2,'image_description_2');
                $image_description_3 = $this->uploadImage($image_description_3,'image_description_3');
                $image_description_4 = $this->uploadImage($image_description_4,'image_description_4');
                $image_description_5 = $this->uploadImage($image_description_5,'image_description_5');
                $image_description_6 = $this->uploadImage($image_description_6,'image_description_6');
            }

            if ($image_sous_slider != '') {
                $this->upload->initialize($this->initailisationConfig( getcwd()."/media/produit/image_sous_slider/",
                    'gif|jpg|png','2048000','1024','768'));

                $image_sous_slider = $this->uploadImage($image_sous_slider,'image_sous_slider');
            }

            if ($meteo_image != '') {
                $this->upload->initialize($this->initailisationConfig( getcwd()."/media/produit/meteo_image/",
                    'gif|jpg|png','2048000','1024','768'));

                $meteo_image = $this->uploadImage($meteo_image,'meteo_image');
            }

            if ($drapeau != '') {
                $this->upload->initialize($this->initailisationConfig('/Users/alex/Documents/htdocs/TVAFS-1.0/media/produit/drapeau/',
                    'gif|jpg|png','2048000','1024','768'));

                $drapeau = $this->uploadImage($drapeau,'drapeau');
            }


            $result = $this->voyage->editerVoyage(
                    $id, $image_slider_1, $image_slider_2, $image_slider_3, $titre, $phrase_accroche, $duree, $image_sous_slider, //
                    $description_first_bloc, $description_second_bloc, $description_third_bloc, $drapeau, $capital, $continent, $meteo_image, //
                    $meteo_temperature, $picto_1, //
                    $picto_2, //
                    $picto_3, //
                    $picto_4, //
                    $picto_5, //
                    $picto_6, //
                    $villes_principales, $religion, $nombre_habitant, $monnaie, $fete, $langue_officielle, $image_baniere_1, //
                    $image_baniere_2, //
                    $image_baniere_3, //
                    $image_baniere_4, //
                    $image_description_1, //
                    $image_description_2, //
                    $image_description_3, //
                    $image_description_4, //
                    $image_description_5, //
                    $image_description_6, //
                    $lattitude, $longitude);

            for ($i=0; $i < count($date_depart); $i++) { 
                $this->voyage->addInfoVoyage(
                $date_depart[$i],
                $date_arrivee[$i],
                $depart[$i],
                $arrivee[$i],
                $formalite[$i],
                $asavoir[$i],
                $comprenant[$i],     
                $place_dispo[$i],
                $prix[$i],
                $special_price[$i],
                $tva[$i],
                $id
                );
            }


            redirect('admin/voyages/liste', 'refresh');
        }
    }






    function uploadImage($image,$name){
        if ($image != "") {
            $image = $this->chaine_aleatoire(8) . $image;
            if (!$this->upload->do_upload($name, $image)) {
                $error = array('error' => $this->upload->display_errors() . $name);
                $this->load->templateAdmin('actualite/add_actualite', $error);
                return false;
            }
            return $image;
        }else{
            return '';
        }
    }







    function initailisationConfig($upload_path,$allowed_types,$max_size,$max_width,$max_height){
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = $allowed_types;
        $config['max_size'] = $max_size;
        $config['max_width'] = $max_width;
        $config['max_height'] = $max_height;

        return $config;
    }
}
