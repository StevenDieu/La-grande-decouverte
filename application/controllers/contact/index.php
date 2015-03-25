<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {
	
	function __construct() {
        parent::__construct();
    }

	function verifContact() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nom', 'nom', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prenom', 'prenom', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mail', 'mail', 'trim|required|xss_clean');
        $this->form_validation->set_rules('objet', 'objet', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'message', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->templatePages('contact');
        } else {
            $nom = $this->input->post('nom');
            $prenom = $this->input->post('prenom');
            $mail = $this->input->post('mail');
            $objet = $this->input->post('objet');
            $message = $this->input->post('message');
			
            // envoie_mail($mail,$objet,$message);
			
            redirect('pages/contact', 'refresh');
        }
    }
	
	function envoie_mail($mail,$objet,$message) {
		/*$this->load->library('email');

		$this->email->from($mail, $nom." ".$prenom);
		$this->email->to(this->$mail);
		
		$this->email->subject(this->$objet);
		$this->email->message(this->$message);

		$this->email->send();

		echo $this->email->print_debugger();*/
        return false;
	}
}
