<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    function insert_pengguna($data){
        $this->db->insert('tb_pengguna', $data);
    }

    function save_data_pemohon($data)
    {
        $this->db->insert('tb_pemohon', $data);
    }

    function insert_progress($data) 
    {
        $this->db->insert('tb_progress_pekerjaan', $data);  
    }
          
}

/* End of file ModelName.php */

?>