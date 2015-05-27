<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('faq');
    }

    function index() {
        $data["allCss"] = array("faq");
        $data["faqs"] = $this->faq->getAllVisible();

        $this->load->templateFaq('content', $data);
    }


}
