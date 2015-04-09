<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    public function connexion() {
    	$data["allCss"] = array("admin/main");
        $data["alljs"] = array("admin/main");
        $this->load->templateAdmin('/connexion', $data);    
    }
    
}
