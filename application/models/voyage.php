<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Voyage extends CI_Model {

    function _construct() {
        // Call the Model constructor
        parent::_construct();
    }

    function ajouterVoyage(
        $image_slider_1,//
        $image_slider_2,//
        $image_slider_3,//
        $titre,
        $phrase_accroche,
        $duree,
        $prix,
        $image_sous_slider,//
        $description_first_bloc,
        $description_second_bloc,
        $description_third_bloc,
        $drapeau,//
        $capital,
        $continent,
        $meteo_image,//
        $meteo_temperature,
        $picto_1,//
        $picto_2,//
        $picto_3,//
        $picto_4,//
        $picto_5,//
        $picto_6,//
        $villes_principales,
        $religion,
        $nombre_habitant,
        $monnaie,
        $fete,
        $langue_officielle,
        $image_baniere_1,//
        $image_baniere_2,//
        $image_baniere_3,//
        $image_baniere_4,//
        $image_description_1,//
        $image_description_2,//
        $image_description_3,//
        $image_description_4,//
        $image_description_5,//
        $image_description_6,//
        $lattitude,
        $longitude
        ) {
        $this->db->set('image_slider_1', $image_slider_1);
        $this->db->set('image_slider_2', $image_slider_2);
        $this->db->set('image_slider_3', $image_slider_3);
        $this->db->set('titre', $titre);
        $this->db->set('phrase_accroche', $phrase_accroche);
        $this->db->set('duree', $duree);
        $this->db->set('prix', $prix);
        $this->db->set('image_sous_slider', $image_sous_slider);
        $this->db->set('description_first_bloc', $description_first_bloc);
        $this->db->set('description_second_bloc', $description_second_bloc);
        $this->db->set('description_third_bloc', $description_third_bloc);
        $this->db->set('drapeau', $drapeau);
        $this->db->set('capital', $capital);
        $this->db->set('continent', $continent);
        $this->db->set('meteo_image', $meteo_image);
        $this->db->set('meteo_temperature', $meteo_temperature);
        $this->db->set('picto_1', $picto_1);
        $this->db->set('picto_2', $picto_2);
        $this->db->set('picto_3', $picto_3);
        $this->db->set('picto_4', $picto_4);
        $this->db->set('picto_5', $picto_5);
        $this->db->set('picto_6', $picto_6);
        $this->db->set('villes_principales', $villes_principales);
        $this->db->set('religion', $religion);
        $this->db->set('nombre_habitant', $nombre_habitant);
        $this->db->set('monnaie', $monnaie);
        $this->db->set('fete', $fete);
        $this->db->set('langue_officielle', $langue_officielle);
        $this->db->set('image_baniere_1', $image_baniere_1);
        $this->db->set('image_baniere_2', $image_baniere_2);
        $this->db->set('image_baniere_3', $image_baniere_3);
        $this->db->set('image_baniere_4', $image_baniere_4);
        $this->db->set('image_description_1', $image_description_1);
        $this->db->set('image_description_2', $image_description_2);
        $this->db->set('image_description_3', $image_description_3);
        $this->db->set('image_description_4', $image_description_4);
        $this->db->set('image_description_5', $image_description_5);
        $this->db->set('image_description_6', $image_description_6);
        $this->db->set('lattitude', $lattitude);
        $this->db->set('longitude', $longitude);

        $this->db->insert('voyage');
        
        return $this->db->insert_id();
    }

    function getVoyage($id) {
        $this->db->select('*');
        $this->db->from('voyage');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}

?>