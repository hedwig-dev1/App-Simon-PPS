<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
        
    /**
     * insert_pengguna
     * fungsi tambah user atau pengguna baru
     * @param  mixed $data
     * @return void
     */
    function insert_pengguna($data){
        $this->db->insert('tb_pengguna', $data);
    }
    
    /**
     * save_data_pemohon
     * fungsi insert data untuk tb_pemohon, tb_progress_pekerjaan dan tb_dokumen
     * @param  mixed $data
     * @param  mixed $data_two
     * @param  mixed $data_three
     * @return void
     */
    function save_data_pemohon($data, $data_two, $data_three)
    {
        $this->db->insert('tb_pemohon', $data);
        $this->db->insert('tb_progress_pekerjaan', $data_two);
        $this->db->insert('tb_dokumen', $data_three);
    }
    
    /**
     * update_progress
     * fungsi update progess berdasarkan id_progPR
     * @param  mixed $data
     * @param  mixed $id_progPR
     * @return void
     */
    public function update_progress($data, $id_progPR) 
    {
        $this->db->where('id_progPR', $id_progPR);
        return $this->db->update('tb_progress_pekerjaan', $data);  
    }
    
              
    /**
     * insert_dokumen
     * fungsi update data dokumen berdasarkan id_dokumenDO
     * @param  mixed $data
     * @param  mixed $id_dokumenDO
     * @return void
     */
    function insert_dokumen($data, $id_dokumenDO)
    {
        $this->db->where('id_dokumenDO', $id_dokumenDO);
        $this->db->update('tb_dokumen', $data);
    }
}

/* End of file ModelName.php */

?>