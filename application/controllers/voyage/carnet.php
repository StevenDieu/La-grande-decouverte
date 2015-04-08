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
        $this->load->templateCarnet('/carnet', $data);
    }

    public function article(){
        $data["allCss"] = array("article");
        $data["alljs"] = array("slide","ficheVoyage");
        $this->load->templateCarnet('/article',$data);
    }

}
