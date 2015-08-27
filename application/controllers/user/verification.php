<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Verification extends CI_Controller {

    private $id;
    private $prenom;
    private $mail;

    function __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->load->library('form_validation');
    }

    /*     * **** connexion *** */

    function login() {
        $this->form_validation->set_rules('mail', 'mail', 'trim|callback_requireMail|xss_clean');
        $this->form_validation->set_rules('mdp', 'mdp', 'trim|callback_requireMdp|xss_clean|callback_check_database_login');

        if ($this->form_validation->run() == FALSE) {
            $this->load->templateUser('page_connexion');
        } else {
            $this->user->setMail($this->input->post('mail'));

            if ($this->user->check_validation()) {
                $data["mail"] = $this->input->post('mail');
                $this->load->templateUser('page_attente_validation', $data);
            } else {
                $sess_array = array(
                    'id' => $this->id,
                    'prenom' => $this->prenom
                );
                $this->session->set_userdata('logged_in', $sess_array);

                redirect('user/account', 'refresh');
            }
        }
    }

    function requireMail($mail) {
        if ($mail == '') {
            $this->form_validation->set_message('requireMail', 'Le champ mail est obligatoire.');
            return false;
        }
        return true;
    }

    function requireMdp($mdr) {
        if ($mdr == '') {
            $this->form_validation->set_message('requireMail', 'Le champ mot de passe est obligatoire.');
            return false;
        }
        return true;
    }

    function check_database_login($mdp) {
        $this->user->setMail($this->input->post('mail'));
        $this->user->setPassword($mdp);
        $result = $this->user->login();

        if ($result) {

            foreach ($result as $row) {
                $this->id = $row->id;
                $this->prenom = $row->prenom;
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', "Le mail ou le mot de passe ne sont pas valides");
            return false;
        }
    }

    /*     * **** fin connexion *** */


    /*     * **** inscription *** */

    function inscription() {

        $this->form_validation->set_rules('nom', 'nom', 'trim|required|xss_clean|callback_check_size_50');
        $this->form_validation->set_rules('prenom', 'prenom', 'trim|required|xss_clean|callback_check_size_50');
        $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean|callback_check_email|callback_check_email_unique');
        $this->form_validation->set_rules('cemail', 'cemail', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mdp', 'mdp', 'trim|required|xss_clean|callback_check_size|callback_check_size');
        $this->form_validation->set_rules('cmdp', 'cmdp', 'trim|required|xss_clean|callback_check_mdp');

        if ($this->form_validation->run() == FALSE) {
            $this->load->templateUser('page_inscription');
        } else {
            $this->user->setNom($this->input->post('nom'));
            $this->user->setPrenom($this->input->post('prenom'));
            $this->user->setPassword($this->input->post('mdp'));
            $this->user->setMail($this->input->post('email'));
            $this->user->setDate_inscription(date("Y-m-d"));

            if ($this->user->ajouterUser()) {
                $this->mail = $this->input->post('email');
                $this->confirmation_user_mail();
                $data["mail"] = $this->input->post('email');
                $this->load->templateUser('page_validation_inscription', $data);
                return;
            }
            $this->load->templateUser('page_inscription');
        }
    }

    function check_email() {
        $email = $this->input->post('email');
        $cemail = $this->input->post('cemail');

        if ($email == $cemail) {
            return true;
        }
        $this->form_validation->set_message('check_email', 'Les adresses mails ne sont pas identiques');

        return false;
    }

    function check_email_unique() {
        $this->user->setMail($this->input->post('email'));
        $result = $this->user->check_mail_unique();


        if ($result) {
            $this->form_validation->set_message('check_email_unique', 'Le mail est déjà utilisé.');
            return false;
        }

        return true;
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
        $this->form_validation->set_message('check_size_50', $label . ' doit être inférieur à 50 caractères');

        return false;
    }

    /*     * **** fin inscription *** */

    function changeEmail() {
        if (!$this->session->userdata('logged_in')) {
            echo "co";
            die;
        }
        $this->form_validation->set_rules('mdp', 'mdp', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean|callback_change_email');
        if ($this->form_validation->run() == FALSE) {
            echo "0";
        } else {
            echo "1";
        }
    }

    function changeMdp() {
        if (!$this->session->userdata('logged_in')) {
            echo "co";
            die;
        }
        $this->form_validation->set_rules('mdp', 'mdp', 'trim|required|xss_clean');
        $this->form_validation->set_rules('nmdp', 'nmdp', 'trim|required|xss_clean|callback_change_mdp');
        if ($this->form_validation->run() == FALSE) {
            echo "0";
        } else {
            echo "1";
        }
    }

    function changeDescription() {
        if (!$this->session->userdata('logged_in')) {
            echo "co";
            die;
        }
        $this->form_validation->set_rules('nom', 'mdp', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prenom', 'nmdp', 'trim|required|xss_clean');
        $this->form_validation->set_rules('description', 'description', 'trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            echo "0";
        } else {
            $this->user->nom = $this->input->post('nom');
            $this->user->prenom = $this->input->post('prenom');
            $this->user->description = $this->input->post('description');
            $this->user->id = $this->session->userdata('logged_in')["id"];
            if ($this->user->setDescription()) {
                $sess_array = array(
                    'id' => $this->user->id,
                    'nom' => $this->user->nom,
                    'prenom' => $this->user->prenom,
                    'description' => $this->user->description,
                    'id_image' => $this->session->userdata('logged_in')["id_image"],
                    'lien_image' => $this->session->userdata('logged_in')["lien_image"],
                    'nom_image' => $this->session->userdata('logged_in')["nom_image"],
                    'user' => $this->session->userdata('logged_in')["user"]
                );
                $this->session->set_userdata('logged_in', $sess_array);
                echo "1";
            } else {
                echo "0";
            }
        }
    }

    function uploadProfile() {
        if (!$this->session->userdata('logged_in')) {
            echo 'co';
            die;
        }
        $this->load->view('user/myaccount/uploadImageProfile.php');
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
        $cmdp = $this->input->post('cmdp');

        if ($mdp == $cmdp) {
            return true;
        }
        $this->form_validation->set_message('check_mdp', 'Les mots de passe ne sont pas identiques');

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

    function change_email($email) {
        $this->user->id = $this->session->userdata('logged_in')["id"];
        $this->user->password = $this->input->post('mdp');
        $this->user->mail = $email;

        if ($this->user->verifPassUser()) {
            if ($this->user->setMail()) {
                return true;
            }
        }
        return false;
    }

    function change_mdp($nmdp) {
        $this->user->password = $this->input->post('mdp');
        $this->user->id = $this->session->userdata('logged_in')["id"];
        if ($this->user->verifPassUser()) {
            $this->user->password = $nmdp;
            if ($this->user->setMdp()) {
                return true;
            }
        }
        return false;
    }

    function changeDecrition() {
        $this->user->password = $this->input->post('mdp');
        $this->user->id = $this->session->userdata('logged_in')["id"];
        if ($this->user->verifPassUser()) {
            $this->user->password = $nmdp;
            if ($this->user->setMdp()) {
                return true;
            }
        }
        return false;
    }

    function reloadPassword() {
        $this->load->library('phpmailer');

        $this->form_validation->set_rules('mail', 'mail', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->templateUser('motDePasseOublie');
            return;
        }

        $this->user->setMail($this->input->post('mail'));

        if ($this->user->check_mail_unique()) {
            $token = $this->user->generate_token();

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
            $mail->SetFrom($this->input->post('mail'), 'La grande decouverte');
            $mail->Subject = 'Restaurer le mot de passe LA GRANDE DECOUVERTE';
            $message = mot_de_passe_oublier_mail(base_url() . 'user/account/motDePasseOublieMail?token=' . $token . '&mail=' . $this->input->post('mail'));
            $mail->Body = $message;
            $mail->AddAddress($this->input->post('mail'));
            if ($mail->Send()) {
                $data["message"] = "Un mail à été envoyé, vérifier votre boite de réception";
                $this->load->templateUser('motDePasseOublie', $data);
                return;
            } else {
                $data["message"] = "Un problème est survenu durant l'envoi du mail";
                $this->load->templateUser('motDePasseOublie', $data);
                return;
            }
        }
        $data["message"] = "L'email n'existe pas";
        $this->load->templateUser('motDePasseOublie', $data);
        return;
    }

    function return_confirmation_user_mail() {
        $email = $this->input->post('mail');
        if (isset($email) && !empty($email)) {
            $this->mail = $email;
            echo $this->confirmation_user_mail();
            return;
        }
        echo 0;
    }

    function confirmation_user_mail() {
        $this->load->library('phpmailer');


        if ($this->mail != null) {
            $this->user->setMail($this->mail);

            $token = $this->user->generate_token();

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
            $mail->SetFrom($this->mail, 'La grande decouverte');
            $mail->Subject = 'Confirmation compte LA GRANDE DECOUVERTE';
            $message = confirmation_user_mail(base_url() . 'user/account/confirmationUser?token=' . $token . '&mail=' . $this->mail);
            $mail->Body = $message;
            $mail->AddAddress($this->mail);
            if ($mail->Send()) {
                return 1;
            } else {
                return 0;
            }
        }
    }

    function reloadPasswordMail() {
        $this->form_validation->set_rules('mdp', 'mdp', 'trim|required|xss_clean');
        $this->form_validation->set_rules('cmdp', 'cmdp', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE && isset($_POST["token"]) && isset($_POST["mail"])) {
            $data["token"] = $_POST["token"];
            $data["mail"] = $_POST["mail"];
            $this->load->templateUser('motDePasseOublieMail', $data);
            return;
        }
        if (!isset($_POST["token"]) || !isset($_POST["mail"])) {
            redirect('pages', 'refresh');
            return;
        }
        if ($this->form_validation->run() == FALSE) {
            redirect('pages', 'refresh');
            return;
        }

        $this->user->setToken($_POST["token"]);
        $this->user->setMail($_POST["mail"]);
        if ($this->user->verif_token()) {
            if ($_POST["mdp"] == $_POST["cmdp"]) {
                $this->user->setPassword($_POST["mdp"]);
                if ($this->user->setMdpMail()) {
                    $data["message"] = "Votre mot de passe à bien été changé";
                    $this->load->templateUser('motDePasseOublieMail', $data);
                    return;
                }
                $data["messageRetour"] = "Un problème est survenu veuillez recommencer.";
                $this->load->templateUser('motDePasseOublieMail', $data);
                return;
            }
            $data["messageRetour"] = "Les mots de passe ne sont pas identiques";
            $data["token"] = $_POST["token"];
            $data["mail"] = $_POST["mail"];
            $this->load->templateUser('motDePasseOublieMail', $data);
            return;
        }
        redirect('pages', 'refresh');
        return;
    }

}
