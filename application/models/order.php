<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Order extends CI_Model {

    private $id;
    private $id_voyage;
    private $id_utilisateur;
    private $id_billing;
    private $id_info_voyage;
    private $nb_participant;
    private $payment;
    private $acompte;
    private $ip;
    private $prix_total;
    private $reste_a_payer;
    private $sous_total;
    private $taxe;
    private $date;

    function __construct() {
        parent::__construct();
    }

    function add() {

        $this->db->set('date', $this->date);
        $this->db->set('id_utilisateur', $this->id_utilisateur);
        $this->db->set('id_billing', $this->id_billing);
        $this->db->set('nb_participant', $this->nb_participant);
        $this->db->set('payment', $this->payment);
        $this->db->set('acompte', $this->acompte);
        $this->db->set('ip', $this->ip);
        $this->db->set('prix_total', $this->prix_total);
        $this->db->set('reste_a_payer', $this->reste_a_payer);
        $this->db->set('sous_total', $this->sous_total);
        $this->db->set('taxe', $this->taxe);
        $this->db->set('id_voyage', $this->id_voyage);
        $this->db->set('id_info_voyage', $this->id_info_voyage);
        $this->db->set('statut', 'Reçu');

        $this->db->insert('order');

        $this->id = $this->db->insert_id();
    }

    function getVoyageUtilisateur() {
        $this->db->select('*');
        $this->db->from('order');
        $this->db->where('id', $this->id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getVoyageUtilisateurs() {
        $this->db->select('id_voyage');
        $this->db->from('order');
        $this->db->where('id_utilisateur', $this->id_utilisateur);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    

    function getOrders() {
        $this->db->select('*');
        $this->db->from('order');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getOrder() {
        $this->db->select('*');
        $this->db->from('order');
        $this->db->where('id', $this->id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function editStatut(){
        $data = array(
               'statut' => $this->statut
            );

        $this->db->where('id', $this->id);
        $this->db->update('order', $data); 

    }

    function delete(){
        $this->db->where('id', $this->id);
        $this->db->delete('order');

        $this->db->where('numCommande', $this->id);
        $this->db->delete('order');

        return true;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_voyage($id_voyage) {
        $this->id_voyage = $id_voyage;
    }

    function setId_utilisateur($id_utilisateur) {
        $this->id_utilisateur = $id_utilisateur;
    }

    function setId_billing($id_billing) {
        $this->id_billing = $id_billing;
    }

    function setId_info_voyage($id_info_voyage) {
        $this->id_info_voyage = $id_info_voyage;
    }

    function setNb_participant($nb_participant) {
        $this->nb_participant = $nb_participant;
    }

    function setPayment($payment) {
        $this->payment = $payment;
    }

    function setAcompte($acompte) {
        $this->acompte = $acompte;
    }

    function setIp($ip) {
        $this->ip = $ip;
    }

    function setPrix_total($prix_total) {
        $this->prix_total = $prix_total;
    }

    function setReste_a_payer($reste_a_payer) {
        $this->reste_a_payer = $reste_a_payer;
    }

    function setSous_total($sous_total) {
        $this->sous_total = $sous_total;
    }

    function setTaxe($taxe) {
        $this->taxe = $taxe;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setStatut($statut) {
        $this->statut = $statut;
    }

    function getSum(){
        $this->db->select('prix_total');
        $this->db->from('order');
        $this->db->where('statut', 'Facturée');

        $query = $this->db->get();

        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getMoyenne(){
        $this->db->select('prix_total');
        $this->db->from('order');
        $this->db->where('statut', 'Facturée');

        $query = $this->db->get();

        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getLastOrder(){
        $this->db->select('*');
        $this->db->from('order');
        $this->db->where('statut', 'Facturée');
        $this->db->order_by("id", "desc");
        $this->db->limit(5);

        $query = $this->db->get();

        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function countOrderByCustomer(){
        $this->db->select('id');
        $this->db->distinct();
        $this->db->from('order');
        $this->db->where('statut !=', 'Annulée');
        $this->db->where('id_utilisateur', $this->id_utilisateur);
        $query = $this->db->get();
        return $query->num_rows();

    }

    function sumOrderByMonth(){
        $this->db->select('date,sum(prix_total) as sum');
        $this->db->from('order');
        $this->db->where('statut', 'Facturée');
        $this->db->group_by("MONTH(date)");
        $this->db->where('YEAR(date)', date('Y') );
        $query = $this->db->get();
        return $query->result();

    }

}
