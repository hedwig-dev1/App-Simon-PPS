<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Update_model extends CI_Model {

    function get_pengguna_id($id_pengguna) {
        $this->db->where('id_pengguna',$id_pengguna);
        return $this->db->get('tb_pengguna')->row();

    } 

    function delete_pengguna($id_pengguna) {
        $this->db->where('id_pengguna', $id_pengguna);
        $this->db->delete('tb_pengguna');  
        
    }

}

/* End of file Update_model.php */

?>