<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Billing extends CI_Model {

    function _construct() {
        // Call the Model constructor
        parent::_construct();
    }

    function ajouterBilling(
        $nom,
        $prenom,
        $societe,
        $email,
        $adresse,
        $complement_adresse,
        $code_postal,
        $ville,
        $region,
        $pays,
        $telephone,
        $fax,
        $id_user,
        $complement_adresse
        ) {
            $this->db->set('nom', $nom);
            $this->db->set('prenom', $prenom);
            $this->db->set('societe', $societe);
            $this->db->set('email', $email);
            $this->db->set('adresse', $adresse);
            $this->db->set('complement_adresse', $complement_adresse);
            $this->db->set('code_postal', $code_postal);
            $this->db->set('ville', $ville);
            $this->db->set('region', $region);
            $this->db->set('pays', $pays);
            $this->db->set('telephone', $telephone);
            $this->db->set('fax', $fax);
            $this->db->set('id_user', $id_user);
            $this->db->set('increment_id', $increment_id);

            $this->db->insert('billing');
            
            return $this->db->insert_id();
    }
}

?>