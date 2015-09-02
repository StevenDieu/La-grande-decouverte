<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Actualites extends CI_Controller {

    private $limit = 6;
    private $nbrActu = 6;

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('actualite');
    }

    public function partage() {
        $id_actualite = $this->input->get("idActu");
        if (!isset($id_actualite)) {
            redirect('actualites', 'refresh');
        }

        $this->actualite->setId($id_actualite);
        $data["actualite"] = $this->actualite->getActualite();

        if (!$data["actualite"]) {
            redirect('actualites', 'refresh');
        }

        foreach ($data["actualite"] as $actu) {
            $actu->date = $this->DateFr($actu->date);
        }

        $data["alljs"] = array("slide");
        $data["allCss"] = array("listeActu", "ficheProduit");
        $data["titre"] = "Page d'une actualite";
        $this->load->templateActualite('partage_actualite', $data);
    }

    public function index() {

        $data['activePaginate'] = true;

        $data["actualites"] = $this->actualite->getActualitesListe($this->limit, 0);
        $data['nbActu'] = $this->actualite->getCount();

        if ($data['nbActu'] <= 8) {
            $data['activePaginate'] = false;
        }
        $sess_array = array(
            'nbrActu' => count($data["actualites"])
        );
    
        $this->session->set_userdata('actu', $sess_array);
        if($data["actualites"] != false){
            foreach ($data["actualites"] as $actu) {
                $actu->date = $this->DateFr($actu->date);
            }
        }
        

        $data["alljs"] = array("slide", "ajaxPaginate");
        $data["allCss"] = array("listeActu", "ficheProduit");
        $data["titre"] = "Liste actualites";
        $this->load->templateActualite('list_actualite', $data);
    }

    function addInList() {
        $pagePost = $this->input->post('page');

        if (!isset($pagePost) && empty($pagePost)) {
            echo "0";
            return;
        }

        $acualites = $this->actualite->getActualitesListe($this->limit, $pagePost * $this->limit);

        if ($acualites) {
            $i = 0;
            $this->nbrActu = $this->session->userdata('actu')["nbrActu"];

            foreach ($acualites as $actualite) {
                $this->nbrActu++;

                $json["idActu"][$i] = $this->nbrActu;

                $imageActu = '<li> <img src=" ' . base_url('') . 'media/actualite/' . $actualite->img1 . '" alt="' . $actualite->img1 . '" ></li>';

                if ($actualite->img2) {
                    $imageActu = $imageActu . '<li><img src="' . base_url() . 'media/actualite/' . $actualite->img2 . '" alt="' . $actualite->img2 . '"></li>';
                }

                if ($actualite->img3) {
                    $imageActu = $imageActu . '<li><img src="' . base_url() . 'media/actualite/' . $actualite->img3 . '" alt="' . $actualite->img3 . '"></li>';
                }

                $json["id"][$i] = $actualite->id;
                $json["header"][$i] = '<li class="listElement-' . $actualite->id . ' uneActu act' . (($i % 3) + 1) . '"></li>';
                $json["content"][$i] = '
                                    <div class="filtre"></div>

                                    <div class="date">' . $this->DateFr($actualite->date) . '</div>

                                    <div class="description desc' . (($i % 3) + 1) . '">
                                        <p class="titre">' . $actualite->titre . '</p>
                                        <p class="description">' . $actualite->description . '</p>
                                    </div>

                                    <ul id="slider' . $this->nbrActu . '">
                                       ' . $imageActu . '
                                    </ul>

                                    <div class="reseau">
                                        <ul>
                                            <li class="gplus"><a target="_blank" href="https://plus.google.com/share?url=' . base_url("actualites/partage?idActu=") . $actualite->id . '"></a></li>
                                            <li class="facebook"><a target="_blank" href="http://www.facebook.com/share.php?u=' . base_url("actualites/partage?idActu=") . $actualite->id . '&title=' . $actualite->titre . '"></a></li>
                                            <li class="twitter"><a target="_blank" href="http://twitter.com/intent/tweet?status=' . $actualite->titre . '+' . base_url("actualites/partage?idActu=") . $actualite->id . '"></a></li>
                                            <li class = "link"><a target = "_blank" href = "http://www.linkedin.com/shareArticle?mini=true&url=' . base_url("actualites/partage?idActu=") . $actualite->id . '&title=' . $actualite->titre . '&source=[SOURCE/DOMAIN]"></a></li>
                                            <li class = "pinte"><a target = "_blank" href = "http://pinterest.com/pin/create/bookmarklet/?media=[MEDIA]&url=' . base_url("actualites/partage?idActu=") . $actualite->id . '&is_video=false&description=' . $actualite->titre . '"></a></li>
                                        </ul>
                                    </div>
                                    ';
                $i++;
            }
            $sess_array = array(
                'nbrActu' => $this->nbrActu
            );
            $this->session->set_userdata('actu', $sess_array);
            $json["page"] = "actu";
            $json["nbr_limit"] = $this->limit;
            $json["nbr_list"] = $i;
            echo json_encode($json);
            return;
        }
        echo "0";
    }

    private function DateFr($date) {
        $date = explode(' ', $date);
        $date = explode('-', $date[0]);

        if ($date[2][0] == 0)
            $date[2][0] = '';
        return $date[2] . ' ' . $this->getMonth($date[1]) . '



                        

                ' . $date[0];
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
