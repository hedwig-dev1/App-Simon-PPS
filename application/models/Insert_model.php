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
         $dataLog1 = array(
            'username' => $this->session->userdata('user'),
            'lvlAccess' => 'seksi-pps',
            'dateLog' => date('Y-m-d'),
            'activityProg' => 0,
            'sendMail' => 0,
            'keteranganLog' => 'Anda mempunyai data permohonan baru. harap tindak lanjuti dengan membuka aplikasi'
        );
        $this->db->insert('tb_log', $dataLog1);
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
        $dataLog1 = array(
            'username' => $this->session->userdata('user'),
            'lvlAccess' => 'seksi-pps',
            'dateLog' => date('Y-m-d'),
            'activityProg' => 0,
            'sendMail' => 0,
            'keteranganLog' => 'Anda mempunyai data progress pekerjaan baru. harap membuka aplikasi'
        );
        $this->db->insert('tb_log', $dataLog1);
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
    function insert_dokumen($data, $id_dokumenDO, $option)
    {
        $dataLog1 = array(
            'username' => $this->session->userdata('user'),
            'lvlAccess' => 'guest',
            'dateLog' => date('Y-m-d'),
            'activityProg' => 0,
            'sendMail' => 0,
        );
        
        switch ($option) {
            case '1':
               $dataLog1['keteranganLog'] = 'Permohonan anda telah di tindak lanjuti. buka aplikasi untuk melihat berkas yang baru masuk';
                break;
            case '2':
               $dataLog1['keteranganLog'] = 'Permohonan anda telah di terima harap membuka aplikasi untuk melihat berkas yang kami berikan';
                break;
            case '3':
               $dataLog1['keteranganLog'] = 'Maaf,Permohonan anda tidak dapat kami terima.';
                break;
            
            default:
                # code...
                break;
        }
        $this->db->insert('tb_log', $dataLog1);
        $this->db->where('id_dokumenDO', $id_dokumenDO);
        $this->db->update('tb_dokumen', $data);
    }
}

/* End of file ModelName.php */

?>