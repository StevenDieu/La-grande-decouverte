<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function onepage() {
        $data["allCss"] = array("onepage");
        $data["alljs"] = array("onepage");
        $this->load->templateCheckout('/onepage', $data);
    }
    
}
