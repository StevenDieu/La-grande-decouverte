<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_voyage extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('voyage');
    }

    public function save(){
        $this->load->library('form_validation');

        //information générale
        $this->form_validation->set_rules('titre', 'titre', 'trim|xss_clean');
        $this->form_validation->set_rules('phrase_accroche', 'phrase_accroche', 'trim|xss_clean');
        $this->form_validation->set_rules('duree', 'duree', 'trim|xss_clean');
        $this->form_validation->set_rules('prix', 'prix', 'trim|xss_clean');
        $this->form_validation->set_rules('description_first_bloc', 'description_first_bloc', 'trim|xss_clean');
        $this->form_validation->set_rules('description_second_bloc', 'description_second_bloc', 'trim|xss_clean');
        $this->form_validation->set_rules('description_third_bloc', 'description_third_bloc', 'trim|xss_clean');

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


        //information carte
        $this->form_validation->set_rules('lattitude', 'lattitude', 'trim|xss_clean');
        $this->form_validation->set_rules('longitude', 'longitude', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->templateUser('page_inscription');
        } else {
            //information générale
            $titre = $this->input->post('titre');
            $phrase_accroche = $this->input->post('phrase_accroche');
            $duree = $this->input->post('duree');
            $prix = $this->input->post('prix');
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

            

            if($image_slider_1 != "" || $image_slider_2 != "" || $image_slider_3 != ""){
                $config['upload_path'] = "/Users/alex/Documents/htdocs/TVAFS-1.0/media/produit/image_slider/";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                $config['max_width']  = '2048';
                $config['max_height']  = '2048';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if($image_slider_1 != ""){
                    $image_slider_1 = $this->chaine_aleatoire(8).$image_slider_1;
                    if(!$this->upload->do_upload('image_slider_1',$image_slider_1)){
                        $error = array('error' => $this->upload->display_errors()." image_slider_1");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }
                
                if($image_slider_2 != ""){
                    $image_slider_2 = $this->chaine_aleatoire(8).$image_slider_2;
                    if(!$this->upload->do_upload('image_slider_2',$image_slider_2)){
                        $error = array('error' => $this->upload->display_errors()." image_slider_2");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_slider_3 != ""){ 
                    $image_slider_3 = $this->chaine_aleatoire(8).$image_slider_3;
                    if(!$this->upload->do_upload('image_slider_3',$image_slider_3)){
                        $error = array('error' => $this->upload->display_errors()." image_slider_3");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

            }

            if($picto_1 != '' || $picto_2 != '' || $picto_3 != '' || $picto_4 != '' || $picto_5 != '' || $picto_6 = ''){
                $config['upload_path'] = "/Users/alex/Documents/htdocs/TVAFS-1.0/media/produit/picto/";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if($picto_1 != ""){
                    $picto_1 = $this->chaine_aleatoire(8).$picto_1;
                    if(!$this->upload->do_upload('picto_1',$picto_1)){
                        $error = array('error' => $this->upload->display_errors()." picto_1");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($picto_2 != ""){
                    $picto_2 = $this->chaine_aleatoire(8).$picto_2;
                    if(!$this->upload->do_upload('picto_2',$picto_2)){
                        $error = array('error' => $this->upload->display_errors()." picto_2");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($picto_3 != ""){
                    $picto_3 = $this->chaine_aleatoire(8).$picto_3;
                    if(!$this->upload->do_upload('picto_3',$picto_3)){
                        $error = array('error' => $this->upload->display_errors()." picto_3");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($picto_4 != ""){
                    $picto_4 = $this->chaine_aleatoire(8).$picto_4;
                    if(!$this->upload->do_upload('picto_4',$picto_4)){
                        $error = array('error' => $this->upload->display_errors()." picto_4");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($picto_5 != ""){
                    $picto_5 = $this->chaine_aleatoire(8).$picto_5;
                    if(!$this->upload->do_upload('picto_5',$picto_5)){
                        $error = array('error' => $this->upload->display_errors()." picto_5");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($picto_6 != ""){
                    $picto_6 = $this->chaine_aleatoire(8).$picto_6;
                    if(!$this->upload->do_upload('picto_6',$picto_6)){
                        $error = array('error' => $this->upload->display_errors()." picto_6");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }
            }

            if($image_baniere_1 != '' || $image_baniere_2 != '' ||$image_baniere_3 != '' ||$image_baniere_4 != '' ){
                $config['upload_path'] = "/Users/alex/Documents/htdocs/TVAFS-1.0/media/produit/banniere/";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if($image_baniere_1 != ""){
                    $image_baniere_1 = $this->chaine_aleatoire(8).$image_baniere_1;
                    if(!$this->upload->do_upload('image_baniere_1',$image_baniere_1)){
                        $error = array('error' => $this->upload->display_errors()." image_baniere_1");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_baniere_2 != ""){
                    $image_baniere_2 = $this->chaine_aleatoire(8).$image_baniere_2;
                    if(!$this->upload->do_upload('image_baniere_2',$image_baniere_2)){
                        $error = array('error' => $this->upload->display_errors()." image_baniere_2");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_baniere_3 != ""){
                    $image_baniere_3 = $this->chaine_aleatoire(8).$image_baniere_3;
                    if(!$this->upload->do_upload('image_baniere_3',$image_baniere_3)){
                        $error = array('error' => $this->upload->display_errors()." image_baniere_3");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_baniere_4 != ""){
                    $image_baniere_4 = $this->chaine_aleatoire(8).$image_baniere_4;
                    if(!$this->upload->do_upload('image_baniere_4',$image_baniere_4)){
                        $error = array('error' => $this->upload->display_errors()." image_baniere_4");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }
            }

            if($image_description_1 != '' || $image_description_2 != '' || $image_description_3 != '' || $image_description_4 != '' || $image_description_5 != '' || $image_description_6 = ''){
                $config['upload_path'] = "/Users/alex/Documents/htdocs/TVAFS-1.0/media/produit/image_description/";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if($image_description_1 != ""){
                    $image_description_1 = $this->chaine_aleatoire(8).$image_description_1;
                    if(!$this->upload->do_upload('image_description_1',$image_description_1)){
                        $error = array('error' => $this->upload->display_errors()." image_description_1");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_description_2 != ""){
                    $image_description_2 = $this->chaine_aleatoire(8).$image_description_2;
                    if(!$this->upload->do_upload('image_description_2',$image_description_2)){
                        $error = array('error' => $this->upload->display_errors()." image_description_2");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_description_3 != ""){
                    $image_description_3 = $this->chaine_aleatoire(8).$image_description_3;
                    if(!$this->upload->do_upload('image_description_3',$image_description_3)){
                        $error = array('error' => $this->upload->display_errors()." image_description_3");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_description_4 != ""){
                    $image_description_4 = $this->chaine_aleatoire(8).$image_description_4;
                    if(!$this->upload->do_upload('image_description_4',$image_description_4)){
                        $error = array('error' => $this->upload->display_errors()." image_description_4");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_description_5 != ""){
                    $image_description_5 = $this->chaine_aleatoire(8).$image_description_5;
                    if(!$this->upload->do_upload('image_description_5',$image_description_5)){
                        $error = array('error' => $this->upload->display_errors()." image_description_5");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_description_6 != ""){
                    $image_description_6 = $this->chaine_aleatoire(8).$image_description_6;
                    if(!$this->upload->do_upload('image_description_6',$image_description_6)){
                        $error = array('error' => $this->upload->display_errors()." image_description_6");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }
            }

            if($image_sous_slider != ''){
                $config['upload_path'] = "/Users/alex/Documents/htdocs/TVAFS-1.0/media/produit/image_sous_slider/";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if($image_sous_slider != ""){
                    $image_sous_slider = $this->chaine_aleatoire(8).$image_sous_slider;
                    if(!$this->upload->do_upload('image_sous_slider',$image_sous_slider)){
                        $error = array('error' => $this->upload->display_errors()." image_sous_slider");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }
            }

            if($meteo_image != ''){
                $config['upload_path'] = "/Users/alex/Documents/htdocs/TVAFS-1.0/media/produit/meteo_image/";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if($meteo_image != ""){
                    $meteo_image = $this->chaine_aleatoire(8).$meteo_image;
                    if(!$this->upload->do_upload('meteo_image',$meteo_image)){
                        $error = array('error' => $this->upload->display_errors()." meteo_image");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }
            }

            if($drapeau != ''){
                $config['upload_path'] = "/Users/alex/Documents/htdocs/TVAFS-1.0/media/produit/drapeau/";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if($drapeau != ""){
                    $drapeau = $this->chaine_aleatoire(8).$drapeau;
                    if(!$this->upload->do_upload('drapeau',$drapeau)){
                        $error = array('error' => $this->upload->display_errors()." drapeau");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }
            }


            $result = $this->voyage->ajouterVoyage(
            $image_slider_1,
            $image_slider_2,
            $image_slider_3,
            $titre,
            $phrase_accroche,
            $duree,
            $prix,
            $image_sous_slider,//
            $description_first_bloc,
            $description_second_bloc,
            $description_third_bloc,
            $drapeau,
            $capital,
            $continent,
            $meteo_image,//
            $meteo_temperature,
            $picto_1,//
            $picto_2,//
            $picto_3,//
            $picto_4,//
            $picto_5,//
            $picto_6,//
            $villes_principales,
            $religion,
            $nombre_habitant,
            $monnaie,
            $fete,
            $langue_officielle,
            $image_baniere_1,//
            $image_baniere_2,//
            $image_baniere_3,//
            $image_baniere_4,//
            $image_description_1,//
            $image_description_2,//
            $image_description_3,//
            $image_description_4,//
            $image_description_5,//
            $image_description_6,//
            $lattitude,
            $longitude);

            redirect('admin/voyages/liste', 'refresh');
        }

    }

    function chaine_aleatoire($nb_car, $chaine = 'azertyuiopqsdfghjklmwxcvbn123456789')
    {
        $nb_lettres = strlen($chaine) - 1;
        $generation = '';
        for($i=0; $i < $nb_car; $i++)
        {
            $pos = mt_rand(0, $nb_lettres);
            $car = $chaine[$pos];
            $generation .= $car;
        }
        return $generation;
    }

    public function delete(){
            $id = $this->input->get('id');

            $result = $this->voyage->deleteVoyage($id);

            redirect('admin/voyages/liste', 'refresh');
    }

    public function edit(){
        $this->load->library('form_validation');

        //information générale
        $this->form_validation->set_rules('titre', 'titre', 'trim|xss_clean');
        $this->form_validation->set_rules('phrase_accroche', 'phrase_accroche', 'trim|xss_clean');
        $this->form_validation->set_rules('duree', 'duree', 'trim|xss_clean');
        $this->form_validation->set_rules('prix', 'prix', 'trim|xss_clean');
        $this->form_validation->set_rules('description_first_bloc', 'description_first_bloc', 'trim|xss_clean');
        $this->form_validation->set_rules('description_second_bloc', 'description_second_bloc', 'trim|xss_clean');
        $this->form_validation->set_rules('description_third_bloc', 'description_third_bloc', 'trim|xss_clean');

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


        //information carte
        $this->form_validation->set_rules('lattitude', 'lattitude', 'trim|xss_clean');
        $this->form_validation->set_rules('longitude', 'longitude', 'trim|xss_clean');

         $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->templateUser('page_inscription');
        } else {
            //information générale
            $titre = $this->input->post('titre');
            $phrase_accroche = $this->input->post('phrase_accroche');
            $duree = $this->input->post('duree');
            $prix = $this->input->post('prix');
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

            

            if($image_slider_1 != "" || $image_slider_2 != "" || $image_slider_3 != ""){
                $config['upload_path'] = "/Users/alex/Documents/htdocs/TVAFS-1.0/media/produit/image_slider/";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                $config['max_width']  = '2048';
                $config['max_height']  = '2048';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if($image_slider_1 != ""){
                    $image_slider_1 = $this->chaine_aleatoire(8).$image_slider_1;
                    if(!$this->upload->do_upload('image_slider_1',$image_slider_1)){
                        $error = array('error' => $this->upload->display_errors()." image_slider_1");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }
                
                if($image_slider_2 != ""){
                    $image_slider_2 = $this->chaine_aleatoire(8).$image_slider_2;
                    if(!$this->upload->do_upload('image_slider_2',$image_slider_2)){
                        $error = array('error' => $this->upload->display_errors()." image_slider_2");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_slider_3 != ""){ 
                    $image_slider_3 = $this->chaine_aleatoire(8).$image_slider_3;
                    if(!$this->upload->do_upload('image_slider_3',$image_slider_3)){
                        $error = array('error' => $this->upload->display_errors()." image_slider_3");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

            }

            if($picto_1 != '' || $picto_2 != '' || $picto_3 != '' || $picto_4 != '' || $picto_5 != '' || $picto_6 = ''){
                $config['upload_path'] = "/Users/alex/Documents/htdocs/TVAFS-1.0/media/produit/picto/";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if($picto_1 != ""){
                    $picto_1 = $this->chaine_aleatoire(8).$picto_1;
                    if(!$this->upload->do_upload('picto_1',$picto_1)){
                        $error = array('error' => $this->upload->display_errors()." picto_1");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($picto_2 != ""){
                    $picto_2 = $this->chaine_aleatoire(8).$picto_2;
                    if(!$this->upload->do_upload('picto_2',$picto_2)){
                        $error = array('error' => $this->upload->display_errors()." picto_2");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($picto_3 != ""){
                    $picto_3 = $this->chaine_aleatoire(8).$picto_3;
                    if(!$this->upload->do_upload('picto_3',$picto_3)){
                        $error = array('error' => $this->upload->display_errors()." picto_3");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($picto_4 != ""){
                    $picto_4 = $this->chaine_aleatoire(8).$picto_4;
                    if(!$this->upload->do_upload('picto_4',$picto_4)){
                        $error = array('error' => $this->upload->display_errors()." picto_4");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($picto_5 != ""){
                    $picto_5 = $this->chaine_aleatoire(8).$picto_5;
                    if(!$this->upload->do_upload('picto_5',$picto_5)){
                        $error = array('error' => $this->upload->display_errors()." picto_5");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($picto_6 != ""){
                    $picto_6 = $this->chaine_aleatoire(8).$picto_6;
                    if(!$this->upload->do_upload('picto_6',$picto_6)){
                        $error = array('error' => $this->upload->display_errors()." picto_6");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }
            }

            if($image_baniere_1 != '' || $image_baniere_2 != '' ||$image_baniere_3 != '' ||$image_baniere_4 != '' ){
                $config['upload_path'] = "/Users/alex/Documents/htdocs/TVAFS-1.0/media/produit/banniere/";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if($image_baniere_1 != ""){
                    $image_baniere_1 = $this->chaine_aleatoire(8).$image_baniere_1;
                    if(!$this->upload->do_upload('image_baniere_1',$image_baniere_1)){
                        $error = array('error' => $this->upload->display_errors()." image_baniere_1");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_baniere_2 != ""){
                    $image_baniere_2 = $this->chaine_aleatoire(8).$image_baniere_2;
                    if(!$this->upload->do_upload('image_baniere_2',$image_baniere_2)){
                        $error = array('error' => $this->upload->display_errors()." image_baniere_2");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_baniere_3 != ""){
                    $image_baniere_3 = $this->chaine_aleatoire(8).$image_baniere_3;
                    if(!$this->upload->do_upload('image_baniere_3',$image_baniere_3)){
                        $error = array('error' => $this->upload->display_errors()." image_baniere_3");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_baniere_4 != ""){
                    $image_baniere_4 = $this->chaine_aleatoire(8).$image_baniere_4;
                    if(!$this->upload->do_upload('image_baniere_4',$image_baniere_4)){
                        $error = array('error' => $this->upload->display_errors()." image_baniere_4");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }
            }

            if($image_description_1 != '' || $image_description_2 != '' || $image_description_3 != '' || $image_description_4 != '' || $image_description_5 != '' || $image_description_6 = ''){
                $config['upload_path'] = "/Users/alex/Documents/htdocs/TVAFS-1.0/media/produit/image_description/";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if($image_description_1 != ""){
                    $image_description_1 = $this->chaine_aleatoire(8).$image_description_1;
                    if(!$this->upload->do_upload('image_description_1',$image_description_1)){
                        $error = array('error' => $this->upload->display_errors()." image_description_1");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_description_2 != ""){
                    $image_description_2 = $this->chaine_aleatoire(8).$image_description_2;
                    if(!$this->upload->do_upload('image_description_2',$image_description_2)){
                        $error = array('error' => $this->upload->display_errors()." image_description_2");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_description_3 != ""){
                    $image_description_3 = $this->chaine_aleatoire(8).$image_description_3;
                    if(!$this->upload->do_upload('image_description_3',$image_description_3)){
                        $error = array('error' => $this->upload->display_errors()." image_description_3");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_description_4 != ""){
                    $image_description_4 = $this->chaine_aleatoire(8).$image_description_4;
                    if(!$this->upload->do_upload('image_description_4',$image_description_4)){
                        $error = array('error' => $this->upload->display_errors()." image_description_4");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_description_5 != ""){
                    $image_description_5 = $this->chaine_aleatoire(8).$image_description_5;
                    if(!$this->upload->do_upload('image_description_5',$image_description_5)){
                        $error = array('error' => $this->upload->display_errors()." image_description_5");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }

                if($image_description_6 != ""){
                    $image_description_6 = $this->chaine_aleatoire(8).$image_description_6;
                    if(!$this->upload->do_upload('image_description_6',$image_description_6)){
                        $error = array('error' => $this->upload->display_errors()." image_description_6");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }
            }

            if($image_sous_slider != ''){
                $config['upload_path'] = "/Users/alex/Documents/htdocs/TVAFS-1.0/media/produit/image_sous_slider/";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if($image_sous_slider != ""){
                    $image_sous_slider = $this->chaine_aleatoire(8).$image_sous_slider;
                    if(!$this->upload->do_upload('image_sous_slider',$image_sous_slider)){
                        $error = array('error' => $this->upload->display_errors()." image_sous_slider");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }
            }

            if($meteo_image != ''){
                $config['upload_path'] = "/Users/alex/Documents/htdocs/TVAFS-1.0/media/produit/meteo_image/";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if($meteo_image != ""){
                    $meteo_image = $this->chaine_aleatoire(8).$meteo_image;
                    if(!$this->upload->do_upload('meteo_image',$meteo_image)){
                        $error = array('error' => $this->upload->display_errors()." meteo_image");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }
            }

            if($drapeau != ''){
                $config['upload_path'] = "/Users/alex/Documents/htdocs/TVAFS-1.0/media/produit/drapeau/";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                $this->load->library('upload');
                $this->upload->initialize($config);

                if($drapeau != ""){
                    $drapeau = $this->chaine_aleatoire(8).$drapeau;
                    if(!$this->upload->do_upload('drapeau',$drapeau)){
                        $error = array('error' => $this->upload->display_errors()." drapeau");
                        $this->load->templateAdmin('voyage/add_voyage', $error);
                        return false;
                    }
                }
            }


            $result = $this->voyage->editerVoyage(
            $id,
            $image_slider_1,
            $image_slider_2,
            $image_slider_3,
            $titre,
            $phrase_accroche,
            $duree,
            $prix,
            $image_sous_slider,//
            $description_first_bloc,
            $description_second_bloc,
            $description_third_bloc,
            $drapeau,
            $capital,
            $continent,
            $meteo_image,//
            $meteo_temperature,
            $picto_1,//
            $picto_2,//
            $picto_3,//
            $picto_4,//
            $picto_5,//
            $picto_6,//
            $villes_principales,
            $religion,
            $nombre_habitant,
            $monnaie,
            $fete,
            $langue_officielle,
            $image_baniere_1,//
            $image_baniere_2,//
            $image_baniere_3,//
            $image_baniere_4,//
            $image_description_1,//
            $image_description_2,//
            $image_description_3,//
            $image_description_4,//
            $image_description_5,//
            $image_description_6,//
            $lattitude,
            $longitude);

            redirect('admin/voyages/liste', 'refresh');
        }

    }


}
