<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/connexion', 'refresh');
        }
        $this->load->model('userAdmin', '', TRUE);
    }

    function index() {
        if ($this->session->userdata('logged_admin')) {
            $session_data = $this->session->userdata('logged_admin');
            $data['username'] = $session_data['username'];


            //chargement de toutes les données du dashboard
            $this->load->model('order');
            $this->load->model('user');
            $this->load->model('productView');
            $this->load->model('voyage');
            $this->load->model('newsletter');
            $data['somme'] = $this->order->getSum();
            $data['moyenne'] = $this->order->getMoyenne();
            $data['order_last'] = $this->order->getLastOrder();
            $data['view'] = $this->productView->getMoreView();
            $data['users'] = $this->user->getLastUser();
            $data['newsletter'] = $this->newsletter->getLastNewsletter();
            $data['graphique'] = $this->order->sumOrderByMonth();
            $data['log'] = $this->productView->getVisiteByMonth();

            $total = 0;
            $total_ligne = 0;
            foreach ($data['moyenne'] as $cmd) {
                $total += (int) str_replace(' ', '',$cmd->prix_total);
                $total_ligne ++;
            }
            $data['moyenne'] = number_format($total/$total_ligne,2,',',' ');

            $total = 0;
            foreach ($data['somme'] as $cmd) {
                $total += (int) str_replace(' ', '',$cmd->prix_total);
            }
            $data['somme'] = number_format($total,2,',',' ');


            if($data['order_last']){
                foreach ($data['order_last'] as $order) {
                    $this->user->setId($order->id_utilisateur);
                    $order->id_utilisateur = $this->user->get();
                }
            }
            

            foreach ($data['view'] as $view) {
                $this->voyage->setId($view->product_id);
                $view->product_id = $this->voyage->getVoyage();
            }

            foreach ($data['users'] as $user) {
                $this->order->setId_utilisateur($user->id);
                $user->description = $this->order->countOrderByCustomer();
            }

            $data["adminJs"] = array("dashboard/dashboard");

            $this->load->templateAdmin('dashboard', $data);
        } else {
            redirect('admin/connexion', 'refresh');
        }
    }

}
