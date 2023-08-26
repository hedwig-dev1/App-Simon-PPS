<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    
    /**
     * login
     * fungsi login
     * @param  mixed $username
     * @param  mixed $password
     * @return void
     */
    function login($username, $password)
    {
        $query = $this->db->query("SELECT * FROM tb_pengguna WHERE username='$username' LIMIT 1");
        return $query;
    }

}

/* End of file User_model.php */
?>