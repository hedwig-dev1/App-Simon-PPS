<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mail_controller extends CI_Controller {

    public function index()
    {
        
        $guest = array(
            'pesan1' => 'Permohonan anda telah di tindak lanjuti harap membuka aplikasi untuk mendownload undangan pemaparan',
            'pesan2' => 'Permohonan anda telah di terima harap membuka aplikasi untuk melihat berkas yang kami berikan',
            'pesan3' => 'Maaf,Permohonan anda tidak dapat kami terima.',
            'pesan4' => 'Pekerjaan anda telah karena sudah berakhir. harap membuka aplikasi untuk melihat berkas yang kami berikan',
            'pesan5' => 'Maaf, pekerjaan anda selesai karena di hentikan. harap membuka aplikasi untuk melihat berkas yang kami berikan'
        );

        $seksi_pps = array(
            'pesan1' => 'Anda mempunyai data permohonan baru. harap tindak lanjuti dengan membuka aplikasi',
            'pesan2' => 'Anda mempunyai data progress pekerjaan baru. harap membuka aplikasi '
        );
    }
}


?>