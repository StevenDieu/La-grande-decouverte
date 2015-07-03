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

    function add(
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
        $id_user
        ) {
            $this->db->set('nom', $nom);
            $this->db->set('prenom', $prenom);
            $this->db->set('societe', $societe);
            $this->db->set('email', $email);
            $this->db->set('adresse', $adresse);
            $this->db->set('complement_adresse', $complement_adresse);
            $this->db->set('code_postal', $code_postal);
            $this->db->set('ville', $ville);
            $this->db->set('id_departements', $region);
            $this->db->set('pays', $pays);
            $this->db->set('telephone', $telephone);
            $this->db->set('fax', $fax);
            $this->db->set('id_utilisateur', $id_user);

            $this->db->insert('billing');
            
            return $this->db->insert_id();
    }

    function getByIdUser($id){
        $this->db->select('*');
        $this->db->from('billing');
        $this->db->where('id_utilisateur', $id);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function edit(
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
        $id){
        $data = array(
               'nom' => $nom,
               'prenom' => $prenom,
               'societe' => $societe,
               'email' => $email,
               'adresse' => $adresse,
               'complement_adresse' => $complement_adresse,
               'code_postal' => $code_postal,
               'pays' => $pays,
               'telephone' => $telephone,
               'fax' => $fax,
               'id_utilisateur' => $id_user,
               'id_departements' => $region,
               'ville' => $ville,
            );

        $this->db->where('id', $id);
        $this->db->update('billing', $data); 
    }

}

?>