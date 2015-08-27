<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    private $nom;
    private $prenom;
    private $mail;
    private $objet;
    private $message;

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {
        $this->load->templatePages('contact');
    }

    function verification() {
        $this->form_validation->set_rules('nom', 'nom', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prenom', 'prenom', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mail', 'mail', 'trim|required|xss_clean');
        $this->form_validation->set_rules('objet', 'objet', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'message', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $data ["messageError"] = "Erreur lors de l'envoie du message.";
            $this->load->templatePages('contact', $data);
        } else {
            $this->nom = $this->input->post('nom');
            $this->prenom = $this->input->post('prenom');
            $this->mail = $this->input->post('mail');
            $this->objet = $this->input->post('objet');
            $this->message = $this->input->post('message');

            $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));

            $secret = '6LdLFAQTAAAAACM8KXqIYKU8Wfo_Hn4Kc_0ny8IH';

            $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptchaResponse;
            $response = @file_get_contents($url);
            
            $resultat = json_decode($response);

            if (!empty($resultat) && $resultat->success == true) {
                if ($this->envoie_mail()) {
                    $data ["messageSucess"] = "Votre message à bien été envoyer, nous vous répondrons dès que possible.";
                } else {
                    $data ["messageError"] = "Erreur! un probleme est survenu veuillez actualiser la page et reessayer.";
                }
            } else {
                $data ["messageError"] = "N'oubliez pas de dire que vous n'êtes pas un robot.";
            }

            $this->load->templatePages('contact', $data);
        }
    }

    function envoie_mail() {
        $this->load->library('phpmailer');
        if (isset($this->nom) && !empty($this->nom)) {
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
            $mail->SetFrom('lagrandedecouverte.contact@gmail.com', 'La grande decouverte');
            $mail->Subject = 'Mail site grande decouverte sujet : ' . $this->objet;
            $message = 'nom : ' . $this->nom . '<br/>'
                    . 'prenom : ' . $this->prenom . '<br/>'
                    . 'mail : ' . $this->mail . '<br/>'
                    . 'sujet : ' . $this->objet . '<br/>'
                    . '<br/><br/><br/>'
                    . 'message : <br/><br/>' . $this->message;
            $mail->Body = $message;
            $mail->AddAddress('lagrandedecouverte.contact@gmail.com');
            if ($mail->Send()) {
                return true;
            } else {
                return false;
            }
        }
        $this->load->templatePages('contact', $data);
    }

}
