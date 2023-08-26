<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class View_model extends CI_Model {

    public function get_all_pengguna() 
    {
        return $this->db->get('tb_pengguna');
    }

    public function get_data_pemohon()
    {
        return $this->db->get('tb_pemohon');
    }

    public function get_data_pesan()
    {
        return $this->db->get('tb_dokumen');
            
    }

    public function get_data_progress() 
    {
        return $this->db->get('tb_progress_pekerjaan');
    }

    function login($user,$pass)
    {
        $this->db->select('pass');
        $this->db->where('user', $user);
        $data = $this->db->get('tb_pengguna')->row_array();
        if (password_verify($pass, $data['pass'])) {
            $this->db->where('user', $user);
            $this->db->limit(1);
            return $this->db->get('tb_pengguna');
        }
    }
    
    /**
     * aktivasi
     * fungsi aktivasi pengguna baru
     * @param  mixed $id_pengguna
     * @return void
     */
    public function aktivasi($id_pengguna)
    {
        $data = array(
            'is_activate' => 1,
        );
        $this->db->where('id_pengguna', $id_pengguna);
        $this->db->update('tb_pengguna', $data);
    }
        
    /**
     * update_pengguna
     * 
     * @param  mixed $pengguna_id
     * @param  mixed $data
     * @return void
     */
    public function update_pengguna($pengguna_id, $data) {
        $this->db->where('id_pengguna', $pengguna_id);
        $this->db->update('tb_pengguna', $data);
    }  
    
    /**
     * joinPermohonan
     * inner join antara tb_progress ke tb_pemohon
     * @param  mixed $id_pemohonPE
     * @return void
     */
    public function joinPermohonan($id_pemohonPE)
    {
        $this->db->select('*');
        $this->db->from('tb_progress_pekerjaan');
        $this->db->join('tb_pemohon pemohon', 'pemohon.id_pemohonPE = tb_progress_pekerjaan.pemohon_idPR');
        $this->db->where('pemohon.id_pemohonPE', $id_pemohonPE);
        return $this->db->get()->row_array();
    }
    
    /**
     * joinDokumen
     * inner join antara tb_dokumen ke tb_pemohon
     * @param  mixed $dokumen_idPE
     * @return void
     */
    public function joinDokumen($dokumen_idPE)
    {
        $this->db->select('*');
        $this->db->from('tb_dokumen');
        $this->db->join('tb_pemohon pemohon', 'pemohon.dokumen_idPE = tb_dokumen.id_dokumenDO');
        $this->db->where('pemohon.dokumen_idPE', $dokumen_idPE);
        return $this->db->get()->row_array();
    }

}

?>