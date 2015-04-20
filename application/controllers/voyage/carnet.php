<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Carnet extends CI_Controller {

    /**
     * 
     */
    public function index() {
        $data["allCss"] = array("ficheVoyage");
        $data["alljs"] = array("slide","ficheVoyage");
        
//        if($this->input->get('id') == null) {
//            redirect('pages/index/', 'refresh');
//        }
        
        $this->load->model('carnetVoyage');
        
        $data['carnetVoyage'] = $this->carnetVoyage->getCarnetVoyage($this->input->get('id'));

//        if($data['carnetVoyage'] == null) {
//            redirect('pages/index/', 'refresh');
//        }

        $this->load->templateCarnet('/carnet', $data);
    }

    public function article(){
        $data["allCss"] = array("article");
        $data["alljs"] = array("slide","ficheVoyage");
        $this->load->templateCarnet('/article',$data);
    }

}
