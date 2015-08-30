<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Carnetsdevoyage extends CI_Controller {

    private $data;

    function __construct() {
        parent::__construct();
        $this->load->model('carnetVoyage');
        $this->load->model('Voyage');
        $this->load->model('article');
        $this->load->model('imagesFiche');

        $this->load->library('pagination');

        $this->load->model('user');
        $this->load->model('images');
        $this->load->model('continents');
    }

    public function index() {
        $perPage = 6;

        $this->data['carnetVoyage'] = $this->carnetVoyage->getAllCarnetVoyages($perPage, 0);
        $this->data['activePaginate'] = true;

        if (!empty($this->data['carnetVoyage'])) {
            $this->getImageCarnet();
            if (count($this->data['carnetVoyage']) < 5) {
                $this->data['activePaginate'] = false;
            }
        }


        $this->data["allCss"] = array("liste_carnet");
        $this->data["alljs"] = array("slide", "liste_carnet", "ajaxPaginate");

        $this->data["titre"] = "Liste carnets de voyage";
        $this->load->templateCarnet('/liste_carnet', $this->data);
    }

    private function getImageCarnet() {
        for ($i = 0; $i < count($this->data['carnetVoyage']); $i++) {
            $this->imagesFiche->setid_carnet_voyage($this->data['carnetVoyage'][$i]->cvId);
            $imagesCanetVoyage = $this->imagesFiche->getImagesCarnetVoyage();
            if ($imagesCanetVoyage) {
                $this->data['carnetVoyage'][$i]->lien[0] = $imagesCanetVoyage[0]->lien;
                $this->data['carnetVoyage'][$i]->nom[0] = "image carnet voyage " . ($i + 1);
            } else {
                $this->images->setId_voyage($this->data['carnetVoyage'][$i]->vId);
                $this->images->setEmplacement("image_slider");
                $this->data['images'] = $this->images->getImagesByVoyageEmplacement();
                $this->data['carnetVoyage'][$i]->lien[0] = $this->data['images'][0]->lien;
                $this->data['carnetVoyage'][$i]->nom[0] = $this->data['images'][0]->nom;
            }
        }
    }

    function addInList() {
        $pagePost = $this->input->post('page');
        if (!isset($pagePost) && empty($pagePost)) {
            echo "0";
            return;
        }
        $perPage = 6;   //nombres d'articles par page
        $page = $pagePost * $perPage;  //numero de page
        $carnetVoyages = $this->carnetVoyage->getAllCarnetVoyages($perPage, $page);
        if ($carnetVoyages) {
            $i = 0;
            foreach ($carnetVoyages as $carnetVoyage) {
                if (($i % 2) == 0) {
                    $right = "right";
                } else {
                    $right = "";
                }
                $json["id"][$i] = $carnetVoyage->vId;
                $json["header"][$i] = '<li class="listElement-' . $carnetVoyage->vId . ' voyage  ' . $right . '" style="display:none;"></li>';
                $json["content"][$i] = '    
                    <a href="<?php echo base_url("voyage/carnet") . "?id=" . $carnetVoyages[$i]->cvId ?>" >
                        <li class="carnet car1">
                            <div class="titre_sans_hover"><?php echo $carnetVoyages[$i]->cvTitre; ?></div>
                            <img src = "<?php echo base_url(); ?>media/<?php echo $carnetVoyages[$i]->lien[0]; ?>" alt = "<?php echo $carnetVoyages[$i]->nom[0]; ?>"/>
                            <div class="flou"></div>
                            <div class="legende">
                                <div class="containe">
                                    <span class="titre"><?php echo $carnetVoyages[$i]->cvTitre; ?></span>
                                    <div class="date_auteur"><span><?php echo $carnetVoyages[$i]->vTitre; ?></span></div>
                                    <div class="texte"><?php echo substr(strip_tags($carnetVoyages[$i]->vAccroche), 0, 370) . "..."; ?></div>
                                </div>
                                <span class="lien">Voir le carnet</span>
                            </div>
                        </li>
                    </a>';
                $i++;
            }
            $json["nbr_list"] = $i;
            echo json_encode($json);
            return;
        }
        echo "0";
    }

}
