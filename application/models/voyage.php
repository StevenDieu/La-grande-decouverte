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

    function editerVoyage(
        $id,
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


        $data = array(
            'titre' => $titre,
            'phrase_accroche' => $phrase_accroche,
            'duree' => $duree,
            'prix' => $prix,
            'description_first_bloc' => $description_first_bloc,
            'description_second_bloc' => $description_second_bloc,
            'description_third_bloc' => $description_third_bloc,
            'capital' => $capital,
            'continent' => $continent,
            'meteo_temperature' => $meteo_temperature,
            'villes_principales' => $villes_principales,
            'religion' => $religion,
            'nombre_habitant' => $nombre_habitant,
            'monnaie' => $monnaie,
            'fete' => $fete,
            'langue_officielle' => $langue_officielle,
            'lattitude' => $lattitude,
            'longitude' => $longitude,
            );

        if($image_slider_1 != ''){
            $data['image_slider_1'] = $image_slider_1;
        }
        if($image_slider_2 != ''){
            $data['image_slider_2'] = $image_slider_2;
        }
        if($image_slider_3 != ''){
            $data['image_slider_3'] = $image_slider_3;
        }
        if($picto_1 != ''){
            $data['picto_1'] = $picto_1;
        }
        if($picto_2 != ''){
            $data['picto_2'] = $picto_2;
        }
        if($picto_3 != ''){
            $data['picto_3'] = $picto_3;
        }
        if($picto_4 != ''){
            $data['picto_4'] = $picto_4;
        }
        if($picto_5 != ''){
            $data['picto_5'] = $picto_5;
        }
        if($picto_6 != ''){
            $data['picto_6'] = $picto_6;
        }
        if($meteo_image != ''){
            $data['meteo_image'] = $meteo_image;
        }
        if($image_baniere_1 != ''){
            $data['image_baniere_1'] = $image_baniere_1;
        }
        if($image_baniere_2 != ''){
            $data['image_baniere_2'] = $image_baniere_2;
        }
        if($image_baniere_3 != ''){
            $data['image_baniere_3'] = $image_baniere_3;
        }
        if($image_baniere_4 != ''){
            $data['image_baniere_4'] = $image_baniere_4;
        }
        if($image_description_1 != ''){
            $data['image_description_1'] = $image_description_1;
        }
        if($image_description_2 != ''){
            $data['image_description_2'] = $image_description_2;
        }
        if($image_description_3 != ''){
            $data['image_description_3'] = $image_description_3;
        }
        if($image_description_4 != ''){
            $data['image_description_4'] = $image_description_4;
        }
        if($image_description_5 != ''){
            $data['image_description_5'] = $image_description_5;
        }
        if($image_description_6 != ''){
            $data['image_description_6'] = $image_description_6;
        }
        if($image_sous_slider != ''){
            $data['image_sous_slider'] = $image_sous_slider;
        }
        if($drapeau != ''){
            $data['drapeau'] = $drapeau;
        }



        $this->db->where('id', $id);
        $this->db->update('voyage', $data);

        return true;
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

    function getVoyages() {
        $this->db->select('id, titre, prix');
        $this->db->from('voyage');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getContinent($id) {
        $this->db->select('*');
        $this->db->from('continent');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getContinents() {
        $this->db->select('*');
        $this->db->from('continent');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function addContinent($name) {
        $this->db->set('name', $name);
        $this->db->insert('continent');
        
        return $this->db->insert_id();
    }

    function editContinent($id,$name) {
        $data = array(
               'name' => $name,
            );

        $this->db->where('id', $id);
        $this->db->update('continent', $data);

        return true;
    }

    function deleteContinent($id) {
        $data = array(
               'id' => $id,
            );

        $this->db->where('id', $id);
        $this->db->delete('continent'); 

        return true;
    }

    function deleteVoyage($id) {
        $data = array(
               'id' => $id,
            );

        $this->db->where('id', $id);
        $this->db->delete('voyage'); 

        return true;
    }

}

?>