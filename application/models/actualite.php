<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */
Class Actualite extends CI_Model {

    function _construct() {
        // Call the Model constructor
        parent::_construct();
    }

    function ajouterActualite($titre,$description,$date,$time,$image_1,$image_2,$image_3) {
        $this->db->set('titre', $titre);
        $this->db->set('description', $description);
        $this->db->set('time', $time);
        $this->db->set('time', $time);
        $this->db->set('image_1', $image_1);
        $this->db->set('image_2', $image_2);
        $this->db->set('image_3', $image_3);

        $this->db->insert('actualite');
        
        return $this->db->insert_id();
    }

    function getActualite($id) {
        $this->db->select('*');
        $this->db->from('actualite');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getActualites() {
        $this->db->select('*');
        $this->db->from('actualite');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function editActualite($id,$titre,$description,$date,$time,$image_1,$image_2,$image_3) {
        $data = array(
               'titre' => $titre,
               'description' => $description,
               'date' => $date,
               'time' => $time,
            );

        if($image_1 != ''){
            $data['image_1'] = $image_1;
        }
        if($image_2 != ''){
            $data['image_2'] = $image_2;
        }
        if($image_3 != ''){
            $data['image_3'] = $image_3;
        }

        $this->db->where('id', $id);
        $this->db->update('actualite', $data);

        return true;
    }

    function deleteActualite($id) {
        $this->db->where('id', $id);
        $this->db->delete('actualite'); 

        return true;
    }
}

?>