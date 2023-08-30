<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('email'); // Memuat helper email
    }

    function v_mailing($to, $body, $subject) {
        return sendMail($to, $body, $subject);
    }
    
    function getEmailPps() {
        $this->db->select('usermail');
        $this->db->where('level', 'seksi-pps');
        $query = $this->db->get('tb_pengguna');

        if ($query->num_rows() > 0) {
            $result = $query->result(); // Mengambil hasil query dalam bentuk array objek
            $emails = array();
            foreach ($result as $row) {
                $emails[] = $row->usermail; // Ambil alamat email dari setiap objek
            }
            return $emails;
        } else {
            return array(); // Mengembalikan array kosong jika tidak ada alamat email ditemukan
        }
    }

    function savePermohonan($dataOne, $dataTwo) {
        $guestLog = array(
            'sendTo'         => $this->session->userdata('level'),
            'email'          => $this->session->userdata('mail'),	
            'statusSend'     => 0,
            'dateLog'        => date('Y-m-d'), 	
            'keteranganLog' => 'Berhasil mengirimkan permohonan. Status sekarang menunggu konfirmasi dari pihak PPS'	
        );

        // Kirim email kepada pemohon
        $to = $guestLog['email'];
        $body = $guestLog['keteranganLog'];
        $subject = '[Terkirim] Permohonan '.ucwords($dataOne['nama_pkjPE']);
        if ($this->v_mailing($to, $body, $subject)) {
            $guestLog['statusSend'] = 1;
        } else {
            $guestLog['statusSend'] = 0;
        }
        $this->db->insert('tb_log', $guestLog);
        
        // Kirim email ke semua penerima seksi-pps
        $ppsEmails = $this->getEmailPps();
        if (!empty($ppsEmails)) {
            $ppsBody = 'Anda memiliki permohonan baru yang perlu dikonfirmasi.';
            $ppsSubject = '[INFO] Permohonan Baru Dari Dinas '. $this->session->userdata('nama_satker');
            
            foreach ($ppsEmails as $ppsEmail) {
                $this->v_mailing($ppsEmail, $ppsBody, $ppsSubject);
            }
        }

        // Lanjutkan proses penyimpanan data ke tabel lain
        $this->db->insert('tb_pemohon', $dataOne);
        $this->db->insert('tb_dokumen', $dataTwo);
    }
}



/* End of file Main_model.php and path \application\models\Guest\Main_model.php */
