<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15/03/15
 * Time: 18:47
 */

Class User extends CI_Model
{
    function login($username, $password)
    {
        $this -> db -> select('id, login, password');
        $this -> db -> from('utilisateur');
        $this -> db -> where('login', $username);
        $this -> db -> where('password', MD5($password));
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
}
?>