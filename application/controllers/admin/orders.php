<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Orders extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('order');
        $this->load->model('user');
        $this->load->model('participant');
        $this->load->model('voyage');
        $this->load->model('billing');
        $this->load->model('InfoVoyage');
        $this->load->model('orderGrid');
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('InfoVoyage');
        $this->load->library('grocery_CRUD');
    }

    public function liste() {
        $data["orders"] = $this->order->getOrders();
        foreach ($data["orders"] as $order) {
            $this->user->setId($order->id_utilisateur);
            $order->id_utilisateur = $this->user->get();
            $this->voyage->setId($order->id_voyage);
            $order->id_voyage = $this->voyage->getVoyage();
            $this->InfoVoyage->setId($order->id_info_voyage);
            $order->id_info_voyage = $this->InfoVoyage->getInfoVoyageById();
            if($order->payment == 'PAYPAL'){
                $order->payment = 'Paypal';
            }
            if($order->payment == 'CHECKMO'){
                $order->payment = 'Chèque';
            }
            if(!$this->orderGrid->getOrderByNum($order->id)){
                $this->orderGrid->add($order->id,
                    $order->date,
                    $order->id_utilisateur[0]->nom,
                    $order->id_utilisateur[0]->prenom,
                    $order->prix_total.' €',
                    $order->reste_a_payer.' €',
                    $order->payment,
                    $order->statut);
            }else{
                $this->orderGrid->editStatut($order->id,$order->statut);
            }
        }
        
        $crud = new grocery_CRUD();
        $crud->set_table('grid_order');
        $crud->set_subject('Commandes');
        $crud->display_as('numCommande','Commande n°');
        $crud->display_as('date','Date d\'achat');
        $crud->display_as('nom','Nom');
        $crud->display_as('prenom','Prénom');
        $crud->display_as('prix_total','Montant total');
        $crud->display_as('reste_a_payer','Reste à payer');
        $crud->display_as('payment','Méthode de paiement');
        $crud->callback_column('date',array($this,'date_modifier'));
        $crud->unset_add();
        $crud->unset_read();
        $crud->unset_delete();
        $output = $crud->render();
        $this->_example_output($output);


    }

    function date_modifier($value, $row)
    {
        $date = explode(' ',$row->date);
        $d = explode('-', $date[0]);

        return $d[2].'/'.$d[1].'/'.$d[0].' - '.$date[1];

        
    }

    public function _example_output($output = null)
    {
        $this->load->templateAdmin('orders/list', $output);
    }

    public function offices()
    {
        $output = $this->grocery_crud->render();
        $this->_example_output($output);
    }

    public function index()
    {
        $this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
    }

     public function edit() {
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

        if( $data["order"][0]->payment == 'PAYPAL'){
            $data["order"][0]->payment = 'Paypal';
        }
        if( $data["order"][0]->payment == 'CHECKMO'){
            $data["order"][0]->payment = 'Chèque';
        }

        $this->load->templateAdmin('orders/edit', $data);
    }

    public function facturer(){
        if ($this->input->get('id') == null) {
            redirect('admin/orders/liste', 'refresh');
        }

        $id_voyage = $this->input->get('id');
        $this->order->setId($id_voyage);
        $this->order->setStatut('Facturée');

        $this->order->editStatut();

        redirect('admin/orders/edit?id='.$id_voyage, 'refresh');
    }

    public function accompte(){
        if ($this->input->get('id') == null) {
            redirect('admin/orders/liste', 'refresh');
        }

        $id_voyage = $this->input->get('id');
        $this->order->setId($id_voyage);
        $this->order->setStatut('Accompte versé');

        $this->order->editStatut();

        redirect('admin/orders/edit?id='.$id_voyage, 'refresh');
    }

    public function annuler(){
        if ($this->input->get('id') == null) {
            redirect('admin/orders/liste', 'refresh');
        }

        $id_voyage = $this->input->get('id');
        $this->order->setId($id_voyage);
        $this->order->setStatut('Annulée');

        $this->order->editStatut();


        redirect('admin/orders/edit?id='.$id_voyage, 'refresh');

    }

}
