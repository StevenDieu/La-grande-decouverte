<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_customer extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('user');
        $this->load->library('form_validation');
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

            $date = explode(' ',date("Y-m-d H:i:s"));
            $result = $this->actualite->editActualite($id,$titre,$description,$date[0],$date[1],$image_1,$image_2,$image_3);

            redirect('admin/actualites/liste', 'refresh');
        }
    }

    public function bannir() {
        $id = $this->input->get('id');
        $result = $this->user->bannir($id);

        redirect('admin/customer/liste', 'refresh');
    }

}
