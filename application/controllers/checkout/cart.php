<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function onepage() {
        $data["allCss"] = array("checkout/style","checkout/responsive","checkout/uniform.default");
        $data["alljs"] = array("checkout/custom");
        $this->load->templateCheckout('/onepage', $data);
    }
    
}
