<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Actualites extends CI_Controller {

    function __construct() {
        parent::__construct();
        //recaptcha
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('actualite');
    }

    public function partage() {
        $id_actualite = $_GET["idActu"];
        if (!isset($id_actualite)) {
            redirect('actualites', 'refresh');
        }
        $data["alljs"] = array("slide");
        $data["allCss"] = array("listeActu","ficheProduit");
        $this->actualite->setId($id_actualite);
        $data["actualite"] = $this->actualite->getActualite();
        if(!$data["actualite"]){
            redirect('actualites', 'refresh');
        }
        foreach ($data["actualite"] as $actu) {
            $actu->date = $this->DateFr($actu->date);
        }
        $data["titre"] = "Page d'une actualite";
        $this->load->templateActualite('partage_actualite', $data);
    }

    public function index() {

        $data["alljs"] = array("slide");
        $data["allCss"] = array("listeActu","ficheProduit");

        $data["actualites"] = $this->actualite->getActualites();
        $data['nbActu'] = $this->actualite->getCount();
        foreach ($data["actualites"] as $actu) {
            $actu->date = $this->DateFr($actu->date);
        }
        $data["titre"] = "Liste actualites";
        $this->load->templateActualite('list_actualite', $data);
    }

    private function DateFr($date) {
        $date = explode(' ', $date);
        $date = explode('-', $date[0]);

        if ($date[2][0] == 0)
            $date[2][0] = '';
        return $date[2] . ' ' . $this->getMonth($date[1]) . ' ' . $date[0];
    }

    private function getMonth($month) {
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

}
