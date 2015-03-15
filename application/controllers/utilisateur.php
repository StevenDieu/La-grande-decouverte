<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

    /**
     *
     */
    public function index() {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['logger'] = true;
            $this->load->templateUtilisateur('developpement', $data);
        }else{
            $this->load->helper(array('form'));
            $data['logger'] = false;
            $this->load->templateUtilisateur('developpement', $data);
        }
    }

    public function accueil() {
        $data["css"] = "accueil";
        $this->load->templateUtilisateur('accueil', $data);
    }

    public function connexion() {
        $this->load->templateTemplates('connexion');
    }

    public function valider_connexion() {
        
    }

    public function inscription() {
        $this->load->helper(array('form'));
        $this->load->templateTemplates('inscription');
    }

    public function valider_inscription() {
        if ($this->input->post('submit')) {
            $nom = $this->input->post('nom');
            $prenom = $this->input->post('prenom');
            $user = $this->input->post('user');
            $mdp = $this->input->post('mdp');
            $cmdp = $this->input->post('cmdp');
            $email = $this->input->post('email');
            $cemail = $this->input->post('cemail');
            $form = Array($nom, $prenom, $user, $mdp, $cmdp, $email, $cemail);
            $formTexte = Array("nom", "prenom", "user", "mdp", "cmdp", "email", "cemail");

            $resul_asset_isset = asset_isset($form, $formTexte);
            if ($resul_asset_isset["flag"] == true) {
                $resul_nombre_caratere = nombre_caratere($form, $formTexte, -2);
                if ($resul_nombre_caratere["flag"] == true) {
                    if ($email == $cemail) {
                        if ($mdp == $cmdp) {
                            
                        } else {
                            $this->form_validation->set_message('check_database', 'Invalid username or password');
                        }
                    } else {
                        $this->form_validation->set_message('check_database', 'Invalid username or password');
                    }
                } else {
                    $this->form_validation->set_message('check_database', 'Invalid username or password');
                }
            } else {
                $this->form_validation->set_message('check_database', 'Invalid username or password');
            }
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
        }
    }

    public function fiche_voyage_descriptif() {
        $this->load->templateUtilisateur('fiche_voyage_descriptif');
    }

}
