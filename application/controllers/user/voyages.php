<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voyages extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            echo "co";
            die;
        }
        $this->load->model('voyage');
    }

    function mesvoyages() {
        $data["alljs"] = array("voyage");
        $data['username'] = $this->session->userdata('logged_in');
        $this->load->helper(array('form'));
        $data["voyage"] = $this->voyage->getVoyageOrderInfo($this->session->userdata('logged_in')["id"]);
        $this->load->view('user/voyages', $data);
    }

    function orderByVoyage() {
        $this->load->model('order');
        $this->load->model('billing');
        $this->load->model('user');
        $this->load->model('InfoVoyage');
        $this->load->model('participant');
        
        if ($this->input->get('id') == null) {
            redirect('admin/orders/liste', 'refresh');
        }

        $id_voyage = $this->input->get('id');
        $this->order->setId($id_voyage);
        $data["order"] = $this->order->getOrder();

        $data["order"][0]->id_billing = $this->billing->getByIdUser($data["order"][0]->id_utilisateur);

        $this->user->setId($data["order"][0]->id_utilisateur);
        $data["order"][0]->id_utilisateur = $this->user->get();

        $this->voyage->setId($data["order"][0]->id_voyage);
        $data["order"][0]->id_voyage = $this->voyage->getVoyage();

        $this->InfoVoyage->setId($data["order"][0]->id_info_voyage);
        $data["order"][0]->id_info_voyage = $this->InfoVoyage->getInfoVoyageById();

        $data["order"][0]->nb_participant = $this->participant->get($id_voyage);

        if ($data["order"][0]->payment == 'PAYPAL') {
            $data["order"][0]->payment = 'Paypal';
        }
        if ($data["order"][0]->payment == 'CHECKMO') {
            $data["order"][0]->payment = 'Chèque';
        }

        $this->load->view('user/recapVoyage', $data);
    }

}
