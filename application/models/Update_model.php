<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Update_model extends CI_Model {
    
    /**
     * get_pengguna_id
     * fungsi untuk mengambil data pengguna berdasarkan id
     * @param  mixed $id_pengguna
     * @return void
     */
    function get_pengguna_id($id_pengguna) {
        $this->db->where('id_pengguna',$id_pengguna);
        return $this->db->get('tb_pengguna')->row();

    } 
    
    /**
     * delete_pengguna
     * fungsi delete pengguna
     * @param  mixed $id_pengguna
     * @return void
     */
    function delete_pengguna($id_pengguna) {
        $this->db->where('id_pengguna', $id_pengguna);
        $this->db->delete('tb_pengguna');  
        
    }


}

/* End of file Update_model.php */

?>