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
        $image_slider_1,
        $image_slider_2,
        $image_slider_3,
        $titre,
        $phrase_accroche,
        $duree,
        $image_sous_slider,
        $description_first_bloc,
        $description_second_bloc,
        $description_third_bloc,
        $drapeau,
        $capital,
        $continent,
        $meteo_image,
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

        $this->db->where('idVoyage', $id);
        $this->db->delete('info_voyage'); 

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
        $this->db->select('id, titre');
        $this->db->from('voyage');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    
    function getVoyagesCustomer() {
        $this->db->select('id, titre, prix');
        $this->db->from('voyage');
        $this->db->where('id', $id);
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
        $this->db->where('id', $id);
        $this->db->delete('voyage'); 

        $this->db->where('idVoyage', $id);
        $this->db->delete('info_voyage'); 

        $this->db->where('idVoyage', $id);
        $this->db->delete('deroulement_voyage'); 

        return true;
    }

    //info voyage

    function addInfoVoyage(
        $date_depart,
        $date_arrivee,
        $depart,
        $arrivee,
        $formalite,
        $asavoir,
        $comprenant,
        $place_dispo,
        $prix,
        $special_price,
        $tva,
        $idVoyage
        ) {
        $this->db->set('date_depart', $date_depart);
        $this->db->set('date_arrivee', $date_arrivee);
        $this->db->set('depart', $depart);
        $this->db->set('arrivee', $arrivee);
        $this->db->set('formalite', $formalite);
        $this->db->set('asavoir', $asavoir);
        $this->db->set('comprenant', $comprenant);
        $this->db->set('place_dispo', $place_dispo);
        $this->db->set('prix', $prix);
        $this->db->set('special_price', $special_price);
        $this->db->set('tva', $tva);
        $this->db->set('idVoyage', $idVoyage);

        $this->db->insert('info_voyage');
        
        return $this->db->insert_id();
    }

    function editInfoVoyage(
        $id,
        $date_depart,
        $date_arrivee,
        $depart,
        $arrivee,
        $formalite,
        $asavoir,
        $comprenant,
        $place_dispo,
        $prix,
        $special_price,
        $tva,
        $idVoyage
        ) {
        $data = array(
            'date_depart' => $date_depart,
            'date_arrivee' => $date_arrivee,
            'depart' => $depart,
            'arrivee' => $arrivee,
            'formalite' => $formalite,
            'asavoir' => $asavoir,
            'comprenant' => $comprenant,
            'place_dispo' => $place_dispo,
            'prix' => $prix,
            'special_price' => $special_price,
            'tva' => $tva,
            'idVoyage' => $idVoyage
        );

        $this->db->where('id', $id);
        $this->db->where('idVoyage', $idVoyage);
        $this->db->update('info_voyage', $data);

        return true;
    }

    function deleteInfoVoyage($id) {
        $this->db->where('id', $id);
        $this->db->delete('info_voyage'); 

        return true;
    }

    function getInfoVoyage($id) {
        $this->db->select('*');
        $this->db->from('info_voyage');
        $this->db->where('idVoyage', $id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getInfoVoyageById($id) {
        $this->db->select('*');
        $this->db->from('info_voyage');
        $this->db->where('id', $id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getInfoVoyageMin($id){
        $this->db->select('*');
        $this->db->from('info_voyage');
        $this->db->where('idVoyage', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    //gestion déroulement voyage

    function addDeroulement(
        $titre,
        $texte,
        $photo,
        $jour,
        $idVoyage
        ) {
        $this->db->set('titre', $titre);
        $this->db->set('texte', $texte);
        $this->db->set('photo', $photo);
        $this->db->set('jour', $jour);
        $this->db->set('idVoyage', $idVoyage);

        $this->db->insert('deroulement_voyage');
        
        return $this->db->insert_id();
    }

    function editDeroulement(
        $id,
        $titre,
        $texte,
        $photo,
        $jour,
        $idVoyage
        ) {
        $data = array(
            'titre' => $titre,
            'texte' => $texte,
            'photo' => $photo,
            'jour' => $jour,
            'idVoyage' => $idVoyage
        );

        $this->db->where('id', $id);
        $this->db->where('idVoyage', $idVoyage);
        $this->db->update('deroulement_voyage', $data);

        return true;
    }

    function deleteDeroulement($id) {
        $this->db->where('id', $id);
        $this->db->delete('deroulement_voyage'); 

        return true;
    }

    function deleteDeroulementByidvoyage($id) {
        $this->db->where('id', $id);
        $this->db->delete('deroulement_voyage'); 

        return true;
    }

    function getAllDeroulementByVoyage($id) {
        $this->db->select('*');
        $this->db->from('info_voyage');
        $this->db->where('idVoyage', $id);
        $this->db->order_by("jour","asc");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}

?>