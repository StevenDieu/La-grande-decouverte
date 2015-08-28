<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Newsletters extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/connexion', 'refresh');
        }
        $this->load->helper(array('form'));
        $this->load->model('user');
        $this->load->model('newsletter');

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
    }

    public function liste() {
        $crud = new grocery_CRUD();

        $crud->set_table('newsletter');
        $crud->set_subject('Abonnés à la newsletter');
        $crud->unset_add();
        $crud->unset_edit();

        $crud->callback_column('nom', array($this, 'nom_client'));
        $crud->callback_column('prenom', array($this, 'prenom_client'));

        $output = $crud->render();
        $this->_example_output($output);
    }

    function nom_client($value, $row) {
        $mail = $row->mail;
        $this->user->setMail($mail);

        $result = $this->user->getByMail();
        if ($result) {
            return $result[0]->nom;
        } else {
            return '--';
        }
    }

    function prenom_client($value, $row) {
        $mail = $row->mail;
        $this->user->setMail($mail);

        $result = $this->user->getByMail();
        if ($result) {
            return $result[0]->prenom;
        } else {
            return '--';
        }
    }

    public function _example_output($output = null) {
        $this->load->templateAdmin('newsletter/list', $output);
    }

    public function offices() {
        $output = $this->grocery_crud->render();

        $this->_example_output($output);
    }

    function create() {
        $data["librairieCss"] = array("font-awesome.min", "froala_editor.min", "froala_style.min");
        $data["librairieJs"] = array(
            "froala_editor.min",
            "plugins/tables.min",
            "plugins/lists.min",
            "plugins/colors.min",
            "plugins/media_manager.min",
            "plugins/font_family.min",
            "plugins/font_size.min",
            "plugins/block_styles.min",
            "plugins/video.min",
            "langs/fr"
        );
        $data["adminJs"] = array("newsletter/create");
        $this->load->templateAdmin('newsletter/create', $data);
    }

    public function index() {
        $this->_example_output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }

    public function send() {
        $this->load->library('phpmailer');

        $contenu = $this->input->post('contenu');
        $titre = $this->input->post('titre');

        if (!isset($contenu) || empty($contenu) || !isset($titre) || empty($titre)) {
            echo "0";
            return;
        }
        $newsletters = $this->newsletter->getNewsletters();

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
        $mail->SetFrom("lagrandedecouverte.contact@gmail.com", 'La grande decouverte');

        $mail->Subject = $titre;
        $mail->Body = str_replace("style/", "style", $contenu);
        foreach ($newsletters as $newsletter) {
            if ($newsletter->mail != null) {
                $mail->AddAddress($newsletter->mail);
            }
        }
        $mail->Send();
        echo "1";
    }

    public function upload() {
        $allowedExts = array("gif", "jpeg", "jpg", "png");

        $temp = explode(".", $_FILES["file"]["name"]);

        $extension = end($temp);

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $_FILES["file"]["tmp_name"]);
        if ((($mime == "image/gif") || ($mime == "image/jpeg") || ($mime == "image/pjpeg") || ($mime == "image/x-png") || ($mime == "image/png")) && in_array($extension, $allowedExts)) {
            // Generate new random name.

            $name = sha1(microtime()) . "." . $extension;

            // Save file in the uploads folder.
            move_uploaded_file($_FILES["file"]["tmp_name"], getcwd() . "/media/newsletter/" . $name);

            // Generate response.
            $response = new StdClass;
            $response->link = base_url('/media/newsletter') . "/" . $name;
            echo stripslashes(json_encode($response));
        }
    }

    public function delete() {
        if (!$this->session->userdata('logged_in')) {
            echo 'co';
            die;
        }

        $src = $_POST["src"];
        $src = str_replace('http://localhost/TVAFS-1.0', getcwd(), $src);


        if (file_exists($src)) {
            unlink($src);
        }
    }

}
