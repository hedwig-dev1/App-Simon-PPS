<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class View_model extends CI_Model {

    public function get_all_pengguna() 
    {
        return $this->db->get('tb_pengguna')->result();
    }

    public function get_data_pemohon()
    {
        return $this->db->get('tb_pemohon')->result();
    }

    public function get_data_progress() 
    {
        return $this->db->get('tb_progress_pekerjaan')->result();
    }

    public function aktivasi($id_pengguna)
    {
        $data = array(
            'is_activate' => 1,
        );
        $this->db->where('id_pengguna', $id_pengguna);
        $this->db->update('tb_pengguna', $data);
    }
    
    public function update_pengguna($pengguna_id, $data) {
        $this->db->where('id_pengguna', $pengguna_id);
        $this->db->update('tb_pengguna', $data);
    }
    

}

?>