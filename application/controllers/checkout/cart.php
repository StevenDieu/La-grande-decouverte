<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function onepage() {

	    $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');
	    $this->form_validation->set_rules('idInfo', 'idInfo', 'trim|xss_clean');

	    if ($this->form_validation->run() == FALSE) {
            redirect('pages', 'refresh');
        } else {
        	$id = $this->input->post('id');
            $idInfo = $this->input->post('idInfo');
        }

        $data["allCss"] = array("checkout/style","checkout/responsive","checkout/uniform.default");
        $data["alljs"] = array("checkout/custom");
        $this->load->templateCheckout('/onepage', $data);
    }

    public function billing(){
        $this->load->view('checkout/step/billing');
    }
    
}
