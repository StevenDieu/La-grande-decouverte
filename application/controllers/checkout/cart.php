<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends CI_Controller {

    private $id;

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
        $this->load->model('voyage');
    }

    public function facture_pdf() {
        $this->id = $this->input->get('id');
        if (isset($this->id) && !empty($this->id)) {
            $this->load->helper(array('dompdf', 'file'));
            $content = $this->generation_facture(true);
            if ($content === false) {
                redirect('pages/facture', 'refresh');
                return;
            }
            $titre = "facture - N° " . $this->id . " VOYAGE LA GRANDE DECOUVERTE";
            $data = pdf_create($content, $titre, true);
            write_file('name', $data);
            return;
        }
        redirect('pages/facture', 'refresh');
    }

    private function generation_facture($pdf) {
        $this->load->helper("facture");
        $this->load->model('order');
        $this->load->model('billing');
        $this->load->model('user');
        $this->load->model('InfoVoyage');
        $this->load->model('participant');

        if ($this->id == null) {
            redirect('admin/orders/liste', 'refresh');
        }

        $id_voyage = $this->id;
        $this->order->setId($id_voyage);
        $order = $this->order->getOrder();
        if (empty($order)) {
            return false;
        }
        $order[0]->id_billing = $this->billing->getByIdUser($order[0]->id_utilisateur);

        $this->user->setId($order[0]->id_utilisateur);
        $order[0]->id_utilisateur = $this->user->get();


        if ($this->session->userdata('logged_in')["id"] !== $order[0]->id_utilisateur[0]->id) {
            return false;
        }

        $this->voyage->setId($order[0]->id_voyage);
        $order[0]->id_voyage = $this->voyage->getVoyage();

        $this->InfoVoyage->setId($order[0]->id_info_voyage);
        $order[0]->id_info_voyage = $this->InfoVoyage->getInfoVoyageById();


        $order[0]->nb_participant = $this->participant->get($order[0]->id);
        if ($order[0]->payment == 'PAYPAL') {
            $order[0]->payment = 'Paypal';
        }
        if ($order[0]->payment == 'CHECKMO') {
            $order[0]->payment = 'Chèque';
        }

        if ($pdf) {
            return content_facture_pdf($order);
        }
        return content_facture_mail($order);
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

        $data["allCss"] = array("checkout/style", "checkout/responsive", "checkout/uniform.default");
        $data["alljs"] = array("checkout/custom");
        $data["id"] = $id;
        $data["idInfo"] = $idInfo;

        $this->load->model('cms');
        $this->cms->setCode('info_tunnel');
        $data["info_tunnel"] = $this->cms->getByCode();


        $info = $this->voyage->getInfoVoyageById($idInfo);
        $this->voyage->setId($id);
        $data["voyage"] = $this->voyage->getVoyage();
        $data["voyageInfo"] = $info;
        $data["voyageInfo"][0]->date_depart = $this->DateFr($data["voyageInfo"][0]->date_depart);
        $data["voyageInfo"][0]->date_arrivee = $this->DateFr($data["voyageInfo"][0]->date_arrivee);

        $data["prix"] = number_format($info[0]->prix, 2, '.', '');


        $this->load->templateCheckout('/onepage', $data);
    }

    public function billing() {
        if ($this->session->userdata('logged_in')['id']) {
            $id = $this->session->userdata('logged_in')['id'];
            $this->load->model('billing');
            $result = $this->billing->getByIdUser($id);
            if ($result) {
                $data['billing'] = $result;
            }
        }
        $this->load->model('departement');
        $data['departements'] = $this->departement->getAllDepartements();
        $this->load->view('checkout/step/billing', $data);
    }

    public function payment() {
        $this->load->view('checkout/step/payment');
    }

    public function recap() {
        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');
        $this->form_validation->set_rules('idInfo', 'idInfo', 'trim|xss_clean');
        $this->form_validation->set_rules('nbParticipant', 'nbParticipant', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            redirect('pages', 'refresh');
        } else {
            $id = $this->input->post('id');
            $idInfo = $this->input->post('idInfo');
            $nbParticipant = $this->input->post('nbParticipant');
        }

        $this->voyage->setId($id);
        $data["voyage"] = $this->voyage->getVoyage();
        $data["voyageInfo"] = $this->voyage->getInfoVoyageById($idInfo);

        $data["voyageInfo"][0]->date_depart = $this->DateFr($data["voyageInfo"][0]->date_depart);
        $data["voyageInfo"][0]->date_arrivee = $this->DateFr($data["voyageInfo"][0]->date_arrivee);

        $data["prixTotal"] = (float) $nbParticipant * $data["voyageInfo"][0]->prix;
        $data["sousTotal"] = (float) $data["prixTotal"] * 0.8;
        $data["taxe"] = (float) $data["prixTotal"] * 0.2;
        $data["acompte"] = (float) $data["prixTotal"] * 0.1;
        $data["resteAPayer"] = (float) $data["prixTotal"] * 0.9;

        $data["prixTotal"] = number_format($data["prixTotal"], 2, ',', ' ');
        $data["sousTotal"] = number_format($data["sousTotal"], 2, ',', ' ');
        $data["taxe"] = number_format($data["taxe"], 2, ',', ' ');
        $data["acompte"] = number_format($data["acompte"], 2, ',', ' ');
        $data["resteAPayer"] = number_format($data["resteAPayer"], 2, ',', ' ');

        $this->load->model('cms');
        $this->cms->setCode('cgv_tunnel');
        $data["cgv_tunnel"] = $this->cms->getByCode();

        $this->load->view('checkout/step/recap', $data);
    }

    public function participants() {
        $this->load->view('checkout/step/participants');
    }

    public function inscription() {
        $this->load->view('checkout/step/inscription');
    }

    public function login() {

        $this->form_validation->set_rules('mail', 'mail', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mdp', 'mdp', 'trim|required|xss_clean|callback_check_database_login');
        $this->load->model('images');

        if ($this->form_validation->run() == FALSE) {
            $res = array(
                'retour' => 'error',
                'message' => 'login ou mot de passe invalide'
            );
        } else {
            $mail = $this->input->post('mail');
            $mdp = $this->input->post('mdp');

            $this->user->setMail($mail);
            $this->user->setPassword($mdp);

            $result = $this->user->login();

            if ($result) {
                $sess_array = array();

                foreach ($result as $row) {
                    $sess_array = array(
                        'id' => $row->id,
                        'prenom' => $row->prenom,
                    );
                    $this->session->set_userdata('logged_in', $sess_array);
                }
                $this->session->set_userdata('logged_in', $sess_array);
                $res = array(
                    'retour' => 'connexion',
                    'message' => "L'utilisateur est connecte"
                );
            } else {
                $res = array(
                    'retour' => 'error',
                    'message' => 'login ou mot de passe invalide'
                );
            }
        }

        echo json_encode($res);
    }

    public function create() {

        $this->form_validation->set_rules('nom', 'nom', 'trim|required|xss_clean|callback_check_size_50');
        $this->form_validation->set_rules('prenom', 'prenom', 'trim|required|xss_clean|callback_check_size_50');
        $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('confirmer_email', 'confirmer_email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mdp', 'mdp', 'trim|required|xss_clean|callback_check_size|callback_check_size');
        $this->form_validation->set_rules('confirmer_mdp', 'confirmer_mdp', 'trim|required|xss_clean|callback_check_mdp');

        if ($this->form_validation->run() == FALSE) {
            $res = array(
                'retour' => 'error',
                'message' => "L'utilisateur n'a pas pu etre créé"
            );
        } else {

            $this->user->setMail($this->input->post('email'));
            $result = $this->user->check_mail_unique();

            if ($result) {
                $res = array(
                    'retour' => 'error',
                    'message' => "Le mail est déjà utilisé."
                );
            } else {
                $this->user->setNom($this->input->post('nom'));
                $this->user->setPrenom($this->input->post('prenom'));
                $this->user->setPassword($this->input->post('mdp'));
                $this->user->setMail($this->input->post('email'));
                $this->user->setDate_inscription(date("Y-m-d"));

                $result = $this->user->ajouterUser();
                if ($result != 0) {
                    $sess_array = array(
                        'id' => $result,
                        'prenom' => $this->input->post('prenom'),
                    );
                    $this->session->set_userdata('logged_in', $sess_array);
                    $res = array(
                        'retour' => 'creation',
                        'message' => "L'utilisateur est créé"
                    );
                }
            }
        }
        echo json_encode($res);
    }

    function check_size_50($valeur) {
        if (strlen($valeur) <= 50) {
            return true;
        }
        if ('%s' == "prenom") {
            $label = "Prenom";
        } else {
            $label = "Nom";
        }

        return false;
    }

    function check_database_user($user) {
        $result = $this->user->check_user($user);
        if ($result) {
            $this->form_validation->set_message('check_database', "Nom d'utilisateur déja utiliser");
            return false;
        } else {
            return true;
        }
    }

    function check_size($valeur) {
        if (strlen($valeur) >= 6 && strlen($valeur) <= 50) {
            return true;
        }
        if ('%s' == "mdp") {
            $label = "Mot de passe";
        } else {
            $label = "Nom d'utilisateur";
        }
        $this->form_validation->set_message('check_size', $label . ' doit être compris entre 6 et 50 caractères');
        return false;
    }

    function check_mdp() {
        $mdp = $this->input->post('mdp');
        $cmdp = $this->input->post('confirmer_mdp');

        if ($mdp == $cmdp) {
            return true;
        }
        $this->form_validation->set_message('check_mdp', 'Les mots de passe ne sont pas identiques');
        return false;
    }

    function DateFr($date) {
        $date = explode('-', $date);
        if ($date[2][0] == 0)
            $date[2][0] = '';
        return $date[2] . ' ' . $this->getMonth($date[1]) . ' ' . $date[0];
    }

    function getMonth($month) {
        $month_arr[1] = "Janvier";
        $month_arr[2] = "Février";
        $month_arr[3] = "Mars";
        $month_arr[4] = "Avril";
        $month_arr[5] = "Mai";
        $month_arr[6] = "Juin";
        $month_arr[7] = "Juillet";
        $month_arr[8] = "Août";
        $month_arr[9] = "Septembre";
        $month_arr[10] = "Octobre";
        $month_arr[11] = "Novembre";
        $month_arr[12] = "Décembre";

        return $month_arr[(int) $month];
    }

    function save() {
        $this->load->model('order');
        $this->load->model('billing');
        $this->load->model('participant');

        $this->form_validation->set_rules('order', 'order', 'required|xss_clean');
        $this->form_validation->set_rules('billing', 'billing', 'required|xss_clean');
        $this->form_validation->set_rules('participant', 'participant', 'required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $order = $this->input->post('order');
            $billing = $this->input->post('billing');
            $participants = $this->input->post('participant');
        }

        if (isset($billing["id"])) {
            //edit donnée billing
            $session_data = $this->session->userdata('logged_in');
            $user_id = $session_data['id'];
            $id_billing = $billing["id"];
            $this->billing->edit(
                    $billing["nom"], $billing["prenom"], $billing["societe"], $billing["email"], $billing["adresss"], $billing["complement_adresse"], $billing["codePostal"], $billing["ville"], $billing["region"], $billing["pays"], $billing["telephone"], $billing["fax"], $user_id, $billing["id"]
            );
        } else {
            //save donnée billing
            $session_data = $this->session->userdata('logged_in');
            $user_id = $session_data['id'];
            $id_billing = $this->billing->add(
                    $billing["nom"], $billing["prenom"], $billing["societe"], $billing["email"], $billing["adresss"], $billing["complement_adresse"], $billing["codePostal"], $billing["ville"], $billing["region"], $billing["pays"], $billing["telephone"], $billing["fax"], $user_id
            );
        }

        //save donnée order
        $this->order->setDate($order["date"]);
        $this->order->setId_utilisateur($user_id);
        $this->order->setId_billing($id_billing);
        $this->order->setNb_participant($order["nb_participant"]);
        $this->order->setPayment($order["payment"]);
        $this->order->setAcompte($order["acompte"]);
        $this->order->setIp($order["ip"]);
        $this->order->setPrix_total($order["prixTotal"]);
        $this->order->setReste_a_payer($order["resteAPayer"]);
        $this->order->setSous_total($order["sousTotal"]);
        $this->order->setTaxe($order["taxe"]);
        $this->order->setId_voyage($order["id_voyage"]);
        $this->order->setId_info_voyage($order["id_info_voyage"]);
        $this->order->add();

        //save participants
        foreach ($participants as $participant) {
            $this->participant->add(
                    $participant["nom"], $participant["prenom"], $participant["info"], $participant["dob"], $this->order->getId()
            );
        }

        //soustraction nombre participant au voyages
        $nbParticipant = (int) $order["nb_participant"];

        $this->load->model('infoVoyage');
        $this->infoVoyage->setId($order["id_info_voyage"]);
        $place = (int) $this->infoVoyage->getPlaceDispoById()[0]->place_dispo;

        $place = $place - $nbParticipant;

        $this->infoVoyage->updateQuantitePlace($place);

        if ($order["payment"] == "PAYPAL") {
            $res = array(
                'retour' => 'PAYPAL',
                'message' => ""
            );
            echo json_encode($res);
        } elseif ($order["payment"] == "CB") {
            $res = array(
                'retour' => 'CB',
                'message' => ""
            );
            echo json_encode($res);
        } else {
            $res = array(
                'retour' => 'CHECKMO',
                'message' => $this->order->getId()
            );
            echo json_encode($res);
        }

        $this->id = $this->order->getId();
        $this->generation_mail_facture();
    }

    private function generation_mail_facture() {
        $this->load->helper("facture");
        $this->load->library('phpmailer');
        $this->user->setId($this->session->userdata('logged_in')["id"]);
        $mailUser = $this->user->getMailUser();

        if ($mailUser[0]->mail != null) {
            define('GUSER', 'lagrandedecouverte.contact@gmail.com');
            define('GPWD', 'lagrandecouverte123456');
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;
            $mail->Username = GUSER;
            $mail->Password = GPWD;
            $mail->isHTML(true);
            $mail->SetFrom($mailUser[0]->mail, 'La grande decouverte');
            $mail->Subject = 'Confirmation commande LA GRANDE DECOUVERTE';
            $message = $this->generation_facture(false);
            $mail->Body = $message;
            $mail->AddAddress($mailUser[0]->mail);
            if ($mail->Send()) {
                return 1;
            } else {
                return 0;
            }
        }
    }

    function getSucces() {
        $data['increment_id'] = $this->input->post('increment_id');
        $this->load->view('checkout/success', $data);
    }

    function getCgv() {
        $this->load->view('checkout/step/cgv');
    }

    function cb() {
        $this->load->view('checkout/step/payment/cb');
    }

    function paypal() {
        $this->load->view('checkout/step/payment/paypal');
    }

    function verifConnexion() {
        if ($this->session->userdata('logged_in')) {
            $res = array(
                'retour' => true
            );
        } else {
            $res = array(
                'retour' => false
            );
        }
        echo json_encode($res);
    }

    function verifPlaceDispo() {


        $this->form_validation->set_rules('idInfo', 'idInfo', 'required|xss_clean');
        $this->form_validation->set_rules('nb_place_demande', 'nb_place_demande', 'required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $idInfo = $this->input->post('idInfo');
            $nb_place_demande = $this->input->post('nb_place_demande');

            $this->load->model('infoVoyage');
            $this->infoVoyage->setId($idInfo);
            $result = $this->infoVoyage->getPlaceDispoById();

            if ($nb_place_demande <= $result[0]->place_dispo) {
                $res = array(
                    'retour' => true
                );
            } else {
                $res = array(
                    'retour' => false,
                    'message' => 'Désolé, il ne reste plus que ' . $result[0]->place_dispo . ' place(s) disponible.'
                );
            }
            echo json_encode($res);
        }
    }

}
