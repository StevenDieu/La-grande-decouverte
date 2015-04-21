<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_actualite extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('actualite');
        $this->load->library('upload');
        $this->load->library('form_validation');
    }

    public function save() {
        //information générale
        $this->form_validation->set_rules('titre', 'titre', 'trim|xss_clean');
        $this->form_validation->set_rules('description', 'description', 'trim|xss_clean');


        if ($this->form_validation->run() == FALSE) {
            $this->load->templateUser('page_inscription');
        } else {
            //information générale
            $titre = $this->input->post('titre');
            $description = $this->input->post('description');

            $image_1 = $_FILES['image_1']["name"];
            $image_2 = $_FILES['image_2']["name"];
            $image_3 = $_FILES['image_3']["name"];

            if ($image_1 != "" || $image_2 != "" || $image_3 != "") {
                $this->upload->initialize($this->initailisationConfig("/Users/alex/Documents/htdocs/TVAFS-1.0/media/actualite/",
                    'gif|jpg|png','2048000','3000','2048'));

                $image_1 = $this->uploadImage($image_1,'image_1');
                $image_2 = $this->uploadImage($image_2,'image_2');
                $image_3 = $this->uploadImage($image_3,'image_3');
            }

            $result = $this->actualite->ajouterActualite($titre,$description,'','',$image_1,$image_2,$image_3);

            redirect('admin/actualites/liste', 'refresh');
        }
    }

    public function uploadImage($image,$name){
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

    public function edit() {
        $this->load->library('form_validation');

        //information générale
        $this->form_validation->set_rules('titre', 'titre', 'trim|xss_clean');
        $this->form_validation->set_rules('description', 'description', 'trim|xss_clean');
        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');


        if ($this->form_validation->run() == FALSE) {
            $this->load->templateUser('page_inscription');
        } else {
            //information générale
            $titre = $this->input->post('titre');
            $description = $this->input->post('description');

            $image_1 = $_FILES['image_1']["name"];
            $image_2 = $_FILES['image_2']["name"];
            $image_3 = $_FILES['image_3']["name"];

            if ($image_1 != "" || $image_2 != "" || $image_3 != "") {
                $this->upload->initialize($this->initailisationConfig("/Users/alex/Documents/htdocs/TVAFS-1.0/media/actualite/",
                    'gif|jpg|png','2048000','3000','2048'));

                $image_1 = $this->uploadImage($image_1,'image_1');
                $image_2 = $this->uploadImage($image_2,'image_2');
                $image_3 = $this->uploadImage($image_3,'image_3');
            }
            $id = $this->input->post('id');

            $result = $this->actualite->editActualite($id, $titre,$description,'','',$image_1,$image_2,$image_3);

            redirect('admin/actualites/liste', 'refresh');
        }
    }

    public function delete() {
        $id = $this->input->get('id');

        $result = $this->actualite->deleteActualite($id);

        redirect('admin/actualites/liste', 'refresh');
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

    function initailisationConfig($upload_path,$allowed_types,$max_size,$max_width,$max_height){
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = $allowed_types;
        $config['max_size'] = $max_size;
        $config['max_width'] = $max_width;
        $config['max_height'] = $max_height;

        return $config;
    }

}
