<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        //recaptcha
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    function verifContact() {


        $this->form_validation->set_rules('nom', 'nom', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prenom', 'prenom', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mail', 'mail', 'trim|required|xss_clean');
        $this->form_validation->set_rules('objet', 'objet', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'message', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $data ["error"] = -1;
            $this->load->templatePages('contact', $data);
        } else {
            $nom = $this->input->post('nom');
            $prenom = $this->input->post('prenom');
            $mail = $this->input->post('mail');
            $objet = $this->input->post('objet');
            $message = $this->input->post('message');

            $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));

            $secret = '6LdLFAQTAAAAACM8KXqIYKU8Wfo_Hn4Kc_0ny8IH';

            $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptchaResponse;
            $response=file_get_contents($url);
            $resultat = json_decode($response);
            if ($resultat->success == true) {
                $this->session->set_flashdata('flashSuccess', 'Google Recaptcha Successful');
                $data ["error"] = 1; 
            } else {
                $this->session->set_flashdata('flashSuccess', 'Sorry Google Recaptcha Unsuccessful!!');
                $data ["error"] = -2;  
            }

            $this->load->templatePages('contact', $data);
        }
    }

    function envoie_mail($mail, $objet, $message) {
        /* $this->load->library('email');

          $this->email->from($mail, $nom." ".$prenom);
          $this->email->to(this->$mail);

          $this->email->subject(this->$objet);
          $this->email->message(this->$message);

          $this->email->send();

          echo $this->email->print_debugger(); */
        return false;
    }

}
